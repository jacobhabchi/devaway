
<div class="flex flex-col items-center pt-6 md:px-24 md:items-start">
    <h1 class="text-2xl mb-8 font-sans font-semibold mt-12 text-center md:text-left">Browse <span class="text-violet-600">World Class Talent</span> For Your Business</h1>

    <form class="flex flex-col md:flex-row w-full items-center" method="post" action="<?= base_url('find-talent') ?>">
            <input type="text" name="search_input" placeholder="Browse Skills, Location, Rates..." class=" px-4 py-2 w-full max-w-md border mb-12 border-gray-400 rounded-lg">
            <button type="submit" class="px-4 py-2 ml-4 bg-violet-600 text-white rounded-lg mb-12">Search</button>
    </form>

    
</div>


<div class=" pl-12 flex flex-col h-full md:flex-row shadow-lg ">
    
    <form class="md:w-1/4 p-4 hidden md:block" method="post" action="<?= base_url('find-talent') ?>">
        <h2 class="text-xl font-semibold mb-4">Filter by</h2>

        <div class="mb-4">
            <label for="skills" class="block mb-2 font-medium">Skills</label>
            <input type="text" id="skills_filter" name="skills_filter" placeholder="e.g. JavaScript" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="rate" class="block mb-2 font-medium">Max Rate</label>
            <input type="number" id="rate" name="rate" placeholder="$ USD" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="location" class="block mb-2 font-medium">Location</label>
            <input type="text" id="location" name="location" placeholder="e.g. Australia" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="language" class="block mb-2 font-medium">Language</label>
            <input type="text" id="language" name="language" placeholder="e.g. English" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <button tyoe="submit" class="w-full bg-violet-600 text-white p-2 rounded">Apply Filters</button>
    </form>

    <?php if (empty($matchingDevelopers)): ?>
        <div class=" h-1/3 w-screen flex justify-center items-center">
            <div class="text-gray-600 text-center">
            <?php if ($skillsFilter === null): ?>
                <h1 class="text-3xl font-semibold">Oops! We couldn't find any talent matching "<?php echo $searchInput ?>".
                <br><span class="text-xl font-normal">Try searching <span class="italic">skills, location, roles, languages, etc.</span></span></h1>
            <?php else: ?> 
                <h1 class="text-3xl font-semibold">Oops! We couldn't find any talent matching applied filters.
                <br><span class="text-xl font-normal">Try searching <span class="italic">skills, location, roles, languages, etc.</span></span></h1>
            </div>
        </div>
            <?php endif; ?>
    <?php else: ?>

    <div class="p-12 md:w-3/4 grid grid-cols-1 md:grid-cols-3 gap-4 mt-10">
            <?php foreach ($matchingDevelopers as $developer): ?>
                <div class="bg-white border border-gray-300 shadow-lg rounded-lg p-4 flex flex-col items-center">
                    <div class="flex justify-between w-full">
                        <div class=" p-1 text-s text-green-600 font-semibold">$<?= $developer['hourly_rate'] ?> /hr</div>
                        <div class=" p-1 text-s text-gray-800 font-semibold"><?= $developer['location'] ?></div>
                    </div>
                    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-full mb-4">
                    <h3 class="text-lg font-semibold"><?= $developer['first_name']?></h3>
                            <p class="text-sm text-gray-600"><?= implode(', ', $developer['skills']) ?></p>
                    <div class="text-xs text-gray-500 mt-2">
                    </div>

                    <p class="text-sm text-gray-600 mt-4"><?= $developer['statement'] ?></p>
                    <form action="<?= base_url('view-profile') ?>" method="post">
                        <input type="hidden" name="developer" value="<?= $developer['id']?>">
                        <button type="submit" class="bg-violet-600 text-white rounded-lg px-4 py-2 mt-4">View Profile</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    
</div>


