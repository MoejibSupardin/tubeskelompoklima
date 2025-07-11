<x-app-layout>
    <div class="container p-5">
        <h2 class="text-2xl font-semibold mb-4">Edit Wisata</h2>
        <form action="{{ route('wisataAdmin.update', $wisata->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama Wisata</label>
                <input type="text" name="nama" id="nama" class="form-input mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ $wisata->nama }}" required>
            </div>
            <div class="mb-4">
                <label for="lokasi" class="block text-gray-700">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" class="form-input mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ $wisata->lokasi }}" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="form-input mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ $wisata->deskripsi }}</textarea>
            </div>
            <button type="submit" class="w-full py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">Update</button>
        </form>
    </div>
</x-app-layout>
