<?= $this->extend('Template/Template'); ?>

<?= $this->Section('content'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="http://localhost:8080/Utama">
            <i class="fas fa-chevron-left float-left mr-3 mt-2 mb-2"></i>
            <h6 class="mt-2 mb-2 ">Kembali</h6>
        </a>
    </div>
</nav>


<!-- content bantuan -->

<div class="container">
    <div class="accordion bantuan" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Sampah apa saja yang bisa dijual
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Runtah menerima lebih dari 30 jenis sampah yang akan didaur ulang, untuk detail jenis dan harga sampah bisa dilihat pada menu home aplikasi bank runtah.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Apa dampaknya bagi lingkungan?
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    Dengan mengumpulkan sampah yang didaur ulang, anda telah menyelamatkan dunia dari polusi karbon yang sulit untuk diselesaikan dalam ratusan tahun.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Apa layanan Runtah
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Kami melayani anda untuk menjualkan sampah anda saat di rumah atau di kantor hanya dengan menggunakan aplikasi kami dan pengepul akan menjemput sampah anda
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Apa yang saya Dapatkan?
                    </button>
                </h2>
            </div>
            <div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Uang akan anda dapatkan sebanyak sampah yang anda jual kepada kami.
                </div>
            </div>
        </div>
    </div>
</div>






<?= $this->include('Template/Navbar'); ?>

<?= $this->endSection(); ?>