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
    <h2 class=" text-3xl font-semibold text-gray-900 text-center mb-8">Log in to Devaway </h2>
    <form method="post" action="<?= base_url('validate'); ?>" class="mt-4">

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" id="email" name="email" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
        </div>

        <div class="mb-4 pb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-violet-600 text-white rounded-full hover:bg-violet-800">Continue</button>
    </form>

</div>
<div class=" w-full mb-24 p-6 flex justify-center">
    <h2 class=" pt-2 pr-6 text-xl">No account? No problem.</h2>

    <a href="<?= base_url('signup') ?>">
        <button class=" text-l w-full py-3 px-4 font-semibold text-violet-600 border border-violet-600 rounded-full hover:bg-violet-700">Sign Up Now</button>
    </a>

</div>

</body>
</html>
