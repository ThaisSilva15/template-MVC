  <?php
     function valida_nao_vazio ($valor,$tipo){
        if (strlen(trim($valor)) == 0) {
            return "Você deve inserir um valor para $tipo.<br>";
        }else{
            return NULL;
     }
     }
    function valida_tipoEspe($valor,$tipo){
        $input['valor'] = filter_var($valor, FILTER_VALIDATE_INT);
        if ($input['valor'] == FALSE) {
        return "Informe um $tipo válido.<br>";
}else{
    return NULL;
}

}
function  validar_email ($email){
    $imput ['email']= filter_var($email, FILTER_VALIDATE_EMAIL); 
    if ($imput ['email']== FALSE){
        return 'Informe um e-mail válido.<br>';
    } else {
        return NULL;
    }
}
 ?>
  
    
