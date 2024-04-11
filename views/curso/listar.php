<div class="col">
    <a href="/cursos/adicionar" class="btn btn-success"><?= translate('new-course') ?></a>
</div>
<hr>
<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th><?=translate('course-name')?></th>
            <th><?=translate('course-description')?></th>
            <th><?=translate('status')?></th>
            <th><?=translate('table-actions')?></th>
        </tr>
    </thead>
    <tbody>
        
        <?php
            foreach ($cursos ?? [] as $cada) {
                $buttonEdit = translate('button-edit');
                $buttonDelete = translate('button-delete');

                echo "
                    <tr>
                        <td>{$cada->name}</td>
                        <td>{$cada->description}</td>
                        <td>{$cada->status}</td>
                        <td>
                            <a href='' class='btn btn-warning btn-sm'>{$buttonEdit}</a>
                            <a href='/cursos/excluir?id={$cada->id}' onclick='return confirmDelete()'  class='btn btn-danger btn-sm'>{$buttonDelete}</a>
                        </td>
                    </tr>
                ";
            } 
        ?>
    </tbody>
</table>
<script>
    function confirmDelete() {
        return confirm("Tem certeza que deseja excluir este curso?");
    }
    
</script>