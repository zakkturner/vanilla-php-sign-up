<?php require base_path("views/partials/header.php") ?>
<div class="flex w-full h-full justify-center flex-col items-center">

    <div class="title mr-6">
        <h1 class="text-[#b6fdbf] text-7xl">Mailing list</h1>
    </div>
    <div>
        <ul class="border border-[#b6fdbf]">
            <li class="text-white">
                <div class="grid grid-cols-2 border-b  border-[#b6fdbf]">
                    <div class="px-4 border-r border-[#b6fdbf]">
                        <h5>
                            Name

                        </h5>
                    </div>
                    <div class="px-4 ">
                        <h5>
                            Email
                        </h5>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 border-r border-[#b6fdbf]">Joe</div>
                    <div class="px-4">joe@jmail.com</div>
                </div>
            </li>
        </ul>
    </div>

</div>

<?php require base_path("views/partials/footer.php"); ?>