<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card-body">
        <form action="<?= base_url('menu/editmenu/' . $menu['id']); ?>" method="post">
            <input type="hidden" name="id" value="<?= $menu['id']; ?>">
            <div class="form-group">
                <label for="menu">Menu</label>
                <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name" value="<?= $menu['menu']; ?>">
                <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->