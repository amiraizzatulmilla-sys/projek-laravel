<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    auth: Object,
});
</script>

<template>
    <div class="min-h-screen bg-gray-50 flex flex-col">
        <!-- Bagian Atas (Navbar sederhana) -->
        <header class="flex justify-between items-center p-6 bg-white shadow-sm">
            <h2 class="text-xl font-bold text-gray-800">Aplikasi Ku</h2>
            <div>
                <!-- Tombol Login di Pojok Atas -->
                <Link 
                    href="/login" 
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md font-semibold hover:bg-indigo-700 transition"
                >
                    Login
                </Link>
            </div>
        </header>

        <!-- Konten Utama Landing Page -->
        <main class="flex-1 flex flex-col justify-center items-center text-center px-4">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Selamat Datang di Landing Page Kami</h1>
            <p class="text-lg text-gray-600 max-w-xl mb-8">
                Ini adalah halaman utama website. Silakan klik tombol login di pojok kanan atas untuk masuk ke sistem manajemen data.
            </p>
        </main>
    </div>
</template>