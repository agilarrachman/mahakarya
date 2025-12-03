<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
  </div>
  <div class="mb-3">
    <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/DataPegawai/tambah_data') ?>"><i class="fas fa-plus"></i> Tambah Pegawai</a>
    <a class="btn btn-sm btn-outline-primary" target="_blank" href="<?php echo base_url('admin/DataPegawai/cetak') ?>"><i class="fas fa-print"></i> Cetak Master Pegawai</a>
  </div>
  <?php echo $this->session->flashdata('pesan') ?>
</div>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">NIK</th>
              <th class="text-center">Nama Pegawai</th>
              <th class="text-center">Jenis Kelamin</th>
              <th class="text-center">Jabatan</th>
              <th class="text-center">Tanggal Masuk</th>
              <th class="text-center">Status</th>
              <th class="text-center">Hak Akses</th>
              <th class="text-center">Photo</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($pegawai as $p) : ?>
              <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $p->nik ?></td>
                <td class="text-center"><?php echo $p->nama_pegawai ?></td>
                <td class="text-center"><?php echo $p->jenis_kelamin ?></td>
                <td class="text-center"><?php echo $p->jabatan ?></td>
                <td class="text-center"><?php echo $p->tanggal_masuk ?></td>
                <td class="text-center"><?php echo $p->status ?></td>
                <?php if ($p->hak_akses == '1') { ?>
                  <td>Admin</td>
                <?php } else { ?>
                  <td>Pegawai</td>
                <?php } ?>
                <td class="text-center">
                  <?php
                  $photo_path = '';
                  $photo_file = FCPATH . 'photo/' . $p->photo;
                  if (!empty($p->photo) && file_exists($photo_file)):
                    $photo_path = base_url('photo/' . $p->photo) . '?v=' . filemtime($photo_file);
                  ?>
                    <img src="<?php echo $photo_path; ?>"
                      alt="<?php echo $p->nama_pegawai; ?>"
                      class="img-thumbnail rounded-circle"
                      style="width: 50px; height: 50px; object-fit: cover; border: 2px solid #dee2e6;"
                      onerror="this.src='<?php echo base_url('assets/img/avatar.svg'); ?>'">
                  <?php else: ?>
                    <img src="<?php echo base_url('assets/img/avatar.svg'); ?>"
                      alt="No Photo"
                      class="img-thumbnail rounded-circle"
                      style="width: 50px; height: 50px; object-fit: cover; border: 2px solid #dee2e6; opacity: 0.5;">
                  <?php endif; ?>
                </td>

                <td>
                  <center>
                    <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/DataPegawai/update_data/' . $p->id_pegawai) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/DataPegawai/delete_data/' . $p->id_pegawai) ?>"><i class="fas fa-trash"></i></a>
                  </center>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>