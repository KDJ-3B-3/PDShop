<?= $this->extend('TemplateView') ?>
 
<?= $this->section('content') ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="main-slider" class="owl-carousel owl-theme">
          <div class="item"><img src="img/main-slider1.jpg" alt="" class="img-fluid"></div>
          <div class="item"><img src="img/main-slider2.jpg" alt="" class="img-fluid"></div>
          <div class="item"><img src="img/main-slider3.jpg" alt="" class="img-fluid"></div>
          <div class="item"><img src="img/main-slider4.jpg" alt="" class="img-fluid"></div>
        </div>
        <!-- /#main-slider-->
      </div>
    </div>

    <!--
    *** PRODUCT VIEW ***
    _________________________________________________________
    -->
    <div class="col-md-12">
      <div class="box" style="height:100px;">
        <div style="text-align:left;float:left;">
          <h1>Semua Barang</h1>
        </div>
      </div>
      <div class="row products">
        <?php foreach($items as $a){ 
            if ($a->stock > 0) {
        ?>
        <div class="col-md-3 col-6">
          <div class="product">
            <div class="flip-container">
              <div class="flipper">
                <div class="front">
                  <a href="#"><img src="<?php echo base_url('/img/'.$a->namafoto.'.jpg');?>" alt="" class="img-fluid"></a>
                </div>
                <div class="back">
                  <a href="#"><img src="<?php echo base_url('/img/'.$a->namafoto.'.jpg');?>" alt="" class="img-fluid"></a>
                </div>
              </div>
            </div> 
            <a href="#" class="invisible"><img src="<?php echo base_url('/img/'.$a->namafoto.'.jpg');?>" alt="" class="img-fluid"></a>
            <div class="text">
              <h3><a href="#"><?php echo $a->namabrg?></a></h3>
              <p align="center">Stok: <?php echo $a->stock?></p>
              <p align="center">Berat: <?php echo ($a->berat * 1000)?> gram</p>
              <p class="price">Rp<?php echo number_format($a->harga,0,',','.')?></p>
              <p class="buttons">
                <a href="<?php echo base_url('/AddToCart/'.$a->kodebrg); ?>" class="btn btn-primary">Beli</a>
              </p>
            </div>
          </div>
        <!-- /.product            -->
        </div>
        <?php
            }
          }
        ?>
      <!-- /.products-->
      </div> 
    </div>
  </div>
  <br><br><br><br>
<?= $this->endSection() ?>