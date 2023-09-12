@extends('Template.template')

@section('head')
    {{-- css --}}
    <!-- css -->
    <link rel="stylesheet" href="{{asset('css/base/base.css')}}?t={{env("VERSION_TIME")}}">
    <link rel="stylesheet" href="{{asset('css/base/build.css')}}?t={{env("VERSION_TIME")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}?t={{env("VERSION_TIME")}}">

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection

@section('body')

<body class="bg-cBgDark text-cWhite font-PJSMedium">
   <x-navbar/>
   <!-- Terms and Conditions -->
   <div class="mt-24 md:mt-28 lg:mt-32 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
      <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">Terms and Conditions</h1>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
          Syarat dan ketentuan ini menguraikan aturan dan ketentuan penggunaan Website TechnoScape yang terletak di https://technoscape.id/.
         <br><br>
         Dengan mengakses situs web ini, kami menganggap Anda menerima syarat dan ketentuan ini. Jangan terus menggunakan TechnoScape jika Anda tidak setuju untuk mengambil semua syarat dan ketentuan yang tercantum di halaman ini. Harap baca syarat dan ketentuan ini dengan seksama sebelum menggunakan Layanan Kami.
      </p>
   </div>
   <!-- Penafsiran dan Definisi -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
      <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">Penafsiran dan Definisi</h1>
      <h2 class="font-PJSBold text-[1.35rem] md:text-[1.7rem] mb-4 md:mb-5 lg:mb-6">Penafsiran</h2>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-4 md:mb-5 lg:mb-6">
         Kata-kata yang huruf awalnya dikapitalisasi memiliki arti yang ditentukan dalam kondisi berikut. Definisi berikut akan memiliki arti yang sama, terlepas dari apakah mereka muncul dalam bentuk tunggal atau jamak.
      </p>
      <h2 class="font-PJSBold text-[1.35rem] md:text-[1.7rem] mb-4 md:mb-5 lg:mb-6">Definisi</h2>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
         Untuk keperluan Syarat dan Ketentuan ini:
      </p>
      <ul class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 list-disc mx-5 md:mx-7 lg:mx-8">
         <li>
            Afiliasi berarti suatu entitas yang mengendalikan, dikendalikan oleh, atau berada di bawah kendali bersama dengan suatu pihak, di mana "pengendalian" berarti kepemilikan 50% atau lebih dari saham, kepentingan ekuitas, atau sekuritas lain yang berhak memberikan suara untuk pemilihan direktur atau otoritas pengelola lainnya .
         </li>
         <li>
            Negara mengacu pada Negara Indonesia
         </li>
         <li>
            Cookies adalah file kecil yang ditempatkan di komputer, perangkat seluler, atau perangkat lain apa pun oleh situs web Anda, yang berisi detail riwayat penelusuran Anda di situs web tersebut.
         </li>
         <li>
            Organisasi (disebutkan  sebagai “Organisasi, atau "Kami" dalam Perjanjian ini) mengacu pada Binus Computer Club (BNCC) , Jl. Rw. Belong No.51A, RT.7/RW.15, Palmerah, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480.
         </li>
         <li>
            Perangkat mengacu pada perangkat apa pun yang dapat mengakses Layanan Kami seperti komputer, ponsel, atau tablet digital.
         </li>
         <li>
            Layanan mengacu pada Situs Web.
         </li>
         <li>
            Syarat dan Ketentuan (juga disebut sebagai "Syarat") berarti Syarat dan Ketentuan adalah yang membentuk keseluruhan perjanjian antara Anda dan Organisasi mengenai penggunaan Layanan. Perjanjian Syarat dan Ketentuan ini dibuat dengan bantuan Generator Syarat dan Ketentuan.
         </li>
         <li>
            Layanan Media Sosial pihak ketiga berarti setiap layanan atau konten (termasuk data, informasi, produk, atau layanan) yang disediakan oleh pihak ketiga yang dapat ditampilkan, disertakan, atau disediakan oleh Layanan.
         </li>
         <li>
            Website mengacu pada TechnoScape yang dapat diakses dari https://technoscape.id/
         </li>
         <li>
            Anda berarti individu yang mengakses atau menggunakan Layanan, atau Organisasi, atau badan hukum lainnya atas nama individu tersebut mengakses atau menggunakan Layanan, sebagaimana berlaku.
         </li>
      </ul>
   </div>
   <!-- Pengakuan -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
      <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
         Pengakuan
      </h1>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
          Ini adalah Syarat dan Ketentuan yang mengatur penggunaan Layanan ini dan perjanjian yang berlaku antara Anda dan Organisasi. Syarat dan Ketentuan ini mengatur hak dan kewajiban semua pengguna terkait penggunaan Layanan.
         <br><br>
         Akses Anda ke dan penggunaan Layanan dikondisikan pada penerimaan dan kepatuhan Anda terhadap Syarat dan Ketentuan ini. Syarat dan Ketentuan ini berlaku untuk semua pengunjung, pengguna dan orang lain yang mengakses atau menggunakan Layanan.
         <br><br>
         Dengan mengakses atau menggunakan Layanan, Anda setuju untuk terikat dengan Syarat dan Ketentuan ini. Jika Anda tidak setuju dengan bagian manapun dari Syarat dan Ketentuan ini, Anda tidak dapat mengakses Layanan.
         <br><br>
         Anda menyatakan bahwa Anda berusia di atas 18 tahun. Organisasi tidak mengizinkan mereka yang berusia di bawah 18 tahun untuk menggunakan Layanan.
         <br><br>
         Akses Anda ke dan penggunaan Layanan juga dikondisikan pada penerimaan dan kepatuhan Anda terhadap Kebijakan Privasi Organisasi. Kebijakan Privasi kami menjelaskan kebijakan dan prosedur kami tentang pengumpulan, penggunaan, dan pengungkapan informasi pribadi Anda ketika Anda menggunakan Aplikasi atau Situs Web dan memberitahu Anda tentang hak privasi Anda dan bagaimana hukum melindungi Anda. Harap baca Kebijakan Privasi Kami dengan seksama sebelum menggunakan Layanan Kami.
      </p>
   </div>
   <!-- Tautan ke Situs Web Lain -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
      <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
         Tautan ke Situs Web Lain
      </h1>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
          Layanan kami mungkin berisi tautan ke situs web atau layanan pihak ketiga yang tidak dimiliki atau dikendalikan oleh Organisasi.
         <br><br>
         Organisasi tidak memiliki kendali atas, dan tidak bertanggung jawab atas, konten, kebijakan privasi, atau praktik situs web atau layanan pihak ketiga mana pun. Anda selanjutnya mengakui dan setuju bahwa Organisasi tidak akan bertanggung jawab atau berkewajiban, secara langsung atau tidak langsung, atas kerusakan atau kerugian yang disebabkan atau diduga disebabkan oleh atau sehubungan dengan penggunaan atau ketergantungan pada konten, barang, atau layanan apa pun yang tersedia di atau melalui situs web atau layanan tersebut.
         <br><br>
         Kami sangat menyarankan Anda untuk membaca syarat dan ketentuan serta kebijakan privasi dari situs web atau layanan pihak ketiga mana pun yang Anda kunjungi.
      </p>
   </div>
   <!-- Penghentian -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
      <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
         Penghentian
      </h1>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
          Kami dapat segera menghentikan atau menangguhkan akses Anda, tanpa pemberitahuan atau kewajiban sebelumnya, untuk alasan apa pun, termasuk tanpa batasan jika Anda melanggar Syarat dan Ketentuan ini.
         <br><br>
         Setelah pengakhiran, hak Anda untuk menggunakan layanan akan segera dihentikan.
      </p>
   </div>
   <!-- Batasan Tanggung Jawab -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
      <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
         Batasan Tanggung Jawab
      </h1>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
        Terlepas dari kerugian apa pun yang mungkin Anda alami, seluruh tanggung jawab Organisasi dan pemasoknya berdasarkan ketentuan apa pun dari persyaratan ini dan ganti rugi eksklusif Anda untuk semua hal di atas akan terbatas pada jumlah yang sebenarnya Anda bayarkan melalui Layanan atau 100 USD jika Anda belum membeli apapun melalui layanan.
        <br><br>
        Sejauh diizinkan oleh hukum yang berlaku, dalam keadaan apapun Organisasi atau pemasoknya tidak bertanggung jawab atas kerugian khusus, insidental, tidak langsung, atau konsekuensial apa pun (termasuk, namun tidak terbatas pada, ganti rugi atas hilangnya keuntungan, hilangnya data atau informasi lain, untuk gangguan bisnis, untuk cedera pribadi, hilangnya privasi yang timbul dari atau dengan cara apa pun terkait dengan penggunaan atau ketidakmampuan untuk menggunakan layanan, perangkat lunak pihak ketiga dan/atau perangkat keras pihak ketiga yang digunakan dengan layanan, atau sebaliknya sehubungan dengan ketentuan apa pun dari Ketentuan ini), bahkan jika Organisasi atau pemasok mana pun telah diberitahu tentang kemungkinan kerusakan tersebut dan bahkan jika upaya pemulihan gagal dari tujuan dasarnya.
        <br><br>
        Beberapa negara bagian tidak mengizinkan pengecualian jaminan tersirat atau pembatasan tanggung jawab atas kerusakan insidental atau konsekuensial, yang berarti bahwa beberapa pembatasan di atas mungkin tidak berlaku. Di negara bagian ini, tanggung jawab masing-masing pihak akan dibatasi sejauh yang diizinkan oleh hukum.
      </p>
   </div>
   <!-- Disklaimer terhadap "AS IS" dan "AS AVAILABLE" -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
       <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
           Disklaimer terhadap "AS IS" dan "AS AVAILABLE"
        </h1>
        <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
            Layanan diberikan kepada Anda "AS IS" dan "AS AVAILABLE" dan dengan semua kesalahan dan cacat tanpa jaminan dalam bentuk apa pun. Sejauh diizinkan berdasarkan hukum yang berlaku, Organisasi, atas namanya sendiri dan atas nama Afiliasinya, serta pemberi lisensi dan penyedia layanannya masing-masing, secara tegas menolak semua jaminan, baik tersurat, tersirat, undang-undang, atau lainnya, sehubungan dengan Layanan, termasuk semua jaminan tersirat tentang dapat diperjualbelikan, kesesuaian untuk tujuan tertentu, kepemilikan dan non-pelanggaran, dan jaminan yang mungkin timbul dari proses transaksi, pelaksanaan, penggunaan, atau praktik perdagangan. Tanpa batasan pada hal di atas, Organisasi tidak memberikan jaminan atau janji, dan tidak membuat pernyataan dalam bentuk apapun bahwa Layanan akan memenuhi persyaratan Anda, mencapai hasil yang diinginkan, kompatibel atau bekerja dengan perangkat lunak, aplikasi, sistem, atau layanan lain, mengoperasikan tanpa gangguan, memenuhi standar kinerja atau keandalan apa pun atau bebas dari kesalahan atau kesalahan atau cacat apa pun dapat atau akan diperbaiki.
            <br><br>
            Tanpa membatasi hal di atas, baik Organisasi maupun penyedia Organisasi tidak membuat pernyataan atau jaminan apa pun, tersurat maupun tersirat: (i) mengenai pengoperasian atau ketersediaan Layanan, atau informasi, konten, dan materi atau produk termasuk di dalamnya; (ii) bahwa Layanan tidak akan terganggu atau bebas dari kesalahan; (iii) mengenai keakuratan, keandalan, atau kebaruan informasi atau konten apa pun yang disediakan melalui Layanan; atau (iv) bahwa Layanan, servernya, konten, atau email yang dikirim dari atau atas nama Organisasi bebas dari virus, skrip, trojan horse, worm, malware, bom waktu, atau komponen berbahaya lainnya.
            <br><br>
            Beberapa yurisdiksi tidak mengizinkan pengecualian jenis jaminan atau batasan tertentu pada hak hukum konsumen yang berlaku, sehingga beberapa atau semua pengecualian dan batasan diatas mungkin tidak berlaku untuk Anda. Tetapi dalam kasus seperti itu pengecualian dan batasan yang ditetapkan dalam bagian ini harus diterapkan sejauh yang dapat ditegakkan berdasarkan hukum yang berlaku.
        </p>
    </div>
   <!-- Peraturan Pemerintah -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
       <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
           Peraturan Pemerintah
        </h1>
        <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
            Hukum Negara, tidak termasuk pertentangan aturan hukumnya, akan mengatur Ketentuan ini dan penggunaan Layanan oleh Anda. Penggunaan Aplikasi oleh Anda juga dapat tunduk pada hukum lokal, negara bagian, nasional, atau internasional lainnya.
        </p>
    </div>
    <!-- Penyelesaian Sengketa -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
    <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
        Penyelesaian Sengketa
     </h1>
     <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
        Jika Anda memiliki kekhawatiran atau perselisihan tentang Layanan, Anda setuju untuk terlebih dahulu mencoba menyelesaikan perselisihan secara informal dengan menghubungi Organisasi.
     </p>
    </div>
    <!-- Untuk Pengguna Uni Eropa (UE) -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
    <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
        Untuk Pengguna Uni Eropa (UE)
     </h1>
     <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
        Jika Anda adalah konsumen Uni Eropa, Anda akan mendapat manfaat dari ketentuan wajib hukum negara tempat Anda tinggal.
     </p>
    </div>
    <!-- Kepatuhan Hukum Amerika Serikat -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
    <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
        Kepatuhan Hukum Amerika Serikat
     </h1>
     <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
        Anda menyatakan dan menjamin bahwa (i) Anda tidak berada di negara yang terkena embargo pemerintah Amerika Serikat, atau yang telah ditetapkan oleh pemerintah Amerika Serikat sebagai negara "pendukung teroris", dan (ii) Anda tidak terdaftar di daftar pihak yang dilarang atau dibatasi oleh pemerintah Amerika Serikat.
     </p>
    </div>
    <!-- Keterpisahan dan Pengabaian -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
    <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
        Keterpisahan dan Pengabaian
     </h1>
     <h2 class="font-PJSBold text-[1.35rem] md:text-[1.7rem] mb-4 md:mb-5 lg:mb-6">Keterpisahan</h2>
     <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
        Jika ada ketentuan dari Ketentuan ini yang dianggap tidak dapat dilaksanakan atau tidak valid, ketentuan tersebut akan diubah dan ditafsirkan untuk mencapai tujuan ketentuan tersebut semaksimal mungkin berdasarkan hukum yang berlaku dan ketentuan lainnya akan terus mengefek dan berlaku penuh.
     </p>
     <h2 class="font-PJSBold text-[1.35rem] md:text-[1.7rem] mb-4 md:mb-5 lg:mb-6">Pengabaian</h2>
     <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
        Kecuali sebagaimana ditentukan di sini, kegagalan untuk melaksanakan hak atau untuk meminta pelaksanaan kewajiban berdasarkan Ketentuan ini tidak akan mempengaruhi kemampuan suatu pihak untuk melaksanakan hak tersebut atau memerlukan kinerja tersebut setiap saat setelah itu juga tidak akan pengabaian pelanggaran merupakan pengabaian dari setiap pelanggaran berikutnya.
     </p>
    </div>
     <!-- Terjemahan Interpretasi -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
    <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
        Terjemahan Interpretasi
     </h1>
     <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
        Syarat dan Ketentuan ini mungkin telah diterjemahkan jika Kami telah menyediakannya untuk Anda di Layanan kami. Anda setuju bahwa teks asli bahasa Inggris akan berlaku jika terjadi perselisihan.
     </p>
    </div>
    <!-- Perubahan Syarat dan Ketentuan -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
    <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
        Perubahan Syarat dan Ketentuan
     </h1>
     <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
        Kami berhak, atas kebijakan Kami sendiri, untuk mengubah atau mengganti Ketentuan ini setiap saat. Jika revisi bersifat material, Kami akan melakukan upaya yang wajar untuk memberikan pemberitahuan setidaknya 30 hari sebelum persyaratan baru berlaku. Apa yang merupakan perubahan material akan ditentukan atas kebijakan Kami sendiri.
        <br><br>
        Dengan terus mengakses atau menggunakan Layanan Kami setelah revisi tersebut berlaku efektif, Anda setuju untuk terikat dengan ketentuan yang direvisi. Jika Anda tidak menyetujui persyaratan baru, seluruhnya atau sebagian, harap berhenti menggunakan situs web dan Layanan.
     </p>
    </div>
    <!-- Hubungi kami -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
    <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
        Hubungi kami
     </h1>
     <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
        Jika Anda memiliki pertanyaan tentang Kebijakan Privasi ini, Anda dapat menghubungi kami:
     </p>
     <ul class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 list-disc mx-5 md:mx-7 lg:mx-8">
        <li>Melalui email: technoscape@bncc.net</li>
        <li>Dengan mengunjungi halaman ini di website kami: <a href="https://technoscape.id/" class="text-cBlue underline">https://technoscape.id/</a></li>
     </ul>
    </div>

    <!-- Before Footer -->
    <div class="lg:mx-12 mx-8 ml-7 lg:mt-40 mt-20 text-cWhite flex flex-col items-center font-YSDarkRegular">
        <div class="flex flex-col-reverse text-center lg:text-left lg:flex-row justify-between my-10 lg:ml-14 w-full">
            <!-- Left / Bottom -->
            <div class="flex flex-col md:flex-row lg:justify-start md:justify-evenly justify-start text-left">
                <div class="mb-10 md:mb-0 lg:mr-10 mr-0">
                    <p class="mb-4 text-center md:text-left text-xs md:text-base">
                        Organized By
                    </p>
                    <img src="./assets/logo/bncc-black-bg.png" alt="Bina Nusantara Computer Club"
                        class="mx-auto md:mx-0 lg:w-64 w-24" />
                </div>
                <div
                    class="flex justify-around items-center lg:flex-col lg:w-full md:w-[70%] w-full lg:-ml-4 md:ml-0 ml-0 lg:space-y-8">
                    <div class="space-y-3">
                        <p class="lg:w-max w-full text-[9px] md:text-sm lg:text-base text-center">
                            Official Learning Partner of
                        </p>
                        <img src="./assets/logo/gojek-logo.png" alt="Gojek" class="lg:w-2/3 md:w-48 w-32 pt-2" />
                    </div>
                    <div class="space-y-3">
                        <p class="lg:w-max w-full text-[9px] md:text-sm lg:text-base text-center">
                            Official Empowering Affiliate of
                        </p>
                        <img src="./assets/logo/Tiketcom-logo.png" alt="tiket.com" class="lg:w-2/3 md:w-44 w-32 pt-1" />
                    </div>
                </div>
            </div>
            <!-- Right / Top -->
            <div class="lg:w-2/5 flex flex-col lg:items-start items-center lg:gap-16 gap-10">
                <div>
                    <p class="lg:text-lg text-xs mb-4">
                        Subscribe to <b>TechnoScape</b>
                    </p>
                    <form action="" method="POST" class="flex justify-center my-1 lg:my-0 lg:justify-end">
                        <input type="email" name="email" id="input-email" placeholder="Masukkan Email Anda"
                            class="bg-cWhite text-[#595959] bsInput text-sm md:text-base py-3 pl-3 pr-7 lg:w-72 md:w-72 w-52 lg:pl-4 lg:pr-3 rounded-l-3xl my-2 shadow-input" />
                        <div class="bg-tcLinearGradientBlue bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 font-YSDarkSemiBold text-cWhite text-xs md:text-base h-fit my-auto lg:py-3 py-[14px] px-6 rounded-r-3xl hover:ease-in-out cursor-pointer"
                            id="subscribe">
                            Subscribe
                        </div>
                    </form>
                </div>
                <div class="flex justify-center items-center lg:justify-end space-x-6 md:space-x-8 mb-10 lg:mb-0">
                    <a href="#" class="filter brightness-0 invert hover:filter-none transition-all">
                        <img src="./assets/techno-conference/social/medium.svg" alt="medium">
                    </a>
                    <a href="#" class="filter brightness-0 invert hover:filter-none transition-all">
                        <img src="./assets/techno-conference/social/instagram.svg" alt="instagram">
                    </a>
                    <a href="#" class="filter brightness-0 invert hover:filter-none transition-all">
                        <img src="./assets/techno-conference/social/facebook.svg" alt="facebook">
                    </a>
                    <a href="#" class="filter brightness-0 invert hover:filter-none transition-all">
                        <img src="./assets/techno-conference/social/twitter.svg" alt="twiiter">
                    </a>
                    <a href="#" class="filter brightness-0 invert hover:filter-none transition-all">
                        <img src="./assets/techno-conference/social/linkedin.svg" alt="linkedin">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer
        class="flex flex-col-reverse sm:flex-row md:flex-row justify-between bg-cWhite bg-opacity-10 text-cWhite text-center font-YSDarkMedium px-0 md:px-10 lg:px-20 py-4 lg:mx-10 rounded-t-full text-[0.6rem] lg:text-sm md:text-xs">
        <p>All Rights Reserved BNCC 2023 © Bina Nusantara Computer Club</p>
        <p class="mb-2 md:mb-0">
            <a href="{{route('privacyPolicy')}}">Privacy Policy</a> &
            <a href="{{route('termsAndConditions')}}">Terms of Service</a>
        </p>
    </footer>

    <script src="{{ asset('js/home.js') }}?t={{ env('VERSION_TIME') }}"></script>
</body>
@endsection
