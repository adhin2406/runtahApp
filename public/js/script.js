function convertRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split  = number_string.split(","),
    sisa   = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

	if (ribuan) {
		separator = sisa ? "." : "";
		rupiah += separator + ribuan.join(".");
	}
	rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
	return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
}

$(document).ready(function () {
    $('#minus').click(function () {
        // get inputan
        const berattotal = Number($('#jumlah').text());
        const harga = Number($('#hargaAhir').text());
        // set variabel baru untuk operasi pengurangan
        if (berattotal === 1) {
            Swal.fire(
                    '',
                    'sampai batas',
                    ''
                )
        } else {
            const hargadikurangi = berattotal - 1;
            // set harga awal
            const hargaawal = $('#hargaAwal').val();
            // set varibael untuk pengurangan harga
            const hargaakhir = harga - hargaawal;
            const akhiran = parseInt(hargaakhir);
            // set di inputan
            $('#jumlah').text(hargadikurangi);
            $('#hargaAhir').text(hargaakhir);
            $('#hargakuy').val(akhiran);
            $('#beratkuy').val(hargadikurangi);
        }
    })

    $('#plus').click(function () {
        // ambil nilai inputanya
        const berattotal = Number($('#jumlah').text());
        const harga = parseInt($('#hargaAhir').text());
        // ambil nilai awal
        const awal = parseInt($('#hargaAwal').val());
        // operasi tambah
        const awalan = 1;
        const beratambah = berattotal + awalan;
        const hargatambah = Number(harga + awal);
        // set value
        $('#jumlah').text(beratambah);
        $('#hargaAhir').text(hargatambah);
        $('#hargakuy').val(hargatambah);
        $('#beratkuy').val(beratambah);
    })
})

// function ubah profil
function bargama() {
    const woa = document.querySelector('#gambar');
    const gambar = document.querySelector('#preview');
    woa.files[0].name;
    const file = new FileReader();
    file.readAsDataURL(woa.files[0]);
    file.onload = function (e) {
        gambar.src = e.target.result;
    }
}

// function ubah warna navbar saat di scroll
$(window).scroll(function () {
    if ($(window).scrollTop() > 30) {
        $('pc').css('background-color', 'white')
        $('pc').addClass('shadow-lg')
        $('pc').addClass('mun')
    } else {
        $('pc').css('background-color', 'transparent')
        $('pc').removeClass('shadow-lg')
        $('pc').removeClass('mun')
    }
})


// function tarik tunai
$("#jumlah").on('keyup', function () {
    $("#biaya").val("Rp 20.000");

    if ($("#jumlah").val() <= 20000) {
        $("#total").val("Rp 0");
    } else if ($("#jumlah").val() > 20000) {
        $("#total").val($("#jumlah").val() - 20000);
    } else {
        $("#total").val('Rp 0');
    }
})
// 
!(function($) {
    "use strict";
    // Porfolio isotope and filter
    $(document).ready(function() {
        var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
        });

        $('#portfolio-flters li').on('click', function() {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');

        portfolioIsotope.isotope({
            filter: $(this).data('filter')
        });
        aos_init();
        });
    });
    // Init AOS
    function aos_init() {
        AOS.init({
        duration: false,
        once: false,
        mirror: false
        });
    }
    $(document).ready(function() {
        aos_init();
    });
})(jQuery);


// function filter
$(document).ready(function () {
    $(".category").click(function() {
        const category = $(this).attr('id');
        if(category == 'semua'){
            $('.sampah').addClass('hide');
            setTimeout(function() {
                $('.sampah').removeClass('hide');
            }, 300);
        }else{
            $('.sampah').addClass('hide');
            setTimeout(function() {
                $('.' + category).removeClass('hide');
            }, 300);
        }
    });
});


// function page active
$(document).ready(function(){
    $('#icons a').on('click', function(){
        $("#icons a").removeClass("active-icon");
        $(this).addClass("active-icon");
    })
})

// function alert

const pesan = $('#flashData').data('flashdata');
if(pesan){
    Swal.fire(
        '',
        pesan,
        'success'
    )
}

$('.tombolHapus').on('click', function(e) {
    e.preventDefault();
    const linkAja = $(this).attr('href')
    Swal.fire({
    title: 'kamu yakin?',
    text: "Sampah akan dihapus dari keranjang",
    imageUrl: "../img/icon/warning.png",
    imageWidth: 60,
    imageHeight: 60,
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'hapus data'
    }).then((result) => {
    if (result.isConfirmed) {
        document.location.href = linkAja;
        Swal.fire(
        'berhasil',
        'sampah berhasil di hapus',
        'success'
    )
    }
})

});


const chekout = $("#chekout").data('chekout');
if(chekout){
    Swal.fire({
    title: chekout,
    text: "tunggu driver kami jemput sampah anda",
    imageUrl: "../img/icon/chec.png",
    imageWidth: 150,
    imageHeight: 150,
    });
}

const maaf = $("#maaf").data('maaf');
if(maaf){
    Swal.fire({
    title: maaf,
    text: "",
    imageUrl: "../img/icon/x.svg",
    imageWidth: 100,
    imageHeight: 100,
    });
}


// function navbar
$("li .active_icon").on("click", function() {
    $("li .active_icon").removeClass('kuy');
    $(this).addClass('kuy');
});


$('.logout').on('click', function(e) {
    e.preventDefault();
    const linkAja = $(this).attr('href')
    Swal.fire({
    title: 'kamu yakin?',
    text: "",
    imageUrl: "../img/icon/warning.png",
    imageWidth: 60,
    imageHeight: 60,
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Log out'
    }).then((result) => {
    if (result.isConfirmed) {
        document.location.href = linkAja;
    }
});
});

$("#tarikBerapa").on("keyup", function(){
    const tarik = document.getElementById("tarikBerapa");
    tarik.value = convertRupiah(this.value); 
});

const hapus = $('#hapus').data('hapus');
if(hapus){
    Swal.fire(
        '',
        hapus,
        'success'
    )
}

const gagal = $('#gagal').data('gagal');
if(gagal){
    Swal.fire({
    title: gagal,
    text: "",
    imageUrl: "../img/icon/x.svg",
    imageWidth: 100,
    imageHeight: 100,
    });
}