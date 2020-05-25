<!DOCTYPE html>
<html lang="es">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulario Login</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
   
    <link rel="stylesheet" href="css/estilos.css">
    <link href="img/fondologin.jpg" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome.min.css">
</head>

  
  <body>
    <form action="inicio-sesion.php" method="POST" autocomplete="" class="full-box logInForm">

      
        

        <div class="d-flex justify-content-center " id="alv">
           <div class="card mt-3">
               <br>
               
               <div class="card-header">
                   <h3>Inicio Sesión</h3>
               </div>
               <div class="card-body">
                  
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><img src="img/usuario.png" class="img-fluid" style="width: auto;height:auto;"></span>
                    </div>
                    <input type="text" class="form-control" id="txt-Usuario" name="user" placeholder="Usuario" required>

                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend mt-3">
                        <span class="input-group-text"><img src="img/password.png" class="img-fluid" style="width: auto;height:auto;"></span>
                    </div>
                    <input type="password" id="txt-Password" name="pass" class="form-control mt-3" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                <button class="btn btn-primary" type="submit"  id="btn-iniciar-sesion" onclick="iniciarSesion();">Iniciar Sesión</button>
                </div>  

                   
      

               </div>
           </div>
       </div>
       </form>
   </div>
  
   <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
 

    
    
    
    

  </body>

</html>