@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Welcome Section -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Selamat datang, {{ $username }}!</h1>
                <p class="text-gray-600 mt-2">Silakan pilih obat yang Anda butuhkan</p>
            </div>
            <div class="relative">
                <input type="text"
                        placeholder="Cari obat..."
                        class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="w-5 h-5 text-gray-500 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Medicine Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($medicines as $medicine)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="relative pb-48">
                <img src="{{ $medicine['gambar'] }}"
                        alt="{{ $medicine['nama'] }}"
                        class="absolute h-full w-full object-cover">
            </div>
            <div class="p-6">
                <div class="flex items-baseline">
                    <span class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold tracking-wide">
                        Tersedia
                    </span>
                </div>
                <h2 class="mt-4 text-xl font-semibold text-gray-800">{{ $medicine['nama'] }}</h2>
                <p class="mt-2 text-gray-600 text-sm line-clamp-2">{{ $medicine['deskripsi'] }}</p>
                <div class="mt-4 flex items-center justify-between">
                    <span class="text-lg font-bold text-blue-600">
                        Rp {{ number_format($medicine['harga'], 0, ',', '.') }}
                    </span>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200 flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span>Beli</span>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
