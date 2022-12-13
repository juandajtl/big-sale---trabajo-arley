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
          <li><a href="#" class="a"><i class="fa-sharp fa-solid fa-bars"></i> Consola</a></li>
          <li><a href="mi cesta.php" class="a"><i class="fa-solid fa-cart-shopping"></i> Mi Cesta </a></li>
          <li><a href="#" class="a"><i class="fa-solid fa-user"></i> Mi cuenta</a></li>
          <li><a href="#" class="a"><i class="fa-solid fa-cart-plus"></i> Nueva Subasta</a></li>
          <li><a href="#" class="a"><i class="fa-solid fa-circle-plus"></i> Nueva Categoria</a></li>
        </ul>
      </div>
    </div>

	<div class="container">

		<p class="h2">Consola <spam class="spam"> ¡superviza tus subastas!</spam><hr class="hr1"> 
		</p>
  
		<p class="direccion-pagina">
		  Big Sale /  Todas las subastas / Haz una oferta
		</p>

	  <p>
		<div class="container-consola">
			<div class="tarjet">
				<p class="parrafo">subastas disponibles</p>
				<a href="subastas disponibles.php" class="detalles">ver detalles</a>
			</div>
			<div class="tarjet">
				<p class="parrafo">Mi cesta</p>
				<a href="mi cesta.php" class="detalles">ver detalles</a>
			</div>
			<div class="tarjet">
				<p class="parrafo">Subastas activas</p>
				<a href="subastas activas.php" class="detalles">ver detalles</a>
			</div>
			<div class="tarjet">
				<p class="parrafo">Subastas cerradas</p>
				<a href="subastas cerradas.php" class="detalles">ver detalles</a>
			</div>
		</div>
	  </p>
	</div>
  </main>
</body>
</html>