<!DOCTYPE html>
<html lang="es">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulario Login</title>

   
    <link rel="stylesheet" href="css/estilos.css">
    <link href="img/fondologin.jpg" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.min.js"></script> 
</head>

  
  <body>
    <form action="" method="" autocomplete="" class="full-box logInForm">

      
        

        <div class="d-flex justify-content-center " id="alv">
           <div class="card">
               <br>
               
               <div class="card-header">
                   <h3>Inicio Sesion</h3>
                   <div class="d-flex justify-content-end social_icon">
                       <span><i class="fab fa-facebook-square"></i></span>
                       <span><i class="fab fa-twitter-square"></i></span>
                       <span><i class="fab fa-youtube-square"></i></span>
                       
                   </div>
               </div>
               <div class="card-body">
                  
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="NumeroEmpleado" placeholder="Usuario" required>
                                    
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" id="Contrasena" class="form-control" placeholder="Contraseña" required>
                                </div>
                                <div class="row align-items-center remember">
                                    <input type="checkbox">Recuerdeme
                                </div>
                                <div class="form-group">
                                    <input type="submit" id="btn-login-admin" value="Iniciar Sesión" class="btn float-right login_btn">
                                </div>

                              
                                     <script>
                                         $("#btn-login-admin").click(function(){
                                              $.ajax({
                                                 url:"ajax/login-admin.php",
                                                 data:"NumeroEmpleado="+$("#NumeroEmpleado").val() + "&Contrasena="+$("#Contrasena").val(),
                                                 dataType:"json",
                                                 method:"POST",
                                                 success:function(respuesta){
                                                     console.log(respuesta);
                                                     if (respuesta.estatus == 1)
                                                     
                                                              window.location.href = "../matri-admin/home.php";//redireccionar */
                                                         
                                                     else 
                                                         alert("Credenciales invalidas");
                                                 },
                                                 error:function(error){
                                                     console.error(error);
                                                 }
                                             }); 
                                         });
                                     </script>
      

               </div>
               <div class="card-footer">
                   <div class="d-flex justify-content-center links">
                       No tiene cuenta?<a href="#">Registrese</a>
                   </div>
                   <div class="d-flex justify-content-center">
                       <a href="#">Olvido su contraseña?</a>
                   </div>
               </div>
           </div>
       </div>
   </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
    
    
    
    
    

  </body>

</html>