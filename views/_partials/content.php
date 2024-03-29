<?php
    $errors = $_SESSION['errors'] ?? [];

    foreach ($errors as $error) {
        echo "
            <div class='alert alert-danger'>
                <strong>Ops!</strong>
                {$error}
            </div>
        ";
    }

    //limpar os errors
    $_SESSION['errors'] = [];
?>

<section class="card card-body">