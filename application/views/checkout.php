<?php $this->load->view('header'); ?>

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
                                <li class="active"><a href="#create" data-toggle="tab"><i class="fa fa-edit"></i><br> Address</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                 </li>
                                 <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                 </li>
                                 <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                 </li>
                            </ul>
                            <div class="tab-content tab-content-inverse">
                                <div class="tab-pane" id="create">
								<form method="post" action="<?php echo base_url('CheckoutController/createTesti'); ?>">
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

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>

<?php $this->load->view('footer');  ?>