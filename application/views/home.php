<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    	<h1>Interes Simple</h1>
    </a>
  </div>
</nav>
<body>
	<hr>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
	  <form name="form1">
	<h1>Calcular el valor futuro</h1>
	<h3>Ingrese los datos dando click al boton</h3>
      <input class="btn btn-dark" type="button" value="Calcular " onclick=ValorFuturo()>
   </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
	  	<form name="form2">
			<h1>Calcular el valor presente</h1>
			<h3>Ingrese los datos dando click al boton</h3>
      		<input class="btn btn-dark" type="button" value="Calcular " onclick=ValorPresente()>
   		</form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
	  	<form name="form2">
			<h1>Calcular el numero de periodos</h1>
			<h3>Ingrese los datos dando click al boton</h3>
      		<input class="btn btn-dark" type="button" value="Calcular " onclick=Periodos()>
   		</form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
	  	<form name="form2">
			<h1>Calcular el interes</h1>
			<h3>Ingrese los datos dando click al boton</h3>
      		<input class="btn btn-dark" type="button" value="Calcular " onclick=interes()>
   		</form>
      </div>
    </div>
  </div>
</div>


	<script language="javascript">
	function ValorFuturo()
        {
     var p, f, n, i;
            p = prompt("Coloca el valor presente");
            n = prompt("Coloca el numero de periodos");
            i = prompt("Coloca el interes");

            p = parseInt(p);
            n = parseInt(n);
            f = (p*(1+n*i));

            alert("El valor futuro es: " + f);
        }
		
    </script>
  
   

   <script language="javascript">
	function ValorPresente()
        {
     var p, f, n, i;
            f = prompt("Coloca el valor futuro");
            n = prompt("Coloca el numero de periodos");
            i = prompt("Coloca el interes");

            f = parseInt(f);
            n = parseInt(n);
            p = (f/(1+n*i));

            alert("El valor presente es: " + p);
        }
    </script>
  
   





   <script language="javascript">
	function Periodos()
        {
     var p, f, n, i;
            f = prompt("Coloca el valor futuro");
            p = prompt("Coloca el valor presente");
            i = prompt("Coloca el interes");

            f = parseInt(f);
            p = parseInt(p);
            n = ((f/p-1)/i);

            alert("El numero es periodos es: " + n);
        }
    </script>
  
   


   <script language="javascript">
	function interes()
        {
     var p, f, n, i, c;
            f = prompt("Coloca el valor futuro");
            p = prompt("Coloca el valor presente");
            n = prompt("Coloca el numero de periodos");

            f = parseInt(f);
            p = parseInt(p);
            i = ((f/p-1)/n);
			c = (i*100)
            alert("El interes es: " + i+ " igual a: " +c+ " %");
        }
    </script>
  
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	
</body>
</html>