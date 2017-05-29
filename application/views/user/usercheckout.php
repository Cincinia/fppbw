<?php $this->load->view('user/header'); ?>
<div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="<?php echo base_url(); ?>">
                                <h3>Queenfie Olshop</h3>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right ">
                                <li class="dropdown ">
                                    <a href="<?php echo base_url(); ?>" >Home</a>
                                    
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="<?php echo base_url(); ?>assets/img/anu.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Reguler</h5>
                                                        <ul>
                                                            <li><a href="<?php echo base_url('CollectionController/indexto/topi'); ?>">Topi</a>
                                                            </li>
                                                            <li><a href="<?php echo base_url('CollectionController/indexto/baju'); ?>">Baju</a>
                                                            </li>
                                                            <li><a href="<?php echo base_url('CollectionController/indexto/tas'); ?>">Tas</a>
                                                            </li>
                                                            <li><a href="<?php echo base_url('CollectionController/indexto/sepatu'); ?>">Sepatu</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Bisa Custom</h5>
                                                        <ul>
                                                            <li><a href="<?php echo base_url('CollectionController/indexto/topicustom'); ?>">Topi Baseball</a>
                                                            </li>
                                                            <li><a href="<?php echo base_url('CollectionController/indexto/tascustom'); ?>">Sling Bag & Ransel</a>
                                                            </li>
                                                            <li><a href="<?php echo base_url('CollectionController/indexto/kaos'); ?>">Kaos</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="<?php echo base_url('TestimoniController'); ?>" >Testimoni</a>
                                </li>
                                 <li class="dropdown use-yamm yamm-fw  active">
                                    <a href="<?php echo base_url('CartController'); ?>" ><i class="fa fa-cart-arrow-down" style="color:purple; font-size:30px;"></i><span class="badge pull-right"><?php echo $jumlahbarang; ?></span></a>
                                </li>

                            </ul>


                        </div>
                        <!--/.nav-collapse -->



                        
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>
 <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Checkout - Address</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Checkout - Address</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                  <div class="col-md-9 clearfix" id="checkout">
						<div class="box tabs">
                            <ul class="nav nav-pills nav-justified">
                                <li class="<?php echo $class1; ?>"><a href="<?php echo base_url('CheckoutController/index/1'); ?>"><i class="fa fa-edit"></i><br>Detail Order</a>
                                </li>
                                 <li class="<?php echo $class4; ?>"><a href="<?php echo base_url('CheckoutController/index/4'); ?>"><i class="fa fa-eye"></i><br>Order Review</a>
                                 </li>
                            </ul>
                            <div class="tab-content tab-content-inverse">
                                <div class="tab-pane <?php echo $class1; ?>" id="create">
								<form method="post" action="<?php echo base_url('CheckoutController/addOrder/'); ?>">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="firstname">Fullname</label>
                                                <input type="text" class="form-control" id="fullname" name="name" value="<?php echo $data[0]['name']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" value="<?php echo $data[0]['address']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" name="city" value="<?php echo $data[0]['city']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="zip">ZIP</label>
                                                <input type="text" class="form-control" id="zip" name="postcode" value="<?php echo $data[0]['postcode']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <input type="text" class="form-control" id="country" name="country" value="<?php echo $data[0]['country']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $data[0]['email']; ?>">
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <div class="form-group">
                                                <label for="phone">Telephone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $data[0]['phone']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                        
                                    
                                </div>

                                <div class="content">
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6"><h4>Metode Pengiriman</h4></div>
                                    
                                </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="box shipping-method same-height">

                                                <h4>Go-Jek</h4>
                                                <img class= "img-responsive" src="<?php echo base_url('assets/img/gojek.png'); ?>">
                                                <p>Dikirim dengan sangat cepat melalui framework Go-Jek</p>

                                                <div class="box-footer text-center">
                                                    <input type="radio" name="delivery" value="gojek">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="box shipping-method same-height">

                                                <h4>Pos Indonesia</h4>
                                                <img class= "img-responsive" src="<?php echo base_url('assets/img/posindo.png'); ?>">
                                                <p>Dikirimkan melalui pos Indonesia</p>

                                                <div class="box-footer text-center">
                                                    <input type="radio" name="delivery" value="posindonesia">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4">
                                            <div class="box shipping-method same-heights">

                                                <h4>COD</h4>
                                                <img class= "img-responsive" src="<?php echo base_url('assets/img/cod.png'); ?>">
                                                <p>Bertemu langsung dengan kami. Tidak disarankan karena belum tentu bisa.</p>

                                                <div class="box-footer text-center">

                                                    
                                                    <input type="radio" name="delivery" value="cod">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="content">
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6"><h4>Metode Pembayaran</h4></div>
                                    
                                </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="box shipping-method same-height">

                                                <h4>BANK BNI</h4>
                                                <img class= "img-responsive" src="<?php echo base_url('assets/img/bni.png'); ?>">
                                                <p>Kirim ke rekening 64378493839 A.N Fixalis Oktavia<p>

                                                <div class="box-footer text-center">
                                                    <input type="radio" name="payment" value="bni">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4">
                                            <div class="box shipping-method same-heights">

                                                <h4>CASH</h4>
                                                <img class= "img-responsive" src="<?php echo base_url('assets/img/cod.png'); ?>">
                                                <p>Bertemu langsung dengan kami. Tidak disarankan karena belum tentu bisa.</p>

                                                <div class="box-footer text-center">

                                                    
                                                    <input type="radio" name="payment" value="cash">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="<?php base_url('CartController'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</a>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" name="result" value="result" class="btn btn-template-main">Submit Order<i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                	</div>
                                </form>

                                </div>


                        </div>
                        <!-- /.tabs -->                        
                    </div>
                    <!-- /.col-md-9 -->


                </div>

                 <div class="col-md-3">

                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Order summary</h3>
                            </div>
                            <p class="text-muted">Berikut adalah harga dari barang yang Anda beli, biaya pengiriman dan biaya transaksi tergantung dari metode yang Anda pilih dan akan diinfokan tagihan akhirnya melalui email.</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>

                                        <?php foreach ($cart as $c) {?>
                                         <tr>
                                            <td>Nama Barang</td>
                                            <th><?php echo $c['name']; ?></th>
                                        </tr>
                                         <tr>
                                            <td>Jumlah</td>
                                            <th><?php echo $c['qty']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Order subtotal</td>
                                            <th><?php echo $c['subtotal']; ?></th>
                                        </tr>
                                        <?php } ?>
                                        <tr class="total">
                                            <td>Total</td>
                                            <th><?php echo $totalprice; ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>

<?php $this->load->view('footer');  ?>