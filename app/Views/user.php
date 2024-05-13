<?=$this->extend('layout')?>
<?=$this->section('isi')?>
<a href="tambah_user" type="button" class="btn btn-primary m-1">Tambah Data</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach ($user as $row) : 
    ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $row['username'] ?></td>
      <td><?= $row['password'] ?></td>
      <td>
        <a href="/user/edit/<?= $row['id_user'] ?>" class="btn btn-warning btn-sm"><i class="ti ti-pencil"></i></a>
        <a href="/user/hapus/<?= $row['id_user'] ?>" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<?=$this->endSection()?>