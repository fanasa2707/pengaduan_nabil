<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="row d-flex align-items-center h-100">
            <div class="col-8">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-3">Profile <?= $petugas['level'] ?>
                        </div>
                        <div class="d-flex text-black">

                            <div class="flex-shrink-0 mr-4 mt-4">
                                <img src="<?= base_url('assets/img/undraw_profile.svg') ?>" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;" />
                            </div><br>
                            <div class="flex-grow-1 ms-4">
                                <div class="col-md-10">
                                    <h6>Nama Petugas</h6>
                                    <div class="form-control mb-3">

                                        <?= $petugas['nama_petugas'] ?>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h6>Status</h6>
                                    <div class="form-control mb-3">

                                        <?= $petugas['level'] ?>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h6>Telepone</h6>
                                    <div class="form-control mb-3">

                                        <?= $petugas['telpon'] ?>
                                    </div>
                                </div>




                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>