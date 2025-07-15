@vite('resources/css/app.css')
    @include('header')
<div class="bg-gray-300 flex-1 min-h-[calc(100vh-120px)] p-20">
<form class="bg-white p-6 rounded-lg shadow-md mx-auto max-w-md" action="{{url('edit/'.$UpdateData->id)}}" method="Post" >
    @csrf
       @method('PUT')
    <h2 class="text-2xl font-bold mb-4 text-center text-gray">Update </h2>
    
    <div class="mb-4">
        <label  for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" value="{{$UpdateData->name}}" name="name" require  class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2" >
    </div >
    <div class="mb-4">
        <label  for="name" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email"  value="{{$UpdateData->email}}" name="email" require  class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2" >
    </div>
    <div class="mb-4">
        <label  for="name" class="block text-sm font-medium text-gray-700">Phone</label>
        <input type="text"  value="{{$UpdateData->phone}}" name="phone" require  class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2">
    </div>
    <div class="mb-4">
        <label  for="name" class="block text-sm font-medium text-gray-700">Location</label>
        <input type="text" value="{{$UpdateData->city}}" name="city" require  class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2" >
    </div>
 
    <div class="mb-4">
        
        <input type="submit" name="submit" value=" Add"  class="w-full bg-gray-600 text-white py-2 px-4 rounded-md hover:bg-gray-500 transition">
    </div>

</form>
    </div>
@include('footer')

