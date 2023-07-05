<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 ml-5 custom-heading"><?= $title; ?></h1>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Subtotal</th>
        </tr>

        <?php $no = 1;
        foreach ($this->cart->contents() as $item) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $item['name']; ?></td>
                <td><?= $item['qty']; ?></td>
                <td align="right" >Rp. <?= number_format($item['price'], 0,',','.') ; ?></td>
                <td align="right" >Rp. <?= number_format($item['subtotal'], 0, ',', '.'); ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4"></td>
                <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
            </tr>
    </table>
    <div align="right">
        <a href="<?= base_url('game/delcart'); ?>"><div class="btn btn-sm btn-beli">Delete Cart</div></a>
        <a href="<?= base_url('user/beli_game'); ?>"><div class="btn btn-sm btn-beli">Order more</div></a>
        <a href="<?= base_url('game/pay'); ?>"><div class="btn btn-sm btn-beli">Pay now</div></a>
    </div>
</div>


        </div>