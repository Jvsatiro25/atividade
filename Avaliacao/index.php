<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o CSS -->
</head>
<body>

    <div class="container">
        <h2>Formulário de Cadastro</h2>

        <!-- Formulário de cadastro -->
        <form action="cadastro.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
    
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="curso">Curso:</label>
            <input type="text" id="curso" name="curso" required>

            <input type="submit" value="Cadastrar">
        </form>

        <h2>Formulário de Cadastro</h2>

        <?php
        // Inclui o arquivo de conexão
        include 'conexao.php';

        // Busca os dados dos alunos
        $sql = "SELECT id, nome, idade, email, curso FROM Alunos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nome</th><th>Idade</th><th>Email</th><th>Curso</th></tr>";

            // Exibe os dados de cada linha
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["idade"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["curso"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Nenhum aluno cadastrado.";
        }

        // Fecha a conexão
        $conn->close();
        ?>
    </div>

</body>
</html>
