<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<style>
    .navword{
        font-family: "Source Serif 4", serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
    }
    ul{
        list-style-type: none;
        padding: 0px;
        margin:0px;
    }
    .sidepannel{
        background: linear-gradient(to bottom,#308cc6,#225399);
    }
</style>
<body class="d-flex flex-column">
    <div class="flex-grow-1" style="min-height: 100vh;">
        <div class="container-fluid">
            <div class="row">
                <div class="d-none d-md-block col-md-3 sidepannel" style="min-height: 100vh;">
                    <div class="mt-3 d-flex justify-content-start flex-column">
                        <h2 class="navword text-uppercase text-white">Collection</h2>
                        <div class="mt-3">
                            <h5 class="text-uppercase navword text-white">Games</h5>
                            <ul>
                                <li class="bg-white d-flex"><img src="{{url('/images/icon.jpg')}}" alt="icon" class="rounded-circle me-2" height="32px" width="32px">Game 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-block col-md-9 bg-white">
                    <div class="mt-3">
                        @include('components.usernavbar')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        @include('components.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
