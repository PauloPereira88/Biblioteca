<?php

require_once "../controller/Livro.php";

$objLivro = new Livro();
$livros = $objLivro->buscar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Livros</title>
</head>
<body>

    <h1>Listagem de Livros</h1>

    <section>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>ISBN</th>
                        <th>Autor</th>
                        <th>Editora</th>
                        <th>Categoria</th>
                        <th>Paginas</th>
                        <th>Versao</th>
                        <th>Disponibilidade</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody id="bodyTable">
                    <?php 
                    if (is_array($livros) && count($livros) > 0): 
                        foreach ($livros as $livro): 
                    ?>
                            <tr>
                                <td><?= htmlspecialchars($livro['titulo'] ?? '') ?></td>
                                <td><?= htmlspecialchars($livro['isbn'] ?? '') ?></td>
                                <td><?= htmlspecialchars($livro['autor'] ?? '') ?></td>
                                <td><?= htmlspecialchars($livro['editora'] ?? '') ?></td>
                                <td><?= htmlspecialchars($livro['categoria'] ?? '') ?></td>
                                <td><?= htmlspecialchars($livro['paginas'] ?? '') ?></td>
                                <td><?= htmlspecialchars($livro['versao'] ?? '') ?></td>
                                <td><?= htmlspecialchars($livro['disponibilidade'] ?? '') ?></td>
                                <td><?= htmlspecialchars($livro['Opções'] ?? '') ?>
                                    <a href="editar-livro.php?id=<?= $livro['id_livro']?>">EDITAR</a>
                                </td>
                            </tr>
                    <?php 
                        endforeach; 
                    else: 
                    ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
    
</body>
</html>