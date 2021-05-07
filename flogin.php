<?php
require_once('connection.php');
require('header.php');
?>

<body>
<div class=" container-fluid">
<div class="row">
<div class="col-md-2">
<?php
require('menu2.php');
require('footer.php');
?>
</div>
 <div class="col-md-10">
 <?php	 
$query="select * from notice";
 
		if($conn->query($query))
		{
		 echo'<h3 class="text-center text-info font-weight-bolder">Notice List</h3>
 <table class="table table-bordered">
 
<thead class="bg-warning"><tr >
		 
    	<td> Notice Title</td>
        <td> Notice Type</td>
         <td>Notice Description</td>
		  <td>Comment</td>
		   <td>Delete</td>
      </tr></thead>';
$result=$conn->query($query);
if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
	 	
		 
		echo'<td>';
		echo($row['notice_title']);
		echo'</td> ';
		echo'<td>';
		echo($row['notice_type']);
		echo'</td> ';
		echo'<td>';
		echo($row['notice_description']);
		echo'</td> ';
		 echo'<td>';
		echo('<form action="#" method="post"><input type="text" value="Comment" ></form>');
		echo'</td >';
		 echo'<td>';
		echo(' <button type="submit" class="btn-secondary">Delete</button>');
		echo'</td >';
		 echo'</tr></form>';
				 		
	}

}
		}
?>
</div>
 </div></div> 
 </body>
 </html>
 
