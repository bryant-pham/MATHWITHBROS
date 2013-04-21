<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Duel Academy</title>
<link href="http://duelacademy.myapprenticeapp.com/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="http://duelacademy.myapprenticeapp.com/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrapper">
		<div id="logo"><img src="http://i35.tinypic.com/352eo9f.png"/></div>
<div id="listWrap">
<?php if( !( empty( $query ) ) ) {?>
  <ul>
  	<?php foreach( $query as $row ): ?>
  	<div id="names">
	    <li><a href=<?php echo site_url() . '/game/loadchallenge/' . $row[ 'user_id' ] ?>>
	    	<img src="http://findicons.com/files/icons/560/fast_icon_users/128/user.png" width="80" height="80" border="0">
	    	<center><?php echo $row[ 'user_name' ] ?><center>
	    </li>
    </div>
    <?php endforeach; ?>
  </ul>
  <?php } else echo "<h1 align='center'>No Opponents</h1>" ?>
</div>
	</div>
</body>
</html>