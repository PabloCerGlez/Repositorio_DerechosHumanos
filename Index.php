<?php include('connect.php');?>
<!DOCTYPE html>
<html>
<head>

  <title>Proceder A.C</title>
  <link href="Css/Footer_style.css" rel="stylesheet" >
  <link rel="icon" href="Imgs/Logo_proceder.JPG">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  

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
      <a class="nav-item nav-link active btn-light" style=" text-align: center; border-radius: 25px;  width:250px ;  color:white; background-color:   #0E5EA8;          " href="#">INICIO <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link btn btn-light " style= " text-align: center; border-radius: 25px;  width:250px;   color:#262626;" href="Pantalla_documentos.php">DOCUMENTOS</a>
      <a class="nav-item nav-link btn btn-light" style="text-align: center; border-radius: 25px; width:250px;  color:#262626;"  href="Pantalla_foro.php">FORO</a>
      <a class="nav-item nav-link btn btn-light" style="text-align: center; border-radius: 25px; width:250px;  color:#262626;"  href="logout.php">Cerrar sesion</a>
    </div>
  </div>
</nav>

<!-- Area de ¿QUIÉNES SOMOS? Contenedor -->
<!-- ...........................

 <p class="lead font-weight-normal"><img src="Imgs/Logo_proceder.JPG" class="rounded-circle">PROCEDER, A.C.</p>
Multicultura
      

-->
<div class="container-fluid"   > 
    <div class="row" style=" height: 600px; text-align: center;  " >
    
      <div class="col"  style="background-color:#ffff;  "  >

      <h1 class="display-4 font-weight-normal" style=" margin-top:200px;  color:#0E5EA8;" >¿QUIÉNES SOMOS?</h1>
        <p class="lead font-weight-normal" style="  color:#262626;  "  >Promotores de Derechos Humanos Asociación Civil. Es una organización que difunde los derechos humanos en el estado de Colima, especialmente a bachilleres.</p>
        <a class="btn  btn-lg" style=" border-radius:30px; background-color:#FBD011; color:#fff; " href="pantalla_documentos.php">Ver documentos</a>

      </div>
     
    </div>  
    </div>  



  <div class="container-fluid" >
    <div class="row" style=" height: 600px;    text-align: center;  ">
      <div class="col"  style="background-color:#FBD011;     " >
        <h1 style=" margin-top:200px;  color:#0E5EA8;">Misión</h1> 
        <p  style="  color:#fff;  " >Trabajamos en la enseñanza e investigación,
 promoción, respeto y disfrute de los derechos 
humanos para propiciar una sociedad más justa 
e incluyente.</p>

<p  style="  color:#262626;  " >Síguenos en <a class="btn  btn-lg" style=" margin-left:10px;  width:150px; ;background-color:#0E5EA8; color:#fff; " href="#">f</a> </p>

        



      </div>
      <div class="col"  style="background-color:#F7F2F2">
        
      </div>
    
    </div>
  </div> 



<!-- Area de CONTECTO Contenedor  -->
<!-- ...........................-->
      





<div class="container-fluid"  style=" background-color:#262626; margin-top:-24px; margin-bottom:-16px;">   
    <div class="row mt-4" style=" background-color:#262626; ">
      
      

      <div class="col-md" style="  width:350px;  margin-top:24px; margin-left:75px">        
          <div class="card text-center"  style="background-color:#262626;    border:none; ">
            <div class="card-header">
            <img src="Imgs/persona.jpg"  style="  width:100%;      height: 200px;">    



            </div>
            <div class="card-body">
              <h4 class="card-title" style="color:white; ">Nombre y  apellido</h4>
              <p class="card-text" style="color:white; ">Puesto </p>
              <p style="color:white; ">Breve descripcion de lo que hace</p>
            </div>
          </div>          
      </div>

 

      <div class="col-md"  style="  width:350px; margin-top:24px; margin-left:75px">        
          <div class="card text-center" style="background-color:#262626;    border:none; " >
            <div class="card-header">
            <img src="Imgs/persona.jpg"  style="  width:100%;      height: 200px;">    

            </div>
            <div class="card-body">
              <h4 class="card-title" style="color:white; ">Nombre y  apellido</h4>
              <p class="card-text" style="color:white; ">Puesto </p>
              <p style="color:white; ">Breve descripcion de lo que hace</p>
            </div>
          </div>          
      </div>



 

      <div class="col-md"  style="  width:350px; margin-top:24px; margin-left:75px" >        
          <div class="card text-center" style="background-color:#262626;    border:none; " >
            <div class="card-header">
            <img src="Imgs/persona.jpg"  style="  width:100%;      height: 200px;">    

            </div>
            <div class="card-body">
              <h4 class="card-title" style="color:white; ">Nombre y  apellido</h4>
              <p class="card-text" style="color:white; ">Puesto </p>
              <p style="color:white; ">Breve descripcion de lo que hace</p>
            </div>
          </div>          
      </div>


    <div class="col-md"  style="  width:350px; margin-top:24px; margin-left:75px">        
          <div class="card text-center" style="background-color:#262626;    border:none; " >
            <div class="card-header">
            <img src="Imgs/persona.jpg"  style="  width:100%;      height: 200px;">    

            </div>
            <div class="card-body">
              <h4 class="card-title" style="color:white; ">Nombre y  apellido</h4>
              <p class="card-text" style="color:white; ">Puesto </p>
              <p style="color:white; ">Breve descripcion de lo que hace</p>
            </div>
          </div>          
      </div>

    </div>
  </div>





<!-- Area de CONTECTO Contenedor  -->
<!-- ...........................-->
      







<div class="container-fluid"  style=" background-color:#262626; margin-top:-24px; margin-bottom:-16px;">   
    <div class="row mt-4" style=" background-color:#262626; ">
      
      

      <div class="col-md" style="  width:350px;  margin-top:24px; margin-left:75px; ">        
          <div class="card text-center"  style="background-color:#262626;    border:none; ">
            <div class="card-header" style="   border:none; ">
            <img src="Imgs/persona.jpg"  style="  width:100%;      height: 200px;">    

            </div>
            <div class="card-body">
              <h4 class="card-title" style="color:white; ">Nombre y  apellido</h4>
              <p class="card-text" style="color:white; ">Puesto </p>
              <p style="color:white; ">Breve descripcion de lo que hace</p>
            </div>
          </div>          
      </div>

 

      <div class="col-md"  style="  width:350px; margin-top:24px; margin-left:75px">        
          <div class="card text-center" style="background-color:#262626;    border:none; " >
            <div class="card-header">
            <img src="Imgs/persona.jpg"  style="  width:100%;      height: 200px;">    

            </div>
            <div class="card-body">
              <h4 class="card-title" style="color:white; ">Nombre y  apellido</h4>
              <p class="card-text" style="color:white; ">Puesto </p>
              <p style="color:white; ">Breve descripcion de lo que hace</p>
            </div>
          </div>          
      </div>



 

      <div class="col-md"  style="  width:350px; margin-top:24px; margin-left:75px" >        
          <div class="card text-center"  style="background-color:#262626;    border:none; ">
            <div class="card-header">
            <img src="Imgs/persona.jpg"  style="  width:100%;      height: 200px;">    

            </div>
            <div class="card-body">
              <h4 class="card-title" style="color:white; ">Nombre y  apellido</h4>
              <p class="card-text" style="color:white; ">Puesto </p>
              <p style="color:white; ">Breve descripcion de lo que hace</p>
            </div>
          </div>          
      </div>


    <div class="col-md"  style="  width:350px; margin-top:24px; margin-left:75px">        
          <div class="card text-center" style="background-color:#262626;    border:none; " >
            <div class="card-header">
            <img src="Imgs/persona.jpg"  style="  width:100%;      height: 200px;">    

            </div>
            <div class="card-body">
              <h4 class="card-title " style="color:white; ">Nombre y  apellido</h4>
              <p class="card-text" style="color:white; ">Puesto </p>
              <p style="color:white; ">Breve descripcion de lo que hace</p>
            </div>
          </div>          
      </div>

    </div>
  </div>




























<!-- Area de Contacto Contenedor-->
<!-- ...........................-->


<div class="container-fluid" style="    height:490px;">
    <div class="row">
      <div class="col"  style="background-color:#3F3F3F; ">



      
        <h1 style="color:#FBD011;">CONTACTO</h1> 


<form>
  <div class="form-group" style="margin-top:50px;      "> 
    <label for="nombre" style="color:#fff;  "> Para mas informacion envianos un mensaje</label>
    <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre:">
  </div> 
  <div class="form-group"> 

<label for="comentarios">Mensaje</label>
        <textarea class="form-control" rows="5" id="comentarios" rows="7" name="comentarios"  placeholder="Comentario: "></textarea>
        
      </div> 
      <button type="submit" class="btn btn-dark btn-lg"  style=" background-color:#FBD011; color:white; " >Enviar</button>  






</form>




      </div>
      <div class="col"  style="background-color:#3F3F3F;">
        <h1 class="card-title" style="margin-top:20px;   text-align: rigth; color:#FBD011; ">Direccion:</h1>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.7020621703726!2d-103.71993617079106!3d19.247186899186882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84255aafba26d7b9%3A0x1470d2b491f1e2e3!2sPromotores+de+Derechos+Humanos%2C+PROCEDER%2C+A.C.!5e0!3m2!1ses!2smx!4v1544508924498" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p class="card-text " style="margin-top:10px;  margin-left:20px; color:#fff;">Manuel Gallardo Zamora #225 Colima 28000 </p>
      </div>
      
    </div>
  </div> 


<!-- Area de Footer Contenedor  -->
<!-- ...........................-->
<div class="container-fluid" >
    <div class="row"  >
      <div class="col"  style="background-color:#262626; margin-top:-25px;">
        <h1 style=" margin-top:60px; float:center; text-align: center; color:#fff;"><img src="Imgs/Logo_proceder.JPG" class="rounded-circle">PROCEDER, A.C.</h1> 
       </h5>
      </div>
      
      
    </div>
  </div> 


<div class="container-fluid" >
    <div class="row">
    <div class="col-lg"  style="background-color:#262626">
    <div class="footer-copyright" style="background-color:#262626" >
            <p style=" color:#fff;">Diseñado y desarrollado por <a href="https://tejuinoexe.com"><img src="Imgs/Tejuino.png" class="rounded-circle"></a> </p>


        </div>
      </div>
    </div> 
    </div> 

  
</body>
</html>