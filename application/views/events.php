<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Duel Academy</title>
<link href="http://duelacademy.myapprenticeapp.com/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="http://duelacademy.myapprenticeapp.com/css/style.css" rel="stylesheet" type="text/css" />
<script src=<?php echo base_url() . "js/analytics.js"?>></script>
</head>

<body>
<div id="wrapper">
		<div id="logo"><img src="http://i35.tinypic.com/352eo9f.png"/></div>
			<center><h1 class=".hero-unit h1"> Your Turn</h1></center>
			<div id="eventsWrap">
				<table width="300" border="0" class="table table-hover">
					<?php if( !( empty( $query ) ) ) {?>
					<?php foreach( $query as $row ): ?>
					<tr>
						<td><a href=<?php echo site_url() . '/game/loadduel/' . $row[ 'game_id' ] ?>>
							<img src="http://findicons.com/files/icons/560/fast_icon_users/128/user.png" width="80" height="80" border="0">
						</a>
						</td>
						<td><?php echo $row[ 'user_name' ] ?></td>
					</tr>
					<?php endforeach; ?>	
					<?php } else echo "<h3 align='center'>Not your turn</h3>" ?>	
				</table>	
			</div>	
		<div id="matchWrap">
			<h3>Match History</h3>
			<table width="300" border="0" class="table table-hover">
			<?php if( !( empty( $query ) ) ) { ?>
			<?php foreach( $matchHistory as $row2 ): ?>
				<tr>
					<td>
						<img src="http://findicons.com/files/icons/560/fast_icon_users/128/user.png" width="80" height="80" border="0">
					</td>
					<td><?php echo $row2[ 'user_name' ]; ?></td>
					<td><?php 
							if( $row2[ 'winner' ] == $this->session->userdata( 'user_id' ) ) {
								echo "YOU ARE VICTORIOUS";
							}
							else echo "YOU HAVE BEEN DEFEATED";
					?></td>
				</tr>
			<?php endforeach; ?>	
			<?php } else echo "<h3 align='center'>No Matches Finished</h3>" ?>
			</table>
		</div>
		<div id="challengeButton">
			<a class="btn btn-warning" href=<?php echo site_url() . "/game/getPlayerList"?>>Search for Opponent</a>
		</div>
</div>
</body>
</html>