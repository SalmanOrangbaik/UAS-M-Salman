<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
     <h2><center>UAS PRAKTIK RPL</center></h2>
    <div class="text-center">
        <img src="images (1).png" class="rounded" alt="...">
    </div>
    <h3> <center>PENGGAJIHAN <br> GURU/KARYAWAN YAYASAN ASSALAAM</center></h3>

      <center>
          <div class="card" style="width: 40rem;">
            <div class="card-header" align="left">
             <b>Data Penggajihan </b> 
            </div>
              <div class="card-body" align="left">
                <form action="hasil.php" method="post">
                <label for="">No</label>
                <input type="text" class="form-control" placeholder="No" name="no">
                <label for="" style="margin-top: 15px">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
                <label for="" style="margin-top: 15px">Unit Pendidikan</label>
                <select name="unit" id="" class="form-select">
                  <option value="">Pilih Unit Pendidikan</option>
                  <option value="TK">TK</option>
                  <option value="SD">SD</option>
                  <option value="MTS">MTS</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA">SMA</option>
                  <option value="SMK">SMK</option>
                  <option value="MA">MA</option>
                </select>
                <label for="" style="margin-top: 15px">Tanggal Gaji</label>
                <input type="date" class="form-control" name="TG">
                <table width="100%" align="center" style="margin-top: 15px">
                  <tr>
                    <td align="center" width="50%"><h5>Gaji</h5></td>
                    <td align="center"><h5>Potongan</h5></td>
                  </tr>
                  <tr>
                    <td>
                    <label for="">Jabatan</label>
                    <select name="jabatan" id="" class="form-select" style="width: 90%">
                      <option value="">Pilih Jabatan</option>
                      <option value="Karyawan">Karyawan</option>
                      <option value="Guru">Guru</option>
                      <option value="Wakasek">Wakasek</option>
                      <option value="Kepala Sekolah">Kepala Sekolah</option>
                    </select>
                    </td>
                    <td>
                      <label for="">BPJS</label>
                      <input type="number" class="form-control" name="BPJS" placeholder="BPJS">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label for="" style="margin-top: 15px">Lama Kerja</label>
                      <input type="text" class="form-control" name="lamker" style="width: 90%" placeholder="Lama Kerja">
                    </td>
                    <td>
                      <label for="" style="margin-top: 15px">Pinjaman</label>
                      <input type="number" placeholder="Pinjaman" name="pinjaman" class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label for="" style="margin-top: 15px">Status Kerja</label>
                      <select name="status" id="" class="form-select" style="width: 90%">
                        <option value="">Pilih Status Kerja</option>
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                      </select>
                    </td>
                    <td>
                      <label for="" style="margin-top: 15px">Cicilan</label>
                      <input type="number" name="cicilan" class="form-control" placeholder="Cicilan">
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <label for="" style="margin-top: 10px">Infaq</label>
                      <input type="number" name="infaq" placeholder="Infaq" class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center">
                      <input type="submit" style="margin-top: 10px" name="proses" value="proses" class="btn btn-primary">
                    </td>
                  </tr>
                </table>
                </form>
              </div>
          </div>


    
      </center>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
