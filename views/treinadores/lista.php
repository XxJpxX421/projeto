<!DOCTYPE html>
<html>
<head>
    <title>Lista de Treinadores</title>
</head>
<body>
    <h1>Lista de Treinadores</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>CPF</th>
            <th>RG</th>
        </tr>
        <?php foreach ($treinadores as $treinador): ?>
            <tr>
                <td><?php echo $treinador['id']; ?></td>
                <td><?php echo $treinador['nome']; ?></td>
                <td><?php echo $treinador['idade']; ?></td>
                <td><?php echo $treinador['altura']; ?></td>
                <td><?php echo $treinador['peso']; ?></td>
                <td><?php echo $treinador['cpf']; ?></td>
                <td><?php echo $treinador['rg']; ?></td>
                <?php
                                echo "<td><a class='btn-editar' style='color:blue;'
                                href='atualizartreinador.php?id={$treinador['id']}'>Atualizar</a></td>";

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

