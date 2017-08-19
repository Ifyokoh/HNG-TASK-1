<?php
$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = '';
$db_name = 'hngtest'; 

$conn = mysql_connect($db_host, $db_user, $db_pass);
$dbselect = mysql_select_db($db_name);

if (!$conn) {
	die ('Failed to connect to MySQL');	
}

$sql = 'SELECT * FROM users';
		
$query = mysql_query($sql);

if (!$query) {
	die ('SQL Error');
}

?>

<html>
    <head>
        <title>HNG TASK 1 </title>
<style>
    body {background-color:lightgray}
        div.content {
            margin: 100px auto;
            width: 50%;
            padding: 50px;
            float: center
        }
       
		.table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.table th, 
		.table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.table thead th {
			background-color: #508abb;
			color: #FFFFFF;
		}

        </style>
    </head>
<body>
<div class="content">
    <table class="table">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAME</th>
				<th>REG NO</th>
				<th>COURSE</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		while ($row = mysql_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$no.'</a></td>
					<td>'.$row['name'].'</td>
					<td>'.$row['regno'].'</td>
                    <td>'.$row['course'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>
    </div>
    </body>
</html>