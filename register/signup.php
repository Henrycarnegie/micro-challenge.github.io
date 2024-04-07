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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>
    <section class="signup">
        <div class="container">
            <div class="container-content col-12 d-flex">
                <div class="col-4 img-signup">
                    <img src="../assets/images/content/3d_signup.png" alt=>
                </div>
                <div class="col-8 form-signup d-flex justify-content-center align-items-center">
                    <?php
                        include("../php/config.php");
                        if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            //verifying the unique email
                            $verify_query = mysqli_query($conn, "SELECT email FROM users WHERE email='$email");

                            if (mysqli_num_rows($verify_query) != 0) {
                                echo "<div class = 'message'>
                                            <p>This email is used, Try another One Please!</p>
                                        </div> <br>";
                                echo "<a href='javascript:self.history.back()'><button class = 'btn'></button>";
                            } else {
                                mysqli_query($conn, "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password') ");

                                echo "<div class = 'message'>
                                        <p>Registration succesfully</p>
                                    </div> <br>";
                            }
                        }
                    ?>
                    <form action="" method="post" class="col-8">
                        <div class="form-title mb-lg-5">
                            <h3 class="text">Buat akun</h3>
                        </div>
                        <div class="col-12">
                            <input name="name" type="text" class="form-control form-control-lg" placeholder="nama" aria-label="default input example">
                        </div>
                        <div class="col-12">
                            <input name="email" type="email" class="form-control form-control-lg" id="inputEmail" placeholder="alamat email">
                        </div>
                        <div class="col-12">
                            <input name="password" type="password" class="form-control form-control-lg" id="inputPassword" placeholder="kata sandi">
                        </div>
                        <div class="col-12">
                            <h6 class="text-center">- or -</h6>
                        </div>
                        <div class="col-12 btn-google text-center">
                            <a href="#" class="btn btn-primary"><i class="fa-brands fa-google me-lg-2"></i>lanjut dengan google</a>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="go-login">
                            <h6>Sudah punya akun? <a href="login.php">Masuk</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/js/script.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>