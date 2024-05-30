<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful</title>
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

    <div class="max-w-2xl w-full mx-auto mt-20 bg-white rounded-lg border border-gray-300 shadow-md p-12 text-center">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">All Done!</h1>
        <p class="text-lg text-gray-700">
            Your proposal has been submitted successfully. You will hear back from us within 48 hours.
        </p>
        <p class="text-lg text-gray-700 mt-4">
            The developer will review your contract and respond accordingly.
        </p>
        <a href="<?= base_url('business_dashboard') ?>" class="mt-8 inline-block bg-violet-600 text-white font-semibold rounded-full px-6 py-2 hover:bg-violet-800">Return to Dashboard</a>
    </div>

</body>
</html>
