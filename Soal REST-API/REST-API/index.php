<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];
} else {
	$page = 1;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>REST API</title>
	</head>
	<body>
		<table cellpadding="10" border="1pt">
			<thead>
				<tr>
					<th>ID</th>
					<th>EMAIL</th>
					<th>FIRST NAME</th>
					<th>LAST NAME</th>
					<th>AVATAR</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody id="demoTable">
			
			</tbody>
		</table>
		
		<br><br>
		<a href="?page=1" style="padding: 10px 15px;margin: 5px;text-decoration: none;text-align: center;color: #fff;background: rgb(50, 150, 200);">1</a>
		<a href="?page=2" style="padding: 10px 15px;margin: 5px;text-decoration: none;text-align: center;color: #fff;background: rgb(50, 150, 200);">2</a>
		
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
					$.get('https://reqres.in/api/users?page=<?=$page;?>', function(data){
					if(data){
					var data = data.data;
					var jsonData;
					
					$.each(data, function(i, data){
						jsonData = '<tr>'+
						'<td>'+data.id+'</td>'+
						'<td>'+data.email+'</td>'+
						'<td>'+data.first_name+'</td>'+
						'<td>'+data.last_name+'</td>'+
						'<td><img src="'+data.avatar+'" width="100"></td>'+
						'<td><a href="detail.php?id='+data.id+'">DETAIL</a></td>'+
						'</tr>';
						$(jsonData).appendTo('#demoTable');
					})
					} else{
						jsonData = '<tr>'+
						'<td colspan="6">DATA NOT FOUND</td>'+
						'</tr>';
						$(jsonData).appendTo('#demoTable');
					}
				})
				
			})
		</script>