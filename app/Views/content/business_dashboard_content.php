<div class="container mx-auto mt-10 flex flex-col">
    <h1 class="ml-4 mb-12 text-xl font-bold">Dashboard: <?= $business['company_name']; ?></h1>
    <h2 class="text-xl font-semibold mb-4">Hires</h2>
    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow mb-4">
        <div class="mt-4 grid grid-cols-6 gap-4">
            <?php foreach ($contracts as $contract): ?>
                <?php 
                    $developersModel = new \App\Models\DevelopersModel();
                    $developer = $developersModel->find($contract['developer_id']);
                ?>
                <?php $status = strtolower($contract['status']); ?>
                <?php if ($status === 'accepted'): ?>
                    <div class="bg-white border border-gray-200 shadow-lg rounded-lg p-4 flex flex-col items-center">
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-full mb-4">
                        <h3 class="text-lg font-semibold"><?= $developer['first_name']?></h3>
                        <p class="text-sm text-gray-600"><?= $developer['location']?></p>
                        <div class="text-sm text-gray-800 mt-2">
                            <?= $developer['language']?>
                        </div>
                        <p class="text-sm font-semibold text-black mt-4"><?= $developer['statement']?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <h1 class="font-semibold text-xl py-2">Contracts</h1>
    <div class="mt-2 flex flex-col border border-gray-200 shadow rounded-md p-2">
            <?php foreach ($contracts as $contract): ?>

                    <div class="flex justify-between bg-gray-100 roudned-md p-12 mt-8">

                    <h2 class="w-1/6 text-center"><span class="font-bold">Project: </span><?= $contract['project_name']?></h2>
                    <h2 class="w-1/6 text-center"><span class="font-bold">Developer: </span><?= $developer['first_name']?></h2>
                    <h2 class="w-1/6 text-center"><span class="font-bold">Duration: </span><?= $contract['est_duration']?></h2>
                    <h2 class="w-1/6 text-center"><span class="font-bold">Rate: </span>$<?= $contract['hourly_rate']?> /hr</h2>
                    <h2 class="w-1/6 text-center"><span class="font-bold">Start: </span><?= $contract['start_date']?></h2>
                        <?php $status = strtolower($contract['status']); ?>
                        <?php if ($status === 'pending'): ?>
                            <h3 class="text-right font-bold text-yellow-500"><span class="font-bold text-black">Status: </span>Pending</h3>
                        <?php elseif ($status === 'accepted'): ?>
                            <h3 class="text-right font-bold text-green-500"><span class="font-bold text-black">Status: </span>Accepted</h3>
                        <?php else: ?>
                            <h3 class="text-right font-bold text-red-500"><span class="font-bold text-black">Status: </span>Rejected</h3>
                        <?php endif; ?>
                    </div>
            <?php endforeach; ?>

        </div> 

        </div>

    </div>

</div>
