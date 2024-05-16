<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>HTML5 и CSS3 сайт</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="footer.css">
</head>
<body>
  <?php include 'header.php'; ?>
        <div class="background_main">
          <div class="for-text">
            <p class = "dream_car">Закажите машину мечты!</p>
          </div>
        </div>
        <div class="text-image">
          <div class="text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et itaque <br>asperiores nihil beatae optio animi inventore commodi aliquam adipisci eum similique,<br> distinctio modi consectetur ex at totam<br> voluptatum! Ex, at.</p>
          </div>
          <div class="image">
            <img src="images/apex1.jpg" alt="">
          </div>
        </div>
        <div class="text-block">
        </div>
        <div class="slider">
          <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/car.jpg" class="d-block h-200 w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/car.jpg" class="d-block h-200 w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/car.jpg" class="d-block h-200 w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
    <footer class="footer">
    <div class="main">
        <div class="icons">
            <img class = "icons" src="images/vk.png" alt="">
            <img class = "icons"  src="images/youtube.png" alt="">
            <img class = "icons"  src="images/google.png" alt="">
            <img class = "icons"  src="images/inst.png" alt="">
        </div>
        <ul class = "ul_footer">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Компания</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
        <p>&copy;Эх,прокачу! | Все права защищены</p>
    </div>
  </footer>
</body>
</html>