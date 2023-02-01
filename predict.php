<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $placa = $_POST['placa'];
    $ultimo_digito = substr($placa, -1);
    
    $dia_de_la_semana = date('w');
    $puede_circular = false;
    
    switch ($dia_de_la_semana) {
      case 1:
        $puede_circular = in_array($ultimo_digito, [1, 2]);
        break;
      case 2:
        $puede_circular = in_array($ultimo_digito, [3, 4]);
        break;
      case 3:
        $puede_circular = in_array($ultimo_digito, [5, 6]);
        break;
      case 4:
        $puede_circular = in_array($ultimo_digito, [7, 8]);
        break;
      case 5:
        $puede_circular = in_array($ultimo_digito, [9, 0]);
        break;
    }
    
    if ($puede_circular) {
        print '<script language="JavaScript">';
print 'alert("El auto puede circular hoy.");';
print '</script>';
      //echo "El auto puede circular hoy.";
    } else {
        print '<script language="JavaScript">';
        print 'alert("El auto no puede circular hoy.");';
        print '</script>';
      //echo "El auto no puede circular hoy.";
    }
  }
?>