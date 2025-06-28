<x-app-layout>
    
    <div class="container p-5 space-y-4">
        <h2 class="text-center mb-4 text-2xl font-semibold">Daftar Wisata</h2>
        <a href="{{ route('wisataAdmin.create') }}" class="btn btn-primary px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 mb-5">Tambah Wisata</a>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($wisatas as $wisata)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img src="{{ asset('storage/' . $wisata->gambar) }}" class="w-full h-48 object-cover" alt="{{ $wisata->nama }}">
                <div class="px-4 py-2">
                    <h5 class="text-lg font-semibold">{{ $wisata->nama }}</h5>
                    <p class="text-gray-700 text-sm">{{ Str::limit($wisata->deskripsi, 80) }}</p>
                </div>
                <div class="px-4 py-2 flex justify-between items-center bg-gray-100">
                    <a href="{{ route('wisataAdmin.edit', $wisata->id) }}" class="btn btn-warning btn-sm px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('wisataAdmin.destroy', $wisata->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
