<!-- STEP 3: RESULT -->
<div x-show="step === 'result'" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" class="pt-2">

    <!-- Score Card -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 mb-6 text-center">
        <div class="relative w-40 h-40 mx-auto mb-4">
            <svg class="w-full h-full" viewBox="0 0 100 100">
                <!-- Background circle -->
                <circle class="text-gray-100 stroke-current" stroke-width="8" cx="50" cy="50" r="40" fill="transparent"></circle>
                <!-- Progress circle -->
                <circle class="text-indigo-600 progress-ring__circle stroke-current" stroke-width="8" stroke-linecap="round" cx="50" cy="50" r="40" fill="transparent" stroke-dasharray="251.2" :stroke-dashoffset="251.2 - (251.2 * score) / 100" style="transition: stroke-dashoffset 1.5s ease-out; transform: rotate(-90deg); transform-origin: 50% 50%;"></circle>
            </svg>
            <div class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center">
                <span class="text-4xl font-bold text-gray-900" x-text="score"></span>
                <span class="text-xs text-gray-400 font-medium uppercase tracking-wider mt-1">Total Score</span>
            </div>
        </div>
        
        <div class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-semibold mb-3">
            <svg class="w-4 h-4 mr-1.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            Excellent
        </div>
        <p class="text-gray-600 text-sm leading-relaxed px-2">Your resume is in the top 10% of candidates. Great job! A few tweaks and you're golden.</p>
    </div>

    <!-- Missing Keywords -->
    <div class="mb-8">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-gray-900">Missing Keywords</h3>
            <a href="#" class="text-xs font-semibold text-indigo-600 hover:text-indigo-700">Why is this important?</a>
        </div>
        <div class="flex flex-wrap gap-2">
            <template x-for="keyword in keywords" :key="keyword">
                    <div class="bg-red-50 text-red-600 px-3 py-2 rounded-lg text-sm font-medium border border-red-100 flex items-center transition hover:bg-red-100 cursor-pointer">
                    <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    <span x-text="keyword"></span>
                </div>
            </template>
        </div>
    </div>

    <!-- Action Items -->
    <div class="mb-24">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Action Items</h3>
            <div class="space-y-4">
            <template x-for="item in actionItems" :key="item.title">
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex items-start space-x-4 cursor-pointer hover:shadow-md transition">
                    <div class="flex-shrink-0 mt-1" :class="item.bgClass">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center" :class="item.iconClass">
                            <span x-html="item.icon"></span>
                        </div>
                    </div>
                    <div class="flex-grow">
                        <h4 class="font-bold text-gray-900 text-sm mb-1" x-text="item.title"></h4>
                        <p class="text-gray-500 text-xs leading-relaxed" x-text="item.desc"></p>
                    </div>
                    <svg class="w-5 h-5 text-gray-300 mt-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </template>
        </div>
    </div>

</div>
