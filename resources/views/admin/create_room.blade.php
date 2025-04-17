<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content p-6">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-md">
            <h2 class="text-2xl font-semibold mb-6 text-center text-gray-800">Add Room</h2>
            <form action="{{url('add_room')}}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-red-600 font-bold mb-1">Room Title</label>
                    <input type="text" name="title" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-indigo-300" placeholder="Enter room title">
                </div>

                <div>
                    <label class="block text-red-600 font-bold mb-1">Description</label>
                    <textarea name="description" rows="4" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-indigo-300" placeholder="Room description"></textarea>
                </div>

                <div>
                    <label class="block text-red-600 font-bold mb-1">Price</label>
                    <input type="number" name="price" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-indigo-300" placeholder="Enter price">
                </div>

                <div>
                    <label class="block text-red-600 font-bold mb-1">Room Type</label>
                    <select name="type" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-indigo-300">
                        <option value="regular">Regular</option>
                        <option value="premium">Premium</option>
                        <option value="deluxe">Deluxe</option>
                    </select>
                </div>

                <div>
                    <label class="block text-red-600 font-bold mb-1">Free Wifi</label>
                    <select name="wifi" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-indigo-300">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div>
                    <label class="block text-red-600 font-bold mb-1">Upload Image</label>
                    <input type="file" name="image" class="w-full bg-white text-gray-800 border border-gray-300 rounded-md p-2">
                </div>

                <div class="text-right mb-4">
                    <input type="submit" value="Add Room" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-md cursor-pointer transition">
                </div>
            </form>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
