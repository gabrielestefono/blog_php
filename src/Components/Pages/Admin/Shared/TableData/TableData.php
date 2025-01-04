<?php
$tableData = new stdClass();
$tableData->title = "Lista de Postagens";
$tableData->columns = ["ID", "Título", "Autor", "Data de Criação", "Ações"];
$tableData->data = [
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
    new stdClass(),
];
$tableData->data[0]->id = 1;
$tableData->data[0]->title = "Postagem 1";
$tableData->data[0]->author = "Autor 1";
$tableData->data[0]->created_at = "01/01/2021";
$tableData->data[1]->id = 2;
$tableData->data[1]->title = "Postagem 2";
$tableData->data[1]->author = "Autor 2";
$tableData->data[1]->created_at = "02/01/2021";
$tableData->data[2]->id = 3;
$tableData->data[2]->title = "Postagem 3";
$tableData->data[2]->author = "Autor 3";
$tableData->data[2]->created_at = "03/01/2021";
$tableData->data[3]->id = 4;
$tableData->data[3]->title = "Postagem 4";
$tableData->data[3]->author = "Autor 4";
$tableData->data[3]->created_at = "04/01/2021";
$tableData->data[4]->id = 5;
$tableData->data[4]->title = "Postagem 5";
$tableData->data[4]->author = "Autor 5";
$tableData->data[4]->created_at = "05/01/2021";
$tableData->data[5]->id = 6;
$tableData->data[5]->title = "Postagem 6";
$tableData->data[5]->author = "Autor 6";
$tableData->data[5]->created_at = "06/01/2021";
$tableData->data[6]->id = 7;
$tableData->data[6]->title = "Postagem 7";
$tableData->data[6]->author = "Autor 7";
$tableData->data[6]->created_at = "07/01/2021";
$tableData->data[7]->id = 8;
$tableData->data[7]->title = "Postagem 8";
$tableData->data[7]->author = "Autor 8";
$tableData->data[7]->created_at = "08/01/2021";
$tableData->data[8]->id = 9;
$tableData->data[8]->title = "Postagem 9";
$tableData->data[8]->author = "Autor 9";
$tableData->data[8]->created_at = "09/01/2021";
$tableData->data[9]->id = 10;
$tableData->data[9]->title = "Postagem 10";
$tableData->data[9]->author = "Autor 10";
$tableData->data[9]->created_at = "10/01/2021";
$tableData->data[10]->id = 11;
$tableData->data[10]->title = "Postagem 11";
$tableData->data[10]->author = "Autor 11";
$tableData->data[10]->created_at = "11/01/2021";
$tableData->data[11]->id = 12;
$tableData->data[11]->title = "Postagem 12";
$tableData->data[11]->author = "Autor 12";
$tableData->data[11]->created_at = "12/01/2021";
$tableData->data[12]->id = 13;
$tableData->data[12]->title = "Postagem 13";
$tableData->data[12]->author = "Autor 13";
$tableData->data[12]->created_at = "13/01/2021";
$tableData->data[13]->id = 14;
$tableData->data[13]->title = "Postagem 14";
$tableData->data[13]->author = "Autor 14";
$tableData->data[13]->created_at = "14/01/2021";
$tableData->data[14]->id = 15;
$tableData->data[14]->title = "Postagem 15";
$tableData->data[14]->author = "Autor 15";
$tableData->data[14]->created_at = "15/01/2021";
?>

<div class="card h-100">
    <div class="card-header d-flex align-items-center">
        <h3 class="card-title"><?php echo $tableData->title; ?></h3>
        <a href="/admin/posts/create" class="btn btn-primary align-self-end ml-auto">Adicionar</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <?php foreach ($tableData->columns as $column): ?>
                        <th class="text-center"><?php echo $column; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tableData->data as $data): ?>
                    <tr>
                        <td class="text-center"><?php echo $data->id; ?></td>
                        <td class="text-center"><?php echo $data->title; ?></td>
                        <td class="text-center"><?php echo $data->author; ?></td>
                        <td class="text-center"><?php echo $data->created_at; ?></td>
                        <td class="text-center">
                            <a href="/admin/posts/edit/<?php echo $data->id; ?>" class="btn btn-secondary btn-sm">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm delete-button" id="button-delete-<?php echo $data->id; ?>">Excluir</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
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
