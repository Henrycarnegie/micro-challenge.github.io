<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Logo-Website Name -->
    <link rel="icon" href="../assets/images/icon/icon-web.png">
    <title>Micro-Challenge</title>

    <!-- CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">

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
    <?php include "layout/headerPages.php" ?>
    <!-- Navigation Bar -->
    
    <!-- Tampilan awal -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="product_hadalabo col-lg-12 d-flex justify-content-between">
                    <div class="item_hadalabo d-flex justify-content-between">
                        <div class="card_hadalabo">
                            <img src="assets/images/content/product_hadalabo1.png" alt="">
                            <span><img src="assets/images/icon/button_fav.png" alt=""></span>
                            <div class="card-body">
                            <h5>Hada Labo Aha + Bha Acne</h5> 
                            <h5>Control Face Wash</h5>
                            </div>  
                        </div>


                    <div class="hada_labo col-lg-5 d-flex">
                        <div class="box-shadow"></div>
                        <div class="title_hadalabo">
                            <b>Hada Labo</b>  
                            <h5>Bersihkan dan perbarui untuk kulit sehalus telur 
                                dengan formula eksfoliasi AHA+BHA dan anti polusi kami. 
                                Banci liar dan tanah liat bentonit membantu mengendalikan 
                                jerawat dan minyak berlebih </h5>
                        
                            <b>Ingredients</b>  
                            <h5>Air/​Aqua/​Eau, Gliserin, Asam Miristat, Asam stearat,
                             PEG-32, Potasium hidroksida, Asam Palmitat, Asam Laurat,
                             Cocamidopropil Betaine, Selulosa Mikrokristalin, Gliseril Stearat,
                             PEG-100 Stearat, Pewangi/​Parfum, Natrium klorida, Dinatrium EDTA, Natrium Benzoat,
                             Polikaprolakton , Propanediol, Asam laktat, PEG-75, Ekstrak Buah Rubus Idaeus (Raspberry).
                             Ekstrak Buah Vaccinium Angustifolium (Blueberry)., Ekstrak Biji Coffea Arabika (Kopi) , Ekstrak Buah
                             Lycium Chinense, Ekstrak Buah Sapindus Mukorossi, Ekstrak Buah Vaccinium Macrocarpon (Cranberry) , Ekstrak 
                             Buah Fragaria Chiloensis (Strawberry) , Ekstrak Biji Rubus Chamaemorus , Papain, Fenoksietanol, Asam Kaprat </h5>
                        </div>                     
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <!-- preview produk -->
    <section class="preview">
        <div class="container">
            <div class="row">
                <div class="title d-flex justify-content-center ">
                    <b>Produk Terkait Lainnya</b>
                </div>
                <div class="container-preview col-lg-12 d-flex justify-content-center align-items-center">
                    <div class="card-small d-flex flex-column">
                        <img src="assets/images/content/new_product_1.png" alt="new product">
                        <button type="button" class="btn btn-primary">Preview</button>
                    </div>
                    <div class="card-big d-flex flex-column">
                        <img src="assets/images/content/new_product_2.png" alt="new product">
                        <button type="button" class="btn btn-primary">Preview</button>
                    </div>
                    <div class="card-small d-flex flex-column">
                        <img src="assets/images/content/new_product_3.png" alt="new product">
                        <button type="button" class="btn btn-primary">Preview</button>
                    </div>
                </div>
                <nav aria-label="...." class="nav-preview">
                    <ul class="pagination pagination-lg d-flex align-items-center justify-content-center ">
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="#"></a>
                        </li>
                        <li class="page-item">
                            <span class="page-link active"></span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    
    
    <!-- Foooter -->
    <?php include "layout/footer.html" ?>
    <!-- Foooter -->

    <script src="assets/js/script.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>