<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link para o CSS externo -->
</head>
<body>
    <div class="form-container">
        <h2>Cadastrar Nova Tarefa</h2>
        <form action="salvarTarefa.php" method="POST">
            <div class="form-group">
                <label for="titulo">Título da Tarefa:</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" required></textarea>
            </div>
            <div class="form-group">
                <label for="data_conclusao">Data de Conclusão:</label>
                <input type="date" id="data_conclusao" name="data_conclusao" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria" required>
                    <option value="Trabalho">Trabalho</option>
                    <option value="Estudos">Estudos</option>
                    <option value="Lazer">Lazer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="prioridade">Prioridade:</label>
                <select id="prioridade" name="prioridade" required>
                    <option value="Alta">Alta</option>
                    <option value="Média">Média</option>
                    <option value="Baixa">Baixa</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Salvar Tarefa</button>
            </div>
        </form>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            let titulo = document.getElementById('titulo').value.trim();
            let descricao = document.getElementById('descricao').value.trim();
            let dataConclusao = document.getElementById('data_conclusao').value;
            
            if (titulo === "" || descricao === "" || dataConclusao === "") {
                alert("Por favor, preencha todos os campos.");
                event.preventDefault(); // Impede o envio do formulário
            }
        });
    </script>

</body>
</html>
