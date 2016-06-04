    <!----start-header---->
		 
         
         
         <div class="header">
	       <div class="container header_top">
				<div class="logo">
				 
                 <?php echo $this->Html->image("logo.png", array(
    								"alt" => "",
    								'url' => array('controller' => 'pages', 'action' => 'display', 'home')));?>              
                 
               </div>
		  		<div class="menu">
					<a class="toggleMenu" href="#"><img src="img/nav_icon.png" alt="" /> </a>
					<ul class="nav" id="nav">
					  <li class="current"><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'display', 'home'));?></li>
					  <li><?php echo $this->Html->link('About', array('controller' => 'abouts','action' => 'index'));?></li>
					  <li><?php echo $this->Html->link('Service', array('controller' => 'servicios','action' => 'index'));?></li>
					  <li><?php echo $this->Html->link('Portafolio', array('controller' => 'portafolios','action' => 'index'));?></li>
					  <li><?php echo $this->Html->link('Contact', array('controller' => 'contactos','action' => 'index'));?></li>								
					  <li><?php echo $this->Html->link('Meseros', array('controller' => 'meseros','action' => 'index'));?></li>								
					  <li><?php echo $this->Html->link('Mesas', array('controller' => 'mesas','action' => 'index'));?></li>								
					  
					  <div class="clearfix"></div>
					</ul>
					<script type="text/javascript" src="/proyect/js/responsive-nav.js"></script>
				</div>							
	  			<div class="clearfix"> </div>
			    <!----//End-top-nav---->
			 </div>
		</div>
	<!----- //End-header---->