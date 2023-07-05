<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 custom-heading"><?= $title; ?></h1>


    <div class="row">
        <div class="col-md">

            <?= $this->session->flashdata('message'); ?>

            <div class="row mb-3">
                <div class="col-md">
                    <a href="<?= base_url('game/tambah/'); ?>" class="btn btn-beli mb-3">Add New Game</a>
                </div>
            </div>

            <table class=" table table-hover cartoon-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($game as $g) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $g['judul'] ?></td>
                            <td><?= $g['genre'] ?></td>
                            <td><?= $g['harga'] ?></td>
                            <td><?= $g['cover'] ?></td>
                            <td>

                                <a href="<?= base_url('game/hapus/' . $g['id']); ?>" class="badge badge-danger" onclick="return confirm('Are u sure?')">Delete</a>
                                <a href="<?= base_url('game/edit/' . $g['id']); ?>" class="badge badge-warning">Edit</a>
                                <a href="<?= base_url('game/detail/' . $g['id']); ?>" class="badge badge-primary">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->