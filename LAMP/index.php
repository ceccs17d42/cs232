
<?php
$to=000;
if (isset($_POST['Submit'])){
	$from=$_POST['sFrom'];
	$tfrom=$_POST['tFrom'];
	switch($from){
	case 'Second':
		$tl1='Selected';
		break;
	case 'Minute':
		$tl2='Selected';
		$tfrom*=60;
		break;
	case 'Hour':
		$tl3='Selected';
		$tfrom*=3600;
		break;
	case 'Day':
		$tl4='Selected';
		$tfrom*=24*3600;
		break;
	case 'Month':
		$tl6='Selected';
		$tfrom*=30*24*3600;
		break;
	case 'Week':
		$tl5='Selected';
		$tfrom*=7*24*3600;
		break;
	case 'Year':
		$tl7='Selected';
		$tfrom*=365*24*3600;
		break;
	}

	$sto=$_POST['sTo'];
	switch($sto){
	case 'Second':
		$sl1='Selected';
		$to=$tfrom;
		break;
	case 'Minute':
		$sl2='Selected';
		$to=$tfrom/60;
		break;
	case 'Hour':
		$sl3='Selected';
		$to=$tfrom/3600;
		break;
	case 'Day':
		$sl4='Selected';
		$to=$tfrom/(24*3600);
		break;
	case 'Month':
		$sl6='Selected';
		$to=$tfrom/(30*24*3600);
		break;
	case 'Week':
		$sl5='Selected';
		$to=$tfrom/(7*24*3600);
		break;
	case 'Year':
		$sl7='Selected';
		$to=$tfrom/(365*24*3600);
		break;
	}
	$to=round($to,2);
}
?>
<body><form method="post">
<table align="center" style="width: 458px; font-family: 'Times New Roman', Times, serif; height: 87px; border-width: 0px">
	<tr style="background-color: #8BD4FF">
		<td style="text-align: center; width: 228px; font-size: 17pt; height: 29px; background-color: #CECEFF;">
		From</td>
		<td style="text-align: center; width: 228px; font-size: 17pt; height: 29px; background-color: #CECEFF;">
		To</td>
	</tr>
	<tr>
		<td style="text-align: center; width: 228px; height: 29px; background-color: #C6FFF2;">
			<select name="sFrom" style="width: 178px; font-size: 12pt; font-family: 'times New Roman', Times, serif;">
			<?php
			echo("
				<option $tl1>Second</option>
				<option $tl2>Minute</option>
				<option $tl3>Hour</option>
				<option $tl4>Day</option>
				<option $tl5>Week</option>
				<option $tl6>Month</option>
				<option $tl7>Year</option>
			")
			?>
			</select>
		</td>
		<td style="text-align: center; width: 228px; height: 29px; background-color: #C6FFF2;">
			<select name="sTo" style="width: 178px; font-size: 12pt; font-family: 'times New Roman', Times, serif;">
			<?php
			echo("
				<option $sl1>Second</option>
				<option $sl2>Minute</option>
				<option $sl3>Hour</option>
				<option $sl4>Day</option>
				<option $sl5>Week</option>
				<option $sl6>Month</option>
				<option $sl7>Year</option>
			")
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td style="text-align: center; width: 228; height: 43; background-color: #C6FFF2;">
		<input name="tFrom" style="width: 178px; height: 28px; font-family: 'Times New Roman', Times, serif; font-size: 12pt; margin-bottom: 5px" value="<?php if (isset($_POST['Submit'])) echo $_POST['tFrom'] ?>"></td>
		<td align="center"  style="text-align: center; width: 228; height: 43; background-color: #C6FFF2;">
		<div align="center" ><label id="Label1" style="width: 178px; height: 28px; font-family: 'Times New Roman', Times, serif; font-size: 12pt; margin-bottom: 5px; background-color: #FAFAFA; display: block;"><?php echo $to?></label></div></td>
	</tr>
</table>
	<div style="text-align: center">
<br><input name="Submit" type="submit" value="Convert" style="width: 107px; height: 38px; font-family: 'times New Roman', Times, serif; font-size: 20px"></div>
</form>
<div style="text-align: center">
</body>