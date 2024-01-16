<main id="main" class="main">

<div class="pagetitle">
  <h1>Tabel Karyawan</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Karyawan</h5>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">NBM</th>
                <th scope="col">Name</th>
                <th scope="col">Photo</th>
                <th scope="col">Email</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Pendidikan Terakhir</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Unit</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($karyawan as $kr) :?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $kr['nbm']; ?></td>
                <td><?= $kr['name']; ?></td>
                <td><img src="<?= base_url('upload/').$kr['photo'];?>" width="100" height="100"></td>
                <td><?= $kr['email']; ?></td>
                <td><?= $kr['tgl_lahir']; ?></td>
                <td><?= $kr['pendidikan_terakhir']; ?></td>
                <td><?= $kr['jabatan']; ?></td>
                <td><?= $kr['unit']; ?></td>
                <td class="text-center" onclick="javascript: return confirm('Apakah Yakin Dihapus?')">
                  <?php echo anchor('admin/delete/'. $kr['id_karyawan'], '<i class="btn btn-danger">Delete</i>'); ?>
                </td>
                <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal<?= $kr['id_karyawan']; ?>" data-bs-whatever="@mdo">Edit</button></td>
                <div class="modal fade" id="Modal<?= $kr['id_karyawan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="<?php echo base_url().'admin/update_karyawan';?>">
                      <div class="mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NBM</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nbm" name="nbm" value="<?= $kr['nbm']; ?>">
                        </div>
                        </div>
                        <div class="mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="hidden" class="form-control" id="id_karyawan" name="id_karyawan" value="<?= $kr['id_karyawan']; ?>">
                          <input type="text" class="form-control" id="name" name="name" value="<?= $kr['name']; ?>">
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                          <div class="col-sm-10">
                          <img src="<?= base_url('upload/').$kr['photo'];?>" width="100" height="100">
                            <input class="form-control" type="file" id="photo" name="photo" value="<?= $kr['photo'];?>">
                          </div>
                        </div>
                        <div class="mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" name="email" value="<?= $kr['email']; ?>">
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="ttl" value="<?= $kr['tgl_lahir']; ?>">
                          </div>
                        </div>
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
                        <div class="row mb-3">
                          <label for="inputDate" class="col-sm-2 col-form-label">Jabatan</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $kr['jabatan']; ?>">
                          </div>
                        </div>
                        <div class="mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Unit Ruangan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="unit" name="unit" value="<?= $kr['unit']; ?>">
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
              </div>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <!-- End Default Table Example -->

    </div>
  </div>
</section>

</main>
