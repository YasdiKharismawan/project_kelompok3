<h1 class="h3 mb-4 text-gray-800 ml-5 custom-heading"><?= $title; ?></h1>

<style>
    a.cart-link {
        display: inline-block;
        padding: 5px;
        background-color: rgb(247, 169, 182);
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-left: 5px;
    }

    a.cart-link i {
        margin-right: 3px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php if (empty($game)) : ?>
                <div class="alert alert-danger" role="alert">
                    Sorry, game not found.
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="keyword" class="form-control" placeholder="Search your fav games...">
                    <div class="input-group-append">
                        <button class="btn" style="background-color: #3498db; color: #fff;" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <?php foreach ($game as $g) : ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img class="image-cover" src="<?= base_url('assets/img/game/') . $g['cover']; ?>" class="card-img-top" style="object-fit: cover; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold"><?= $g['judul']; ?></h6>
                        <p class="card-text mb-2">Genre: <?= $g['genre']; ?></p>
                        <h6 class="card-text font-weight-bold">Rp. <?= number_format($g['harga'], 0, ',', '.'); ?></h6>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('order/index'); ?>" class="btn btn-beli btn-block">Beli</a>
                            <?= anchor('game/addtocart/' . $g['id'], '<i class="fas fa-cart-plus"></i>', array('class' => 'cart-link')) ?>
                            <?= anchor('game/detail_game/' . $g['id'], '<i class="fas fa-info-circle"></i>', array('class' => 'cart-link')) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?= $this->pagination->create_links(); ?>

</div>








</div>
<!-- End of Main Content -->