<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
    
    <!-- Uključivanje Bootstrap CSS-a -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv3X2Rz6vJvH8x0F7F1P4puA5Qp1B1l5kz2YVmXYP5wU5JJbPbS3TYYVQee" crossorigin="anonymous">
    
    <!-- Dodavanje vlastitih stilova -->
    <link rel="stylesheet" href="css/about.css"> <!-- Pretpostavljam da ćeš dodati stilove u ovu datoteku -->
</head>
<body>

<div class="container my-5">
    <!-- Hero sekcija -->
    <div class="text-center mb-5">
        <h1 class="display-4 mt-5">- About Us - Nürburgring -</h1>
        <hr class="my-4">
        <h2>The cost for a lap (20.8 km) on tourist days is 30 euros ( Monday to Thursday ) and 35 euros on weekends ( Friday to Sunday )</h2>
    </div>

    <!-- Video sekcija -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <video width="100%" controls poster="img/video-cover-sir-tim-berners-lee.jpg">
                <source src="video/TimBernersLee_2010U-320k.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <!-- Tekstualni sadržaj -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <p>The Nürburgring is a 150,000-person capacity motorsports complex located in the town of Nürburg, Rhineland-Palatinate, Germany. It features a Grand Prix race track built in 1984, and a long Nordschleife "North loop" track, built in the 1920s, around the village and medieval castle of Nürburg in the Eifel mountains. The north loop is 20.830 km (12.943 mi) long and contains more than 300 metres (1,000 feet) of elevation change from its lowest to highest points. Scottish racing driver Jackie Stewart nicknamed the track "The Green Hell"</p>
            <p>Originally, the track featured four configurations, namely the 28.265 km (17.563 mi)-long Gesamtstrecke ("Whole Course"), which in turn consisted of the 22.835 km (14.189 mi) Nordschleife ("North Loop") and the 7.747 km (4.814 mi) Südschleife ("South Loop"). There was also a 2.281 km (1.417 mi) warm-up loop called Zielschleife ("Finish Loop") or Betonschleife ("Concrete Loop"), around the pit area.</p>
            <p>Between 1982 and 1983, the start/finish area was demolished to create a new GP-Strecke, which is now used for all major and international racing events. However, the shortened Nordschleife is still in use for racing, testing and public access.</p>
            <p>World lap record: <a href="https://www.youtube.com/watch?v=MRgFe3kqRmY" target="_blank">Mercedes-Benz</a></p>
        </div>
    </div>
</div>

<!-- Uključivanje Bootstrap JS-a -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0lXwXf5mAqWvgykzRY7dfF5w99es5r49A4g2N4r5YZXIFN4F" crossorigin="anonymous"></script>

<?php include "footer.php"; ?>

</body>
</html>
