<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alan+Sans:wght@300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<style>
    .bgimage{
        background: linear-gradient(to bottom, #308cc6,#225399);
        height: 100vh;
    }
    .blur{
        background: rgba(255, 255, 255, 0.2);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
    }
    .cstmshadow{
        box-shadow: 8px 10px 20px rgb(179, 212, 219);
    }
    .word{
        font-family:"Alan Sans", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .forgotpass:hover {
        transform: translateX(-3px);
        transition: 0.2s;
    }
    .registerbtn:hover{
        transform: translateY(2px);
        transition: 0.3s;
    }
    .fade-in-page {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    .fade-in-page.show {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<body class="bgimage d-flex justify-content-center align-items-center ">
    <div class="container blur border border-light rounded-4 cstmshadow py-3 fade-in-page" style="max-width:540px">
        <div class="position-relative">
            <img src="{{url('/images/Loginimg.jpg')}}" class="rounded-circle position-absolute top-0 start-50 translate-middle" alt="img" style="height:120px; width:120px;">
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <h2 class="py-3 display-5 word text-white text-uppercase">LOGIN</h2>
        </div>
        <form>
            <div class="mb-3 mx-auto">
                <label for="exampleInputEmail1" class="form-label fs-5 text-white word"><i class="bi bi-file-person ms-2 me-1"></i>User ID</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 mx-auto">
                <label for="exampleInputPassword1" class="form-label fs-5 text-white word"><i class="bi bi-pass ms-2 me-1"></i>Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 d-flex justify-content-end me-2">
                <a class="word text-decoration-none text-white forgotpass" href="#">Forgot password?</a>
            </div>
            <div class="mx-auto mb-3 d-flex justify-content-center gap-2">
                <button type="button" onclick="window.location.href='{{route('userdash')}}'" class="btn btn-primary word w-50">Login</button>
                <button type="button" onclick="window.location.href='{{route('homepage')}}'" class="btn btn-danger word w-50">Cancel</button>
            </div>

        </form>
        <div class="mb-2 d-flex justify-content-center gap-1">
            <p class="word text-white">Don't have an ID?</p><a class="word text-decoration-none registerbtn" href="{{route('register')}}" style="color: rgb(255, 225, 0)">Create one here.</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    // Wait until the page is fully loaded
    window.addEventListener('load', () => {
      document.querySelector('.fade-in-page').classList.add('show');
    });
</script>
</html>
