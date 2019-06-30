<form action="../save" method="POST">
    <div class="card">
        <div class="card-header">
            <strong>Usuário</strong>
            <small> Formulário</small>
        </div>
        <div class="card-body card-block">
            <div class="form-group">
                <label class="form-control-label">Nome</label>
                <input type="text" class="form-control" name="nome" required value="<?= $user->nome ?>">
            </div>
            <div class="form-group">
                <label class="form-control-label">Email</label>
                <input type="email" class="form-control" name="email" required value="<?= $user->email ?>">
            </div>
            <div class="form-group">
                <label class="form-control-label">Cargo</label>
                <select class="form-control" name="cargo" data-value="<?= $user->cargo ?>">
                    <option value="1">Administrador</option>
                    <option value="2">Desenvolvedor Júnior</option>
                    <option value="3">Desenvolvedor Pleno</option>
                    <option value="4">Desenvolvedor Sênior</option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?= $user->id ?>">
        </div>
        <div class="card-footer">
            <div class="text-right">
                <a href="javascript:history.back()"><button type="button" class="btn btn-secondary">Voltar</button></a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</form>