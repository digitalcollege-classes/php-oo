<div class="col text-center">
    <h4><?= translate('student-edit') ?></h4>
</div>
<section class="row">
    <div class="col">
        <img src="/assets/img/add_student.svg" width="100%">
    </div>
    <div class="col">
        <form action=<?= "/alunos/editar?id={$aluno->id}" ?> method="post">
            <label for="name"><?= translate('course-name') ?></label>
            <input value="<?= $aluno->name; ?>"
                   id="name" type="text"
                   class="form-control mb-3"
                   name="name"
                   placeholder="<?= translate('input-type-here') ?>"
            >

            <label for="registry"><?=translate('student-registry')?></label>
            <input  value="<?= $aluno->registry ?>"
                    id="registry"
                    type="text"
                    class="form-control mb-3"
                    name="registry"
                    required
                    placeholder="<?=translate('input-type-here')?>"
            >

            <label for="cpf"><?=translate('student-cpf')?></label>
            <input  value="<?= $aluno->cpf ?>"
                    id="cpf"
                    type="text"
                    class="form-control mb-3"
                    name="cpf"
                    required
                    placeholder="<?=translate('input-type-here')?>"
            >

            <label for="email"><?=translate('student-email')?></label>
            <input  value="<?= $aluno->email ?>"
                    id="email"
                    type="email"
                    class="form-control mb-3"
                    name="email"
                    required
                    placeholder="<?=translate('input-type-here')?>"
            >

            <button type="submit" class="btn btn-outline-success w-100 mt-3">
                <?= translate('text-save') ?>
            </button>
        </form>
    </div>
</section>