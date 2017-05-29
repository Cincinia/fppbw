<?php $this->load->view('header'); ?>

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
                                <li class="dropdown use-yamm yamm-fw active">
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
                                 <li class="dropdown use-yamm yamm-fw">
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
                    <div class="col-md-7">
                        <h1><?php echo $product[0]['nama_barang']; ?></h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                        	<li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url('CollectionController'); ?>">Collection</a>
                            </li>
                            <li><a href="<?php echo base_url('CollectionController/indexto/').$product[0]['kategori']; ?>"><?php echo $status; ?></a>
                            </li>
                            <li><?php echo $product[0]['nama_barang']; ?>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
		    _________________________________________________________ -->

                    <div class="col-md-9">

                        <p class="lead"><?php echo $product[0]['deskripsi']; ?>
                        </p>
                        <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll ke bagian detail.</a>
                        </p>

                        <div class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="<?php echo base_url('./../img/'). $product[0]['kode_barang'] .'.jpg'; ?>" alt="" class="img-responsive">
                                </div>

                               
                                <!-- /.ribbon -->

                            </div>
                            <div class="col-sm-6">
                                <div class="box">

                                    

                                        <p class="price"><?php echo 'Rp.' . $product[0]['harga']; ?></p>

                                        <p class="text-center">
                                        <form method="post" action="<?php echo base_url('CartController/addToCart/'); ?>">
                                        	<input type="text" value="<?php echo $product[0]['harga']; ?>" name="price" hidden>
                                        	<input type="text" value="<?php echo  $product[0]['kode_barang']; ?>" name="id" hidden>
                                        	<input type="text" value="<?php echo  $product[0]['nama_barang']; ?>" name="name" hidden>
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                        </form>
                                        </p>

                                    
                                </div>

                                <div class="row" id="thumbs">
                                    <div class="col-xs-4">
                                        <a href="<?php echo base_url('./../img/'). $product[0]['kode_barang'] .'.jpg'; ?>" class="thumb">
                                            <img src="<?php echo base_url('./../img/'). $product[0]['kode_barang'] .'.jpg'; ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="box" id="details">
                            <p>
                                <h4>Detail</h4>
                                <p><?php echo $product[0]['deskripsi']; ?></p>
                                <h4>Bahan</h4>
                                <ul>
                                    <li><?php echo $product[0]['bahan']; ?></li>
                                </ul>
                                <h4>Stock Tersedia</h4>
                                <ul>
                                    <li><?php echo $product[0]['jumlah']; ?></li>
                                </ul>
                                 <blockquote>
                                    <p><em><?php echo $product[0]['kalimatpromosi'] ?></em>
                                    </p>
                                </blockquote>
                        </div>

                        <div class="box social" id="product-social">
                            <h4>Show it to your friends</h4>
                            <p>
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>


                        


                    </div>
                    <!-- /.col-md-9 -->


                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
		  _________________________________________________________ -->

                    <div class="col-sm-3">

                        <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked category-menu">
                                    <li  class="<?php echo $class; ?>"><a href="<?php echo base_url('CollectionController'); ?>">All Item</a></li>
                                    <li class="<?php echo $classre; ?>">
                                        <a href="<?php echo base_url('CollectionController/indexto/reguler'); ?>">Reguler</a>
                                        <ul>
                                            <li><a href="<?php echo base_url('CollectionController/indexto/topi'); ?>">Topi</a>
                                            </li>
                                            <li><a href="<?php echo base_url('CollectionController/indexto/tas'); ?>">Tas</a>
                                            </li>
                                            <li><a href="<?php echo base_url('CollectionController/indexto/sandal'); ?>">Sandal</a>
                                            </li>
                                            <li><a href="<?php echo base_url('CollectionController/indexto/sepatu'); ?>">Baju</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="<?php echo $classcust; ?>">
                                        <a href="<?php echo base_url('CollectionController/indexto/custom'); ?>">Custom</a>
                                        <ul>
                                            <li><a href="<?php echo base_url('CollectionController/indexto/topicustom'); ?>">Topi</a>
                                            </li>
                                            <li><a href="<?php echo base_url('CollectionController/indexto/tascustom'); ?>">Tas</a>
                                            </li>
                                            <li><a href="<?php echo base_url('CollectionController/indexto/kaoscustom'); ?>">Kaos</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                          
                        </div>

                        

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title clearfix">Colours</h3>
                                <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> <span class="hidden-sm">Clear</span></a>
                            </div>

                            <div class="panel-body">

                                <form>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> <span class="colour white"></span> White (14)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> <span class="colour blue"></span> Blue (10)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> <span class="colour green"></span> Green (20)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> <span class="colour yellow"></span> Yellow (13)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> <span class="colour red"></span> Red (10)
                                            </label>
                                        </div>
                                    </div>

                                    <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i> Apply</button>

                                </form>

                            </div>
                        </div>

                        <!-- *** MENUS AND FILTERS END *** -->

                        
                        <!-- /.banner -->
                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
<?php $this->load->view('footer'); ?>