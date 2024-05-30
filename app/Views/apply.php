
<!-- TO ACCESS THIS PAGE GO TO localhost:8080/apply-->
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

    <div class=" max-w-2xl w-full mt-20 mx-auto bg-white rounded-lg border mb-8 p-12 border-gray-300 shadow-md">
        <h2 class=" text-2xl font-semibold text-gray-900 text-center mb-8">Apply to Join the World's Best Developer Network</h2>

        <form method="post" action="<?= base_url('new_application'); ?>" class="mt-4 req">

        <div class="flex gap-12">

            <div class="w-1/2 mb-4">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" id="first_name" name="first_name" required placeholder="First Name" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

            <div class="w-1/2 mb-4">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" id="last_name" name="last_name" required placeholder="Last Name" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

        </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="example@outlook.com" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Create a Password</label>
                <input type="password" id="password" name="password" required placeholder="Password (8 characters or more)" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

        <div class="flex gap-12">

            <div class="w-1/2 mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text" id="location" name="location" required placeholder="Country" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

            <div class="w-1/2 mb-4">
                <label for="hourly_rate" class="block text-sm font-medium text-gray-700">Rate (per hour)</label>
                <input type="number" id="hourly_rate" name="hourly_rate" required placeholder="USD $" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

        </div>

        <div class="flex gap-12">

            <div class="w-1/2 mb-4">
                <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                <input type="text" id="language" name="language" required placeholder="Language" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

            <div class="w-1/2 mb-4">
                <label for="preferred_hours" class="block text-sm font-medium text-gray-700">Preffered Hours</label>
                <input type="text" id="preferred_hours" name="preferred_hours" required placeholder="Weekly Hours" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

            <div class="w-1/2 mb-4">
                <label for="contact_info" class="block text-sm font-medium text-gray-700">Contact</label>
                <input type="text" id="contact_info" name="contact_info" required placeholder="Phone" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
            </div>

        </div>
        
        <div class="mb-4">
                <label for="statement" class="block text-sm font-medium text-gray-700">Describe Your Talent</label>
                <input type="text" id="statement" name="statement" required placeholder="Keep it Brief!" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
        </div>

            <button type="submit" class="w-full py-2 px-4 bg-violet-600 text-white rounded-full hover:bg-violet-800">Join Devaway</button>
        </form>

    </div>

</body>
</html>
