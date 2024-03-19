<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="bg-[#131020] h-screen">
        <div class="flex w-full h-full justify-center items-center">

            <div class="title mr-6">
                <h1 class="text-[#b6fdbf] text-7xl">join the list</h1>
            </div>
            <form method="POST" action="/email-list">
                <div>
                    <label class="text-[#94aebf]" for="email">Sign Up For the In-Dex Newsletter</label>
                    <div id="step-1">
                        <input type="text" placeholder="Enter Email Address" name="email" class="bg-[#292737] w-3/4 h-12 rounded pl-2" />
                        <button id="next-btn" class=" text-white bg-[#ed1f34] rounded-md py-2 px-4">Next</button>
                    </div>
                    <div id="step-2" class="hidden">
                        <input type="text" placeholder="Enter Name" name="firstName" class="bg-[#292737] w-3/4 h-12 rounded pl-2" />
                        <button id="submit-btn" class=" text-white bg-[#ed1f34] rounded-md py-2 px-4">Submit</button>
                    </div>
                    <div class="w-1/2 flex items-start mt-2">
                        <input type="checkbox" name="agree" id="">

                        <label class="text-[#888] ml-2 text-xs" for="agree">I agree to receive information from Interactive Nerd in accordance with the following <a href="">Privacy Policy</a></label>
                    </div>
                </div>

            </form>
        </div>
        <script src="/js/index.js"></script>
    </main>
</body>

</html>