<?= $this->extend('Template/AdminTemplate/head'); ?>

<?= $this->Section('content'); ?>

<div class="container">
    <h2 class="text-center text-uppercase ">Daftar Bank Sampah</h2>

    <div class="row justify-content-md-center">
        <form class="form-inline" id="formFilter" onchange="formFilter">
            <div class="form-group mx-sm-1 mb-2">
                <select class="form-control" name="tahun">
                    <option value="">- Jenis Sampah -</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                </select>
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <select class="form-control" name="kategori">
                    <option value="">- Semua Kategori -</option>
                    <option value="Sekolah">Sekolah</option>
                    <option value="Kampung">Kampung</option>
                    <option value="Kampus">Kampus</option>
                    <option value="Bisnis">Bisnis</option>
                    <option value="Instansi">Instansi</option>
                </select>
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <select class="form-control" name="kota">
                    <option value="">- Semua Kota -</option>
                    <option value="31.01">Administratif Kep Seribu</option>
                    <option value="31.71">Kodya Jakarta Pusat</option>
                    <option value="31.72">Kodya Jakarta Utara</option>
                    <option value="31.73">Kodya Jakarta Barat</option>
                    <option value="31.74">Kodya Jakarta Selatan</option>
                    <option value="31.75">Kodya Jakarta Timur</option>
                    <option value="33.01">Cilacap</option>
                    <option value="33.02">Banyumas</option>
                    <option value="33.03">Purbalingga</option>
                    <option value="33.04">Banjarnegara</option>
                    <option value="33.05">Kebumen</option>
                    <option value="33.06">Purworejo</option>
                    <option value="33.07">Wonosobo</option>
                    <option value="33.08">Magelang</option>
                    <option value="33.09">Boyolali</option>
                    <option value="33.10">Klaten</option>
                    <option value="33.11">Sukoharjo</option>
                    <option value="33.12">Wonogiri</option>
                    <option value="33.13">Karanganyar</option>
                    <option value="33.14">Sragen</option>
                    <option value="33.15">Grobogan</option>
                    <option value="33.16">Blora</option>
                    <option value="33.17">Rembang</option>
                    <option value="33.18">Pati</option>
                    <option value="33.19">Kudus</option>
                    <option value="33.20">Jepara</option>
                    <option value="33.21">Demak</option>
                    <option value="33.22">Semarang</option>
                    <option value="33.23">Temanggung</option>
                    <option value="33.24">Kendal</option>
                    <option value="33.25">Batang</option>
                    <option value="33.26">Pekalongan</option>
                    <option value="33.27">Pemalang</option>
                    <option value="33.28">Tegal</option>
                    <option value="33.29">Brebes</option>
                    <option value="33.71">Kota Magelang</option>
                    <option value="33.72">Kota Surakarta</option>
                    <option value="33.73">Kota Salatiga</option>
                    <option value="33.74">Kota Semarang</option>
                    <option value="33.75">Kota Pekalongan</option>
                    <option value="33.76">Kota Tegal</option>
                    <option value="34.01">Kulon Progo</option>
                    <option value="34.02">Bantul</option>
                    <option value="34.03">Gunung Kidul</option>
                    <option value="34.04">Sleman</option>
                    <option value="34.71">Kota Yogyakarta</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mx-sm-1 mb-2"><i class="fa fa-search"></i> Tampilkan</button>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12">
            <span id="loading"><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i></span>
            <table class="table" id="list_bank">
            </table>
            <div align="right" id="pagination_link"></div>
        </div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">username</th>
                    <th scope="col">berat</th>
                    <th scope="col">harga</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>