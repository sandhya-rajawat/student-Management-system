@include('header')
@vite('resources/css/app.css')

<!-- Banner Image -->
<div class="w-full pt-18">
  <img src="{{ asset('image/scltime.webp') }}" alt="School Timings" class="w-full h-64 object-cover">
</div>

<!-- Timings Section -->
<div class="bg-white py-16">
  <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">SCHOOL TIMINGS</h2>
  <div class="w-20 h-1 bg-red-500 mx-auto mb-12"></div>

  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">

    <!-- Pre-Primary Section -->
    <div class="bg-red-100 rounded-xl p-6 shadow text-center">
      <h3 class="text-lg font-semibold mb-4">Pre-Primary Section</h3>
      <p class="font-medium">Monday to Saturday</p>
      <p class="mt-2">09:00am to 01:00pm <span class="font-semibold text-gray-700">(Summer)</span></p>
      <p>09:30am to 01:30pm <span class="font-semibold text-gray-700">(Winter)</span></p>
    </div>

    <!-- Primary, Middle & Secondary Section -->
    <div class="bg-green-100 rounded-xl p-6 shadow text-center">
      <h3 class="text-lg font-semibold mb-4">Primary, Middle & Secondary Section</h3>
      <p class="font-medium">Monday to Friday</p>
      <p class="mt-2">08:00am to 02:00pm <span class="font-semibold text-gray-700">(Summer)</span></p>
      <p>08:30am to 02:30pm <span class="font-semibold text-gray-700">(Winter)</span></p>
      <p class="mt-4 font-medium">Saturday</p>
      <p>08:00am to 01:00pm <span class="font-semibold text-gray-700">(Summer)</span></p>
      <p>08:30am to 01:30pm <span class="font-semibold text-gray-700">(Winter)</span></p>
    </div>

    <!-- Sr. Secondary Section -->
    <div class="bg-blue-100 rounded-xl p-6 shadow text-center">
      <h3 class="text-lg font-semibold mb-4">Sr. Secondary Section</h3>
      <p class="font-medium">Monday to Saturday</p>
      <p class="mt-2">08:00am to 01:00pm <span class="font-semibold text-gray-700">(Summer)</span></p>
      <p>08:30am to 01:30pm <span class="font-semibold text-gray-700">(Winter)</span></p>
    </div>

  </div>
</div>

@include('footer')
