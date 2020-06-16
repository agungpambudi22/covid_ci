<div class="container mt-4 content-title">
    <h5>Data Per-Provinsi</h5>
</div>
<div class="container mt-4">
    <select class="custom-select">
        <option data-namaprovinsi="Indonesia" data-positif="<?= $kasus->jumlahKasus; ?>" data-sembuh="<?= $kasus->sembuh; ?>" data-meninggal="<?= $kasus->meninggal; ?>">
            Indonesia
        </option>
        <?php foreach ($daerah as $prov) : ?>
            <?php if ($prov->provinsi != 'Indonesia') : ?>
                <option data-namaprovinsi="<?= $prov->provinsi; ?>" data-positif="<?= $prov->kasusPosi; ?>" data-sembuh="<?= $prov->kasusSemb; ?>" data-meninggal="<?= $prov->kasusMeni; ?>">
                    <?= $prov->provinsi; ?>
                </option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
</div>
<div class="container container-body mt-3">
    <div>
        <?= date('l, d M Y') ?>
    </div>
    <div class="jumbotron">
        <div class="content-title">
            <strong>Data Kasus <i>Corona Virus Disease</i> di <span id="nama_provinsi">Indonesia</span></strong>
        </div>
        <div class="container-banner">
            <div class="banner bg-warning">
                <div class="banner-title text-light">
                    Positif
                </div>
                <div class="banner-data text-light">
                    <h1 class="kasus_positif"><?= $kasus->jumlahKasus; ?></h1>
                </div>

            </div>
            <div class="banner bg-success">
                <div class="banner-title text-light">
                    Sembuh
                </div>
                <div class="banner-data text-light">
                    <h1 class="kasus_sembuh"><?= $kasus->sembuh; ?></h1>
                </div>
            </div>

            <div class="banner bg-danger">
                <div class="banner-title text-light">
                    Meninggal
                </div>
                <div class="banner-data text-light">
                    <h1 class="kasus_meninggal"><?= $kasus->meninggal; ?></h1>
                </div>
            </div>

        </div>
    </div>
</div>