<?php
$doc = JFactory::getDocument();

$BASE_PATH = $this->baseurl.'/templates/'.$this->template;

$doc->addScript($BASE_PATH . '/js/main.js');

$doc->addStyleSheet($BASE_PATH . '/css/template.css');
$doc->addStyleSheet($BASE_PATH . '/css/shame.css');
$doc->addStyleSheet($BASE_PATH . '/css/articles/main.css');
$doc->addStyleSheet($BASE_PATH . '/css/articles/feedback.css');
$doc->addStyleSheet($BASE_PATH . '/css/articles/actions.css');
$doc->addStyleSheet($BASE_PATH . '/css/articles/footer.css');


$app = JFactory::getApplication();
$menu = $app->getMenu();

?>

<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:300,400,700&subset=cyrillic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<jdoc:include type="head" />
	<script type="text/javascript" src="http://vk.com/js/api/openapi.js?95"></script>

	<script type="text/javascript">
	  VK.init({apiId: 3607107, onlyWidgets: true});
	</script>


</head>
<body>
	<a name="top"></a>

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
					<a class='order-call-btn'></a>	
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
				<div class='right-sidebar'>
					<jdoc:include type="modules" name="order-form"/>
					<jdoc:include type="modules" name="feedback" />
					<jdoc:include type="modules" name="actions" />

					<jdoc:include type="modules" name="right-sidebar" style="well"/>
				</div>
			</div>
			<div class="second-half">
				<div class="main-content">
				</div>
				<div class='right-sidebar'>
				</div>
			</div>
			<div class="cleafix"></div>
		</div>
	</div>
		<!-- footer -->
		<footer>
			<a href="#top" id="gtop" class="go-top"></a>
			<div class="container footer-content">
				<jdoc:include type="modules" name="footer"/>
			</div>
		</footer>

	<script type="text/javascript">
		// VK.Widgets.Comments("vk_comments", {limit: 10, width: "300", attach: "*"});
	</script>

</body>
</html>