<!DOCTYPE html>
<html>
<head>

  <title>Inicio</title>
  <link rel="icon" href="Imgs/Logo_proceder.JPG">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <link href="Css/Footer_style.css" rel="stylesheet" >

</head>

<body>
    
<!-- Area de navegador Contenedor -->
<!-- ...........................-->
<nav class="navbar navbar-expand-lg navbar-light " id="nav_position" style="background-color:  #262626; ">
   <a class="navbar-brand" href="#"  style=" color:white;" ><img src="Imgs/Logo_proceder.JPG" class="rounded-circle" >PROCEDER, A.C.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup"  >
    <div class="navbar-nav" >
      <a class="nav-item nav-link active btn-light " style=" text-align: center; border-radius: 25px; width:150px;  color:white; background-color:   #0E5EA8;          " href="#">Inicio <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link btn btn-light " style= " text-align: center; border-radius: 25px;width:150px;   color:#262626;" href="Pantalla_documentos.php">Documentos</a>
      <a class="nav-item nav-link btn btn-light" style="text-align: center; border-radius: 25px; width:150px;  color:#262626;"  href="Pantalla_foro.php">Foro</a>
    </div>
  </div>
</nav>


<!-- Area de ¿QUIÉNES SOMOS? Contenedor -->
<!-- ...........................-->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
      <p class="lead font-weight-normal"><img src="Imgs/Logo_proceder.JPG" class="rounded-circle">PROCEDER, A.C.</p>

        <h1 class="display-4 font-weight-normal">Panel de agregar documentos.</h1>
   
      </div>

</div>










<!-- Area  de contenido -->
<!-- ...........................-->








 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 "  style="background-color:#fff" >
     
     <div class="container-fluid"   >
         
         <div class="row">
         
           <div class="col"  style="background-color:#fff">
           <div class="container">
           <h1 style=" margin-top:20px; margin-bottom:50px;  text-align: center;">ADMINISTRADOR</h1> 

           <form>
  

      <div class="form-group"> 
        <label for="nombre">Origen:</label>
        <input  style=" width : 600px; " type="text" class="form-control" id="nombre" name="nombre">

    <label for="nombre">Nombre de documento:</label>
        <input  style=" width : 600px; " type="text" class="form-control" id="nombre" name="nombre">


      </div> 
          <div class="form-group">          
            <label for="control1">Seleccione un tema</label> 
            <select style=" width : 600px; "  cols="10" class="form-control " id="control1" name="control1"> 
                <option>Temas</option> 
                <option>2</option>
                <option>3</option> 
                <option>4</option> 
                <option>5</option> 
            </select> 
          </div>


<div class="form-group"> 
<label for="nombre">Imagen de la institucion:</label>
        <input  style=" width : 600px; " type="text" class="form-control" id="nombre" name="nombre">
        <label for="nombre">Subir archivo:</label>
        <input  style=" width : 600px; " type="text" class="form-control" id="nombre" name="nombre">
<button type="submit"   style="float: right; width : 200px;" class="btn btn-secondary btn-lg">Guardar</button> 


      </div> 
        </form>
        </div>

           </div>
           
           
         </div>  
         
       </div> 
     
     </div>
     
     
     


<!-- Area de Footer Contenedor  -->
<!-- ...........................-->
<div class="container-fluid" >
    <div class="row"  >
      <div class="col"  style="background-color:#262626; margin-top:-15px;">
        <h1 style=" margin-top:60px; float:center; text-align: center; color:#fff;"><img src="Imgs/Logo_proceder.JPG" class="rounded-circle">PROCEDER, A.C.</h1> 
       </h5>
      </div>
      
      
    </div>
  </div> 


<div class="container-fluid" >
    <div class="row">
    <div class="col-lg"  style="background-color:#262626">
    <div class="footer-copyright" style="background-color:#262626" >
            <p style=" color:#fff;">Diseñado y desarrollado por <img src="Imgs/Tejuino.png" class="rounded-circle"> </p>


        </div>
      </div>
    </div> 
    </div> 

  
</body>
</html>