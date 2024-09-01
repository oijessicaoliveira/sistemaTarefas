<?php
// funções_tarefas.php

// Função para criar uma nova tarefa
function criarTarefa($titulo, $descricao, $data_conclusao, $status) {
    return [
        'titulo' => $titulo,
        'descricao' => $descricao,
        'data_conclusao' => $data_conclusao,
        'status' => $status
    ];
}

// Função para exibir uma tarefa
function exibirTarefa($tarefa) {
    echo "Título da Tarefa: " . $tarefa['titulo'] . "<br>";
    echo "Descrição: " . $tarefa['descricao'] . "<br>";
    echo "Data de Conclusão: " . $tarefa['data_conclusao'] . "<br>";
    echo "Status: " . $tarefa['status'] . "<br>";
    echo "-----------------------------<br>";
}

// Função para atualizar o status da tarefa
function atualizarStatusTarefa(&$tarefa, $novo_status) {
    $tarefa['status'] = $novo_status;
}