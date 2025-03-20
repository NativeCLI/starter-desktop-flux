<x-app-layout>
    <flux:heading size="xl" class="pb-3">
        <img src="{{ asset('images/logo.svg') }}" class="pb-3 dark:hidden" />
        <img src="{{ asset('images/logo-dark.svg') }}" class="pb-3 dark:flex" />
        Welcome to NativePHP for Desktop
    </flux:heading>

    <flux:separator class="mb-3" />

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
        {{-- Create cards with tailwind --}}
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Getting Started</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-2">Learn how to get started with NativePHP for Desktop.</p>
            <a href="https://nativephp.com/docs/desktop/1/getting-started/introduction" target="_browser" class="text-blue-600 dark:text-blue-400 mt-4 flex items-center">
                <span>Read the documentation</span>
            </a>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">NativePHP for Mobile</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-2">
                Learn how to build mobile applications with NativePHP for Mobile.
            </p>
            <a href="https://nativephp.com/mobile" target="_browser" class="text-blue-600 dark:text-blue-400 mt-4 flex items-center">
                <span>Check out the Early Access Program</span>
            </a>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Check out the code</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-2">
                Check out the code for NativePHP for Desktop on GitHub.
            </p>
            <a href="https://github.com/NativePHP" target="_browser" class="text-blue-600 dark:text-blue-400 mt-4 flex items-center">
                <span>Show me the code!</span>
            </a>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Join the Community</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-2">
                Join the NativePHP community to get help, share your projects, and more.
            </p>
            <a href="https://discord.gg/X62tWNStZK" target="_browser" class="text-blue-600 dark:text-blue-400 mt-4 flex items-center">
                <span>Join the Discord server</span>
            </a>
        </div>

        <div class="col-span-2 bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">NativeCLI</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-2">
                A command line tool designed to help you build NativePHP applications and start new ones with ease.
            </p>
            <a href="https://www.nativecli.com/" target="_browser" class="text-blue-600 dark:text-blue-400 mt-4 flex items-center">
                <span>Check out NativeCLI</span>
            </a>
        </div>
    </div>

    <script type="text/javascript">
        document.querySelectorAll('a[target="_browser"]').forEach((link) => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                require('electron').shell.openExternal(link.href);
            });
        });
    </script>
</x-app-layout>
