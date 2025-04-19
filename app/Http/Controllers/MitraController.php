<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class MitraController extends Controller
{
    public function index()
    {
        $mitras = Mitra::all();

        if(!$mitras) {
            return response()->json([
                'data' => [],
                'error' => ['Mitra Not Found']
            ], 404);
        }
        
        return response()->json([
            'data' => $mitras,
            'error' => []
        ]);
    }

    public function store(Request $request)
    {
        // Validasi request dengan custom error messages
        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'status' => 'required|in:aktif,nonaktif',
                'business_type' => 'required|string',
            ], [
                'name.required' => 'Nama mitra wajib diisi.',
                'name.string' => 'Nama mitra harus berupa teks.',
                'status.required' => 'Status mitra harus dipilih.',
                'status.in' => 'Status mitra hanya boleh berupa "aktif" atau "nonaktif".',
                'business_type.required' => 'Jenis usaha wajib diisi.',
                'business_type.string' => 'Jenis usaha harus berupa teks.',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'data' => [],
                'error' => $e->errors()
            ], 422);
        }

        $validated['slug'] = Str::slug($validated['name']) . '-' . uniqid();

        $mitra = Mitra::create($validated);

        return response()->json([
            'data' => [$mitra], 
            'error' => []
        ], 201);
    }

    public function show($slug)
    {
        $mitra = Mitra::where('slug', $slug)->first();

        if (!$mitra) {
            return response()->json([
                'data' => [],
                'error' => ['Mitra dengan slug tersebut tidak ditemukan.']
            ], 404);
        }

        return response()->json([
            'data' => [$mitra],
            'error' => []
        ]);
    }

    public function update(Request $request, $slug)
    {
        $mitra = Mitra::where('slug', $slug)->first();

        if (!$mitra) {
            return response()->json([
                'data' => [],
                'error' => ['Mitra tidak ditemukan.']
            ], 404);
        }

        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'status' => 'required|in:aktif,nonaktif',
                'business_type' => 'required|string',
            ], [
                'name.required' => 'Nama mitra wajib diisi.',
                'name.string' => 'Nama mitra harus berupa teks.',
                'status.required' => 'Status mitra harus dipilih.',
                'status.in' => 'Status mitra hanya boleh berupa "aktif" atau "nonaktif".',
                'business_type.required' => 'Jenis usaha wajib diisi.',
                'business_type.string' => 'Jenis usaha harus berupa teks.',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'data' => [],
                'error' => $e->errors()
            ], 422);
        }

        if (isset($validated['name'])) {
            $validated['slug'] = Str::slug($validated['name']) . '-' . uniqid();
        }

        $mitra->update($validated);

        return response()->json([
            'data' => [$mitra], 
            'error' => []
        ]);
    }

    public function destroy($slug)
    {
        $mitra = Mitra::where('slug', $slug)->first();

        if (!$mitra) {
            return response()->json([
                'data' => [],
                'error' => ['Mitra tidak ditemukan.']
            ], 404);
        }
        $mitra->delete();

        return response()->json([
            'data' => "Success delete Mitra",
            'error' => []
        ]);
    }
}
