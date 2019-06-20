<?php ob_start(); ?>
<h1>Contactez-nous!</h1>

<form action="<?php $url('form') ?>" method="post">
    <div class="form-group">
        <label for="">Nom</label>
        <input name="nom" type="text" required>
    </div>
    <input name="submit" type="submit">
</form>

<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>