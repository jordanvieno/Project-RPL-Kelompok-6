<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website BPKB</title>
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
          <a href="{{ url('/about#introduction') }}" class="px-4 py-2 hover:bg-gray-200 text-black">Introduction</a>
          <a href="{{ url('/about#fungsi') }}" class="px-4 py-2 hover:bg-gray-200 text-black">Fungsi BPKB</a>
          <a href="{{ url('/about#struktur') }}" class="px-4 py-2 hover:bg-gray-200 text-black">Struktur Organisasi</a>
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

  <!-- Main Content -->
  <main class="container mx-auto flex gap-8 pt-36 mb-10 max-w-7xl px-4">
    <section class="flex-3 bg-white p-10 rounded-2xl">
      <h1 class="text-xl font-bold mb-4 text-justify">
        Pembelajaran Praktik Pengelolaan Sampah Berbasis Komunitas di School of Waste Management (SWAM), Desa Margajaya
      </h1>
      <div class="meta mb-4 text-sm text-gray-600">
        <span>20 Maret 2024</span> | <span>By Admin</span>
      </div>
<img
        src="{{ asset('img\ipb foto.png') }}"
        alt="Gedung_rektorat"
        class="mx-auto rounded-sm object-cover max-h-96"
      />
      <p class="text-justify mb-4 leading-relaxed">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p class="text-justify mb-4 leading-relaxed">
        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam.
      </p>
      <p class="text-justify mb-4 leading-relaxed">
        Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi.
      </p>
      <p class="text-justify mb-4 leading-relaxed">
        Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst. Morbi ac felis. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo.
      </p>
      <p class="text-justify mb-4 leading-relaxed">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p class="text-justify mb-4 leading-relaxed">
        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam.
      </p>
      <p class="text-justify mb-4 leading-relaxed">
        Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi.
      </p>
      <p class="text-justify mb-4 leading-relaxed">
        Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst. Morbi ac felis. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo.
      </p>
    </section>

    <aside class="flex-1 min-w-[220px]">
      <div class="bg-white rounded-md mb-5 p-4 shadow-sm">
        <h3 class="text-lg font-bold mb-4 border-b border-gray-300 pb-2">Berita Lainnya</h3>

        <div class="sidebar-article mb-5">
          <a href="berita1.html" class="text-gray-900 hover:text-blue-900 hover:underline block text-justify">
            Submit Questionnaire UI GreenMetric World University Ranking, IPB University: Pendekatan Sistematis Untuk Peningkatan Sustainability Campus
          </a>
          <hr class="border-gray-300 mb-3" />
        </div>

        <div class="sidebar-article mb-5">
          <a href="berita2.html" class="text-gray-900 hover:text-blue-900 hover:underline block text-justify">
            Diskusi Pengembangan IPB Innovation Valley
          </a>
          <hr class="border-gray-300 mb-3" />
        </div>

        <div class="sidebar-article">
          <a href="berita3.html" class="text-gray-900 hover:text-blue-900 hover:underline block text-justify">
            Penandatanganan Mou antara Yayasan Ardhya Garini dengan IPB
          </a>
        </div>
      </div>
    </aside>
  </main>

  <!-- ===== FOOTER SECTION ===== -->
  <footer id="footer" class="w-full h-[300px] bg-gradient-to-b from-blue-800 to-blue-900">
    <div class="footer flex flex-wrap justify-between items-start max-w-7xl mx-auto p-5 pt-10 gap-10 h-[200px]">
      <div class="bpkbf flex-1 min-w-[250px] text-white">
        <h4 class="titbpkb text-base font-semibold mb-2">BPKB IPB University</h4>
        <p class="judulf text-sm mb-4">Badan Pengembangan Kampus Berkelanjutan IPB University</p>

        <div class="contactus mt-5">
          <h4 class="tittlec text-base font-semibold mb-1">Contact Us:</h4>

          <div class="emailll flex items-center gap-2 mb-1">
<img src="{{ asset('img/mailcon.png') }}" alt="mail icon" class="w-5 h-5" />
            <a href="mailto:bpkb@apps.ipb.ac.id?subject=Pertanyaan%20dari%20Website" class="email text-sm text-white hover:underline">bpkb@apps.ipb.ac.id</a>
          </div>

          <div class="telppp flex items-center gap-2 mb-1">
<img src="{{ asset('img/callcon.png') }}" alt="call icon" class="w-5 h-5" />
            <a href="tel:+6281454575" class="text-sm text-white hover:underline">+62-8145-4575</a>
          </div>

          <div class="instagrammmm flex items-center gap-2">
<img src="{{ asset('img/igcon.png') }}" alt="igcon.png" class="w-5 h-5" />
            <a href="https://www.instagram.com/bpkbipb?igsh=YnNxcnZwZmNyZjFh" class="ig text-sm text-white hover:underline">@bpkbipb</a>
          </div>
        </div>
      </div>

      <div class="alamatb flex-1 min-w-[250px] text-white">
        <h4 class="titalamat text-base font-semibold mb-2">Location</h4>
        <div class="alamatttssss flex items-center gap-2">
<img src="{{ asset('img/loccon.png') }}" alt="icon location" class="loccon w-5 h-5" />
          <a href="https://maps.app.goo.gl/WREwn5KjrmAi8rdMA" target="_blank" class="alamat text-sm text-white hover:underline">
            Gedung B Perpustakaan Lt. 4, Kampus IPB Dramaga, Dramaga, Bogor, Jawa Barat, Indonesia, 16680
          </a>
        </div>
      </div>

      <div class="campus-location flex-1 min-w-[250px] text-white">
        <h4 class="text-base font-semibold mb-2">Campus Location</h4>
        <ul class="list-none p-0">
          <li class="mb-1"><a href="https://maps.app.goo.gl/Pmt6GtwjoD71S1M19" target="_blank" class="text-sm text-white hover:underline">IPB Dramaga</a></li>
          <li class="mb-1"><a href="https://maps.app.goo.gl/tH5zvpEaG71hm93n9" target="_blank" class="text-sm text-white hover:underline">IPB Baranangsiang</a></li>
          <li class="mb-1"><a href="https://maps.app.goo.gl/QEMyNJCdAvfng39D6" target="_blank" class="text-sm text-white hover:underline">IPB Taman Kencana</a></li>
          <li class="mb-1"><a href="https://maps.app.goo.gl/i6HqNLEUosaGkqtBA" target="_blank" class="text-sm text-white hover:underline">IPB Gunung Gede</a></li>
          <li class="mb-1"><a href="https://maps.app.goo.gl/r3LB6zvrGQuSTwQz8" target="_blank" class="text-sm text-white hover:underline">IPB Cilibende</a></li>
          <li class="mb-1"><a href="https://maps.app.goo.gl/f6mR3qRSXQLbHUCb7" target="_blank" class="text-sm text-white hover:underline">IPB Sukabumi</a></li>
        </ul>
      </div>
    </div>

    <div class="br">
      <p class="tulisan bg-white w-full p-4 text-sm text-black mt-14 mb-0">© 2025 Badan Pengembangan Kampus Berkelanjutan. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
