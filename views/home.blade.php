<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BPKB IPB</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-poppins">

<!-- ===== HEADER ===== -->
<header class="flex justify-between items-center h-[73px] bg-white px-10 border-b border-gray-300 fixed w-full z-[300] font-thin">
  <div class="flex items-center h-full">
<img src="{{ asset('img/2-removebg-preview.png') }}" alt="Logo BPKB" class="h-[190px] w-auto block mt-4" />
  </div>
  <div class="flex items-center gap-10">
    <nav class="flex gap-8 items-center relative">
      <div class="relative group">
        <a href="#home" class="text-[#000080] font-medium pb-[5px] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:bg-[#000080] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Home</a>
        <div class="absolute top-full left-0 bg-white rounded-xl shadow-md flex-col p-2 hidden group-hover:flex z-[999]">
          <a href="#home" class="px-4 py-2 hover:bg-gray-200 text-black">Home</a>
          <a href="#rank" class="px-4 py-2 hover:bg-gray-200 text-black">Rangking</a>
          <a href="#news" class="px-4 py-2 hover:bg-gray-200 text-black">News</a>
          <a href="#dokumentasi" class="px-4 py-2 hover:bg-gray-200 text-black">Dokumentasi</a>
          <a href="#ops" class="px-4 py-2 hover:bg-gray-200 text-black">Operations</a>
        </div>
      </div>
      <div class="relative group">
        <a href="{{ url('/about') }}" class="text-[#000080] font-medium pb-[5px] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:bg-[#000080] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">About Us</a>
        <div class="absolute top-full left-0 bg-white rounded-xl shadow-md flex-col p-2 hidden group-hover:flex z-[999]">
          <a href="{{ url('/about#introduction') }}" class="px-4 py-2 hover:bg-gray-200 text-black">Introduction</a>
          <a href="{{ url('/about#fungsi') }}" class="px-4 py-2 hover:bg-gray-200 text-black">Fungsi BPKB</a>
          <a href="{{ url('/about#struktur') }}" class="px-4 py-2 hover:bg-gray-200 text-black">Struktur Organisasi</a>
        </div>
      </div>
      <div class="relative group">
        <a href="#document" class="text-[#000080] font-medium pb-[5px] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:bg-[#000080] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Document</a>
        <div class="absolute top-full left-0 bg-white rounded-xl shadow-md flex-col p-2 hidden group-hover:flex z-[999]">
          <a href="{{ url('/roadmap') }}" class="px-4 py-2 hover:bg-gray-200 text-black">Roadmap</a>
        </div>
      </div>
    </nav>
    <div class="relative">
      <input type="text" placeholder="search..." class="py-[6px] pr-[30px] pl-[12px] border border-[#000080] rounded-full outline-none" />
<img src="{{ asset('img/352091_search_icon 1.png') }}" alt="search icon" class="absolute right-[10px] top-1/2 -translate-y-1/2 w-4 h-4" />
    </div>
  </div>
</header>

<!-- ===== HOME ===== -->
<main>
<section id="home" class="relative h-screen flex flex-col justify-center items-start pl-[55vw] z-[1]">
  <div class="absolute top-0 left-0 w-full h-screen bg-cover bg-center -z-[1]" style="background-image: url('{{ asset('img/Group 17.png') }}');"></div>
  <h3 class="font-semibold italic text-black">IPB University</h3>
  <h1 class="text-[5rem] font-bold bg-gradient-to-b from-[#080883] to-[#278BE9] bg-clip-text text-transparent mt-[-8px]">BPKB</h1>
  <h2 class="font-semibold text-[#191988]">Badan Pengembangan Kampus Berkelanjutan</h2>
  <a href="{{ url('/about') }}" class="inline-block px-4 py-1 bg-white text-[#080883] rounded-full text-sm font-normal shadow-[ -2px_2px_4px_#2D55AC] mt-3 hover:bg-[#E2E6FF] transition-colors">Selengkapnya</a>
</section>

<!-- ===== RANK ===== -->
<section id="rank" class="pt-[100px] bg-[#e9f0ff]">
  <h1 class="text-center text-2xl font-bold bg-gradient-to-r from-[#080883] to-[#2D55AC] text-transparent bg-clip-text mb-10">Journey of UI Green Matic</h1>
  <div class="pt-[50px] flex justify-center items-start gap-[60px]">
<img src="{{ asset('img/Group 11.png') }}" class="w-[400px] rounded-lg shadow-md">
    <div class="text-[#000080] mt-7">
      <h2 class="text-lg font-semibold mb-1">2025</h2>
      <p class="mb-3">keterangan kemenangan 2025</p>
      <hr class="w-[250px] h-[2px] bg-[#000080] border-0 mb-3">
      <h2 class="text-lg font-semibold mb-1">2024</h2>
      <p class="mb-3">keterangan kemenangan 2024</p>
      <hr class="w-[250px] h-[2px] bg-[#000080] border-0 mb-3">
      <h2 class="text-lg font-semibold mb-1">2023</h2>
      <p class="mb-3">keterangan kemenangan 2023</p>
      <hr class="w-[250px] h-[2px] bg-[#000080] border-0">
    </div>
  </div>
</section>

<!-- ===== NEWS ===== -->
<section id="news" class="bg-[#E8EFFF] pt-[120px] pb-[100px]">
  <div class="max-w-[1200px] mx-auto">
    <h1 class="text-center text-[2.4rem] font-bold bg-gradient-to-r from-[#080883] to-[#2D55AC] text-transparent bg-clip-text mb-[40px]">News</h1>
    <div class="pt-[60px] flex gap-[100px] justify-center flex-wrap">
      <!-- Example Card -->
      <article class="bg-white rounded-2xl overflow-hidden shadow-lg w-[280px] flex flex-col transition-transform hover:-translate-y-1 hover:shadow-[#2D55AC] duration-300">
        <div class="h-[180px] w-full bg-gray-300 bg-cover bg-center"></div>
        <div class="p-5">
          <h2 class="text-[#1a2b8d] text-[1rem] font-bold mb-2">Judul Artikel</h2>
          <p class="text-[#555] text-[0.85rem] mb-4">Deskripsi singkat artikel...</p>
<a href="{{ url('/article') }}" class="inline-block bg-[#1a2b8d] text-white px-5 py-2 rounded-full text-[0.85rem] font-medium hover:bg-[#0d1a6a] transition-colors">Baca Selengkapnya</a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ===== DOKUMENTASI ===== -->
<section id="dokumentasi" class="py-[100px] bg-gradient-to-b from-[#E8EFFF] via-[#A0B3F0] to-[#2D55AC]">
  <div class="max-w-[1100px] mx-auto mb-[35px] px-4">
    <h1 class="text-center text-[2.4rem] font-bold bg-gradient-to-r from-[#080883] to-[#2D55AC] text-transparent bg-clip-text mb-[40px]">Documentation</h1>
    <div class="flex flex-wrap justify-center gap-6">
<a href="#" class="relative block w-[300px] bg-white rounded-xl overflow-visible shadow-lg hover:-translate-y-1 transition-transform">
  <span class="absolute top-[-40px] left-[40px] z-[2] text-white bg-[#2D55AC] px-4 py-1 text-[0.8rem] rounded-md">Judul Event</span>
  <img src="{{ asset('img\dokumentasi\Screenshot 2025-05-12 153541.png') }}" alt="Event" class="w-full h-full object-cover aspect-square rounded-xl">
  <span class="absolute bottom-[5px] left-1/2 transform -translate-x-1/2 text-white text-[1rem] font-semibold">Tanggal</span>
</a>
    </div>
  </div>
</section>

<!-- ===== OPS ===== -->
<section id="ops" class="relative">
<img src="{{ asset('img/bg ops.png') }}" alt="" class="absolute top-0 left-0 w-full h-full object-cover -z-[1]">
  <div class="relative z-[1] pt-24 pb-12">
    <h3 class="text-white text-[2.1rem] font-bold text-center mb-10">Green Campus Operations</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 max-w-[1000px] mx-auto px-4">
      <div class="flex flex-col items-center text-center text-white max-w-xs mt-[24px]">
        <img src="{{ asset('img/bangunan.png') }}" class="w-[150px] h-[150px] object-contain mb-6">
        <h4 class="text-[1rem] font-semibold mb-3">Nama Operasi</h4>
        <p class="text-[1.1rem] font-bold">123</p>
      </div>
      <div class="flex flex-col items-center text-center text-white max-w-xs mt-[24px]">
        <img src="{{ asset('img/energy.png') }}" class="w-[150px] h-[150px] object-contain mb-6">
        <h4 class="text-[1rem] font-semibold mb-3">Nama Operasi</h4>
        <p class="text-[1.1rem] font-bold">123</p>
      </div>
      <div class="flex flex-col items-center text-center text-white max-w-xs mt-[24px]">
        <img src="{{ asset('img/education.png') }}" class="w-[150px] h-[150px] object-contain mb-6">
        <h4 class="text-[1rem] font-semibold mb-3">Nama Operasi</h4>
        <p class="text-[1.1rem] font-bold">123</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="bg-gradient-to-b from-[#2D55AC] to-[#0C0B8B] text-white">
  <div class="flex flex-wrap justify-between items-start p-8 md:p-20 gap-10">
    <div class="flex-1 min-w-[250px]">
      <h4 class="text-[1rem] font-semibold mb-1">BPKB IPB University</h4>
      <p class="text-[0.85rem] leading-relaxed">Badan Pengembangan Kampus Berkelanjutan IPB University</p>
      <div class="mt-5">
        <h4 class="text-[1rem] font-semibold mb-2">Contact Us:</h4>
        <div class="flex items-center gap-2 mb-2">
<img src="{{ asset('img/callcon.png') }}" class="w-5 h-5" alt="phone">
          <a href="tel:123456789" class="text-[0.85rem] hover:underline">123-456-789</a>
        </div>
        <div class="flex items-center gap-2 mb-2">
<img src="{{ asset('img/mailcon.png') }}" class="w-5 h-5" alt="email">
          <a href="mailto:bpkb@ipb.ac.id" class="text-[0.85rem] hover:underline">bpkb@ipb.ac.id</a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-white text-black text-sm px-8 py-4">© 2025 BPKB IPB University. All rights reserved.</div>
</footer>

</main>
</body>
</html>

