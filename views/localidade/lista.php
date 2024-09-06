<!DOCTYPE html>
<html>
<head>
    <title>Lista de Localidades</title>
</head>
<body>
    <h1>Lista de Localidades</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Número</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>País</th>
        </tr>
        <?php foreach ($localidades as $localidade): ?>
            <tr>
                <td><?php echo $localidade['id']; ?></td>
                <td><?php echo $localidade['rua']; ?></td>
                <td><?php echo $localidade['bairro']; ?></td>
                <td><?php echo $localidade['numero']; ?></td>
                <td><?php echo $localidade['cep']; ?></td>
                <td><?php echo $localidade['cidade']; ?></td>
                <td><?php echo $localidade['estado']; ?></td>
                <td><?php echo $localidade['pais']; ?></td>
                <?php
                                echo "<td><a class='btn-editar' style='color:blue;'
                                href='atualizarlocalidade.php?id={$localidade['id']}'>Atualizar</a></td>";

                            ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<style>
    /* Estilos gerais */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h1 {
    color: #333;
    text-align: center;
    margin: 20px 0;
}

/* Estilização da tabela */
table {
    width: 90%;
    max-width: 1200px;
    border-collapse: collapse;
    background-color: #fff;
    margin: 20px 0;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

/* Cabeçalho da tabela */
th {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Linhas alternadas */
tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Estilo para as células da tabela */
td {
    color: #333;
}

/* Estilização do link de atualizar */
a.btn-editar {
    text-decoration: none;
    color: #fff;
    background-color: #4CAF50;
    padding: 8px 12px;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

a.btn-editar:hover {
    background-color: #45a049;
}

/* Responsividade */
@media (max-width: 768px) {
    table {
        width: 100%;
    }

    th, td {
        padding: 10px;
        font-size: 14px;
    }
}
</style>
