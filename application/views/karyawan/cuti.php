  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pengajuan Cuti</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Riwayat Pengajuan Cuti</h5>
              <div class="position-absolute top-0 end-0">
                <button type="button" class="btn btn-success btn-xs" method="POST">
                <a href="<?= base_url('karyawan/tambah_cuti'); ?>">
              Tambah Data+ </a><span class="glyphicon glyphicon-plus"></span></button></div>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Awal Cuti</th>
                    <th scope="col">Lama Cuti</th>
                    <th scope="col">Alamat Cuti</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
              $no = 1;
              foreach ($cuti as $ct) :?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $ct['nama']; ?></td>
                <td><?= $ct['tanggal_cuti']; ?></td>
                <td><?= $ct['lama_cuti']; ?></td>
                <td><?= $ct['alamat_cuti']; ?></td>
                <td><?= $ct['keterangan']; ?></td>
                <td class="text-center" onclick="javascript: return confirm('Apakah Yakin Dihapus?')">
                  <?php echo anchor('karyawan/delete_cuti/'. $ct['id_cuti'], '<i class="btn btn-danger">Delete</i>'); ?>
                </td>
                <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal<?= $ct['id_cuti']; ?>" data-bs-whatever="@mdo">Edit</button></td>
                <div class="modal fade" id="Modal<?= $ct['id_cuti']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="<?php echo base_url().'karyawan/update_cuti';?>">
                        <div class="mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="hidden" class="form-control" id="id_cuti" name="id_cuti" value="<?= $ct['id_cuti']; ?>">
                          <input type="text" class="form-control" id="nama" name="nama" value="<?= $ct['nama']; ?>">
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Cuti</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal_cuti" name="tanggal_cuti" value="<?= $ct['tanggal_cuti']; ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputDate" class="col-sm-2 col-form-label">Lama Cuti</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="lama_cuti" name="lama_cuti" value="<?= $ct['lama_cuti']; ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputDate" class="col-sm-2 col-form-label">Alamat Cuti</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_cuti" name="alamat_cuti" value="<?= $ct['alamat_cuti']; ?>">
                          </div>
                        </div>
                        <div class="mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $ct['keterangan']; ?>">
                        </div>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                    </form>
                  </div>
                </div>
              </tr>
              <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->