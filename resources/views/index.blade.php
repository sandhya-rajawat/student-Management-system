@vite('resources/css/app.css')
 @include('header')
<div class="bg-gray-300 flex-1 min-h-[calc(100vh-120px)] p-5">

<!-- {{print_r($DbData)}} -->

  <table class="border-gray-400 w-full table-auto border">
  
    <tr class="bg-gray-300 text-center">
      <th class="border px-4 py-2">ID</th>
      <th class="border px-4 py-2">Name</th>
      <th class="border px-4 py-2">Email</th>
      <th class="border px-4 py-2">Phone</th>
      <th class="border px-4 py-2">Location</th>
       <th class="border px-4 py-2">Option</th>
    </tr>
      @foreach($DbData as $data)
    <tr>
      <td class="border px-4 py-2">{{$data->id}}</td>
      <td class="border px-4 py-2">{{$data->name}}</td>
      <td class="border px-4 py-2">{{$data->email}}</td>
      <td class="border px-4 py-2">{{$data->phone}}</td>
      <td class="border px-4 py-2">{{$data->city}}</td>
      <td class="border px-4 py-2"> <a href="#">Delete</a><a href="#">Edit</a></td>


    </tr>
    @endforeach
  </table>
</div>
 @include('footer')