

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Link Shortener</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="sources/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="sources/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="sources/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="sources/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="sources/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="sources/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="sources/images/logo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="#"> Home  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#contact">Register</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
               <div class="container">
                  <div class="row d_flex">
                     <div class=" col-xl-8 col-lg-8 col-md-8 col-12-9">
                        <div class="text-bg">
                           <h1>Shorten<br> <span class="white1">Your Link Easily</span></h1>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-4 col-12-3">
                        <div class="text-img">
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
      <!-- end banner -->
    <!-- contint -->
    
    <div >
      
       
       <form method="post" action="{{ route ('short.url')}}">
          @csrf
       <br> <br><br> 
          <table class="contint">
             <tr>
          <td> <h2>Enter URL     :</h2> </td>
          <td> <input name ='original_url' class="url-txt" type="url"  />
          <button class="btn" type="submit"> Short </button></td>
          <td class="td">  @if(session('success_message'))
{!! session('success_message')!!}
@endif
          
</td>
</tr>
</table>
</form>
<br>
<br>
</div>



    <!--end content-->

     <!-- contact -->
     <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact us</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <form class="main_form ">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="form_contril" placeholder="Name " type="text" name="Name ">
                        </div>
                        <div class="col-md-12">
                           <input class="form_contril" placeholder="Phone Number" type="text" name=" Phone Number">
                        </div>
                        <div class="col-md-12">
                           <input class="form_contril" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 ">
                     <div class="cont">
                        
                     </div>
                  </div>
                  <div class="col-md-12">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="sources/js/jquery.min.js"></script>
      <script src="sources/js/popper.min.js"></script>
      <script src="sources/js/bootstrap.bundle.min.js"></script>
      <script src="sources/js/jquery-3.0.0.min.js"></script>
      
      <!-- sidebar -->
      <script src="sources/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="sources/js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

