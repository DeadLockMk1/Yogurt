<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="appcontent">
<?php if($this->pageCaption !== '') : ?>
		<div class="page-header">
			<h1><?php echo CHtml::encode($this->pageCaption); ?> <small><?php echo CHtml::encode($this->pageDescription)?></small></h1>
		</div>
<?php endif; ?>
		<div class="row">
			<div class="span3 first">
<!--				<h3>--><?php //echo CHtml::encode($this->sidebarCaption); ?><!--</h3>-->
				<?php
				$this->widget(
					'booster.widgets.TbMenu',
					array(
						'type' => 'list',
						'items' => array(
							array(
								'label' => 'Dashboard',
								'itemOptions' => array('class' => 'nav-header')
							),
							'',
							array(
								'label' => 'Home',
								'url' => array('dashboard/home'),
								'itemOptions' => array('class' => '')
							),
							array(
								'label' => 'Resources list',
								'url' => '#',
								'itemOptions' => array('class' => '')
							),
							array(
								'label' => 'Resources management',
								'itemOptions' => array('class' => 'nav-header')
							),
							array(
								'label' => 'Add resource',
								'url' => '#',
								'itemOptions' => array('class' => '')
							),

						)
					)
				);
				?>
			</div>
			<div class="last">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</div> <!-- /container -->
<?php $this->endContent(); ?>