<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="card">
      <div class="container-fluid">
        <form action="/suratmasuk/update/<?= $id_surat_masuk ?>" method="post" class="row g-3 ml-10 container justify-content-center">
          <div class="form-group col-md-6">
            <label for="no_surat">Nomor Surat</label>
            <input type="text" name="no_surat" class="form-control" id="no_surat" value="<?= $no_surat ?>" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="id_instansi">ID Instansi Asal Surat</label>
            <input type="text" name="id_instansi" class="form-control" id="id_instansi" value="<?= $id_instansi ?>" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="tgl_terima_surat">Tanggal Terima Surat</label>
            <input type="Date" name="tgl_terima_surat" class="form-control" id="tgl_terima_surat" value="<?= $tgl_terima_surat ?>" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="tgl_surat">Tanggal Surat</label>
            <input type="Date" name="tgl_surat" class="form-control" id="tgl_surat" value="<?= $tgl_surat ?>" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="isi_surat">Isi Surat</label>
            <textarea class="form-control" name="isi_surat" aria-label="With textarea" id="isi_surat" value="<?= $isi_surat ?>" autocomplete="off"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="keterangan_surat">Keterangan Surat</label>
            <textarea class="form-control" name="keterangan_surat" aria-label="With textarea" id="keterangan_surat" value="<?= $keterangan_surat ?>" autocomplete="off"></textarea>
          </div>
          <button type="submit" class="btn btn-primary col-md-4 mb-3">Submit</button>
        </form>
      </div>
    </div>
  </section>
</div>