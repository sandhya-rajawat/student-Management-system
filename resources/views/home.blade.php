@vite('resources/css/app.css')
@include('header')

<!-- Hero Section -->
<div>
  <img src="{{ asset('image/students.webp') }}" alt="students" class="w-screen h-[400px] object-cover">
  <div class="absolute top-[150px] left-10 bg-white/80 p-6 rounded-xl shadow-lg max-w-lg">
    <h1 class="text-4xl font-bold text-gray-800">Welcome to Our Student Management System</h1>
    <p class="mt-4 text-gray-700">Manage students, track performance, and stay organized with ease.</p>
  </div>
</div>

<!-- About Section -->
<div class="p-10 bg-gray-100">
  <h2 class="text-3xl font-bold mb-4 text-center">About Our System</h2>
  <p class="text-center max-w-3xl mx-auto text-gray-700">
    This system is designed to help educational institutions manage student data efficiently. It offers functionalities like adding, updating, deleting, and viewing student information in a secure and user-friendly interface.
  </p>
</div>

<!-- Features Section -->
<div class="p-10">
  <h2 class="text-3xl font-bold mb-6 text-center">Key Features</h2>
  <div class="grid md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-xl shadow-md">
        <img src="{{asset('image/key_fetcures1.webp')}}"class="w-xl">
       <h3 class="text-xl font-semibold mb-2">Add & Manage Students</h3>
      <p>Quickly create, update or delete student records with ease.</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-md">
         <img src="{{asset('image/key_fetures2.jpeg')}}"class="w-xl">
      <h3 class="text-xl font-semibold mb-2">Responsive UI</h3>
      <p>Clean and intuitive user interface built with Tailwind CSS.</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-md">
         <img src="{{asset('image/key_fetures2.jpeg')}}"class="w-xl">
      <h3 class="text-xl font-semibold mb-2">Secure Authentication</h3>
      <p>Session-based login to keep your data safe and access restricted.</p>
    </div>
  </div>
</div>

<!-- Call to Action -->
<div class="bg-blue-200 text-white p-5 text-center">
  <h2 class="text-3xl font-bold mb-4">Get Started Now</h2>
  <p class="mb-6">Start managing your student records efficiently today.</p>
  <a href="/signin" class="bg-white text-gray-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-200 transition">Sign In</a>
</div>

@include('footer')
