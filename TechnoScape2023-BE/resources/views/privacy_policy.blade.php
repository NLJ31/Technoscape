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
   <!-- Kebijakan Privasi -->
   <div class="mt-24 md:mt-28 lg:mt-32 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
      <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">Kebijakan Privasi</h1>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
         Di TechnoScape, dimana dapat diakses melalui  https://technoscape.id/, salah satu prioritas utama Kami adalah privasi pengunjung kami.
         <br><br>
         Dokumen Kebijakan Privasi ini menjelaskan kebijakan dan prosedur Kami tentang pengumpulan, penggunaan, dan pengungkapan informasi Anda saat menggunakan layanan Kami dan memberitahu Anda tentang hak privasi dan bagaimana hukum melindungi Anda.
         <br><br>
         Kami menggunakan data Pribadi Anda untuk menyediakan dan meningkatkan layanan kami. Dengan menggunakan layanan tersebut, Anda menyetujui pengumpulan dan penggunaan informasi sesuai dengan Kebijakan Privasi ini.
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
         Untuk keperluan Kebijakan Privasi ini:
      </p>
      <ul class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 list-disc mx-5 md:mx-7 lg:mx-8">
         <li>
            Akun iyalah akun unik yang dibuat untuk Anda untuk mengakses layanan kami.
         </li>
         <li>
            Organisasi (disebutkan  sebagai “Organisasi, atau "Kami" dalam Perjanjian ini) mengacu pada Bina Nusantara Computer Club (BNCC) , Jl. Rw. Belong No.51A, RT.7/RW.15, Palmerah, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480.
         </li>
         <li>
            Cookies adalah file kecil yang ditempatkan di komputer, perangkat seluler, atau perangkat lain apa pun oleh situs web Anda, yang berisi detail riwayat penelusuran Anda di situs web tersebut.
         </li>
         <li>
            Negara mengacu pada Negara Indonesia
         </li>
         <li>
            Perangkat mengacu pada perangkat apa pun yang dapat mengakses layanan Kami seperti komputer, ponsel, atau tablet digital.
         </li>
         <li>
            Data personal adalah setiap informasi yang berkaitan dengan individu yang teridentifikasi atau yang dapat diidentifikasi.
         </li>
         <li>
            layanan mengacu pada situs web.
         </li>
         <li>
            Penyedia layanan adalah setiap individu atau badan hukum yang memproses data atas nama Organisasi. Hal ini mengacu pada Organisasi atau individu pihak ketiga yang dipekerjakan oleh Organisasi untuk memfasilitasi layanan, menyediakan layanan atas nama Organisasi, melakukan layanan yang terkait dengan layanan atau untuk membantu Organisasi dalam menganalisis bagaimana layanan digunakan.
         </li>
         <li>
            Data Penggunaan mengacu pada data yang dikumpulkan secara otomatis, baik yang dihasilkan oleh penggunaan layanan atau dari infrastruktur layanan itu sendiri (misalnya, durasi kunjungan halaman).
         </li>
         <li>
            Situs Web mengacu pada TechnoScape yang dapat diakses dari https://technoscape.id/
         </li>
         <li>
            Anda berarti individu yang mengakses atau menggunakan layanan, atau Organisasi, atau badan hukum lainnya atas nama individu tersebut mengakses atau menggunakan layanan, sebagaimana berlaku.
         </li>
      </ul>
   </div>
   <!-- Mengumpulkan dan Menggunakan Data Pribadi Anda -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
      <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
         Mengumpulkan dan Menggunakan Data Pribadi Anda
      </h1>
      <h2 class="font-PJSBold text-[1.35rem] md:text-[1.7rem] mb-4 md:mb-5 lg:mb-6">
         Jenis Data yang Dikumpulkan
      </h2>
      <h3 class="font-PJSBold text-[1.03rem] md:text-[1.3rem] mb-4 md:mb-5 lg:mb-6">
         Data Pribadi
      </h3>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
         Disaat menggunakan layanan Kami, Kami akan meminta Anda untuk memberikan Kami informasi pengenal pribadi tertentu yang dapat digunakan untuk menghubungi atau mengidentifikasi Anda.
         <br><br>
         Informasi pengenal pribadi dapat mencakup, tetapi tidak terbatas pada:
      </p>
      <ul class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 list-disc mb-5 mx-5 md:mx-7 lg:mx-8">
         <li>Alamat email</li>
         <li>Nama depan dan nama belakang</li>
         <li>Nomor telepon</li>
         <li>Alamat, Negara Bagian, Provinsi, ZIP/Kode Pos, Kota</li>
         <li>Data Penggunaan</li>
      </ul>
      <h3 class="font-PJSBold text-[1.03rem] md:text-[1.3rem] mb-4 md:mb-5 lg:mb-6">
         Data Penggunaan
      </h3>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Data Penggunaan dikumpulkan secara otomatis saat menggunakan layanan.
         <br><br>
         Data Penggunaan dapat mencakup informasi seperti alamat Protokol Internet Perangkat Anda (misalnya alamat IP), jenis browser, versi browser, halaman layanan kami yang Anda kunjungi, waktu dan tanggal kunjungan Anda, waktu yang dihabiskan di halaman tersebut, perangkat unik pengenal dan data diagnostik lainnya.
         <br><br>
         Saat Anda mengakses layanan oleh atau melalui perangkat seluler, Kami dapat mengumpulkan informasi tertentu secara otomatis, termasuk, namun tidak terbatas pada, jenis perangkat seluler yang Anda gunakan, ID unik perangkat seluler Anda, alamat IP perangkat seluler Anda, perangkat seluler Anda sistem operasi, jenis peramban Internet seluler yang Anda gunakan, pengidentifikasi perangkat unik, dan data diagnostik lainnya.
         <br><br>
         Kami juga dapat mengumpulkan informasi yang dikirimkan browser Anda setiap kali Anda mengunjungi layanan kami atau ketika Anda mengakses layanan dengan atau melalui perangkat seluler.
      </p>
      <h3 class="font-PJSBold text-[1.03rem] md:text-[1.3rem] mb-4 md:mb-5 lg:mb-6">
         Teknologi Pelacakan dan Cookies
      </h3>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Kami menggunakan Cookies dan teknologi pelacakan serupa untuk melacak aktivitas di layanan Kami dan menyimpan informasi tertentu. Teknologi pelacakan yang digunakan adalah beacon, tag, dan skrip untuk mengumpulkan dan melacak informasi serta untuk meningkatkan dan menganalisis layanan Kami. Teknologi yang Kami gunakan dapat mencakup:
      </p>
      <ul class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 list-disc mx-5 md:mx-7 lg:mx-8">
         <li>
            Cookies atau Cookies Peramban. Cookies adalah file kecil yang ditempatkan di perangkat Anda. Anda dapat menginstruksikan browser Anda untuk menolak semua Cookies atau untuk menunjukkan kapan Cookie sedang dikirim. Namun, jika Anda tidak menerima Cookies, Anda kemungkinan tidak dapat menggunakan beberapa bagian dari layanan kami. Kecuali Anda telah menyesuaikan pengaturan browser Anda sehingga akan menolak Cookies, layanan kami dapat menggunakan Cookies.
         </li>
         <li>
            Web Beacons. Bagian tertentu dari layanan kami dan email kami mungkin berisi file elektronik kecil yang dikenal sebagai web beacon (juga disebut sebagai clear gif, tag piksel, dan gif piksel tunggal) yang memungkinkan Organisasi, misalnya, menghitung pengguna yang telah mengunjungi halaman tersebut atau membuka email dan untuk statistik situs web terkait lainnya (misalnya, merekam popularitas bagian tertentu dan memverifikasi sistem dan integritas server).
         </li>
      </ul>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Cookies dapat berupa Cookies "Persisten" atau "Sesi". Cookies Persisten tetap ada di komputer pribadi atau perangkat seluler Anda saat Anda offline, sementara Cookies Sesi dihapus segera setelah Anda menutup browser web Anda. Anda dapat mempelajari lebih lanjut tentang cookie di sini: <a href="https://www.termsfeed.com/blog/cookies/">All About Cookies by TermsFeed</a>.
         <br><br>
         Kami menggunakan Cookies Sesi dan Persistent untuk tujuan yang ditetapkan di bawah ini:
      </p>
      <ul class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 list-disc mx-5 md:mx-7 lg:mx-8">
         <li>
            Cookies yang Diperlukan / Esensial
            <br>
            Jenis: Cookies Sesi
            <br>
            Dikelola oleh: Kami
            <br>
            Tujuan: Cookies ini penting untuk memberikan Anda layanan yang tersedia melalui Situs Web dan untuk memungkinkan Anda menggunakan beberapa fiturnya. Cookies membantu untuk mengotentikasi pengguna dan mencegah penipuan penggunaan akun pengguna. Tanpa Cookies ini, layanan yang Anda minta tidak dapat diberikan, dan Kami hanya menggunakan Cookie ini untuk menyediakan layanan tersebut kepada Anda.
         </li>
         <li>
            Kebijakan Cookies / Pemberitahuan Penerimaan Cookies
            <br>
            Jenis: Persistent Cookies
            <br>
            Dikelola oleh: Kami
            <br>
            Tujuan: Cookies ini mengidentifikasi apakah pengguna telah menerima penggunaan cookie di Situs Web.
         </li>
         <li>
            Cookies Fungsionalitas
            <br>
            Jenis: Persistent Cookies
            <br>
            Dikelola oleh: Kami
            <br>
            Tujuan: Cookie ini memungkinkan kami untuk mengingat pilihan yang Anda buat saat Anda menggunakan Situs Web, seperti mengingat detail login atau preferensi bahasa Anda. Tujuan dari Cookie ini adalah untuk memberikan Anda pengalaman yang lebih pribadi dan untuk menghindari Anda harus memasukkan kembali preferensi Anda setiap kali Anda menggunakan Situs Web.
         </li>
      </ul>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Untuk informasi lebih lanjut tentang cookies yang kami gunakan dan pilihan Anda terkait cookies, silakan kunjungi Kebijakan Cookies kami atau bagian Cookie dari Kebijakan Privasi kami.
      </p>
      <h2 class="font-PJSBold text-[1.35rem] md:text-[1.7rem] mb-4 md:mb-5 lg:mb-6">
         Penggunaan Data Pribadi Anda
      </h2>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Organisasi dapat menggunakan Data Pribadi untuk tujuan berikut:
      </p>
      <ul class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 list-disc mx-5 md:mx-7 lg:mx-8">
         <li>
            Untuk menyediakan dan memelihara layanan kami, termasuk untuk memantau penggunaan layanan kami.
         </li>
         <li>
            Untuk mengelola Akun Anda: untuk mengelola pendaftaran Anda sebagai pengguna layanan. Data Pribadi yang Anda berikan dapat memberi Anda akses ke berbagai fungsi layanan yang tersedia untuk Anda sebagai pengguna terdaftar.
         </li>
         <li>
            Untuk pelaksanaan kontrak: pengembangan, kepatuhan, dan pelaksanaan kontrak pembelian untuk produk, item, atau layanan yang telah Anda beli atau kontrak lainnya dengan Kami melalui layanan.
         </li>
         <li>
            Untuk menghubungi Anda: Untuk menghubungi Anda melalui email, panggilan telepon, SMS, atau bentuk komunikasi elektronik lain yang setara, seperti pemberitahuan push aplikasi seluler mengenai pembaruan atau komunikasi informatif yang terkait dengan fungsi, produk, atau layanan yang dikontrak, termasuk pembaruan keamanan, bila diperlukan atau pantas untuk dilaksanakan.
         </li>
         <li>
            Untuk memberi Anda berita, penawaran khusus, dan informasi umum tentang barang, layanan, dan acara lain yang kami tawarkan yang serupa dengan yang telah Anda beli atau tanyakan kecuali Anda telah memilih untuk tidak menerima informasi tersebut.
         </li>
         <li>
            Untuk mengelola permintaan Anda: Untuk menghadiri dan mengelola permintaan Anda kepada Kami.
         </li>
         <li>
            Untuk pengalihan bisnis: Kami dapat menggunakan informasi Anda untuk mengevaluasi atau melakukan merger, divestasi, restrukturisasi, reorganisasi, pembubaran, atau penjualan atau pengalihan sebagian atau seluruh aset Kami, baik sebagai kelangsungan usaha atau sebagai bagian dari kebangkrutan, likuidasi, atau proses serupa, di mana Data Pribadi yang Kami pegang tentang pengguna layanan kami termasuk di antara aset yang dialihkan.
         </li>
         <li>
            Untuk tujuan lain: Kami dapat menggunakan informasi Anda untuk tujuan lain, seperti analisis data, mengidentifikasi tren penggunaan, menentukan efektivitas kampanye promosi kami, dan untuk mengevaluasi dan meningkatkan layanan, produk, layanan, pemasaran, dan pengalaman Anda.
         </li>
      </ul>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Kami dapat membagikan informasi pribadi Anda dalam situasi berikut:
      </p>
      <ul class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 list-disc mx-5 md:mx-7 lg:mx-8">
         <li>
            Dengan Penyedia layanan: Kami dapat membagikan informasi pribadi Anda dengan Penyedia layanan untuk memantau dan menganalisis penggunaan layanan kami, untuk menghubungi Anda.
         </li>
         <li>
            Untuk transfer bisnis: Kami dapat membagikan atau mentransfer informasi pribadi Anda sehubungan dengan, atau selama negosiasi, merger, penjualan aset Organisasi, pembiayaan, atau akuisisi semua atau sebagian bisnis Kami ke Organisasi lain.
         </li>
         <li>
            Dengan Afiliasi: Kami dapat membagikan informasi Anda dengan afiliasi Kami, dalam hal ini kami akan meminta afiliasi tersebut untuk mematuhi Kebijakan Privasi ini. Afiliasi termasuk Organisasi induk Kami dan anak Organisasi lainnya, mitra usaha patungan atau Organisasi lain yang Kami kendalikan atau yang berada di bawah kendali yang sama dengan Kami.
         </li>
         <li>
            Dengan mitra bisnis: Kami dapat membagikan informasi Anda dengan mitra bisnis Kami untuk menawarkan produk, layanan, atau promosi tertentu kepada Anda.
         </li>
         <li>
            Dengan pengguna lain: ketika Anda berbagi informasi pribadi atau berinteraksi di area publik dengan pengguna lain, informasi tersebut dapat dilihat oleh semua pengguna dan dapat didistribusikan secara publik di luar. Jika Anda berinteraksi dengan pengguna lain atau mendaftar melalui layanan Media Sosial Pihak Ketiga, kontak Anda di layanan Media Sosial Pihak Ketiga dapat melihat nama, profil, gambar, dan deskripsi aktivitas Anda. Demikian pula, pengguna lain akan dapat melihat deskripsi aktivitas Anda, berkomunikasi dengan Anda, dan melihat profil Anda.
         </li>
         <li>
            Dengan persetujuan Anda: Kami dapat mengungkapkan informasi pribadi Anda untuk tujuan lain apa pun dengan persetujuan Anda.
         </li>
      </ul>
      <h2 class="font-PJSBold text-[1.35rem] md:text-[1.7rem] mb-4 md:mb-5 lg:mb-6">
         Retensi Data Pribadi Anda
      </h2>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Organisasi akan menyimpan Data Pribadi Anda selama diperlukan untuk tujuan yang ditetapkan dalam Kebijakan Privasi ini. Kami akan menyimpan dan menggunakan Data Pribadi Anda sejauh yang diperlukan untuk mematuhi kewajiban hukum kami (misalnya, jika kami diharuskan menyimpan data Anda untuk mematuhi hukum yang berlaku), menyelesaikan perselisihan, dan menegakkan perjanjian dan kebijakan hukum kami.
         <br><br>
         Organisasi juga akan menyimpan Data Penggunaan untuk tujuan analisis internal. Data Penggunaan umumnya disimpan untuk jangka waktu yang lebih singkat, kecuali jika data ini digunakan untuk memperkuat keamanan atau untuk meningkatkan fungsionalitas layanan Kami, atau Kami secara hukum berkewajiban untuk menyimpan data ini untuk jangka waktu yang lebih lama.
      </p>
      <h2 class="font-PJSBold text-[1.35rem] md:text-[1.7rem] mb-4 md:mb-5 lg:mb-6">
         Transfer Data Pribadi Anda
      </h2>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Informasi Anda, termasuk Data Pribadi, diproses di kantor operasional Organisasi dan di tempat lain di mana pihak-pihak yang terlibat dalam pemrosesan berada. Ini berarti bahwa informasi ini dapat ditransfer ke — dan dijaga di — komputer yang terletak di luar negara bagian Anda, provinsi, negara atau yurisdiksi pemerintah lainnya di mana undang-undang perlindungan data mungkin berbeda dari yurisdiksi Anda.
         <br><br>
         Persetujuan Anda terhadap Kebijakan Privasi ini diikuti dengan penyerahan Anda atas informasi tersebut merupakan persetujuan Anda untuk transfer tersebut.
         <br><br>
         Organisasi akan mengambil semua langkah yang diperlukan secara pantas untuk memastikan bahwa data Anda diperlakukan dengan aman dan sesuai dengan Kebijakan Privasi ini dan tidak ada transfer Data Pribadi Anda yang akan dilakukan ke organisasi atau negara kecuali ada kontrol yang memadai termasuk keamanan Data Anda dan informasi pribadi lainnya.
      </p>
      <h2 class="font-PJSBold text-[1.35rem] md:text-[1.7rem] mb-4 md:mb-5 lg:mb-6">
         Pengungkapan Data Pribadi Anda
      </h2>
      <h3 class="font-PJSBold text-[1.03rem] md:text-[1.3rem] mb-4 md:mb-5 lg:mb-6">
         Transaksi bisnis
      </h3>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Jika Organisasi terlibat dalam merger, akuisisi, atau penjualan aset, Data Pribadi Anda dapat dialihkan. Kami akan memberikan pemberitahuan sebelum Data Pribadi Anda di transfer dan menjadi subjek pada Kebijakan Privasi yang berbeda.
      </p>
      <h3 class="font-PJSBold text-[1.03rem] md:text-[1.3rem] mb-4 md:mb-5 lg:mb-6">
         Penegakan hukum
      </h3>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Dalam keadaan tertentu, Organisasi mungkin diminta untuk mengungkapkan Data Pribadi Anda jika diwajibkan oleh hukum atau sebagai tanggapan atas permintaan yang sah oleh otoritas publik (misalnya pengadilan atau lembaga pemerintah).
      </p>
      <h3 class="font-PJSBold text-[1.03rem] md:text-[1.3rem] mb-4 md:mb-5 lg:mb-6">
         Persyaratan hukum lainnya
      </h3>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Organisasi dapat mengungkapkan Data Pribadi Anda dengan itikad baik dan keyakinan bahwa tindakan tersebut diperlukan untuk:
      </p>
      <ul class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 list-disc mx-5 md:mx-7 lg:mx-8">
         <li>
            Mematuhi kewajiban hukum
         </li>
         <li>
            Melindungi dan mempertahankan hak atau milik Organisasi
         </li>
         <li>
            Mencegah atau menyelidiki kemungkinan kesalahan sehubungan dengan layanan
         </li>
         <li>
            Melindungi keamanan pribadi Pengguna layanan atau publik
         </li>
         <li>
            Melindungi dari tanggung jawab hukum
         </li>
      </ul>
      <h2 class="font-PJSBold text-[1.35rem] md:text-[1.7rem] mb-4 md:mb-5 lg:mb-6">
         Keamanan Data Pribadi Anda
      </h2>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8 mb-5">
         Keamanan Data Pribadi Anda penting bagi Kami, tetapi ingat bahwa tidak ada metode transmisi melalui Internet, atau metode penyimpanan elektronik yang 100% aman. Meskipun Kami berusaha untuk menggunakan cara yang dapat diterima secara komersial untuk melindungi Data Pribadi Anda, Kami tidak dapat menjamin keamanan mutlaknya.
      </p>
   </div>
   <!-- Tautan ke Situs Web Lain -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
      <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
         Tautan ke Situs Web Lain
      </h1>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
         Layanan kami mungkin berisi tautan ke situs web lain yang tidak dioperasikan oleh Kami. Jika Anda mengklik tautan pihak ketiga, Anda akan diarahkan ke situs pihak ketiga tersebut. Kami sangat menyarankan Anda untuk meninjau Kebijakan Privasi setiap situs yang Anda kunjungi.
         <br><br>
         Kami tidak memiliki kendali atas dan tidak bertanggung jawab atas konten, kebijakan privasi, atau praktik situs atau layanan pihak ketiga mana pun.
      </p>
   </div>
   <!-- Perubahan pada Kebijakan Privasi -->
   <div class="mt-1 md:mt-8 lg:mt-10 mb-4 md:mb-6 lg:mb-9 mx-7 md:mx-16 lg:mx-28">
      <h1 class="font-PJSBold text-[1.65rem] md:text-4xl lg:text-[2.3rem] mb-2.5 md:mb-5 lg:mb-6 leading-normal md:leading-relaxed">
         Perubahan pada Kebijakan Privasi
      </h1>
      <p class="text-[0.65rem] md:text-lg lg:text-[1.3rem] leading-[1rem] md:leading-7 lg:leading-8">
         Kami dapat memperbarui Kebijakan Privasi Kami dari waktu ke waktu. Kami akan memberitahu Anda tentang perubahan apapun dengan memposting Kebijakan Privasi baru di halaman ini.
         <br><br>
         Kami akan memberi tahu Anda melalui email dan/atau pemberitahuan penting di layanan Kami, sebelum perubahan menjadi efektif dan memperbarui tanggal "Terakhir diperbarui" di bagian atas Kebijakan Privasi ini.
         <br><br>
         Anda disarankan untuk meninjau Kebijakan Privasi ini secara berkala untuk setiap perubahan. Perubahan pada Kebijakan Privasi ini berlaku efektif ketika di posting di halaman ini.
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
         <li>
            Melalui email: technoscape@bncc.net
         </li>
         <li>
            Dengan mengunjungi halaman ini di website kami: <a href="https://technoscape.id/" class="text-cBlue underline">https://technoscape.id/</a>
         </li>
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
