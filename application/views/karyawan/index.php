<main id="main" class="main">

    <div class="pagetitle">
      <h1>Input Data</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pribadi</h5>

              <!-- General Form Elements -->
              <form method="POST" Action="<?= base_url(). 'karyawan/input_data';?>" enctype="multipart/form-data">
              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">NBM</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nbm" name="nbm">
                  </div>
                </div>
              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"id="name" name="name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="photo" name="photo">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control"id="email" name="email">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-5">
                    <input type="date" class="form-control"id="tgl_lahir" name="tgl_lahir">
                  </div>
                </div>
                <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" id="pendidikan_terakhir" name="pendidikan_terakhir">
                  <option selected>Open this select menu</option>
                  <option value="SMA Sederajat">SMA Sederajat</option>
                  <option value="D3">D3</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                </select>
              </div>
            </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"id="jabatan" name="jabatan">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Unit Ruangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"id="unit" name="unit">
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