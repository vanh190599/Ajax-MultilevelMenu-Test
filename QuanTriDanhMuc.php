<!DOCTYPE html>
<html>
<head>
	<title>frontend</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>

<body>
	<table style="margin: auto; border-collapse: collapse; margin-top: 10px" border="1" cellpadding="5">
		<tr>
			<td>Menu parent:</td>
			<td width="200px">
				<select style="width: 100%" id="List_Parent">
					<option value="1">Laptop</option>
					<option value="2">Điện thoại</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Menu child:</td>
			<td>
				<select style="width: 100%" id="List_Child">
					<option>Phone-1</option>
					<option>Phone-2</option>
					<option>Phone-3</option>
					<option>Phone-4</option>
					<option>Phone-5</option>
				</select>
			</td>
		</tr>
	</table>

	<div id="show" style="background: #dddddd">
		
	</div>

	<script type="text/javascript">
		$("#List_Parent").change(function () {
			var parent_id = $("#List_Parent").val();
			$.get("backend.php", {parent_id:parent_id}, function($data){
				$("#show").html($data);
			})
		});
	</script>

</body>
</html>