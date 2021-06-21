 <?php
 require_once '../setting/konstanta.php';
 require_once '../setting/koneksi.php';
 require_once '../setting/crud.php';
 require_once '../setting/tanggal.php';
 require_once '../setting/fungsi.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-rekrutmen mitra  BPS Kabupaten Muna</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/index.ico" rel="icon">
  <link href="assets/img/index.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v2.1.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <h1 class="logo mr-auto"></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="index.html" style="height:100%;" class="logo mr-auto"><img src="../assets/index.png" alt="" class="img-fluid"></a>


          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#hero">Home</a></li>
              <li><a href="#about">Tentang</a></li>
              <li><a href="#mitra">Mitra Statistik</a></li>
              <li><a href="#pengumuman">Pengumuman</a></li>
              <li><a href="#contact">Kontak</a></li>
              <li><a href="#register">Daftar</a></li>

            </ul>
          </nav><!-- .nav-menu -->
          <a href="../login.php" class="get-started-btn scrollto">Login</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 style="color: white;">Badan Pusat Statistik adalah Lembaga Pemerintah Non-Departemen yang bertanggung jawab langsung kepada Presiden.</h3>
            <div><a href="#register" class="btn-get-started scrollto">Daftar</a></div>
          </div>
          <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
              <h3>Informasi UMUM</h3>
              <p class="font-italic">
              Badan Pusat Statistik adalah Lembaga Pemerintah Non-Departemen yang bertanggung jawab langsung kepada Presiden. Sebelumnya, BPS merupakan Biro Pusat Statistik, yang dibentuk berdasarkan UU Nomor 6 Tahun 1960 tentang Sensus dan UU Nomer 7 Tahun 1960 tentang Statistik. Sebagai pengganti kedua UU tersebut ditetapkan UU Nomor 16 Tahun 1997 tentang Statistik. Berdasarkan UU ini yang ditindaklanjuti dengan peraturan perundangan dibawahnya, secara formal nama Biro Pusat Statistik diganti menjadi Badan Pusat Statistik.</p>
              <p>
                Materi yang merupakan muatan baru dalam UU Nomor 16 Tahun 1997, antara lain :
              </p>
              <ul>
               <li><i class="icofont-check-circled"></i>Jenis statistik berdasarkan tujuan pemanfaatannya terdiri atas statistik dasar yang sepenuhnya diselenggarakan oleh BPS, statistik sektoral yang dilaksanakan oleh instansi Pemerintah secara mandiri atau bersama dengan BPS, serta statistik khusus yang diselenggarakan oleh lembaga, organisasi, perorangan, dan atau unsur masyarakat lainnya secara mandiri atau bersama dengan BPS.</li>
               <li><i class="icofont-check-circled"></i>Hasil statistik yang diselenggarakan oleh BPS diumumkan dalam Berita Resmi Statistik (BRS) secara teratur dan transparan agar masyarakat dengan mudah mengetahui dan atau mendapatkan data yang diperlukan.</li>
               <li><i class="icofont-check-circled"></i>Sistem Statistik Nasional yang andal, efektif, dan efisien.</li>
               <li><i class="icofont-check-circled"></i>Dibentuknya Forum Masyarakat Statistik sebagai wadah untuk menampung aspirasi masyarakat statistik, yang bertugas memberikan saran dan pertimbangan kepada BPS.</li>
             </ul>

             <p>
               Berdasarkan undang-undang yang telah disebutkan di atas, peranan yang harus dijalankan oleh BPS adalah sebagai berikut : 
             </p>
             <ul>
              <li><i class="icofont-check-circled"></i>Menyediakan kebutuhan data bagi pemerintah dan masyarakat. Data ini didapatkan dari sensus atau survey yang dilakukan sendiri dan juga dari departemen atau lembaga pemerintahan lainnya sebagai data sekunder</li>
              <li><i class="icofont-check-circled"></i>Membantu kegiatan statistik di departemen, lembaga pemerintah atau institusi lainnya, dalam membangun sistem perstatistikan nasional.</li>
              <li><i class="icofont-check-circled"></i>Mengembangkan dan mempromosikan standar teknik dan metodologi statistik, dan menyediakan pelayanan pada bidang pendidikan dan pelatihan statistik.</li>
              <li><i class="icofont-check-circled"></i>Membangun kerjasama dengan institusi internasional dan negara lain untuk kepentingan perkembangan statistik Indonesia.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= mitra Section ======= -->
    <section id="mitra" class="mitra section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mitra Statistik</h2>
          <p>Mitra statistik adalah tenaga kerja yang direkrut oleh BPS untuk menunjang kegiatan statistik di suatu wilayah. Mitra statistik yang direkrut ini dapat ditugaskan sebagai petugas pendataan lapangan Survei Sosial Ekonomi Nasional (SUSENAS), SAKERNAS, SP2020 Long Form dll.</p>
          <hr>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Rekrutmen</th>
                <th scope="col">Tanggal</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=0;
              $sql="SELECT * FROM tb_rekrutmen where status='aktif'";
              foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
                extract($value);
                ?>
                <tr>
                  <th scope="row"><?=$no+=1?></th>
                  <td><?=$namarekrutmen?></td>
                  <td><?=tgl_indo($tanggal)?></td>
                  <td><a href="mitra.php?id=<?=@$idrekrutmen?>" class="btn btn-primary">Detail</a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

        </div>
      </div>
    </section><!-- End mitra Section -->

    <!-- ======= About Section ======= -->
    <section id="pengumuman" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Informasi Pengumuman</h2>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Rekrutmen</th>
                <th scope="col">Tanggal</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=0;
              $sql="SELECT * FROM tb_pengumuman where status='aktif'";
              foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
                extract($value);
                ?>
                <tr>
                  <th scope="row"><?=$no+=1?></th>
                  <td><?=$namarekrutmen?></td>
                  <td><?=tgl_indo($tanggal)?></td>
                  <td><a href="pengumuman.php?id=<?=@$idpengumuman?>" class="btn btn-primary">Detail</a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>


        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="register" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Daftar Calon Mitra</h2>
          <p>Silakan isi data terlebih dahulu untuk dapat akses pendafataran mitra.</p>
        </div>

        <div class="row">

          <div class="col-lg-12">
            <form action="daftar_proses.php" method="post" role="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Inputkan Nama" />
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Inputkan Email" data-rule="email" />
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="password" name="pass" class="form-control" id="password" placeholder="Inputkan Password" />
                </div>
                <div class="col-md-6 form-group">
                  <input type="password" class="form-control" name="passulang" id="email" placeholder="Inputkan Password Ulang" />
                </div>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-primary">Daftar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Silakan menghubungi kami untuk lebih detail atau dapat mengunjungi lokasi kami.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat Kami</h3>
              <p>Jalan Jati Nomor 24 Raha, 
               Kelurahan Butung-Butung, 
               Kecamatan Katobu,
             Kabupaten Muna</p>
           </div>
         </div>

         <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Kami</h3>
            <p>bps7402@bps.go.id</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Whatsapp</h3>
            <p>082311178872</p>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.591862255313!2d122.72098371476284!3d-4.839924596485507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3caa16694a4c5%3A0x30200d285d0b026!2sJl.%20Jati%20No.24%2C%20Raha%20I%2C%20Katobu%2C%20Kabupaten%20Muna%2C%20Sulawesi%20Tenggara%2093611!5e0!3m2!1sen!2sid!4v1624244377217!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 col-md-6 footer-contact">
          <h3>BPS Muna</h3>
          <p>
           <strong>Alamat:</strong>  Jalan Jati Nomor 24 Raha, <br> 
           Kelurahan Butung-Butung, <br>
           Kecamatan Katobu, <br>
           Kabupaten Muna
           <br>
           <strong>Email:</strong>bps7402@bps.go.id<br>
         </p>
       </div>

     </div>
   </div>
 </div>

 <div class="container">

  <div class="copyright-wrap d-md-flex py-4">
    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>BPS Muna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>

</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>