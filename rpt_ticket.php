<?php

include("fpdf/fpdf.php");
//include("conexion.php");

class PDF extends FPDF
{
var $widths;
var $aligns;

/*function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		//Draw the border
		
		$this->Rect($x,$y,$w,$h);

		$this->MultiCell($w,5,$data[$i],0,$a,'true');
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
		$sep=-1;
		$i=0;
		$j=0;
		$l=0;
		$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
			$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}
*/
function Header()
{

	$this->SetFont('Arial','',10);
	$this->Text(10,10,'Agencia de Loteria Liang',0,'C', 0);
	
}

function Footer()
{
	/*$this->SetY(-3);
	$this->SetFont('Arial','B',8);
	$this->Cell(20,10,'Numeros',0,0,'L');*/
	$this->SetY(-10);
	$this->Cell(10,10,'Caduca a los 3 dias',0,0);
}

}

	include("conexion.php");
	
	$sorteo_jug = $_POST['sorteo_jug'];
  
  	$monto_jug  = $_POST['monto_jug'];
	
	$total= $_POST['total'];
  	
  	$animalito_jug  = $_POST['animalito_jug'];
  
 	$animalitoletra  = $_POST['animalitoletra'];
 	
	$nuevoserial  = $_POST['nuevoserial'];
	
	$varimprimir  = $_POST['varimprimir'];
	
	//$varimprimir=$varimprimir+1;

	
	$pdf=new PDF('P','mm',array(105,85));

	$pdf->Open();
	
	$pdf->AddPage();

	$pdf->SetFont('Arial','',10);
	
	$pdf->Cell(3,8,'Ticket: '.$nuevoserial,0,1);
	$pdf->Cell(3,5,'Fecha:' .date("d-m-Y H:m:s"),0,1);
	//$pdf->Cell(5,10,'varimprimir: '.$varimprimir,0,1);
	$query = "select Serial,Fecha,Sorteo,Animalito,Nom_animalito,Monto,Total from jugadas where Serial=".$nuevoserial.""; 
                //"from jugadas WHERE Serial = '".$nuevoserial."'"; 
    
    $pdf->Cell(10,7,'LOTTO ACTIVO: ',0,1);   
	$pdf->Cell(10,2,'_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ',0,1); 
	$result = mysqli_query($con,$query);
	
	$saldo=0;    
   //Asignacion del nro patente 
   //$id_instancia_saldo = $nro_patente;
		
	while($row = mysqli_fetch_array($result)) {
		
	
			$pdf->SetFont('Arial','',10);
			$pdf->Cell(30,6,' '.$row['Nom_animalito'].' '.$row['Animalito'].' '.$row['Monto'].'',0,1);
			//$pdf->Cell(10,8,' '.$row['Nom_animalito'].' '.$row['Animalito'].' '.$row['Monto'].,0,0);
			//$pdf->Ln(5);
			//$saldo=$saldo+$row['Monto'];
		}
	
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,3,'_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _',0,1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(10,10,'Total:'.$total,0,0);
	
	//Modificar campo imprimir indicando su ejecucion
	$UPDATE_for = "UPDATE jugadas SET Flag_imprimir=true,Imprimir=".$varimprimir." WHERE Serial='".$nuevoserial."'";
	
	//$pdf->SetFont('Arial','',6);
	//$pdf->Cell(5,10,''.$UPDATE_for,0,1);
		//echo $UPDATE_for;
		if (mysqli_query($con, $UPDATE_for)) {

			echo "<font color=#0000FF face=Arial Narrow>Guardado ticket: ".$nuevoserial."</font>";
			
		}else{
			
			echo "<font color=#FF0000 face=Arial Narrow>Animalito NO guardado</font>";
			
		} 
//$saldo=$cargo-$abono;

//$pdf->Multicell(10,30," Total:".$saldo."",1,'R');


$pdf->Output("rpt_ticket.pdf",'F');

echo "<script language='javascript'>window.open('rpt_ticket.pdf','_self','');</script>";


//$pdf->Output();

?>
