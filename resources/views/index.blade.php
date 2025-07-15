@vite('resources/css/app.css')
@include('header')
<div class="bg-gray-300 flex-1 min-h-[calc(100vh-120px)] p-5">


<form action="search" method="get">
  @csrf
  <div class="mb-2">
       <img src="{{asset('image/search.png')}}"class=" absolute lift-1 pl-2 top-1/7 transform -translate-y-1/2 w-5 h-5 pointer-events-none ">
        <input type="text" placeholder="Enter Student Name" name="search" required  class="pl-10 w-100 border border-gray-900 rounded-md px-4 py-2  cursor-pointer" >
        <button class=" bg-gray-500    py-2 px-4 rounded-md hover:bg-gray-600 hover:text-white transition">Search</button>
    </div >
</form>


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
  {{ $DbData->links() }}
  </div>
</div>
@include('footer')