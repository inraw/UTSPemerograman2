<?=$this->extend('layout')?>
<?=$this->section('isi')?>
<form method="post" action="/user/simpanEdit/<?= $user['id_user'] ?>">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="text" value="<?= $user['username'] ?>" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Alamat Dosen</label>
                      <input type="text" value="<?= $user['password'] ?>" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
<?=$this->endSection()?>