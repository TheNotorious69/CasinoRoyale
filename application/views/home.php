<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #322C5C">

<nav class="navbar navbar-expand-lg" style="background-color: #423C7A;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#" style="color: #9B9B9B;">
            Juegos 
            <span class="badge text-bg-danger" style="background-color: #F45555;">
               En Vivo
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: #9B9B9B;" >Juegos Gratis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: #9B9B9B;">Noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: #9B9B9B;">Promociones</a>
        </li>
      </ul>
      <ul class="nav justify-content-end">
         <li class="nav-item dropdown" >
            <div class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #9B9B9B;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Bandera_de_Espa%C3%B1a.svg/1200px-Bandera_de_Espa%C3%B1a.svg.png" style="height: 25px">
            </div>
         </li>
      </ul>
    </div>
  </div>
</nav>
  

<nav class="navbar navbar-expand-lg" style="background-color: #302A58;" class="nav justify-content-center">
   <ul class="nav justify-content-center" style="backgroud-color: #302A58;">
      <li class="nav-item">
         <a class="nav-item" class="nav-link" href="<?=site_url('#')?>" role="button" aria-expanded="false" style="color: #DDBF4C;">
            <img src="https://roobet.com/images/logo.svg" style="height: 100px">
         </a>
      </li>
      <li class="nav-item" style="margin-left: 250px;" >
         <div style="background-color: #403869; margin-top: 5px; " class="rounded" >
            <div class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #FFFFFF;">
               <img src="https://cdn-icons-png.flaticon.com/512/15/15997.png" style="height: 70px">
               $0.00
               <button style="background-color: #60AF5A; padding: 15px 35px; border-radius: 12px" >Depositar</button>
            </div>
         </div>
      </li>
      <li class="nav-item" style="margin-left: 250px">
      <div style="color: #9B9B9B; margin-top: 30px">
         <img src="https://icones.pro/wp-content/uploads/2021/06/icone-loupe-gris.png" style="height: 40px;">
             Buscar Juegos
         <img src="https://cdn-icons-png.flaticon.com/512/565/565422.png" style="height: 40px; background-color: #DDBF4C; margin-left: 20px; border-color: rgb(0, 0, 0); border-radius: 20px" class="img-thumbnail">
         <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png" style="height: 40px; background-color: #DDBF4C; margin-left: 20px; border-color: rgb(0, 0, 0); border-radius: 20px" class="img-thumbnail">
      </div>
         
      </li>
   </ul>
</nav>

   <div style="margin-left: 11%; margin-top: 50px; position: relative" >
   <h3 style="position: absolute; top: 100px; left: 30px; color: #FFFFFF">Maquinas</h3>
   <h3 style="position: absolute; top: 100px; left: 655px; color: #FFFFFF">Crash Games</h3>
   <h3 style="position: absolute; top: 300px; left: 30px; color: #FFFFFF">Deportes</h3>
   <h3 style="position: absolute; top: 300px; left: 655px; color: #FFFFFF">Casino en vivo</h3>
      <a href="<?=site_url('maquinitas')?>">
         <img src="https://megaricos.com/wp-content/uploads/2021/05/shutterstock_1231143874.jpg" style="border-radius: 12px; height:150px; width: 550px" class="card-img-top" alt="...">
      </a>
      <a href="<?=site_url('maquinitas')?>">
         <img src="https://casino.guide/media/roobet-crash.jpg" style="border-radius: 12px; height:150px; width: 550px; margin-left:70px" class="card-img-top" alt="...">
      </a>
   </div>
   <div style="margin-left: 11%; margin-top: 50px;" >
      <a href="<?=site_url('maquinitas')?>">
         <img src="../deporte-removebg-preview.png" style="border-radius: 12px; height:150px; width: 550px; background-color: #000000" class="card-img" alt="...">
      </a>
      <a href="<?=site_url('casino')?>">
         <img src="https://www.cronica.com.mx/uploads/2022/02/23/62170d0f964d3.png" style="border-radius: 12px; height:150px; width: 550px; margin-left:70px" class="card-img-top" alt="...">
      </a>
   </div>
   

   <div style="margin-left: 11%; margin-top: 50px; position: relative;">
      <h2 style="color: #FFFFFF">Proximos Eventos</h2>
      <div style="border-radius: 12px; " href="#" role="button" >
         <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png" style="height: 50px; position: absolute; margin: 20px; " alt="...">
         <h5 style="position: absolute; top: 55px; left: 60px; margin: 20px; color: #FFFFFF; ">VS</h5>
         <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/FC_Internazionale_Milano_2021.svg/1200px-FC_Internazionale_Milano_2021.svg.png" style="height: 50px; position: absolute; left:100px; margin: 20px;"  alt="...">
         <h5 style="position: absolute; top: 50px; left: 170px; margin: 20px; color: #FFFFFF;">Mañana</h5>
         <h5 style="position: absolute; top: 75px; left: 185px; margin: 20px; color: #FFFFFF;">14:00</h5>
         <img src="https://cdn-icons-png.flaticon.com/512/60/60977.png" style="height: 50px; position: absolute; left:255px; top: 50px; margin: 20px; filter: invert(0.4) sepia(1) hue-rotate(20deg) saturate(2500%);"  alt="...">
      </div>
      <div style="border-radius: 12px; position:absolute; top: 150px; margin 25px;" href="#" role="button">
         <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b4/Tottenham_Hotspur.svg/1200px-Tottenham_Hotspur.svg.png" style="height: 50px; position: absolute; margin: 20px; " alt="...">
         <h5 style="position: absolute; top: 10px; left: 60px; margin: 20px; color: #FFFFFF; ">VS</h5>
         <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Eintracht_Frankfurt_Logo.svg/1200px-Eintracht_Frankfurt_Logo.svg.png" style="height: 50px; position: absolute; left:100px; margin: 20px;"  alt="...">
         <h5 style="position: absolute; top: 10px; left: 170px; margin: 20px; color: #FFFFFF;">Mañana</h5>
         <h5 style="position: absolute; top: 30px; left: 185px; margin: 20px; color: #FFFFFF;">14:00</h5>
         <img src="https://cdn-icons-png.flaticon.com/512/60/60977.png" style="height: 50px; position: absolute; left:255px; top: 10px; margin: 20px; filter: invert(0.4) sepia(1) hue-rotate(20deg) saturate(2500%);"  alt="...">
      </div>
      <div style="border-radius: 12px;" href="#" role="button">
         <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/SSC_Neapel.svg/1024px-SSC_Neapel.svg.png" style="height: 50px; position: absolute; margin: 20px; left: 800px" alt="...">
         <h5 style="position: absolute; top: 55px; left: 870px; margin: 20px; color: #FFFFFF; ">VS</h5>
         <img src="https://upload.wikimedia.org/wikipedia/sco/thumb/7/79/Ajax_Amsterdam.svg/1200px-Ajax_Amsterdam.svg.png" style="height: 50px; position: absolute; left:910px; margin: 20px;"  alt="...">
         <h5 style="position: absolute; top: 50px; left: 980px; margin: 20px; color: #FFFFFF;">Mañana</h5>
         <h5 style="position: absolute; top: 75px; left: 995px; margin: 20px; color: #FFFFFF;">14:00</h5>
         <img src="https://cdn-icons-png.flaticon.com/512/60/60977.png" style="height: 50px; position: absolute; left:1065px; top: 50px; margin: 20px; filter: invert(0.4) sepia(1) hue-rotate(20deg) saturate(2500%);"  alt="...">
      </div>
      <div style="border-radius: 12px; position:absolute; top: 150px; margin 25px;" href="#" role="button">
         <img src="http://as01.epimg.net/img/comunes/fotos/fichas/equipos/large/42.png" style="height: 50px; position: absolute; margin: 20px; left: 800px" alt="...">
         <h5 style="position: absolute; top: 10px; left: 870px; margin: 20px; color: #FFFFFF; ">VS</h5>
         <img src="http://as01.epimg.net/img/comunes/fotos/fichas/equipos/large/112.png" style="height: 50px; position: absolute; left:910px; margin: 20px;"  alt="...">
         <h5 style="position: absolute; top: 10px; left: 980px; margin: 20px; color: #FFFFFF;">Mañana</h5>
         <h5 style="position: absolute; top: 30px; left: 995px; margin: 20px; color: #FFFFFF;">14:00</h5>
         <img src="https://cdn-icons-png.flaticon.com/512/60/60977.png" style="height: 50px; position: absolute; left:1065px; top: 10px; margin: 20px; filter: invert(0.4) sepia(1) hue-rotate(20deg) saturate(2500%);"  alt="...">
      </div>

   </div>

   
  <br><br><br><br><br><br><br><br><br><br>

   <footer>
      <h1></h1>
   </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</body>
</html>