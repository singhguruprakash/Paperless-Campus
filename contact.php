<?php
require('header.php');
?> 
<?php
if(isset($_REQUEST['save']))
{		
$fname=$_REQUEST['fname'];
	 $lname=$_REQUEST['lname'];
	$email=$_REQUEST['email'];
	 
	$phone=$_REQUEST['phone'];
	 $service=$_REQUEST['service'];
	$details=$_REQUEST['details'];
	 
 
		
		$query="insert into contact_response(ct_id,f_name,l_name,email,phone,service,details)Values(NULL,'".$fname."','".$lname."','".$email."','".$phone."','".$service."','".$details."',') ";
		
		if($conn->query($query))
		echo $query;
		{
			echo'<h4 class="text-center text-white">&quot;Your Response is Recorded.Successfully....&quot;</h4>';
		}
		 

}
?>
   	<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>Contact</h2>
						<ul class="page-title-link">
							<li><a href="#">Home</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get in touch</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="sr-only">Select Service</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                         <option value="12">Select Service</option>
                                        <option value="12">Crop Details</option>
                                        <option value="Web Design">soil Testing</option>
                                        <option value="Web Development">Area Survey</option>
                                        <option value="Graphic Design">Get in touch with expert</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
			
			<div class="row">
				<div class="col-md-offset-1 col-sm-10 col-md-10 col-sm-offset-1 pd-add">
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-location2"></i>
						</div>
						<h3>Headquarters</h3>
						<p>REC BANDA</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<h3>Email Us</h3>
						<p>info@yoursite.com
							<br>info@yoursite.com</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-headphones"></i>
						</div>
						<h3>Call Us</h3>
						<p>+91 3 8376 6284
							<br>+91 3 8376 6185</p>
					</div>
				</div>
			</div><!-- end row -->
			
        </div><!-- end container -->
    </div><!-- end section -->

    <?php
require('footer.php');
?> 