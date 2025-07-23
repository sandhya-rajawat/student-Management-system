@vite('resources/css/app.css')
@include('partials/header')

<div class="max-w-4xl mx-auto p-6">
  @foreach($features as $item)
    <!-- Blog Image -->
    <img src="{{ asset('uploads/' . $item->image) }}" alt="Blog image" class="w-full h-96 object-cover rounded-xl mb-6 shadow-md" />

    <!-- Blog Title -->
    <h1 class="text-3xl font-bold text-gray-900 mb-2">
      {{ $item->title }}
    </h1>

    <!-- Author Info -->
    <div class="flex items-center gap-4 mb-6">
      <img src="/author-avatar.jpg" alt="Admin" class="w-10 h-10 rounded-full object-cover border" />
      <div class="text-sm text-gray-600">
        <p class="font-semibold">Admin</p>
        <p>{{ $item->created_at->format('jS M, Y @ h:i A') }}</p>
      </div>
    </div>

    <!-- Blog Content -->
    <div class="text-gray-700 space-y-4 mb-10">
      <p>{{ $item->description }}</p>
    </div>
  @endforeach

  <!-- Comments Section -->
  <div>
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Comments</h2>
    <p class="text-sm text-gray-500 mb-6">No comments yet. Be the first to comment!</p>

    <!-- Leave a Reply Form -->
    <form class="space-y-4">
      <textarea rows="4" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" placeholder="Leave a reply..."></textarea>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <input type="text" placeholder="Name" class="p-3 border rounded-md w-full" />
        <input type="email" placeholder="Email" class="p-3 border rounded-md w-full" />
        <input type="text" placeholder="Website" class="p-3 border rounded-md w-full" />
      </div>

      <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-md shadow">
        Post Comment
      </button>
    </form>
  </div>
</div>

@include('partials/footer')
