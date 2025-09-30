<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <div class="container-fluid px-4">

  <a class="navbar-brand fw-bold fs-3" href="/">
    <img src="{{ asset('img/logo.svg') }}" alt="Jaecoo Logo" class="inverted-logo" style="height: 40px;">
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavContent"
      aria-controls="navbarNavContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Models
          </a>

          <!-- Pake class dropdown-mega -->
          <div class="dropdown-menu dropdown-mega" aria-labelledby="navbarDropdown">
            <div class="container">
              <div class="row g-4 text-center justify-content-center">
                <div class="col-12 mb-3">
                  <h5 class="text-uppercase text-white">Temukan Model Anda</h5>
                </div>

                <div class="col-6 col-md-3">
                  <div class="model-card"><a href="/overview-j8">
                    <img src="{{ asset('img/nav-j8.png') }}" class="img-fluid mb-2" alt="J8"></a>
                    <h6 class="fw-bold">J8</h6>
                    <p>Mulai dari $3,949,000</p>
                  </div>
                </div>

                <div class="col-6 col-md-3">
                  <div class="model-card"><a href="/overview-j7">
                    <img src="{{ asset('img/nav-j7.png') }}" class="img-fluid mb-2" alt="J7"></a>
                    <h6 class="fw-bold">J7</h6>
                    <p>Mulai dari $2,709,900</p>
                  </div>
                </div>

                <div class="col-6 col-md-3">
                  <div class="model-card">
                    <img src="{{ asset('img/nav-j5.png') }}" class="img-fluid mb-2" alt="J5">
                    <h6 class="fw-bold">J5</h6>
                    <p>Segera hadir</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <!-- <a class="nav-link text-white d-flex align-items-center" href="#">
            Learn more
          </a> -->
        </li>
      </ul>
    </div>
  </div>
</nav>