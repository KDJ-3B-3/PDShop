<?php
  $png = file_get_contents("logo.png");
  $pngbase64 = base64_encode($png);
?>

<!-- tambahkan table -->
<html>
    <style>    
            table{
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width:100%;
            }
            td {
                border: 1px solid #dddddd;
                padding: 8px;
                font-size: 0.8em;
            }
            th {
                border: 1px solid #dddddd;
                padding: 8px;
            }
            tr#t01{
                background-color: #869aaa;
            }
            td#t01{
                width 20%;
            }
            td#t02{
                align: center;
            }
    </style>
    <body>
      <center><img src='data:image;base64,<?= $pngbase64;?>' width="120px"/><br><h2>Laporan Penjualan PDShop</h2></center>
        <table width=100%>
            <tr id="t01" align="center">
              <th> No </th>
              <th> ID Penjualan </th>
              <th> Tanggal </th>
              <th colspan="2"> Rincian Pembeli </th>
              <th> Ongkir </th>
              <th> Total Harga </th>
            </tr>
            <?php
              $no=0;
              foreach($items as $a){ 
              if ($a->t_ongkir > 4) {
                $no++;
            ?>
            <tr>
              <td align="center"><b><?php echo $no?></b></td>
              <td align="center"><b><?php echo $a->IDpenjualan?></b></td>
              <td align="center"><?php echo $a->tanggal?></td>
              <td width="17%">
                <b>Nama Pembeli</b><br>
                <b>Nomor HP</b><br> 
                <b>Alamat</b><br>
                <!-- <b>Kecamatan</b><br> -->
              </td>
              <td align="left">
                  <?php echo $a->nama?><br> 
                  <?php echo $a->hp?><br>
                  <?php echo $a->alamat?><br>
                  <!-- kecamatan<br> -->
              </td>
              <td align="center">Rp <?php echo number_format($a->t_ongkir,0,',','.')?> </td>
              <td align="center">Rp <?php echo number_format($a->total,0,',','.')?> </td>
            </tr>
            <?php 
              }
            }
            ?>
        </table>
    </body>
</html>