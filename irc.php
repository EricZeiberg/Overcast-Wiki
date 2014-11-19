<?php include("includes/functions.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>IRC Channel - Overcast Network Wiki</title>
	<?php assets(); ?>
</head>
<body>
	<?php pageHeader("IRC Channel") ?>
	<div class="container">
		<div class ="jumbotron">
			<h1>Overcast IRC Channel</h1>
			<p>A useful guide on connecting to the Overcast Network IRC channel. </p>
		</div>
	</div>
	<div class = "tabs">
		<div class = "container">
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1" data-toggle="tab">About</a></li>
					<li><a href="#tab2" data-toggle="tab">Clients</a></li>
					<li><a href="#tab3" data-toggle="tab">Connecting</a></li>
					<li><a href="#tab4" data-toggle="tab">Troubleshooting</a></li>
					<li><a href="#tab5" data-toggle="tab">What Now?</a></li>
					<li><a href="#tab6" data-toggle="tab">Resources</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
						<div class="container">
							<div class="col-md-9">
								<h2>About IRC</h2>
								<a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a>, also known as Internet Relay Channel, is an internet chat protocol. It allows uses to join different channels on various networks. Some popular IRC networks include Freenode, Esper, and others. The Overcast Network channel uses the Esper network. More information on connecting to this channel is included in this guide.
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab2">
						<div class="container">
							<div class="col-md-9">
								<h2>Clients</h2>
								IRC requires a client to be able to connect to it. Every desktop or web client has its advantages and disadvantages. A short guide to some of the clients is below.
								<br/>
								A small list of popular IRC clients includes:
								<ul>
									<li><a href="http://www.mirc.com/">mIRC</a> - Desktop - 30 Day Free Trial</li>
									<li><a href="http://xchat.servx.ru/">xChat</a> - Desktop - 30 Day Free Trial</li>
									<li><a href="http://www.mirc.com/">xChat SE</a> - Desktop - Free Trial - Updated xChat Fork</li>
									<li><a href="http://hexchat.org/">HexChat</a> - Desktop - Free</li>
									<li><a href="http://chatzilla.hacksrus.com/">ChatZilla</a> - Firefox Extension - Free</li>
									<li><a href="http://mibbit.com/">Mibbit</a> - Web - Free</li>
									<li><a href="http://webchat.esper.net/?nick=&channels=overcastnetwork">Esper</a> - Web - Official Esper Web Chat</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab3">
						<div class="container">
							<div class="col-md-9">
								<h2>Connecting</h2>
								Each client is different, but some of the settings will be similar.
								<br/>
								The server or network should be: irc.esper.net
								<br/>
								The channel should be: #overcastnetwork
								<hr>
								<h3>Mibbit:</h3>
								<img src="http://puu.sh/5sgRL.png"/>
								<h3>xChat:</h3>
								<img src="http://puu.sh/5sh5F.png"/>
								<img src="http://puu.sh/5sh53.png"/>
								<h3>ChatZilla:</h3>
								<img src="http://puu.sh/5shGa.png"/>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab4">
						<div class="container">
							<div class="col-md-9">
								<h2>Troubleshooting</h2>
								<ul>
									<li>
										"Connection failed (self signed certificate.? (18))" - In the Network Edit Menu, select the check-box that says 'Accept invalid SSL certificates.'
									</li>
									<li>
										If all else fails, you can use this <a href="http://webchat.esper.net/?nick=&channels=overcastnetwork">link</a> to connect, and ask for help once connected.
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab5">
						<div class="container">
							<div class="col-md-9">
								<h2>What now?</h2>
								Now that you're connected to the channel, what should you do next?
								<hr>
								<ul>
									<li>
										If you plan on sticking around, you should probably register you username to make sure that nobody else will take it.
										<code>/msg nickserv register</code>
									</li>
									<li>
										Now you can verify your account when you login next time.
										<code>/msg nickserv identify</code>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab6">
						<div class="container">
							<div class="col-md-9">
								<h2>Resources</h2>
								If you would like to learn more about IRC, you can use these resources.
								<ul>
									<li>
										/help - Client specific
									</li>
									<li>
										/msg nickserv help - Provides basic help once connected
									</li>
									<li>
										<a href="http://esper.net/help.php">Official Esper Guide</a>
									</li>
									<li>
										<a href="http://www.ircbeginner.com/ircinfo/ircc-commands.html">IRC Beginner Guide</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php pageFooter(); ?>
</body>
</html>
