<?php



    require('fpdf/fpdf.php');

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

    $fpdf = new pdf();
    $fpdf->AddPage('portrait','letter');

    $fpdf->SetFont('Arial','B',14);
    $fpdf->SetTextColor(255,255,255);
    $fpdf->SetX(120);
    $fpdf->Cell(20,7,'FACTURA NO. 000-001-01-0000'.$idFactura);
    
    $fpdf->Ln(25);


    $fpdf->SetFont('Arial','',12);
    $fpdf->SetTextColor(0,0,0);
    $fpdf->Cell(20,7,'Cliente: ');
    $fpdf->Ln();
    $fpdf->Cell(20,7,'RTN: ');
    $fpdf->Ln();
    $fpdf->Cell(20,7,'Direccion: ');
    $fpdf->Ln();
    $fpdf->Cell(20,7,'Fecha: ');
    
    $fpdf->Ln(20); 
    
    

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

    $fpdf->Ln(60);

    $fpdf->SetFontSize(9);
    $fpdf->Setfont('Arial', 'B');
    $fpdf->SetX(137);
    $fpdf->Cell(39,7,'Importe Exonerado L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(39,7,'Importe Exento L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(39,7,'Importe Gravado 15% L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(39,7,'Importe Gravado 18% L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(39,7,'15% I.S.V L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(39,7,'18% I.S.V L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');
    $fpdf->Ln();
    $fpdf->SetX(137);
    $fpdf->Cell(39,7,'Total A Pagar L.',1,0,'C');
    $fpdf->Cell(30,7,'',1,0,'C');

    $fpdf->Ln(22);

    $fpdf->SetFontSize(12);
    $fpdf->Setfont('Arial', 'B');
    $fpdf->Cell(12,7,'Son:',1,0,'C');
    $fpdf->Setfont('Arial');
    $fpdf->Cell(140 ,7,'',1,0,'C');

    $fpdf->Ln(35);
    $fpdf->SetX(100);
    $fpdf->SetFontSize(11);
    $fpdf->Setfont('Arial', 'B');
    $fpdf->Write(10,utf8_decode('Firma y Sello'));  
    $fpdf->Line(80, 240, 145,240);

    $fpdf->output();


    

?>