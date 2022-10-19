<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('front_assets/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('front_assets/css/gadumi.css') }}">

  <title>Listing</title>
</head>
<body>  
  <div class="container top-header">
    <header class="container-fluid">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid nav-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="logo">
              <img src="{{ asset('images/logo.svg') }}" alt="">
            </div>
            <a class="navbar-brand nav-title" href="#">
              <h1 class="nav-h1">Gadumi</h1>
              <p>Your English language course</p>
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-lesson">
                  <span class="complete-lesson">completed lessons</span>
                  <span class="lesson-count">0 of 70</span>
                </li>
                <li class="nav-item">
                  <span class="knowledge-level">Your knowledge of this level</span>
                </li>
                <li class="nav-item level">
                  <span>0%</span>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>
  <div class="container">
    <div class="container-fluid nav-fluid mt-5">
      <div class="row">
        
        <div class="col-lg-12 d-block d-md-none">
          <div class="input-group">
            <select class="form-select d-block w-100">
              <option value="">Beginner A1</option>
              <option value="">Intermediate A2</option>
              <option value="">Advanced A3</option>
            </select>
          </div>
        </div>
        <div class="col-lg-3 mr-5 d-none d-md-block">
          <ul class="list-group">
            <li class="list-group-item">
              <img src="{{ asset('images/lesson.svg') }}" alt="" srcset="">
              <a href="#" class="active">Lesson</a>
            </li>
            <li class="list-group-item">
              <img src="{{ asset('images/replay.svg') }}" alt="" srcset="">
              <a href="#">Replays</a>
            </li>
            <hr>
            <li class="list-group-item d-none d-md-block">
              <p class="level-text">Choose the level you want to learn at</p>
              <select class="btn btn-outline-primary d-block w-100 select-level">
                <option value="">Beginner A1</option>
                <option value="">Intermediate A2</option>
                <option value="">Advanced A3</option>
              </select>
            </li>
            <hr>
            <li class="list-group-item">
              <img src="{{ asset('images/settings.svg') }}" alt="" srcset="">
              <a href="#" class="settings">Settings</a>
            </li>
            <li class="list-group-item">
              <img src="{{ asset('images/prime_account.svg') }}" alt="" srcset="">
              <a href="#" class="prime_account">Premium Account</a>
            </li>
            <li class="list-group-item">
              <img src="{{ asset('images/contact_us.svg') }}" alt="" srcset="">
              <a href="#" class="contact_us">Contact Us</a>
            </li>
            <li class="list-group-item">
              <img src="{{ asset('images/logout.svg') }}" alt="" srcset="">
              <a href="#" class="logout">Logout</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="overflow-auto">
            <ul class="list-group">
              <li class="list-group-item course-listing">
                <div class="row">
                  <div class="col-9 course-list">
                    <div class="row">
                      <div class="col-4 col-md-2 col-lg-2">
                        
                        <img src="{{ asset('images/profile1.png') }}" alt="" srcset="">
                      </div>
                      <div class="col-6 col-md-9 col-lg-9 ms-4">
                        
                        <a href="#" class="lesson-heading">1. Hello!</a>
                        <span class="d-block text-muted">lesson time: 7 min</span><br>
                      </div>
                    </div>
                    <p>Greetings in English</p>
                  </div>
                  <div class="col-3 d-block check-image">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                  </div>
                </div>
                <hr>
              </li>
              <li class="list-group-item course-listing">
                <div class="row">
                  <div class="col-9 course-list">
                    <div class="row">
                      <div class="col-4 col-md-2 col-lg-2">
                        
                        <img src="{{ asset('images/profile1.png') }}" alt="" srcset="">
                      </div>
                      <div class="col-6 col-md-9 col-lg-9 ms-4">
                        
                        <a href="#" class="lesson-heading">1. Hello!</a>
                        <span class="d-block text-muted">lesson time: 7 min</span><br>
                      </div>
                    </div>
                    <p>Greetings in English</p>
                  </div>
                  <div class="col-3 d-block check-image">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                  </div>
                </div>
                <hr>
              </li>
              <li class="list-group-item course-listing">
                <div class="row">
                  <div class="col-9 course-list">
                    <div class="row">
                      <div class="col-4 col-md-2 col-lg-2">
                        
                        <img src="{{ asset('images/profile1.png') }}" alt="" srcset="">
                      </div>
                      <div class="col-6 col-md-9 col-lg-9 ms-4">
                        
                        <a href="#" class="lesson-heading">1. Hello!</a>
                        <span class="d-block text-muted">lesson time: 7 min</span><br>
                      </div>
                    </div>
                    <p>Greetings in English</p>
                  </div>
                  <div class="col-3 d-block check-image">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                  </div>
                </div>
                <hr>
              </li>
              <li class="list-group-item course-listing">
                <div class="row">
                  <div class="col-9 course-list">
                    <div class="row">
                      <div class="col-4 col-md-2 col-lg-2">
                        
                        <img src="{{ asset('images/profile1.png') }}" alt="" srcset="">
                      </div>
                      <div class="col-6 col-md-9 col-lg-9 ms-4">
                        
                        <a href="#" class="lesson-heading">1. Hello!</a>
                        <span class="d-block text-muted">lesson time: 7 min</span><br>
                      </div>
                    </div>
                    <p>Greetings in English</p>
                  </div>
                  <div class="col-3 d-block check-image">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                  </div>
                </div>
                <hr>
              </li>
              <li class="list-group-item course-listing">
                <div class="row">
                  <div class="col-9 course-list">
                    <div class="row">
                      <div class="col-4 col-md-2 col-lg-2">
                        
                        <img src="{{ asset('images/profile1.png') }}" alt="" srcset="">
                      </div>
                      <div class="col-6 col-md-9 col-lg-9 ms-4">
                        
                        <a href="#" class="lesson-heading">1. Hello!</a>
                        <span class="d-block text-muted">lesson time: 7 min</span><br>
                      </div>
                    </div>
                    <p>Greetings in English</p>
                  </div>
                  <div class="col-3 d-block check-image">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                  </div>
                </div>
                <hr>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('front_assets/js/bootstrap.js') }}"></script>
</body>
</html>