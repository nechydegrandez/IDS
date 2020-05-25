$('#btn-iniciar-sesion').click(function(){

    var parametros = "usuario=" + $("#txt-Usuario").val() + "&&" + "contrasenia=" +$("#txt-Password").val();
  
    $.ajax({
      url:"ajax/login.php",
      method: "POST",
      data:parametros,
      datatype:"json",
      success:function(respuesta){
        $("#btn-iniciar-sesion").attr("disabled", true);
      },
    error:function(e){
        console.log(e);
    }
    });
  

});