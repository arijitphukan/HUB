<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
</head>
<style>
    .nav-item:hover{
        background: linear-gradient(to top, #49aaffd5, #ffffff00);
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
    }
    .nav-item .nav-link:hover{
        color: rgb(255, 255, 255);
        transform: translateY(-2px);
        transition: 0.3s;
    }
    .nav-link{
        color: rgb(255, 255, 255);
        font-family: "Merriweather", serif;
        font-optical-sizing: auto;
        font-weight: 700;
        font-style: normal;
        font-variation-settings:"wdth" 100;
    }
    .uword{
        font-family: "Source Serif 4", serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
    }
    .edge{
        border-radius: 0;
    }
    .lgbtn{
        border-color: white;
        border-radius: 6px;
        background: linear-gradient(to left,#ceecff,#78b0ff);
    }
    .pannel{
        background: linear-gradient(to bottom left,#308cc6,#225399)
    }
    @media (min-width:1024px){
        .edge{
            border-radius: 50rem;
        }
        .lgbtn{
            border-color: white;
            border-radius: 10px;
            background: linear-gradient(to left,#ceecff,#78b0ff);
        }
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg pannel edge sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
                <ul class="navbar-nav mx-auto my-2 gap-2 gap-md-2">
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item px-2 ">
                        <a class="nav-link text-uppercase" aria-current="page" href="#">Analytics</a>
                    </li>
                    <li class="nav-item px-2 d-md-none">
                        <a class="nav-link text-uppercase" href="#">Collection</a>
                    </li>
                    <li class="nav-item px-2 ">
                        <a class="nav-link text-uppercase" href="">Profile</a>
                    </li>
                    <li class="nav-item px-2 ">
                        <a class="nav-link text-uppercase" href="">Settings</a>
                    </li>
                </ul>
                <div class="me-2">
                    <button class="btn lgbtn uword" type="button" onclick="window.location.href='{{route('homepage')}}'" style="color: #225399"><i class="bi bi-box-arrow-right me-1"></i>Logout</button>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>
