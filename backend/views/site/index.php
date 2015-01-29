<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$_CFG.site_name} — 后台管理系统</title>
<link rel="shortcut icon" href="favicon.ico" />
</head>
<frameset rows="75,*,22" cols="*" frameborder="no" border="0" framespacing="0">
	<frame src="?r=site/top" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" />
	<frameset id="bodyFrameset" cols="190,14,*" frameborder="no" border="0" framespacing="0">
            <frame src="?r=site/left&act=<?php echo $act?>" name="leftFrame" id="leftFrame" noresize="noresize" />
		<frame src="?r=site/change" name="changeFrame" noresize="noresize" id="changeFrame"  frameborder="no"  scrolling="no" marginwidth="0" marginheight="0"/>
		<frame src="?r=site/main" name="mainFrame" id="mainFrame"   frameborder="no"  scrolling="no" marginwidth="0" marginheight="0" />
	</frameset>
	<frame src="?r=site/footer" name="bottomFrame" scrolling="no" noresize="noresize" />
</frameset>
<noframes>
<body style="padding:0">
</body>
</noframes>
</html>