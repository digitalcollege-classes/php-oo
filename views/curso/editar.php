<section class="row">
    <div class="col">
        <img src="/assets/img/add_course.svg" width="100%">
    </div>
    <div class="col">
        <form action=<?php echo "/cursos/editar?id={$curso->id}" ?> method="post">
            <label for="name"><?= translate('course-name') ?></label>
            <input value=<?php echo $curso->name; ?> id="name" type="text" class="form-control mb-3" name="name" placeholder="<?= translate('input-type-here') ?>">


            <label for="description"><?= translate('course-description') ?></label>
            <input value=<?php echo $curso->description; ?> id="description" type="text" class="form-control mb-3" name="description" placeholder="<?= translate('input-type-here') ?>">


            <button type="submit" class="btn btn-outline-success w-100 mt-3">
                <?= translate('text-save') ?>
            </button>
        </form>
    </div>
</section>