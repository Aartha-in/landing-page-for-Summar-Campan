<?php
/**
 * Template Name: Summar camp
 */

get_header(); ?>

<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    corePlugins: {
      preflight: false,
    }
  }
</script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

<style>
    /* --- HIDE THEME HEADER & FOOTER (CRITICAL UPDATE) --- */
    /* This targets standard WordPress and PopularFX specific headers/footers */
    header, .site-header, #masthead, .popularfx-header,
    footer, .site-footer, #colophon, .popularfx-footer { 
        display: none !important; 
    }

    /* Scope all styles inside this class */
    .camp-wrapper {
        font-family: 'Poppins', sans-serif;
        background-color: #ffffff;
        color: #1e293b;
        overflow-x: hidden;
        margin: 0;
        padding: 0;
        min-height: 100vh; /* Ensures the page covers the full screen */
    }

    /* Reset spacing for a clean look since preflight is off */
    .camp-wrapper h1, .camp-wrapper h2, .camp-wrapper h3 { margin: 0; line-height: 1.2; }
    .camp-wrapper p { margin: 0; }
    .camp-wrapper ul { list-style: none; padding: 0; margin: 0; }
</style>

<div class="camp-wrapper">
    <section class="bg-[#002395] text-white py-16 px-6 text-center">
        <h1 class="text-4xl md:text-6xl font-bold italic mb-2">Francophile FRENCH</h1>
        <h2 class="text-3xl md:text-5xl font-extrabold mb-8 uppercase tracking-tighter">SUMMER CAMP</h2>
        
        <div class="inline-block bg-white text-blue-900 rounded-2xl p-6 shadow-xl border-b-4 border-red-600">
            <p class="font-bold text-lg"><i class="fa-solid fa-calendar-days mr-2"></i> 1 May – 31 May 2026</p>
            <p class="text-red-600 font-black">ONLINE & OFFLINE</p>
        </div>
    </section>

    <section class="py-12 flex justify-center px-6">
        <div class="bg-yellow-400 p-8 rounded-3xl shadow-lg transform -rotate-2 border-4 border-white text-center max-w-sm w-full">
            <p class="text-blue-900 font-bold uppercase text-sm">Early Bird Offer</p>
            <p class="text-5xl font-black text-blue-900">₹5000</p>
            <p class="text-xs font-bold text-red-700 mt-2">Valid till 15 April 2026</p>
        </div>
    </section>

    <section class="py-12 container mx-auto px-6 grid md:grid-cols-3 gap-8">
        <div class="bg-white border border-gray-100 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition">
            <h3 class="text-xl font-bold text-blue-600 mb-4 border-b pb-2">KIDS (6-12 yrs)</h3>
            <ul class="space-y-3 text-gray-700">
                <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Songs & Games</li>
                <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Basic Vocabulary</li>
                <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Fun Conversations</li>
            </ul>
        </div>
        <div class="bg-white border border-gray-100 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition">
            <h3 class="text-xl font-bold text-red-600 mb-4 border-b pb-2">TEENS (13-17 yrs)</h3>
            <ul class="space-y-3 text-gray-700">
                <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Role Plays</li>
                <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Grammar Mastery</li>
                <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Culture Trends</li>
            </ul>
        </div>
        <div class="bg-white border border-gray-100 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition">
            <h3 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">ADULTS (18+ yrs)</h3>
            <ul class="space-y-3 text-gray-700">
                <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Business French</li>
                <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Travel Phrases</li>
                <li><i class="fa-solid fa-check text-green-500 mr-2"></i> Fluent Speaking</li>
            </ul>
        </div>
    </section>

    <section class="py-20 text-center bg-gray-50">
        <h3 class="text-2xl font-bold mb-8">VIVE LE FRANÇAIS!</h3>
        <a href="https://wa.me/919000266171" class="bg-green-600 text-white px-12 py-5 rounded-full font-bold text-2xl shadow-2xl hover:bg-green-700 inline-flex items-center gap-4 transition transform hover:scale-105">
            <i class="fa-brands fa-whatsapp text-3xl"></i> Enroll via WhatsApp
        </a>
        <p class="mt-6 text-xl font-bold text-blue-900">Contact: 9000266171</p>
    </section>
</div>

<?php get_footer(); ?>