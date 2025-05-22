<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BPKB IPB</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    /* Custom font-family */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #e6efff;
      color: #222;
    }
    /* Dropdown show/hide handled with Tailwind + group hover */
    .dropdown1, .dropdown2 {
      display: none;
    }
    .nav-item:hover > .dropdown1,
    .nav-item:hover > .dropdown2 {
      display: flex;
    }
    /* Animation slideIn for fungsi-list li */
    @keyframes slideIn {
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
    .slide-in {
      opacity: 0;
      transform: translateX(50px);
      animation: slideIn 0.6s ease forwards;
    }
    .slide-in:nth-child(1) { animation-delay: 0.2s; }
    .slide-in:nth-child(2) { animation-delay: 0.4s; }
    .slide-in:nth-child(3) { animation-delay: 0.6s; }
    .slide-in:nth-child(4) { animation-delay: 0.8s; }
    .slide-in:nth-child(5) { animation-delay: 1.0s; }
    .slide-in:nth-child(6) { animation-delay: 1.2s; }

    .connector::before, .connector::after {
      content: '';
      position: absolute;
      top: 0;
      width: 50%;
      height: 20px;
      border-top: 1px solid #ccc;
      background-color: #e6efff;
      z-index: 0;
    }
    .connector::before {
      right: 50%;
    }
    .connector::after {
      left: 50%;
      border-left: 1px solid #ccc;
      background-color: #e6efff;
      z-index: 0;
    }
    .only-child::before, .only-child::after {
      display: none;
    }
    .first-child::after {
      border-radius: 5px 0 0 0;
    }
    .last-child::before {
      border-radius: 0 5px 0 0;
      border-right: 1px solid #ccc;
    }
  </style>
</head>
<body class="bg-[#e6efff] text-[#222]">

<!-- ===== HEADER ===== -->
<header class="flex justify-between items-center h-[73px] bg-white px-10 border-b border-gray-300 fixed w-full z-[300] font-thin">
  <div class="flex items-center h-full">
<img src="{{ asset('img/2-removebg-preview.png') }}" alt="Logo BPKB" class="h-[190px] w-auto block mt-4" />
  </div>
  <div class="flex items-center gap-10">
    <nav class="flex gap-8 items-center relative">
      <div class="relative group">
        <a href="{{ url('/home') }}" class="text-[#000080] font-medium pb-[5px] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:bg-[#000080] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Home</a>
        <div class="absolute top-full left-0 bg-white rounded-xl shadow-md flex-col p-2 hidden group-hover:flex z-[999]">
          <a href="{{ url('/home') }}" class="px-4 py-2 hover:bg-gray-200 text-black font-normal text-base">Home</a>
          <a href="{{ url('/home#rank') }}" class="px-4 py-2 hover:bg-gray-200 text-black font-normal text-base">Rangking</a>
          <a href="{{ url('/home#news') }}" class="px-4 py-2 hover:bg-gray-200 text-black font-normal text-base">News</a>
          <a href="{{ url('/home#dokumentasi') }}" class="px-4 py-2 hover:bg-gray-200 text-black font-normal text-base">Dokumentasi</a>
          <a href="{{ url('/home#ops') }}" class="px-4 py-2 hover:bg-gray-200 text-black font-normal text-base">Operations</a>
        </div>
      </div>
      <div class="relative group">
        <a href="{{ url('/about') }}" class="text-[#000080] font-medium pb-[5px] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:bg-[#000080] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">About Us</a>
        <div class="absolute top-full left-0 bg-white rounded-xl shadow-md flex-col p-2 hidden group-hover:flex z-[999]">
          <a href="{{ url('/about#introduction') }}" class="px-4 py-2 hover:bg-gray-200 text-black font-normal text-base">Introduction</a>
          <a href="{{ url('/about#fungsi') }}" class="px-4 py-2 hover:bg-gray-200 text-black font-normal text-base">Fungsi BPKB</a>
          <a href="{{ url('/about#struktur') }}" class="px-4 py-2 hover:bg-gray-200 text-black font-normal text-base">Struktur Organisasi</a>
        </div>
      </div>
      <div>
        <a href="#document" class="text-[#000080] font-medium pb-[5px] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:bg-[#000080] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Document</a>
      </div>
    </nav>
    <div class="relative">
      <input type="text" placeholder="search..." class="py-[6px] pr-[30px] pl-[12px] border border-[#000080] rounded-full outline-none" />
<img src="{{ asset('img/352091_search_icon 1.png') }}" alt="search icon" class="absolute right-[10px] top-1/2 -translate-y-1/2 w-4 h-4" />
    </div>
  </div>
</header>

  <!-- ===== INTRO SECTION ===== -->
  <section id="intro" class="flex justify-center pt-[100px] pb-10 px-5 bg-[#e6efff]">
    <div class="bg-white rounded-lg shadow-md max-w-5xl w-full flex items-center p-8 gap-8">
      <div class="flex-1">
        <p class="text-sm font-semibold text-gray-600 mb-1">IPB University</p>
        <h1 class="text-4xl font-extrabold text-[#2D55AC] mb-2">BPKB</h1>
        <h2 class="text-xl font-semibold text-[#2D55AC] mb-4">Badan Pengembangan Kampus Berkelanjutan</h2>
        <p class="text-[#2D55AC] text-base leading-relaxed">
          BPKB bertugas pada perencanaan dan pengembangan kampus berkelanjutan untuk meningkatkan reputasi IPB dalam pencapaian tujuan pembangunan berkelanjutan, serta memperjelas arah IPB dalam mewujudkan socio-technopreneur university sesuai Rencana Jangka Panjang IPB.
        </p>
      </div>
      <div class="flex-1">
        <img src="{{ asset('img/ipb foto.png') }}" alt="IPB Building" class="rounded-lg shadow-md object-cover w-full h-[250px]" />
      </div>
    </div>
  </section>

  <!-- ===== FUNGSI SECTION ===== -->
  <section id="fungsi" class="relative py-12 px-10 bg-[#e6efff] flex justify-center">
    <div class="relative max-w-5xl w-full flex items-center">
      <div class="absolute left-0 top-0 bottom-0 w-16 bg-[#0B1E7B] rounded-l-3xl flex flex-col justify-center space-y-4 p-2">
        <span class="block w-4 h-4 bg-[#0B1E7B] rounded-full opacity-90"></span>
        <span class="block w-4 h-4 bg-[#0B1E7B] rounded-full opacity-80"></span>
        <span class="block w-4 h-4 bg-[#0B1E7B] rounded-full opacity-70"></span>
        <span class="block w-4 h-4 bg-[#0B1E7B] rounded-full opacity-60"></span>
        <span class="block w-4 h-4 bg-[#0B1E7B] rounded-full opacity-50"></span>
      </div>
      <div class="bg-white rounded-lg shadow-md p-8 ml-12 w-full max-w-3xl">
        <h2 class="text-center text-[#0B1E7B] font-semibold text-2xl mb-6">Fungsi BPKB</h2>
        <ul class="list-disc list-inside text-[#0B1E7B] text-base space-y-3">
          <li>Koordinasi penyusun Rencana Induk Pengembangan IPB mencakup infrastruktur, bidang akademik, dan nonakademik dengan berbasiskan manajemen risiko</li>
          <li>Koordinasi penyusun Rencana Tata Ruang (RTR) IPB University Town yang meliputi areal kampus dan sekitarnya</li>
          <li>Pemberian arahan strategis dan desain pengembangan program kampus berkelanjutan dan pencapaian Sustainable Development Goals untuk bidang akademik, riset, pengabdian masyarakat, dan operasional kampus</li>
          <li>Koordinasi peningkatan rekognisi terhadap IPB dan reputasi dalam pencapaian Sustainable Development Goals dan sebagai kampus berkelanjutan di tingkat nasional dan global</li>
          <li>Pemonitoran dan evaluasi terhadap pembangunan sarana fisik dan non fisik untuk mewujudkan kampus keberlanjutan</li>
          <li>Koordinasi penyusunan Rencana Strategis IPB</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ===== OUR TEAM SECTION ===== -->
  <section id="our-team" class="py-16 bg-[#0B1E7B] flex justify-center">
    <div class="bg-white rounded-lg shadow-md max-w-5xl w-full p-6">
      <h2 class="text-center text-[#0B1E7B] font-bold text-3xl mb-6 uppercase">OUR TEAM</h2>
      <img src="{{ asset('img/tim-bpkb.jpg') }}" alt="Team Photo" class="rounded-lg w-full object-cover" />
    </div>
  </section>

  <!-- ===== STRUKTUR ORGANISASI SECTION ===== -->
  <section id="struktur" class="bg-[#e6efff] py-16 px-4">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-extrabold text-[#0B1E7B] mb-10 uppercase">STRUKTUR ORGANISASI</h2>
      <p class="text-[#0B1E7B] mb-8 text-lg">
        Tim BPKB IPB terdiri dari berbagai unit yang saling berkolaborasi demi pengembangan kampus berkelanjutan.
      </p>

      <div class="flex justify-center mb-10 relative">
        <div class="bg-white rounded-lg shadow-md border border-gray-300 max-w-xs w-full p-6 text-center z-10">
          <h3 class="font-semibold text-lg mb-2">Ketua BPKB</h3>
          <p class="text-gray-700">Dr. Ir. Ibnul Qayim</p>
        </div>
        <div class="absolute top-full left-1/2 transform -translate-x-1/2 h-10 w-px bg-gray-300"></div>
      </div>

      <div class="flex justify-center space-x-6 relative">
        <div class="flex flex-col items-center space-y-6">
          <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
            <h3 class="font-semibold text-lg mb-2">Wakil Ketua Pengembangan Infrastruktur</h3>
            <p class="text-gray-700">Dr. Heriansyah Putra</p>
          </div>
          <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
            <h3 class="font-semibold text-lg mb-2">Asisten Pengembangan Infrastruktur</h3>
            <p class="text-gray-700">Dr. Anisa Dwi Utami</p>
          </div>
        </div>
        <div class="flex flex-col items-center space-y-6">
          <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
            <h3 class="font-semibold text-lg mb-2">Wakil Reputasi</h3>
            <p class="text-gray-700">Dr. Rina Mardiana</p>
          </div>
          <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
            <h3 class="font-semibold text-lg mb-2">Asisten Pengembangan Reputasi</h3>
            <p class="text-gray-700">Fifi Gus Dwiyanti</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
          <h3 class="font-semibold text-lg mb-2">Supervisor Administrasi</h3>
          <p class="text-gray-700">Ade Iskandar</p>
        </div>
        <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
          <h3 class="font-semibold text-lg mb-2">Sekretaris</h3>
          <p class="text-gray-700 whitespace-pre-line">Naro Jihadi
Ridwan
Siti Aminah
Anwar</p>
        </div>
        <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
          <h3 class="font-semibold text-lg mb-2">Asisten Peneliti</h3>
          <p class="text-gray-700 whitespace-pre-line">Windi Mayang
Sari
Hana
Khoirunisa
Aliyah Baida
Zahra Wajdini
Jessica
Veronica
Zayyaan
Nabiila</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="bg-[#0B1E7B] text-white py-10 px-8">
    <div class="max-w-6xl mx-auto grid grid-cols-3 gap-8">
      <!-- Contact Us -->
      <div>
        <h3 class="font-semibold mb-4">BPKB IPB University</h3>
        <p>Badan Pengembangan Kampus Berkelanjutan IPB University</p>
        <div class="mt-4 space-y-2">
          <div class="flex items-center gap-2">
            <svg xmlns="img/mailcon.png" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m0 8l-4-4" />
            </svg>
            <a href="mailto:bpkb@apps.ipb.ac.id" class="hover:underline">bpkb@apps.ipb.ac.id</a>
          </div>
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h1l2 3m0 0l3-3m-3 3v6m6-6v6m6-6v6" />
            </svg>
            <a href="tel:+6281454575" class="hover:underline">+62-8145-4575</a>
          </div>
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 2h-3a4 4 0 00-4 4v3H7v4h4v3a4 4 0 004 4h3l4-4v-3a4 4 0 00-4-4z" />
            </svg>
            <a href="https://instagram.com/bpkbipb" target="_blank" class="hover:underline">@bpkbipb</a>
          </div>
        </div>
      </div>
      <!-- IPB Campus -->
      <div>
        <h3 class="font-semibold mb-4">IPB Campus</h3>
        <ul class="space-y-2">
          <li>IPB Dramaga</li>
          <li>IPB Baranangsiang</li>
          <li>IPB Taman Kencana</li>
          <li>IPB Gunung Gede</li>
          <li>IPB Cilibende</li>
          <li>IPB Sukabumi</li>
        </ul>
      </div>
      <!-- Location -->
      <div>
        <h3 class="font-semibold mb-4">Location</h3>
        <address class="not-italic space-y-2">
          <p>
            <a href="https://goo.gl/maps/xyz" target="_blank" class="hover:underline">
              Gedung B Perpustakaan Lt. 4<br />
              Kampus IPB Dramaga, Dramaga,<br />
              Bogor, Jawa Barat, Indonesia, 16680
            </a>
          </p>
        </address>
      </div>
    </div>
  </footer>
 <div class="bg-white text-black text-sm px-8 py-4">© 2025 BPKB IPB University. All rights reserved.</div>
</body>
</html>
