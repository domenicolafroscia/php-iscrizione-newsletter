<?php if (str_contains($email, '@') !== false && str_contains($email, '.') !== false) { ?>
    <div class='alert alert-success'>Email valida!</div>
<?php } else{ ?>
    <div class='alert alert-danger'>Email non valida!</div>
<?php } ?>


