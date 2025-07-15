@vite('resources/css/app.css')

<header>
    <div class="flex justify-between items-center bg-gray-500 h-16 text-white px-4">

        {{-- ✅ Left: Logo + SCHOOL close together --}}
        <div class="flex items-center">
            <img src="{{ asset('image/logo.jpg') }}" alt="logo" class="w-10 h-10 rounded mr-2">
            <h1 class="text-xl font-bold">𝖘𝖈𝖍𝖔𝖔𝖑</h1>
        </div>

        {{-- ✅ Right: Nav Links --}}
        <nav class="flex items-center">
            <a href="insert" class="ml-4 hover:text-black">New</a>
            <a href="insertData" class="ml-4 hover:text-black">Home</a>
            <a href="about" class="ml-4 hover:text-black">About</a>
            <a href="#" class="ml-4 hover:text-black">Contact</a>
            <a href="#" class="ml-4 hover:text-black">Login</a>
        </nav>

    </div>
</header>
