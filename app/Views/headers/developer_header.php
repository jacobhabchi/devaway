<nav class="w-full bg-violet-600 border-b border-gray-300 shadow flex items-center justify-between">
    <div class="flex items-center">
        <a >
            <img src="<?= base_url('assets/images/devaway.png')?>" alt="Devaway Logo" class="h-16 w-48 p-4">
        </a>
    </div>
    
    <div class="text-white font-medium hidden md:flex mr-8">

        <div class="text-white font-medium hidden md:flex mr-8">
            <a href="<?= base_url('logout') ?>" class="hover:text-violet-500 mt-2 mr-8">
                Log out
            </a>
        </div>

    </div>

    <div class="md:hidden flex items-center mr-4">
        <button id="hamburger" class="text-white focus:outline-none">
            <img src="assets/images/hamburger.png" alt="Hamburger Icon" class="h-10 w-10">
        </button>
    </div>

</nav>
