	<?php 
	$q=mysqli_query($conn,"select * from user ");
	$rr=mysqli_num_rows($q);
	echo "<form method='post' >";
	echo "Search : -<input type='text' class='form-control' placeholder='Entre Email' name='search'><br/>";
	echo " <input type='submit' class='btn-success btn' name='search2' value='Search'>";
	echo " <input type='submit' class='btn-success btn' name='search' value='Diplay the information'>";
	echo "</form>";


	if(!isset($_POST['search2'])){
		
		$sql="select * from user";
		$result1=mysqli_query($conn,$sql);
		$rr1=mysqli_num_rows($result1);	
		
		?>
		
				<h2 style="color:#00FFCC">All User</h2>

				<table class="table table-bordered">
					<Tr class="success">
						<th>Sr.No</th>
						<th>User Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Gender</th>
						<th>Delete</th>
					</Tr>
		
		<?php 


			$i=1;
			while($row=mysqli_fetch_assoc($result1))
			{

				echo "<Tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['mobile_no']."</td>";
				echo "<td>".$row['gender']."</td>";
				?>

				<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td><?php 

				echo "</Tr>";
				$i++;
			}
				
		
		?>



	<?php
	}else{
		
		$searchname=$_POST['search'];
		
		$sql="select * from user where email='$searchname'";
		$result1=mysqli_query($conn,$sql);
		$rr1=mysqli_num_rows($result1);	
		
		?>
		
				<h2 style="color:#00FFCC">Searched User</h2>

				<table class="table table-bordered">
					<Tr class="success">
						<th>Sr.No</th>
						<th>User Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Gender</th>
						<th>Delete</th>
					</Tr>
		
		<?php 


	$i=1;
	while($row=mysqli_fetch_assoc($result1))
	{

	echo "<Tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['mobile_no']."</td>";
	echo "<td>".$row['gender']."</td>";
	?>

	<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td><?php 

	echo "</Tr>";
	$i++;
		}
	}
		
	if(!$rr)
	{
	echo "<h2 style='color:red'>No any user exists !!!</h2>";
	}
	else
	{
		
	?>
	<script>
		function DeleteUser(id)
		{
			if(confirm("You want to delete this record ?"))
			{
			window.location.href="delete_user.php?id="+id;
			}
		}
	</script>

	<!--
	<h2 style="color:#00FFCC">All Users</h2>

	<table class="table table-bordered">
		<Tr class="success">
			<th>Sr.No</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Gender</th>
			<th>Delete</th>
		</Tr>
			<?php 

	/*
	$i=1;
	while($row=mysqli_fetch_assoc($q))
	{

	echo "<Tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['mobile_no']."</td>";
	echo "<td>".$row['gender']."</td>";*/
	?>

	<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>
	<?php 
	/*
		echo "</Tr>";
		$i++;
			}
			
	*/
	}	
	?>
			
	</table>
	-->
	<?php ?>