@include('header')
@vite('resources/css/app.css')
<div class="w-full pt-18">
  <img src="{{ asset('image/teacher.png') }}" alt="School Timings" class="w-full h-64 object-cover">
</div>

<!-- Background Section -->
<div class="bg-gray-100 py-12">

  <!-- Heading -->
  <div class="text-center mb-10">
    <h2 class="text-3xl font-bold text-gray-800 uppercase">The School Committee</h2>
    <p class="text-gray-600 mt-2 italic">“The Pillars of our Institution”</p>
  </div>
  @foreach($teacherInfo as $info)

  <div class="max-w-6xl mx-auto space-y-16 px-4">

    <!-- Level 1: Founder Chairman -->
    <div class="flex justify-center">
      <div class="bg-white shadow rounded-xl p-4 text-center w-60">
        <img src="{{ asset('uploads/'.$info->image) }}" alt="Founder" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">{{$info->name}}</p>
        <p class="text-sm text-gray-600">{{$info->possition}}</p>
        <p class="text-sm text-gray-600">{{$info->Eduction}}</p>
        <p class="text-sm text-gray-600">{{$info->created_at}}</p>
        <p class="text-sm text-gray-600">{{$info->updated_at}}</p>

      </div>
    </div>

  </div>
  @endforeach

</div>


@include('footer')