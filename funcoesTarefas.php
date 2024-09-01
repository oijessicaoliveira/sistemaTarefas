<?php

// Função para criar uma nova tarefa
function criarTarefa($titulo, $descricao, $data_conclusao, $status) {
    return [
        'titulo' => $titulo,
        'descricao' => $descricao,
        'data_conclusao' => $data_conclusao,
        'status' => $status
    ];
}

// Função para exibir uma tarefa com lógica de decisão
function exibirTarefa($tarefa) {
    echo "Título da Tarefa: " . $tarefa['titulo'] . "<br>";
    echo "Descrição: " . $tarefa['descricao'] . "<br>";
    echo "Data de Conclusão: " . $tarefa['data_conclusao'] . "<br>";
    echo "Status: " . $tarefa['status'] . "<br>";

    // Lógica de decisão baseada no status da tarefa
    if ($tarefa['status'] == "Concluída") {
        echo "Parabéns! Esta tarefa foi concluída.<br>";
    } elseif ($tarefa['status'] == "Em Andamento") {
        echo "Esta tarefa está em andamento. Continue assim!<br>";
    } elseif ($tarefa['status'] == "Pendente") {
        echo "Esta tarefa ainda está pendente. Não se esqueça de concluí-la.<br>";
    } else {
        echo "Status desconhecido.<br>";
    }

    echo "-----------------------------<br>";
}