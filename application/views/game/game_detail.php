<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 ml-5 custom-heading"><?= $title; ?></h1>

    <div class="card">
        <div class="card-header">Game Detail</div>
        <div class="card-body">
            <?php foreach ($game as $g) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/game/') . $g['cover']; ?>" class="card-img" alt="Cover Image">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Game Title</td>
                                <td><strong><?= $g['judul'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Genre</td>
                                <td><strong><?= $g['genre'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><strong><?= $g['detail'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-beli">Rp. <?= number_format($g['harga'], 0, ',', '.')  ?></div>
                                    </strong></td>
                            </tr>
                        </table>
                        <a href="<?= base_url('user/beli_game'); ?>">
                            <div class="btn btn-sm btn-beli">Back</div>
                        </a>
                        <a href="<?= base_url('game/addtocart/' . $g['id']); ?>">
                            <div class="btn btn-sm btn-beli">Add to cart</div>
                        </a>
                        
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
</div>