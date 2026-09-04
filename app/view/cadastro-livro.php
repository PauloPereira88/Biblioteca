<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>

    <h1>Cadastro de Livros</h1>
    
    <form action="../actions/cadastro-livro.php" method="POST">
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" placeholder="Digite o Titulo">

        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">

        <label for="autor">Autor</label>
        <input type="text" id="autor" name="autor" placeholder="Digite o Nome do Autor">

        <label for="editora">Editora</label>
        <input type="text" id="editora" name="editora" placeholder="Digite a Editora">

        <label for="categoria">Categoria</label>
        <input type="text" id="categoria" name="categoria" placeholder="Digite a categoria">

        <label for="pagina">Paginas</label>
        <input type="number" id="paginas" name="paginas">

        <label for="versao">Versão</label>
        <input type="text" id="versao" name="versao">

        <label for="desponibilidade">Disponibilidade</label>
        <select name="disponibilidade" id="disponibilidade">
            <option value="disponivel">Disponivel</option>
            <option value="indisponivel">Indisponivel</option>
        </select>
        <button type="submit">Cadastrar</button>
        <button type="reset">LIMPAR</button>
    </form>
    
</body>
</html>