<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($cursos ?? [] as $cada) {
                echo "
                    <tr>
                        <td>{$cada->nome}</td>
                        <td>
                            <a href='' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='' class='btn btn-danger btn-sm'>Excluir</a>
                        </td>
                    </tr>
                ";
            } 
        ?>
    </tbody>
</table>
