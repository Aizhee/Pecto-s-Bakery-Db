<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&family=Great+Vibes&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="gallery.js"></script>
        <link rel="stylesheet" href="gallery.css">
        <title>Pecto's Bakery - Gallery></title>
    </head>

    <body>
        <div id="gallery">
            <ul class="tabs">
                <li class="buttons active" data-filter="all">All</li>
                <li class="buttons" data-filter="BiscuitsAndCrackers">Biscuits And Crackers</li>
                <li class="buttons" data-filter="Bread">Bread</li>
                <li class="buttons" data-filter="Desserts">Desserts</li>
            </ul>

            <div class="image-container">

                <a href="#" class="image BiscuitsAndCrackers">
                    <img src="img/Uraro.png" data-img="Uraro.png">
                </a>
                <a href="#" class="image BiscuitsAndCrackers">
                    <img src="img/Pasencia.jpeg" data-img="Pasencia.jpeg">
                </a>
                <a href="#" class="image BiscuitsAndCrackers">
                    <img src="img/Alfajor.jpeg" data-img="Alfajor.jpeg">
                </a>
                <a href="#" class="image BiscuitsAndCrackers">
                    <img src="img/Barquillos.jpeg" data-img="Barquillos.jpeg">
                </a>
                <a href="#" class="image BiscuitsAndCrackers">
                    <img src="img/Rosquillos.jpeg" data-img="Rosquillos.jpeg">
                </a>

                <a href="#" class="image Bread">
                    <img src="img/SpanishBread.jpeg" data-img="SpanishBread.jpeg">
                </a>
                <a href="#" class="image Bread">
                    <img src="img/Pandecoco.jpeg" data-img="Pandecoco.jpeg">
                </a>
                <a href="#" class="image Bread">
                    <img src="img/TastyBread.jpeg" data-img="TastyBread.jpeg">
                </a>

                <a href="#" class="image Desserts">
                    <img src="img/Crinkles.jpeg" data-img="Crinkles.jpeg">
                </a>
            </div>

        <div id="fullImageContainer">
            <img id="fullImage" src="" alt="Full Image">
        </div>
    </body>
</html>