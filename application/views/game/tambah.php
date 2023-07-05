<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Add New Game</h1>
                        </div>
                        <form class="" method="post" action="<?= base_url('game/tambah'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Judul">
                                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="genre" name="genre">
                                    <option value="Select Genre">Select Genre</option>
                                    <option value="Action-Adventure-OpenWorld">Action-Adventur-OpenWorld</option>
                                    <option value="Indie-Farm">Indie-Farm</option>
                                    <option value="Indie-Adventure">Indie-Adventure</option>
                                    <option value="Racing">Racing</option>
                                    <option value="Strategy-Turnbased">Strategy-Turnbased</option>
                                    <option value="Horror-Survival">Horror-Survival</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="detail" name="detail" placeholder="Detail">                                
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Add Games
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('game/index') ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<!-- End of Main Content -->