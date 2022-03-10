<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="animate.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
     <!-- Navbar here -->
     <nav class="navbar navbar-expand-sm bg-light navbar-custom navbar-light border-dark sticky-top border-bottom border-danger">
        <!-- Navbar text-->
   <span class="navbar-text">
    <span class="navbar-text1"> DMD</span> <span class="navbar-text2">Consults</span>
   
   </span>
   <img class="navbar-brand" src="image/DMD site logo.png" height="50px" width="50px">
        <!-- Toggler/collapsibe Button -->
   <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
     <span class="navbar-toggler-icon "></span>
   </button>
   <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
         <ul class="navbar-nav">
           <li class="nav-item">
             <a class="nav-link" href="http://localhost/DMDConsults/index.html"><strong>Home</strong></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="http://localhost/DMDConsults/about.html"><strong>About Us</strong></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="http://localhost/DMDConsults/contact.php"><strong>Contact</strong></a>
           </li>
         </ul>
        
         </div>
       </nav>
       <!-- End of Navbar -->
<div class="container pt-5 main">
    
<div class="row">
<div class="col-md-4 contact-one-col">
<div class="head-text-contact-one">
<h3 class="head-on">
    Get in touch
</h4>
<p>We'll like to hear from you, our friendly chat team is always online</p>
<table>
<tr>
    <th><i class="fas fa-envelope-square foot-icon "></i><span class="ml-2 chat">Chat with us</span></th>
  </tr>

  <tr>
    <td class="pl-4"><span>Our friendly team is here to help<span></dh>
  </tr>
</table>

<table>
<tr>
    <th><i class="fas fa-phone-square foot-icon "></i><span class="ml-2 chat">Phone</span></th>
  </tr>

  <tr>
    <td class="pl-4"><span> +234 8164 134 880</span></td>
    
  </tr>
</table>

</div>
</div>

<div class="col-md-8">
<div class="contact-two-co">
<h3>
    Level up your brand
</h3>
<p>You can reach us anytime</P>
  <form action="contact.php">
  <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name " name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="name">
    </div>
    <div class="form-group">
      <label for="email">Phone Number:</label>
      <input type="" class="form-control" id="phone" placeholder="Enter phone number" name="email">
    </div>
    
    <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>

    <button type="submit" class=" contact-submit-btn form-control">Submit</button>
  </form>
</div>

</div>
</div>
</div>
 





    <script src="jquery.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="wow.min.js"></script>
    <script>new WOW().init();</script>
    
</body>
</html>