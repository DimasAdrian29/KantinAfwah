<?php

// Mengimpor model Slider jika menggunakan Laravel atau framework yang serupa
use App\Models\Promo;
use App\Models\PesanSaran;
use App\Models\Menu;

// Mengambil semua data slider
$promo = Promo::all();
$menu = Menu::all();
$pesansaran= PesanSaran::all();

// Menghitung jumlah baris dari koleksi slider
$jumlah_baris_promo = $promo->count();
$jumlah_baris_menu = $menu->count();
$jumlah_baris_pesansaran = $pesansaran->count();



?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-center"> <!-- Added justify-center -->
                <!-- Kotak 1 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-semibold">Jumlah Promo</h3>
                        <div class="mt-2 text-gray-900">
                            {{ __($jumlah_baris_promo) }}
                        </div>
                    </div>
                </div>

                <!-- Kotak 2 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-semibold">Jumlah Pesan Saran</h3>
                        <div class="mt-2 text-gray-900">
                            {{ __($jumlah_baris_pesansaran) }}
                        </div>
                    </div>
                </div>

                <!-- Kotak 3 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-semibold">Jumlah Menu</h3>
                        <div class="mt-2 text-gray-900">
                            {{ __($jumlah_baris_menu) }}
                        </div>
                    </div>
                </div>





            </div>


            <br><br><h1 class="text-2xl font-bold mb-4">Pesan Saran Masuk: </h1>

            <div class="py-6">
                <div class="space-y-4 mt-4">
                    @foreach ($pesansaran as $pesan)
                        <div class="flex items-start bg-white p-4 border-2 border-yellow-400 rounded-lg">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center">
                                    <span class="text-white text-2xl font-bold">👤</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-semibold text-lg">{{ $pesan->nama }}</h3>
                                <p class="text-sm text-gray-500">{{ $pesan->created_at }}</p>
                                <p class="mt-2">{{ $pesan->pesan }} </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


