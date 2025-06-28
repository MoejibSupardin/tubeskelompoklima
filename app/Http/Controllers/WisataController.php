<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::all();
        return view('wisataAdmin.index', compact('wisatas'));
    }

    public function create()
    {
        return view('wisataAdmin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required',
            'lokasi' => 'required|string|max:255',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('wisata', 'public');
        }

        Wisata::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('wisataAdmin.index')->with('success', 'Wisata berhasil ditambahkan!');
    }

    public function show(Wisata $wisata)
    {
        return view('wisataAdmin.detail', compact('wisata'));
    }
    public function edit($id)
    {
        $wisata = Wisata::find($id); // Cari wisata berdasarkan ID
        if (!$wisata) {
            return redirect()->route('wisataAdmin.index')->with('error', 'Wisata tidak ditemukan!');
        }

        return view('wisataAdmin.edit', compact('wisata'));
    }


    public function update(Request $request, Wisata $wisata)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required',
            'lokasi' => 'required|string|max:255',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($wisata->gambar) {
                Storage::disk('public')->delete($wisata->gambar);
            }
            $gambarPath = $request->file('gambar')->store('wisata', 'public');
            $wisata->gambar = $gambarPath;
        }

        $wisata->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
        ]);

        return redirect()->route('wisataAdmin.index')->with('success', 'Wisata berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        if (!$wisata) {
            return redirect()->route('wisataAdmin.index')->with('error', 'Wisata tidak ditemukan!');
        }

        if ($wisata->gambar) {
            Storage::disk('public')->delete($wisata->gambar);
        }

        $wisata->delete();

        return redirect()->route('wisataAdmin.index')->with('success', 'Wisata berhasil dihapus!');
    }
}
