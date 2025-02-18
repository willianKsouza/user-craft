<header class="flex justify-between items-center text-black font-semibold bg-blue-500 pt-4 pb-4 h-14 px-2">
    <a href="{{ route('users.index') }}">
        User Craft
    </a>

    <nav class="relative" x-data="{ open: false }">
        <nav class="hidden md:flex space-x-4">
            <a href="{{ route('users.index') }}" class="px-3 py-2 rounded hover:bg-blue-600 transition-colors">Home</a>
            <a href="{{ route('auth.create') }}" class="px-3 py-2 rounded hover:bg-blue-600 transition-colors">Add
                User</a>
        </nav>

        <button @click="open = !open" class="md:hidden p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 "
            aria-label="Toggle menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    x-bind:d="open ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'" />
            </svg>
        </button>

        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="absolute -right-2 top-10 w-48 bg-blue-500 shadow-lg mt-2 md:hidden">
            <div class="flex flex-col py-2">
                <a href="{{ route('users.index') }}"
                    class="px-4 py-2 hover:bg-blue-600 hover:text-white transition-colors">Home</a>
                <a href="{{ route('auth.create') }}"
                    class="px-4 py-2 hover:bg-blue-600 hover:text-white transition-colors">Add User</a>
            </div>
        </div>
    </nav>

</header>
