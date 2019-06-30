<form action="../save" method="POST">
    <div class="card">
        <div class="card-header">
            <strong>Tarefa</strong>
            <small> Formulário</small>
        </div>
        <div class="card-body card-block">
            <div class="form-group">
                <label class="form-control-label">Título</label>
                <input type="text" class="form-control" name="titulo" value="<?= $task->title ?>" required>
            </div>
            <div class="form-group">
                <label class="form-control-label">Descrição</label>
                <textarea class="form-control" name="descricao" rows="6" required><?= $task->description ?></textarea>
            </div>
            <div class="form-group">
                <label class="form-control-label">Tempo <small>(dias)</small> </label>
                <input type="number" class="form-control" name="tempo" min="1" max="360" value="<?= $task->time ?>" required>
            </div>
            <div class="form-group">
                <label class="form-control-label">Usuários</label>
                <select class="form-control" name="usuarios[]" data-value="[<?= $task->get_related_users('id') ?>]" multiple>
                    <?php
                        foreach ($users as $key => $value)
                            echo '<option value="'.$value->id.'">' .$value->nome. '</option>';
                    ?>
                </select>
            </div>
            <input type="hidden" name="id" value="<?= $task->id ?>">
        </div>
        <div class="card-footer">
            <div class="text-right">
                <a href="javascript:history.back()"><button type="button" class="btn btn-secondary">Voltar</button></a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</form>