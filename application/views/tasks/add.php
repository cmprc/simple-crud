<form action="save" method="POST">
    <div class="card">
        <div class="card-header">
            <strong>Nova tarefa</strong>
            <small> Formulário</small>
        </div>
        <div class="card-body card-block">
            <div class="form-group">
                <label class="form-control-label">Título</label>
                <input type="text" autofocus class="form-control" name="titulo" required>
            </div>
            <div class="form-group">
                <label class="form-control-label">Descrição</label>
                <textarea class="form-control" name="descricao" required></textarea>
            </div>
            <div class="form-group">
                <label class="form-control-label">Tempo <small>(dias)</small> </label>
                <input type="number" class="form-control" name="tempo" min="1" max="360" required>
            </div>
            <div class="form-group">
                <label class="form-control-label">Usuários</label>
                <select class="form-control" name="usuarios[]" required multiple>
                    <?php
                        foreach ($users as $key => $value)
                            echo '<option value="'.$value->id.'">'.$value->nome.'</option>';
                    ?>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
                <a href="javascript:history.back()"><button type="button" class="btn btn-secondary">Voltar</button></a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</form>