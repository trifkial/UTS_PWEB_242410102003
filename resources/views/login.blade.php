@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Header -->
        <div class="text-center">
            <h1 class="text-4xl font-bold text-blue-600 mb-2">APOTEKKU</h1>
            <h2 class="text-3xl font-bold text-gray-900">Selamat Datang Kembali</h2>
            <p class="mt-2 text-sm text-gray-600">
                Silakan masuk ke akun Anda untuk melanjutkan
            </p>
        </div>

        <!-- Login Form -->
        <div class="bg-white p-8 rounded-xl shadow-2xl">
            <form method="POST" action="{{ route('login.process') }}" class="space-y-6">
                @csrf

                <!-- Username Input -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">
                        Nama Pengguna
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <input type="text"
                               name="username"
                               id="username"
                               required
                               class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-4 py-3 border-gray-300 rounded-lg text-gray-900 placeholder-gray-500"
                               placeholder="Masukkan nama pengguna">
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Kata Sandi
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input type="password"
                               name="password"
                               id="password"
                               required
                               class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-4 py-3 border-gray-300 rounded-lg text-gray-900 placeholder-gray-500"
                               placeholder="Masukkan kata sandi">
                    </div>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox"
                               id="remember_me"
                               name="remember_me"
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            Ingat Saya
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                            Lupa kata sandi?
                        </a>
                    </div>
                </div>

                <!-- Login Button -->
                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                        </span>
                        Masuk
                    </button>
                </div>
            </form>

            <!-- Divider -->
            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">
                            Atau
                        </span>
                    </div>
                </div>

                <!-- Help Text -->
                <p class="mt-4 text-center text-sm text-gray-600">
                    Belum punya akun?
                    <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                        Daftar sekarang
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center text-sm text-gray-500">
            <p>Dengan masuk, Anda menyetujui syarat dan ketentuan APOTEKKU</p>
        </div>
    </div>
</div>
@endsection
