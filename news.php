<?php
// Uključivanje DB konekcije
include "DB_connection.php"; // Pretpostavljam da već imate fajl za povezivanje na bazu podataka

// SQL upit za dohvaćanje tri novosti (ID 1, 2 i 3)
$sql = "SELECT id, title, description, date, picture FROM news WHERE id IN (1, 2, 4)";
$result = $conn->query($sql);

// Provjera je li upit vratio rezultate
if ($result->rowCount() > 0): 
?>

<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS</title>
    <link rel="stylesheet" href="css/style1.css"> <!-- Uključivanje CSS-a ako postoji -->

    <style>
        /* Stilovi za news-container */
        .news-container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .news-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px 0;
            border-bottom: 1px solid #ccc; /* Linija između novosti */
            padding-bottom: 15px;
        }

        /* Lijeva strana: naslov i opis */
        .news-content {
            flex: 1;
            margin-right: 20px;
        }

        .news-content h1 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .news-content p {
            font-size: 1em;
            color: #555;
            line-height: 1.5;
        }

        /* Desna strana: slika */
        .news-image {
            width: 400px; /* Širina slike */
            height: auto;
            flex-shrink: 0;
        }

        .news-image img {
            max-width: 100%; /* Prilagodba slike */
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sjena slike */
        }

        /* Datum */
        .news-date {
            font-size: 0.9em;
            color: #888;
            margin-top: 10px;
        }
    </style>
</head>

<body>
<!-- Background slika -->  
<div class="hero" style="background-image: url('news/3-98.jpg');">
    <h1>NEWS</h1>
    <p style="color: black;">View unforgettable moments from the Nürburgringa.</p>
</div>

<div class="news-container">
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="news-item">
                <!-- Lijeva strana: naslov, opis i datum -->
                <div class="news-content">
                    <h1><?= htmlspecialchars($row['title'], ENT_QUOTES); ?></h1>
                    <p><?= nl2br(htmlspecialchars($row['description'], ENT_QUOTES)); ?></p>
                    <p class="news-date">Created on: <?= htmlspecialchars($row['date'], ENT_QUOTES); ?></p>
                </div>
                
                <!-- Desna strana: slika -->
                <?php if (!empty($row['picture'])): ?>
                    <div class="news-image">
                        <img src="news/<?= htmlspecialchars($row['picture'], ENT_QUOTES); ?>" alt="<?= htmlspecialchars($row['title'], ENT_QUOTES); ?>" title="<?= htmlspecialchars($row['title'], ENT_QUOTES); ?>">
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>

<?php
else:
    echo "<p>No news found!</p>";
endif;
?>

<?php include "footer.php"; ?>
