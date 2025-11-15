<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
</head>
<style>
    .nav-item:hover{
        background: linear-gradient(to top, #2e79bbd5, #ffffff00);
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
    }
    .nav-item .nav-link:hover{
        color: white;
        transform: translateY(-2px);
        transition: 0.3s;
    }
    .nav-link{
        font-family: "Merriweather", serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:"wdth" 100;
    }
    .uword{
        font-family: "Source Serif 4", serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-info-subtle">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
            <ul class="navbar-nav mx-auto my-2 gap-2 gap-md-2">
                <li class="nav-item px-2 ">
                    <a class="nav-link active text-uppercase" aria-current="page" href="#">Dashboard</a>
                </li>
                <li class="nav-item px-2 ">
                    <a class="nav-link active text-uppercase" aria-current="page" href="#">Analytics</a>
                </li>
                <li class="nav-item px-2 ">
                    <a class="nav-link active text-uppercase" href="#">Collection</a>
                </li>
                <li class="nav-item px-2 ">
                    <a class="nav-link active text-uppercase" href="">Profile</a>
                </li>
            </ul>
            <div class="me-2">
                <button class="btn btn-primary uword" onclick="window.location.href='{{route('homepage')}}'"><i class="bi bi-person-gear me-2"></i>Home</button>
            </div>
            </div>
        </div>
    </nav>
</body>
</html>
