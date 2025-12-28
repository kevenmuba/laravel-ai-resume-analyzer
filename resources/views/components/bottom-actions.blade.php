
<div class="-mx-4 bg-slate-950 text-slate-50 relative z-10">

    <!-- d1: Hero Section -->
    <section class="relative pt-6 pb-20 overflow-hidden">
        <!-- Background Gradients -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-cyan-500/10 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 rounded-full bg-indigo-500/10 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6">
            <!-- Navbar Placeholder -->
            <nav class="flex items-center justify-between mb-16">
                <div class="flex items-center space-x-2">
                    <div class="bg-gradient-to-br from-cyan-400 to-indigo-500 w-8 h-8 rounded-lg flex items-center justify-center text-white font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight">ResumeAI</span>
                </div>
                <div class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-400">
                    <a href="#" class="hover:text-cyan-400 transition">Features</a>
                    <a href="#" class="hover:text-cyan-400 transition">How it Works</a>
                    <a href="#" class="hover:text-cyan-400 transition">About</a>
                </div>
                <button class="bg-slate-800 hover:bg-slate-700 text-cyan-400 px-5 py-2 rounded-full text-sm font-semibold transition border border-slate-700">
                    Start Free
                </button>
            </nav>

            <!-- Hero Content -->
            <div class="text-center max-w-4xl mx-auto space-y-8">
                <div class="inline-flex items-center px-3 py-1 rounded-full bg-slate-900 border border-slate-800 text-xs font-semibold text-cyan-400 mb-4">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 mr-2 animate-pulse"></span>
                    100% Free • No Sign-up Required
                </div>
                
                <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight leading-tight">
                    Land Your <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-indigo-500">Dream Job</span>
                </h1>
                
                <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                    AI-powered resume analysis that matches your skills to job requirements. 
                    Get instant feedback and optimize your application for success.
                </p>
                
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <button @click="$document.getElementById('analysis').scrollIntoView({behavior: 'smooth'})" 
                            class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-cyan-500 to-indigo-600 hover:from-cyan-400 hover:to-indigo-500 text-white font-bold rounded-xl shadow-lg shadow-cyan-500/20 transform hover:scale-[1.02] transition">
                        Analyze My Resume →
                    </button>
                    <button class="w-full sm:w-auto px-8 py-4 bg-slate-900 border border-slate-800 hover:bg-slate-800 text-slate-300 font-bold rounded-xl transition">
                        See How It Works
                    </button>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 max-w-2xl mx-auto pt-12 border-t border-slate-800 mt-12">
                    <div>
                        <div class="text-3xl font-bold text-white mb-1">50K+</div>
                        <div class="text-slate-500 text-sm">Resumes Analyzed</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-cyan-400 mb-1">95%</div>
                        <div class="text-slate-500 text-sm">Match Accuracy</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-indigo-400 mb-1">2min</div>
                        <div class="text-slate-500 text-sm">Average Time</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- d2: Features Section -->
    <section class="py-24 bg-slate-900 border-t border-slate-800 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-indigo-500">Powerful Features</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto">Everything you need to optimize your resume and stand out from the competition</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div class="bg-slate-950 p-8 rounded-2xl border border-slate-800 hover:border-cyan-500/30 transition group">
                    <div class="w-12 h-12 bg-slate-900 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition text-cyan-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">Smart Resume Parsing</h3>
                    <p class="text-slate-400 leading-relaxed">Advanced AI extracts and understands your skills, experience, and qualifications automatically.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-slate-950 p-8 rounded-2xl border border-slate-800 hover:border-cyan-500/30 transition group">
                    <div class="w-12 h-12 bg-slate-900 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition text-indigo-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">Job Match Analysis</h3>
                    <p class="text-slate-400 leading-relaxed">Compare your resume against any job description to see exactly how well you match.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-slate-950 p-8 rounded-2xl border border-slate-800 hover:border-cyan-500/30 transition group">
                    <div class="w-12 h-12 bg-slate-900 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition text-cyan-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">Instant Results</h3>
                    <p class="text-slate-400 leading-relaxed">Get comprehensive analysis in seconds, not hours. No waiting, no queues.</p>
                </div>
                 <!-- Feature 4 -->
                 <div class="bg-slate-950 p-8 rounded-2xl border border-slate-800 hover:border-cyan-500/30 transition group">
                    <div class="w-12 h-12 bg-slate-900 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition text-green-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">Improvement Suggestions</h3>
                    <p class="text-slate-400 leading-relaxed">Receive actionable tips to strengthen your resume and increase match scores.</p>
                </div>
                 <!-- Feature 5 -->
                 <div class="bg-slate-950 p-8 rounded-2xl border border-slate-800 hover:border-cyan-500/30 transition group">
                    <div class="w-12 h-12 bg-slate-900 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition text-indigo-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">Privacy First</h3>
                    <p class="text-slate-400 leading-relaxed">Your data is never stored or shared. Analysis happens securely and privately.</p>
                </div>
                 <!-- Feature 6 -->
                 <div class="bg-slate-950 p-8 rounded-2xl border border-slate-800 hover:border-cyan-500/30 transition group">
                    <div class="w-12 h-12 bg-slate-900 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition text-cyan-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">ATS Optimization</h3>
                    <p class="text-slate-400 leading-relaxed">Ensure your resume passes Applicant Tracking Systems with keyword optimization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- d3: Analysis Section (App) -->
    <section id="analysis" class="py-24 relative overflow-hidden">
         <div class="absolute top-0 left-0 w-full h-full bg-slate-900/50"></div>
         
         <div class="relative max-w-4xl mx-auto px-6">
             <!-- Header -->
             <div class="text-center mb-12" x-show="step === 'input'">
                 <h2 class="text-4xl font-bold mb-4 text-white">New Analysis</h2>
                 <p class="text-slate-400">Let's optimize your application</p>
             </div>

             <!-- INPUT STATE -->
             <div x-show="step === 'input'" 
                  x-transition:enter="transition ease-out duration-300" 
                  x-transition:enter-start="opacity-0 translate-y-4" 
                  x-transition:enter-end="opacity-100 translate-y-0"
                  class="space-y-6">
                  
                  <!-- Resume Input -->
                  <div class="bg-slate-900 rounded-xl border border-cyan-500/30 p-1 shadow-lg shadow-cyan-900/10">
                      <div class="bg-slate-950 rounded-lg p-6">
                          <div class="flex items-center justify-between mb-4">
                              <div class="flex items-center space-x-3">
                                  <div class="bg-cyan-500/10 p-2 rounded-lg text-cyan-400">
                                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                  </div>
                                  <span class="font-bold text-white">Resume Content</span>
                              </div>
                              <button @click="pasteResume()" class="text-xs bg-slate-900 hover:bg-slate-800 text-slate-400 hover:text-white px-3 py-1.5 rounded-lg border border-slate-800 transition flex items-center">
                                  <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                                  Paste
                              </button>
                          </div>
                          <textarea x-model="resumeText" class="w-full h-40 bg-transparent border-none focus:ring-0 text-slate-300 placeholder-slate-600 resize-none text-sm leading-relaxed" placeholder="Paste your resume text here..."></textarea>
                      </div>
                  </div>

                  <!-- Job Description Input -->
                  <div class="bg-slate-900 rounded-xl border border-indigo-500/30 p-1 shadow-lg shadow-indigo-900/10">
                      <div class="bg-slate-950 rounded-lg p-6">
                          <div class="flex items-center justify-between mb-4">
                              <div class="flex items-center space-x-3">
                                  <div class="bg-indigo-500/10 p-2 rounded-lg text-indigo-400">
                                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                  </div>
                                  <span class="font-bold text-white">Job Description</span>
                              </div>
                              <button @click="pasteJobDescription()" class="text-xs bg-slate-900 hover:bg-slate-800 text-slate-400 hover:text-white px-3 py-1.5 rounded-lg border border-slate-800 transition flex items-center">
                                  <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                                  Paste
                              </button>
                          </div>
                          <textarea x-model="jobText" class="w-full h-40 bg-transparent border-none focus:ring-0 text-slate-300 placeholder-slate-600 resize-none text-sm leading-relaxed" placeholder="Paste the full job description here..."></textarea>
                      </div>
                  </div>

                  <!-- Pro Tip -->
                  <div class="bg-slate-800/50 rounded-xl p-4 border border-slate-700/50 flex items-start space-x-4">
                      <div class="mt-0.5 text-cyan-400">
                          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                      </div>
                      <div>
                          <h4 class="text-sm font-semibold text-white mb-1">Pro Tip</h4>
                          <p class="text-xs text-slate-400">For the best results, ensure your resume text includes your skills section and recent work history clearly.</p>
                      </div>
                  </div>

                  <!-- Analyze Button -->
                  <button @click="analyze()" class="w-full bg-gradient-to-r from-cyan-500 to-indigo-600 hover:from-cyan-400 hover:to-indigo-500 text-white font-bold text-lg py-4 rounded-xl shadow-lg shadow-cyan-500/20 transform hover:scale-[1.01] transition active:scale-95 flex items-center justify-center space-x-2">
                       <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                       <span>Analyze Match</span>
                  </button>
             </div>

             <!-- LOADING STATE -->
             <div x-show="step === 'loading'" x-cloak class="flex flex-col items-center justify-center py-20 text-center"
                 x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                 
                 <div class="relative w-32 h-32 mb-8">
                     <div class="absolute top-0 left-0 w-full h-full border-4 border-slate-800 rounded-full"></div>
                     <div class="absolute top-0 left-0 w-full h-full border-4 border-cyan-400 rounded-full border-t-transparent animate-spin"></div>
                     <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-10 h-10 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                 </div>
                 
                 <h3 class="text-2xl font-bold text-white mb-3">Analyzing Match...</h3>
                 <p class="text-slate-400 max-w-sm mx-auto">We are scanning your resume against the job description to find gaps and opportunities.</p>
             </div>

             <!-- RESULT STATE -->
             <div x-show="step === 'result'" x-cloak
                 x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                 
                 <div class="bg-slate-900 rounded-3xl p-8 border border-slate-800 mb-8 text-center relative overflow-hidden">
                     <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cyan-400 to-indigo-500"></div>
                     <!-- Score Circle -->
                     <div class="relative w-48 h-48 mx-auto mb-6">
                         <svg class="w-full h-full transform -rotate-90" viewBox="0 0 100 100">
                             <circle class="text-slate-800 stroke-current" stroke-width="8" cx="50" cy="50" r="40" fill="transparent"></circle>
                             <circle class="text-cyan-400 stroke-current" stroke-width="8" stroke-linecap="round" cx="50" cy="50" r="40" fill="transparent" stroke-dasharray="251.2" :stroke-dashoffset="251.2 - (251.2 * score) / 100" style="transition: stroke-dashoffset 1.5s ease-out;"></circle>
                         </svg>
                         <div class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center">
                             <span class="text-5xl font-bold text-white" x-text="score"></span>
                             <span class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-2">Match Score</span>
                         </div>
                     </div>
                     
                     <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-green-500/10 text-green-400 text-sm font-semibold mb-4 border border-green-500/20">
                         <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                         Excellent Match
                     </div>
                     <p class="text-slate-400 max-w-lg mx-auto">Your resume is a strong match! We've identified a few areas for optimization below.</p>
                 </div>

                 <!-- Grid Results -->
                 <div class="grid md:grid-cols-2 gap-8">
                     <!-- Missing -->
                     <div>
                         <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                             <span class="w-2 h-2 rounded-full bg-red-400 mr-2"></span>
                             Missing Keywords
                         </h3>
                         <div class="flex flex-wrap gap-2">
                             <template x-for="keyword in keywords" :key="keyword">
                                 <span class="bg-red-500/10 text-red-400 px-3 py-1.5 rounded-lg text-sm border border-red-500/20" x-text="keyword"></span>
                             </template>
                             <div x-show="keywords.length === 0" class="text-slate-500 italic text-sm">No missing keywords found.</div>
                         </div>
                     </div>
                     <!-- Action Items -->
                     <div>
                         <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                             <span class="w-2 h-2 rounded-full bg-cyan-400 mr-2"></span>
                             Action Items
                         </h3>
                         <div class="space-y-4">
                             <template x-for="item in actionItems" :key="item.title">
                                 <div class="bg-slate-900 border border-slate-800 p-4 rounded-xl flex items-start space-x-3">
                                     <div class="mt-1 text-cyan-400">
                                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                     </div>
                                     <div>
                                         <h4 class="text-sm font-bold text-white mb-1" x-text="item.title"></h4>
                                         <p class="text-xs text-slate-400 leading-relaxed" x-text="item.desc"></p>
                                     </div>
                                 </div>
                             </template>
                         </div>
                     </div>
                 </div>
                 
                 <div class="mt-12 text-center">
                     <button @click="backToInput()" class="text-slate-500 hover:text-white transition flex items-center justify-center mx-auto space-x-2">
                         <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                         <span>Start New Analysis</span>
                     </button>
                 </div>
             </div>
         </div>
    </section>

    <!-- d4: Footer -->
    <footer class="bg-slate-950 border-t border-slate-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <div class="bg-slate-900 border border-slate-800 p-1.5 rounded-lg text-cyan-400">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <span class="font-bold text-white">ResumeAI</span>
                </div>
                <div class="flex space-x-8 text-sm text-slate-500">
                    <a href="#" class="hover:text-cyan-400 transition">About</a>
                    <a href="#" class="hover:text-cyan-400 transition">Privacy</a>
                    <a href="#" class="hover:text-cyan-400 transition">Terms</a>
                    <a href="#" class="hover:text-cyan-400 transition">Contact</a>
                </div>
                <div class="mt-4 md:mt-0 text-sm text-slate-600">
                    &copy; 2024 ResumeAI. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

</div>
