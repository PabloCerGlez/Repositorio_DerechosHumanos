<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo php</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="Css/Adm_style.css" rel="stylesheet" >

</head>
<body>
	
<div class="container" style="margin-top:200px;">
    <div class="row" >
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <h5 class="card-title text-center">Panel de control</h5>


            <h4 class="card-title text-center">Login</h4>
            <hr>

            <form class="form-signin">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                <label for="inputEmail">Usuario:</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña:" required>
                <label for="inputPassword">Contraseña:</label>
              </div>

              <button class="btn btn-lg btn-dark btn-block text-uppercase" type="submit">Entrar</button>
                    </form>
          </div>
        </div>
      </div>
    </div>
  </div>
     

</body>
</html>