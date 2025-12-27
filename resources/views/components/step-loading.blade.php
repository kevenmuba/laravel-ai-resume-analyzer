<!-- STEP 2: LOADING -->
<div x-show="step === 'loading'" x-cloak class="flex flex-col items-center justify-center h-[60vh] text-center space-b-6" 
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">

<div class="relative w-24 h-24 mb-6">
    <div class="absolute top-0 left-0 w-full h-full border-4 border-indigo-100 rounded-full"></div>
    <div class="absolute top-0 left-0 w-full h-full border-4 border-indigo-600 rounded-full border-t-transparent animate-spin"></div>
    <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-8 h-8 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg>
</div>

<h3 class="text-xl font-bold text-gray-900 mb-2">Analyzing Match...</h3>
<p class="text-gray-500 text-sm max-w-xs mx-auto">We are scanning your resume against the job description to find gaps and opportunities.</p>
</div>
