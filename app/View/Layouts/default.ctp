<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Rocket Bootstarp Website Template | Home :: w3layouts');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		
		//echo $this->Html->meta('icon');
    	echo $this->Html->css(array('bootstrap','bootstrap.min','bootstrap-theme.min'));
		echo $this->Html->script(array('jquery.min'));
		echo $this->Html->css(array('style.css'));
		//echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<script src="/proyect/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	


</head>
<body>
	 <div class="wrapper">
     <?php echo $this->element('menu'); ?>

	<?php echo $this->fetch('content'); ?>
	
    <div class="container footer">
       <div class="footer_top">
     	<div class="row">
     		<div class="col-md-2 footer_grid">
     			<h3 class="m_4">Nam liber</h3>
     			<ul class="list">
     				<li><a href="#"> demonstr lectores</a></li>
     				<li><a href="#"> sequitur mutationem</a></li>
     				<li><a href="#"> notare quam</a></li>
     		    </ul>
     		</div>
     		<div class="col-md-2 footer_grid">
     			<h3 class="m_4">Nam liber</h3>
     			<ul class="list">
     				<li><a href="#"> anteposuerit lit</a></li>
     				<li><a href="#"> quarta decima</a></li>
     				<li><a href="#">  videntur parum</a></li>
     		    </ul>
     		</div>
     		<div class="col-md-2 footer_grid">
     			<h3 class="m_4">Nam liber</h3>
     			<ul class="list">
     				<li><a href="#">  nihil imperdiet</a></li>
     				<li><a href="#"> praesent luptatum</a></li>
     				<li><a href="#"> molestie consequat</a></li>
     		    </ul>
     		</div>
     		<div class="col-md-2 footer_grid">
     			<h3 class="m_4">Nam liber</h3>
     			<ul class="list">
     				<li><a href="#">  euismod tincidunt </a></li>
     				<li><a href="#"> tation ullamcorper</a></li>
     				<li><a href="#"> suscipit lobortis</a></li>
     		    </ul>
     		</div>
     		<div class="col-md-2 footer_grid">
     			<h3 class="m_4">Nam liber</h3>
     			<ul class="list">
     				<li><a href="#">  litterarum forma</a></li>
     				<li><a href="#"> quinta decima</a></li>
     				<li><a href="#"> fiant sollemnes</a></li>
     		    </ul>
     		</div>
     		<div class="col-md-2">
     			<h3 class="m_4">Nam liber</h3>
     			<ul class="list">
     				<li><a href="#"> legunt saepius</a></li>
     				<li><a href="#"> eleifend option</a></li>
     				<li><a href="#"> feugiat nulla</a></li>
     		    </ul>
     		</div>
     	</div>
     	</div>
     	<div class="footer_bottom">
     	  <div class="copy">
		    <p>&copy;2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		  </div>
		  <ul class="social">
			<li><a href=""> <i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
		  </ul>
		  <div class="clearfix"> </div>
     	</div>
     </div>
  
	</div>	
    
 
                
                
               
    
    
   
</body>
</html>
