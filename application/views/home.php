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
                                <li class="dropdown active">
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
        <section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

            <div class="home-carousel">

                

                <div class="container">
                     <div class="homepage owl-carousel">
                        <?php foreach ($promo as $omo) {?>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="<?php echo base_url(). './../img/promo/'. $omo['kodepromo']. '.jpg'; ?>" alt="">
                                </div>
                                <div class="col-sm-5">
                                    <h1><?php echo $omo['judul']; ?></h1>
                                    <ul class="list-style-none">
                                        <li><?php echo $omo['deskripsi_singkat']; ?></li>
                                        <li><a href="http://instagram.com/queenfieolshop" target="_blank" class="btn btn-sm btn-template-main">Lihat Promo di Instagram</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>

        <section class="bar background-white no-mb">
            <div class="container" data-animate="fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h3>Best Seller</h3>
                        </div>

                        <div class="row portfolio">
                        <?php foreach ($product as $pro) {?>
                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url(). './../img/'. $pro['kode_barang']. '.jpg'; ?>" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="<?php echo base_url('DetailController/index/'. $pro['kode_barang']); ?>"><?php echo $pro['nama_barang']; ?></a></h3> 
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm"><?php echo $pro['deskripsi']; ?></p>
                                        <p class="buttons">
                                            <a href="<?php echo base_url('DetailController/index/'. $pro['kode_barang']); ?>" class="btn btn-template-transparent-primary">View details</a>
                                            <form method="post" action="<?php echo base_url('CartController/addToCart'); ?>">
                                            <input name="name" type="text" value="<?php echo $pro['nama_barang']; ?>" hidden>
                                            <input name="price" type="text" value="<?php echo $pro['harga']; ?>" hidden>
                                            <input name="id" type="text" value="<?php echo $pro['kode_barang']; ?>" hidden>
                                                <button type="submit" class="btn btn-template-transparent-primary"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </form>

                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->

                            </div>

                            <?php } ?>
                            </div>

                        <div class="see-more">
                            <a href="<?php echo base_url('CollectionController'); ?>" class="btn btn-template-main">See Our Collection</a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

         <section class="bar background-gray no-mb">
            <div class="container">

                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Bisa Custom</h2>
                    </div>

                    <p class="lead">Kami tawarkan harga khusus untuk custom secara besar-besaran! <span class="accent">Segera dapatkan!</span>
                    </p>

                    <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

                    <div class="row">
                         <?php foreach ($custom as $cus) {?>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                               
                                <div class="top">
                                    <div class="image">
                                        <img src="<?php echo base_url(). './../img/'. $cus['kode_barang']. '.jpg'; ?>" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="<?php base_url('DetailController/index/'. $cus['kode_barang']); ?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Tertarik</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="blog-post.html"><?php echo $cus['nama_barang']; ?></a></h4>
                                    <p class="intro"><?php echo $cus['deskripsi']; ?></p>
                                    <p class="read-more"><a href="<?php base_url('CollectionController/indexto/custom') ?>"  class="btn btn-template-main">Lihat Lengkap</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>
                        <?php } ?>
                    </div>
                    <!-- /.row -->

                    <!-- *** BLOG HOMEPAGE END *** -->

                </div>

            </div>
            <!-- /.container -->
        </section>

        <section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                        </div>
                        <h3 class="text-uppercase">Tertarik melihat produk lain?</h3>
                        <p class="lead">Queenfie memiliki banyak produk lain yang bisa langsung kamu pilih!</p>
                        <p class="text-center">
                            <a href="<?php echo base_url('CollectionController'); ?>" class="btn btn-template-transparent-black btn-lg">See Our Collection!</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Testimoni</h2>
                        </div>

                        <p class="lead">Berikut adalah testimoni asli dari pelanggan kami.</p>


                        <!-- *** TESTIMONIALS CAROUSEL ***
 _________________________________________________________ -->

                        <ul class="owl-carousel testimonials same-height-row">
                            <?php foreach ($testimoni as $testi) {?>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p><?php echo $testi['pesan']; ?></p>
                                        <p><?php for ($i=0; $i < $testi['poin']; $i++) { ?>
                                                <i class="fa fa-star" style="color:yellow;"></i>
                                                <?php } ?></p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <h5><?php echo $testi['name']; ?></h5>
                                            <p><?php echo $testi['timestamp']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                        <!-- /.owl-carousel -->

                        <!-- *** TESTIMONIALS CAROUSEL END *** -->
                    </div>

                </div>
            </div>
        </section>
        <!-- /.bar -->

        

       
        <!-- /.bar -->



        <!-- *** FOOTER ***
_________________________________________________________ -->
<?php $this->load->view('footer'); ?>