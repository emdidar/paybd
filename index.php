<?php include 'inc/header.php';?>
	
	<div class="container-fluid">
	
		<div class="box">
			<div class="row">
				<div class="col-md-1 noticeBoard">
					<p>Notice: </p>
				</div>
            <?php
                $query="select autoId,noticeName from tbnoticeinfo";
                $selectData=$db->select($query);
                if($selectData)
                {
                    while($result=$selectData->fetch_assoc())
                    {

                ?>
				<div class="col-md-8 noticeBoard">
					<marquee behavior="left" direction="">
						<p><?php echo $result['noticeName']; ?></p>
					</marquee>
				</div>
            <?php 
                   }
                }
            ?>
				<div class="col-md-3">
					<img style="height:70px; width:280px;padding-top:8px;padding-right3px;" src="assets/images/ads/placeYourAdHear.gif" alt="Advertise With Us 70x280">
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">
			<div class="col-md-9">
                <div class="box">
                    <div class="clear">	</div>
                    <div class="radio">
                    	<label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio" checked>Buy
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio">Sell
                            </label>
                    	</label>
                    </div>

                    <!--<form action="exchange.php" method="POST" class="form-inline" role="form">-->
                    <div class="form-inline" role="form">
                    	<div class="form-group">
                            <select name="selectSend" id="selectIdSend" class="form-control">
                                <?php
                                $query="select autoId, vCurrencyName, image from tbcurrencyinfo order by vCurrencyName";
                                $selectData=$db->select($query);
                                if($selectData)
                                {
                                    while($result=$selectData->fetch_assoc())
                                    {
                                        ?>
                                        <option value="<?php echo $result['autoId']?>"><?php echo $result['vCurrencyName']?></option>
                                        <?php
                                    }
                                }
                                ?>

                            </select>

                    		<input type="text" class="form-control" name="vSendAmount" id="vSendAmount" placeholder="SEND">

                            <select name="selectReceive" id="selectIdReceive" class="form-control">
                                <?php
                                $query="select autoId, vCurrencyName, image from tbcurrencyinfo order by vCurrencyName";
                                $selectData=$db->select($query);
                                if($selectData)
                                {
                                    while($result=$selectData->fetch_assoc())
                                    {
                                        ?>
                                        <option value="<?php echo $result['autoId']?>"><?php echo $result['vCurrencyName']?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>

                            <input type="text" class="form-control" name="vReceiveAmount" id="inputReceive" placeholder="RECEIVE" readonly>

                            <button  class="btn btn-success" onclick="document.getElementById('demo').innerHTML = Date()">Calculate</button>
                            <button type="submit" class="btn btn-primary">Exchange</button>



                    	</div>
                        <div>
                            <label id="demo">Exchange rate: 1 BDT = 1 BTD </label>
                            <label style="margin-top: 2%;" id="demo">&nbsp;&nbsp;&nbsp; Reserve: 1 BTD</label>
                        </div>
                    </div>

                    <div class="clear">	</div>

                </div>


                <div class="clear">	</div>

                <!--Letest Exchange Start-->
				<div class="box">
					<div class="col-md-12 text-center">
						<h2>Letest Exchange</h2>
					</div>
					<div class="col-md-12">
						<!--<div class="row">-->
                    <!--<div class="col-md-8">-->
                    <table class="table table-striped table-hover table-bordered">
					 <thead>
						<tr>
							<th class="text-center">Send <i class="fa fa-arrow-up"></i></th>
							<th class="text-center">Receive <i class="fa fa-arrow-down"></i></th>
							<th class="text-center">Amount</th>

							<th class="text-center">Username</th>
							<th class="text-center">Date</th>
							<th class="text-center">Status</th>
						  </tr>
					</thead>
						  <tbody>
							   <tr>
									<td><img src="assets/images/icons/Bitcoin.png" width="30px" height="30">  </td>
									<td><img src="assets/images/icons/Dogecoin.png" width="30px" height="30"> </td>
									<td>60 USD</td>
									<td>mirazul704</td>
									<td><span>21/06/2018</span></td>
									<td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
								</tr>
								<tr>
									<td><img src="assets/images/icons/Dogecoin.png" width="30px" height="30">  </td>
									<td><img src="assets/images/icons/Dogecoin.png" width="30px" height="30"> </td>
									<td>3000 BDT</td>

									<td>esysbd</td>
									<td><span>21/06/2018</span></td>
									<td><span class="label label-warning"><i class="fa fa-clock-o"></i> Awaiting Confirmation</span></td>
								</tr>
								<tr>
									<td><img src="assets/images/icons/Dogecoin.png" width="30px" height="30">  </td>
									<td><img src="assets/images/icons/Dogecoin.png" width="30px" height="30"> </td>
									<td>1200 BDT</td>
									<td>ShibliMoon</td>
									<td><span>21/06/2018</span></td>
									<td><span class="label label-warning"><i class="fa fa-clock-o"></i> Awaiting Payment</span></td>
								</tr>
							 </tbody>
						 </table>
						<!--</div>-->
					   <!--</div>-->
					</div>
				</div>
				<!--Letest Exchange End-->
				
				<div class="clear text-center">
                    <img src="assets/images/ads/adv728x90.png" alt="adv">
                </div>

				<!--Testimonials Start-->
				<div class="box">
					<div class="col-md-12 text-center">
						<h2>Testimonial</h2>
					</div>
					<div class="col-md-12">
					  <div class="carousel slide" data-ride="carousel" id="quote-carousel">
						<!-- Bottom Carousel Indicators -->
						<ol class="carousel-indicators">
						  <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
						  <li data-target="#quote-carousel" data-slide-to="1"></li>
						  <li data-target="#quote-carousel" data-slide-to="2"></li>
						</ol>

						<!-- Carousel Slides / Quotes -->
						<div class="carousel-inner">
                          
                        <?php
                            $query="select autoId,userId,comment,image from tbtestimonial limit 3";
                            $selectData=$db->select($query);
                            if($selectData)
                            {
                                $i=0;
                                $active="";
                                while($result=$selectData->fetch_assoc())
                                {
                                    if($i==0)
                                    {
                                        $active="active";
                                    }
                                    else{
                                        $active="";
                                    }
                        ?>
                        <div class="item <?php echo $active; ?>">
							<blockquote>
							  <div class="row">
								<div class="col-sm-2 text-center">
								  <img class="img-circle" src="assets/images/user/<?php echo $result['image'];?>" style="width: 100px;height:100px;">
								</div>
								<div class="col-sm-10">
								  <p><?php echo $result['comment'];?></p>
								  <small><?php echo $result['userId'];?></small>
								</div>
							  </div>
							</blockquote>
						 </div>
                        <?php 
                            $i++;
                                }
                            }
                        ?>						  
						</div>

						<!-- Carousel Buttons Next/Prev -->
						<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
						<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
					  </div>                          
					</div>
				</div>
				<!--Testimonials End-->
				
				<div class="clear"></div>
				
				<!--Our Coustomer Info Start-->
				<!--slideanim-->
				<div class="box slideanim">
					<div class="col-md-12 text-center">
						<h2>Our Happy Client</h2>
					</div>
					<div class="col-md-12 counter" id="counter">
							<div class="main_counter_area">
								<div class="overlay p-y-3">
									<div class="main_counter_content text-center white-text wow fadeInUp">
										<div class="col-md-3 ">
											<div class="single_counter p-y-2 m-t-1">
												<i class="fa fa-users m-b-1"></i>
												<h2 class="statistic-counter">100</h2>
												<p>Total Client</p>
											</div>
										</div>
										<div class="col-md-3">
											<div class="single_counter p-y-2 m-t-1">
												<i class="fa fa-arrow-down m-b-1"></i>
												<h2 class="statistic-counter">400</h2>
												<p>Total Send</p>
											</div>
										</div>
										<div class="col-md-3">
											<div class="single_counter p-y-2 m-t-1">
												<i class="fa fa-arrow-up m-b-1"></i>
												<h2 class="statistic-counter">312</h2>
												<p>Total Receive</p>
											</div>
										</div>
										<div class="col-md-3">
											<div class="single_counter p-y-2 m-t-1">
												<i class="fa fa-database m-b-1"></i>
												<h2 class="statistic-counter">480</h2>
												<p>Total Reserve</p>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
				<!--Our Coustomer Info End-->
				
			</div>
			<div class="col-md-3">
				<div class="box">
					<div class='col-md-12 text-center'>
						<h2>Track exchange</h2>
					</div>
					<div class='col-md-12 text-center'>
						<input type="text" class="form-control form_style_1 input-lg" id="bit_amount_receive" name="bit_amount_receive" placeholder="Type hear exchange id">
					</div>
					<div class="col-md-12 text-center"></div>
					<div class='col-md-12 text-center'>
						<button type="button" style="margin-top:5px;" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i> Track&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
					</div>
				</div>
				
				<div class="clear">	</div>
				
				<div class="box">
					<div class="row">
						<div class='col-md-12 text-center'>
						    <h2>Our Reserve</h2>
						</div>
                        <?php
                        $query="select image,vCurrencyName,dblAmount from tbcurrencyinfo a inner join tbcurrencyreserve b on a.autoId=b.iCurrencyId order by vCurrencyName";
                        $selectData=$db->select($query);
                        if($selectData)
                        {
                            while($result=$selectData->fetch_assoc())
                            {
                         ?>
						<div class="col-md-12" style="margin-bottom:10px; margin-left:10%; border-bottom: 1px solid #f5f5f5;">
							<img src="admin/<?php echo $result['image']?>" width="42px" height="42px" class="img-circle img-bordered pull-left">
							<span class="pull-left" style="margin-left:5px;">
								<span style="font-size:15px;font-weight:bold;"><?php echo $result['vCurrencyName']?></span><br/>
								<span class="text text-muted" style=" float: left;"><?php echo $result['dblAmount']?> </span>
							</span>
						</div>
						
						<br><br>
                                <?php
                            }
                         }
                         ?>
					</div>
				</div>
				
				<div class="clear"></div>
				
				<div class="box">
					<div class="row">
						<div class="col-md-12">
							<img style="height:300px; width:250px;padding-top:8px;" src="assets/images/ads/advertiseWithUs.gif" alt="Advertise With Us">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php include 'inc/footer.php';?>