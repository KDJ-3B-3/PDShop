<?= $this->extend('TemplateView') ?>
 
<?= $this->section('content') ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/Home');?>">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active">Shopping cart</li>
          </ol>
        </nav>
      </div>
        
      <!--
      *** PRODUCT VIEW ***
      _________________________________________________________
      -->
      <div id="basket" class="col-lg-12">
        <div class="box">
          <h1>Shopping cart</h1>
          <p class="text-muted"></p>
          <div class="table-responsive">
            <form method="post" action="<?php echo base_url('/CartController/updateCart');?>">
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Code</th>
                    <th colspan="2">Product</th>
                    <th>Quantity <input type="submit" value="Update"></th>
                    <th>Price/unit</th>
                    <th>Weight/unit(kg)</th>
                    <th>Sub Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($items) { ?>
                    <?php foreach ($items as $item) { ?>
                    <tr>
                      <td align="center"><?= $item['kodebrg'] ?></td>
                      <td><img src="<?php echo base_url('/img/'.$item['namafoto'].'.jpg');?>"></td>
                      <td><?= $item['namabrg'] ?></td>
                      <td align="center">
                        <input type="number" min="1" value="<?= $item['quantity'] ?>" name="quantity[]" class="form-control">
                      </td>
                      <td align="center">Rp<?php echo number_format($item['harga'],0,',','.'); ?></td>
                      <td align="center"><?= $item['berat'] ?></td>
                      <td align="center">Rp<?php echo number_format(($item['harga'] * $item['quantity']),0,',','.') ?></td>
                      <td>
                        <a href="<?php echo base_url('/RemoveItemFromCart/'.$item['kodebrg']); ?>" class="btnRemoveAction" ><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>
                  <?php
                      // $total = $total + ($item['harga'] * $item['quantity']);
                      }
                    }
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="6" style="text-align:right;">Total</th>
                    <th colspan="2">Rp<?php echo number_format($total,0,',','.'); ?></th>
                  </tr>  
                </tfoot>
              </table>
            </form>
          </div>
                  
          <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
            <div class="left">
              <a href="<?php echo base_url('/Home'); ?>" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a>
            </div>
            <div class="right">
              <!-- <button class="btn btn-outline-secondary"><i class="fa fa-refresh"></i> Update cart</button> -->
              <a href="<?php echo base_url('/RemoveCart'); ?>" class="btn btn-outline-secondary" onclick="return confirm('Are you sure?')"><i class="fa fa-refresh"></i>Hapus Daftar</a>
              <!-- <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></button> -->
              <a href="#" class="btn btn-primary">Checkout<i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      <!-- /.box-->
      </div>
    </div>
  </div>          
<br><br><br><br>
<?= $this->endSection() ?>