<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="/img/logoBigSale.png">
  <link rel="stylesheet" href="big sale/css/styles.css" />
  <script src="https://kit.fontawesome.com/26c3f4e2a1.js" crossorigin="anonymous"></script>

  <title>Big Sale</title>
</head>

<body>

  <header>
    <a href="index.php"><img class="logo" src="img/logoBigSale.png"></a>
    <h1><a href="index.php">BIG SALE</a></h1>
    <div class="profile">
      <ul class="profile-nav">
        <li><a href="#" ><i class="fa-solid fa-user"></i> Mi cuenta <i class="fa-solid fa-caret-down"></i></a>
          <ul>
            <li><a href="#">Cuenta</a></li>
            <li><a href="#">Ajustes</a></li>
            <li><a href="#">Ayuda</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul> 
    </div>
  </header>

  <main>
    
    <div class="div">
      <div class="div2">
        <ul>
          <li><a href="consola.php" class="a"><i class="fa-sharp fa-solid fa-bars"></i> Consola</a></li>
          <li><a href="mi cesta.php" class="a"><i class="fa-solid fa-cart-shopping"></i> Mi Cesta </a></li>
          <li><a href="#" class="a"><i class="fa-solid fa-user"></i> Mi cuenta</a></li>
          <li><a href="#" class="a"><i class="fa-solid fa-cart-plus"></i> Nueva Subasta</a></li>
          <li><a href="logout.php" class="a"><i class="fa-solid fa-circle-plus"></i> Nueva Categoria</a></li>
        </ul>
      </div>
    </div>
   
    <div class="container">
        
      <p class="h2">Subastas disponibles <spam class="spam"> ¡Has tu mejor oferta!</spam><hr class="hr1"> 
      </p>

      <p class="direccion-pagina">
        Big Sale /  Todas las subastas / Haz una oferta
      </p>
 
        <div class="container-subastas">
            <div class="card-subastas">
                <img src="big sale/img/imagen4.jpg">
                <h4>Carrito de Juguete</h4>
                <p>$500 - $10.500</p>
                <p>oferta actual: 10.500</p>
                <a href="producto.php">mejorar oferta</a>
            </div>

            <div class="card-subastas">
                <img src="big sale/img/imagen5.jpg">
                <h4>televisor pantalla plana</h4>
                <p>$700.000 - $1.000.000</p>
                <p>oferta actual: 1.100.000</p>
                <a href="producto.php">mejorar oferta</a>
            </div>

            <div class="card-subastas">
                <img src="big sale/img/imagen6.jpg">
                <h4>nevera</h4>
                <p>$8.000.000 - $9.000.000</p>
                <p>oferta actual: 9.000.000</p>
                <a href="producto.php">mejorar oferta</a>
            </div>

            
            <div class="card-subastas">
                <img src="big sale/img/imagen7.jpg">
                <h4>lavadora</h4>
                <p>$3.000.000 - $3.200.000</p>
                <p>oferta actual: 3.200.000</p>
                <a href="producto.php">mejorar oferta</a>
            </div>
        </div>
    </div>
</main>
</body>
</html>