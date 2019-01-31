<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proceder A.C | FORO</title>
    <link rel="icon" href="Imgs/Logo_proceder.JPG">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <link href="Css/Footer_style.css" rel="stylesheet" >
    
  </head>
  <body style="background-color:  #262626; ">
    

    <!-- Area de navegador Contenedor -->
    <!-- ...........................-->
    <nav class="navbar navbar-expand-lg navbar-light " id="nav_position" style="background-color:  #262626; ">
      <a class="navbar-brand" href="#"  style=" color:white;" ><img src="Imgs/Logo_proceder.JPG" class="rounded-circle" >PROCEDER, A.C.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup"  >
        <div class="navbar-nav" >
          <a class="nav-item nav-link btn btn-light " style= " text-align: center; border-radius: 25px;width:250px;   color:#262626;" href="index.php">INICIO</a>
          <a class="nav-item nav-link btn btn-light" style="text-align: center; border-radius: 25px; width:250px;  color:#262626;"  href="Pantalla_documentos.php">DOCUMENTOS</a>
          <a class="nav-item nav-link active btn-light " style=" text-align: center; border-radius: 25px; width:250px;  color:white; background-color:   #0E5EA8;          " href="#">FORO <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </nav>

    <!-- Area de portada Contenedor -->
    <!-- ...........................-->
    <div class="container-fluid"> 
      <div class="row" style=" height: 600px; text-align: center;  " >
        <div class="col"  style="background-color:#aaa;  "  >
          <h1 class="display-4 font-weight-normal" style=" margin-top:200px;  color:#FFF;" >Foro</h1>
        </div>   
      </div>
    </div>  


    <!-- Area  de contenido -->
    <!-- ...........................-->

    <form id="form_comentario" action="Foro.php" method="POST"></form>


    <div class="position-relative overflow-hidden mt-5 p-md-5 m-md-3" style="background-color:#262626; color:#FFF;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 mb-4">
            <h1 class="text-center" style="color:#FBD011;">PUBLICAR</h1>
          </div>
        </div>
        <div class="row align-items-center mr-sm-3">
          <div class="col-sm-9">
            <div class="form-group">
              <label for="username">Ingrese su nombre:</label>
              <input form="form_comentario" type="text" name="usuario" class="form-control">
            </div>
            <div class="form-group">
              <label for="theme">Seleccione un tema:</label>
              <select form="form_comentario" name="tema" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
            <div class="form-group">
              <label for="commentary">Deje aquí sus comentarios:</label>
              <textarea form="form_comentario" name="comentario"  class="form-control" rows="12"></textarea>
            </div>
          </div>
          <div class="col-sm-3">
            <button form="form_comentario" type="submit" name="option" value="comentario" class="btn btn-lg mx-sm-4" style="width: 100%; background: #FBD011; color: #fff;">Publicar</button>
          </div>
        </div>
      </div>
    </div>





    <!-- Area Foro -->
    <!--.........................-->

    <div class="position-relative overflow-hidden mt-5 p-md-5 m-md-3" style="background-color:#262626; color:#FFF;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 mb-5">
            <h1 class="text-center" style="color:#FBD011;">FORO</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="dropdown">
              <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TEMAS</button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">1</a>
                <a class="dropdown-item" href="#">2</a>
                <a class="dropdown-item" href="#">3</a>
                <a class="dropdown-item" href="#">4</a>
                <a class="dropdown-item" href="#">5</a>
                <a class="dropdown-item" href="#">6</a>
              </div>
            </div>
          </div>
        </div>
        <div id="comentarios_end"></div>
      </div>
    </div>
     
     

      <!-- ...........................-->



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
    <script type="text/javascript" src="getComentarios.js"></script>
  </body>
</html>
