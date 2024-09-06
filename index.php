<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le monde des cookies</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./pictures/logo.png" alt="Logo" width="40px" height="40px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_bar" aria-controls="nav_bar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav_bar">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-end" aria-current="page" href="#">Accueil</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
    <main class="container-fluid">
        <section class=" d-lg-flex align-items-center">
            <div class="w-lg-50">
                <div id="carousel" class="carousel slide m-auto">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./pictures/cookies1.jpg" class="d-block w-100" alt="Cookies cassés">
                        </div>
                        <div class="carousel-item">
                            <img src="./pictures/cookies2.jpg" class="d-block w-100 h-100" alt="Cookies empilés">
                        </div>
                        <div class="carousel-item">
                            <img src="./pictures/cookies3.jpg" class="d-block w-100" alt="Cookies empilés">
                        </div>
                        <div class="carousel-item">
                            <img src="./pictures/cookies4.jpg" class="d-block w-100" alt="Pot de cookies renversés">
                        </div>
                        <div class="carousel-item">
                            <img src="./pictures/cookies5.jpg" class="d-block w-100" alt="Cookies avec coulis de chocolat">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="p-3 p-lg-5">
                <h1 class="text-center mb-3">Le monde des cookies</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem corrupti, debitis in eum velit ab quaerat, doloremque veritatis voluptates repellendus similique atque assumenda temporibus dolorum quisquam blanditiis rerum hic ea.
                Quod veniam quas sunt, dolorem praesentium officiis modi vel dicta dolorum! Officiis, quod. Vel, dolore quod est sunt esse a commodi quidem unde, ad magni possimus accusamus sapiente dolores amet?</p>
            </div>
        </section>

    </main>

    <!-- Bootstrap JS, jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>