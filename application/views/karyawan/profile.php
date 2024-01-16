

  <main id="main" class="main">

<div class="pagetitle">
  <h1>Profile</h1>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="<?= base_url('assets/img/').$user['image']?>" alt="Profile" class="rounded-circle">
          <h2><?= $user['name']; ?></h2>
          <h3><?= $user['email']; ?></h3>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>
          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">Moto Hidup</h5>
              <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                <div class="col-lg-9 col-md-8"><?= $user['name']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8"><?= $user['email']; ?></div>
              </div>
              <!-- <div class="row">
                <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                <div class="col-lg-9 col-md-8"><?= $data_karyawan['tgl_lahir']; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Unit Ruangan</div>
                <div class="col-lg-9 col-md-8"><?= $data_karyawan['unit']; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Jabatan</div>
                <div class="col-lg-9 col-md-8"><?= $data_karyawan['jabatan']; ?></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Pendidikan Terakhir</div>
                <div class="col-lg-9 col-md-8"><?= $data_karyawan['pendidikan_terakhir']; ?></div>
              </div> -->
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Date Created</div>
                <div class="col-lg-9 col-md-8"><?= date('d F Y', $user['datecreated']); ?></div>
              </div>

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->