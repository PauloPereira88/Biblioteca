<?php

require '../controller/cadastro-livro.php';

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $editora = $_POST['editora'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $pagina = $_POST['pagina'] ?? '';
    $versao = $_POST['versao'] ?? '';
    $disp = $_POST['disp'] ?? '';

    $objLivro = new Livro();
    $objLivro->titulo = $titulo;
    $objLivro->isbn = $isbn;
    $objLivro->autor = $autor;
    $objLivro->editora = $editora;
    $objLivro->categoria = $categoria;
    $objLivro->pagina = $pagina;
    $objLivro->versao = $versao;
    $objLivro->disp = $disp;

    $res = $objLivro->cadastrar();
    if ($res === true) {
        echo 'Cadastrado com Sucesso!'
    }
 
}