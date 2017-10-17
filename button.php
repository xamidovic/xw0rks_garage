<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
		<style>
			body
				{
					background-image: url(png/tdg.jpg);
					background-attachment: fixed;
					margin: 0;
					padding: 0; 
				}
			h2
				{
					max-width: 60%;
					height: auto;
				}
			img
				{
					border: 0;
					display: block;
					margin: auto;
					max-width:80%;
					max-height:80%;
				}
			.button
				{
					text-align: center;
					cursor: pointer;
					outline: none;
					color: #fff;
					background-color: transparent;
					border: none;
					border-radius: 0px;
				}

			.button:hover
				{
					background-color: transparent;
				}

			.button:active
				{
					background-color: transparent;
				}
		</style>
</head>

// ######### PHP #########			
			<?php
				if (isset($_POST['open']))
					{
						exec("sudo python py/open.py");
					}
				if (isset($_POST['stop']))
					{
						exec("sudo python py/stop.py");
					}

				if (isset($_POST['close']))
					{
						exec("sudo python py/close.py");
					}
				if (isset($_POST['lock']))
					{
						exec("sudo python py/lock.py");
					}
				if (isset($_POST['temp']))
					{
						exec("sudo python py/temp.py");
					}
			?>
// ######################

	<body>
		</br>
			<table align='center'>
	
		<!-- XW0RKS HEADER -->
			<tr align='center'>
					<td>
						<a href="http://xw0rks.tk"><img src='png/hkdlogo.png'></a>
					</td>
						</br>
				</tr>

			<!-- OPEN GARAGE -->
				<tr>
					<td  align='center'>
						<form method="post">
							<button class="button" name="open"><img src='png/arrow_up.png'></button>&nbsp;		
						</form>
					</td>
				</tr>
			</table>


			<!-- STOP and LOCK GARAGE DOOR -->
			<table align='center'>
				<tr>
					<td align='center'>
						<form method="post">
							<button class="button" name="stop"><img src='png/stop.png'></button>&nbsp;
						</form>
					</td>
				<td align='center'>
						<form method="post">
							<button class="button" name="lock"><img src='png/lock.png'></button>&nbsp;
						</form>
					</td>
				</tr>
			</table>

			<!-- CLOSE GARAGE -->
			<table align='center'>
				<tr>
					<td align='center'>
						<form method="post">
							<button class="button" name="close"><img src='png/arrow_down.png'></button>&nbsp;		
						</form>	
					</td>
				</tr>

			</table>
	</body>
</html>

