<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th><?=translate('student-name')?></th>
            <th><?=translate('student-registry')?></th>
            <th><?=translate('student-cpf')?></th>
            <th><?=translate('student-email')?></th>
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
                        <td>{$aluno->registry}</td>
                        <td>{$aluno->cpf}</td>
                        <td>{$aluno->email}</td>
                        <td>{$aluno->created_at->format('d/m/Y')}</td>
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
