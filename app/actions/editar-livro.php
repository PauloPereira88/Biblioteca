<?php
require '../controller/livro.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $id_livro = $_GET['id_livro'] ?? null;
    
    if ($id_livro) {
        $livro = new Livro();
        $dados = $livro->buscar_por_id($id_livro);

        if (!empty($dados)) {
            echo (["status" => 200, "data" => $dados]);
        } else {
            echo (["status" => 404, "msg" => "Livro Não Encontrado!"]);
        }
        exit;
    }

    echo (["status" => 400, "msg" => "Parametros Invalidos!"]);
    exit;
}

if(isset($_POST) && isset($_POST['isbn'])) {
    $id_livro = $_POST['id_livro'];
    $titulo = $_POST['titulo'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $editora = $_POST['editora'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $paginas = $_POST['paginas'] ?? '';
    $versao = $_POST['versao'] ?? '';
    $disponibilidade = $_POST['disponibilidade'] ?? '';

    $objLivro = new Livro();
    $objLivro->id_livro = $id_livro;
    $objLivro->titulo = $titulo;
    $objLivro->isbn = $isbn;
    $objLivro->autor = $autor;
    $objLivro->editora = $editora;
    $objLivro->categoria = $categoria;
    $objLivro->paginas = $paginas;
    $objLivro->versao = $versao;
    $objLivro->disponibilidade = $disponibilidade;

    try {
        $res = $objLivro->editar();

        if($res) {
            $array = [
                "status" => 200,
                "msg" => 'Livro Atualizado com Sucesso!'
            ];
        } else {
            $array = [
                "status" => 400,
                "msg" => 'ERRO AO ATUALIZAR LIVRO!'
            ];
        }
        return $array;
    }
    catch (Exception $err) {
        $array = [
            "status" => 400,
            "msg" => $err
        ]; 
        return $array;
    }
}