<div class="card h-100">
    <div class="card-header d-flex align-items-center">
        <h3 class="card-title"><?php echo $tableData->title; ?></h3>
        <a href="<?php echo App\Routes\Routes::getActiveRoute()?>/create" class="btn btn-primary align-self-end ml-auto">Adicionar</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <?php foreach ($tableData->columns as $column): ?>
                        <th class="text-center align-middle"><?php echo $column->getLabel(); ?></th>
                    <?php endforeach; ?>
                    <th class="text-center align-middle" style="width: 150px;">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tableData->data as $data): ?>
                    <tr>
                            <?php foreach ($tableData->columns as $column): ?>
                                <?php echo $column->render(['data' => $data->{$column->getColumn()}]);?>
                            <?php endforeach; ?>
                            <td class="text-center align-middle" style="width: 150px;">
                                <a href="<?php echo App\Routes\Routes::getActiveRoute() . "/" . $data->id; ?>" class="btn btn-secondary btn-sm">Editar</a>
                                <button type="button" class="btn btn-danger btn-sm delete-button" id="button-delete-<?php echo $data->id; ?>">Excluir</button>
                            </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
    </div>
</div>
