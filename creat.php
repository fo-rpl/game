<?php
$files=$_FILES;

$vendor='read/vendor/gambar/';
$judul=$_POST['judul'];
$nama=$_POST['namafile'];
$data=$_POST['isidata'];
$deskripsi=$_POST['metadeskripsi'];
$keyword=$_POST['metakeyword'];

$jumlahFiles = count($files['gambar']['name']); for ($i = 0; $i < $jumlahFiles; $i++) { $namaFiles = $files['gambar']['name'][$i]; $lokasiTmp = $files['gambar']['tmp_name'][$i];}



for ($i = 0; $i < $jumlahFiles; $i++) {
    $namaFiles = $files['gambar']['name'][$i];
    $lokasiTmp = $files['gambar']['tmp_name'][$i];
    $prosesUploads = move_uploaded_file($lokasiTmp,$vendor.$namaFiles);

    # jika proses berhasil
    if ($prosesUploads) {
        echo "Upload file <a href='read/$nama' target='_blank'>$namaFiles</a> berhasil. <br>";
    } else {
        echo "<span style='color: red'>Upload file {$namaFiles} gagal</span> <br>";
    }



$file=fopen('read/'.$nama,'w');
 
 fwrite($file,'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>'.$judul.'</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="'.$keyword.'" name="keywords">
    <meta content="'.$deskripsi.'" name="description">
    <meta http-equiv="refresh" content="text/html;charset=UTF-8" />
    <!-- Favicon -->
    <link href="https://fo-rpl.github.io/javascript.cdn-versi1.2/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style type="text/css" media="all">
     @import url("https://fo-rpl.github.io/javascript.cdn-versi1.2/css/style.css");
     @import url("https://fo-rpl.github.io/javascript.cdn-versi1.2/lib/owlcarousel/assets/owl.carousel.min.css");
     @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css");
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
    </style>
</head>

<body class="notranslate">
    <div class="container-fluid bg-dark" id="topbar1">
    </div>
    <div class="container-fluid p-0" id="navbartop">
    </div>
    <div class="jumbotron jumbotron-fluid mb-5" id="profilweb">
    </div>

    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="pb-3">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="vendor/gambar/'.$namaFiles.'" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">2022</h4>
                            <small class="text-white text-uppercase"></small>
                        </div>
                    </div>
                    <div class="bg-secondary mb-3" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <a class="text-muted ml-2" href="">Tech7</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Web Tutorial</a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3" id="judulartikel">
                        '.$judul.'
                        </h4>
                        <div id="artikel">
                         '.$data.'
                        </div>
                    </div>
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
             <div id="sidebar">
              
             </div>

                               <!-- <script async="async" data-cfasync="false" src="https://walkingtutor.com/6ecb4929c350c147c5b8f87b9b6f45a4/invoke.js"></script>
<div id="container-6ecb4929c350c147c5b8f87b9b6f45a4"></div>-->
                
            </div>
            
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5" id="footer-bawah">

    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://fo-rpl.github.io/javascript.cdn-versi1.2/lib/easing/easing.min.js"></script>
    <script src="https://fo-rpl.github.io/javascript.cdn-versi1.2/lib/waypoints/waypoints.min.js"></script>
    <script src="https://fo-rpl.github.io/javascript.cdn-versi1.2/lib/counterup/counterup.min.js"></script>
    <script src="https://fo-rpl.github.io/javascript.cdn-versi1.2/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="https://fo-rpl.github.io/javascript.cdn-versi1.2/mail/jqBootstrapValidation.min.js"></script>
    <script src="https://fo-rpl.github.io/javascript.cdn-versi1.2/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="https://fo-rpl.github.io/javascript.cdn-versi1.2/js/main.js"></script>
</body>

</html>
 ');
 fclose($file);
}
 