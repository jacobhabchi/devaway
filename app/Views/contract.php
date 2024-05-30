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
        <h2 class=" text-2xl font-semibold text-gray-900 text-center mb-8">Contract Proposal</h2>
        <form method="post" action ="<?= base_url('submit-contract'); ?>" class="mt-4">

            <div class="flex gap-12">

                <input type="hidden" name="developer_id" value="<?= $developer_id?>">
                <input type="hidden" name="business_id" value="<?= $business['id']?>">
                <input type="hidden" name="company_name" value="<?= $business['company_name']?>">


                <div class="w-1/2 mb-4">
                    <label for="project_name" class="block text-sm font-medium text-gray-700">Project Name</label>
                    <input required type="text" name="project_name" placeholder="Project Name" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
                </div>

                <div class="w-1/2 mb-4">
                    <label for="est_duration" class="block text-sm font-medium text-gray-700">Estimated Duration</label>
                    <input required type="text" name="est_duration" placeholder="Estimated Duration" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
                </div>

            </div>

            <div class="flex gap-12">

            <div class="w-full h-full mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Project Description</label>
                <textarea required name="description" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm resize-none"></textarea>
            </div>

                
            </div>

            <div class="flex gap-12">

                <div class="w-1/2 mb-4">
                    <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                    <input required type="date" name="start_date" placeholder="dd/mm/yy" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
                </div>

                <div class="w-1/2 mb-4">
                    <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                    <input required type="date" name="end_date" placeholder="dd/mm/yy" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
                </div>

            </div>

            <div class="flex gap-12">

                <div class="w-1/2 mb-4">
                    <label for="rate" class="block text-sm font-medium text-gray-700">Hourly rate</label>
                    <input required type="number" name="rate" placeholder="USD $" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
                </div>

                <div class="w-1/2 mb-4">
                    <label for="hours" class="block text-sm font-medium text-gray-700">Hours Per Week</label>
                    <input required type="number" name="hours" placeholder="Weekly Hours" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>
                </div>

            </div>
            
                <button type="submit" class="w-full py-2 px-4 bg-violet-600 text-white rounded-full hover:bg-violet-800">Submit Contract</button>
        </form>

    </div>

</body>
</html>
