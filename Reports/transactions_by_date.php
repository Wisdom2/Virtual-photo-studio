<?php
require('fpdf181/fpdf.php');
require "../backoffice/config.php";
require "../backoffice/Model/transaction.php";
require "../backoffice/controllers/transaction/transactions.php";
if(session_status() == PHP_SESSION_NONE){
    session_start();
 if(!(isset($_SESSION["user_email"]) && !empty($_SESSION["user_email"]))) {
        header("Location:../core_module_users/login.php?q=login_error" );    
    }
}


class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../images/logo.jpg',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(60,10,'DBP Photography',0,0,'C');
    $this->SetY(15);
    $this->SetX(100);
    $this->SetFont('Arial','I',8);
    $this->Cell(60,10,'Email: info@dbpphotography.org',0,0,'I');

    $this->SetY(20);
    $this->SetX(100);
    $this->Cell(60,10,'Contact: +233 303990393',0,0,'I');
   
    // Line break
    $this->Ln(20);
    $this->SetFont('Arial','B',15);

    $this->Cell(60,10,'Date: ' . date("d/m/Y") ,0,0,'L');
    // Line break
    $this->Ln(8);

    $this->Cell(60,10,'Time:' . date('h:i:s a'),0,0,'L');
    // Line break
    $this->Ln(11); 
}

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Prepared by ' . $_SESSION['user_name']  .' ... Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','I',20);
    $pdf->Cell(200,10,'Transaction Report',0,1,'C');

$pdf->SetFont('Times','',12);
    $pdf->Cell(33,10,'Transaction Type',1,0,'C');

    $pdf->Cell(33,10,'Transaction Code',1,0);
    $pdf->Cell(20,10,'Status',1,0,'C');
    $pdf->Cell(35,10,'Approved By',1,0,'C');
    $pdf->Cell(30,10,'Amount',1,0,'C');
    $pdf->Cell(40,10,'Payment Date',1,1,'C');
   
    foreach ($transaction->getTransactionByDate(htmlentities('2019-04-10'),htmlentities('2019-04-19')) as $transactions){
                           
          $pdf->Cell(33,10, $transactions["payment_type"],1,0,'C');
          $pdf->Cell(33,10, $transactions["transaction_code"],1,0,'C');
          $pdf->Cell(20,10, $transactions["status"],1,0,'C');
          $pdf->Cell(35,10, $transactions["approvedby"],1,0,'C');
          $pdf->Cell(30,10, $transactions["amount"],1,0,'C');
          $pdf->Cell(40,10, $transactions["created_at"],1,1,'C');                           
    }
    
  $pdf->Output();
?>