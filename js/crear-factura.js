function genPDF(id){

    html2canvas(document.body,{
        
    })


var doc =  new jsPDF();

doc.text(20,20,'Mensaje de Prueba con la factura que tiene el id ' + id);
doc.save('ejemplo.pdf');

}