<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <!-- Uključivanje Bootstrap CSS-a -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv3X2Rz6vJvH8x0F7F1P4puA5Qp1B1l5kz2YVmXYP5wU5JJbPbS3TYYVQee" crossorigin="anonymous">
    
    <!-- Dodavanje vlastitih stilova za slike -->
    <link rel="stylesheet" href="css/gallery.css">
</head>
<body>

<div class="container my-5">
    <!-- Hero sekcija -->
    <div class="text-center mb-5">
        <h1 class="display-4 mt-5">- Gallery - Nürburgring -</h1>
        <hr class="my-4">
        <h2>Explore our beautiful collection of images from Nürburgring.</h2>
    </div>

    <!-- Galerija s 6 slika, koristi Bootstrap grid -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card">
                <img src="news/new-1.jpg" class="card-img-top" alt="Slika 1">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="news/new-2.jpg" class="card-img-top" alt="Slika 2">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="news/new-33.jpg" class="card-img-top" alt="Slika 3">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="news/old-1.jpg" class="card-img-top" alt="Slika 4">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="news/old-2.jpg" class="card-img-top" alt="Slika 5">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="news/old-3.jpg" class="card-img-top" alt="Slika 6">
            </div>
        </div>
    </div>
</div>

<!-- Uključivanje Bootstrap JS-a -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0lXwXf5mAqWvgykzRY7dfF5w99es5r49A4g2N4r5YZXIFN4F" crossorigin="anonymous"></script>

<?php include "footer.php"; ?>
</body>
</html>
