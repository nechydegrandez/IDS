<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Factura</title>
    <link rel="stylesheet" href="css/plantilla-factura.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div>
 <head>
    <div class="row mt-3">
        <div class="offset-1 col-4 mt-2">
            <div class="row no-gutters">
                <div class="col-2 mt-4"><img src="img/home.png" class="img-fluid"></div>
                <div class="col-10 text-center mt-3">
                    <span><b>ESPUMILLA LA CABAÑA S. de R.L.</b></span>
                    <p>Barrio La Cabaña, Calle Finlay, Casa 1559 <br>
                       Teléfono: + 504 2237-9899 / 9673-0750 <br>
                       Email: espumillaslacabana@gmail.com
                    </p>
                </div>
            </div>
            
        </div>
        <div class="offset-2 col-4 text-center border border-dark mt-2 rounded">
            <p class="mb-0">CAI: <br>
                RTN:
            </p>
            <h3 class="mb-0">Factura</h3>
            <h5 class="mb-0">No. 000-001-01-XXXXXXXX</h5>
        </div>
    </div>
 </head>

 <div class="row mt-4">
     <div class="offset-1 col-10">
         <p>
            No. Orden de Compra Exenta _____________________________ No Reg de la SAG _____________________________ <br><br>
            No. Constancia de Reg. Exonerado _____________________________________________________________________ <br> <br>
            Fecha: ________ de __________________ de 20_____ <br><br>
            Cliente: ______________________________________________ RTN _________________________________________ <br> <br>
            Dirección: _______________________________________________________________________________________
         </p>
     </div>
 </div>

 <div class="row mt-2">
     <div class="col-10 offset-1">
         <table class="table table-bordered">
            <thead>
                <tr class="">
                    <th style="width: 10%;" class="text-center">Cantidad</th>
                    <th style="width: 35%;" class="text-center">Descripción</th>
                    <th style="width: 13%;" class="text-center">Precio Unitario</th>
                    <th style="width: 25%;" class="text-center">Descuentos y Rebajas Otorgadas</th>
                    <th class="text-center">Total .L</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <th class="text-center"> </th>
                    <th>700000000016</th>
                    <th class="text-center"></th>
                    <th></th>
                    <th class="text-center"></th>
                </tr>
                <tr>
                    <th class="text-center">36</th>
                    <th>Bandeja de Espumillas 12 und</th>
                    <th class="text-center">15.33</th>
                    <th></th>
                    <th class="text-center">551.88</th>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td class="text-center">IMPORTE EXONERADO L.</td>
                    <TD></TD>
                </tr>
            </tbody>
         </table>
     </div>
 </div>
 </div>

 

    </body>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    
</html>