    <?php
    require_once('connection.php');
    require('header.php');
    ?>
    <?php
if(isset($_REQUEST['save']))
{		
	if(empty($_REQUEST['f_name']))
	{
		echo'<h4 class="text-center text-white">Please Fill  Name!</h4>';
	}
	else
			if(empty($_REQUEST['f_mobile']))
	{
		echo'<h4 class="text-center text-white">Please Fill Mobile Number!</h4>';
	}
	else
if(empty($_REQUEST['f_pass']))
	{
		echo'<h4 class="text-center text-white">Please Fill Password!</h4>';
	}
	else
	if(empty($_REQUEST['f_dept']))
	{
		echo'<h4 class="text-center text-white">Please Fill Department!</h4>';
	}
	else
	if(empty($_REQUEST['f_type']))
	{
		echo'<h4 class="text-center text-white">Please select Type!</h4>';
	}else{
	
	$f_name=$_REQUEST['f_name'];
	 $f_pass=$_REQUEST['f_pass'];
	$f_mobile=$_REQUEST['f_mobile'];
	$f_dept=$_REQUEST['f_dept'];
	$f_type=$_REQUEST['f_type'];
		$query="insert into faculty(f_id,f_name,f_mobile,f_pass,f_dept,f_type)Values(NULL,'".$f_name."','".$f_mobile."','".$f_pass."','".$f_dept."','".$f_type."') ";
		if($conn->query($query))
		{
			echo'<h4 style="text-align:center;"><font color="green">&quot;Registration Successfully Compleated.&quot;</font></h4>';
		}
		else
		{
			echo'<h4 style="text-align:center;"><font color="#FF3300">Some Error Occured!</font></h4>';
		}
}
}
?>

<title>Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		color: #fff;
		background: lightblue;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{
        font-size: 16px;
        font-weight: bold;
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}
	.signup-form form a:hover{
		text-decoration: underline;
	}
</style>
</head>
<body>
<div class="signup-form">
    <form action="#" method="POST">
		<h2>Register</h2>
		<p class="hint-text">Create your account to access the notices of College.</p>
        <div class="form-group">
				<input type="text" class="form-control" name="f_name" placeholder="Faculty Name *" required>
        </div>
        <div class="form-group">
        	<input type="number" class="form-control" name="f_mobile" placeholder="Mobile Number *" required>
        </div>
        <div class="form-group">
        	<select name="f_dept">
            <option>Select Branch</option>
            <option>Computer Science & Engg.</option>
            <option>Electrical Engg.</option>
            <option>Mechanical Engg.</option>
            <option>Civil Engg.</option>
             <option>Information Technology</option>
            </select>
        </div>
        <div class="form-group">
        	<select name="f_type">
            <option>Select Type</option>
            <option>HOD</option>
            <option>Faculty</option>
            </select>
        </div>
        <div class="form-group">
        	<input type="password" class="form-control" name="f_pass" placeholder="Password *" required>
        </div>
		<div class="form-group">
            <input type="password" class="form-control"  placeholder="Confirm Password" required>
        </div>
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <input type="submit" class="btn btn-success btn-lg btn-block" name="save" value="Register Now" ></input>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="login">Sign in</a></div>
</div>

<style>
   

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #007b5e !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

</style>
			</div>
		</div>
	</section>
<div class=" container-fluid">
<div class="row">
<div class="col-md-2">

</div>
 
<div class="col-md-8">






<div style="height:50px">
</div>  
 
<div class="col-md-2">
</div></div></div></div></div>
<div style="height:40px">
</div>
 </body>
 </html>
<?php
require('footer.php');
?>
