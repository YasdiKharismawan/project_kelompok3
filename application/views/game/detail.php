<style>
    .container-fluid {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        position: relative;
        width: 18rem;
        overflow: hidden;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        transform: scale(1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.1);
    }

    .card-img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .card-body {
        padding: 1rem;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .card-text {
        font-size: 1rem;
        margin-bottom: 1rem;
    }

    .btn-primary {
        display: block;
        width: 100%;
        text-align: center;
    }
</style>


<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-lg">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('assets/img/game/') . $game['cover']; ?>" class="card-img" alt="Cover Image">

                <div class="card-body">
                    <h5 class="card-title"><?= $game['judul'] ?></h5>
                    <p class="card-text"><?= $game['detail']; ?></p>
                    <a href="<?= base_url('game'); ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>





</div>