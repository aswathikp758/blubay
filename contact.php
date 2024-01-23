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
    <link rel="stylesheet" href="assets/css/captcha.css"/>
    <link rel="stylesheet" href="assets/css/squre_particles.css"/>
    <title>Blubay Solutions</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
     <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">

    <script src="assets/js/scripts.js"></script>
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
            "\r\n Message: ". $msg . "\r\n";

            if(mail($toEmail,$name,$mailHeaders)){
               $message="Success"; 
            }

        }
    ?>
	
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
                <a href="course.php" class="nav-item nav-link" ><p style="color: rgb(128, 0, 49);font-family: 'Dosis', sans-serif;font-size: 16px;"><b>COURSE</b></p></a>
                <a href="placements.html" class="nav-item nav-link"><p style="color: rgb(128, 0, 49);  font-family: 'Dosis', sans-serif;font-size: 17px;"><b>PLACEMENTS</b></p></a>
                <a href="contact.php" class="nav-item nav-link" ><p style="color: darkblue; font-family: 'Dosis', sans-serif;font-size: 17px;"><b>CONTACT</b></p></a>
            </div>
            <div class="navbar-nav ml-2 mr-4">
                <a href="contact.php" class='button-style text-white nav-link-style text-decoration-none' ><span style="font-size: 15px;  font-family: 'Dosis', sans-serif;">Get In Touch</span><span class='fa fa-angle-right ml-2' style='font-size:18px'></span></a>
            </div>
        </div>
    </nav>
        </div>
         <!-- --------------- -->

        <div>
        <div class='container-fluid bg-con'  style="padding:30px;margin-top:2px">
        <h1 class='text-center text-white mb-5 pt-5'>Contact Us</h1>
        <h5 class='text-center text-white'>We are here to help you level up</h5>
        <p class='text-white text-center'>We would be happy to Answer your Questions and setup a meeting with you.Email us with any questions or enquires or contact our Number.</p>
         <center>
           <div class='mt-4'>
            <a href="contact.php" class='button-style text-white nav-link-style text-decoration-none'><span style="font-size: 15px;font-family:sans-serif;">Get In Touch</span><span class='fa fa-angle-right ml-2' style='font-size:18px'></span></a>
           </div>
         </center>         
      </div>
      <div class='container'>
        <div class='row'>
            
          <div class='col-lg-5 mt-4'>
           <img src="assets/images/cn1.jpg" alt='' class="img-fluid"/>
          </div>
          <div class="col-lg-2"></div>
          <div class='col-lg-5 '>
           
            <div class='row mt-5'>
              <ul type="none">
                <li><h3 class="mb-4 text-warning">Connect with Us</h3></li>
                <li><h5>Phone</h5></li>
                <li><p><i class="fa fa-phone" style="color:green"></i>&nbsp;9072663351, 9072663352, 9072663353</p></li>
                <li><h5>Email</h5></li>
                <li><p><i class="fa fa-envelope" style="color:green"></i>&nbsp;blubayitsolutions@gmail.com</p></li>
                <li class="pl-3 pb-3">&nbsp;info@blubaysolutions.com</li>
                <li><h5>Location</h5></li>
                <li><div><p><i class="fa fa-map-marker" style="color:green;font-size: 20px;"></i>&nbsp;4th Floor, Kalpaka Building,</p></div> 
                <div><p>&nbsp;&nbsp;Opp Crown Theatre, Near Town Hall Road,</p></div>
                <div><p>&nbsp;&nbsp;Kozhikode, Kerala 673001</p></div></li>
              </ul>
             </div>
            
          </div>
          
        </div>
      </div>
       <div class="container-fluid pt-5 pb-5 pl-5 pr-5" style="background-color:lightgray;">
        <div class='row'>
          <div class='col-lg-6'>
            <form style="width:90%;height:70%;" action="" method="POST" name="form1">
                <div class="form-group">
                    
                    <input type="text" class="form-control" name="name" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control"  name="contact" placeholder="Contact number" required/>
                </div>
                <div class="form-group">
                  <textarea type="text" class='form-control' required name="msg" placeholder='Message' rows="10" cols="100"></textarea>
                </div>
                <!---------->
                    <div class="form-inline">
                    <input type="text" id="capt" readonly class="form-control" value="23XkAq">
                    <div id="refresh" >
                    <img src="assets/images/refresh.png" width="20px" onclick="cap()" style="padding-top:12px;"></div>
                    </div>
                    <div class="form-group" >
                      <input type="text" id="textinput" required placeholder="enter.." class="form-control">  
                    </div>
            
                   
                <!-- -------- -->
                <div class='mt-4 pb-4'>
                   <center><input type="submit" name="send" onclick="allnumeric(document.form1.contact); validcap();" class="btn btn-primary input_field button disabled"></center>
                </div>
                <?php if(!empty($message)){ ?>
                <div class="success">
                    <p class="text-success"><strong><?php echo $message;?></strong></p>
                </div>
                <?php } ?>
               
            </form>
          </div>
          <div class='col-lg-6'>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.1151486848794!2d75.77693177411125!3d11.25293895022546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba659393686a527%3A0xf628f6817f2ea572!2sBLUBAY%20SOLUTIONS!5e0!3m2!1sen!2sin!4v1699358354402!5m2!1sen!2sin" width="100%" height="420"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
	<!------------->
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


     <script type="text/javascript">
        function cap() {

            var alpha=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
                       ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
                       'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

            var a=alpha[Math.floor(Math.random()*62)];
            var b=alpha[Math.floor(Math.random()*62)];
            var c=alpha[Math.floor(Math.random()*62)];
            var d=alpha[Math.floor(Math.random()*62)];
            var e=alpha[Math.floor(Math.random()*62)];
            var f=alpha[Math.floor(Math.random()*62)];

            var sum=a + b + c + d + e + f;

            document.getElementById("capt").value=sum;
        }

        function validcap() {
            var string1 = document.getElementById('capt').value;
            var string2 = document.getElementById('textinput').value;
            if (string1 == string2){
                // alert("Form is validated Succesfully");
                return true;
            }
            else if(string1==null && string2==null ){
                 alert("Please enter a valid captcha");
                return false;
            }
            else {
                alert("Please enter a valid captcha");
                return false;
            }
        }


    </script>
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