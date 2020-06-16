$(function () {

    $('.custom-select').on('change', function () {
        const kasus_posistif = $('option:selected', this).data("positif");
        const kasus_sembuh = $('option:selected', this).data("sembuh");
        const kasus_meninggal = $('option:selected', this).data("meninggal");
        const nama_provinsi = $('option:selected', this).data("namaprovinsi");

        $('.kasus_positif').text(kasus_posistif);
        $('.kasus_sembuh').text(kasus_sembuh);
        $('.kasus_meninggal').text(kasus_meninggal);
        $('#nama_provinsi').text(nama_provinsi);
    });

});