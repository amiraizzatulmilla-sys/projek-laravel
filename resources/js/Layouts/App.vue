<script setup>
import { Link, usePage } from '@inertiajs/vue3'

const page = usePage()
</script>

<template>
  <div style="background-color: #cccccc; min-height: 100vh; font-family: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">
    <!-- NAVBAR PERSIS GAMBAR -->
    <nav style="background-color: #212529; padding: 12px 24px;">
      <div class="d-flex justify-content-between align-items-center">
        
        <!-- KIRI: BRAND & NAV LINKS -->
        <div class="d-flex align-items-center gap-4">
          <Link href="/" class="text-white text-decoration-none fw-bold fs-5" style="letter-spacing: 0.5px;">
            LARAVEL + VUE + INERTIA.JS
          </Link>
          <div class="d-flex gap-3 align-items-center" style="font-size: 14px;">
            <Link href="/" class="text-white text-decoration-none">POSTS</Link>
            <a href="#" class="text-secondary text-decoration-none">EBOOK</a>
            <a href="#" class="text-secondary text-decoration-none">TUTORIAL SET</a>
          </div>
        </div>

        <!-- KANAN: SEARCH & AUTH -->
        <div class="d-flex align-items-center gap-2">
          <!-- Form Search -->
          <form @submit.prevent class="d-flex gap-2">
            <input 
              type="text" 
              class="form-control form-control-sm" 
              placeholder="Search" 
              style="width: 200px; background-color: #fff; border: 1px solid #ced4da;"
            >
            <button type="submit" class="btn btn-sm text-white px-3" style="background-color: #198754;">
              Search
            </button>
          </form>

          <!-- Tombol Login / Register / Logout -->
          <div class="d-flex align-items-center ms-2 gap-2">
            <template v-if="!$page.props.auth?.user">
              <Link href="/login" class="btn btn-sm text-white px-3" style="background-color: #0d6efd;">
                Log in
              </Link>
              <Link href="/register" class="btn btn-sm btn-outline-light px-3">
                Register
              </Link>
            </template>

            <template v-else>
              <span class="text-white text-sm me-1">{{ $page.props.auth.user.name }}</span>
              <Link href="/logout" method="post" as="button" class="btn btn-sm text-white px-3" style="background-color: #dc3545;">
                Logout
              </Link>
            </template>
          </div>
        </div>

      </div>
    </nav>

    <!-- CONTAINER UTAMA -->
    <div style="max-width: 1000px; margin: 0 auto; padding: 40px 20px;">
      <slot />
    </div>
  </div>
</template>