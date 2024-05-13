<?=$this->extend('layout')?>
<?=$this->section('isi')?>
<?=$this->extend('layout')?>
<?=$this->section('isi')?>
<a href="/tambah_staff" type="button" class="btn btn-primary m-1">Tambah Data</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Status</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach ($staff as $row) : 
    ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $row['nama_staff'] ?></td>
      <td><?= $row['alamat_staff'] ?></td>
      <td><?= $row['status_staff'] ?></td>
      <td><?= $row['tanggal_lahir'] ?></td>
      <td>
        <a href="/staff/edit/<?= $row['id_staff'] ?>" class="btn btn-warning btn-sm"><i class="ti ti-pencil"></i></a>
        <a href="/staff/hapus/<?= $row['id_staff'] ?>" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<?=$this->endSection()?>
<?=$this->endSection()?>