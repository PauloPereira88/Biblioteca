<?php

require '../controller/Livro.php';

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $editora = $_POST['editora'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $paginas = $_POST['paginas'] ?? '';
    $versao = $_POST['versao'] ?? '';
    $disponibilidade = $_POST['disponibilidade'] ?? '';

    $objLivro = new Livro();
    $objLivro->titulo = $titulo;
    $objLivro->isbn = $isbn;
    $objLivro->autor = $autor;
    $objLivro->editora = $editora;
    $objLivro->categoria = $categoria;
    $objLivro->paginas = $paginas;
    $objLivro->versao = $versao;
    $objLivro->disponibilidade = $disponibilidade;

    $res = $objLivro->cadastrar();
    if ($res === true) {
        echo 'Livro Cadastrado com Sucesso!';
    } else {
        echo 'Livro não Cadastrado!';
    }
 
}