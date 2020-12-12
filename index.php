<html>
<head>
	<title>Calculation using MVC Model</title>
	<style type="text/css">
		*{color:#279}
		#form{
			width:300px;
			padding:20px;
			border:4px solid #279;
		}

		#form h2{
			font-size:35px;
			margin:0;
		}

		#form p{
			font-size:15px;
			color:#222222;
		}
	</style>
</head>
<body>
	<form id="form" action="Controller/CalcController.php" method="post">
		<h2>Calculation using MVC Model</h2>
		<table>
			<tr>
				<td>NUMBER 1</td>
				<td><input type='text' name='number1'/></td>
			</tr>
			<tr>
				<td>NUMBER 2</td>
				<td><input type='text' name='number2'/></td>
			</tr>
			<!-- <tr></tr> -->
			<tr>
				<td>METHOD</td>
				<td>
					<select name="method_v">
						<option value="add">Add</option>
						<option value="sub">Sub</option>
						<option value="nhan">Nhân</option>
						<option value="chia">Chia</option>
					</select>
				</td>
			</tr>


			<!-- <td>
				<div class="form-group" name="pheptinh">
					<input type="radio" checked name="cong" value="">Cộng
					<input type="radio" name="tru" value="">Trừ
					<input type="radio" name="nhan" value="">Nhân
					<input type="radio" name="chia" value="">CHia
				</div>
			</td> -->

				<tr>
					<td></td>
					<td><input type="submit" value="Tính" name="btnSubmit"/></td>
				</tr>

			</table>
		</form>
	</body>
	</html>