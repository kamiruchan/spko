<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<!--
<h1>Welcome to <i><?php //echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php //echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php //echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
--!>

<!DOCTYPE html>  
<html lang="en">  
  <head>  
    <meta charset="utf-8">  
    <title>Example of carousal with Twitter Bootstrap</title>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta name="description" content="Example of carousal with Twitter Bootstrap version 2.0 from w3resource.com">  
     <!-- Le styles -->  
    <link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  
    <link href="twitter-bootstrap-v2/docs/assets/css/example-fixed-layout.css" rel="stylesheet">  
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->  
    <!--[if lt IE 9]>  
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  
    <!-- Le fav and touch icons -->  
    <link rel="shortcut icon" href="twitter-bootstrap-v2/docs/examples/images/favicon.ico">  
    <link rel="apple-touch-icon" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon.png">  
    <link rel="apple-touch-icon" sizes="72x72" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon-72x72.png">  
    <link rel="apple-touch-icon" sizes="114x114" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon-114x114.png">  
  </head>  
  <body>  
   <?php Yii::app()->bootstrap->register(); ?>
    <?php $this->widget('bootstrap.widgets.TbNavbar', array(
        'color' => TbHtml::NAVBAR_COLOR_INVERSE,
        'brandLabel' => 'Alumni Database',
        'collapse' => true,
        'items' => array(
            array(
                'class' => 'bootstrap.widgets.TbNav',
                'items' => array(
                    array('label' => 'Home', 'url' => array('/site/index')),
                    array('label' => 'About', 'url' => array('/site/page', 'view'=>'about')),
                    array('label' => 'Contact', 'url' => array('/site/contact')),
                    array('label' => 'Login', 'url' => array('/site/login'), 'visible'=> Yii::app()->user->isGuest),
                    array('label' => 'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            ),
        ),
        //'htmlOptions'=>array('style'=>'background-color:blue;')
    ));?>
      
      <div class="container">  
      <!-- Example row of columns -->  
      <div class="row">  
        <div class="span4">  
          <h2>HTML5 and JS Apps</h2>  
          <p> </p>  
          <div id="myCarousel" class="carousel slide">  
            <!-- Carousel items -->  
          <div class="carousel-inner">  
        <div class="active item"><img src="/update-images/html5_logo.png" alt="HTML5 logo" width="500" height="99" /></div>  
        <div class="item"><img src="/update-images/javascript-logo.png" alt="JS logo" width="500" height="99" /></div>  
        <div class="item"><img src="/update-images/schema.png" alt="Schema.org logo" width="500" height="99" /></div>  
        <div class="item"><img src="/update-images/json.gif" alt="JSON logo" width="500" height="99" /></div>  
  </div>  
  <!-- Carousel nav -->  
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>  
  <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>  
</div>  
</div>  
</div>  
      <hr>  
      <footer>  
        <p>© Company 2012</p>  
      </footer>  
    </div> <!-- /container -->  
    <!-- Le javascript  
    ================================================== -->  
    <!-- Placed at the end of the document so the pages load faster -->  
    <script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
    <script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script>  
  </body>  
</html>  
- See more at: http://www.w3resource.com/twitter-bootstrap/carousel-tutorial.php#sthash.dYQqyNFn.dpuf