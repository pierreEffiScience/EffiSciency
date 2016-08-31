<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="EffiSciency">
    <meta name="author" content="">

    <title>EffiSciency</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.png" />

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	
	<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>

<body id="home">
<!-- PHP PARTS -->
<?php
    $msg = "";
    //Appuis sur le bouton pour envoyer un email
    if(isset($_POST['submit'])){
        if(!empty($_POST['categorie']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])
            && isset($_POST['phone'])){

            $categorie = $_POST['categorie'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $phone = $_POST['phone'];

            if($phone != ""){
                $message .= "<br><br>" . "Le client à demander d'être contacté par téléphone : " . $phone;
            }

            require('function/mail.php');
            send_mail($categorie, $name, $email, $message);
            $msg = "Email envoyé avec succès.";

        }else{
            $msg = "Merci d'entrer tous les champs.";
        }

    }
?>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h1_home wow fadeIn intro-header-title" data-wow-delay="0.4s">EffiSciency</h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">
				La science accessible et performante pour valoriser vos données. 
			</h3>
			<ul class="list-inline intro-social-buttons">
				<!-- <li><a href="https://twitter.com/galantiandrea" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s"><span class="network-name">Twitter</span></a>
				</li> -->
				<li id="download" >
                    <a href="#whatis" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s">
                        <span class="network-name">En savoir plus</span>
                    </a>
                </li>
			</ul>
		</div>    
        <!-- /.container -->
		<!--<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div>-->
    </div>
	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">EffiSciency</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="#whatis">Qui sommes-nous</a></li>
					<li class="menuItem"><a href="#work">Notre métier</a></li>
					<li class="menuItem"><a href="#partenaires">Nos clients</a></li>
					<!--<li class="menuItem"><a href="#useit">Use It</a></li>
					<li class="menuItem"><a href="#screen">Screenshot</a></li>
					<li class="menuItem"><a href="#credits">Credits</a></li>-->
					<li class="menuItem"><a href="#contact">Contact</a></li>
				</ul>
			</div>
		   
		</div>
	</nav> 
	
	<!-- What is -->
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-8 col-md-offset-2 text-center wrap_title">
				<h2 style="margin-bottom: 40px">Qui sommes-nous ?</h2>
				<!--<p class="lead" style="margin-top:0">A special thanks to Death.</p>-->
				
			</div>
			
			<div class="row">
			
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img class="zoom" src="img/icon/bulb.svg" alt="Generic placeholder image">
				  <h3>Conseil</h3>
				  <p class="lead">EffiSciency est un cabinet de conseil et de services spécialisé dans la valorisation des données.</p>

				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="zoom" src="img/icon/config.svg" alt="Generic placeholder image">
				   <h3>Algorithmes</h3>
				   <p class="lead">EffiSciency aide les entreprises à mettre en place des solutions orientées sur la donnée et l'utilisation d'algorithmes innovants afin de maximiser les profits et les connaissances qui peuvent être tirés des données. </p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="zoom" src="img/icon/retina.svg" alt="Generic placeholder image">
				   <h3>Optimisation</h3>
					<p class="lead">EffiSciency donne accès aux entreprises aux technologies les plus innovantes pour optimiser la valeur des données. </p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
				
			<!--<div class="row tworow">
			
				<div class="col-sm-4  wow fadeInDown text-center">
				  <img class="rotate" src="img/icon/laptop.svg" alt="Generic placeholder image">
				  <h3>Responsive</h3>
				  <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				 &lt;!&ndash; <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> &ndash;&gt;
				</div>&lt;!&ndash; /.col-lg-4 &ndash;&gt;
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/map.svg" alt="Generic placeholder image">
				   <h3>Google</h3>
				   <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				   &lt;!&ndash; <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> &ndash;&gt;
				</div>&lt;!&ndash; /.col-lg-4 &ndash;&gt;
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/browser.svg" alt="Generic placeholder image">
				   <h3>Bootstrap</h3>
				 <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				  &lt;!&ndash; <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> &ndash;&gt;
				</div>&lt;!&ndash; /.col-lg-4 &ndash;&gt;
				
			</div>&lt;!&ndash; /.row &ndash;&gt;-->
            <p class="text-center wow fadeInDown">
                <a class="btn btn-embossed btn-primary" href="#work" role="button">Que faisons-nous</a>
            </p>

		</div>
	</div>
	
	<!-- Use it -->
    <div id ="work" class="content-section-a">

        <div class="container">
			
            <div class="row">
			
				<div class="col-sm-6 pull-right wow fadeInDown">
                    <img class="img-responsive " src="img/ipad.png" alt="">
                </div>
				
                <div class="col-sm-6 wow fadeInDown"  data-animation-delay="200">
                    <h3 class="section-heading">Que faisons-nous ?</h3>
					<!--<div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>-->
                    <p class="lead">
                        Nous proposons des services d'analyse méthodologique pour vous aider à cibler les opportunités de valorsiation de votre entreprise à partir de données.
                        <br/><br/>
                        Nous implémentons pour vous des applications pour automatiser vos analyses et vos outils d'aide à la décision.
                        <br/><br/>
                        Nous vous accompagnons dans la formation de vos ressources humaines afin de développer les compétences data science au sein de votre entreprise.
                        <br/><br/>
                        Nous vous aidons à valoriser vos projets de R&D en vous assistant dans les études de faisabilité orientée data et machine learning et en décelant des opportunités de valeur ajouté par la data.
                    </p>

					 <p><a class="btn btn-embossed btn-primary" href="#partenaires" role="button">Nos clients</a>
					 <!--<a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a>--></p>
				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>

<!--    <div class="content-section-b">
		
		<div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                     <div id="owl-demo-1" class="owl-carousel">
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
					</div>       
                </div>
				
                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Drag Gallery</h3>
					<div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                    <p class="lead">
						In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
						Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
						uam non erat mirum sapientiae lorem cupido
						patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
					</p>

					 <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a> 
					 <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
				</div>  			
			</div>
        </div>
    </div>-->

   <!-- <div class="content-section-a">

        <div class="container">

             <div class="row">
			 
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/doge.png" alt="">
                </div>
			 
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Font Awesome & Glyphicon</h3>
                    <p class="lead">A special thanks to Death to the Stock Photo for 
					providing the photographs that you see in this template. 
					</p>
					
					<ul class="descp lead2">
						<li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
						<li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future</li>
						<li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
					</ul>
				</div>           
            </div>
        </div>

    </div>-->

	<!-- Screenshot -->
<!--	<div id="screen" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>Screen App</h2>
				<p class="lead" style="margin-top:0">A special thanks to Death.</p>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
              <div id="owl-demo" class="owl-carousel">
				
				<a href="img/slide/1.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/1.png" alt="Owl Image">
					</div>
				</a>
				
               <a href="img/slide/2.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/2.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/3.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/3.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/1.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/1.png" alt="Owl Image">
					</div>
				</a>
				
               <a href="img/slide/2.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/2.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/3.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/3.png" alt="Owl Image">
					</div>
				</a>
              </div>       
          </div>
        </div>
	</div>-->
	
	<div  class="content-section-c " style="display: none">
		<div class="container">
			<div class="row">
			<div class="col-md-12 text-center white">
				<h2>Un projet ? Venez nous en parler !</h2>
				<p class="lead" style="margin-top:0"></p>
			 </div>
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>Subscribe to our Newsletter</span></button>
							<!--<div class="morph-content">
								&lt;!&ndash;<div>
									&lt;!&ndash;<div class="content-style-form content-style-form-4 ">
										<h2 class="morph-clone">Subscribe to our Newsletter</h2>
										<form>
											<p><label>Your Email Address</label><input type="text"/></p>
											<p><button>Subscribe me</button></p>
										</form>
									</div>&ndash;&gt;
								</div>&ndash;&gt;
							</div>-->
						</div>
				</div>
			</div>
			</div>>
		</div>
	</div>
	
	<!-- Credits -->
<!--	<div id="credits" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Credits</h2>
				<p class="lead" style="margin-top:0">A special thanks to Death.</p>
			 </div>
			 
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-desktop fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Bootstrap </h3>
							<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-picture-o fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Owl-Carousel </h3>
						<p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		  
		  <div class="row tworow">
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-magic fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Codrops </h3>
							<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-heart fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Lorem Ipsum</h3>
						<p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		</div>
	</div>-->
	
	<!-- Banner Download -->
	<!--<div id="downloadlink" class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Download Free</h2>
				<p class="lead" style="margin-top:0">Pay with a Tweet</p>
				<p><a class="btn btn-embossed btn-primary view" role="button">Free Download</a></p> 
			 </div>
			</div>
		</div>
	</div>-->


    <div id="partenaires" class="content-section-b" style="border-top: 0">
        <div class="container">

            <div class="col-md-8 col-md-offset-2 text-center wrap_title">
                <h2 style="margin-bottom: 15px">Ils nous font confiance</h2>
                <p class="lead" style="margin-top:0">Découvrez ci-dessous la liste de nos clients</p>
            </div>

            <div class="row">

                <div class="col-sm-3 wow fadeInDown text-center">
                    <a href="http://www.kosresearch.com/" target="_blank">
                        <img class="zoom" src="img/kosresearch.png" alt="Generic placeholder image">
                    </a>

                    <!--<h3>Conseil</h3>
                    <p class="lead">EffiSciency est un cabinet de conseil et de services spécialisé dans la valorisation des données.</p>
                -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-3 wow fadeInDown text-center">
                    <a href="http://www.telecom-paristech.fr/" target="_blank">
                        <img  class="zoom" src="img/telecomparistech.png" alt="Generic placeholder image">
                    </a>

                    <!--<h3>Algorithmes</h3>
                    <p class="lead">EffiSciency aide les entreprises à mettre en place des solutions orientées sur la donnée et l'utilisation d'algorithmes innovants afin de maximiser les profits et les connaissances qui peuvent être tirés des données. </p>
                    --><!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-3 wow fadeInDown text-center">
                    <a href="http://consiliumgroupadvisors.com/" target="_blank">
                        <img  class="zoom" src="img/cga.png" alt="Generic placeholder image">
                    </a>

                    <!--<h3>Optimisation</h3>
                    <p class="lead">EffiSciency donne accès aux entreprises aux technologies les plus innovantes pour optimiser la valeur des données. </p>
                   --> <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-3 wow fadeInDown text-center">
                    <a href="https://www.catalisio.com/" target="_blank">
                        <img  class="zoom" src="img/catalisio.png" alt="Generic placeholder image">
                    </a>

                    <!--<h3>Optimisation</h3>
                    <p class="lead">EffiSciency donne accès aux entreprises aux technologies les plus innovantes pour optimiser la valeur des données. </p>
                   --> <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->

            <p class="text-center wow fadeInDown" style="margin-top: 50px">
                <a class="btn btn-embossed btn-primary" href="#contact" role="button">Nous contactez</a>
            </p>

        </div>
    </div>



	
	<!-- Contact -->
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-12 text-center wrap_title">
				<h2>Comment pouvons-nous vous aider ?</h2>
				<p class="lead" style="margin-top:0">Un projet, une idée ? Envoyez nous un email.</p>
			</div>
			
			<form role="form" method="post" >
				<div class="col-md-7">

                    <div class="form-group">
                        <label for="InputCategorie">Selectionnez votre corps de métier*</label>
                        <div class="input-group">
                            <select class="form-control" name="categorie" id="InputCategorie">
                                <option value="marketing">Marketing</option>
                                <option value="sante">Santé - Pharmaceutique - Cosmétique</option>
                                <option value="newtech">Nouvelles technologies et Start Up</option>
                                <option value="finance">Finance</option>
                                <option value="transfert">Transfert technologique</option>
                                <option value="consulting">Consulting</option>
                                <option value="formation">Formation</option>
                                <option value="autre">Autre</option>
                            </select>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>

					<div class="form-group">
						<label for="InputName">Votre Nom*</label>
						<div class="input-group">
							<input type="text" class="form-control" name="name" id="InputName" placeholder="Entrer votre nom" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputEmail">Votre Email*</label>
						<div class="input-group">
							<input type="email" class="form-control" id="InputEmail" name="email" placeholder="Entrer votre email" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputMessage">Votre Message*</label>
						<div class="input-group">
							<textarea name="message" id="InputMessage" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

                    <div class="form-group">
                        <label>Je souhaites être contactez par téléphone : </label>
                        <input type="radio" name="inlineRadioOptions" id="checkTelephoneOui" value="option1"> Oui
                        <input type="radio" name="inlineRadioOptions" id="checkTelephoneNon" value="option1" checked> Non
                    </div>

                    <div class="form-group" style="display: none" id="form-tel">
                        <label for="InputTelephone">Votre Téléphone</label>
                        <div class="input-group">
                            <input type="tel" class="form-control" name="phone" id="InputTelephone" placeholder="Entrer votre téléphone">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>

					<input type="submit" name="submit" id="submit" value="Envoyer" class="btn wow btn-embossed btn-primary pull-right">
				</div>
			</form>
			
			<hr class="featurette-divider hidden-lg">
				<div class="col-md-4 col-md-push-1 address">
					<address>
					<h3>Adresse</h3>
					<p class="lead">
                        60 rue des Charmettes, <br/> 92140, Clamart <br/>
					Téléphone : 06 63 25 34 68<br>
                    </p>
					</address>

					<!--<h3>Réseaux sociaux</h3>
					<li class="social"> 
					<a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
					<a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> 
					<a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
					<a href="#"><i class="fa fa-github-square fa-size"> </i> </a>
					</li>-->
				</div>
			</div>
            <p><?= $msg ?></p>
		</div>
	</div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <!--<h3 class="footer-title">Follow Me!</h3>-->
              <p style="margin-top: 20px; margin-bottom: 20px">
                  Copyright <a href="#">EffiSciency</a> - All rights reserved - 2016
                  <br/>
                  EffiSciency : SAS EffiScience au capital de 1000€, SIRET 820532976 00017 RCS Nanterre
                  <br/>
                  13 Avenue Jean Monnet, Issy les moulineaux, 92130, n°TVA intracommunautaire : FR 64 820532976
              </p>
			
			<!-- LICENSE -->
			<!--<a rel="cc:attributionURL" href="http://www.andreagalanti.it/flatfy"
		   property="dc:title">Flatfy Theme </a> by
		   <a rel="dc:creator" href="http://www.andreagalanti.it"
		   property="cc:attributionName">Andrea Galanti</a>
		   is licensed to the public under 
		   <BR>the <a rel="license"
		   href="http://creativecommons.org/licenses/by-nc/3.0/it/deed.it">Creative
		   Commons Attribution 3.0 License - NOT COMMERCIAL</a>.-->
		   
	   
          </div> <!-- /col-xs-7 -->

          <!--<div class="col-md-5">
            <div class="footer-banner">
              <h3 class="footer-title">Flatfy Theme</h3>
              <ul>
                <li>12 Column Grid Bootstrap</li>
                <li>Form Contact</li>
                <li>Drag Gallery</li>
                <li>Full Responsive</li>
                <li>Lorem Ipsum</li>
              </ul>
              Go to: <a href="http://andreagalanti.it/flatfy" target="_blank">andreagalanti.it/flatfy</a>
            </div>
          </div>-->
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script> 
</body>

</html>