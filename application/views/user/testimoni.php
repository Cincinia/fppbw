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
                                <li class="dropdown use-yamm yamm-fw active">
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
                        <h1>Testimoni</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li>Testimoni</li>
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
                                <li class=""><a href="#create" data-toggle="tab"><i class="fa fa-edit"></i><br> Create</a>
                                </li>
                                <li class="active"><a href="#view" data-toggle="tab"><i class="fa fa-file-archive-o"></i><br> View</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-inverse">
                                <div class="tab-pane" id="create">
								<form method="post" action="<?php echo base_url('TestimoniController/createTesti'); ?>">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="firstname">Firstname</label>
                                                <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $this->session->userdata('name'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="lastname">Lastname</label>
                                                <input type="text" class="form-control" id="lastname" name="lastname">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $this->session->userdata('email'); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="testimoni">Testimoni</label>
                                                <textarea rows="8" class="form-control" id="testimoni" name="pesan"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="score">Score</label>
                                                <input type="number" class="form-control" id="score" name="poin">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-template-main">Submit Testimoni<i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                	</div>
                                </form>

                                </div>


                                <div class="tab-pane active" id="view">
                                      <div id="content">
            						<div class="container">

					                <div class="row">
					                <div class="col-md-9 clearfix">
					                <section>
					                <div id="text-page">
					                <?php foreach ($testimoni as $testi) {?>
					                <h4><?php echo $testi['name'] ?></h4>
									<?php for ($i=0; $i < $testi['poin']; $i++) { ?>
                            		<i class="fa fa-star" style="color:yellow;"></i>
                                    <?php } ?>
					                <br>
					                <blockquote><?php echo $testi['pesan'] ?></blockquote>
					                <hr>
					                <?php } ?>
					                </div>
					                </section>
					                </div>
					                </div>
					                </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tabs -->                        
                    </div>
                    <!-- /.col-md-9 -->


                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

<?php $this->load->view('footer'); ?>