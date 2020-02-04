<div class="container-fluid">
    <h3><i class=" fas fa-edit"></i>TODO</h3>

    <?php foreach ($todo as $td) : ?>

        <form method="post" action="<?php echo base_url() . 'todo/todo/update' ?>">

            <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $td->id ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $td->nama ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm"> Simpan </button>

        </form>

    <?php endforeach; ?>
</div>