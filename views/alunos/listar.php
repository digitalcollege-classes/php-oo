<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th><?=translate('student-name')?></th>
            <th><?=translate('student-email')?></th>
            <th><?=translate('student-last-login')?></th>
            <th><?=translate('student-created_at')?></th>
            <th><?=translate('table-actions')?></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($alunos ?? [] as $aluno) {
                $buttonEdit = translate('button-edit');
                $buttonDelete = translate('button-delete');

                echo "
                    <tr>
                        <td>{$aluno->name}</td>
                        <td>{$aluno->email}</td>
                        <td>{$aluno->lastLogin->format('d/m/Y')}</td>
                        <td>{$aluno->createdAt->format('d/m/Y')}</td>
                        <td>
                            <a href='' class='btn btn-warning btn-sm'>{$buttonEdit}</a>
                            <a href='' class='btn btn-danger btn-sm'>{$buttonDelete}</a>
                        </td>
                    </tr>
                ";
            } 
        ?>
    </tbody>
</table>
