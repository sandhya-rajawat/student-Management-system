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
                <div class="grid md:grid-cols-3 gap-6">

                    @foreach($message as $iteam)

                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="{{ asset('uploads/' . $iteam->image) }}" class="w-40 h-40 object-cover rounded-full mx-auto mb-4" alt="Blog Image">
                        <p class=" text-center mb-1 text-gray-700 text-sm mb-3 text-center bg-red-50 font-semibold" >{{$iteam->name}}</p>
                        <p class=" text-center mb-2">{{ $iteam->title }}</p>
                        <h1 class="text-xl text-center mb-1">{{ $iteam->description }}</h1>
                        <div class="flex space-x-4 text-gray-600 text-sm mt-2">
                            <p>Created: {{ $iteam->created_at->format('d M Y') }}</p>
                            <p>Updated: {{ $iteam->updated_at->format('d M Y') }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    @include('footer')