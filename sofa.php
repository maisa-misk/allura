<?php
require('admin/includes/connection.php');
include_once('includes/header.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Sofa|| Allura Bling's</title>
<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<style type="text/css">


html {
  box-sizing: border-box;
  font-size: 15px; 
}

body {
  font-family: "Nunito", sans-serif;
  color: #333;
  font-weight: 300;
  line-height: 1.6; 
}
h1,h2{
  font-size: 15px;
}

.container {
  width: 60%;
  margin: 2rem auto; 
}

.gallery {
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  grid-template-rows: repeat(8, 5vw);
  grid-gap: 1.5rem; 
}

.gallery__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block; 
}

.gallery__item--1 {
  grid-column-start: 1;
  grid-column-end: 3;
  grid-row-start: 1;
  grid-row-end: 3;

  /** Alternative Syntax **/
  /* grid-column: 1 / span 2;  */
  /* grid-row: 1 / span 2; */
}

.gallery__item--2 {
  grid-column-start: 3;
  grid-column-end: 5;
  grid-row-start: 1;
  grid-row-end: 3;

  /** Alternative Syntax **/
  /* grid-column: 3 / span 2;  */
  /* grid-row: 1 / span 2; */
}

.gallery__item--3 {
  grid-column-start: 5;
  grid-column-end: 9;
  grid-row-start: 1;
  grid-row-end: 6;

  /** Alternative Syntax **/
  /* grid-column: 5 / span 4;
  grid-row: 1 / span 5; */
}

.gallery__item--4 {
  grid-column-start: 1;
  grid-column-end: 5;
  grid-row-start: 3;
  grid-row-end: 6;

  /** Alternative Syntax **/
  /* grid-column: 1 / span 4;  */
  /* grid-row: 3 / span 3; */
}

.gallery__item--5 {
  grid-column-start: 1;
  grid-column-end: 5;
  grid-row-start: 6;
  grid-row-end: 9;

  /** Alternative Syntax **/
  /* grid-column: 1 / span 4; */
  /* grid-row: 6 / span 3; */
}

.gallery__item--6 {
  grid-column-start: 5;
  grid-column-end: 9;
  grid-row-start: 7.2;}
 

</style>
</head>

<body>

  
 <br><br><br> 
        

  <div class="container">
            <div class="gallery">
                <figure class="gallery__item gallery__item--1">
                    <img src="vedbo-armchair-gunnared-light-brown-pink__0634903_PE696815_S5.webp" alt="Gallery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--2">
                    <img src="vedbo-armchair-gunnared-light-brown-pink__0837412_PE696814_S5.webp" alt="Gallery image 2" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--3">
                    <img src="vedbo-armchair-gunnared-light-brown-pink__0837414_PE696818_S5.webp" alt="Gallery image 3" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4">
                    <img src="vedbo-armchair-gunnared-light-brown-pink__0837396_PE649535_S5.webp" alt="Gallery image 4" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5">
                    <img src="vedbo-armchair-gunnared-light-brown-pink__0837392_PE649533_S5.webp" alt="Gallery image 5" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6">
                    <img src="vedbo-armchair-gunnared-light-brown-pink__0837394_PE649534_S5.webp" alt="Gallery image 6" class="gallery__img"><h1>Soft, rounded armrests and back cushion provide you with your own comfortable nook which feels snug thanks to the solid and curved back panel.– while the slim and stylish legs enhance its elegant look.

</h1><h2 > price:JD 196</h2><a href="" class="btn"> Add To cart</a>

                </figure>
            </div>
        </div>
</div>
<br><br><br>
<br><br><br><br><br><br>
<?php include_once('includes/footer.php') ?>
</body>
</html>