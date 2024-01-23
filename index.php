<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blubay Solutions</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
	     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/style.css"/>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css'>
      <link rel="stylesheet" href="assets/css/squre_particles.css"/>
      <link rel="stylesheet" href="assets/css/style2.css">
      <link rel="stylesheet" href="assets/css/popup.css">
       <script type="text/javascript" src="assets/js/popup.js"></script>
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Blubay Solutions</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">
    
  <script>
    function togglePopup(){
        $(document).ready(function(){
        $("#myModal").modal('show');
       });
    }
	
</script>
</head>
<body oncontextmenu="return false;">
	
<div id="myModal" class="modal fade "  >
        <div class="modal-dialog">
            <div class="modal-content" style="background: linear-gradient(90deg, rgb(215, 212, 255) 19%, rgb(240, 191, 217) 100%);" >
                <div class="modal-header">
                    <h5 class="modal-title">ENQUIRY FORM</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                   <form  name="form1" action="" method="POST">
                   	<div class="form-group">
                   		 	<input type="text" placeholder="Your Name" class="form-control" name="name" required />
                   	</div>
                   		<div class="form-group">
                   		 	<input type="email" placeholder="Email ID" class="form-control" name="email" required />
                   	</div>
                   	  <div class="form-group pb-4">
                                    <select class="form-control" name="msg" >
                                        <option value="">Choose Your Course</option>
                                        <option value="Python-Django+React">PYTHON-DJANGO+REACT JS</option>
                                        <option value="Php-Laravel+React">PHP-LARAVEL+REACT JS</option>
                                        <option value="MERN stack">MERN FULLSTACK</option>
                                        <option value="Python-Django">PYTHON-DJANGO</option>
                                        <option value="Php-Laravel">PHP-LARAVEL</option>
                                        <option value="React">REACT JS</option>
                                        <option value="Frontend Development">FRONTEND DEVELOPMENT</option>
                                    </select>
                                </div>
                   		<div class="form-group">
                   		 	<input type="number" placeholder="Contact Number" class="form-control" name="contact"  pattern="^[6789]\d{9}$" required/>
                   	</div>
                   	 <?php if(!empty($message)){ ?>
                                    <div class="success ">
                                        <p class="text-success"><strong><?php echo $message;?></strong></p>
                                    </div>
                                    <?php } ?>
                   	<div> <center> <input type="submit" class="btn btn-primary" name="send" value="Submit" onclick="allnumeric(document.form1.contact);" ></center></div>

                   </form>
                </div>
             
            </div>
        </div>
    </div>
   <div class="container-fluid">
    	   <nav class="navbar navbar-expand-md navbar-dark bg-white fixed-top" >
        <img src="assets/images/logo.png" alt='' height="50px" width="70px"/>
        <a href="index.php" class="navbar-brand text-primary font-weight-bold "><span style="font-family: 'Dosis', sans-serif;font-size: 22px;">BLUBAY SOLUTIONS</span></a>
    <button type="button" class="navbar-toggler t_btn" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse" >
            <div class="navbar-nav ml-auto" style="margin-bottom:-2%" >
            	
                <a href="index.php" class="nav-item nav-link" ><p style="color: darkblue; font-family: 'Dosis', sans-serif;font-size: 16px;" ><b>HOME</b></p></a>
                <a href="about.html" class="nav-item nav-link" ><p style="color: rgb(128, 0, 49);font-family: 'Dosis', sans-serif;font-size: 16px;"><b>ABOUT</b></p></a>
                <a href="course.php" class="nav-item nav-link" ><p style="color: rgb(128, 0, 49);font-family: 'Dosis', sans-serif;font-size: 16px;"><b>COURSE</b></p></a>
                <a href="placements.html" class="nav-item nav-link"><p style="color: rgb(128, 0, 49);  font-family: 'Dosis', sans-serif;font-size: 17px;"><b>PLACEMENTS</b></p></a>
                <a href="contact.php" class="nav-item nav-link" ><p style="color: rgb(128, 0, 49); font-family: 'Dosis', sans-serif;font-size: 17px;"><b>CONTACT</b></p></a>
            </div>
            <div class="navbar-nav ml-2 mr-4">
                <a href="contact.php" class='button-style text-white nav-link-style text-decoration-none' ><span style="font-size: 15px;  font-family: 'Dosis', sans-serif;">Get In Touch</span><span class='fa fa-angle-right ml-2' style='font-size:18px'></span></a>
            </div>
        </div>
    </nav>
    	
    </div>
     <div class='container-fluid body' style="padding-top:-20%"  >
                <div class='wrapper'>
                   <div class='box'>
                       <div></div>
                       <div></div>
                       <div></div>
                       <div></div>
                       <div></div>
                       <div></div>
                       <div></div>
                       <div></div>
                       <div></div>
                       <div></div>
                    </div>
                </div>
          </div> 
    <div class='container-fluid' >
                <div class='row'>
                    <div class='col-lg-7' style="margin-top:80px;padding-bottom: 30px;" data-aos="fade-up"  data-aos-once="true">
                        <h1 class='text-white display-4 pb-3 text-center' style="font-weight:bold;padding-top: 10%;">Developing your skills one step at a time</h1>
                        <h5 class='text-white pb-3 text-center'>We are team of talented Trainers Making you a competitive individual</h5>
                        <p class='text-white text-center'>Blubay Solutions is a Software Training Institute,focusing on enabling them to acquire technical skills.
                        Candidates have the best opportunity to learn with our experienced instructors through theoretical and practical classes.We also guarantee 100 percent job placement Assistance</p>
                        <div style="margin-top:5%;"> 
                        <center>
                             <a href="contact.php" class='button-style text-white nav-link-style text-decoration-none'><span style="font-size: 15px;font-family:sans-serif;">Get In Touch</span><span class='fa fa-angle-right ml-2' style='font-size:18px'></span></a>
                          </center>  
                         
                        </div>
                        </div>
                        <div class='col-lg-5'style="margin-top: 70px; margin-bottom: 7px;" data-aos="zoom-in"  data-aos-once="true">
                        <img src="assets/images/slide1.png" alt='' class='img-fluid vert-move pt-5' />
                        </div>
                </div>
    </div>
      <div  class='container mb-5' style="margin-top:7%" data-aos="zoom-in">
        <h4 class='text-center mb-5 font-weight-bold' style="font-size:35px;font-family:sans-serif;">Why blubay</h4>
         <div class="row">
             <div class="card-deck">
                 <div class="card bg-card pt-3" style="border: none;">
                    <img src="assets/images/w2.png"  alt=""  class="mx-auto d-block" />
                    <div class="card-body">
                    <h5 class="card-title text-center">Expert Level Training</h5>
                    <p class="card-text text-center">Our Expert Trainers will provide you to live classes and doubt clearence section.</p>
                   
                  </div>
                 </div>
                 <div class="card bg-card pt-3" style="border: none;">
                     <img src="assets/images/w4.png"  alt="" height="50px" width="50px"  class="mx-auto d-block" />
                    <div class="card-body">
                    <h5 class="card-title text-center">Build Better Career</h5>
                    <p class="card-text text-center">Our Training programs will helps to build your better career</p>
                    </div>
                 </div>
                 <div class="card bg-card pt-3" style="border: none;">
                    <img src="assets/images/w1.png"  alt="" height="50px" width="50px"  class="mx-auto d-block" />
                   <div class="card-body">
                   <h5 class="card-title text-center">Assured Placements</h5>
                   <p class="card-text text-center">We will provide 100% Placement assistance to you.</p>
                   </div>
                 </div>
                <div class="card bg-card pt-3" style="border: none;">
                    <img src="assets/images/w3.png"  alt=""  class="mx-auto d-block" />
                   <div class="card-body">
                   <h5 class="card-title text-center">Individual classes</h5>
                   <p class="card-text text-center">We have both Online and Offline classes.Each classes are Individual.</p></div>
                </div>
            </div> 
        </div>
    </div>
    <div class="container-fluid" data-aos="fade-down"><h1 class="text-center mb-5">Trending Courses</h1></div>
       <div class="skew-c "></div>
       <div style="width:100%;" class='div-bg'>
        <div class="container pb-5 "data-aos="fade-down">
            <div class="row">
                <div class="card-deck"> 
                     <div class="card card-style">
                        <center>
                             <img src="assets/images/c6.png"  alt="..."  class="img-fluid" />
                        </center>
                       
                     <div class="card-body">
                        <div class="card-title">
                         <h6 class="text-center"><b>FULL STACK</b></h6>
                         <h6 class="text-center"><b>PYTHON-DJANGO+REACT</b></h6></div>
                        <div class="card-text"> <p class="text-center">Django provides a powerful form library that handles rendering forms as HTML</p></div>
                     </div>
                      <div class="card-footer border border-0">
                            <center><button class="btn button-style text-white" onclick="togglePopup()">Apply Now</button></center>
                        </div>
                       
                     </div>
                      <div class="card card-style">
                        <center>
                             <img src="assets/images/c5.png"  alt="..."  class="img-fluid"/>
                        </center>
                    
                      <div class="card-body">
                        <div class="card-title">
                            <h6 class="text-center"><b>FULL STACK</b></h6>
                         <h6 class="text-center"><b>PHP-LARAVEL+REACT</b></h4></div>
                         <div class="card-text"> <p class="text-center">Backend Create using PHP and with their Laravel web application framework  </p></div>
                      </div>
                        <div class="card-footer border border-0">
                            <center><button class="btn button-style text-white" onclick="togglePopup()">Apply Now</button></center>
                        </div>
                    </div>
                    <div class="card">
                        <center>
                            <img src="assets/images/c4.png"  class="img-fluid" alt="..."/>
                        </center>
                        
                     <div class="card-body">
                        <div class="card-title">
                            <h6 class="text-center"><b>FULL STACK</b></h6>
                         <h6 class="text-center"><b>MERN</b></h6></div>
                         <div class="card-text"> <p class="text-center">MERN is a framework made up of the stack of MongoDB, Express.js, React.js, and Nodejs</p></div>
                     </div>
                       <div class="card-footer border border-0"><center><button class="btn button-style text-white" onclick="togglePopup()">Apply Now</button></center></div>
                     </div>
                    <div class="card">
                        <center>
                             <img src="assets/images/c7.png"  class="img-fluid" alt="..."/>
                        </center>
                       
                     <div class="card-body">
                        <div class="card-title"> <h6 class="text-center"><b>REACT JS</b></h6></div>
                         <div class="card-text"> <p class="text-center">React is a front-end Js library for building user interfaces based on components.</p></div>
                     </div>
                       <div class="card-footer border border-0"><center><button class="btn button-style text-white" onclick="togglePopup()">Apply Now</button></center></div>
                    </div>
                </div>
            </div>
              <div class="row mt-3">
                <div class="card-deck">
                    <div class="card">
                        <center>
                             <img src="assets/images/c3.png"  class="img-fluid"  alt="..."/>
                        </center>
                       
                       <div class="card-body">
                        <div class="card-title"> <h6 class="text-center"><b>PYTHON-DJANGO</b></h6></div>
                         <div class="card-text"><p class="text-center">Django provides a powerful form library that handles rendering forms as HTML</p></div>
                     </div>
                       <div class="card-footer border border-0"><center><button class="btn button-style text-white" onclick="togglePopup()">Apply Now</button></center></div>
                    </div>
                   <div class="card">
                    <center>
                         <img src="assets/images/c2.png"  class="img-fluid" alt="..."/>
                    </center>
                     <div class="card-body">
                        <div class="card-title"> <h6 class="text-center"><b>PHP-LARAVEL</b></h6></div>
                         <div class="card-text"> <p class="text-center">Backend Create using PHP and with their Laravel web application framework  </p></div>
                     </div>
                      <div class="card-footer border border-0"><center><button class="btn button-style text-white" onclick="togglePopup()">Apply Now</button></center></div>
                    </div>
                    <div class="card card-style">
                        <center>
                             <img src="assets/images/c1.png"  class="img-fluid" alt="..."/>
                        </center>
                       
                     <div class="card-body">
                        <div class="card-title"> <h6 class="text-center"><b>FROND END DEVELOPMENT</b></h6></div>
                         <div class="card-text pb-5">  <p class="text-center">Create a Website using HTML ,css and bootstrap framework with photoshop and javascript. </p></div>
                     </div>
                       <div class="card-footer border border-0"><center><button class="btn button-style text-white" onclick="togglePopup()">Apply Now</button></center></div>
                       </div>
                    <div class="card" style="background-color:rgb(237, 233, 252);border: none;"></div>
                </div>
            </div>
        </div>
    </div> 
     <div  class='container-fluid' >
       <h1 class='text-center mb-5 mt-5'>Our Placements</h1> 
       <div class='row'>
        <div class='col-lg-4'><img src="assets/images/place-imgg.gif" alt='' class="img-fluid" /></div>
        <div class='col-lg-1'></div>
        <div class='col-lg-7' style="margin-top:70px"> 
            <marquee  behavior="alternate">
                    <img src="assets/images/m1.jpg" alt='' height="300px" width="250px" class='mr-4' style="box-shadow: 0px 9px 18px rgba(0,0,0,0.12), 0px 5px 7px rgba(0,0,0,0.5)"/>
                    <img src="assets/images/m2.jpg" alt='' height="300px" width="250px" class='mr-4' style="box-shadow: 0px 9px 18px rgba(0,0,0,0.12), 0px 5px 7px rgba(0,0,0,0.5)"/>
                    <img src="assets/images/m3.jpg" alt='' height="300px" width="250px" class='mr-4' style="box-shadow: 0px 9px 18px rgba(0,0,0,0.12), 0px 5px 7px rgba(0,0,0,0.5)"/>
                    <img src="assets/images/m4.jpg" alt=''height="300px" width="250px" class='mr-4' style="box-shadow: 0px 9px 18px rgba(0,0,0,0.12), 0px 5px 7px rgba(0,0,0,0.5)"/>
                     <img src="assets/images/m5.jpg" alt=''height="300px" width="250px" class='mr-4' style="box-shadow: 0px 9px 18px rgba(0,0,0,0.12), 0px 5px 7px rgba(0,0,0,0.5)"/>
                    <img src="assets/images/m6.jpg" alt=''height="300px" width="250px" class='mr-4' style="box-shadow: 0px 9px 18px rgba(0,0,0,0.12), 0px 5px 7px rgba(0,0,0,0.5)"/>
                    <img src="assets/images/m7.jpg" alt=''height="300px" width="250px" class='mr-4' style="box-shadow: 0px 9px 18px rgba(0,0,0,0.12), 0px 5px 7px rgba(0,0,0,0.5)"/>             
             </marquee>
           
        <center>
            <div><a href="placements.html" class='btn button-style text-white nav-link-style mt-5' >View More</a></div>
        </center>
        </div>
       </div>
    </div> 
     <div class="demo" >
  <div class="container">
    <div class="row" >
      <div id="testimonial-slider" class="owl-carousel">
        <div class="testimonial">
          <span class="icon fa fa-quote-left" style="font-size:30px;"></span>

          <p class="description">
            Start with blubay solutions if you want to explore your vision in web. Blubay solutions will help you to reach your destination. Bluebay the ultimate...
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="assets/images/u1.png" alt="">
            </div>
            <h3 class="name text-primary">Sreeraj BV</h3>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
           <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            

          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left" style="font-size:30px;"></span>
          <p class="description">
            The course at Blubay solution is very good and helpful for learning concepts to a deep level. I learned manythings here about webdesigning and php. I got good job through the training.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="assets/images/u3.png" alt="">
            </div>
            <h3 class="name text-primary">SWARNA LAL</h3>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            </div>
        </div>
        <div class="testimonial" height="500px">
          <span class="icon fa fa-quote-left" style="font-size:30px;"></span>
          <p class="description">
            Dedicated staffs. One of the Best PHP Training center and HR Consultancy. Right place to enhance our knowledge. Special Thanks to my Faculties. Thank You Blubay.
         </p>
          <div class="testimonial-content">
            <div class="pic">
             <img src="assets/images/u2.png" alt="">
            </div>
            <h3 class="name text-primary">AFSAL K.P</h3>
             <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>

          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left" style="font-size:30px;"></span>
          <p class="description">
            Good place to study web development. Friendly atmosphere. they also provide placement. I got a job after completing my course. Thank you
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="assets/images/u5.png" alt="">
            </div>
            <h3 class="name text-primary">Basith Mogral</h3>
             <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>

          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left" style="font-size:30px;"></span>
          <p class="description">
           They are proving the best PHP IT training program also giving a couse completion and experience certificate. I got a good job through this training. .
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="assets/images/u6.png" alt="">
            </div>
            <h3 class="name text-primary">Ananya Chandran</h3>
             <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>

          </div>
        </div>
                <div class="testimonial">
          <span class="icon fa fa-quote-left" style="font-size:30px;"></span>
          <p class="description">
            Excellent service providers.Blubay is very good place to learn and develop our knowledge level.Specially good faculties and also providing quick placement.
          </p>
          <div class="testimonial-content">
            <div class="pic">
             <img src="assets/images/u4.png" alt="">
            </div>
            <h3 class="name">Anu M.S</h3>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>
            <span class="icon fa fa-star" style="font-size:17px;color: yellow;"></span>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class='bg-footer' style="margin-bottom:-20px">
        <div class='container-fluid  pt-5 ' style="background-color:black">
            <div class='row'>
                <div class='col-lg-3 text-dark text-justify'>
                 <ul class='text-secondary' type='none'>
                  <li class='text-dark mb-3'>
                   <img src="assets/images/logo.png" alt='' height="40px" width="60px"/>
                  </li>
                  <li><h4 class='text-white'>BLUBAY SOLUTIONS</h4></li>
                  <li><p class='text-white'>Blubay Solutions has been a pioneer of fully-integrated Website designers and developers</p></li>
                 </ul>

                </div>
                <div class='col-lg-3 text-dark'>
                <ul class='text-secondary' type='none'>
                <li class='text-dark pb-2'><h4 class='text-white'>Services</h4></li>  
                <li class='text-white pb-2'>Training</li>
                <li class='text-white pb-2'>Internship</li>
                <li class='text-white pb-2'>Web development</li>
                <li class='text-white pb-2'>Placements</li>
                <li class='text-white pb-2'>SEO</li>
                
                </ul>

                </div>
                <div class='col-lg-3 '>
                   
                <ul class='text-white' type='none'>
                <li><h4>Quick Links</h4></li>  
                <li class='pb-2 pt-2'><a href="index.php" style="text-decoration:none;" class="fa fa-angle-right "><span class="text-white" style="font-family: sans-serif;">&nbsp;&nbsp;Home</span></a></li>
                <li class='text-white pb-2'><a href="about.html" style="text-decoration:none;" class="fa fa-angle-right "><span class="text-white" style="font-family: sans-serif;">&nbsp;&nbsp;About</span></a></li>
                <li class='text-white pb-2'><a href="course.php" style="text-decoration:none;" class="fa fa-angle-right "><span class="text-white" style="font-family: sans-serif;">&nbsp;&nbsp;Course</span></a></li>
                <li class='text-white pb-2'><a href="placements.html" style="text-decoration:none;" class="fa fa-angle-right"><span class="text-white" style="font-family: sans-serif;">&nbsp;&nbsp;Placements</span></a></li>
                <li class='text-white pb-2'><a href="contact.php" style="text-decoration:none;" class="fa fa-angle-right"><span class="text-white" style="font-family: sans-serif;">&nbsp;&nbsp;Contact</span></a></li>
                
                </ul>

                </div>
               
                <div class='col-lg-3 text-dark'>
                    <h4 class='text-white'>Contact us</h4>
                    <p class='text-white'>
                    7/1152 U, 4th Floor, Kalpaka building,
                   Townhall road, Opp Crown theatre,Calicut</p>

                   <p class="text-white"> <span class="text-primary">Phone:</span> +91 9072663351</p>
                   <p class="text-white pl-5" style="margin-top:-5%;">&nbsp;+91 9072663352</p>
                    <p class="text-white pl-5" style="margin-top:-5%;">&nbsp;+91 9072663353</p>
                    <p class='text-white'><span class="text-primary">Email:</span> blubaysolutions@gmail.com
                    </p>
                    <p class="text-white pl-5" style="margin-top:-5%;">info@blubaysolutions.com
                    
                    </p>
                   
               </div>   
                  </div>
                
                  </div> 
                  <div class='container-fluid copy-section bg-black'>
                    <div class="row">
                        <div class="col"> <p class='text-white pl-5 pt-4 '>&copy;2015<span class='text-primary'>BLUBAY SOLUTIONS</span>.All Rights Reserved</p></div>
                        <div class="col"><a href="https://wa.me/+919072663351" target="_blank" style="margin-left: 85%;" >
                      <img class="ml-auto" src="assets/images/what.png" alt="WhatsApp Button" width="50" height="50" ></a></div>
                    </div>
                   
                    
             </div>
         </div> 
    </div> 
	<?php
	 if(!empty($_POST["send"])){

            $name=$_POST["name"];
            $contact=$_POST["contact"];
            $msg=$_POST["msg"];
            $toEmail="contactform@blubaysolutions.com";

            $mailHeaders="Name: " . $name.
            "\r\n Phone: " . $contact .
            "\r\n Course: ". $msg . "\r\n";

            if(mail($toEmail,$name,$mailHeaders)){
               $message="Applied Successfully."; 
            }

        }
	?>
	 <script type="text/javascript">
     function allnumeric(inputtxt)
      {
      var numbers = /^\d{10}$/
          if(inputtxt.value.match(numbers))
          {
          // alert('Your Registration number has accepted....');
          }
          else
          {
          alert('Invalid Contact Number');
          }
      }
    </script>

 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init({duration:3000,once:true,});</script>
   
    <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
    <script  src="assets/js/script.js"></script>

</body>
</html>
