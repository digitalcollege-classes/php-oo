<hr>

<div class="row">
    <div class="col">
        <nav>
            <a href="/" class="btn btn-outline-dark"><?php echo translate('menu-home'); ?></a>
            <a href="/professores/listar" class="btn btn-outline-dark"><?= translate('menu-teachers'); ?></a>
            <a href="/alunos/listar" class="btn btn-outline-dark"><?= translate('menu-students'); ?></a>
            <a href="/cursos/listar" class="btn btn-outline-dark"><?= translate('menu-courses'); ?></a>
        </nav>
    </div>
    <div class="col nav-user">
        <form>
            <select name="" id="select-lang" class="form-select">
                <?php
                    $lang = $_SESSION['language'] ?? 'pt-br';
                ?>
            
                <option <?php echo $lang === 'pt-br'?'selected':'' ?> value="pt-br">PT-BR</option>
                <option <?php echo $lang === 'en'?'selected':'' ?> value="en">EN</option>
            </select>
        </form>
        <div class="user-info">
            <img src="/assets/img/avatar.png" />
            <span><?= $_SESSION['user_name'] ?? 'usuário' ?></span>
        </div>
    </div>
</div>

<hr>
