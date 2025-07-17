
@include('header')
@vite('resources/css/app.css')
<!-- Header Image with Students -->
  <div class="relative">
    <img src="{{asset('image/dance.jpg')}}" alt="Students in Classroom" class="w-full h-72 object-cover" />
  </div>

  <!-- Heading -->
  <div class="text-center mt-10">
    <h2 class="text-xl font-bold uppercase tracking-wider">List of News & Events</h2>
    <div class="mt-2 border-b-2 w-24 mx-auto border-pink-500"></div>
  </div>

  <!-- News Cards Grid -->
  <div class="max-w-7xl mx-auto mt-10 px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

    <!-- Card 1 -->
   <div class="bg-gray-50 shadow p-4 rounded-lg">
      <img src="{{ asset('image/school.jpg') }}" alt="Event Image" class="w-full h-48 object-cover rounded" />
      <h3 class="text-md font-semibold mt-4">Winners List In International Art Competition Organised By RANGOTSAV CELEBRATION</h3>
      <div class="text-sm text-gray-600 mt-2">
        <p>April 26, 2025</p>
        <p> Activities2025, Important News</p>
        <p> No Comments</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-gray-50 shadow p-4 rounded-lg">
      <img src="{{ asset('image/school.jpg') }}" alt="Event Image" class="w-full h-48 object-cover rounded" />
      <h3 class="text-md font-semibold mt-4">Winners List In International Art Competition Organised By RANGOTSAV CELEBRATION</h3>
      <div class="text-sm text-gray-600 mt-2">
        <p>April 26, 2025</p>
        <p> Activities2025, Important News</p>
        <p>No Comments</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-gray-50 shadow p-4 rounded-lg">
      <img src="{{ asset('image/school.jpg') }}" alt="Event Image" class="w-full h-48 object-cover rounded" />
      <h3 class="text-md font-semibold mt-4">Graduation Ceremony – Grade XII (Batch 2024-25)</h3>
      <div class="text-sm text-gray-600 mt-2">
        <p> February 27, 2025</p>
        <p> Activities2023, Important News</p>
        <p> No Comments</p>
      </div>
    </div>

  </div>
  
@include('footer')