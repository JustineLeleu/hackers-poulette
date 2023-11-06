<form action="" class="pt-12 mx-12 font-bellotaR text-xs w-full">
    <div class="grid grid-cols-2 gap-12">

        <div class="border-b border-gray flex flex-col gap-2 pb-2">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" class="focus:outline-none"/>
        </div>

        <div class="border-b border-gray flex flex-col gap-2 pb-2">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="focus:outline-none"/>
        </div>

    </div>

    <div class="grid grid-cols-2 gap-12 mt-12">

        <div class="border-b border-gray flex flex-col gap-2 pb-2"/>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="focus:outline-none"/>
        </div>

        <div class="border-b border-gray flex flex-col gap-2 pb-2"/>
            <label for="country">Country</label>
            <input type="text" name="country" id="country" class="focus:outline-none"/>
        </div>

    </div>

    <div class="grid grid-cols-2 gap-12 mt-12">

        <div class="flex flex-col gap-4">
            <label for="gender">Gender</label>

            <div class="flex items-center gap-2">
                <input type="radio" id="gender1" name="gender" value="male" class="accent-blueGreen"/>
                <label for="gender1">M</label>

                <input type="radio" id="gender2" name="gender" value="female" class="ml-4 accent-blueGreen"/>
                <label for="gender2">F</label>
            </div>
        </div>

        <div class="flex flex-col gap-4">
            <label for="gender">Select Subject</label>

            <div class="flex items-center gap-2">
                <input type="radio" id="subject1" name="subject" value="1" class="accent-blueGreen"/>
                <label for="gender1">Other</label>

                <input type="radio" id="subject2" name="subject" value="2" class="ml-4 accent-blueGreen"/>
                <label for="gender2">Delivery problem</label>

                <input type="radio" id="subject3" name="subject" value="3" class="ml-4 accent-blueGreen"/>
                <label for="gender2">Product problem</label>
            </div>
        </div>

    </div>

    <div class="border-b border-gray flex flex-col gap-2 pb-1 mt-12">
        <label for="message">Message</label>
        <div class="flex justify-between pr-3">
            <input type="text" name="message" id="message" placeholder="Write your message..." class="w-full focus:outline-none"/>
            <button class="bg-black hover:bg-blueGreen text-white p-3 px-8 rounded whitespace-nowrap">Send Message</button>
        </div>
    </div>
</form>