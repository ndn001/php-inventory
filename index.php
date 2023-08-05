<!DOCTYPE html>
<html lang="en">
    <header class=""header-one-sticky-header">
    <div class="header-topbar">
        
    </div></header>
    <head>
        <div class="header">  
        <meta charset="UTF-8">
            <h1>SYSTEM INVENTORY LAB KOMPUTER</h1>
            </div>  
            <link rel="stylesheet" href="style-dashboard.css"/>
    </head>
<body>
        <!-- Navigation Bar -->
        <div class="navbar">
              <a href="dashboard.php">				DAFTAR PERANGKAT		</a>
              <a href="update.html">			    TAMBAH INVENTORI		</a>
        </div>
        <h2>DAFTAR PERANGKAT LAB KOMPUTER</h2>
        <h3>AKUN : NADIN FHATIA</h3>
        <h3>NPM  :202043579068</h3>

        <table class="data-table">
        <tr>
            <th>NO</th>    
            <th>JENIS</th>
            <th>MERK</th>
            <th>SERIAL NUMBER</th>
            <th>BARCODE</th>
            <th>HARGA</th>
            <th>TANGGAL PEMBELIAN</th>
        </tr>
        <!--MEMASUKKAN DATA DARI DATABASE KE LAMAN DASHBOARD.PHP-->
        <?php
            include "koneksi.php";
                    $query = "SELECT * FROM tbl_data";
                    $query = mysqli_query($conn, "SELECT * FROM tbl_data");
                    $no=1;
                    foreach ($query as $data)  {
                            echo "<tr> 
                                    <td>$no</td>
                                    <td>".$data['jenis']."</td>
                                    <td>".$data['merk']."</td>
                                    <td>".$data['serialnumber']."</td>
                                    <td>".$data['barcode']."</td>
                                    <td>".$data['harga']."</td>
                                    <td>".$data['date']."</td>
                                </tr>";
                                        $no++;
                                }
        ?> 
</table>
</body>
</html>
