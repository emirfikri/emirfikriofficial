<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    #html6 {
    /*height: 100%;*/
     max-height: 500px; 
    /*width: 1000px;*/
    background-color: hsla(200,40%,30%,.4);
    background-image:       
        url('https://78.media.tumblr.com/cae86e76225a25b17332dfc9cf8b1121/tumblr_p7n8kqHMuD1uy4lhuo1_540.png'), 
        url('https://78.media.tumblr.com/66445d34fe560351d474af69ef3f2fb0/tumblr_p7n908E1Jb1uy4lhuo1_1280.png'),
        url('https://78.media.tumblr.com/8cd0a12b7d9d5ba2c7d26f42c25de99f/tumblr_p7n8kqHMuD1uy4lhuo2_1280.png'),
        url('https://78.media.tumblr.com/5ecb41b654f4e8878f59445b948ede50/tumblr_p7n8on19cV1uy4lhuo1_1280.png'),
        url('https://78.media.tumblr.com/28bd9a2522fbf8981d680317ccbf4282/tumblr_p7n8kqHMuD1uy4lhuo3_1280.png');
    background-repeat: repeat-x;
    background-position: 
        0 20%,
        0 100%,
        0 50%,
        0 100%,
        0 0;
    background-size: 
        2500px,
        800px,
        500px 200px,
        1000px,
        400px 260px;
    animation: 50s para infinite linear;
    }

@keyframes para {
    100% {
        background-position: 
            -5000px 20%,
            -800px 95%,
            500px 50%,
            1000px 100%,
            400px 0;
        }
    }
  </style>
  <meta charset="utf-8">
  <title>Emir EmirFikri</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{!! asset('portfolio/img/favicon.png') !!}" rel="icon">
  <link href="{!! asset('portfolio/img/apple-touch-icon.png" rel="apple-touch-icon') !!}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{!! asset('my/css/bootstrap.min.css') !!}" rel="stylesheet" />

  <!-- Libraries CSS Files -->
  <link href="{!! asset('portfolio/lib/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" />

  <!-- Main Stylesheet File -->
  <link href="{!! asset('portfolio/css/style.css') !!}" rel="stylesheet" />
  <head>
    @include('./layout.partials.head')
    @include('./layout.partials.header')
  </head>
  <!-- =======================================================
    Template Name: Kelvin
    Template URL: https://templatemag.com/kelvin-bootstrap-resume-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="64" data-target="#section-topbar">

  {{-- <div id="section-topbar">
    <div id="topbar-inner">
      <div class="container">
        <div class="row">
          <div class="dropdown">
            <ul id="nav" class="nav">
              <li class="menu-item"><a class="smothscroll" href="#about" title="About"><i class="fa fa-user"></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#resume" title="Resume"><i class="fa fa-file-text-o"></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#work" title="Works"><i class="fa fa-briefcase"></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#contact" title="Contact"><i class="fa fa-envelope"></i></a></li>
            </ul>
            <!--/ uL#nav -->
          </div>
          <!-- /.dropdown -->

          <div class="clear"></div>
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->

      <div class="clear"></div>
    </div>
    <!--/ #topbar-inner -->
  </div>
  <!--/ #section-topbar --> --}}
  
  {{-- a --}}
  <div style="padding-top: 0px;">
  @include('layout.partials.banners')
  </div>
  {{-- a --}}

  {{-- <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-12">
          <h1>William T. Kelvin</h1>
          <h3>Web Designer | contact@example.com</h3>
        </div>
        <!--/.col-lg-12 -->
      </div>
      <!--/.row -->
    </div>
    <!--/.container -->
  </div> --}}
  <!--/.#headerwrap -->


  <section id="about" name="about">
    <div id="intro">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-lg-offset-1">
            <h5>INTRO</h5>
          </div>
          <div class="col-lg-6">
            <p>I'm a web and mobile developer. I'm interested in all kinds of application developement, but my major focus is on web & mobile application development. I have skills in fields like
               web development (front-end and back-end), mobile development (Flutter), Api, Data scraping, Content Management System (CMS).</p>
          </div>
          <div class="col-lg-3">
            <p><a href="#"><i class="icon-file"></i></a>
              <sm>DOWNLOAD PDF</sm>
            </p>
          </div>

        </div>
        <!--/.row -->
        <div class="row">

          <div class="col-lg-2 col-lg-offset-1">
            <h5>ABOUT ME</h5>
          </div>
          <div class="col-lg-2">
            <p>Name :</p>
          </div>
          <div class="col-lg-6">
            <p><a href="#"><i class="icon-file"></i></a>
              <sm>Emir Fikri bin Roslan</sm>
            </p>
          </div>
          <div class="col-lg-2 col-lg-offset-3">
            <p>Age :</p>
          </div>
          <div class="col-lg-6 ">
            <p><a href="#"><i class="icon-file"></i></a>
              <sm>27</sm>
            </p>
          </div>
          <div class="col-lg-2 col-lg-offset-3">
            <p>From :</p>
          </div>
          <div class="col-lg-6 ">
            <p><a href="#"><i class="icon-file"></i></a>
              <sm>Klang</sm>
            </p>
          </div>
          <div class="col-lg-2 col-lg-offset-3">
            <p>Title :</p>
          </div>
          <div class="col-lg-6 ">
            <p><a href="#"><i class="icon-file"></i></a>
              <sm>Web Developer / Mobile Developer</sm>
            </p>
          </div>
          <div class="col-lg-2 col-lg-offset-3">
            <p>Highest Cert :</p>
          </div>
          <div class="col-lg-6 ">
            <p><a href="#"><i class="icon-file"></i></a>
              <sm>Bachelor Of Netcentric Computing</sm>
            </p>
          </div>

        </div>

      </div>
      <!--/.container -->
    </div>
    <!--/ #intro -->
  </section>


  <section id="resume" name="resume">
    <!--EDUCATION DESCRIPTION -->
    <div class="container desc">
      <div class="row">

        <div class="col-lg-2 col-lg-offset-1">
          <h5>EDUCATION</h5>
        </div>
        <div class="col-lg-6">
          <p>
            <t>Master of ...</t><br/> UiTM SHAH ALAM <br/>
            <i>Future Plan</i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>FUTURE PLAN</sm><br/>
            <imp>
              <sm>IN PROGRESS</sm>
            </imp>
          </p>
        </div>
        <div class="col-lg-6 col-lg-offset-3">
          <p>
            <t>Bachelor of Netcentric Computing</t><br/> UiTM SHAH ALAM <br/>
            <i>2015 - 2018</i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>GRADUATED IN 2018</sm><br/>
            <imp>
              <sm>CURRRENT HIGHEST CERT</sm>
            </imp>
          </p>
        </div>

        <div class="col-lg-6 col-lg-offset-3">
          <p>
            <t>Diploma in Computer Science</t><br/> UiTM TERENGGANU <br/>
            <i>GRADUATED IN 2014</i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>2014</sm>
          </p>
        </div>

        <div class="col-lg-6 col-lg-offset-3">
          <p>
            <t>SPM</t><br/> SMK SRI ANDALAS <br/>
            <i>GRADUATED IN 2010</i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>2010</sm>
          </p>
        </div>

      </div>
      <!--/.row -->
      <br>
      <hr>
    </div>
    <!--/.container -->
  </section>


  <!--WORK DESCRIPTION -->
  <div class="container desc">
    <div class="row">

      <div class="col-lg-2 col-lg-offset-1">
        <h5>WORK</h5>
      </div>
      
      <div class="col-lg-6 ">
        <p>
          <t>Software Developer</t><br/> Involve Asia<br/>
        </p>
        <ul>     
            <li>Develop, R&D SDK, Productnation App using flutter</li>
            <li>Maintainance/Improvement of Productnation Backend Using Laravel</li>
            <li>Front-End UI improvement for Productnation </li>
            <li>A/B Testing for Productnation UI/UX</li>
        </ul>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>April 2020 - JUNE 2020</sm>
        </p>
      </div>

      <div class="col-lg-6 col-lg-offset-3">
        <p>
          <t>Software Developer</t><br/> Hextar Asset Management<br/>
        </p>
        <ul>     
            <li>Full stack developer for Getlah (front end/ backend/ API (mobile) )</li>
            <li>Design GetEat / GetSupply/ GetLah landing page given by Designer</li>
            <li>Web Scrapping data using Curl for GetEat and GetSupply</li>
            <li>Socket Programming – Created proxy server to take data from POS System</li>
            <li>API for POS using Regex to check pattern of the receipt and Insert data to DB</li>
            <li>Software tester for upcoming project – mospaze.com, orientation app, tapau app, UDW POS system, Getlah </li>
            <li>Maintainance and improvement of project </li>
        </ul>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>SEPT 2018 - MAC 2020</sm>
        </p>
      </div>

      <div class="col-lg-6 col-lg-offset-3">
        <p>
          <t>Software Engineer/Intern</t><br/> Simple Advantage SDN. BHD <br/>
        </p>
        <ul>     
            <li>Development of e-commerce system Kemudi (Laravel)</li>
            <li>As Designer/front end developer</li>
            <li>Create mockup interface and design for project tender</li>
            <li>Front end developer MyGDX system enhancement</li>
            <li>Perhilitan system payment module design/mockup</li>
            <li>Fix Issues and bugs given by team leader/ System analyst</li>
        </ul>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>FEB 2018 - AUG 2018</sm>
        </p>
      </div>
     
      

      <div class="col-lg-6 col-lg-offset-3">
        <p>
          <t>Mobile Developer (INTERNSHIP)</t><br/> THETA-EDGE SDN. BHD<br/>
        </p>
        <p>
          <ul>
            <li>Programming using Eclipse in Android Native</li>
            <li>Implement the interface design given by graphics designer</li>
            <li>Fixed issues and known bugs for smoother experience</li>
            <li>Implement UI/UX  to feel more alive and realistic for user</li>
          </ul>
          {{-- <more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more> --}}
        </p>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>MAY 2014 - SEPT 2014</sm>
        </p>
      </div>
    </div>
    <!--/.row -->
    <br>
    <hr>
  </div>
  <!--/.container -->


  <!--AWARDS DESCRIPTION -->
  <div class="container desc">
    <div class="row">
      <div class="col-lg-2 col-lg-offset-1">
        <h5>Projects</h5>
      </div>
      <div class="col-lg-6">
        <a href="{{route('gallery')}}">
        <p>
          <t>View Gallery </t><br/> Flutter / Laravel / Dart / PHP / Design Improvement / Backend Improvement,Maintainance , API, Screen Scrapping<br/>
        </p>
        </a>
      </div>
      <div class="col-lg-3">
        <p>
          {{-- <sm>NOVEMBER 2013</sm> --}}
        </p>
      </div>

    </div>
    <!--/.row -->
    <br>
  </div>
  <!--/.container -->



  <hr>
  <!--SKILLS DESCRIPTION -->
  <div id="skillswrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-1">
          <h5>SKILLS</h5>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="javascript" height="130" width="130"></canvas>
          <p>Javascript</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="bootstrap" height="130" width="130"></canvas>
          <p>Vue</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="wordpress" height="130" width="130"></canvas>
          <p>Dart</p>
          <br>
        </div>

        <div class="col-lg-3 col-lg-offset-3 centered">
          <canvas id="html" height="130" width="130"></canvas>
          <p>HTML/CSS/Bootstrap</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="photoshop" height="130" width="130"></canvas>
          <p>Flutter</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="illustrator" height="130" width="130"></canvas>
          <p>Laravel</p>
          <br>
        </div>

      </div>
      <!--/.row -->
      <br>
    </div>
    <!--/.container -->
  </div>
  <!--/ #skillswrap -->



  <section id="work" name="work">
    <!--PORTFOLIO DESCRIPTION -->
    <div class="container desc">
      <div class="row">
        <a href="{{route('gallery')}}">
        <div class="col-lg-2 col-lg-offset-1">
          <h5>PORTFOLIO</h5>
        </div>
        <div class="col-lg-6">
          <p><img class="img-responsive" src="{!! asset('portfolio/img/port01.jpg') !!}" alt=""></p>
        </div>
        <div class="col-lg-3">
          <p>Projects</p>
          <p>
            <more>Click any of the image or text here.<br/><br/>
            {{-- <sm><i class="icon-tag"></i> design</sm> --}}
            </more>
          </p>
        </div>

        
        </a>
      </div>
      <!--/.row -->
      <br>
      <br>
      <hr>
    </div>
    <!--/.container -->
  </section>

  <section id="resume" name="resume">
    <!--EDUCATION DESCRIPTION -->
    <div class="container desc">
      <div class="row">

        <div class="col-lg-2 col-lg-offset-1">
          <h5>Reference</h5>
        </div>
        <div class="col-lg-6">
          <p>
            <t>Per Requested</t><br/>
          </p>
        </div>

      </div>
      <!--/.row -->
      <br>
      <hr>
    </div>
    <!--/.container -->
  </section>

  <div id="parallax1" class="parallax text-light text-center " data-stellar-background-ratio="0.5" style="padding-top: 0px;  padding-bottom: 0px;">
    <div id="html6">
    <div class="container">
      <div class="row appear stats">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-clock-o fa-5x"></i>
            </div>
            <strong id="counter-coffee" class="number">3</strong><br />
            <span class="text">Years Exp.</span>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-music fa-5x"></i>
            </div>
            <strong id="counter-music" class="number">25</strong>Hour<br />
            <span class="text">Music Lover</span>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-coffee fa-5x"></i>
            </div>
            <strong id="counter-clock" class="number">6</strong><br />
            <span class="text">Dart<br>PHP<br>Laravel<br>Flutter<br>Bootstrap</span>
          </div>
        </div>
        
      </div>
    </div>
   </div>
   </div>

   

  <section id="contact" name="contact">
    <!--FOOTER DESCRIPTION -->
    <div id="footwrap">
      <div class="container">
        <div class="row">

          <div class="col-lg-2">
            <h5>CONTACT</h5>
          </div>
          <div class="col-lg-10">
            <p>
              <t>Email</t><br/> As per requested <br/>
            </p>
            <p>
              <t>Adress</t><br/> Klang <br/> Selangor, Malaysia. <br/>
            </p>
            <p>
              <t>Phone</t><br/> As per requested <br/>
            </p>
            <p>
              <t>Social Links</t><br/>
              {{-- <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a> --}}
              <a href="https://github.com/emirfikri"><i class="fa fa-github"></i></a>
              <a href="https://www.linkedin.com/in/emirfikriros/"><i class="fa fa-linkedin"></i></a>
              {{-- <a href="#"><i class="fa fa-apple"></i></a> --}}
            </p>
          </div>
          {{-- <div class="col-lg-6">
            <p>
              <sm>CONTACT FORM</sm>
            </p>
            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

              <div class="form-group">
                <label for="contact-name">Your Name</label>
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-email">Your Email</label>
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="contact-message">Your Message</label>
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large">Send Message</button>
              </div>

            </form>

          </div> --}}
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/ #footer -->
  </section>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>EmirFikri</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/kelvin-bootstrap-resume-template/
          Licensing information: https://templatemag.com/license/
        -->
         Created by EmirFikri {{-- template by  <a href="https://templatemag.com/">TemplateMag</a> --}}
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="{!! asset('my/js/jquery.min.js') !!}" ></script> 
  <script src="{!! asset('my/js/bootstrap.min.js') !!}" ></script>
  <script src="{!! asset('portfolio/lib/php-mail-form/validate.js') !!}"></script>
  <script src="{!! asset('portfolio/lib/chart/chart.js') !!}"></script>
  <script src="{!! asset('portfolio/lib/easing/easing.min.js') !!}"></script>


  <!-- Template Main Javascript File -->
  <script src="{!! asset('portfolio/js/main.js') !!}"></script>

</body>

{{-- @include('layout.partials.footer2') --}}
@include('layout.partials.footer-scripts')
</html>
