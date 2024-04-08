<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Logo-Website Name -->
    <link rel="icon" href="assets/images/icon/icon-web.png">
    <title>Micro-Challenge</title>

    <!-- CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body>
     <!-- Navigation Bar -->
     <header class="header fixed-top">
        <nav class="col-12 navbar">
            <div class="col-12 col-lg-6 left-container d-flex justify-content-center align-items-center">
                <img class="me-3 icon-web" src="assets/images/icon/icon-web.png" alt="logo-web">
                <div class="searchbar col-12 col-lg-6">
                    <form action="#" class="col-11">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa fa-search"></i></button>
                            <input id="openSearchbar" class="form-control" type="email"
                                placeholder="Cari produk anda disini ...">
                        </div>
                    </form>
                    <div id="modalOpen" class="overlay hide col-11 col-lg-4">
                        <div class="recommendation">
                            <a href="pages/search_result.php" class="product-img">
                                <img src="assets/images/content/recom_item1.png" alt="" class="img-fluid me-2">
                            </a>
                            <a href="pages/search_result.php" class="product-name">
                                <h6>Toner "The Originote"</h6>
                                <span>mengandung Ceraluronic Essence</span>
                            </a>
                        </div>
                        <div class="recommendation">
                            <a href="pages/search_result.php" class="product-img">
                                <img src="assets/images/content/recom_item1.png" alt="" class="img-fluid me-2">
                            </a>
                            <a href="pages/search_result.php" class="product-name">
                                <h6>Toner "The Originote"</h6>
                                <span>mengandung Ceraluronic Essence</span>
                            </a>
                        </div>
                        <div class="recommendation">
                            <a href="pages/search_result.php" class="product-img">
                                <img src="assets/images/content/recom_item1.png" alt="" class="img-fluid me-2">
                            </a>
                            <a href="pages/search_result.php" class="product-name">
                                <h6>Toner "The Originote"</h6>
                                <span>mengandung Ceraluronic Essence</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 right-container d-flex justify-content-center align-items-center">
                <ul class="list-group pe-2">
                    <li class="list-group-item"><a href="index.php">Beranda</a></li>
                    <li class="list-group-item"><a href="pages/about_us.php">Tentang Kami</a></li>
                    <li class="list-group-item"><a href="pages/profil.php">Profil</a></li>
                    <li class="list-group-item"><a href="#">Test Kulit Anda</a></li>
                </ul>
                <!-- <a href="register/signup.php" class="btn-register"> -->
                <a href="register/signup.html" class="btn-register">
                    <button type="button" class="btn btn-primary"><i class="me-2 fa-regular fa-user"></i>Masuk</button>
                </a>
            </div>
        </nav>
    </header>
    <!-- Navigation Bar -->
    
    <!-- Tampilan Awal Pengguna -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <div class="text-content col-6">
                        <h1>Lihatlah. Ketahuilah. Perbaikilah.</h1>
                        <span>Produk skincare yang bagus sebaiknya mampu menjaga kesehatan dan penampilan
                            kulitmu. Seharusnya mengandung bahan-bahan yang efektif dan aman untuk digunakan. Temukan semua rekomendasi produk di sini!</span>
                        <div class="btn-test">
                            <button type="button" class="btn btn-primary">Test Tipe Kulit</button>
                        </div>
                    </div>
                    <div class="background-anim col-4">
                        <img class="img-fluid" src="assets/images/content/3d_animation_header.png" alt="img-header">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tampilan Awal Pengguna -->

    <?php include "layout/productCarousel.html" ?> 

    <!-- Top Brand -->
    <section class="top-brand pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title col-lg-8 d-flex flex-column text-center">
                        <h1>Merek Teratas untuk Kulit Anda</h1>
                        <span>Merek-merek top dalam industri perawatan kulit</span>
                    </div>
                    <div class="col-6 container-brand d-flex justify-content-center align-items-center">
                        <img src="assets/images/content/slider-1.png" alt="brand 1" class="img-fluid">
                        <img src="assets/images/content/slider-2.png" alt="brand 1" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Brand -->

    <!-- Section FAQ-->
    <section class="FAQ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title text-center">
                        <h1>Pertanyaan yang Sering Diajukan</h1>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <span>Bagaimana cara merawat kulit saya dengan benar?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body custom-text-align">
                                        <span>Langkah-langkah dasar perawatan kulit yang bear meliputi pembersihan,
                                            eksfoliasi, pelembapan, dan perlindungan matahari. Gunakan pembersih yang
                                            lembut sesuai dengan jenis kulit Anda, lalu gunakan produk eksfoliasi yang
                                            mengandung AHA atau BHA beberapa kali seminggu. Selain itu, jangan lupa
                                            untuk
                                            menggunakan pelembap setiap har dan produk perlindungan matahari dengan
                                            SPF minimal 30.</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <span>Bagaimana cara merawat kulit saya dengan benar?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <span>Langkah-langkah dasar perawatan kulit yang bear meliputi pembersihan,
                                            eksfoliasi, pelembapan, dan perlindungan matahari. Gunakan pembersih yang
                                            lembut sesuai dengan jenis kulit Anda, lalu gunakan produk eksfoliasi yang
                                            mengandung AHA atau BHA beberapa kali seminggu. Selain itu, jangan lupa
                                            untuk
                                            menggunakan pelembap setiap har dan produk perlindungan matahari dengan
                                            SPF minimal 30.</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <span>Bagaimana cara merawat kulit saya dengan benar?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <span>Langkah-langkah dasar perawatan kulit yang bear meliputi pembersihan,
                                            eksfoliasi, pelembapan, dan perlindungan matahari. Gunakan pembersih yang
                                            lembut sesuai dengan jenis kulit Anda, lalu gunakan produk eksfoliasi yang
                                            mengandung AHA atau BHA beberapa kali seminggu. Selain itu, jangan lupa
                                            untuk
                                            menggunakan pelembap setiap har dan produk perlindungan matahari dengan
                                            SPF minimal 30.</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        <span>Bagaimana cara merawat kulit saya dengan benar?</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <span>Langkah-langkah dasar perawatan kulit yang bear meliputi pembersihan,
                                            eksfoliasi, pelembapan, dan perlindungan matahari. Gunakan pembersih yang
                                            lembut sesuai dengan jenis kulit Anda, lalu gunakan produk eksfoliasi yang
                                            mengandung AHA atau BHA beberapa kali seminggu. Selain itu, jangan lupa
                                            untuk
                                            menggunakan pelembap setiap har dan produk perlindungan matahari dengan
                                            SPF minimal 30.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section FAQ-->

    <?php include "layout/footer.html" ?>

    <script src="assets/js/script.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>