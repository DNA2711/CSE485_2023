<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
                <div class="container-fluid flex-column">
                    <div class="my-logo">
                        <a class="navbar-brand" href="./">
                            <img src="images/logo2.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!--                <ul class="navbar-nav me-auto mb-2 mb-lg-0">-->
                        <!--                    <li class="nav-item">-->
                        <!--                    <a class="nav-link" aria-current="page" href="./">Trang chủ</a>-->
                        <!--                    </li>-->
                        <!--                    <li class="nav-item">-->
                        <!--                    <a class="nav-link active" href="./login.php">Đăng nhập</a>-->
                        <!--                    </li>-->
                        <!--                </ul>-->
                        <!--                <form class="d-flex" role="search">-->
                        <!--                    <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">-->
                        <!--                    <button class="btn btn-outline-success" type="submit">Tìm</button>-->
                        <!--                </form>-->
                    </div>
                </div>
            </nav>
        </header>
        <div class="p-5" style="background: linear-gradient(-135deg,#c850c0,#4158d0)">
        <main class="container mt-5 mb-5">
            <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
            <div class="d-flex justify-content-center h-100">
                <div class="bg-white mt-auto mb-auto h-100 w-50 rounded p-5">
                    <div class="card-header text-center">
                        <h3 class="text-black">Sign In</h3>
                    </div>
                    <div class="card-body pt-4 px-5">
                        <form>
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username" >
                            </div>

                            <div class="input-group mb-4">
                                <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control" placeholder="Password" >
                            </div>

                            <div class="row align-items-center remember text-black">
                                <input type="checkbox">Remember Me
                            </div>
                            <div class="form-group d-flex justify-content-center py-4">
                                <input type="submit" value="Login" class="btn w-50 text-white text-md-center" style="background: linear-gradient(-135deg,#c850c0,#4158d0)">
                            </div>
                        </form>
                        <div class="d-flex justify-content-center mb-4" style="font-size: 50px">
                            <div class="d-flex justify-content-evenly w-75 align-items-center"
                            <span><i class="fa-brands fa-facebook" style="color: #005eff;"></i></span>
                            <span><i class="fa-brands fa-google-plus" style="color: #aa2c2c;"></i></span>
                            <span><i class="fa-brands fa-twitter" style="color: #394893;"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center ">
                        Don't have an account? <a href="#" class="text-warning text-decoration-none mx-1" style="color: #005eff !important;"> Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-warning text-decoration-none" style="color: #005eff !important;">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </main>
        </div>

        <footer class="bg-white d-flex justify-content-center text-center w-100 align-content-center pt-3">
            <h4 class=" text-uppercase fw-bold">TLU's music garden</h4>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>