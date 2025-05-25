
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BPKB IPB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      /* Fix for Read More buttons alignment and shape */
      section.pt-24.pb-16 a.block.text-center.border {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
        border-radius: 0 0 0.75rem 0.75rem !important;
        display: inline-block !important;
        width: 100% !important;
        box-sizing: border-box !important;
      }
    </style>
  </head>
  <body class="font-poppins">
    <!-- ===== HEADER ===== -->
    <header
      class="flex justify-between items-center h-[73px] bg-white px-10 border-b border-gray-300 fixed w-full z-[300] font-thin"
    >
      <div class="flex items-center h-full">
        <img
          src="{{ asset('img/2-removebg-preview.png') }}"
          alt="Logo BPKB"
          class="h-[190px] w-auto block mt-4"
        />
      </div>
      <div class="flex items-center gap-10">
        <nav class="flex gap-8 items-center relative">
          <div class="relative group">
            <a
              href="{{ url('/home') }}"
              class="text-[#000080] font-medium pb-[5px] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:bg-[#000080] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300"
              >Home</a
            >
            <div
              class="absolute top-full left-0 bg-white rounded-xl shadow-md flex-col p-2 hidden group-hover:flex z-[999]"
            >
              <a
                href="{{ url('/home') }}"
                class="px-4 py-2 hover:bg-gray-200 text-black"
                >Home</a
              >
              <a
                href="{{ url('/home#rank') }}"
                class="px-4 py-2 hover:bg-gray-200 text-black"
                >Rangking</a
              >
              <a
                href="{{ url('/home#news') }}"
                class="px-4 py-2 hover:bg-gray-200 text-black"
                >News</a
              >
              <a
                href="{{ url('/home#dokumentasi') }}"
                class="px-4 py-2 hover:bg-gray-200 text-black"
                >Dokumentasi</a
              >
              <a
                href="{{ url('/home#ops') }}"
                class="px-4 py-2 hover:bg-gray-200 text-black"
                >Operations</a
              >
            </div>
          </div>
          <div class="relative group">
            <a
              href="{{ url('/about') }}"
              class="text-[#000080] font-medium pb-[5px] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:bg-[#000080] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300"
              >About Us</a
            >
            <div
              class="absolute top-full left-0 bg-white rounded-xl shadow-md flex-col p-2 hidden group-hover:flex z-[999]"
            >
              <a
                href="{{ url('/about#introduction') }}"
                class="px-4 py-2 hover:bg-gray-200 text-black"
                >Introduction</a
              >
              <a
                href="{{ url('/about#fungsi') }}"
                class="px-4 py-2 hover:bg-gray-200 text-black"
                >Fungsi BPKB</a
              >
              <a
                href="{{ url('/about#struktur') }}"
                class="px-4 py-2 hover:bg-gray-200 text-black"
                >Struktur Organisasi</a
              >
            </div>
          </div>
          <div class="relative group">
            <a
              href="#document"
              class="text-[#000080] font-medium pb-[5px] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-full after:bg-[#000080] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300"
              >Document</a
            >
            <div
              class="absolute top-full left-0 bg-white rounded-xl shadow-md flex-col p-2 hidden group-hover:flex z-[999]"
            >
              <a
                href="{{ url('/roadmap') }}"
                class="px-4 py-2 hover:bg-gray-200 text-black"
                >Roadmap</a
              >
            </div>
          </div>
        </nav>
        <div class="relative">
          <input
            type="text"
            placeholder="search..."
            class="py-[6px] pr-[30px] pl-[12px] border border-[#000080] rounded-full outline-none"
          />
          <img
            src="{{ asset('img/352091_search_icon 1.png') }}"
            alt="search icon"
            class="absolute right-[10px] top-1/2 -translate-y-1/2 w-4 h-4"
          />
        </div>
      </div>
    </header>

    <main>
      <section id="home"></section>
      <section id="rank"></section>
      <section id="news"></section>
      <section id="dokumentasi"></section>
      <section id="ops"></section>

      <!-- ===== Road Map SECTION ===== -->
      <section class="pt-24 pb-16 bg-[#e6efff] text-center">
        <h2 class="text-3xl font-bold text-[#003399] mb-8">Road Map</h2>
        <div class="max-w-6xl mx-auto flex flex-wrap justify-center gap-8 px-4">
          <div class="bg-white rounded-xl shadow-lg w-60 flex flex-col justify-between overflow-hidden hover:shadow-xl transition-shadow duration-300 h-[320px]">
            <img src="{{ asset('img/road-map.png') }}" alt="Gambar Roadmap" class="w-full h-40 object-cover" />
            <h2 class="text-lg font-semibold text-[#003399] p-4">Rencana Jangka Panjang IPB<br>2019 - 2025</h2>
            <a href="https://drive.google.com/file/d/1S40vBaUNF5KCWKvRkoYhvQxFDvCw-uuz/view?usp=drive_link" target="_blank" class="block w-full text-center text-[#003399] border border-[#003399] rounded-b-xl py-2 font-semibold hover:bg-[#003399] hover:text-white transition-colors">Read More</a>
          </div>
        </div>
      </section>

      <!-- ===== Magazine SECTION ===== -->
      <section class="pt-24 pb-16 bg-[#e6efff] text-center">
        <h2 class="text-3xl font-bold text-[#003399] mb-8">Magazine</h2>
        <div class="max-w-6xl mx-auto flex flex-wrap justify-center gap-8 px-4">
          <div class="bg-white rounded-xl shadow-lg w-60 flex flex-col justify-between overflow-hidden hover:shadow-xl transition-shadow duration-300 h-[320px]">
            <img src="{{ asset('img/ipb-suv.png') }}" alt="IPB SUV" class="w-full h-40 object-cover" />
            <h2 class="text-lg font-semibold text-[#003399] p-4">IPB SUV</h2>
            <a href="https://drive.google.com/file/d/124m44iyncjnRudxFP-w15ejV02AVlCo4/view?usp=drive_link" target="_blank" class="block w-full text-center text-[#003399] border border-[#003399] rounded-b-xl py-2 font-semibold hover:bg-[#003399] hover:text-white transition-colors">Read More</a>
          </div>
          <div class="bg-white rounded-xl shadow-lg w-60 flex flex-col justify-between overflow-hidden hover:shadow-xl transition-shadow duration-300 h-[320px]">
            <img src="{{ asset('img/ipb-town.png') }}" alt="IPB TOWN" class="w-full h-40 object-cover" />
            <h2 class="text-lg font-semibold text-[#003399] p-4">IPB TOWN</h2>
            <a href="https://drive.google.com/file/d/10DBc1m6SYkJZG08EjVAU1TeZgLkZSoW9/view?usp=drive_link" target="_blank" class="block w-full text-center text-[#003399] border border-[#003399] rounded-b-xl py-2 font-semibold hover:bg-[#003399] hover:text-white transition-colors">Read More</a>
          </div>
        </div>
      </section>

      <!-- ===== Sustainability Module SECTION ===== -->
      <section class="pt-24 pb-16 bg-[#e6efff] text-center">
        <h2 class="text-3xl font-bold text-[#003399] mb-8">Integrated Sustainability Report and Learning Module</h2>
        <div class="max-w-6xl mx-auto flex flex-wrap justify-center gap-8 px-4">
          <div class="bg-white rounded-xl shadow-lg w-60 flex flex-col justify-between overflow-hidden hover:shadow-xl transition-shadow duration-300 h-[320px]">
            <img src="{{ asset('img/sustainability-report.png') }}" alt="Sustainability Report" class="w-full h-40 object-cover" />
            <h2 class="text-lg font-semibold text-[#003399] p-4">Sustainability Report</h2>
            <a href="https://drive.google.com/file/d/1EYa9b2eEGOHBS76WzQq5E81VNZvNQL5z/view?usp=drive_link" target="_blank" class="block w-full text-center text-[#003399] border border-[#003399] rounded-b-xl py-2 font-semibold hover:bg-[#003399] hover:text-white transition-colors">Read More</a>
          </div>
          <div class="bg-white rounded-xl shadow-lg w-60 flex flex-col justify-between overflow-hidden hover:shadow-xl transition-shadow duration-300 h-[320px]">
            <img src="{{ asset('img/life-action.png') }}" alt="Sustainable Lifestyle Action" class="w-full h-40 object-cover" />
            <h2 class="text-lg font-semibold text-[#003399] p-4">Sustainable Lifestyle Action</h2>
            <a href="https://drive.google.com/file/d/12E9UyQNOc9yBtYM8Zlzzi3MI24bLDbCw/view?usp=drive_link" target="_blank" class="block w-full text-center text-[#003399] border border-[#003399] rounded-b-xl py-2 font-semibold hover:bg-[#003399] hover:text-white transition-colors">Read More</a>
          </div>
          <div class="bg-white rounded-xl shadow-lg w-60 flex flex-col justify-between overflow-hidden hover:shadow-xl transition-shadow duration-300 h-[320px]">
            <img src="{{ asset('img/mindful-sustainability.png') }}" alt="Mindful Sustainability Compass" class="w-full h-40 object-cover" />
            <h2 class="text-lg font-semibold text-[#003399] p-4">Mindful Sustainability Compass</h2>
            <a href="https://drive.google.com/file/d/1qjcaa0xKjOGoG7ZvqXhWUxPkh1x3izNs/view?usp=drive_link" target="_blank" class="block w-full text-center text-[#003399] border border-[#003399] rounded-b-xl py-2 font-semibold hover:bg-[#003399] hover:text-white transition-colors">Read More</a>
          </div>
        </div>
      </section>

      <!-- ===== Policy Brief SECTION ===== -->
      <section class="pt-24 pb-16 bg-[#e6efff] text-center">
        <h2 class="text-3xl font-bold text-[#003399] mb-8">Policy Brief</h2>
        <div class="max-w-6xl mx-auto flex flex-wrap justify-center gap-8 px-4">
          <div class="bg-white rounded-xl shadow-lg w-60 flex flex-col justify-between overflow-hidden hover:shadow-xl transition-shadow duration-300 h-[320px]">
            <img src="{{ asset('img/tata-ruang.png') }}" alt="Penguatan Tata Ruang Kota dalam Mitigasi Dampak Perubahan Iklim" class="w-full h-40 object-cover" />
            <h2 class="text-lg font-semibold text-[#003399] p-4">Penguatan Tata Ruang Kota dalam Mitigasi Dampak Perubahan Iklim</h2>
            <a href="https://journal.ipb.ac.id/index.php/agro-maritim/article/view/59033/29430" target="_blank" class="block w-full text-center text-[#003399] border border-[#003399] rounded-b-xl py-2 font-semibold hover:bg-[#003399] hover:text-white transition-colors">Read More</a>
          </div>
          <div class="bg-white rounded-xl shadow-lg w-60 flex flex-col justify-between overflow-hidden hover:shadow-xl transition-shadow duration-300 h-[340px]">
            <img src="{{ asset('') }}" alt="Wujudkan Kampus Berkelanjutan melalui Regenerative Waste Governance" class="w-full h-32 object-cover rounded-t-xl" />
            <h2 class="text-lg font-semibold text-[#003399] p-4 flex-grow">Wujudkan Kampus Berkelanjutan melalui Regenerative Waste Governance</h2>
            <a href="https://journal.ipb.ac.id/index.php/agro-maritim/article/view/56638/29270" target="_blank" class="block w-full text-center text-[#003399] border border-[#003399] rounded-b-xl py-2 font-semibold hover:bg-[#003399] hover:text-white transition-colors">Read More</a>
          </div>
          <div class="bg-white rounded-xl shadow-lg w-60 flex flex-col justify-between overflow-hidden hover:shadow-xl transition-shadow duration-300 h-[320px]">
            <img src="{{ asset('img/polbrief-nature.png') }}" alt="Komitmen IPB University sebagai Nature Positive Universities" class="w-full h-40 object-cover" />
            <h2 class="text-lg font-semibold text-[#003399] p-4">Komitmen IPB University sebagai Nature Positive Universities</h2>
            <a href="https://journal.ipb.ac.id/index.php/agro-maritim/article/view/56649/29268" target="_blank" class="block w-full text-center text-[#003399] border border-[#003399] rounded-b-xl py-2 font-semibold hover:bg-[#003399] hover:text-white transition-colors">Read More</a>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>

    

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
