<x-app-layout title="AI Resume Analyzer">
    
    <x-header />

    <!-- Content Area -->
    <main class="flex-grow overflow-y-auto px-4 pb-20 scroll-smooth">
        
        <x-step-input />

        <x-step-loading />

        <x-step-result />

    </main>

    <x-bottom-actions />

    @push('scripts')
    <script>
        function resumeApp() {
            return {
                step: 'input',
                resumeText: '',
                jobText: '',
                score: 0,
                pageTitle: 'New Analysis',
                
                // Content Data
                keywords: ['Project Management', 'Agile', 'SEO Strategy', 'Data Analysis'],
                actionItems: [
                    {
                        title: 'Quantify your impact',
                        desc: 'Add numbers (%, $) to your work history to show tangible results.',
                        bgClass: 'bg-indigo-50',
                        iconClass: 'text-indigo-600',
                        icon: '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" /></svg>'
                    },
                    {
                        title: 'Summary length',
                        desc: 'Your professional summary is a bit long. Aim for 3-4 concise lines.',
                        bgClass: 'bg-orange-50',
                        iconClass: 'text-orange-500',
                        icon: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>'
                    },
                    {
                        title: 'Education formatting',
                        desc: 'Consistent date formatting is missing in your education section.',
                        bgClass: 'bg-blue-50',
                        iconClass: 'text-blue-500',
                        icon: '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" /></svg>'
                    }
                ],

                analyze() {
                    // Start Loading
                    this.step = 'loading';
                    this.pageTitle = 'Analyzing...';
                    this.score = 0; // Reset score for animation

                    // Simulate API Delay
                    setTimeout(() => {
                        this.step = 'result';
                        this.pageTitle = 'Analysis Results';
                        
                        // Animate score from 0 to 85
                        setTimeout(() => this.score = 85, 100); 
                    }, 2500);
                },
                
                backToInput() {
                    this.step = 'input';
                    this.pageTitle = 'New Analysis';
                    this.score = 0;
                }
            }
        }
    </script>
    @endpush
</x-app-layout>
