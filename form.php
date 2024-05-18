<!doctype html>
<html lang="en">

<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>SELAMAT DATANG DI PROGRAM CRUD</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                    crossorigin="anonymous">

</head>

<body>
          <!-- form awal -->
          <h2 class="text-center p-5"><b>INPUTKAN DATA ANDA</b></h2>
          <form action="insert.php" method="post">
                    <div class="row ms-4">
                              <div class="col-6">
                                        <label class="form-label">Nim</label>
                                        <input type="text" class="form-control" name="nim">
                              </div>
                    </div>
                    <div class="row ms-4 mt-3">
                              <div class="col-6">
                                        <label class="form-label"> Nama</label>
                                        <input type="text" class="form-control" name="nama">
                              </div>
                    </div>
                    <div class="row ms-4 mt-3">
                              <div class="col-6">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat">
                              </div>
                    </div>
                    <div class="row ms-4 mt-3">
                              <div class="col-6">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select class="form-select form-select-sm" aria-label="Small select example"
                                                  name="jkl">
                                                  <option selected>Pilih Jenis Kelamin</option>
                                                  <option value="1">PRIA</option>
                                                  <option value="2">WANITA</option>
                                        </select>
                              </div>
                    </div>
                    <div class="row ms-4 mt-3">
                              <div class="col-6">
                                        <label for="agama" class="form-label">Agama</label>
                                        <select class="form-select form-select-sm" aria-label="Small select example"
                                                  name="agama">
                                                  <option selected>Pilih Agama</option>
                                                  <option value="ISLAM">ISLAM</option>
                                                  <option value="KRISTEN PROTESTAN">KRISTEN PROTESTAN</option>
                                                  <option value="KRISTEN KHATOLIK">KRISTEN KHATOLIK</option>
                                                  <option value="BUDHA">BUDHA</option>
                                                  <option value="HINDU">HINDU</option>
                                                  <option value="KHONG HU CU">KHONG HU CU</option>
                                        </select>
                              </div>
                    </div>
                    <div class="row ms-4 mt-3">
                              <div class="col-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email">
                              </div>
                    </div>
                    <div class="row ms-4 mt-3">
                              <div class="col-6">
                                        <label for="pwd" class="form-label">pwd</label>
                                        <input type="text" class="form-control" name="pwd">
                              </div>
                    </div>
                    <button class="btn btn-success ms-5 mt-4"><b><i class="bi bi-floppy-fill"></i> Simpan</b></button>
          </form>
          <!-- form akhir -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                    crossorigin="anonymous"></script>
</body>

</html>