<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = 'Tino Rifki';
        $medicines = [
            [
                'id' => 1,
                'nama' => 'Paracetamol',
                'harga' => 15000,
                'deskripsi' => 'Obat untuk meredakan demam dan nyeri',
                'gambar' => 'https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVkaWNpbmV8ZW58MHx8MHx8fDA%3D&w=400&q=80'
            ],
            [
                'id' => 2,
                'nama' => 'Amoxicillin',
                'harga' => 25000,
                'deskripsi' => 'Antibiotik untuk infeksi bakteri',
                'gambar' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVkaWNpbmV8ZW58MHx8MHx8fDA%3D&w=400&q=80'
            ],
            [
                'id' => 3,
                'nama' => 'Omeprazole',
                'harga' => 30000,
                'deskripsi' => 'Obat untuk masalah asam lambung',
                'gambar' => 'https://images.unsplash.com/photo-1631549916768-4119b2e5f926?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVkaWNpbmV8ZW58MHx8MHx8fDA%3D&w=400&q=80'
            ],
            [
                'id' => 4,
                'nama' => 'Cetirizine',
                'harga' => 12000,
                'deskripsi' => 'Antihistamin untuk alergi',
                'gambar' => 'https://images.unsplash.com/photo-1603807008857-ad66b70431aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVkaWNpbmV8ZW58MHx8MHx8fDA%3D&w=400&q=80'
            ],
            [
                'id' => 5,
                'nama' => 'Ibuprofen',
                'harga' => 18000,
                'deskripsi' => 'Anti inflamasi dan pereda nyeri',
                'gambar' => 'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVkaWNpbmV8ZW58MHx8MHx8fDA%3D&w=400&q=80'
            ],
            [
                'id' => 6,
                'nama' => 'Vitamin C',
                'harga' => 22000,
                'deskripsi' => 'Suplemen untuk daya tahan tubuh',
                'gambar' => 'https://images.unsplash.com/photo-1471864190281-a93a3070b6de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80'
            ]
        ];
        return view('dashboard', compact('username', 'medicines'));
    }

    public function pengelolaan()
    {
        $data = [
            ['id' => 1, 'nama' => 'Paracetamol', 'harga' => 15000, 'deskripsi' => 'Obat untuk meredakan demam dan nyeri'],
            ['id' => 2, 'nama' => 'Amoxicillin', 'harga' => 25000, 'deskripsi' => 'Antibiotik untuk infeksi bakteri'],
            ['id' => 3, 'nama' => 'Omeprazole', 'harga' => 30000, 'deskripsi' => 'Obat untuk masalah asam lambung'],
            ['id' => 4, 'nama' => 'Cetirizine', 'harga' => 12000, 'deskripsi' => 'Antihistamin untuk alergi'],
            ['id' => 5, 'nama' => 'Ibuprofen', 'harga' => 18000, 'deskripsi' => 'Anti inflamasi dan pereda nyeri'],
            ['id' => 6, 'nama' => 'Vitamin C', 'harga' => 22000, 'deskripsi' => 'Suplemen untuk daya tahan tubuh'],
        ];
        return view('pengelolaan', compact('data'));
    }

    public function profile(Request $request)
    {
        $userData = [
            'username' => 'Tino Rifki',
            'email' => 'tinorifki@gmail.com'
        ];
        return view('profile', $userData);
    }
}
