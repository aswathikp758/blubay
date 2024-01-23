<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/squre_particles.css"/>
     <link rel="stylesheet" href="assets/css/popup.css">
       <script type="text/javascript" src="assets/js/popup.js"></script>
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
               $message="Your Information is Received Successfully."; 
            }

        }
    ?>
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
                <a href="index.php" class="nav-item nav-link" ><p style="color: rgb(128, 0, 49); font-family: 'Dosis', sans-serif;font-size: 16px;" ><b>HOME</b></p></a>
                <a href="about.html" class="nav-item nav-link" ><p style="color: rgb(128, 0, 49);font-family: 'Dosis', sans-serif;font-size: 16px;"><b>ABOUT</b></p></a>
                <a href="course.php" class="nav-item nav-link" ><p style="color: darkblue;font-family: 'Dosis', sans-serif;font-size: 16px;"><b>COURSE</b></p></a>
                <a href="placements.html" class="nav-item nav-link"><p style="color: rgb(128, 0, 49);  font-family: 'Dosis', sans-serif;font-size: 17px;"><b>PLACEMENTS</b></p></a>
                <a href="contact.php" class="nav-item nav-link" ><p style="color: rgb(128, 0, 49); font-family: 'Dosis', sans-serif;font-size: 17px;"><b>CONTACT</b></p></a>
            </div>
            <div class="navbar-nav ml-2 mr-4">
                <a href="contact.php" class='button-style text-white nav-link-style text-decoration-none' ><span style="font-size: 15px;  font-family: 'Dosis', sans-serif;">Get In Touch</span><span class='fa fa-angle-right ml-2' style='font-size:18px'></span></a>
            </div>
        </div>
    </nav>
    </div>
       
	 <div class='abt_an' style="margin-top:5%">
           <div class='container-fluid abt_container'  >
      
           <div class='row'>
            <div class='col-lg-7 mt-5'>
                <h1 class='text-center text-white mb-3' style="marginTop:7%">All Courses</h1>
        <p class='text-white text-center'>Blubay has expertise who can work with you to understand your time to time needs and get back to you with effective Web development. We Capture all your thoughts and coloring your thoughts and create before you as best ever Website</p>
         <center>
           <div class="mt-5">
              <a href="contact.php" class='button-style text-white nav-link-style text-decoration-none'><span style="font-size: 15px;font-family:sans-serif;">Get In Touch</span><span class='fa fa-angle-right ml-2' style='font-size:18px'></span></a>
        </div>
         </center>
               
            </div>
            <div class='col-lg-5 mt-2'>
              <img src="assets/images/c_am2.png" alt='' class="img-fluid d-none d-md-block vert-move"/>
               
            </div>
         </div>
         
         
      </div>
 
          <div class='mt-5 mb-5 '>
        <h1 class='text-center font-weight-bold' style="margin-bottom:100px";>Trending Courses</h1>
      
        <div style="width:100%;" class='div-bg'>
        <div class="container pb-5 "data-aos="fade-down">
            <div class="row pt-5">
                <div class="card-deck"> 
                     <div class="card ">
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
        
                        <center><button class="btn button-style text-white" onclick="togglePopup()">Apply Now</button></center></div>
                       
                     </div>
                      <div class="card ">
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
                        <div class="card-title"> <h6 class="text-center"><b>REACT</b></h6></div>
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
                    <div class="card ">
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
        </div>
        </div>

    </div>
          <div class='container-fluid bg-course mt-5 mb-4'>
            <div class='row'>
              
              <div class='col-lg-6'>
                 <img src="assets/images/Boy.gif" alt="any pic" class="img-fluid">
              </div>
               <div class="col-lg-1"></div> 
              <div class='col-lg-5' style="margin-top:60px">
                    <ul type="none">
                    <li><h3 class='text-warning mb-5 ' style="font-size:45px">Our Speciality</h3></li>
                      <li><h5 style="font-family:sans-serif;"><span class='fa fa-angle-right ml-2' style='font-size:20px;color: green; font-weight: bold;'></span>&nbsp;&nbsp;&nbsp;3/4 Month Courses</h5></li>
                     
                      <li><h5 style="font-family:sans-serif;"><span class='fa fa-angle-right ml-2' style='font-size:20px;color: green; font-weight: bold;'></span>&nbsp;&nbsp;&nbsp;Expert Level Teaching</h5></li>
                       <li><h5 style="font-family:sans-serif;"><span class='fa fa-angle-right ml-2' style='font-size:20px;color: green; font-weight: bold;'></span>&nbsp;&nbsp;&nbsp;Individual Classes</h5></li>
                        <li><h5 style="font-family:sans-serif;"><span class='fa fa-angle-right ml-2' style='font-size:20px;color: green; font-weight: bold;'></span>&nbsp;&nbsp;&nbsp;100% Practical classes</h5></li>
                     <li><h5 style="font-family:sans-serif;"><span class='fa fa-angle-right ml-2' style='font-size:20px;color: green; font-weight: bold;'></span>&nbsp;&nbsp;&nbsp;Online/Offline Classes</h5></li>

                      <li><h5 style="font-family:sans-serif;"><span class='fa fa-angle-right ml-2' style='font-size:20px;color: green; font-weight: bold;'></span>&nbsp;&nbsp;&nbsp;Interview Preparations</h5></li>
                     
                      <li><h5 style="font-family:sans-serif;"><span class='fa fa-angle-right ml-2' style='font-size:20px;color: green; font-weight: bold;'></span>&nbsp;&nbsp;&nbsp;100% Placements</h5></li>
                       <li><h5 style="font-family:sans-serif;"><span class='fa fa-angle-right ml-2' style='font-size:20px;color: green; font-weight: bold;'></span>&nbsp;&nbsp;&nbsp;Course certificates</h5></li>
                      <li><h5 style="font-family:sans-serif;"><span class='fa fa-angle-right ml-2' style='font-size:20px;color: green; font-weight: bold;'></span>&nbsp;&nbsp;&nbsp;24x7 Support</h5></li>
                  </ul>
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
                <li class='text-white pb-2'><span></span>Training</li>
                <li class='text-white pb-2'><span><BiSolidRightArrow class='nav-arrow'/></span>Internship</li>
                <li class='text-white pb-2'><span><BiSolidRightArrow class='nav-arrow'/></span>Web development</li>
                <li class='text-white pb-2'><span><BiSolidRightArrow class='nav-arrow'/></span>Placements</li>
                <li class='text-white pb-2'><span><BiSolidRightArrow class='nav-arrow'/></span>SEO</li>
                
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

                   <p class="text-white"><span class="text-primary">Phone:</span> +91 9072663351</p>
                   <p class="text-white pl-5" style="margin-top:-5%;">&nbsp;+91 9072663352</p>
                    <p class="text-white pl-5" style="margin-top:-5%;">&nbsp;+91 9072663353</p>
                    <p class='text-white'><span class="text-primary">Email:</span> blubaysolutions@gmail.com
                    </p>
                    <p class="text-white pl-5" style="margin-top:-5%;">info@blubaysolutions.com</p>
                      
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
     

 
</body>
</html>