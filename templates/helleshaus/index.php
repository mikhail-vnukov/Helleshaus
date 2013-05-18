<?php
$doc = JFactory::getDocument();

$BASE_PATH = $this->baseurl.'/templates/'.$this->template;

$doc->addStyleSheet($BASE_PATH . '/css/bootstrap/bootstrap.css');
$doc->addStyleSheet($BASE_PATH . '/css/template.css');

$doc->addScript($BASE_PATH . '/js/bootstrap.js', 'text/javascript');
$doc->addScript($BASE_PATH . '/js/main.js', 'text/javascript');

$app = JFactory::getApplication();
$menu = $app->getMenu();

?>

<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:300,400,700&subset=cyrillic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<jdoc:include type="head" />

</head>
<body>
	<!-- main container -->
	<div class='container'>
		<!-- header -->
		<header >
			<div class="slogan-bar">
				<a class="logo" href="<?php echo $this->baseurl ?>"></a>
				<div class="slogan"><div></div>Профессиональная уборка - не значит дорого!</div>
			</div>
			<div class="order-bar" >
				<a class="order-btn"></a>
				<div class="phone-bar">
					<div class="telephone" > 
						<a href="callto:+78129804369">+7 (812) 980 43 69</a>
					</div>
					<div class="tel-description">
						<span>Ежедневно c 9 до 22</span>
					</div>
					<button class='order-call-btn'>Заказать<br/>бесплатный&nbsp;звонок</button>	
				</div>
			</div>
		   	<?php echo JHtml::_('content.prepare', '{besps}slider{/besps}'); ?>
			<nav>
				<jdoc:include type="module" name="mod_menu" title="Main Menu"/>
			</nav> 
			<jdoc:include type="modules" name="position-2"/>

		</header>

		<!-- mid container - includes main content area and right sidebar -->
		<div class='mid_container '>
			<!-- main content area -->
			<div class="first-half">
				<div class="main-content">
	 				<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
							<!-- right sidebar -->
				<div class='right_sidebar'>
					<jdoc:include type="module" name="mod_custom" style="Order form"/>
					<jdoc:include type="modules" name="right-sidebar" style="well"/>
				</div>
			</div>
			<div class="second-half">
				<div class="main-content">
				</div>
				<div class='right_sidebar'>
				</div>
			</div>
			<div class="cleafix"></div>
		</div>

		<!-- footer -->
		<footer>
			<jdoc:include type="modules" name="footer"/>
			Elena Fedorova (c)
		</footer>


	</div>

</body>
</html>