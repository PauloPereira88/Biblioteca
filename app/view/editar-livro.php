<?php 
require_once '../actions/editar-livro.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>

    <h1>Edição de Livros</h1>
    
    <form action="../actions/editar-livro.php" method="POST">
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo $livro['titulo']; ?>">

        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" value="<?php echo $livro['isbn']; ?>">

        <label for="autor">Autor</label>
        <input type="text" id="autor" name="autor" value="<?php echo $livro['autor']; ?>">

        <label for="editora">Editora</label>
        <input type="text" id="editora" name="editora" value="<?php echo $livro['editora']; ?>">

        <label for="categoria">Categoria</label>
        <input type="text" id="categoria" name="categoria" value="<?php echo $livro['categoria']; ?>">

        <label for="pagina">Paginas</label>
        <input type="text" id="paginas" name="paginas" value="<?php echo $livro['paginas']; ?>">

        <label for="versao">Versão</label>
        <input type="text" id="versao" name="versao" value="<?php echo $livro['versao']; ?>">

        <label for="disponibilidade">Disponibilidade</label>
        <select name="disponibilidade" id="disponibilidade" value="<?php echo $id_livro['disponibilidade']; ?>">
            <option value="disponivel">Disponivel</option>
            <option value="indisponivel">Indisponivel</option>
        </select>
        <button type="submit">Atualizar</button>
    </form>
    
</body>
</html>