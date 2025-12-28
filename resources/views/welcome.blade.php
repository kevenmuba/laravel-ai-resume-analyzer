<x-app-layout title="AI Resume Analyzer">
    
<!-- Content Area -->
    <main class="flex-grow w-full h-full" x-data="resumeApp()">
        
        <!-- Reusable Alert Component (Floating) -->
        <div
            x-show="alert.show"
            x-transition
            class="fixed top-24 right-4 z-50 max-w-sm w-full"
            style="display: none;"
        >
            <div
                :class="alert.type === 'error'
                    ? 'bg-red-500/10 border-red-500/50 text-red-500'
                    : 'bg-green-500/10 border-green-500/50 text-green-500'"
                class="border rounded-xl p-4 shadow-xl backdrop-blur-md flex items-start space-x-3"
            >
                <div class="mt-0.5">
                    <template x-if="alert.type === 'error'">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10A8 8 0 11 2 10a8 8 0 0116 0zm-8-4a1 1 0 00-1 1v3a1 1 0 002 0V7a1 1 0 00-1-1zm0 7a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/>
                        </svg>
                    </template>
                </div>

                <div class="flex-1">
                    <p class="text-sm font-medium" x-text="alert.message"></p>
                </div>

                <button @click="alert.show = false" class="text-slate-400 hover:text-white transition">
                    ✕
                </button>
            </div>
        </div>

        <x-bottom-actions />

    </main>

   
    @push('scripts')
    <script>
        function resumeApp() {
            return {
                // -------------------------
                // State
                // -------------------------
                step: 'input',
                resumeText: '',
                jobText: '',
                score: 0,
                pageTitle: 'New Analysis',

                // Result Data
                keywords: [],
                actionItems: [],

                // Alert state
                alert: {
                    show: false,
                    message: '',
                    type: 'error' // error | success
                },

                // -------------------------
                // Helpers
                // -------------------------
                showAlert(message, type = 'error') {
                    this.alert.message = message;
                    this.alert.type = type;
                    this.alert.show = true;

                    setTimeout(() => {
                        this.alert.show = false;
                    }, 4000);
                },

                backToInput() {
                    this.step = 'input';
                    this.pageTitle = 'New Analysis';
                    this.score = 0;
                },

                async pasteJobDescription() {
                    try {
                        const text = await navigator.clipboard.readText();
                        if (!text) return this.showAlert('Clipboard is empty');
                        this.jobText = text;
                    } catch {
                        this.showAlert('Clipboard access denied');
                    }
                },

                async pasteResume() {
                    try {
                        const text = await navigator.clipboard.readText();
                        if (!text) return this.showAlert('Clipboard is empty');
                        this.resumeText = text;
                    } catch {
                        this.showAlert('Clipboard access denied');
                    }
                },

                // -------------------------
                // Analyze Resume
                // -------------------------
                async analyze() {
                    if (this.resumeText.length < 20 || this.jobText.length < 20) {
                        return this.showAlert(
                            'Please provide more detailed resume and job description text so our AI can analyze it properly.'
                        );
                    }

                    this.step = 'loading';
                    this.pageTitle = 'Analyzing...';
                    this.score = 0;
                    this.keywords = [];
                    this.actionItems = [];

                    try {
                        const response = await fetch('/api/analyze', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                            },
                            body: JSON.stringify({
                                resume: this.resumeText,
                                job: this.jobText
                            })
                        });

                        const data = await response.json();

                        if (!response.ok) {
                            throw new Error(
                                data.message || 
                                "Our AI couldn't generate a meaningful analysis for this input. Please try again."
                            );
                        }

                        // Success
                        this.step = 'result';
                        this.pageTitle = 'Analysis Results';
                        this.keywords = data.missing_skills || [];

                        const styles = [
                            { bg: 'bg-indigo-500/10', iconTxt: 'text-indigo-400', icon: '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" /></svg>' },
                            { bg: 'bg-orange-500/10', iconTxt: 'text-orange-400', icon: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>' },
                            { bg: 'bg-cyan-500/10', iconTxt: 'text-cyan-400', icon: '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z" /></svg>' }
                        ];

                        this.actionItems = (data.suggestions || []).map((suggestion, index) => {
                            const style = styles[index % styles.length];
                            return {
                                title: 'Suggestion ' + (index + 1),
                                desc: suggestion,
                                bgClass: style.bg,
                                iconClass: style.iconTxt,
                                icon: style.icon
                            };
                        });

                        setTimeout(() => {
                            this.score = data.score;
                        }, 100);

                    } catch (error) {
                        console.error(error);
                        this.showAlert(error.message);
                        this.backToInput();
                    }
                }
            }
        }
    </script>
    @endpush
</x-app-layout>
