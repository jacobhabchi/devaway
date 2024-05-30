<div class="h-max flex flex-col md:flex-row">

    <div class="w-full md:w-1/4 h-full p-8">

        <div class="flex flex-col justify-start items-center">
            <img src="<?= base_url('assets/images/profile.jpg')?>" alt="Profile Picture" class="rounded-full mt-4 w-44 h-44 border border-gray-400">
            <h1 class="font-bold text-3xl mt-6"><?= $developer['first_name']?></h1>
        </div>

        <div class="mt-6">
            <p class="font-bold text-xl mb-4 text-green-600">$<?= $developer['hourly_rate'] ?> /hr</p>
            <h1 class="font-semibold text-xl mb-4">Skills</h1>
            <div class="flex flex-wrap justify-center">
                <?php foreach ($developer_skills as $developer_skill): ?>
                    <!-- Get skill description using skill ID -->
                    <?php 
                        $skill_model = new \App\Models\SkillsModel();
                        $skill = $skill_model->find($developer_skill['skill_id']);
                    ?>
                    <!-- Print the skill name -->
                    <div class="p-2">
                        <p class=" bg-gray-100 rounded-lg px-4 py-2"><?= $skill['description']?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-8 text-l">
            <p><span class="font-bold">Location:</span> <?= $developer['location']?></p>
            <p><span class="font-bold">Language:</span> <?= $developer['language']?></p>
            <p><span class="font-bold">Preferred Hours:</span> <?= $developer['preferred_hours']?></p>
        </div>

        <form method="post" action="<?= base_url("contact")?>" class=" flex justify-center mt-10 w-full">
            <input type="hidden" name="developer_id" value="<?= $developer['id']?>">
            <button type="submit" class="bg-green-600 hover:bg-green-400 text-xl font-semibold text-white rounded-lg px-12 py-2 mt-4">Contact</button>
        </form>

    </div>

    <div class="w-full md:w-3/4 h-full p-12 flex flex-col gap-10">
            
        <div class="h-1/3 w-full">
            <h1 class="text-2xl font-bold mb-4">About <?= $developer['first_name']?> </h1>
            <div class="border border-gray-300 rounded-md shadow-md p-8">
                <p><?= nl2br($developer['bio'])?></p>
            </div>
        </div>

        <div class="h-1/3 w-full">
            <h1 class="text-2xl font-bold mb-4">Experience</h1>
            <div class="border border-gray-300 rounded-md shadow-md p-8">
                <p><?= nl2br($developer['experience'])?></p>
            </div>
        </div>

        <div class="h-1/3 w-full">
            <h1 class="text-2xl font-bold mb-4">Projects</h1>
            <div class="border border-gray-300 rounded-md shadow-md p-8">
                <p><?= nl2br($developer['projects'])?></p>
            </div>
        </div>

    </div>

</div>
