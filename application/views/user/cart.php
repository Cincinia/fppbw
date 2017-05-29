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
                                <li class="dropdown use-yamm yamm-fw ">
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
                                 <li class="dropdown use-yamm yamm-fw active">
                                    <a href="<?php echo base_url('CartController'); ?>" ><i class="fa fa-cart-arrow-down" style="color:purple; font-size:30px;"></i></i><span class="badge pull-right"><?php echo $jumlahbarang; ?></span></a>
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
                    <div class="col-md-6">
                        <h1>Shopping cart</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Shopping cart</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted lead">You currently have <?php echo $jumlahbarang; ?> item(s) in your cart.</p>
                    </div>


                    <div class="col-md-9 clearfix" id="basket">

                        <div class="box">


                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Nama Produk</th>
                                                <th>Jumlah</th>
                                                <th>Harga Satuan</th>
                                                <th>Diskon</th>
                                                <th colspan="2">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        	<?php 
                                        	$total = 0;
                                        	foreach ($data as $d) {?>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <img src="<?php echo base_url('./../img/'). $d['id']. '.jpg' ?>" alt="White Blouse Armani">
                                                    </a>
                                                </td>
                                                <td><a href="#"><?php echo $d['name']; ?></a>
                                                </td>
                                                <td>
                                                	<form method="post" action="<?php echo base_url('CartController/update/'); ?>">
                                                	<input type="text" name="rowid" value="<?php echo $d['rowid']; ?>" hidden>
                                                    <input  type="number" id="jumlah" name="jumlah" value="<?php echo $d['qty']; ?>" class="form-control">
                                                </td>
                                                <td><?php echo $d['price']; ?></td>
                                                <td>Rp. 0.00</td>
                                                <td><?php echo $d['subtotal']; ?></td>
                                                <?php $total = $d['subtotal'] + $total; ?>
                                                <td><a href="<?php echo base_url('CartController/remove/'). $d['rowid']; ?>"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            	<?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th colspan="2"><?php echo $total; ?></th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <!-- /.table-responsive -->

                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('CollectionController'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-refresh"></i> Update cart</button>
                                        </form>
                                                                               
                                    </div>
                                </div>


                        </div>
                        <!-- /.box -->

                        

                    </div>
                    <!-- /.col-md-9 -->

                    <div class="col-md-3">
                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Order summary</h3>
                            </div>
                            <p class="text-muted">Berikut adalah harga dari barang yang Anda beli, biaya pengiriman dan biaya transaksi tergantung dari 
                            metode yang Anda pilih dan akan diinfokan tagihan akhirnya melalui email.</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Order subtotal</td>
                                            <th><?php echo $total; ?></th>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <th><?php echo $total; ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>




                    </div>
                    <!-- /.col-md-3 -->

                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
<?php $this->load->view('footer'); ?>