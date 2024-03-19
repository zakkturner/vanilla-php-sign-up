<?php require("partials/header.php") ?>
<div class="flex w-full h-full justify-center items-center">

    <div class="title mr-6">
        <h1 class="text-[#b6fdbf] text-7xl">join the list</h1>
    </div>
    <form method="POST" action="/email-list">
        <div>
            <label class="text-[#94aebf]" for="email">Sign Up For the In-Dex Newsletter</label>
            <div id="step-1" class="mt-2">
                <input type="text" placeholder="Enter Email Address" name="email" class="bg-[#292737] text-[#94aebf] w-3/4 h-12 rounded pl-2" />
                <?php if (isset($errors['email'])) : ?>
                    <p class="text-red-500"><?= $errors['email'] ?></p>

                <?php endif; ?>
                <button id="next-btn" class=" text-white bg-[#ed1f34] rounded-md py-3 px-4">Next</button>
            </div>
            <div id="step-2" class="hidden">
                <input type="text" placeholder="Enter Name" name="name" class="bg-[#292737] w-3/4 h-12 rounded pl-2" />
                <?php if (isset($errors['name'])) : ?>
                    <p class="text-red-500"><?= $errors['name'] ?></p>

                <?php endif; ?>
                <button id="submit-btn" class=" text-white bg-[#ed1f34] rounded-md py-3 px-4">Submit</button>
            </div>
            <div class="w-1/2 flex items-start mt-2">
                <input type="checkbox" name="agree" id="">
                <?php if (isset($errors['agree'])) : ?>
                    <p class="text-red-500"><?= $errors['agree'] ?></p>

                <?php endif; ?>
                <label class="text-[#888] ml-2 text-xs" for="agree" id="policy">I agree to receive information from Interactive Nerd in accordance with the following <a href="">Privacy Policy</a></label>
            </div>
        </div>

    </form>
</div>

<?php require("partials/footer.php"); ?>