<!-- Fixed Bottom Action Button -->
<div class="absolute bottom-0 left-0 w-full bg-white/90 backdrop-blur-md p-4 border-t border-gray-100 z-20" x-show="step !== 'loading'">
    <div class="max-w-md mx-auto">
    <button 
        @click="analyze()"
        x-show="step === 'input'"
        class="w-full bg-indigo-600 text-white font-bold text-lg py-4 rounded-xl shadow-lg shadow-indigo-200 hover:bg-indigo-700 transform hover:scale-[1.02] transition active:scale-95 flex items-center justify-center space-x-2">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
        <span>Analyze Match</span>
    </button>
    
        <button 
        x-show="step === 'result'"
        class="w-full bg-indigo-600 text-white font-bold text-lg py-4 rounded-xl shadow-lg shadow-indigo-200 hover:bg-indigo-700 transform hover:scale-[1.02] transition active:scale-95 flex items-center justify-center space-x-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
        <span>Edit Resume</span>
    </button>
    </div>
</div>
