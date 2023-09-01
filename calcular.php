<?php
$operador=$_POST["operacion"];
$numero1=$_POST["num1"];
$numero2=$_POST["num2"];
//ruta de ws
$webservice="http://dneonline.com/calculator.asmx?wsdl";
$parametros=array();
$parametros['intA']=$numero1;
$parametros['intB']=$numero2;
//invocar ws
$WS=new SoapClient($webservice,$parametros);
switch ($operador) {
    case 1:
        $result=$WS->Add($parametros);
        $resultado=$result->AddResult;
        break;
    case 2:
        $result=$WS->Subtract($parametros);
        $resultado=$result->SubtractResult;
        break;
    case 3:
        $result=$WS->Multiply($parametros);
        $resultado=$result->MultiplyResult;
        break;
    case 4:
        $result=$WS->Divide($parametros);
        $resultado=$result->DivideResult;
        break;
    default:
        # code...
        break;
}

echo '<h1>'.$resultado.'</h1>';
?>