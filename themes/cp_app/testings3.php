<form method="POST" action="<?= route_to('testings3') ?>" enctype='multipart/form-data'>
    <?= csrf_field() ?>

    <input type="file" name="filo" accept="image/png, image/gif, image/jpeg" />

    <button type="submit">Submit</button>
</form>