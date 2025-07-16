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

  <div class="max-w-6xl mx-auto space-y-16 px-4">

    <!-- Level 1: Founder Chairman -->
    <div class="flex justify-center">
      <div class="bg-white shadow rounded-xl p-4 text-center w-60">
        <img src="{{ asset('uploads/founder.jpg') }}" alt="Founder" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">Mr. Mahendra Verma</p>
        <p class="text-sm text-gray-600">Founder Chairman</p>
      </div>
    </div>

    <!-- Level 2: Trustees -->
    <div class="flex flex-wrap justify-center gap-10">
      <div class="bg-green-100 shadow rounded-xl p-4 text-center w-60">
        <img src="{{ asset('uploads/sunil.jpg') }}" alt="Trustee 1" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">Mr. Sunil Singh Rawat</p>
        <p class="text-sm text-gray-600">Trustee</p>
      </div>
      <div class="bg-green-100 shadow rounded-xl p-4 text-center w-60">
        <img src="{{ asset('uploads/agrawal.jpg') }}" alt="Trustee 2" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">Mr. C.P. Agrawal</p>
        <p class="text-sm text-gray-600">Trustee</p>
      </div>
    </div>

    <!-- Level 3: Directors -->
    <div class="flex flex-wrap justify-center gap-10">
      <div class="bg-white shadow rounded-xl p-4 text-center w-60">
        <img src="{{ asset('uploads/director1.jpg') }}" alt="Director" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">Mrs. Aroona Pal Singh</p>
        <p class="text-sm text-gray-600">Director Of Education</p>
      </div>
      <div class="bg-white shadow rounded-xl p-4 text-center w-60">
        <img src="{{ asset('uploads/director2.jpg') }}" alt="Director" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">Mrs. Sunita Nirmal</p>
        <p class="text-sm text-gray-600">Director</p>
      </div>
    </div>

    <!-- Level 4: Members -->
    <div class="flex flex-wrap justify-center gap-6">
      @foreach ([
        ['name' => 'Ms. Shubra Nambiar', 'role' => 'Secondary Academic Head', 'img' => 'member1.jpg'],
        ['name' => 'Ms. Rajshree', 'role' => 'NADRS', 'img' => 'member2.jpg'],
        ['name' => 'Ms. Komal Verma', 'role' => 'Pre-primary Coordinator', 'img' => 'member3.jpg'],
        ['name' => 'Ms. Christine Joseph', 'role' => 'Admin', 'img' => 'member4.jpg']
      ] as $member)
        <div class="bg-blue-100 shadow rounded-xl p-4 text-center w-52">
          <img src="{{ asset('uploads/' . $member['img']) }}" alt="{{ $member['name'] }}" class="w-20 h-20 mx-auto rounded-full object-cover mb-2">
          <p class="font-semibold text-sm">{{ $member['name'] }}</p>
          <p class="text-xs text-gray-600">{{ $member['role'] }}</p>
        </div>
      @endforeach
    </div>

  </div>
</div>

@include('footer')
