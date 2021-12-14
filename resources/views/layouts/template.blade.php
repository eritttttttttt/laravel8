<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'
    integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=='
    crossorigin='anonymous' />
  {{-- 再拆 laytou出來 --}}
  {{-- <link rel="stylesheet" href="./css/all.css"> --}}
  <link rel="stylesheet" href="{{asset('css/all.css')}}">

  @yield('css')
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white p-0">
    <div class="container">
      <a class="navbar-brand d-inline-block p-3" href="#">
        <img class="logo" src="{{asset('images/logo.svg')}}" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto align-items-center">
          <li class="nav-item mr-2">
            <a class="nav-link btn btn-outline-light border-0 py-3 px-4 rounded-lg" href="{{asset('/news')}}">News</span></a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link btn btn-outline-light border-0 py-3 px-4 rounded-lg" href="#">Portfolio</span></a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link btn btn-outline-light border-0 py-3 px-4 rounded-lg" href="#">About</span></a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link btn btn-outline-light border-0 py-3 px-4 rounded-lg" href="#">Contact</span></a>
          </li>
          <li class="nav-item mr-2 d-flex">
            <a class="nav-link h3 mr-2" href="./checkout1.html"><i class="fas fa-shopping-cart"></i></a>
            <div class="dropdown">
              <a class="nav-link h3" data-toggle="dropdown" href="#"><i class="fas fa-user-circle"></i></a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="./login.html">Login</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    @yield('main')
  </main>

  <footer>
    <section class="section container">
      <div class="row text-center text-md-left">
        <div class="col-md">
          <h4 class="h6">數位方塊</h4>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing eli
          </p>
        </div>
        <div class="col-md">
          <h4>lorem</h4>
          <ul>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
          </ul>
        </div>
        <div class="col-md">
          <h4>lorem</h4>
          <ul>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
          </ul>
        </div>
        <div class="col-md">
          <h4>lorem</h4>
          <ul>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
          </ul>
        </div>
        <div class="col-md">
          <h4>lorem</h4>
          <ul>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
          </ul>
        </div>


      </div>
    </section>
    
    <section class="bg-light py-3">
      <div class="container d-md-flex d-block">
        <div class="copyRight mr-md-auto text-center text-md-left">
          copyright ©
        </div>
        <ul class="socialLink list-unstyled d-flex justify-content-center">
          <li class="mr-2"><a class="text-dark" href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="mr-2"><a class="text-dark" href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="mr-2"><a class="text-dark" href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a class="text-dark" href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </section>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>

  @yield('js')
</body>

</html>