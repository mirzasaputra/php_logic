<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>REST API</title>
	</head>
	<body>
		<table cellpadding="10" border="1pt">
			<tbody id="demoTable">
			
			</tbody>
		</table>
		
		<div id="view"></div>
		
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				
				$.get('https://reqres.in/api/users/<?=$id;?>', function(data){
					if(data){
					var data1 = data.ad;
					var data = data.data;
					var jsonData;
				
						jsonData = '<tr>'+
						'<th>ID</th>'+
						'<td>'+data.id+'</td>'+
						'</tr><tr>'+
						'<th>EMAIL</th>'+
						'<td>'+data.email+'</td>'+
						'</tr><tr>'+
						'<th>FIRST NAME</th>'+
						'<td>'+data.first_name+'</td>'+
						'</tr><tr>'+
						'<th>LAST NAME</th>'+
						'<td>'+data.last_name+'</td>'+
						'</tr><tr>'+
						'<th>AVATAR</th>'+
						'<td><img src="'+data.avatar+'" width="100"></td>'+
						'</tr><tr>'+
						'<th>COMPANY</th>'+
						'<td>'+data1.company+'</td>'+
						'</tr><tr>'+
						'<th>URL</th>'+
						'<td>'+data1.url+'</td>'+
						'</tr><tr>'+
						'<th>TEXT</th>'+
						'<td>'+data1.text+'</td>'+
						'</tr>';
						$(jsonData).appendTo('#demoTable');
					
					} else{
						jsonData = '<tr>'+
						'<td colspan="6">DATA NOT FOUND</td>'+
						'</tr>';
						$(jsonData).appendTo('#demoTable');
					}
				})
				
			})
		</script>