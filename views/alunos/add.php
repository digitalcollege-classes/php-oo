<div class="col text-center">
   <h4><?= translate('student-new') ?></h4>
</div>
<hr>
<section class="row">
    <div class="col">
        <img src="/assets/img/add_student.svg" width="100%">
    </div>
    <div class="col">
        <form action="" method="post">
            <label for="name"><?=translate('student-name')?></label>
            <input 
                id="name" 
                type="text" 
                class="form-control mb-3" 
                name="name"
                required
                placeholder="<?=translate('input-type-here')?>"
            >

            <label for="registry"><?=translate('student-registry')?></label>
            <input
                    id="registry"
                    type="text"
                    class="form-control mb-3"
                    name="registry"
                    required
                    placeholder="<?=translate('input-type-here')?>"
            >

            <label for="cpf"><?=translate('student-cpf')?></label>
            <input
                    id="cpf"
                    type="text"
                    class="form-control mb-3"
                    name="cpf"
                    required
                    placeholder="<?=translate('input-type-here')?>"
            >

            <label for="email"><?=translate('student-email')?></label>
            <input
                    id="email"
                    type="email"
                    class="form-control mb-3"
                    name="email"
                    required
                    placeholder="<?=translate('input-type-here')?>"
            >

            <button class="btn btn-outline-dark w-100 mt-3">
                <?=translate('text-confirm')?>
            </button>
        </form>
    </div>
</section>