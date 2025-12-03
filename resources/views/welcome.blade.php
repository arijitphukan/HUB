<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sirin+Stencil&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<style>
    .gradient{
        background: linear-gradient(to bottom right, #5acdfe, #249edb);
    }
    .gradword{
        color:rgb(211, 255, 255);
    }
    .gradientcont{
        background:linear-gradient(to top left, rgba(255, 255, 255, 0.125),rgba(0, 0, 0, 0.362));
    }
    .word{
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        font-style: normal;
    }
    .par{
        font-family: "Rubik Doodle Shadow", system-ui;
        font-weight: 500;
        font-style: normal;
    }
    .part{
        font-family: "Sirin Stencil", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .hiddentxt {
        opacity: 0;
        transform: translateY(40px);
        transition: 0.5s ease-in-out;
    }
    .visibletxt {
        opacity: 1;
        transform: translateY(0);
    }
    .hiddentxt1 {
        opacity: 0;
        transform: translateY(40px);
        transition: 0.4s ease-in-out;
    }
    .visibletxt1 {
        opacity: 1;
        transform: translateY(0);
    }
    .hiddenimg {
        opacity: 0;
        transform: translateX(-40px);
        transition: 0.6s ease-in-out;
    }
    .visibleimg {
        opacity: 1;
        transform: translateX(0);
    }
</style>
<body>
    <div class="gradient d-flex flex-column">
        <div class="flex-grow-1" style="min-height: 100vh;">
            @include('components.homenavbar')
            <video autoplay muted loop playsinline class="d-none d-md-block" style="width: 100%; height: 720px; object-fit:cover;">
                <source src="{{ url('/images/video1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="container-fluid gradientcont fade-in-page pt-3" style="min-height: 100vh;">
                <h1 class="d-flex justify-content-center text-uppercase text-white par display-1 pt-5 hiddentxt1" id="textDiv1" data-visible-class="visibletxt1">The gaming hub</h1>
                <div class="row mb-3">
                    <div class="col-12 col-md-7 hiddentxt" id="textDiv" data-visible-class="visibletxt">
                        <h1 class="part display-4 text-uppercase gradword">Browse or Publish Games</h1>
                        <p class="text-white part fs-4">Welcome to our <strong class="fst-italic">Gaming Hub</strong> — your ultimate destination to browse, play, and publish games!</p>
                        <p class="text-white part fs-4">Whether you’re a player searching for new adventures or a creator eager to share your own, we bring together a vibrant community where imagination meets innovation. Explore a wide range of games across genres, from action-packed challenges to creative indie titles, all in one place. Developers can easily upload and showcase their creations, connect with players, and grow their audience.</p>
                        <p class="text-white part fs-4">Dive in today — discover, play, and bring your gaming ideas to life!</p>
                        <div class="d-flex justify-content-center pt-4 gap-2">
                            <button class="btn btn-info btn-lg btn-outline-light rounded-4 part" style="width: 240px;">Browse</button>
                            <button class="btn btn-info btn-lg btn-outline-light rounded-4 part" style="width: 240px;">Publish</button>
                        </div>
                    </div>
                    <div class="col-md-5 d-none d-md-block hiddenimg" id="imgDiv" data-visible-class="visibleimg">
                        <h1 class="gradword part text-uppercase d-flex justify-content-center display-4">Top Picks</h1>
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-center">
                                        <div class="card" style="width: 24rem; height: 28rem;">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title1</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <div class="card" style="width: 24rem; height: 28rem;">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title2</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <div class="card" style="width: 24rem; height: 28rem;">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title3</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h1 class="mb-4 d-flex justify-content-center text-uppercase text-white par display-1 hiddentxt" id="txtDiv2" data-visible-class="visibletxt">The Comic hub</h1>
                    <div class="row pb-3">
                        <div class="col-4 hiddenimg" id="imgDiv1" data-visible-class="visibleimg">
                            <h1 class="gradword part text-uppercase d-flex justify-content-center display-4">Top Rated</h1>
                            <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="d-flex justify-content-center">
                                            <div class="card bg-transparent" style="width: 22rem; height: 28rem; border:none;">
                                                <div class="card-body p-0">
                                                    <img src="{{url('/images/icon.jpg')}}" alt="..." style="width:100%; height:100%; object-fit:fit; border-radius:12px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex justify-content-center">
                                            <div class="card" style="width: 24rem; height: 28rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title2</h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex justify-content-center">
                                            <div class="card" style="width: 24rem; height: 28rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title3</h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-8 hiddentxt" id="parDiv" data-visible-class="visibletxt">
                            <h1 class="part display-4 text-uppercase gradword">Browse, Publish or Read Comics</h1>
                            <p class="text-white part fs-4">Welcome to our <strong class="fst-italic">Comics Hub</strong> — a place where stories come alive and creativity is celebrated!</p>
                            <p class="text-white part fs-4">Here, you can browse and enjoy comics from talented artists around the world or publish your own creations for readers to discover. Flip through endless genres, from thrilling adventures and heartwarming tales to quirky humor and bold imagination.For creators, this is your stage — share your art, build your audience, and bring your characters to life. Whether you read or create, this is where every page begins something new.</p>
                            <p class="text-white part fs-4">Dive in and explore the world of comics today!</p>
                            <div class="d-flex justify-content-start py-4 gap-2">
                                <button class="btn btn-info btn-lg btn-outline-light rounded-4 part" style="width: 240px;">Browse</button>
                                <button class="btn btn-info btn-lg btn-outline-light rounded-4 part" style="width: 240px;">Publish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0 p-md-5" style="background: azure;">
                <h1 class="d-flex justify-content-center text-uppercase mb-4 word display-5" style="color: #5acdfe;">Feedbacks</h1>
                <div class="container rounded p-5 shadow-sm w-100" style="background: #3d93eeb2; color:azure">
                    fvfbxcf
                </div>
            </div>
            <div class="container-fluid py-5 px-4" style="background: azure;">
                <h1 class="word text-uppercase d-flex justify-content-center mb-3 display-5" style="color: #5acdfe;">Submit Feedback and Suggestion</h1>
                <form>
                    <div class="container border border-white shadow p-4 rounded w-75" style="background: #3d93eeb2; color:azure">
                        <div class="row mb-3">
                            <div class="col">
                                <h5 for="exampleFName" class="word">First Name</h5>
                                <input type="text" class="form-control form-control-lg" id="exampleFName">
                            </div>
                            <div class="col">
                                <h5 for="exampleLName" class="word">Last Name</h5>
                                <input type="text" class="form-control form-control-lg" id="exampleLName">
                            </div>
                        </div>
                        <div class="mb-3">
                            <h5 for="exampleInputEmail" class="word">Email</h5>
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail"></input>
                        </div>
                        <div class="mb-3">
                            <h5 for="exampleInputFeedback" class="word">Feedback</h5>
                            <textarea type="text" class="form-control form-control-lg" id="exampleInputFeedback"></textarea>
                        </div>
                        <div class="mb-3">
                            <h5 for="exampleInputSuggestion" class="word">Suggestion</h5>
                            <textarea type="text" class="form-control form-control-lg" id="exampleInputSuggestion"></textarea>
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="submit" class="btn btn-primary word mt-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                @include('components.footer')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                let id = entry.target.dataset.visibleClass;

                if (entry.isIntersecting) {
                    entry.target.classList.add(id);
                } else {
                    entry.target.classList.remove(id); // if you want show only once remove this line
                }
            });
        },{ threshold:0.3 });

        // Observe all 3 elements
        observer.observe(document.getElementById("textDiv1"));
        observer.observe(document.getElementById("textDiv"));
        observer.observe(document.getElementById("imgDiv"));
        observer.observe(document.getElementById("txtDiv2"));
        observer.observe(document.getElementById("parDiv"));
        observer.observe(document.getElementById("imgDiv1"));
    </script>

</body>
</html>
