<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog Saya</title>
</head>

<body>
    <h1>Edit Artikel</h1>
    <?php foreach ($post as $p) { ?>
        <form action="<?php echo base_url('blog/update_process'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $p->id?>">
            <label>
                Judul: <input type="text" name="judul" autofocus value="<?php echo $p->judul?>">
            </label>
            <br>
            <label>
                Konten:<br>
                <textarea name="konten" rows="4" cols="50"><?php echo $p->konten?></textarea>
            </label>
            <br>
            <input type="submit" value="Simpan">
        </form>
    <?php } ?>

</body>

</html>