<!-- affichant l'interface du mini-jeu de combat
○ Le joueur peut créer un personnage
○ Le joueur peut utiliser un personnage existant -->
<?php

include "Utils/Header.php";

?>

<body>

    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <h1>GARAGE FIGHTERS</h1>
        <div class="row">
            <div class="col-md-6">
                <img id="charac" src="./img/warrior_male.webp" alt="warrior_male" class="character_img">
                <img id="charac" src="./img/warrior_female.webp" alt="warrior_female" class="character_img">
            </div>
            <div class="col-6 col-md-6">
                <p>Warriors are melee fighters highly trained in the arts of weaponry. These mighty warriors, strong and quick on the battlefield, depend on their heavy plate armor, shields, and battle prowess to defend themselves and ensure enemies don't focus on their softer-skinned allies.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img id="charac" src="./img/mage_male.webp" alt="mage_male" class="character_img">
                <img id="charac" src="./img/mage_female.webp" alt="mage_female" class="character_img">
            </div>
            <div class="col-6 col-md-6 ">
                <p> Souvent confondu avec le Démoniste, le Mage est ce que l'on nomme "Sorcier" dans la plupart des univers d'Heroic Fantasy. Lanceur de sorts hors pair, il maîtrise la magie des Arcanes, du Givre et du Feu à la perfection et s'en sert afin d'anéantir ses adversaires grâce à des sortilèges dévastateurs.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img id="charac" src="./img/rogue_male.webp" alt="rogue_male" class="character_img">
                <img id="charac" src="./img/rogue_female.webp" alt="rogue_female" class="character_img">
            </div>
            <div class="col-6 col-md-6">
                <p> In World of Warcraft, rogues are lightly armored meleers who use stealth to get in close and then hit their target with precision strikes. The rogue is one of four classes in the game that focuses solely on DPS: their three talent specializations only changing their preferred way of dealing damage.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img id="charac" src="./img/ranger_male.webp" alt="ranger_male" class="character_img">
                <img id="charac" src="./img/ranger_female.webp" alt="ranger_female" class="character_img">
            </div>
            <div class="col-6 col-md-6">
                <p> Rangers are members of several organizations on Azeroth, Outland, and alternate Draenor, skilled in wilderness survival and exploration. The most famous of them are the various groups of elven rangers: elite archers and scouts that may also work with animals.
                </p>
            </div>
        </div>

    </div>
    <!-- selection button -->
    <div class="col-md-12 text-center">
        <button type="submit" name="submit" class=" btn validbtn btn-outline-danger tx-tfm ">Valider le choix de votre Combattant</button>
    </div>
    <!-- Carousel of characters created -->

    </div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/ranger_male.webp" class="d-block " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>NAME OF THE CREATED CHARACTER</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/rogue_female.webp" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>NAME OF THE CREATED CHARACTER</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/mage_male.webp" class="d-block " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>NAME OF THE CREATED CHARACTER</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./JS/main.js"></script></body>

</html>