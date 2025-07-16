@vite('resources/css/app.css')
<header class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-md shadow-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <a href="/"> <img src="{{ asset('image/logo.png') }}" alt="Logo" class="h-10" /></a>
            <h1 class="text-xl font-bold text-blue-900">𝙎𝙝𝙞𝙠𝙨𝙝𝙖</h1>
        </div>

        <!-- Navigation Links  -->
        <nav>
            <ul class="flex space-x-6 text-sm font-medium text-gray-800 gap-20">

                <li class="nav-item nav-dropdown group relative">
                    <span class="nav-link inline-flex items-center">Home<svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                    <ul class="nav-dropdown-list hidden group-hover:block lg:invisible lg:absolute lg:block lg:opacity-0 lg:group-hover:visible lg:group-hover:opacity-100 bg-white">

                        <li class="nav-dropdown-item w-60 bg-gray-100 p-2">
                            <a href="message" class="nav-dropdown-link">Head-Department-message</a>
                        </li> </ul>
                    </li>

                <!-- form -->
                <li class="nav-item nav-dropdown group relative">
                    <span class="nav-link inline-flex items-center">
                        Form
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                    <ul class="nav-dropdown-list hidden group-hover:block lg:invisible lg:absolute lg:block lg:opacity-0 lg:group-hover:visible lg:group-hover:opacity-100 bg-white">

                        <li class="nav-dropdown-item w-full bg-gray-100 p-2">
                            <a href="homesection" class="nav-dropdown-link">Home_Message</a>
                        </li>
                        <li class="nav-dropdown-item w-full bg-gray-100 p-2">
                            <a href="home02_section" class="nav-dropdown-link">Home_blog</a>
                        </li>



                    </ul>
                </li>


                <li><a href="#" class="hover:text-green-700">About School</a></li>
                <li><a href="#" class="hover:text-green-700">Facilities</a></li>
                <li><a href="#" class="hover:text-green-700">Activities</a></li>
                <li><a href="#" class="hover:text-green-700">Contact Us</a></li>
                <li><a href="#" class="hover:text-green-700">Pre-Primary</a></li>

            </ul>
        </nav>




    </div>
</header>