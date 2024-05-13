<?=$this->extend('layout')?>
<?=$this->section('isi')?>
<a href="/tambah_dosen" type="button" class="btn btn-primary m-1">Tambah Data</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Matkul</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach ($dosen as $row) : 
    ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $row['nama_dosen'] ?></td>
      <td><?= $row['alamat_dosen'] ?></td>
      <td><?= $row['tanggal_lahir'] ?></td>
      <td><?= $row['matkul_dosen'] ?></td>
      <td>
        <a href="/dosen/edit/<?= $row['id_dosen'] ?>" class="btn btn-warning btn-sm"><i class="ti ti-pencil"></i></a>
        <a href="/dosen/hapus/<?= $row['id_dosen'] ?>" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<?=$this->endSection()?>