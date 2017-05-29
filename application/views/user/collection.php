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
                        <h1>Our Collection</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Collection</a>
                            </li>
                            <li><?php echo $status; ?></li>
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

                    <div class="col-sm-3">

                        <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked category-menu">
                                    <li  class="<?php echo $class; ?>"><a href="<?php echo base_url('CollectionController'); ?>">All Item<span class="badge pull-right"><?php echo $jumlahAll; ?></span></a></li>
                                    <li class="<?php echo $classre; ?>">
                                        <a href="<?php echo base_url('CollectionController/indexto/reguler'); ?>">Reguler<span class="badge pull-right"><?php echo $jumlahReguler; ?></span></a>
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
                                        <a href="<?php echo base_url('CollectionController/indexto/custom'); ?>">Custom  <span class="badge pull-right"><?php echo $jumlahCustom; ?></span></a>
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

                       

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
            _________________________________________________________ -->

                    <div class="col-sm-9">

                        <p class="text-muted lead">Berikut adalah product kami!</p>

                        <div class="row products">
                            <?php foreach ($product as $p) {?>
                            

                                <div class="col-md-4 col-sm-6">
                                <div class="box-image">
                                    <div class="image">
                                        <a href="shop-detail.html">
                                            <img src="<?php echo base_url('./../img/'). $p['kode_barang']. '.jpg'; ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                     <div class="text">
                                        <p class="buttons">
                                            <a href="<?php echo base_url('DetailController/index/'). $p['kode_barang']; ?>"  class="btn btn-template-primary">View detail</a>
                                            <br> 
                                            <br>    
                                            <form method="post" action="<?php echo base_url('CartController/addToCart'); ?>">
                                            <input name="name" type="text" value="<?php echo $p['nama_barang']; ?>" hidden>
                                            <input name="price" type="text" value="<?php echo $p['harga']; ?>" hidden>
                                            <input name="id" type="text" value="<?php echo $p['kode_barang']; ?>" hidden>
                                                <button type="submit" class="btn btn-template-primary"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </form>
                                            
                                        </p>
                                    </div>
                                </div>
                                <div class="product">
                                    
                                    <!-- /.image -->
                                    <div class="text">
                                        <h3><a href="shop-detail.html"><?php echo $p['nama_barang']; ?></a></h3>
                                        <p class="price"> Rp. <?php echo $p['harga']; ?></p>
                                         <p><?php echo $p['deskripsi']; ?></p>
                    
                                    </div>
                                    <!-- /.text -->

                                    
                                    <!-- /.ribbon -->
                                </div>
                                <!-- /.product -->
                            </div>

                                <?php } ?>
                        </div>
                        <!-- /.products -->





                        <div class="pages">

                            <p class="loadMore">
                                <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
                            </p>

                            <ul class="pagination">
                                <li><a href="#">&laquo;</a>
                                </li>
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

<?php $this->load->view('footer'); ?>