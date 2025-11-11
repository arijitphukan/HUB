<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Navbar</title>
</head>
<style>
    .nav-item:hover {
        background: linear-gradient(to top, #1e2761, #ffffff00);
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        transition: 0.3s;
    }
    .nav-item .nav-link:hover{
        transform: translateY(-2px);
        transition: 0.3s;
    }
    .nav-link{
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        font-style: normal;
    }
    .cstmshadow{
        box-shadow: 8px 10px 20px rgb(71, 180, 210);
    }
    .blur{
        background-color: rgba(0, 0, 0, 0.186);
        -webkit-backdrop-filter: blur(2px);
        backdrop-filter: blur(2px);
    }
</style>
<body>
        <nav class="navbar navbar-expand-lg sticky-top border blur">
            <div class="container-fluid">
                <div class="d-flex">
                    <img src="" alt="img">
                    <h1 class="navbar-brand text-white text-uppercase word">
                        Hub
                    </h1>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse py-2" id="navbarTogglerDemo01">
                    <ul class="navbar-nav d-flex justify-content-center align-items-center mx-auto gap-3">
                        <li class="nav-item px-2">
                            <a class="nav-link fs-5 text-uppercase text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fs-5 text-uppercase text-white" href="#">Games</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fs-5 text-uppercase text-white" href="#">Comics</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fs-5 text-uppercase text-white" href="#">Feedbacks</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fs-5 text-uppercase text-white" href="#">About</a>
                        </li>
                    </ul>
                    <div>
                        <button class="btn btn-info word text-white border" style="width: 120px" onclick="window.location.href='{{route('login')}}'">Login</button>
                    </div>
                </div>
            </div>
        </nav>
</body>
</html>
