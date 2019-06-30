<!-- DATA TABLE-->
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
                echo '<tr data-id="' . $user->id . '">
                        <td>' . $user->id . '</td>
                        <td>' . $user->nome . '</td>
                        <td>' . $user->email . '</td>
                        <td>' . $user->fullCargo() . '</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="users/view/' . $user->id . '">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">
                                        <i class="fa fa-pencil"></i>    
                                    </button>
                                </a>
                                <a href="users/delete/' . $user->id . '">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remover">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                ';
            }
            ?>
        </tbody>
    </table>
</div>