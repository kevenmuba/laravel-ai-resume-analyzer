<header class="flex items-center justify-between p-4 bg-white sticky top-0 z-10">
    <template x-if="step !== 'input'">
        <button @click="backToInput()" class="p-2 rounded-full hover:bg-gray-100 transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </button>
    </template>
    <template x-if="step === 'input'">
            <button class="p-2 rounded-full hover:bg-gray-100 transition opacity-0 cursor-default">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
        </button>
    </template>

    <h1 class="text-lg font-bold text-gray-900" x-text="pageTitle"></h1>

    <button class="p-2 rounded-full hover:bg-gray-100 transition">
        <template x-if="step === 'result'">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
            </svg>
        </template>
        <template x-if="step !== 'result'">
                <div class="w-6 h-6"></div>
        </template>
    </button>
</header>
