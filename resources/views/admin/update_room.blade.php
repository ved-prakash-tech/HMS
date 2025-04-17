<!DOCTYPE html>
<html lang="en">
<head>
  <base href="/public">
  @include('admin.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  @include('admin.header')
  @include('admin.sidebar')

  <div class="page-content p-6">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-md">
      <h2 class="text-2xl font-semibold mb-6 text-center text-gray-800">Update Room</h2>
      <form action="{{ url('edit_room/' . $data->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        {{-- @method('PUT') --}}

        <div>
          <label class="block text-red-600 font-bold mb-1">Room Title</label>
          <input type="text" name="title" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-indigo-300" value="{{ $data->room_title }}">
        </div>

        <div>
          <label class="block text-red-600 font-bold mb-1">Description</label>
          <textarea name="description" rows="4" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-indigo-300">{{ $data->description }}</textarea>
        </div>

        <div>
          <label class="block text-red-600 font-bold mb-1">Price</label>
          <input type="number" name="price" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-indigo-300" value="{{ $data->price }}">
        </div>

        <div>
          <label class="block text-red-600 font-bold mb-1">Room Type</label>
          <input type="text" name="room_type" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-indigo-300" value="{{ $data->room_type }}">
        </div>

        <div>
          <label class="block text-red-600 font-bold mb-1">Free Wifi</label>
          <select name="wifi" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-indigo-300">
            <option value="yes" {{ $data->wifi == 'yes' ? 'selected' : '' }}>Yes</option>
            <option value="no" {{ $data->wifi == 'no' ? 'selected' : '' }}>No</option>
          </select>
        </div>
   
        <div>
          <label class="block text-red-600 font-bold mb-1">Current Image</label>
          <img src="/room/{{$data->image}}" alt="Room Image" class="w-32 h-32 object-cover mb-3">
          <input type="file" name="image" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2">
        </div>
        
        <div class="text-right mb-4">
          <input type="submit" value="Update Room" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-md cursor-pointer transition">
        </div>
      </form>
    </div>
  </div>

  @include('admin.footer')
</body>
</html>
