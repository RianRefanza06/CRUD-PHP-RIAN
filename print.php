<!doctype html>
<html lang="en">

<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>CETAK DATA</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                    crossorigin="anonymous">

          <!-- link icons boostrap -->
          <link rel="stylesheet"
                    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

          <?php
          include_once "DB.php";
          $sql = "SELECT * FROM mahasiswa";
          $q = mysqli_query($koneksi, $sql);
          ?>

          <!-- form data awal -->
          <h2 class="text-center m-5"><b>PRINT DATA</b></h2>
          <div class="table-responsive m-3">
                    <table class="table table-hover">
                              <thead>
                                        <tr>
                                                  <th>No</th>
                                                  <th>Nim</th>
                                                  <th>Nama</th>
                                                  <th>Alamat</th>
                                                  <th>Jenis Kelamin</th>
                                                  <th>Agama</th>
                                                  <th>Email</th>
                                                  <th>Pwd</th>
                                                  <!-- <th>Aksi</th> -->
                                        </tr>
                              </thead>
                              <tbody>
                                        <?php
                                        $no = 1;
                                        while ($data = mysqli_fetch_assoc($q)) {
                                                  ?>
                                                  <tr>
                                                            <td><?= $no ?></td>
                                                            <td><?= $data['nim'] ?></td>
                                                            <td><?= $data['nama'] ?></td>
                                                            <td><?= $data['alamat'] ?></td>
                                                            <td><?= $data['jkl'] ?></td>
                                                            <td><?= $data['agama'] ?></td>
                                                            <td><?= $data['email'] ?></td>
                                                            <td><?= $data['pwd'] ?></td>
                                                            
                                                  </tr>
                                                  <?php $no++;
                                        } ?>
                              </tbody>
                    </table>
                    <script type="text/javascript">
                              window.print();
                    </script>
          </div>
          <!-- form data end -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                    crossorigin="anonymous"></script>
</body>

</html>