<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- style.css-->
    <link rel="stylesheet" href="assets/css/home.css" />
    <!--Owl Carousel 2-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet" />
    <!--themify-icons-->
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css" />
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="assets/js/home.js"></script>
</head>

<body>
    <div class="container-fluid m-0 p-0">
        <div class="row header m-0 p-0">
            <div class="col-3 logo">
                <p class="logo-item">PMT</p>
            </div>
            <div class="col-6">
                <div class="wrap">
                    <form action="film.php" method="post">
                        <div class="search">
                            <input type="text" class="searchTerm" placeholder="Tìm phim mà bạn muốn " />
                            <button type="submit" class="searchButton" name="search_btn">
                                <i class="fa fa-search"> </i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-3">
                <div class="login">
                    <a href="" data-toggle="modal" data-target="#login">Tài khoản </a>
                    <div class="modal fade" id="login" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content modal-login">
                                <form class="login-wraper" method="POST">
                                    <h2 class="login-haeder">Đăng nhập</h2>
                                    <div class="login-body">
                                        <input type="text" placeholder="Tên đăng nhập" required name="username"
                                            class="username" />
                                        <input type="password" placeholder="Mật khẩu" required name="password"
                                            class="password" />
                                    </div>
                                    <div class="row">
                                        <input type="checkbox" name="hide_password" class="hide col-2 t" />
                                        <label for="" class="col-9 show__pass">Show password
                                        </label>
                                        <script>
                                        //hide password
                                        $(document).on("click", ".hide", function() {
                                            if ($(".password").attr("type") == "password") {
                                                $(".password").attr("type", "text");
                                            } else {
                                                $(".password").attr("type", "password");
                                            }
                                        });
                                        </script>
                                    </div>
                                    <div class="login-footer">
                                        <input class="login-btn" type="submit" value="Log in" name="login" />
                                        <!-- <button type="submit" name="login">ĐK</button> -->
                                        <?php
                    include("connect.php");
                    $username = "";
                    $password = "";
                    if (isset($_POST['login'])) {
                      $username = $_POST['username'];
                      $password = $_POST['password'];
                      $sql = "SELECT*FROM taikhoan where username='$username' and password='$password'";
                      $result = mysqli_query($conn, $sql);
                      if ($result->num_rows > 0) {

                        session_start();
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['password'] = $row['password'];
                        // header('Location: ./film.php');
                        // exit();
                        echo "<script>location.href = './flim.php';</script>";
                      } else {
                        echo "<script>alert('not');</script>";
                      }
                    }
                    ?>
                                        <div class="sign-up">
                                            Bạn chưa có tài khoản
                                            <a href="sign-up.php">Đăng ký ngay </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid m-0 p-0">
        <div class="banner-slide row p-0 m-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="banner-item">
                            <img class="d-block banner-img" src="assets/img/1.png" alt="First slide" />
                            <div class="description">
                                <p class="description-title title">
                                    Sát thủ John Wick: Phần 3 – Chuẩn bị chiến tranh
                                </p>
                                <p class="description-text text">
                                    John Wick đang bỏ trốn sau khi giết một thành viên của hội
                                    sát thủ quốc tế, và với mức giá 14 triệu đô la trên đầu, anh
                                    ta là mục tiêu của những người đàn ông và phụ nữ bị đánh ở
                                    khắp mọi nơi.
                                </p>
                                <button type="button" class="trailer-btn btn btn-danger text">
                                    Trailer
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="banner-item">
                            <img class="d-block banner-img" src="assets/img/1.png" alt="Second slide" />
                            <div class="description">
                                <p class="title">
                                    Sát thủ John Wick: Phần 3 – Chuẩn bị chiến tranh
                                </p>
                                <p class="sub-title">
                                    John Wick đang bỏ trốn sau khi giết một thành viên của hội
                                    sát thủ quốc tế, và với mức giá 14 triệu đô la trên đầu, anh
                                    ta là mục tiêu của những người đàn ông và phụ nữ bị đánh ở
                                    khắp mọi nơi.
                                </p>
                                <button type="button" class="trailer-btn btn btn-danger text">
                                    Trailer
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="banner-item">
                            <img class="d-block banner-img" src="assets/img/1.png" alt="Third slide" />
                            <div class="description">
                                <p class="title">
                                    Sát thủ John Wick: Phần 3 – Chuẩn bị chiến tranh
                                </p>
                                <p class="sub-title">
                                    John Wick đang bỏ trốn sau khi giết một thành viên của hội
                                    sát thủ quốc tế, và với mức giá 14 triệu đô la trên đầu, anh
                                    ta là mục tiêu của những người đàn ông và phụ nữ bị đánh ở
                                    khắp mọi nơi.
                                </p>
                                <button type="button" class="trailer-btn btn btn-danger text">
                                    Trailer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <a style="width: 100px" class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                    <span class="sr-only">Previous </span>
                </a>
                <a style="width: 100px" class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"> </span>
                    <span class="sr-only">Next </span>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row genre-nav">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Tất cả
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Hành động
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Hoạt hình
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container">
                <div class="flim row">
                    <div class="col-3">
                        <div class="flim-item">
                            <img class="flim-poster" src="assets/img/flim list/Poster (1).png" alt="" />
                            <p class="flim-info text">USA,2016-Current</p>
                            <div class="flim-name">
                                <p>Spider-Man : Into The Spider Verse</p>
                            </div>
                            <p class="genres text">Action, Adventure, Horror</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="container">
                <div class="flim row">
                    <div class="col-3">
                        <div class="flim-item">
                            <a href="flim.php"><img class="flim-poster" src="assets/img/flim list/Poster (4).png"
                                    alt="" /></a>
                            <p class="flim-info text">USA,2016-Current</p>
                            <div class="flim-name">
                                <p>No time to die</p>
                            </div>
                            <p class="genres text">Action, Adventure, Horror</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="container">
                <div class="flim row">
                    <div class="col-3 t">
                        <div class="flim-item">
                            <img class="flim-poster" src="assets/img/flim list/sing2.jpg " alt="" />
                            <p class="flim-info text">USA,2016-Current</p>
                            <div class="flim-name">
                                <p>Sing 2</p>
                            </div>
                            <p class="genres text">Action, Adventure, Horror</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    //owlCarousel
    $(function() {
        // Owl Carousel
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            items: 2,
            margin: 10,
            loop: true,
            nav: false,
            dots: false,
        });

        owl.on("mousewheel", ".owl-stage", function(e) {
            if (e.deltaY > 0) {
                owl.trigger("next.owl");
            } else {
                owl.trigger("prev.owl");
            }
            e.preventDefault();
        });
    });
    </script>
    <div class="actor-slider">
        <div id="owl-carousel">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="actor-item">
                        <img class="actor-avt" src="assets/img/actor/Robert Downey Jrcropped.jpg" alt="" />
                        <p class="actor-name">Robert Downey Jr.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="actor-item">
                        <img class="actor-avt" src="assets/img/actor/Daniel_Craig.jpg" alt="" />
                        <p class="actor-name">Daniel Craig</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>