<!-- Begin Page Content -->
<style>
    .morphing-glass-card {
        backdrop-filter: blur(8px);
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .morphing-glass-card .card-body {
        position: relative;
        padding: 20px;
        color: white;
    }

    .morphing-glass-card:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('<?= base_url('assets/img/profile/') . $user['image']; ?>') no-repeat center center/cover;
        filter: blur(20px);
        transform: scale(1.2);
        z-index: -1;
    }
</style>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mt-4 ml-4 text-gray-800 custom-heading"><?= $title; ?></h1>

    <div class="row justify-content-start">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="row justify-content-start ml-5 mt-3">
        <div class="col-lg-4">
            <div class="card text-center morphing-glass-card">
                <div class="card-body">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="Profile Image">
                    <h5 class="card-title mt-2"><?= $user['name']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->