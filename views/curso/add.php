<section class="row">
    <div class="col">
        <img src="/assets/img/add_course.svg" width="100%">
    </div>
    <div class="col">
        <form action="" method="post">
            <label for="name"><?=translate('course-name')?></label>
            <input 
                id="name" 
                type="text" 
                class="form-control mb-3" 
                name="name" 
                placeholder="<?=translate('input-type-here')?>"
            >

            <label for="description"><?=translate('course-description')?></label>
            <input 
                id="description" 
                type="text" 
                class="form-control mb-3" 
                name="description" 
                placeholder="<?=translate('input-type-here')?>"
            >

            <select id="status" name="status" type="boolval" class="form-select" aria-label="Default select example">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>

            <button class="btn btn-outline-dark w-100 mt-3">
                <?=translate('text-confirm')?>
            </button>
        </form>
    </div>
</section>