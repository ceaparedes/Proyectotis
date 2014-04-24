<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><img src='images/ubb.png' width="20%" height="20%"></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				//array('label'=>'Sobre mi', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contacto', 'url'=>array('/site/contact')),
				array('label'=>'Administrar Usuarios'
					, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login'
					, 'url'=>Yii::app()->user->ui->loginUrl
					, 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')'
					, 'url'=>Yii::app()->user->ui->logoutUrl
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Alumno', 'url'=>array('/alumno/index')),
				array('label'=>'Carrera', 'url'=>array('/carrera/index')),
				array('label'=>'Evaluacion', 'url'=>array('/evaluacion/index')),
				array('label'=>'Secretaria', 'url'=>array('/secretaria/index')),
				array('label'=>'Bitacora', 'url'=>array('/bitacora/index')),
				array('label'=>'Propuesta', 'url'=>array('/propuesta/index')),
				array('label'=>'Encargado', 'url'=>array('/encargado/index')),
				array('label'=>'Asignatura', 'url'=>array('/asignatura/index')),
				array('label'=>'Practica', 'url'=>array('/practica/index')),
				array('label'=>'Empresa', 'url'=>array('/empresa/index')),
				array('label'=>'Informe', 'url'=>array('/site/informe', 'view'=>'informe')),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<!--
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		-->
	</div><!-- footer -->

</div><!-- page -->
<?php echo Yii::app()->user->ui->displayErrorConsole(); ?> 
</body>
</html>
