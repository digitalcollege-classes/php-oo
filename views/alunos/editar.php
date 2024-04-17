<section class="row">
    <div class="col">
        <img src="/assets/img/edit_student.png" width="100%">
    </div>
    <div class="col">
        <form action="" method="post">
<label for="registry"><?=translate('student-registry')?></label>
<input
        id="registry"
        type="text"
        class="form-control mb-3"
        name="registry"
        placeholder="<?=translate('student-registry')?>"
>
<label for="name"><?=translate('student-name')?></label>
<input
    id="name"
    type="text"
    class="form-control mb-3"
    name="name"
    placeholder="<?=translate('student-name')?>"
>

<label for="description"><?=translate('student-cpf')?></label>
<input
    id="cpf"
    type="text"
    class="form-control mb-3"
    name="cpf"
    placeholder="<?=translate('student-cpf')?>"
>

<label for="email"><?=translate('student-email')?></label>
<input
    id="email"
    type="text"
    class="form-control mb-3"
    name="email"
    placeholder="<?=translate('student-email')?>"
>

<label for="created_at"><?=translate('student-created_at')?></label>
<input
    id="created_at"
    type="date"
    class="form-control mb-3"
    name="created_at"
    placeholder="<?=translate('student-created_at')?>"
>

<button class="btn btn-outline-dark w-100 mt-3">
    <?=translate('text-confirm')?>
</button>
</form>
</div>
</section>