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
<body>
    <div class="d-flex flex-column">
        <div class="flex-grow-1 bgimage" style="min-height: 100vh;">
            <div class="container-fluid blur rounded-3 cstmshadow fade-in-page border border-light my-4" style="max-width: 620px;">
                <div class="d-flex justify-content-center">
                    <h2 class="display-5 word text-white text-uppercase mt-1">Registration</h2>
                </div>
                <form action="{{route('register')}}" method="POST" class="mx-2">
                    @csrf
                    <div class="mb-2 mx-auto">
                        <label for="exampleInputname" class="form-label fs-5 text-white word"><i class="bi bi-person-circle ms-2 me-1"></i>Name</label>
                        <input type="text" class="form-control" id="exampleInputname" name="name">
                        <div>@error('name'){{$message}} @enderror</div>
                    </div>
                    <div class="mb-2 mx-auto">
                        <label for="exampleInputEmail1" class="form-label fs-5 text-white word"><i class="bi bi-envelope-at ms-2 me-1"></i>Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emial">
                        <div>@error('email'){{$message}} @enderror</div>
                    </div>
                    <div class="mb-2 mx-auto">
                        <label for="exampleUserName" class="form-label fs-5 text-white word"><i class="bi bi-file-person ms-2 me-1"></i>Username</label>
                        <input type="text" class="form-control" id="exampleUserName" name="username">
                        <div>@error('username'){{$message}} @enderror</div>
                    </div>
                    <div class="row">
                        <div class="col mb-2 mx-auto">
                            <label for="exampleInputPassword1" class="form-label fs-5 text-white word"><i class="bi bi-file-earmark-lock2 ms-2 me-1"></i>Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            <div>@error('password'){{$message}} @enderror</div>
                        </div>
                        <div class="col mb-2 mx-auto">
                            <label for="exampleInputConfirmPassword1" class="form-label fs-5 text-white word"><i class="bi bi-file-earmark-lock2 ms-2 me-1"></i>Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputConfirmPassword1" name="confirm_password">
                            <div>@error('confirm_password'){{$message}} @enderror</div>
                        </div>
                    </div>
                    <div class="mb-2 mx-auto">
                        <label for="exampleInputDOB" class="form-label fs-5 text-white word"><i class="bi bi-calendar2 ms-2 me-1"></i>Date of Birth</label>
                        <input type="date" class="form-control" id="exampleInputDOB" name="date_of_birth">
                        <div>@error('date_of_birth'){{$message}} @enderror</div>
                    </div>
                    <div class="mx-auto mb-2 d-flex justify-content-center gap-2">
                        <button type="submit" class="btn btn-primary word w-50">Register</button>
                        <button type="button" onclick="window.location.href='{{route('homepage')}}'" class="btn btn-danger word w-50">Cancel</button>
                    </div>
                    <div class="my-1 d-flex justify-content-center gap-1">
                        <p class="word text-white">Already have an ID?</p><a class="word text-decoration-none loginpgbtn" href="{{route('login')}}" style="color: rgb(255, 225, 0)">Login here.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    window.addEventListener('load', () => {
      document.querySelector('.fade-in-page').classList.add('show');
    });
</script>

</html>
