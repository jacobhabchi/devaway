<div class="container mx-auto py-8">

    <h1 class="text-3xl font-bold p-4 mb-8">Welcome, <?= $developer['first_name']; ?></h1>
    <div class=" w-full">
        <h2 class=" text-lg font-semibold mb-4 ml-2">Pending Contracts</h2>
        <div class=" bg-white p-6 rounded-lg border border-gray-200 shadow mb-12">
        <?php foreach ($contracts as $contract): ?>
            <?php   
            $status = strtolower($contract['status']);
            if ($status === 'pending'):
            ?>
                <div class="flex justify-between bg-gray-200 border shadow-md roudned-lg p-4 mt-8">
                    <?php   
                        $businessesModel = new \App\Models\BusinessesModel();
                        $business = $businessesModel->find($contract['business_id']);
                    ?>
                    <h2 class="w-1/6 text-center"><span class="font-bold">Company: </span><?= $business['company_name']?></h2>
                    <h2 class="w-1/6 text-center"><span class="font-bold">Project: </span><?= $contract['project_name']?></h2>
                    <h2 class="w-1/6 text-center"><span class="font-bold">Duration: </span><?= $contract['est_duration']?></h2>
                    <h2 class="w-1/6 text-center"><span class="font-bold">Rate: </span>$<?= $contract['hourly_rate']?> /hr</h2>
                    <h2 class="w-1/6 text-center"><span class="font-bold">Start: </span><?= $contract['start_date']?></h2>

                    <form method="post" action="<?=base_url('accept-contract')?>">
                        <input type="hidden" name="contract_id" value="<?= $contract['id']?>">
                        <button type="submit" class="text-white bg-green-600 hover:bg-green-400 rounded px-4 py-2 font-bold">Accept</button>
                    </form>

                    <form method="post" action="<?=base_url('decline-contract')?>">
                        <input type="hidden" name="contract_id" value="<?= $contract['id']?>">
                        <button type="submit" class="text-white bg-red-500 hover:bg-red-400 rounded px-4 py-2 font-bold">Decline</button>
                    </form>

                </div>
            <?php endif; ?>

        <?php endforeach; ?>
            
        </div>
    </div>

<div class="flex flex-row gap-10">

    <div class="h-full">
            <h2 class=" text-xl font-semibold mb-4 ml-2"> My Skills</h2>
            <div class="border border-gray-200 shadow-md p-4 rounded-md overflow-auto max-h-screen">
                <span class="close"></span>
                <ul>
                    <?php foreach ($skillData as $data): ?>
                        <li class="py-3 text-lg" style="display: flex; justify-content: space-between;">
                            <?= $data['description'] ?>
                            <form action="<?= base_url('remove-skill') ?>" method="post" style="display:inline;">
                                <input type="hidden" name="skill_id" value="<?= $data['id'] ?>">
                                <button type="submit" class="ml-2 px-3 py-1 text-red-500">Remove</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <form action="<?=base_url('add-skill')?>" method="post" class="mt-4 flex">
                    <input required type="text" name="skill" placeholder="Add Skills" class="px-4 py-2 border border-gray-200 rounded-md shadow-md">
                    <button type="submit" class=" ml-6 px-3 py-1 bg-blue-500 text-white rounded-md">Add</button>
                </form>

            </div>
    </div>

    <div class="flex flex-row gap-10 w-full">

        <div class="w-1/2 ">
            <h2 class=" text-xl font-semibold ml-2"> My Details</h2>

            <div class="border border-gray-200 shadow-lg rounded-md mt-4 p-6">

                <form method="post" action="<?= base_url('update-details')?>">
                    
                    <label for="first_name" class="block text-sm font-medium text-gray-700 mt-4">First Name</label>
                    <input required type="text" id="first_name" name="first_name" placeholder="First Name" value="<?= $developer['first_name'] ?>" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>

                    <label for="last_name" class="block text-sm font-medium text-gray-700 mt-4">Last Name</label>
                    <input required type="text" id="last_name" name="last_name" required placeholder="Last Name" value="<?= $developer['last_name'] ?>" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>

                    <label for="email" class="block text-sm font-medium text-gray-700 mt-4">Email Address</label>
                    <input required type="email" id="email" name="email" required placeholder="example@hotmail.com" value="<?= $developer['email'] ?>" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>

                    <label for="password" class="block text-sm font-medium text-gray-700 mt-4">Password</label>
                    <input required type="password" id="password" name="password" required placeholder="Password" value="<?= $developer['password'] ?>" class="mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>

                    <label for="rate" class="block text-sm font-medium text-gray-700 mt-4">Hourly Rate</label>
                    <input required type="number" id="rate" name="hourly_rate" required placeholder="USD $" value="<?= $developer['hourly_rate'] ?>" class=" mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>

                    <label for="location" class="block text-sm font-medium text-gray-700 mt-4">Location</label>
                    <input required type="text" id="location" name="location" required placeholder="Country" value="<?= $developer['location'] ?>" class=" mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>


                    <label for="language" class="block text-sm font-medium text-gray-700 mt-4">Language</label>
                    <input required type="text" id="language" name="language" required placeholder="Language" value="<?= $developer['language'] ?>" class=" mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>

                    <label for="hours" class="block text-sm font-medium text-gray-700 mt-4">Preffered Hours</label>
                    <input required type="text" id="hours" name="preferred_hours" required placeholder="Hours per Week" value="<?= $developer['preferred_hours'] ?>" class=" mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>

                    <label for="contact" class="block text-sm font-medium text-gray-700 mt-4">Contact Info</label>
                    <input required type="text" id="contact" name="contact_info" required placeholder="Contact Info" value="<?= $developer['contact_info'] ?>" class=" mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>

                    <label for="statement" class="block text-sm font-medium text-gray-700 mt-4">Describe Your Talent</label>
                    <input required type="text" id="statement" name="statement" required placeholder="Keep it Brief!" value="<?= $developer['statement'] ?>" class=" mt-2 p-2 block w-full rounded-md border-2 border-gray-300 shadow-sm"/>



                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4">Update</button>
                </form>
            </div>
        </div>

        <div class="w-1/2">
            <h2 class="text-xl font-semibold mb-4 ml-2">My Experience</h2>

                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md mb-4 h-5/6">
                    <form action="<?= base_url('update-experience') ?>" method="post" class="h-full">
                        <textarea name="experience" id="experience" placeholder="Display Your Work Experience...!" style="resize: none;" class=" p-4 w-full h-5/6 border border-gray-200 shadow-md rounded-lg"><?= $developer['experience']?></textarea>
                        <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
                    </form>         
                </div>
        </div>
    </div>
</div>

<div class="w-full h-screen flex flex-row mt-10 gap-10">
<div class="w-1/2">
                <h2 class="text-lg font-semibold mb-4 ml-2">About Me</h2>
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md mb-4 h-1/2">
                        <form action="<?= base_url('update-bio') ?>" method="post" class="h-full">
                            <textarea name="bio" id="bio" placeholder="Tell the World About You!" style="resize: none;" class=" p-4 w-full h-5/6 border border-gray-200 shadow-md rounded-lg"><?= $developer['bio']?></textarea>
                            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
                        </form>         
                    </div>
        </div>

        <div class="w-1/2">
                <h2 class="text-lg font-semibold mb-4 ml-2">My Projects</h2>
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md mb-4 h-1/2">
                        <form action="<?= base_url('update-projects') ?>" method="post" class="h-full">
                            <textarea name="projects" id="projects" placeholder="Showcase Your Past Work and Projects!" style="resize: none;" class=" p-4 w-full h-5/6 border border-gray-200 shadow-md rounded-lg"><?= $developer['projects']?></textarea>
                            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
                        </form>         
                    </div>
        </div>

</div>


