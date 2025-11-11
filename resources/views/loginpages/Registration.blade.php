<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alan+Sans:wght@300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
    .bgimage{
        background: linear-gradient(to bottom, #89f7fe,#66a6ff);
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
    .cstmshadow{
        box-shadow: 8px 10px 20px rgb(179, 212, 219);
    }
    .loginpgbtn:hover{
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
</head>
<body class="bgimage d-flex justify-content-center align-items-center">
    <div class="container blur rounded-3 cstmshadow fade-in-page border border-light" style="max-width: 540px;">

                <div class="position-relative">
                    <img src="{{url('/images/Loginimg.jpg')}}" alt="img" class="rounded-circle position-absolute top-0 start-50 translate-middle" style="width: 120px; height:120px;">
                </div>
                <div class="d-flex justify-content-center pt-5">
                    <h2 class="display-6 word text-white text-uppercase mt-3">Registration</h2>
                </div>
                <form action="" class="mx-3">
                    <div class="mb-3 mx-auto">
                        <label for="exampleInputname" class="form-label fs-5 text-white word">Name</label>
                        <input type="text" class="form-control" id="exampleInputname">
                    </div>
                    <div class="mb-3 mx-auto">
                        <label for="exampleInputEmail1" class="form-label fs-5 text-white word">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 mx-auto">
                        <label for="exampleInputPassword1" class="form-label fs-5 text-white word">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 mx-auto">
                        <label for="exampleInputDOB" class="form-label fs-5 text-white word">Date of Birth</label>
                        <input type="date" class="form-control" id="exampleInputDOB">
                    </div>
                    <div class="mx-auto mb-3 d-flex justify-content-center gap-2">
                        <button type="submit" class="btn btn-primary word w-50">Register</button>
                        <button type="button" onclick="window.location.href='{{route('homepage')}}'" class="btn btn-danger word w-50">Cancel</button>
                    </div>
                </form>
        <div class="mb-2 d-flex justify-content-center gap-1">
            <p class="word text-white">Already have an ID?</p><a class="word text-decoration-none loginpgbtn" href="{{route('login')}}" style="color: rgb(70, 128, 236)">Login here.</a>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    // Wait until the page is fully loaded
    window.addEventListener('load', () => {
      document.querySelector('.fade-in-page').classList.add('show');
    });
</script>
</body>
</html>
