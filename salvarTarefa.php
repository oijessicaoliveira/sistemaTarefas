<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = trim($_POST['titulo']);
    $descricao = trim($_POST['descricao']);
    $dataConclusao = $_POST['data_conclusao'];
    $categoria = $_POST['categoria'];
    $prioridade = $_POST['prioridade'];

    if (empty($titulo) || empty($descricao) || empty($dataConclusao)) {
        die("Erro: Todos os campos são obrigatórios.");
    }

    // Aqui você pode incluir o código para salvar os dados no banco de dados
    echo "Tarefa cadastrada com sucesso!";
} else {
    die("Erro: Método de solicitação inválido.");
}

