<?= $this->extend('TemplateView') ?>
 
<?= $this->section('content') ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
      </div>
      <div class="col-lg-7">
        <div class="box">
          <h1>Form Checkout</h1>
          <!-- <p class="lead">Not our registered customer yet?</p>
                  <p>With registration with us new world of photography, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p> -->
          <form action="<?php echo base_url('/CheckoutController/checkoutCart');?>" method="post">
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input class="form-control" type="text" name="nama" placeholder="Nama kamu" />
            </div>
              
            <div class="form-group">
              <label for="nomorhp">Nomor HP</label>
              <input class="form-control" type="tel" name="nomorhp" placeholder="Nomor HP" />
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input class="form-control" type="text" name="alamat" placeholder="Alamat" />
            </div>

            <div class="form-group">
              <label for="kecamatan">Kecamatan</label>
              <input class="form-control" type="text" name="kecamatan" placeholder="Kecamatan" />
            </div>

            <div class="text-center">
                <button type="submit" name="register" class="btn btn-primary"><i class="fa fa-chevron-right"></i>Lanjutkan</button>
            </div>
          </form>
        </div>
      </div>      
    </div>
  </div>
  <br><br><br><br>
<?= $this->endSection() ?>