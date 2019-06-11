 <?php
    require_once 'modelo/categoriaModelo.php';
    require_once 'servico/validarServico.php';
    function descricao(){
    if (ehPost()){
        $descricao= $_POST ["descricao"];
        
        $errors = array();
        if (valida_nao_vazio($descricao, "Descrição") != NULL) {
            $errors[] = valida_nao_vazio($descricao, "Descrição");
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("categoria/categoria", $dados);
        } else {
            $msg = adicionarCategoria ($descricao);
        echo $msg;  
            redirecionar("./categoria/listarCategoria");
        }
    } else {
        exibir ("Categoria/categoria"); 
    }
} 
    function listarCategoria(){
    $dados = array ();
    $dados["categoria"] = pegarTodasCategorias();
    exibir ("categoria/listar", $dados);
 }
  function ver($idcategoria){
    $dados ["categoria"] = pegarCategoriaPorId($idcategoria);
    exibir ("categoria/visualizar", $dados);
}
function deletar($id){
        $msg = deletarCategoria($id);
        redirecionar("categoria/listarCategoria");
    }
?>
