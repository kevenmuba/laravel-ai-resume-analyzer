<!-- STEP 1: INPUT -->
<div x-show="step === 'input'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0" class="space-y-6 pt-2">
    
    <div class="text-center mb-6">
            <p class="text-gray-500 text-sm mt-1">Let's optimize your application</p>
    </div>

    <!-- Resume Input -->
    <div class="bg-gray-50 p-4 rounded-xl border border-gray-100">
        <div class="flex items-center justify-between mb-3">
                <div class="flex items-center space-x-2">
                <div class="bg-indigo-100 p-1.5 rounded-lg text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <span class="font-semibold text-gray-900">Resume Content</span>
            </div>
            <button class="text-indigo-600 text-sm font-medium bg-indigo-50 px-3 py-1 rounded-full hover:bg-indigo-100 transition flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                Upload PDF
            </button>
        </div>
        <textarea x-model="resumeText" class="w-full h-32 bg-transparent border-none focus:ring-0 text-gray-600 placeholder-gray-400 text-sm resize-none" placeholder="Paste your resume text here, or upload a file using the button above..."></textarea>
    </div>

    <!-- Job Description Input -->
    <div class="bg-gray-50 p-4 rounded-xl border border-gray-100">
        <div class="flex items-center justify-between mb-3">
            <div class="flex items-center space-x-2">
                    <div class="bg-orange-100 p-1.5 rounded-lg text-orange-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <span class="font-semibold text-gray-900">Job Description</span>
            </div>
            <button class="text-gray-500 text-sm hover:text-gray-700 transition flex items-center bg-gray-200 px-2 py-1 rounded">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                Paste
            </button>
        </div>
        <textarea x-model="jobText" class="w-full h-32 bg-transparent border-none focus:ring-0 text-gray-600 placeholder-gray-400 text-sm resize-none" placeholder="Paste the full job description here..."></textarea>
    </div>

        <!-- Pro Tip -->
    <div class="bg-indigo-50 p-4 rounded-xl border border-indigo-100 flex items-start space-x-3">
        <div class="mt-0.5 text-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" />
            </svg>
        </div>
        <div>
            <h4 class="text-sm font-semibold text-indigo-900 mb-1">Pro Tip</h4>
            <p class="text-xs text-indigo-700 leading-relaxed">For the best results, ensure your resume text includes your skills section and recent work history clearly.</p>
        </div>
    </div>

</div>
