

<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Moonshot Wearables Inc</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
  <meta name="keywords" content="Moonshot Wearables Inc,Anemia, Anaemia, care management, blood testing, detection, diagnostic health information, clinical treatments, WHO, monitoring, aplastic, iron deficiency, sickle cell, thalassemia, vitamin deficiency" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i" rel="stylesheet">
    <!-- //Fonts -->

</head>
<?php
$flag="";
if($_POST['submit']=='Submit')
{   


  // $to = "mail@orbiz.in";
   
   $sub="Enquiry ";
   $body="<table width='517' border='0' cellpadding='2' cellspacing='2'>
        
        <tr>
          <td width='161'><strong>Name </strong></td>
          <td width='342'><label>".$_POST['name']."</label></td>
        </tr>
        <tr>
          <td><strong>Email</strong></td>
          <td><label></label>".$_POST['email']."</td>
        </tr>
       
       	<tr>
          <td><strong>Phone </strong></td>
          <td>".$_POST['phone']."</td>
        </tr>
			<tr>
          <td><strong>Subject </strong></td>
          <td>".$_POST['subject']."</td>
        </tr>
		<tr>
          <td><strong>Message </strong></td>
          <td>".$_POST['message']."</td>
        </tr>
		
      </table>";
$to="chris.nyers@moonshotwearables.com";


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: admin@moonshotwearables.com' . "\r\n" .
    'Reply-To: mail@moonshotwearables.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Mail it
@$flag1=mail($to, $sub, $body, $headers);

$flag="Thank you for contacting us ";


   
}

?>
<body>


    <!-- mian-content -->
    <div class="main-content" id="home">
        <!-- header -->
          <header class="py-1">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h1>
                        <a class="navbar-brand" href="index.html">  <img src="images/logo.png" alt="" class="img-fluid image1" id="header_nav"></a>
                    </h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-4 m-auto">
						   <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="about.html">About Us <span class="sr-only"></span></a>
                            </li>
                      
                             <li class="nav-item">
                                <a class="nav-link" href="news.html">News</a>
                            </li>
							
							
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                        <div class="header-right">
                         
                            <a href="join.html" class="contact">Join Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- //header -->
    </div>
    <!--/ab -->


    <!-- banner-w3layouts -->
    <section class="ab-info-main py-md-5 py-5">
        <div class="container py-md-5 py-5">
            <div class="ab-info-grids pt-md-5 pt-3">
                <div class="contact-info pt-md-5 pt-0 text-center">
                    <!---728x90--->

                    <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3 inner-tittle"><span class="sub-tittle">Join the  
</span>  Moonshot Wearables Team</h3>
                    <!---728x90--->
                 
                    <div class="contact-form mt-md-5">
                        <div class="contact-form-inner mx-auto text-left">
                        <span class="sub-tittle">   <?php echo $flag ?> </span>
                            <div class="map mt-md-5" data-aos="fade-up">

                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.1322514693024!2d-78.79919138526587!3d35.821230780161926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89acf22bbfad5419%3A0x6d263fff4a42c9c9!2s111%20Montauk%20Point%20Pl%2C%20Cary%2C%20NC%2027513%2C%20USA!5e0!3m2!1sen!2sin!4v1577564261826!5m2!1sen!2sin"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- //banner-w3layouts -->
    <!---728x90--->

    <!--footer -->
	<!-- Footer -->
 <!--footer -->
    <footer>
        <section class="footer footer_1its py-5">
            <div class="container py-md-4">

              
                <div class="footer-grid_section text-center">
                    <div class="footer-title-w3ls mb-3" data-aos="fade-up">
                        <a href="index-2.html" class="text-uppercase"> <img src="images/logo.png" alt="" class="img-fluid image1"></a>
                    </div>
                   
                      <ul class="social_section_1info" data-aos="fade-up">
                       
                        <li class="mb-2 twitter"><a href="#"><i class="fa fa-twitter mr-1"></i>twitter</a></li>
                       
                        <li class="linkedin"><a href="https://www.linkedin.com/company/moonshot-wearables-inc/"><i class="fa fa-linkedin mr-1"></i>linkedin</a></li>
                    </ul>
                </div>

            </div>
        </section>
    </footer>
    <!-- //footer -->
    <!-- //footer -->
    <!-- copy-w3layoutsright -->
    <div class="cpy-right text-center py-3">
          <p class="copy-w3layouts">©  Copyright 2019 | Moonshot Wearables | 111 Montauk Point Place, Cary, NC 27513 | Email Us (<a href="mailto:chris.nyers@moonshotwearables.com">chris.nyers@moonshotwearables.com</a>)
            
        </p>
    </div>
    <!-- //copy-w3layoutsright -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!--/aos -->
    <script src="js/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>
    <!--//aos -->
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
		
		
		
		
				$(function(){
    $('#header_nav').data('size','big');
});

$(window).scroll(function(){
    if($(document).scrollTop() > 0)
    {
        if($('#header_nav').data('size') == 'big')
        {
            $('#header_nav').data('size','small');
            $('#header_nav').stop().animate({
                height:'40px'
            },600);
        }
    }
    else
    {
        if($('#header_nav').data('size') == 'small')
        {
            $('#header_nav').data('size','big');
            $('#header_nav').stop().animate({
                height:'100px'
            },600);
        }  
    }
});
		
		
    </script>
    <!--// end-smoth-scrolling -->

    <!-- //js -->

    <script src="js/bootstrap.js"></script>

</body>



</html>