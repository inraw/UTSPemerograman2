<?=$this->extend('layout')?>
<?=$this->section('isi')?>
<form method="post" action="/dosen/simpanEdit/<?= $dosen['id_dosen'] ?>">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Dosen</label>
                      <input type="text" value="<?= $dosen['nama_dosen'] ?>" name="nama_dosen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Alamat Dosen</label>
                      <input type="text" value="<?= $dosen['alamat_dosen'] ?>" name="alamat_dosen" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                      <input type="date" value="<?= $dosen['tanggal_lahir'] ?>" name="tanggal_lahir" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Matkul Dosen</label>
                      <input type="text" value="<?= $dosen['matkul_dosen'] ?>" name="matkul_dosen" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
<?=$this->endSection()?>