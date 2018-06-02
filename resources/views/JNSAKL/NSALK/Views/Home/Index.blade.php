﻿<!DOCTYPE html>
<!--
  * Author: Sri
  * A Design for NSAKL
 -->
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JNSAKL | Welcome</title>
    <link rel="shortcut icon" type="image/x-icon" href="./NSAKL_logo.jpg" />
    <!-- Load Roboto font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Fauna+One|Handlee|Patrick+Hand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bevan|Luckiest+Guy|Titan+One" rel="stylesheet">


    <!-- Load css styles -->
    <link href="{{URL::asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{URL::asset('css/bootstrap-responsive.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('css/web.css')}}" rel="stylesheet" />
    <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
    <![endif]-->
    <link href="{{URL::asset('css/jquery.cslider.css') }}" rel="stylesheet" />
    <link href="{{URL::asset('css/jquery.bxslider.css') }}" rel="stylesheet" />
    <link href="{{URL::asset('css/animate.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fav and touch icons -->
    <!-- commented out image below HB -->
    <!-- <img src="./ico/apple-touch-icon-114.png" alt="" /> -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./webUpload/ico/apple-touch-icon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./webUpload/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./webUpload/apple-touch-icon-72.png">
    <link rel="apple-touch-icon-precomposed" href="./webUpload/ico/apple-touch-icon-57.png">
    <link rel="shortcut icon" href="./ico/favicon.ico">

    <link href="{{URL::asset('css/Main.css') }}" rel="stylesheet" />

</head>

<body>
    
    <div class="navbar">
        <div class="navbar-inner">
            <img id="captain" src="{{URL::asset('images/captainsmall.png')}}" alt="">
            <div class="container">
               
                <!-- Navigation button, visible on small resolution -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <i class="icon-menu"></i>
                </button>
                <!-- Main navigation -->
                <div class="nav-collapse collapse" >
                    <ul class="nav" id="top-navigation" style="left: 10%;">
                    

                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#news">Our Values</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#findyourgroup">Join a Group</a></li>

                        <li>
                            <a href="#" id="teamCommunity" class="brand">
                                <!-- <img src="./NSAKL_logo.jpg" style="width:75px;" alt="Logo" /> -->
                                <img src="{{URL::asset('images/logonew.png')}}" style="width:75px;" alt="Logo" />
                            </a>
                        </li>

                        <li><a href="#aboutus">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a id="ancLogin" href="#">Login/Register</a></li>
                        
                    </ul>
                </div>
                <!-- End main navigation -->
            </div>
        </div>
    </div>
    <!-- Start home section -->
    <div id="home">
        <!-- Start cSlider -->
        <div id="da-slider" class="da-slider">
            <div class="triangle"></div>
            <!-- mask elemet use for masking background image -->
            <div class="mask"></div>
            <!-- All slides centred in container element -->
            <div class="container">
                <!-- Start first slide -->
                <!-- <div class="da-slide" style="background-image: url('./neighbour4.jpg')"> -->
                    <div class="da-slide" style="background-image: url('./images/cartoon.jpg')">

                    <!-- commented out below HB -->

                <!--     <h2 class="fittext2">Welcome to Neighbourhood</h2>
                    <h4>Clean</h4>
                    <p style="width: 30%;background-color: rgba(38, 42, 95, 0.8);height: auto;border-radius: 5px;padding: 10px;">Neighbourhood Support (Auckland City) Inc. is a non-profit organisation affiliated with Neighbourhood Support New Zealand and works closely with NZ Police, NZ Fire Service, Civil Defence & Emergency Management, Auckland Council and other strategic partners to make our homes, streets, neighbourhoods and communities safer and more caring places in which to live.</p>
                    <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="./Slider01.png" alt="image01" width="320">
                        </div> -->

                </div>
                <!-- End first slide -->
                <!-- Start second slide -->
                <div class="da-slide" style="background-image: url('./images/neighbour5.jpg')">
                    
                    <!-- commented out below HB -->

                 <!--    <h2>Some common sense safety tips</h2>
                    <h4>We care about you</h4>
                    <p style="width: 30%;background-color: rgba(38, 42, 95, 0.8);height: auto;border-radius: 5px;padding: 10px;">
                        Don't keep large sum of money at home<br>
                        Insure all your valuables<br>
                        Keep valuables out of sight<br>
                        Lock windows and doors when you leave home<br>
                        Never invite strangers into your home
                    </p> -->


                </div>
                <!-- End second slide -->
                <!-- Start third slide -->
                <div class="da-slide" style="background-image: url('./images/neighbour6.jpg')">

                    <!-- commented out below HB -->
              <!--       <h2>Innovative</h2>
                    <p style="width: 30%;background-color: rgba(38, 42, 95, 0.8);height: auto;border-radius: 5px;padding: 10px;">
                        Most areas in Auckland have Neighbourhood Support groups and it is best to ask about these when moving into a new home.
                        <br />If you would like to contact your local Neighbourhood Support group or set up a new group, contact us or your local community constable.<br>
                        <a href="#" class="da-link button">Read more</a>
                            <div class="da-img">
                                <img src="./Slider03.png" width="320" alt="image03">
                            </div>
                </div> -->
                <!-- Start third slide -->
                <!-- Start cSlide navigation arrows -->
                <div class="da-arrows">
                    <span class="da-arrows-prev"></span>
                    <span class="da-arrows-next"></span>
                </div>
                <!-- End cSlide navigation arrows -->
            </div>
        </div>
    </div>
    <!-- End home section -->
    <!-- Notices section start -->
    <div class="section primary-section" id="news">
        <div class="container">
            <!-- Start title section -->
            <div class="title">
                <h1>Our Core Values, Kau Papa and Missions</h1>
                <!-- Section's title goes here -->
                <ul>
                    <li>Self Respect/ Pride and Giving Respect of others and Supporting Community Rules</li>
                    <li>Identifying and preventing bullying; helping others who are bullied or Harmed</li>
                    <li>Pride in our school/home/community</li>
                    <li>Encouraging environmental awareness within our school, at home and in the community</li>
                    <li>Learning and respecting the cultural identity of our school, home and community</li>
                </ul>
                <!-- <p>Neighbourhood Support, working to make our homes, streets and communities safer, more caring places to live.</p> -->
                <!--Simple description for section goes here. -->
            </div>
           <!--  <div id="JNSMission" class="title"><h1>JNS Mission Examples</h1></div> -->
            <div class="row-fluid">
                <div class="span4">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <!-- <img class="img-circle" src="./NSAKL/start-a-group-gateway.jpg" alt="service 1"> -->
                            <img class="img-circle" src="{{URL::asset('images/helicopter.png')}}" alt="service 1">
                        </div>
                        <h3>School Activity Missions</h3>
                        <ul>
                            <li>Caring for school grounds</li>
                            <li>Being respectful and following school rules</li>
                            <li>Learning about others cultures and respecting others views</li>
                        </ul>
                       <!--  <p>Our network stretches across every part of New Zealand. Starting a Neighbourhood Support group is easy and we’ll help you every step of the way.</p> -->
                    </div>
                </div>
                <div class="span4">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <img class="img-circle" src="{{URL::asset('images/community2.png')}}" alt="service 2" />
                        </div>
                        <h3>Home Activity Missions</h3>
                          <ul>
                            <li>Keeping your room tidy</li>
                            <li>Helping family and friends create emergency plans</li>
                            <li>Caring for your home and environment</li>
                        </ul>
                    </div>
                </div>
                <div class="span4">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <img class="img-circle" src="{{URL::asset('images/home3.png')}}" alt="service 3">
                        </div>
                        <h3>
                            Community Activity Missions
                        </h3>
                       <ul>
                            <li>Fire/road safety drills</li>
                            <li>Help vunerable community members</li>
                            <li>Following public instructions and respecting neighbours</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Notices section end -->
    <!-- Resources  section start -->
    <div class="section primary-section" id="events">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <h1>Events</h1>
                <p>Events & Activities Calendar..</p>
            </div>
            <div class="row-fluid team">
                <div class="span4" id="first-person">
                    <div class="thumbnail">
                        <img src="{{URL::asset('images/Sirens in the Park.jpg')}}" alt="team 1">
                        <h3>Events</h3>
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>Events</h2>
                            <p>Mark your calendars for Saturday, August 26, 2017!</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="second-person">
                    <div class="thumbnail">
                        <img src="http://nsakl.org.nz/_news/_images/NDAlogo-date-sml.jpg" alt="team 1">
                        <h3>Upcoming events</h3>
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>Upcoming events</h2>
                            <p>Neighbours Day Aotearoa</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="third-person">
                    <div class="thumbnail">
                        <img src="http://nsakl.org.nz/_news/_images/street_party_logo.jpg" alt="team 1">
                        <h3>Recent Events</h3>
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>Recent Events</h2>
                            <p>Neighbours Day Aotearoa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section primary-section" id="findyourgroup">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <h1>Join or Start a Group</h1>
                <p>
                    Are you a teacher? If you would like to start a Junior Neighbourhood Support group at your school <a class="cta-button" href="~/StartaGroup.html" style="color:#615858;text-decoration: underline;" title="Start a Group">
                         Click Here
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!-- partners section end -->
    <!-- TAB2 section start -->
    <div class="section primary-section" id="aboutus">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <h1>About us</h1>
                <!-- inserted below HB -->
                <p> 
                   Junior Neighbourhood Support aims to make our homes, streets, neighbourhoods and communities safer and more caring places in which to live by fostering contact, understanding and friendliness between neighbours.</br>
                    </br>
                   We foster friendly caring Youth communities to achieve:

                   <ul>
                       <li>Crime Awareness and Reduced Youth Offending</li>
                       <li>A Safer and More Inclusive Youth Community</li>
                       <li>Emergency and Disaster Preparedness Co-ordination</li>
                   </ul>      

                </p>
                <h2>How Do We Achieve This?</h2>
                <p>By forming junior neighbourhood support groups based out of local schools. We distribute resources for teachers and parents, host activities such as graffiti cleanups and barbeques and encourage students to watch out for each others safety and property.</p>
            </div>
        </div>
    </div>
    <!-- TAB2 section end -->
    <!-- Contact section start -->
    <div id="contact" class="contact">
        <div class="section secondary-section">
            <div class="container">
                <div class="title">
                    <h1>Contact Us</h1>
                    <!-- removed below hb -->
                    <!-- <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p> -->
                </div>
            </div>
            <div class="container">
                <div class="span9 center contact-info">
                    <div class="row">
                        <div class="col-sm-12" style="color: #FFF;text-align: left;">
                            <div class="row">
                                <span style="font-size:12pt;font-weight:bold;">
                                    Neighbourhood Support (Auckland City) Incorporated
                                </span>
                                <br>
                                <span style="font-size:10pt;">
                                    Registered Incorporated Society: #1532598<br>
                                    Charities Commission Registration: #CC24336
                                </span>
                                <br><br>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="width:70%;font-size:10pt;">
                                                <b>Postal Address:</b><br>
                                                PO Box 19190, Avondale<br>
                                                Auckland 1746<br>
                                                New Zealand<br>
                                                <br>
                                                <b>Office Address:</b><br>
                                                869 New North Road<br>
                                                Mt Albert<br>
                                                Auckland 1025<br>
                                                Phone: 09 8159605<br>
                                                Fax: 09 8159602<br>
                                                <br>
                                                <b>Email:</b> office@nsakl.org.nz
                                            </td>
                                            <td>
                                                <img id="img_map" src="http://maps.google.com/maps/api/staticmap?center=869+New+North+Road,Mt+Albert,Auckland&amp;zoom=16&amp;size=288x230&amp;maptype=roadmap&amp;markers=size:mid|color:red|869+New+North+Road,Mt+Albert,Auckland&amp;sensor=false" style="border-width:0px;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr class="hidden-xs">
                        </div>
                    </div>
                    <div class="col-sm-12">
                            <p>&nbsp;</p><p>If you want to be a part of Junior Neighbourhood Support ask your parent or teacher to contact us.</p><hr><p><strong>Chairperson:</strong>&nbsp;Sharla Arnold <a title="Email NSNZ Chairperson" href="mailto:chair@neighbourhoodsupport.co.nz?subject=Website%20Query"><strong>Email</strong></a><br><strong>Vice Chair:</strong>&nbsp;Lois Scott <strong><a title="Email NSNZ Vice-Chairperson" href="mailto:neighbourhoodsupport@gmail.com?subject=NSNZ%20Website%20Query">Email</a></strong><a title="Email NSNZ Vice-Chairperson" href="mailto:neighbourhoodsupport@gmail.com?subject=Query%20from%20NSNZ%20Website"></a><br><strong>Secretary</strong>&nbsp;Jocelyn Larsen&nbsp;<strong><a title="NSNZ Secretary" href="mailto:secretary@neighbourhoodsupport.co.nz?subject=NSNZ%20Website%20Query">Email</a></strong></p><p><strong>Fundraising Manager:</strong>&nbsp;Julie McMeeken&nbsp;<a title="NSNZ National Funding Manager" href="mailto:julie@neighbourhoodsupport.co.nz?subject=Website%20Query"><strong>Email</strong></a><br><strong>Community Advisor: &nbsp;</strong>Kelsey Scarr: <a title="NZNS Community Advisor" href="mailto:kelsey@neighbourhoodsupport.co.nz?subject=Website%20Query"><strong>Email</strong></a><br><strong><br></strong></p><p>Find out more about NSNZ Rural Support <a title="Rural Enquiry" href="mailto:kelsey@neighbourhoodsupport.co.nz?subject=NSNZ%20Rural%20Enquiry"><strong>Email</strong></a></p>
                            <hr>

                            <div class="row">
                                <div class="col-sm-8">
                                    <address><strong>National Office</strong></address><address>Neighbourhood Support NZ</address><address>C/- Police National Headquarters</address><address>Level 2, 180 Molesworth Street</address><address></address><address>P O Box 3017, Wellington 6140</address>
                                </div>

                                <div class="col-sm-4">
                                    <p><strong>Phone:</strong> 04 470 4767<br><strong>Email: </strong><a href="mailto:kelsey@neighbourhoodsupport.co.nz">kelsey@neighbourhoodsupport.co.nz</a><strong>&nbsp;</strong></p>
                                </div>

                            </div>
                            <hr>

                        </div>
                    <div class="title">
                        <h3>We Are Social</h3>
                    </div>
                </div>
                <div class="row-fluid centered">



                    <ul class="social">
                        <a href="https://www.facebook.com/neighbourhoodsupportnewzealand/" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-snapchat-ghost"></a>
                        <!-- <li>
                                <a href="#" class="fa fa-facebook"></a>
                            </li> -->
                           <!--  <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></ --><!-- span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact section edn -->
    <!-- Login/Register section start -->
    <!-- Login/Register section end -->
    <!-- Footer section start -->
    <form style="margin: 0 auto;width:60%;display:none;" ng-app="myApp" ng-controller="validateCtrl" name="myForm" id="myForm" novalidate>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">NSAKL Login</h4>
                    </div>
                    <div class="modal-body" style="max-height:200px;">
                        <table style="width: 100%;" align="center" id="tbLoginProfile">
                            <tr>
                                <td>Username</td>
                                <td><input ng-model="user" type="text" placeholder="Enter Username" name="uname" required></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input ng-model="password" type="password" placeholder="Enter Password" name="psw" required></td>
                            </tr>
                            <tr>
                                <td><label><input type="checkbox" checked="checked" name="remember"> Remember me</label></td>
                                <td><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button></td>
                                <td><button type="submit" ng-click="onSubmitButtonClick()" class="btn btn-default" id="btnsubmitLogin1">Login</button>

                            </tr>
                            <tr>
                                <td colspan="2" style="color:red;"><label id="lblUser"></label>
                            </tr>
                        </table>
                        <table id="tbRegisterProfile" style="display:none;" class="table">
                            <tbody>
                                <tr>
                                    <td style="text-align:left;">
                                        <span id="lbl_title1">Name</span>
                                    </td>
                                    <td>
                                        <input name="txt_firstname" type="text" maxlength="30" id="txt_firstname" placeholder="First Name" style="width:108px;">
                                        <input name="txt_middlename" type="text" maxlength="30" id="txt_middlename" placeholder="Middle Name" title="Middle name, if any" style="width:90px;">
                                        <input name="txt_lastname" type="text" maxlength="30" id="txt_lastname" placeholder="Last Name" style="width:108px;">
                                    </td>
                                <tr>
                                    <td style="text-align:left;vertical-align:top;">
                                        Gender:
                                    </td>
                                    <td style="text-align:left;vertical-align:top;">
                                        <span>
                                            <input id="RadioButtonList1_0" type="radio" name="RadioButtonList1" value="M" checked="checked" style="float: left;"><label style="float: left;padding-right:10%" for="RadioButtonList1_0">Male</label>
                                            <input style="float: left;" id="RadioButtonList1_1" type="radio" name="RadioButtonList1" value="F"><label style="float: left;" for="RadioButtonList1_1">Female</label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Home ph
                                    </td>
                                    <td>
                                        <input name="txt_home_phone_area_code" type="text" value="09" id="txt_home_phone_area_code" disabled="disabled" style="">                                  
                                        <input name="txt_home_phone" type="text" maxlength="7" id="txt_home_phone" title="Enter only numbers without spaces">
                                    </td>
                                <tr>
                                    <td>
                                        Work ph
                                    </td>
                                    <td>
                                        <input name="txt_work_phone_area_code" type="text" value="09" id="txt_work_phone_area_code" disabled="disabled" style="">
                                        <input name="txt_work_phone" type="text" maxlength="7" id="txt_work_phone" title="Enter only numbers without spaces" style="">
                                    </td>
                                <tr>
                                    <td>
                                        Cell ph
                                    </td>
                                    <td>
                                        <select name="ddl_cell_phone_prefix" id="ddl_cell_phone_prefix" class="noprint" style="">
                                            <option selected="selected" value="021">021</option>
                                            <option value="022">022</option>
                                            <option value="025">025</option>
                                            <option value="026">026</option>
                                            <option value="027">027</option>
                                            <option value="028">028</option>
                                            <option value="029">029</option>

                                        </select>
                                        <input name="txt_cell_phone" type="text" maxlength="8" id="txt_cell_phone" title="Enter only numbers without spaces" style="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Email:
                                    </td>
                                    <td>
                                        <input name="txt_email" type="text" maxlength="50" id="txt_email" title="You need to have an email address to join online." style="" placeholder="Enter Email id">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Physical Address - Address:</td>
                                    <td>Unit:<br><input name="txt_unit_number" type="text" value="" maxlength="2" id="txt_unit_number" style=""><br/>Number:<br><input name="txt_address_number" type="text" value="" maxlength="2" id="txt_address_number" style=""><br>Suburb:<br><input name="txt_unit_number" type="text" value="" maxlength="2" id="txt_address_name" style=""></td>
                                </tr>
                                <tr>
                                    <td>
                                        Postal Address - Address:
                                    </td>
                                    <td>
                                        PO Box/Private Bag No.:
                                        <input name="txt_box_number" type="text" maxlength="5" id="txt_box_number" style=""><br>
                                        PO Location:<br>
                                        <select name="ddl_box_lobby" onchange="javascript:setTimeout('__doPostBack(\'ddl_box_lobby\',\'\')', 0)" id="ddl_box_lobby" class="noprint" style="">
                                            <option value=""></option>
                                            <option value="Auckland City ">Auckland City </option>
                                            <option value="Auckland Hospital ">Auckland Hospital </option>
                                            <option value="Avondale ">Avondale </option>
                                            <option value="Balmoral ">Balmoral </option>
                                            <option value="Blockhouse Bay ">Blockhouse Bay </option>
                                            <option value="Dominion Road ">Dominion Road </option>
                                            <option value="Eastridge ">Eastridge </option>
                                            <option value="Ellerslie ">Ellerslie </option>
                                            <option value="Epsom ">Epsom </option>
                                            <option value="Glen Innes ">Glen Innes </option>
                                            <option value="Greenlane ">Greenlane </option>
                                            <option value="Greenwoods Corner ">Greenwoods Corner </option>
                                            <option value="Grey Lynn ">Grey Lynn </option>
                                            <option value="Harris Road ">Harris Road </option>
                                            <option value="Herne Bay ">Herne Bay </option>
                                            <option value="Kalmia Street ">Kalmia Street </option>
                                            <option selected="selected" value="Kingsland ">Kingsland </option>
                                            <option value="Lynfield ">Lynfield </option>
                                            <option value="Market Road ">Market Road </option>
                                            <option value="Meadowbank ">Meadowbank </option>
                                            <option value="Mission Bay ">Mission Bay </option>
                                            <option value="Mount Albert ">Mount Albert </option>
                                            <option value="Mount Eden ">Mount Eden </option>
                                            <option value="Mount Roskill ">Mount Roskill </option>
                                            <option value="Mount Roskill South ">Mount Roskill South </option>
                                            <option value="Mount Wellington ">Mount Wellington </option>
                                            <option value="Newmarket ">Newmarket </option>
                                            <option value="Newton ">Newton </option>
                                            <option value="Onehunga ">Onehunga </option>
                                            <option value="Orakei ">Orakei </option>
                                            <option value="Otahuhu ">Otahuhu </option>
                                            <option value="Owairaka ">Owairaka </option>
                                            <option value="Panmure ">Panmure </option>
                                            <option value="Parnell ">Parnell </option>
                                            <option value="Penrose ">Penrose </option>
                                            <option value="Point Chevalier ">Point Chevalier </option>
                                            <option value="Ponsonby ">Ponsonby </option>
                                            <option value="Remuera ">Remuera </option>
                                            <option value="Rosebank ">Rosebank </option>
                                            <option value="Royal Oak ">Royal Oak </option>
                                            <option value="Sandringham ">Sandringham </option>
                                            <option value="Shortland Street ">Shortland Street </option>
                                            <option value="St Heliers ">St Heliers </option>
                                            <option value="St Lukes ">St Lukes </option>
                                            <option value="Sylvia Park ">Sylvia Park </option>
                                            <option value="Symonds Street ">Symonds Street </option>
                                            <option value="Victoria Street West ">Victoria Street West </option>
                                            <option value="Wellesley Street ">Wellesley Street </option>
                                        </select>
                                        <br>
                                        City:<br>
                                        <input name="txt_postal_suburb" type="text" value="Auckland" readonly="readonly" id="txt_postal_suburb" style="font-weight:bold;"><br>
                                        <span id="lbl_postal_postcode">Postcode:</span><br>
                                        <input name="txt_postal_postcode" type="text" value="1352" maxlength="4" readonly="readonly" id="txt_postal_postcode" style="font-weight:bold;">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>User login credentials</b></td>
                                <tr>
                                    <td>
                                        User Name:
                                    </td>
                                    <td><input name="txt_UserName" type="text" maxlength="20" id="txt_UserName" placeholder="Enter a Username" style=""></td>
                                </tr>
                                <tr>
                                    <td>
                                        Password:
                                    </td>
                                    <td><input name="txt_Password" type="text" maxlength="20" id="txt_Pwd" placeholder="Enter a Password" style=""></td>
                                </tr>
                                <tr>
                                    <td>
                                        Confirm Password:
                                    </td>
                                    <td><input name="txt_CPwd" type="text" maxlength="20" id="txt_CPwd" placeholder="Enter a Password" style=""></td>
                                </tr>
                                <tr>
                                    <td><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button></td>
                                    <td><button type="submit" ng-click="onRegisterSubmitButtonClick()" class="btn btn-default" id="btnsubmitLogin2">Submit</button>
                                </tr>
                                <tr>
                                    <td colspan="2" style="color:red;"><label id="lblUserRegister" style="color:red;display:none;">Error : Please Check again!</label>
                                </tr>
                            </tbody>
                        </table>
                        <table style="width: 100%;display:none;" align="center" id="tbForgotLoginProfile">
                            <tr>
                                <td>Username</td>
                                <td><input ng-model="fuser" type="text" placeholder="Enter Username" name="funame" required></td>
                            </tr>

                            <tr>
                                <td><label><input type="checkbox" checked="checked" name="remember"> Remember me</label></td>
                                <td><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button></td>
                                <td><button type="submit" ng-click="onForgotSubmitButtonClick()" class="btn btn-default" id="btnsubmitLogin3">Submit</button>

                            </tr>
                            <tr>
                                <td colspan="2" style="color:red;"><label id="lblUser"></label>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <a id="ancRegister" href="#" style="float: left;text-decoration: underline;font-weight: bolder;">Register</a>
                        <a id="ancForgotPassword" href="#" style="text-decoration: underline;font-weight: bolder;">Forgot Password ?</a>
                        <a id="ancRegister1" href="#" style="float: left;text-decoration: underline;font-weight: bolder;display:none;">Back to Login</a>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <div class="footer">
        <p><i class="far fa-copyright"></i>2018 Designed for JNSAKL </a></p>
    </div>
    <!-- Footer section end -->
    <!-- ScrollUp button start -->
    <div class="scrollup">
        <a href="#">
            <i class="icon-up-open"></i>
        </a>
    </div>
    <!-- ScrollUp button end -->
    <!-- Include javascript -->
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery.mixitup.js')}}"></script>
    <script src="{{URL::asset('js/jquery.mixitup.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('js/modernizr.custom.js')}}"></script>
    <script src="{{URL::asset('js/modernizr.custom.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('js/jquery.bxslider.js')}}"></script>
    <script src="{{URL::asset('js/jquery.bxslider.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('js/jquery.cslider.js')}}"></script>
    <script src="{{URL::asset('js/jquery.cslider.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('js/jquery.placeholder.js')}}"></script>
    <script src="{{URL::asset('js/jquery.placeholder.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('js/jquery.inview.js')}}"></script>
    <script src="{{URL::asset('js/jquery.inview.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('js/scripts.js')}}"></script>
    <script src="{{URL::asset('js/scripts.js')}}"></script>
    <!-- css3-mediaqueries.js for IE8 or older -->
    <!--[if lt IE 9]><script src="~/js/app.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
    <script src="{{URL::asset('js/app.js')}}"></script>
    <script src="{{URL::asset('js/angular.min.js')}}"></script>
    <script src="{{URL::asset('js/Main.js')}}"></script>

</body>
</html>
