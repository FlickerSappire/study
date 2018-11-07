<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
		<form action="" method="">
				年
				<select name="year" id="">
						<?php
							for($year=1970; $year<2038;$year++){
									echo '<option valune="'.$yaer.'">'.$year.'</option>';
							}
						?>
				</select>
				月
				<select name="month" id="">
						<?php
							for($month=1;$month<=12;$month++){
						?>
						<option value="<?=$month?>"><?=$month?>月</option>
						<?php
							}
						?>
				</select>
				日
				<select name="day" id="">
						<?php
							for($i=1;$i<32;$i++){
									echo '<option>'.$i.'</option>';
							}
						?>
				</select>
				<input type="submit" value="提交" />
		</form>
</body>
</html>
<?php
		$year=isset($_POST['year'])?$_POST['year']:0;
		$month=isset($_POST['month'])?$_POST['month']:0;
		$day=isset($_POST['day'])?$_POST['day']:0;
		$age=0;
		if($year!=0 && $month!=0 && $day!=0){
				$ageUnix = mktime(0,0,0,$month,$day,$year);
				$time=time();
				$agetime=$time-$ageUnix;
				$age=$agetime/(60*60*24*365);
		}
		echo '年龄为：'.floor($age);
?>
