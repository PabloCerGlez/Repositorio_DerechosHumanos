<?php
    session_start();
    $username="";
    $email="";
    $roles = "student";
    $errors=array();
    include ('connect.php');
    if(isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if(empty($username)){array_push($errors,"Username is required");}
        if(empty($email)){array_push($errors,"Email is required");}
        if(empty($password_1)){array_push($errors,"Password is required");}
        if(empty($password_2)){array_push($errors,"Confirm password is required");}
        if($password_1 != $password_2){array_push($errors,"The two passwords does not match");}

        $chkSQL = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn,$chkSQL);
        $user = mysqli_fetch_assoc($result);

        //SI username EXISTE
        if($user){
            if($user['username'] === $username){
                array_push($errors,"Username already exists");
            }
            if($user['email'] === $email){
                array_push($errors,"Email already exist");
            }
        }
        if(count($errors) == 0){
            
            $sqlReg="INSERT INTO users (id,email,username,password,rol) VALUES (NULL, '$email' , '$username' , '$password_1' , '$roles')";
            mysqli_query($conn,$sqlReg);
            echo '
            <br>
            <div class="alert alert-success" rol="alert">
            Registro con exito. <a href="index.php">Inicia sesion.</a>
            </div>
            ';
        }
    }
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
      
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        if (count($errors) == 0) {
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                $getRol="SELECT rol FROM users WHERE username='$username'";
                $resRol=mysqli_query($conn,$getRol);
                if(mysqli_num_rows($resRol)>0){
                    while($row = mysqli_fetch_assoc($resRol)){
                        if($row['rol']==admin){
                            $_SESSION['rol']=Admin;
                        }else if($row['rol']==student){
                            $_SESSION['rol']=Student;
                        }else $_SESSION['rol']=NotSet;
                    }
                }
                header('location: index.php');
            }else {
                array_push($errors, "Wrong username or password");
            }
        }
      }
?>