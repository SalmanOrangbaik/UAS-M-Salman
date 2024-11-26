<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center>
    <?php
  if(isset($_POST['proses'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tg = $_POST['TG'];
    $jabatan = $_POST['jabatan'];
    $bpjs = $_POST['BPJS'];
    $Lamker = $_POST['lamker'];
    $pinjaman = $_POST['pinjaman'];
    $status = $_POST['status'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];

      if ($bpjs == null){
           $bpjs = 0;
          }
      if ($pinjaman == null){
          $pinjaman = 0;
          }
      if ($cicilan == null){
          $cicilan = 0;
          }
      if ($infaq == null){
          $infaq = 0;
          }

      $gaji = "0";
      $bonus = "0";
  
      if ($jabatan == "Kepala Sekolah") {
          $gaji = 10000000;
        } elseif ($jabatan == "Wakasek") {
          $gaji = 7000000;
        } elseif ($jabatan == "Guru") {
          $gaji = 5000000;
        } elseif ($jabatan == "Karyawan") {
          $gaji = 2500000;
        }

      if ($status == "Tetap"){
          $bonus = 1000000;
        } elseif ($status == "Kontrak") {
          $bonus = 0;
        }

  class Gaji{
    public $gajber;

    public function Ket($no2,$nama2,$unit2,$TG2,$jabatan2,$gaji2,$lamker2,$status2,$bonus2,$BPJS2,$pinjaman2,$cicilan2,$infaq2){
      $this->gajber = ($gaji2 + $bonus2) - ($BPJS2 + $pinjaman2 + $cicilan2 + $infaq2);
      ?>
      <div class="container mt-4">
        <div class="card" style="width: 49%">
          <div class="card-header">
           <b> <?php echo $nama2; ?> </b>
          </div>
          <h4 class=" mt-4"><b>Struk Gaji</b></h4>
          <div class="card-body">
            <table>
              <tr>
                <td>No</td>
                <td>:</td>
                <td><?php echo $no2; ?></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama2; ?></td>
              </tr>
              <tr>
                <td>Unit Pendidikan</td>
                <td>:</td>
                <td><?php echo $unit2; ?></td>
              </tr>
              <tr>
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><?php echo $TG2; ?></td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $jabatan2; ?></td>
              </tr>
              <tr>
                <td>Gaji</td>
                <td>:</td>
                <td><?php echo number_format($gaji2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>Lama Kerja</td>
                <td>:</td>
                <td><?php echo $lamker2; ?></td>
              </tr>
              <tr>
                <td>Status Kerja</td>
                <td>:</td>
                <td><?php echo $status2; ?></td>
              </tr>
              <tr>
                <td>Bonus</td>
                <td>:</td>
                <td><?php echo number_format($bonus2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>BPJS</td>
                <td>:</td>
                <td><?php echo number_format($BPJS2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>Pinjaman</td>
                <td>:</td>
                <td><?php echo number_format($pinjaman2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>Cicilan</td>
                <td>:</td>
                <td><?php echo number_format($cicilan2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>Infaq</td>
                <td>:</td>
                <td><?php echo number_format($infaq2 ,0, '.', '.'); ?></td>
              </tr>
              <tr>
                <td>Gaji Bersih</td>
                <td>:</td>
                <td><?php echo number_format($this->gajber ,0, '.', '.'); ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <?php
    }
  }

  $cetak = new Gaji();
  echo $cetak->Ket($no,$nama,$unit,$tg,$jabatan,$gaji,$Lamker,$status,$bonus,$bpjs,$pinjaman,$cicilan,$infaq);
}
?>
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