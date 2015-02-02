

        
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="Public/Css/Admin/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="Chart.js-master/Chart.js"></script>
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div id="dialog" title="信息提示">
<p></p>
</div>
	<div class="fanwe-body">
		<div class="fb-title"><div><p><span>后台管理 &gt; PV列表</span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<div class="handle-btns">
</div>
<canvas id="myChart" width="400" height="400"></canvas>
<script>
   
  
   
       var data = {
            
                    labels : [<?php echo $json ?>],
                    datasets : [
                            {
                                    fillColor : "rgba(220,20,220,0.5)",
                                    strokeColor : "rgba(220,20,220,1)",
                                    data : [<?php echo $pv?>]
                            },
                    ]
            } 
var ctx = document.getElementById("myChart").getContext("2d"); 
var myNewChart = new Chart(ctx).Bar(data);//new Chart(ctx).PolarArea(data);
</script>


</script>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="ajax-loading"></div>
</body>
<script type="text/javascript">
</script>
</html>
