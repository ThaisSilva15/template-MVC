 <?php
    require_once 'modelo/categoriaModelo.php'; 
    function descricao(){
     
    if (ehPost()){
        $descricao= $_POST ["descricao"];
    if (strlen(trim($descricao))==0){
      $errors[] = ("Você deve inserir uma descrição.");
    }
    $msg = adicionarCategoria ($descricao);
        echo $msg;    
    }else{
       
    }   
     exibir ("Categoria/categoria");    
  }      
    function listarCategoria(){
    $dados = array ();
    $dados["categoria"] = pegarTodasCategorias();
    exibir ("categoria/listar", $dados);
 }
?>
