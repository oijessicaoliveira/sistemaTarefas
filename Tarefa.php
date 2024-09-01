<?php

class Tarefa {
    private $titulo;
    private $descricao;
    private $dataConclusao;
    private $status;

    public function __construct($titulo, $descricao, $dataConclusao, $status) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->dataConclusao = $dataConclusao;
        $this->status = $status;
    }

    // Getters
    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getDataConclusao() {
        return $this->dataConclusao;
    }

    public function getStatus() {
        return $this->status;
    }

    // Setters
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setDataConclusao($dataConclusao) {
        $this->dataConclusao = $dataConclusao;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    // Método para exibir informações da tarefa com lógica de decisão
    public function exibirTarefa() {
        echo "Título da Tarefa: " . $this->getTitulo() . "<br>";
        echo "Descrição: " . $this->getDescricao() . "<br>";
        echo "Data de Conclusão: " . $this->getDataConclusao() . "<br>";
        echo "Status: " . $this->getStatus() . "<br>";

        if ($this->getStatus() == "Concluída") {
            echo "Parabéns! Esta tarefa foi concluída.<br>";
        } elseif ($this->getStatus() == "Em Andamento") {
            echo "Esta tarefa está em andamento. Continue assim!<br>";
        } elseif ($this->getStatus() == "Pendente") {
            echo "Esta tarefa ainda está pendente. Não se esqueça de concluí-la.<br>";
        } else {
            echo "Status desconhecido.<br>";
        }

        echo "-----------------------------<br>";
    }
}
