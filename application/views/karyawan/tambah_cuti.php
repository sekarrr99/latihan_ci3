<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pengajuan Cuti</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cuti Reguler</h5>

              <!-- General Form Elements -->
              <form method="POST" Action="<?= base_url(). 'karyawan/input_cuti';?>" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"id="nama" name="nama" value="<?= $user['name']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Awal Cuti</label>
                  <div class="col-sm-5">
                    <input type="date" class="form-control"id="tanggal_cuti" name="tanggal_cuti">
                  </div>
                </div>
               <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Lama Cuti</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"id="lama_cuti" name="lama_cuti">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Alamat Cuti</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"id="alamat_cuti" name="alamat_cuti">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"id="keterangan" name="keterangan">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->