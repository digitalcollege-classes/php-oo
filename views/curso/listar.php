<div class="col">
    <a href="/cursos/adicionar" class="btn btn-success"><?= translate('new-course') ?></a>
</div>
<hr>
<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th><?=translate('course-name')?></th>
            <th><?=translate('description')?></th>
            <th><?=translate('table-actions')?></th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($cursos ?? [] as $cada) {
        $buttonEdit = translate('button-edit');
        $buttonDelete = translate('button-delete');

        if (is_object($cada) && property_exists($cada, 'description')) {
            echo "
                <tr>
                    <td>{$cada->name}</td>
                    <td>{$cada->description}</td>
                    <td>
                        <a href='/cursos/editar?id={$cada->id}' class='btn btn-warning btn-sm'>{$buttonEdit}</a>
                        <a href='' class='btn btn-danger btn-sm'>{$buttonDelete}</a>
                    </td>
                </tr>
            ";
        }
    } 
?>
    </tbody>
</table>
<script>
    function confirmDelete() {
        return confirm("Tem certeza que deseja excluir este curso?");
    }
    
</script>