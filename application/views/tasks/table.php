<!-- DATA TABLE-->
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Prazo</th>
                <th>Usuários</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($tasks as $task) {
                    echo '<tr data-id="' . $task->id . '">
                                <td>' . $task->title . '</td>
                                <td>' . mb_strimwidth($task->description, 0, 30, '...') . '</td>
                                <td>' . $task->status . '</td>
                                <td>' . $task->get_deadline($task->time) . '</td>
                                <td>' . $task->get_related_users() . '</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="tasks/view/'.$task->id.'">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">
                                                <i class="fa fa-pencil"></i>    
                                            </button>
                                        </a>
                                        <a href="tasks/delete/'.$task->id.'">
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
<!-- END DATA TABLE                  -->