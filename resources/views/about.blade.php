<x-guest-layout>
<section class="h-6"></section> <!-- spacer lebih kecil -->

<!-- Swiper Slider -->
<div class="swiper mySwiper max-w-full mx-auto px-4 mb-12"> <!-- margin-bottom lebih kecil -->
    <div class="swiper-wrapper">
        @php
            $images = ['dalam.jpg', 'dpn.jpg', 'depan.jpg', 'depan 2.jpg'];
        @endphp
        @foreach ($images as $index => $img)
            <div class="swiper-slide px-1">
                <img src="{{ asset('images/' . $img) }}" alt="Galeri {{ $index + 1 }}"
                    class="w-full mx-auto object-cover rounded-lg shadow-md" style="max-height: 480px;" />
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination mt-6"></div>
</div>

<section class="mb-8 py-8"> <!-- mb-32 jadi mb-16, py-12 jadi py-8 -->
  <div class="flex flex-col md:flex-row items-center justify-center gap-8 max-w-5xl mx-auto px-4">
    <img 
      src="{{ asset('images/plang2.jpg') }}" 
      alt="Resto & Cafe Mas Bro" 
      class="w-full md:w-1/3 rounded-2xl shadow-lg object-cover h-64 shadow-md border-5 border-yellow-400"
      />

    <div class="md:w-1/2 mt-4 md:mt-0 text-left">
  <h1 class="text-3xl font-extrabold text-red-700 mb-3 drop-shadow-lg">Tentang Kami</h1>
  <div class="w-20 h-1 bg-yellow-400 rounded-full mb-4"></div>

  <p class="text-gray-800 text-sm leading-relaxed text-justify">

        <span class="font-semibold text-red-600">Resto & Cafe Mas Bro</span> adalah tempat makan yang menawarkan suasana nyaman dan cita rasa yang selalu mengesankan. 
        Kami percaya makan bersama adalah momen berharga yang penuh dengan cerita dan kebahagiaan. 
        Awal mula nama <span class="font-semibold text-red-600">Mas Bro</span> datang dari sebuah candaan ringan di antara teman-teman dekat pemilik usaha. 
        Sebuah ledekan yang awalnya hanya gurauan, tapi kemudian menjadi nama yang melekat dan identitas dari tempat ini. Dari situ, usaha kecil ini berkembang menjadi restoran dan cafe yang kini dicintai banyak pelanggan. 
        Sejak berdiri pada tahun 2015, <span class="font-semibold text-red-600">Mas Bro</span> terus berkomitmen menghadirkan hidangan lezat dan suasana hangat yang membuat setiap kunjungan menjadi pengalaman tak terlupakan. 
      </p>
    </div>
  </div>
</section>
<section class="px-4">
  <div class="flex justify-center gap-6 mt-12 mb-8">
    @php
      $stats = [
        ['value' => '21+', 'label' => 'Menu Variatif'],
        ['value' => '4.9', 'label' => 'Rating Pelanggan'],
        ['value' => 'Sejak 2015', 'label' => 'Pengalaman'],
      ];
    @endphp

    @foreach ($stats as $stat)
      <div
        style="border: 2px solid rgb(255, 38, 38); width: 180px; height: 90px;"
        class="bg-white rounded-xl p-4 shadow-sm flex flex-col justify-center items-center hover:shadow-md transition-shadow"
      >
        <span class="text-xl text-red-600 font-bold">{{ $stat['value'] }}</span>
        <div class="text-sm text-gray-700 mt-1 font-medium">{{ $stat['label'] }}</div>
      </div>
    @endforeach
  </div>
</section>
<section class="bg-white py-8 px-4">
  <h1 class="text-3xl font-extrabold text-center text-red-700 drop-shadow-lg">Ulasan Pelanggan</h1>
  <div class="w-20 h-1 bg-yellow-400 rounded-full mx-auto mt-2 mb-4"></div>

  <div class="mt-8 overflow-x-auto">
    <div class="flex space-x-4 pb-4 flex-nowrap">
      @php
          $reviews = [
              ['name' => 'Nur Aizah', 'date' => '6 bulan lalu', 'rating' => 5, 'comment' => 'Ayam gorengnya krispi banget sampe tulang-tulang. Pengin nyoba yg bakar... Tp nanti kapan2. Cah kangkungnya kurang ada rasa bumbu. Tp saya suka pisang krispinya'],
              ['name' => 'Arif Hidayah', 'date' => '9 bulan lalu', 'rating' => 5, 'comment' => 'Tempat nyaman buat santai dengan angin spoi spoi sore, parkiran luas, akses mudah. Untuk makanan enak dan harga sangat wajar'],
              ['name' => 'Baihaqi Fajar', 'date' => '7 bulan lalu', 'rating' => 5, 'comment' => 'Tempatnya mudah dijangkau karena lokasinya di pinggir jalan. Tempatnya cukup nyaman, apalagi untuk makan dengan rombongan besar. Tempat parkir juga cukup luas. Makanannya juga enak. Bebek bakarnya lezat, nasinya juga pulen. Es kopi gula susu arennya enak juga.'],
              ['name' => 'Deddy Hutomo', 'date' => '9 bulan lalu', 'rating' => 4, 'comment' => 'Tempatnya luas dan kalau malam sejuk. Ada pilihan duduk atau lesehan. Tempat bersih. Makanan standard. Pelayanan ramah.'],
          ];
      @endphp

      @foreach ($reviews as $review)
        <div class="w-[320px] h-[230px] bg-white border border-gray-300 rounded-lg p-4 flex flex-col overflow-hidden shadow-md">
            <div class="flex justify-between items-center mb-1">
                <div class="text-base font-semibold text-gray-900">{{ $review['name'] }}</div>
                <div class="text-xs text-gray-500">{{ $review['date'] }}</div>
            </div>
            <div class="mb-2 text-yellow-400 text-base">
                @for ($i = 0; $i < $review['rating']; $i++)
                    ⭐
                @endfor
            </div>
            <p class="text-gray-800 text-justify overflow-y-auto flex-grow leading-snug text-[13px]">
                {{ $review['comment'] }}
            </p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Swiper JS dan CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 30,
    });
</script>

</x-guest-layout>
