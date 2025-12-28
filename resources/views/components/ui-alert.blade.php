<div
    x-show="alert.show"
    x-transition
    class="fixed inset-x-4 bottom-24 z-50 max-w-md mx-auto"
    x-cloak
>
    <div
        :class="alert.type === 'error'
            ? 'bg-red-50 border-red-200 text-red-800'
            : 'bg-green-50 border-green-200 text-green-800'"
        class="border rounded-xl p-4 shadow-lg flex items-start space-x-3"
    >
        <div class="mt-0.5">
            <template x-if="alert.type === 'error'">
                <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10A8 8 0 11 2 10a8 8 0 0116 0zm-8-4a1 1 0 00-1 1v3a1 1 0 002 0V7a1 1 0 00-1-1zm0 7a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/>
                </svg>
            </template>
        </div>

        <div class="flex-1">
            <p class="text-sm font-medium" x-text="alert.message"></p>
        </div>

        <button @click="alert.show = false" class="text-gray-400 hover:text-gray-600">
            ✕
        </button>
    </div>
</div>
