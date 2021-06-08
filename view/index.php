
<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'shopping-cart');

if (!$conn) {
    die ("Koneksi gagal. " . mysqli_connect_error()); // close koneksi
  }

  if (!isset($_GET['cari'])) {
    $query = mysqli_query($conn, "SELECT * FROM tb_produk");
  } else {
    $query = mysqli_query($conn, "SELECT * FROM tb_produk WHERE nama_produk LIKE '%" . $_GET['cari'] . "%'");
  }

  require_once 'header.php';

    if (isset($_SESSION['pesan'])) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              ' . $_SESSION['pesan'] . '
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>';

      unset($_SESSION['pesan']);
    }
    ?>

    <div class="container mt-5">

      <?php require_once 'cart.php'; ?>

      <div class="row mb-2">
        <div class="col">
          <h4>Daftar Produk</h4>
        </div>
        
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Pembelian</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody >

          <?php
          $no = 1;
          while ($dt = $query->fetch_assoc()) :
            ?>

            <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
              <input type="hidden" name="id_produk" value="<?= $dt['id']; ?>"></input>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $dt['nama_produk']; ?></td>
                <td><?= $dt['harga']; ?></td>
                <td><?= $dt['stok']; ?></td>
                <td width="106">
                  <input class="form-control form-control-sm" type="number" name="pembelian" value="1" min="1" max="<?= $dt['stok']; ?>"></td>
                  <td>
                    <button class="btn btn-primary btn-sm" type="submit" name="submit">
                      <i class="fa fa-shopping-cart"></i>
                    </button>
                  </td>
                </tr>
              </form>

            <?php endwhile; ?>

          </tbody>
        </table>

        <a href="laporan.php"><button class="btn btn-danger">Lihat Laporan</button></a>
      </div>
<style>
body{
  background-color: #ff96ad;
}</style>
<?php require_once 'footer.php'; ?>