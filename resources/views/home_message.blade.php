@include('header')
@vite('resources/css/app.css')

<!-- Full section with image + heading + cards -->
<div class="min-h-[calc(100vh-160px)] bg-gray-100 py-10">

    <!-- Full-width image at the top -->
    <div class="w-full">
        <img src="{{ asset('image/school.jpg') }}" alt="HOD Banner" class="w-full h-64 object-cover rounded-xl shadow-md">
    </div>

    <!-- Content Section: Heading + Cards -->
    <div class="flex items-center justify-center mt-10">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col items-center justify-center w-full space-y-10">

                <!-- Heading -->
                <h1 class="text-3xl font-bold text-gray-800">
                    Head Of Department
                </h1>

                <!-- Cards in grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">

                    <!-- Principal -->
                    <div class="bg-white rounded-xl shadow-md p-6 text-center">
                        <img src="{{ asset('image/teacher.avif') }}" alt="Principal" class="w-32 h-32 mx-auto rounded-full object-cover mb-4">
                        <p class="text-xl font-semibold">Mrs. A. Sharma</p>
                        <p class="text-gray-600">Principal</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem impedit odio quod placeat, rem similique, natus laudantium fugit temporibus repudiandae pariatur iure molestias voluptates quia nobis, architecto at dignissimos rerum?
                            Ad placeat quidem nulla doloribus pariatur rerum, aliquid laudantium molestias repudiandae quia quos natus nostrum corrupti fugiat cupiditate obcaecati alias. Aspernatur sequi atque obcaecati debitis qui necessitatibus delectus facilis libero?</p>
                    </div>

                    <!-- Director -->
                    <div class="bg-white rounded-xl shadow-md p-6 text-center">
                        <img src="{{ asset('image/teacher.avif') }}" alt="Director" class="w-32 h-32 mx-auto rounded-full object-cover mb-4">
                        <p class="text-xl font-semibold">Mr. B. Verma</p>
                        <p class="text-gray-600">Director</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem impedit odio quod placeat, rem similique, natus laudantium fugit temporibus repudiandae pariatur iure molestias voluptates quia nobis, architecto at dignissimos rerum?
                            Ad placeat quidem nulla doloribus pariatur rerum, aliquid laudantium molestias repudiandae quia quos natus nostrum corrupti fugiat cupiditate obcaecati alias. Aspernatur sequi atque obcaecati debitis qui necessitatibus delectus facilis libero?</p>

                    </div>

                    <!-- Founder -->
                    <div class="bg-white rounded-xl shadow-md p-6 text-center">
                        <img src="{{ asset('image/teacher.avif') }}" alt="Founder" class="w-32 h-32 mx-auto rounded-full object-cover mb-4">
                        <p class="text-xl font-semibold">Dr. C. Singh</p>
                        <p class="text-gray-600">Founder</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem impedit odio quod placeat, rem similique, natus laudantium fugit temporibus repudiandae pariatur iure molestias voluptates quia nobis, architecto at dignissimos rerum?
                            Ad placeat quidem nulla doloribus pariatur rerum, aliquid laudantium molestias repudiandae quia quos natus nostrum corrupti fugiat cupiditate obcaecati alias. Aspernatur sequi atque obcaecati debitis qui necessitatibus delectus facilis libero?</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@include('footer')