<nav class="w-full bg-violet-600 border-b border-gray-300 shadow flex items-center justify-between">
    <div class="flex items-center">
        <a href="<?= base_url('/') ?>">
            <img src="<?= base_url('assets/images/devaway.png')?>" alt="Devaway Logo" class="h-16 w-48 p-4">
        </a>

        <div class="hidden md:flex text-white font-medium px-4">
            <a href="<?= base_url('talent') ?>" class="hover:text-violet-500">
                Find Talent
            </a>
        </div>

        <div class="hidden md:flex text-white font-medium px-4">
            <a href="<?= base_url('how') ?>" class="hover:text-violet-500">
                How It Works
            </a>
        </div>
    </div>
    <div class="text-white font-medium hidden md:flex mr-8">

        <a href="<?= base_url('apply') ?>" class="hover:text-violet-500 mt-2 mr-8">
            Apply as a Developer
        </a>
        <a href="<?= base_url('login') ?>" class="hover:text-violet-500 mt-2 mr-8">
            Log in
        </a>
        <a href="<?= base_url('signup') ?>" class="bg-white text-violet-600 hover:bg-violet-500 px-6 py-2 ml-6 rounded-full">
            Start Hiring
        </a>
    </div>

    <div class="md:hidden flex items-center mr-4">
        <button id="hamburger" class="text-white focus:outline-none">
            <img src="assets/images/hamburger.png" alt="Hamburger Icon" class="h-10 w-10">
        </button>
    </div>

    <div class="hidden absolute top-16 right-0 bg-violet-600 text-white w-48 py-2" id="menu">
        <a href="<?= base_url('how') ?>" class="block px-4 py-2 hover:text-violet-500">How It Works</a>
        <a href="<?= base_url('login') ?>" class="block px-4 py-2 hover:text-violet-500">Log in</a>
        <a href="<?= base_url('signup') ?>" class="block px-4 py-2 hover:text-violet-500">Start Hiring</a>
    </div>
</nav>
