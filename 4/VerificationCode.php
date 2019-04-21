<?php

	//echo mt_rand(0,9);
	//echo "<span style='color:rgb(255,0,0)'>".mt_rand(0,9)."</span>";
	$str='';
	$str .="<span style='color:rgb(".mt_rand(0,255).",".
	mt_rand(0,255).",".mt_rand(0,255).")'>".mt_rand(0,9)."</span>";
	
$str .="<span style='color:rgb(".mt_rand(0,255).",".
	mt_rand(0,255).",".mt_rand(0,255).")'>".mt_rand(0,9)."</span>";
	
$str .="<span style='color:rgb(".mt_rand(0,255).",".
	mt_rand(0,255).",".mt_rand(0,255).")'>".mt_rand(0,9)."</span>";
	
$str .="<span style='color:rgb(".mt_rand(0,255).",".
	mt_rand(0,255).",".mt_rand(0,255).")'>".mt_rand(0,9)."</span>";
	//echo $str;
?>
<body style="text-align:center">
<br><br><br><br><br><br>
	please input verification code:<br>
	<div id="div1" style="display:none;"><?php echo $str;?></div>
	<input type="text" id="yzmtxt" />
	<?php echo $str;?>
	<br /><br />
	<input type="button" value="submit" id="btn1" onclick="fun1();" />
</body>
<script type="text/javascript">
	var div1=document.getElementById("div1");
	var btn1=document.getElementById("btn1");
	var yzm=document.getElementById("yzmtxt");
	function fun1() {
		console.log("yzm.value"+yzm.value);
		console.log("div1.innerText:  "+div1.innerText);
		console.log("div1.innerHTML:  "+div1.innerHTML);
		if ( yzm.value == div1.innerText) {
			alert("right!!");
		} else {
			alert("error!!");
		}

	}
</script>

