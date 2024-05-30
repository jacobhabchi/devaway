<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
</head>

<body>

    <nav class="w-full border-b border-gray-300 shadow rounder-lg">
        <div>
            <a href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/images/devaway_inverted.png') ?>" alt="Devaway Logo" class=" h-20 p-4">
            </a>
        </div>
    </nav>

    <div class=" max-w-md w-full mt-20 mx-auto bg-white rounded-lg border mb-8 p-12 border-gray-300 shadow-md">
        <h2 class=" text-3xl font-semibold text-gray-900 text-center mb-8">Sign up and access the world's best talent </h2>
        <form method="post" action="<?= base_url('register'); ?>" class="mt-4">

            <div class="mb-4">
                <label for="company_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                <input type="text" id="company_name" name="company_name" required placeholder="Company Name" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="example@outlook.com" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Create a Password</label>
                <input type="password" id="password" name="password" required placeholder="Password (8 characters or more)" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

            <div class="mb-4">
                <label for="budget" class="block text-sm font-medium text-gray-700">Hiring Budget</label>
                <input type="number" id="budget" name="budget" required placeholder="USD $" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

            <div class="mb-4 pb-4">
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text"  id="location" name="location" required placeholder="Country" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-violet-600 text-white rounded-full hover:bg-violet-800">Sign Up</button>
        </form>

    </div>

</body>
</html>
