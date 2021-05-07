 <?php
require_once('connection.php');
require('header.php');
?>
<body>
<div class=" container-fluid">
<div class="row">
<div class="col-md-2">
<?php
require('menu1.php');
?>
 <?php
if(isset($_REQUEST['save']))
{		
	if(empty($_REQUEST['notice_title']))
	{
		echo'<h4 class="text-center text-white">Please Fill Notice Title!</h4>';
	}
	else
			if(empty($_REQUEST['notice_type']))
	{
		echo'<h4 class="text-center text-white">Please Select Notice Type!</h4>';
	}
	else
if(empty($_REQUEST['notice_description']))
	{
		echo'<h4 class="text-center text-white">Please Type Notice !</h4>';
	}
	else
	{
	
	$notice_title=$_REQUEST['notice_title'];
	 $notice_type=$_REQUEST['notice_type'];
	$notice_description=$_REQUEST['notice_description'];
	$st_type=$_REQUEST['st_type'];
	
		$query="insert into notice(notice_id,notice_title,notice_type,notice_description,st_type)Values(NULL,'".$notice_title."','".$notice_type."','".$notice_description."','".$st_type."') ";
		if($conn->query($query))
		{
			echo'<h4 style="text-align:center;"><font color="green">&quot;Published Successfully Compleated.&quot;</font></h4>';
		}
		else
		{
			echo'<h4 style="text-align:center;"><font color="#FF3300">Some Error Occured!</font></h4>';
		}
}
}
?>
</div>
 <div class="col-md-10">
 <div style="height:20px"></div>
 <form action="#" method="POST">
		<h2>New Notice</h2>
		<p class="hint-text">Publish Notice to management or student.</p>
        <div class="form-group">
				<input type="text" class="form-control" name="notice_title" placeholder="Notice Title *" required>
        </div>
        <div class="form-group">
        	<select name="notice_type">
            <option>Notice Type</option>
            <option>Management Notice</option>
            <option>Faculty Notice</option>
            <option>Student Notice</option>
            <option>Public Notice</option>
            </select>
        </div>
         <div class="form-group">
        	<select name="st_type">
            <option>Student Branch</option>
            <option>Computer Science & Engg.</option>
            <option>Electrical Engg.</option>
            <option>Mechanical Engg.</option>
            <option>Civil Engg.</option>
            </select>
        </div>
 <textarea rows="10" cols="130" placeholder=" Notice Description *" name="notice_description"></textarea>
 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" name="save" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" style="padding:20px">Publish</button><br>
                                </div>     </form>  
                               
</div>
 </div></div>
 </body>
 </html>
 
<?php
require('footer.php');
?>