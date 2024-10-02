<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $idade = htmlspecialchars($_POST['idade']);
    $email = htmlspecialchars($_POST['email']);
    $curso = htmlspecialchars($_POST['curso']);

    $sql = "INSERT INTO Alunos (nome, idade, email, curso) VALUES (?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("siss", $nome, $idade, $email, $curso);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Erro ao inserir dados: " . $stmt->error;
        }
    } else {
        echo "Erro na preparação da consulta: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
