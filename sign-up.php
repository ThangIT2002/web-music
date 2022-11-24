<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--Style sheet -->
    <link rel="stylesheet" href="assets/css/sign-up.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <img class="netflix-bg"
        src="https://assets.nflxext.com/ffe/siteui/vlv3/0ef67cc5-0aa7-47cf-87bd-7f595afc7cfb/80da7d5e-41c6-4cd6-8ec0-66c581faeb35/VN-vi-20221107-popsignuptwoweeks-perspective_alpha_website_small.jpg"
        srcset="
        https://assets.nflxext.com/ffe/siteui/vlv3/0ef67cc5-0aa7-47cf-87bd-7f595afc7cfb/80da7d5e-41c6-4cd6-8ec0-66c581faeb35/VN-vi-20221107-popsignuptwoweeks-perspective_alpha_website_small.jpg  1000w,
        https://assets.nflxext.com/ffe/siteui/vlv3/0ef67cc5-0aa7-47cf-87bd-7f595afc7cfb/80da7d5e-41c6-4cd6-8ec0-66c581faeb35/VN-vi-20221107-popsignuptwoweeks-perspective_alpha_website_medium.jpg 1500w,
        https://assets.nflxext.com/ffe/siteui/vlv3/0ef67cc5-0aa7-47cf-87bd-7f595afc7cfb/80da7d5e-41c6-4cd6-8ec0-66c581faeb35/VN-vi-20221107-popsignuptwoweeks-perspective_alpha_website_large.jpg  1800w
      " alt="" />
    <!-- <div class="sign-up">
      <form class="sign-up-wraper" action="POST">
        <h2 class="sign-up-header">Đăng ký</h2>
        <div class="sign-up-body"></div>
        <div class="sign-up-footer"></div>
      </form>
    </div> -->
    <div class="sign-up">
        <form class="sign-up-wraper" method="POST">
            <h2 class="sign-up-haeder">Đăng ký</h2>
            <div class="sign-up-body">
                <input type="text" placeholder="Họ và tên" required name="fullName" class="fullName" />
                <input type="text" placeholder="Tên đăng nhập" required name="username" class="username" />
                <input type="password" placeholder="Mật khẩu" required name="password" class="password" />
                <input type="password" placeholder="Nhập lại mật khẩu" required name="re_password" class="password" />
            </div>
            <div class="row">
                <input type="checkbox" name="hide_password" class="hide col-2 ml-2" />
                <label for="" class="col-9 show__pass">Show password</label>
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
            <div class="sign-up-footer">
                <input class="login-btn" type="submit" value="Đăng ký" name="signup" />
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>
<?php
include("connect.php");
$fullName = "";
$username = "";
$password = "";
$re_password = "";
if (isset($_POST['signup'])) {
  $fullName = $_POST['fullName'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $re_password = $_POST['re_password'];
  $sql = "SELECT*FROM taikhoan where username='$fullName' and acc='$username' and password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($password != $re_password) {
    echo "<script>alert('Nhập lại mật khẩu');</script>";
  }
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Đã tồn tại tài khoản này');</script>";
  } else {
    $sql = "INSERT INTO taikhoan(username,acc,password)
                                        VALUES('$fullName','$username','$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script>alert('Bạn đã đăng kí thành công');</script>";
    }
  }
}
?>