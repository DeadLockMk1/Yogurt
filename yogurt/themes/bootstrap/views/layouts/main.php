<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
<!--	<link href="--><?php //echo Yii::app()->theme->baseUrl; ?><!--/css/bootstrap.min.css" rel="stylesheet">-->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/application.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-114x114.png">
</head>

<body>
<?php
echo CHtml::openTag('div', array('class' => 'bs-navbar-top-example'));
if (Yii::app()->user->isGuest) {
    $nav = array(
        array('label'=>'Login', 'url'=>array('site/login'))
    );
} elseif (Yii::app()->user->name=='admin') {
    $nav = array(
        array(
            'label' => 'Dashboard',
            'items' => array(
                array('label' => 'Dashboard home', 'url' => array('dashboard/home')),
                array('label' => 'Resources list', 'url' => array('dashboard/resourcesList')),
                'Resources management',
                array('label' => 'Add resource', 'url' => array('dashboard/newResource')),
            )
        ),
        array('label'=>'Profile', 'url'=>array('site/profile')),
        array('label'=>'Logout', 'url'=>array('site/logout')),
    );
} else {
    $nav = array(
        array('label'=>'Profile', 'url'=>array('site/profile')),
        array('label'=>'Logout', 'url'=>array('site/logout'))
    );
}
$this->widget(
    'booster.widgets.TbNavbar',
    array(
        'brand' => CHtml::encode(Yii::app()->name),
        'brandOptions' => array('style' => 'width:auto;margin-left: 0px;'),
//        'type'=> 'inverse',
        'fixed' => false,
        'fluid' => true,
        'collapse' => true,
        'htmlOptions' => array('style' => 'position:relative'),
        'items' => array(
            array(
                'class' => 'booster.widgets.TbMenu',
                'type' => 'navbar',
                'items' => $nav
            )
        )
    )
);
echo CHtml::closeTag('div');
?>
	
	<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('BBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'separator'=>'',
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	</div>
	
	<?php echo $content; ?>
	
	<footer class="footer">
		<div class="container">
			<p>Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			Powered by Yii Framework <?=Yii::getVersion()?><br></p>
		</div>
	</footer>

</body>
</html>