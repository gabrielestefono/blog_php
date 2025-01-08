<?php

use App\Helpers\View;
?>

<div class="card-body">
    <form action="/admin/post/store" method="post">
        <div class="form-group d-flex flex-wrap">
            <?php
                View::componentPagesAdmin('TableForm/Input/Input.php', [
                    'label' => 'Título da Publicação',
                    'placeholder' => 'Digite o título da publicação',
                    'name' => 'title',
                    'halfSize' => false,
                    'value' => $tableData->title ?? null
                ]);
                View::componentPagesAdmin('TableForm/Textarea/Textarea.php', [
                    'label' => 'Texto da Publicação',
                    'placeholder' => 'Digite o texto da publicação',
                    'name' => 'description',
                    'halfSize' => false,
                    'value' => $tableData->description ?? null
                ]);
                View::componentPagesAdmin('TableForm/Select/Select.php', [
                    'label' => 'Selecione uma Categoria',
                    'name' => 'category',
                    'placeholder' => 'Selecione uma Categoria',
                    'options' => [
                        '1' => 'Categoria 1',
                        '2' => 'Categoria 2',
                        '3' => 'Categoria 3',
                        '4' => 'Categoria 4',
                        '5' => 'Categoria 5',
                        '6' => 'Categoria 6',
                        '7' => 'Categoria 7',
                        '8' => 'Categoria 8',
                        '9' => 'Categoria 9',
                        '10' => 'Categoria 10',
                        '11' => 'Categoria 11',
                        '12' => 'Categoria 12',
                        '13' => 'Categoria 13',
                        '14' => 'Categoria 14',
                        '15' => 'Categoria 15',
                        '16' => 'Categoria 16',
                        '17' => 'Categoria 17',
                        '18' => 'Categoria 18',
                        '19' => 'Categoria 19',
                        '20' => 'Categoria 20'
                    ],
                    'halfSize' => false,
                    'multiple' => false,
                    'value' => $tableData->category ?? null
                ]);
                View::componentPagesAdmin('TableForm/Button/Button.php', []);
            ?>
        </div>
    </form>
</div>
