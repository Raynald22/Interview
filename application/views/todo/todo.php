<div class="container-fluid">
    <button class="btn btn sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_todo"><i class="fas fa-plus fa-sm"></i> add your todo</button>
    <table class="table table-bordered">
        <tr>

        </tr>

        <?php
        $no = 1;
        foreach ($todo as $td) : ?>
            <tr>
                <td width="1">
                    <input type="radio">
                </td>
                <td width="3"><?php echo $td->nama ?></td>
                <td width="3"><?php echo anchor('todo/todo/edit/' . $td->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
                <td width="3"><?php echo anchor('todo/todo/hapus/' . $td->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>

            <?php endforeach; ?>

    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_todo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add your todo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'todo/todo/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama todo</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>