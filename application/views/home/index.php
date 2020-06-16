<div class="container container-body">
    <div class=mt-3>
        <?= date('l, d M Y') ?>
    </div>
    <div class="jumbotron">
        <div class="content-title">
            <strong>Data Kasus <i>Corona Virus Disease</i> di Indonesia</strong>
        </div>
        <div class="container-banner">
            <div class="banner bg-primary">
                <div class="banner-title text-light">
                    Jumlah Kasus
                </div>
                <div class="banner-data text-light">
                    <h1><?= $kasus->jumlahKasus; ?></h1>
                </div>
            </div>

            <div class="banner bg-warning">
                <div class="banner-title text-light">
                    Dalam Perawatan
                </div>
                <div class="banner-data text-light">
                    <h1><?= $kasus->perawatan; ?></h1>
                </div>

            </div>
            <div class="banner bg-success">
                <div class="banner-title text-light">
                    Sembuh
                </div>
                <div class="banner-data text-light">
                    <h1><?= $kasus->sembuh; ?></h1>
                </div>
            </div>

            <div class="banner bg-danger">
                <div class="banner-title text-light">
                    Meninggal
                </div>
                <div class="banner-data text-light">
                    <h1><?= $kasus->meninggal; ?></h1>
                </div>
            </div>

        </div>
    </div>
</div>