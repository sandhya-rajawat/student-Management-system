@vite('resources/css/app.css')

<header>
    <div class="flex justify-end items-center bg-gray-500 h-16 text-white px-4">
        <img src="{{ asset('image/logo.jpg') }}" alt="logo" class="w-10 rounded mr-auto">
        <a href="insert" class="ml-4 hover:text-black">New</a>
        <a href="insertData" class="ml-4 hover:text-black">Home</a>
         <a href="#" class="ml-4 hover:text-black">About</a>
        <a href="#" class="ml-4 hover:text-black">Contact</a>
        <a href="#" class="ml-4 hover:text-black">Login</a>
    </div>
</header>