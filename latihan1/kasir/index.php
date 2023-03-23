<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi Kasir Sederhana</title>
</head>
<body>
  <h1>Aplikasi Kasir Sederhana</h1>
  <form method="post" action="proses.php">
    <table>
      <tr>
        <td>Item</td>
        <td>Harga</td>
        <td>Jumlah</td>
      </tr>
      <tr>
        <td>Item 1</td>
        <td>Rp10.000</td>
        <td><input type="number" name="jumlah_item1" min="0"></td>
      </tr>
      <tr>
        <td>Item 2</td>
        <td>Rp20.000</td>
        <td><input type="number" name="jumlah_item2" min="0"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="submit" value="Hitung Total"></td>
      </tr>
    </table>
  </form>
</body>
</html>
