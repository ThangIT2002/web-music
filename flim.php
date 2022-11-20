<!DOCTYPE html>
<html lang="en">

<head>
    <title>Film</title>
    <!--style-->
    <link rel="stylesheet" href="assets/css/flim.css" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <!--script-->
    <script src="assets/js/film.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
    <!--Owl Carousel 2-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
    <div class="container-fluid m-0 p-0">
        <div class="row header m-0 p-0">
            <div class="col-3 logo">
                <p class="logo-item">PMT</p>
            </div>
            <div class="col-6">
                <div class="wrap">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="Tìm phim mà bạn muốn " />
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"> </i>
                        </button>
                    </div>
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
                                        <input class="login-btn" type="submit" value="Log in" name="btn" />
                                        <div class="sign-up">
                                            Bạn chưa có tài khoản
                                            <a href="/sign-up.html">Đăng ký ngay </a>
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
    <div class="container-fluid">
        <div class="row iframe-view">
            <iframe width="1280" height="720" src="https://www.youtube.com/embed/Gd360NcjhAE"
                title="(Official Trailer 2) John Wick 3: Chuẩn Bị Chiến Tranh | KC: 17.06" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
    <div class="container info-box">
        <div class="row">
            <div class="col-12">
                <p class="title">Sát thủ John Wick: Phần 3 – Chuẩn bị chiến tranh</p>
            </div>
            <div class="col-6">
                <div>
                    <p><span>Ngày chiếu </span>17.05.2019</p>
                    <p><span>Duration </span> 6:34 <span>Min</span></p>
                </div>
                <div class="participating-cast">
                    <span>Diễn viên chính</span>
                    <div class="participating-cast-tiem">
                        <p>Keanu Reeves</p>
                        <p>Halle Berry</p>
                        <p>Laurence Fishburne</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p>
                    Tính mạng bị treo giá 14 triệu USD, sát thủ tinh nhuệ John Wick phải
                    chiến đấu với mọi sát thủ trên con đường tìm đến những kẻ là đồng
                    minh cũ và chuộc lại lỗi lầm.
                </p>
            </div>
        </div>
    </div>

    <script>
    //owlCarousel
    $(function() {
        // Owl Carousel
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            items: 5,
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
    <div class="suggest-slider">
        <div class="suggest-title">
            <p class="title">Phim cùng thể loại</p>
        </div>
        <div id="owl-carousel">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="suggest-item">
                        <img class="suggest-flim" src="assets/img/flim list/Poster (3).png" alt="" />
                        <p class="suggest-flim-name">Robert Downey Jr.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="suggest-item">
                        <img class="suggest-flim" src="assets/img/flim list/Poster (1).png" alt="" />
                        <p class="suggest-flim-name">Daniel Craig</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>