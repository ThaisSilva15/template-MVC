  <?php
     function valida_nao_vazio ($valor){
        if (strlen(trim($valor)) == 0) {
return "Você deve inserir um valor.<br>";
}
     }
function valida_tipoEspe($valor){
    $input['valor'] = filter_var($valor, FILTER_VALIDATE_INT);
if ($input['valor'] == FALSE) {
    return 'Informe um valor valido.<br>';
}

}

 ?>
  
    
