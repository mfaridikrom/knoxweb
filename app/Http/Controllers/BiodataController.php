<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BiodataController extends Controller
{
    public function index(): View
    {
        $biodatas = Biodata::orderBy('id')->get();

        return view('welcome', compact('biodatas'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
            'foto' => ['nullable', 'image', 'max:2048'],
            'foto_url' => ['nullable', 'url', 'max:1000'],
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('biodata', 'public');
        } elseif (! empty($validated['foto_url'])) {
            $fotoPath = $validated['foto_url'];
        }

        Biodata::create([
            'nama' => $validated['nama'],
            'deskripsi' => $validated['deskripsi'],
            'foto' => $fotoPath,
        ]);

        return redirect()->route('home')->with('success', 'Biodata berhasil ditambahkan.');
    }

    public function update(Request $request, Biodata $biodata): RedirectResponse
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
            'foto' => ['nullable', 'image', 'max:2048'],
            'foto_url' => ['nullable', 'url', 'max:1000'],
        ]);

        $fotoPath = $biodata->foto;

        if ($request->hasFile('foto')) {
            if ($biodata->foto && ! Str::startsWith($biodata->foto, ['http://', 'https://', 'images/'])) {
                Storage::disk('public')->delete($biodata->foto);
            }
            $fotoPath = $request->file('foto')->store('biodata', 'public');
        } elseif (! empty($validated['foto_url'])) {
            if ($biodata->foto && ! Str::startsWith($biodata->foto, ['http://', 'https://', 'images/'])) {
                Storage::disk('public')->delete($biodata->foto);
            }
            $fotoPath = $validated['foto_url'];
        }

        $biodata->update([
            'nama' => $validated['nama'],
            'deskripsi' => $validated['deskripsi'],
            'foto' => $fotoPath,
        ]);

        return redirect()->route('home')->with('success', 'Biodata berhasil diperbarui.');
    }

    public function destroy(Biodata $biodata): RedirectResponse
    {
        if ($biodata->foto && ! Str::startsWith($biodata->foto, ['http://', 'https://', 'images/'])) {
            Storage::disk('public')->delete($biodata->foto);
        }

        $biodata->delete();

        return redirect()->route('home')->with('success', 'Biodata berhasil dihapus.');
    }
}
