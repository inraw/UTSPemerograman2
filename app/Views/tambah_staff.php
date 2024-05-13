<?=$this->extend('layout')?>
<?=$this->section('isi')?>
<form method="post" action="/staff/simpan">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Staff</label>
                      <input type="text" name="nama_staff" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Alamat Staff</label>
                      <input type="text"name="alamat_staff" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                      <input type="date"name="tanggal_lahir" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Status Staff</label>
                      <input type="text"name="status_staff" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
<?=$this->endSection()?>