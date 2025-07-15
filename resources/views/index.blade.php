@vite('resources/css/app.css')
@include('header')
<div class="bg-gray-300 flex-1 min-h-[calc(100vh-120px)] p-5">

  <!-- {{print_r($DbData)}} -->
<input type="text" >

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
      <td class="border px-4 py-2"> <a href="{{url('insert/'.$data->id)}}" onclick="return confirm('Are you sure you want to delete this record?')" class="text-red-600 hover:underline">Delete</a>
    
        <a href="{{url('update/'.$data->id)}}" class="text-green-600 hover:underline">Edit</a>
      </td>


    </tr>
    @endforeach
  </table>
  <div class="mt-8 flex justify-center ">
    {{$DbData->links()}}
  </div>
</div>
@include('footer')