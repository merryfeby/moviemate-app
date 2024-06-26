
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" /> -->
    <script src="https://kit.fontawesome.com/b9b5e10605.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="fa-solid fa-ticket"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">MovieMate</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/admin" class="sidebar-link">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/beli" class="sidebar-link">
                        <i class="fa-solid fa-film"></i>
                        <span>Beli Film </span>
                     </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="/karyawan" class="sidebar-link">
                        <i class="fa-solid fa-users"></i>
                        <span>Atur Karyawan</span>
                    </a>
                </li>
                
            </ul>
            <div class="sidebar-footer">
                <a href="/" class="sidebar-link">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
          <h1>Buy Movie License </h1>
          <br>
          <div class="container">
              <div class="d-flex flex-row justify-content-evenly flex-wrap">
                  @foreach ($films as $film)
                  <div class="card" style="width: 18rem;">
                    <img src="{{ $film['poster'] }}" class="card-img-top" alt="{{ $film['title'] }}">
                    <div class="card-body">
                          <h5 class="card-title">{{ $film['title'] }}</h5>
                          <p class="card-text">Produced by: {{ $film['producer'] }}</p>
                          <form action="/beli/beliFilm" method="post">
                              @csrf
                              <input type="hidden" name="id" value="{{ $film['id'] }}">
                              <button type="submit" class="btn btn-primary">Buy License</button>
                          </form>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
      </div>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>