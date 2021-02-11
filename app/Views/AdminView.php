<?= $this->extend('TemplateView') ?>
 
<?= $this->section('content') ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <center><h1>Daftar rincian penjualan</h1><br></center>
          <p align="center"><a href="/ExportToExcel"><button>Export to Excel</button></a></p>
          <p align="center"><a href="/ExportToPDF"><button>Export to PDF</button></a></p>
          <table class="table" width=100%>
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
              </td>
              <td align="center">Rp <?php echo number_format($a->t_ongkir,0,',','.')?> </td>
              <td align="center">Rp <?php echo number_format($a->total,0,',','.')?> </td>
            </tr>
            <?php 
              }
            }
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
<?= $this->endSection() ?>