@include('header')
@vite('resources/css/app.css')

<!-- Full section -->
<div class="min-h-[calc(100vh-160px)] flex items-center bg-gray-100 py-10">
  <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Heading and Cards -->
    <div class="flex flex-col items-center justify-center w-full space-y-10">
      
      <!-- Heading placed above cards, not sticking to top -->
      <h1 class="text-3xl font-bold text-gray-800">
        Head Of Department
      </h1>

      <!-- Cards in grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
        
        <!-- Principal -->
        <div class="bg-white rounded-xl shadow-md p-6 text-center">
          <img src="{{ asset('uploads/principal.jpg') }}" alt="Principal" class="w-32 h-32 mx-auto rounded-full object-cover mb-4">
          <p class="text-xl font-semibold">Mrs. A. Sharma</p>
          <p class="text-gray-600">Principal</p>
        </div>

        <!-- Director -->
        <div class="bg-white rounded-xl shadow-md p-6 text-center">
          <img src="{{ asset('uploads/director.jpg') }}" alt="Director" class="w-32 h-32 mx-auto rounded-full object-cover mb-4">
          <p class="text-xl font-semibold">Mr. B. Verma</p>
          <p class="text-gray-600">Director</p>
        </div>

        <!-- Founder -->
        <div class="bg-white rounded-xl shadow-md p-6 text-center">
          <img src="{{ asset('uploads/founder.jpg') }}" alt="Founder" class="w-32 h-32 mx-auto rounded-full object-cover mb-4">
          <p class="text-xl font-semibold">Dr. C. Singh</p>
          <p class="text-gray-600">Founder</p>
        </div>

      </div>

    </div>
  </div>
</div>

@include('footer')
