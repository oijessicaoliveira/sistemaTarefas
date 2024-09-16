<?php
/* 
// Microprojeto 01 (Parte I)
// Definição das variáveis da tarefa
$titulo_tarefa = "Estudar PHP";
$descricao_tarefa = "Revisar conceitos básicos e avançados de PHP.";
$data_conclusao = "25/09/2024";
$status_tarefa = "Pendente";

// Exibição das informações da tarefa
echo "Título da Tarefa: " . $titulo_tarefa . "<br>";
echo "Descrição: " . $descricao_tarefa . "<br>";
echo "Data de Conclusão: " . $data_conclusao . "<br>";
echo "Status: " . $status_tarefa . "<br>";
*/

/* 
// Microprojeto 01 (Parte II)
require_once 'funcoesTarefas.php';

// Array para armazenar múltiplas tarefas
$tarefas = [];

$tarefas[] = criarTarefa("Estudar PHP", "Revisar conceitos básicos e avançados de PHP.", "03/09/2024", "Em Andamento");
$tarefas[] = criarTarefa("Desenvolver Projeto", "Criar sistema de gerenciamento de tarefas.", "05/10/2024", "Pendente");
$tarefas[] = criarTarefa("Praticar JavaScript", "Exercitar lógica de programação com JavaScript.", "01/09/2024", "Concluída");

//Exibindo todas as tarefas com lógica de decisão
foreach ($tarefas as $tarefa) {
    exibirTarefa($tarefa);
}
*/


// Microprojeto 02: Implementação Orientada a Objetos
require_once 'Tarefa.php';
require_once 'Categoria.php';
require_once 'Usuario.php';

// Criando instâncias de Categoria e Usuario
$categoria1 = new Categoria("Educação", "Tarefas relacionadas a estudos e aprendizado.");
$usuario1 = new Usuario("Severo Snape", "severo.snape@example.com", "always");

// Criando instâncias de Tarefa
$tarefa1 = new Tarefa("Estudar PHP", "Revisar conceitos básicos e avançados de PHP.", "03/09/2024", "Em Andamento");
$tarefa2 = new Tarefa("Desenvolver Projeto", "Criar sistema de gerenciamento de tarefas.", "05/10/2024", "Pendente");
$tarefa3 = new Tarefa("Praticar JavaScript", "Exercitar lógica de programação com JavaScript.", "01/09/2024", "Concluída");

// Exibindo informações das categorias e usuários
$categoria1->exibirCategoria();
$usuario1->exibirUsuario();

// Exibindo as tarefas com lógica de decisão
$tarefa1->exibirTarefa();
$tarefa2->exibirTarefa();
$tarefa3->exibirTarefa();
