<?php

    require('fpdf/fpdf.php');
    require_once('class/CifrasEnLetras.php');

    $v = new CifrasEnLetras();


    $mysqli = new mysqli("localhost","root","","espumillas",3308,null);

    if($mysqli->connect_error){
        die('Error en la conexion' . $mysqli->connect_error);
    }



    $fpdf = new FPDF();
    $fpdf->AddPage('portrait','letter');

    class pdf extends FPDF{
        public function header(){
            $this->SetFillColor(59,131,189);
            $this->Rect(0,0,220,40,'F');
            $this->Image('img/logo.png', 3, 8, 35,25, 'png');
            $this->SetFont('Arial','B',13);
            $this->SetTextColor(255,255,255);
            $this->SetX(38);
            $this->Write(10,utf8_decode('Espumillas La Cabaña S. de R.L'));
            $this->Ln(4);
            $this->SetFont('Arial','',10);
            $this->SetX(39);
            $this->Write(10,utf8_decode('Barrio La Cabaña, Calle Finlay, Casa 1559'));
            $this->Ln(4);
            $this->SetFont('Arial','',10);
            $this->SetX(41);
            $this->Write(10,utf8_decode('Télefono:  +504 2237-9899 / 9673-0750'));
            $this->Ln(4);
            $this->SetFont('Arial','',10);
            $this->SetX(41);
            $this->Write(10,utf8_decode('Email:  espumillaslacabana@gmail.com'));

            
        }

    }
    
    $idFactura = $_GET["Factura"];

    $query = "SELECT 
    df.cantidad,
    df.productos_idProductos,
    p.nombre,
    p.precioVenta 
    FROM detalle_factura as df
    INNER JOIN productos as p
    ON df.productos_idProductos = p.idProductos
    WHERE df.facturas_idfacturas = $idFactura";

    $resultado = $mysqli->query($query);

    $query2= "SELECT 
    f.idfacturas, 
    DATE_FORMAT(f.fecha_factura,'%d-%m-%Y') as fecha_factura,
    f.empresa_idEmpresa,
    e.nombreEmpresa,
    s.nombreTienda 
    FROM facturas as f
    INNER JOIN sucursal as s
    ON f.sucursal_idsucursal = s.idSucursal
    INNER JOIN empresa as e
    ON f.empresa_idEmpresa = e.idEmpresa
    WHERE f.idfacturas = $idFactura";

    $resultado2 = $mysqli->query($query2);

    $suma = 0;

    $fpdf = new pdf();
    $fpdf->AddPage('portrait','letter');

    $fpdf->SetFont('Arial','B',14);
    $fpdf->SetTextColor(255,255,255);
    $fpdf->SetX(120);
    $fpdf->Cell(20,7,'FACTURA NO. 000-001-01-0000'.$idFactura);
    
    $fpdf->Ln(25);

    while($row2 = $resultado2->fetch_assoc()){
    $fpdf->SetFont('Arial','',12);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(20,7,'Cliente: '.$row2["nombreEmpresa"]);
    $fpdf->Ln();
    $fpdf->Cell(20,7,'RTN: '.$row2["empresa_idEmpresa"]);
    $fpdf->Ln();
    $fpdf->Cell(20,7,'Direccion: '.$row2["nombreTienda"]);
    $fpdf->Ln();
    $fpdf->Cell(20,7,'Fecha: '.$row2["fecha_factura"]);
    }
    $fpdf->Ln(15); 
    
    

    $fpdf->SetFontSize(9);
    $fpdf->Setfont('Arial', 'B');
    $fpdf->Cell(20,7,'Cantidad',1,0,'C');
    $fpdf->Cell(72,7,'Descripcion',1,0,'C');
    $fpdf->Cell(35,7,'Precio Unitario',1,0,'C');
    $fpdf->SetFont('Arial','B',6.5);
    $fpdf->Cell(40,7,'Descuentos y Rebajas Otorgadas',1,0,'C');
    $fpdf->SetFontSize(9);
    $fpdf->Setfont('Arial', 'B');
    $fpdf->Cell(30,7,'Total L.',1,0,'C');


    while($row = $resultado->fetch_assoc()){
        $total = ($row["cantidad"] * $row["precioVenta"]);
        $fpdf->Ln(7);
        $fpdf->SetFontSize(9);
        $fpdf->Setfont('Arial', 'B');
        $fpdf->Cell(20,7,'',1,0,'C');
        $fpdf->Cell(72,7,$row["productos_idProductos"],1,0,'C');
        $fpdf->Cell(35,7,'',1,0,'C');
        $fpdf->SetFont('Arial','B',6.5);
        $fpdf->Cell(40,7,'',1,0,'C');
        $fpdf->SetFontSize(9);
        $fpdf->Setfont('Arial', 'B');
        $fpdf->Cell(30,7,'',1,0,'C');
        $fpdf->Ln(7);
        $fpdf->Cell(20,7,$row["cantidad"],1,0,'C');
        $fpdf->Cell(72,7,$row["nombre"],1,0,'C');
        $fpdf->Cell(35,7,$row["precioVenta"],1,0,'C');
        $fpdf->SetFont('Arial','B',6.5);
        $fpdf->Cell(40,7,'',1,0,'C');
        $fpdf->SetFontSize(9);
        $fpdf->Setfont('Arial', 'B');
        $fpdf->Cell(30,7,number_format($total,2),1,0,'C');
        $suma+=$total;
    }


     
    $fpdf->Ln(7);

    $fpdf->SetFontSize(9);
    $fpdf->Setfont('Arial', 'B');
    $fpdf->SetX(137);
    $fpdf->Cell(40,7,'Importe Exonerado L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(40,7,'Importe Exento L.',1,0,'C');
    $fpdf->Cell(30,7,number_format($suma,2),1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(40,7,'Importe Gravado 15% L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(40,7,'Importe Gravado 18% L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(40,7,'15% I.S.V L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(40,7,'18% I.S.V L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(40,7,'Total A Pagar L.',1,0,'C');
    $fpdf->Cell(30,7,number_format($suma,2),1,0,'C');

    $fpdf->Ln(22);

    $fpdf->SetFontSize(12);
    $fpdf->Setfont('Arial', 'B');
    $fpdf->Cell(12,7,'Son:',1,0,'C');
    $fpdf->Setfont('Arial');
    $totalTexto =($v->convertirLempirasEnLetras($suma));
    $fpdf->Cell(150,7,$totalTexto,1,0,'C');

    $fpdf->Ln(60);
    $fpdf->Line(80, 240, 145,240);
    $fpdf->SetX(100);
    $fpdf->SetFontSize(11);
    $fpdf->Setfont('Arial', 'B');
    $fpdf->Write(10,utf8_decode('Firma y Sello'));  
    

    $fpdf->output('I','Factura-'.$idFactura.'.pdf');

    
      

?>