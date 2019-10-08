<link rel="stylesheet" href="vendor/assests/gridlex/gridlex.min.css">

<?php include('header.php'); ?>




<?php

				
				$query=mysqli_query($db,"SELECT d.dishesName, c.*
                FROM dishes d
                JOIN course c ON d.courseID = c.courseID WHERE c.courseID='1'" );
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<p><?php echo $row['dishesName']; ?></p>
					
					</tr>
					<?php
				}
			
			?>