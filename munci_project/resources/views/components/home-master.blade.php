
    

<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="x-author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta name="robots" content="noodp">
    <title>ডেমো পৌরসভা</title>
    <link rel="shortcut icon" href="{{asset('design/img/favicon.ico')}}" type="image/x-icon"/>
    <link href="{{asset('design/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{asset('design/css/flexslider.css')}}" rel="stylesheet"/>
    <link href="{{asset('design/css/animate.css')}}" rel="stylesheet"/>
    <link href="{{asset('design/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('design/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('design/css/jquery.fs.boxer.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('design/css/mobilenav.css')}}">
    <!-- Theme skin -->
    <link href="{{asset('design/themes/main.css')}}" rel="stylesheet"/>
    <link href="{{asset('design/css/style.css')}}" rel="stylesheet"/>
   
	<link rel="stylesheet" media="screen,projection" type="text/css" href="{{asset('datepicker/jquery-ui.css')}}" />
	<!--<script src="datepicker/jquery-1.9.1.js"></script>--> 
	<script src="{{asset('datepicker/jquery-ui.js')}}"></script>
	
 <!-- Owl Carousel Assets -->
    <link href="{{asset('owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('owl-carousel/owl.theme.css')}}" rel="stylesheet">
	
	<!--- picture uplaod js ---->
	<script type="text/javascript" src="{{asset('library/upload/ajaxupload.js')}}"></script>
	
	<!--- ajax request function for data serching----->
	<script type="text/javascript" src="{{asset('library/ajax_req.js')}}"></script>
	

	<script src="{{asset('js/google.js')}}"></script>

	<style>
		body{color:font-family:solaimanlipi, "Times New Roman", Times, serif !important; color:black !important;}
	</style>

</head>
<body onload="onload_hide_fun();">
    <div id="wrapper">
        <!-- start header -->
        <header>
                <div class="main-header wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="main-menu-area" data-spy="affix" data-offset-top="150">
                    <div class="container headwidth">
                            <div class="navbar-header navbar-left">
                                <div class="navbar-brand">
                                    <a href="">
                                    <img src="logo_images/logo.png" alt="" >
                                    <span>ডেমো পৌরসভা</span>
                                    </a>
                                </div>
                            </div>
                            <nav id="elg-main-menu" role="navigation" class="elg-menu pull-right">
                                    <ul class="desktop-menu">
                                        <li><a href="{{route('home')}}">হোম </a></li>
                                        <li><a href="javascript:void(0)">নাগরিক</a>
                                            <ul class="sub-menus">
                                                <li><a href="{{route('nagorik_sanad.form', 1)}}">নাগরিকত্ব সনদের আবেদন</a></li>                                           
                                                <li><a href="{{route('nagorik_sanad_abedon_jacai.form')}}">নাগরিকত্ব সনদের আবেদন যাচাই</a></li>                                           
                                                <li><a href="{{route('nagorik_sanad_jacai.form')}}">নাগরিকত্ব সনদ পত্র  যাচাই</a></li>                                           
                                            </ul>
                                        </li> 
										<li><a href="javascript:void(0)">ওয়ারিশ</a>
                                            <ul class="sub-menus">
                                                <li><a href="{{route('oarish_sanad_application.form')}}">ওয়ারিশ সনদের আবেদন</a></li>                                           
                                                <li><a href="{{route('oarish_sanader_abedon_jachai.form')}}">ওয়ারিশ সনদের আবেদন যাচাই</a></li>                                           
                                                <li><a href="{{route('oarish_sonodpotro_jachai.form')}}">ওয়ারিশ সনদ পত্র  যাচাই</a></li>
												</li><li><a href="{{route('paribarik_sanad_application.form')}}">পারিবারিক সনদের আবেদন</a></li>
												<li><a href="{{route('paribarik_sonoder_abedon_jachai.form')}}">পারিবারিক সনদের আবেদন যাচাই</a></li>
												<li><a href="{{route('paribarik_sonodpotro_jachai.form')}}">পারিবারিক সনদ পত্র  যাচাই</a></li>                                           
                                            </ul>
                                        </li>
										<li><a href="javascript:void(0)">লাইসেন্স সমূহ</a>
                                            <ul class="sub-menus">
                                                <li><a href="{{route('trade_license_application.form')}}">ট্রেড লাইসেন্স আবেদন</a></li>                                           
                                                <li><a href="{{route('trade_license_abedon_jacai.form')}}">ট্রেড লাইসেন্স আবেদন যাচাই</a></li>                                         
                                                <li><a href="{{route('trade_license_nabayon_abedon.form')}}">ট্রেড লাইসেন্স নবায়ন</a></li>                                         
                                                <li><a href="{{route('trade_license_jacai.form')}}">ট্রেড লাইসেন্স  যাচাই</a></li>
												<li><a href="{{route('primisis_sanad.form')}}">প্রিমিসেস লাইসেন্স</a></li>  
                                                 <li><a href="{{route('posha_pranir_license.form')}}">পোষা প্রাণীর লাইসেন্স</a></li>                                             
                                            </ul>
                                        </li>
										<li><a href="javascript:void(0)">প্রকৌশল সংক্রান্ত</a>
                                            <ul class="sub-menus">
                                               <li><a href="{{route('rasta_khonon_er_onumoti.form')}}">রাস্তা খননের অনুমতি পত্র</a></li>  
												  <li><a href="{{route('emaratnirman_pukurkhonon_vorat_abedon.form')}}">ইমারত নির্মাণ/ পুকুর খনন/ভরাট আবেদন পত্র</a></li>  
                                                 <li><a href="{{route('vumi_bebohar_char_potrer_abedon.form')}}">ভূমি ব্যবহার ছাড়পত্রের আবেদন</a></li>  
                                                 
                                                 <li><a href="{{route('notun_holding_abedon.form')}}">নতুন হোল্ডিং আবেদন</a></li>  
                                                 <li><a href="{{route('holding_naam_jari_abedon.form')}}">হোল্ডিং নামজারি আবেদন</a></li>                                             
                                            </ul>
                                        </li>
										
										<li><a href="javascript:void(0)">অন্যান্য</a>
                                            <ul class="sub-menus menusextra">
                                                <li><a href="{{route('nagorik_sanad.form', 2)}}">মৃত্যু সনদ</a></li>                                           
                                                <li><a href="{{route('nagorik_sanad.form', 3)}}">চারিত্রিক সনদ</a></li>                                           
                                                <li><a href="{{route('nagorik_sanad.form' , 4)}}">অবিবাহিত সনদ</a></li>                                           
                                                <li><a href="{{route('nagorik_sanad.form' , 5)}}">ভূমিহীন সনদ</a></li>                                           
                                                <li><a href="{{route('nagorik_sanad.form' , 6)}}">পুনঃ বিবাহ না হওয়া সনদ </a></li>                                         
                                                <li><a href="{{route('nagorik_sanad.form' , 7)}}">বার্ষিক আয়ের প্রত্যয়ন </a></li>                                           
                                                <li><a href="{{route('nagorik_sanad.form' , 8)}}">একই নামের প্রত্যয়ন</a></li>                                           
                                               <li><a href="{{route('nagorik_sanad.form' , 9)}}">প্রকৃত বাঁক ও শ্রবণ প্রতিবন্ধী</a></li>                        
                                                <li><a href="{{route('nagorik_sanad.form' , 10)}}">সনাতন ধর্ম  অবলম্বী</a></li>                                           
                                                <li><a href="{{route('nagorik_sanad.form' , 11)}}">অনুমতি পত্র</a></li>                                           
                                                <li><a href="{{route('nagorik_sanad.form' , 12)}}">প্রত্যয়ন পত্র</a>  
                                                <li><a href="onapotti">অনাপত্তি সনদপত্র</a>  
                                           </ul>
                                        </li>
										<li><a href="javascript:void(0)">কর্মকর্তাবৃন্দ</a>
                                            <ul class="sub-menus">
                                                <li><a href="main/get_person/1">জন  প্রতিনিধিগণ</a></li>                                           
                                                <li><a href="main/get_person/2">কর্মকর্তা ও কর্মচারীগণ</a></li>                                           
                                                <li><a href="main/get_person/3">উদ্যোক্তা</a></li>                                           
                                            </ul>
                                        </li>
										
                                        <li><a href="javascript:void(0)">প্রকল্প সমূহ</a>
                                            <ul class="sub-menus">
                                                <li><a href="javascript:void(0)">চলমান</a></li>                                           
                                                <li><a href="javascript:void(0)">প্রস্তাবিত</a></li>                                           
                                                <li><a href="javascript:void(0)">সম্পন্ন</a></li>                                           
                                            </ul>
                                        </li>
										
                                        <li><a href="http://nothi.gov.bd/dak_nagoriks/NagorikAbedon" target='_blank'>অভিযোগ</a></li>
                                        <li><a href="{{route('jogajog.form')}}">যোগাযোগ</a></li>
                                                                         
                                </ul>
                            </nav>

             <div class="mobile-menu">
                <div class="menu-button">Menu</div>
                <nav>
                    <ul class="flexnav">
                         <li><a href="">হোম </a></li>
                                        <li><a href="javascript:void(0)">নাগরিক</a>
                                            <ul class="sub-menus">
                                                <li><a href="home/nagorikapplication">নাগরিকত্ব সনদের আবেদন</a></li>                                           
                                                <li><a href="home/filternagorikapplication">নাগরিকত্ব সনদের আবেদন যাচাই</a></li>                                           
                                                <li><a href="home/filternagorikcertificate">নাগরিক সনদ পত্র  যাচাই</a></li>                                           
                                            </ul>
                                        </li> 
										<li><a href="javascript:void(0)">ওয়ারিশ</a>
                                            <ul class="sub-menus">
                                                <li><a href="home/oarishapplication">ওয়ারিশ সনদের আবেদন</a></li>                                           
                                                <li><a href="home/filteroarishapplication">ওয়ারিশ সনদের আবেদন যাচাই</a></li>                                           
                                                <li><a href="home/filteroarishcertificate">ওয়ারিশ সনদ পত্র  যাচাই</a></li>                                           
                                            </ul>
                                        </li>
										<li><a href="javascript:void(0)">ট্রেড লাইসেন্স</a>
                                            <ul class="sub-menus">
                                                <li><a href="home/tradelicenseapplication">ট্রেড লাইসেন্স আবেদন</a></li>                                           
                                                <li><a href="home/filtertradeapplication">ট্রেড লাইসেন্স আবেদন যাচাই</a></li>                                         
                                                <li><a href="home/renewapplication">ট্রেড লাইসেন্স নবায়ন</a></li>                                         
                                                <li><a href="home/filtertradecertificate">ট্রেড লাইসেন্স  যাচাই</a></li>
												<li><a href="primises_license_apps">প্রিমিসেস লাইসেন্স</a></li>  
                                                 <li><a href="dog_license_apps">পোষা প্রাণীর লাইসেন্স</a></li>
                                            </ul>
                                        </li>
										<li><a href="javascript:void(0)">প্রকৌশলি শাখা</a>
                                            <ul class="sub-menus">
                                               <li><a href="index.php/Home/roadpermit">রাস্তা খননের অনুমতি পত্র</a></li>  
												  <li><a href="index.php/manucipulity/imarotShimanaBibidoNirman">ইমারত নির্মাণ/ পুকুর খনন/ভরাট আবেদন পত্র</a></li>  
                                                 <li><a href="index.php/manucipulity/bhumiusecerti">ভূমি ব্যবহার ছাড়পত্রের আবেদন</a></li>  
                                                 
                                                 <li><a href="new_holding_apps">নতুন হোল্ডিং আবেদন</a></li>  
                                                 <li><a href="holding_namjari_apps">হোল্ডিং নামজারী আবেদন</a></li>                                             
                                            </ul>
                                        </li>
										
										<li><a href="javascript:void(0)">অন্যান্য</a>
                                            <ul class="sub-menus">
                                                <li><a href="citizen_apps?seba=2">মৃত্যু সনদ</a></li>                                           
                                                <li><a href="citizen_apps?seba=3">চারিত্রিক সনদ</a></li>                                           
                                                <li><a href="citizen_apps?seba=4">অবিবাহিত সনদ</a></li>                                           
                                                <li><a href="citizen_apps?seba=5">ভূমিহীন সনদ</a></li>                                           
                                                <li><a href="citizen_apps?seba=6">পুনঃ বিবাহ না হওয়া সনদ </a></li>                                         
                                                <li><a href="citizen_apps?seba=7">বার্ষিক আয়ের প্রত্যয়ন </a></li>                                           
                                                <li><a href="citizen_apps?seba=8">একই নামের প্রত্যয়ন</a></li>                                           
                                                <li><a href="citizen_apps?seba=9">প্রকৃত বাকঁ ও শ্রবন প্রতিবন্ধী</a></li>                        
                                                <li><a href="citizen_apps?seba=10">সনাতন ধর্ম  অবলম্বী</a></li>                                           
                                                <li><a href="citizen_apps?seba=11">অনুমতি পত্র</a></li>                                           
                                                <li><a href="citizen_apps?seba=12">প্রত্যয়ন পত্র</a></li>                                          
                                                <li><a href="familly_apps">পারিবারিক সনদের আবেদন</a></li>                                          
                                            </ul>
                                        </li>
										<li><a href="javascript:void(0)">কর্মকর্তাবৃন্দ</a>
                                            <ul class="sub-menus">
                                                <li><a href="main/category">জন  প্রতিনিধিগণ</a></li>                                           
                                                <li><a href="main/category">কর্মকর্তা ও কর্মচারীগণ</a></li>                                           
                                                <li><a href="main/category">উদ্যোক্তা</a></li>                                           
                                            </ul>
                                        </li>
										
                                        <li><a href="javascript:void(0)">প্রকল্প সমূহ</a>
                                            <ul class="sub-menus">
                                                <li><a href="main/category">চলমান</a></li>                                           
                                                <li><a href="main/category">প্রস্তাবিত</a></li>                                           
                                                <li><a href="main/category">সম্পন্ন</a></li>                                           
                                            </ul>
                                        </li>
                                        <li><a href="<a href="http://nothi.gov.bd/dak_nagoriks/NagorikAbedon" target='_blank'>অভিযোগ</a></li>
                                        <li><a href="contact">যোগাযোগ</a></li>                                   
                    </ul>
                </nav>
              </div>
                            </div>
                        </div>
                </div>
                </header>
   <section id="featured">
   





   @yield('homecontent')



<footer>
<div class="container">
    <div class="row">
        <div class="col-md-3 wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
              <div class="left-boxes-content">
                  <div class="widget">
                    <h5 class="widgetheading">ই-সেবা</h5>
                  </div>
                  <div class="important-links">
                      <ul>
                         <li> <a href="citizen_apps">নাগরিক সনদের আবেদন</a></li>
                         <li> <a href="natrack">নাগরিক আবেদন যাচাই</a></li>
                          <li> <a href="trade_license_apps">ট্রেড লাইসেন্স আবেদন </a></li>
                          <li> <a href="renew_apps">ট্রেড লাইসেন্স নবায়ন</a> </li>
                          <li> <a href="tatrack">ট্রেড লাইসেন্স আবেদন যাচাই</a> </li>
                          <li> <a href="successor_apps">ওয়ারিশ সনদের আবেদন</a> </li>
                          <li> <a href="wctrack">ওয়ারিশ সনদের আবেদন যাচাই</a> </li>
                      </ul>
                  </div>
              </div>
          </div>
        <div class="col-md-3 wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
              <div class="left-boxes-content">
                  <div class="widget">
                    <h5 class="widgetheading">গুরুত্বপূর্ন লিংক</h5>
                  </div>
                  <div class="important-links">
                      <ul>
                          <li> <a href="http://www.passport.gov.bd/">পাসপোর্টের আবেদন ফরম</a></li>
                          <li> <a href="http://bris.lgd.gov.bd/pub/">অনলাইন জন্ম/মৃত্যু নিবন্ধন</a></li>
                          <li> <a href="http://br.lgd.gov.bd/files/Birth_Form.pdf">জন্ম  নিবন্ধন ফরম ডাউনলোড </a></li>
                          <li> <a href="http://bris.lgd.gov.bd/pub/">মৃত্যু নিবন্ধন ফরম ডাউনলোড </a></li>
                          <li> <a href="http://www.bmet.gov.bd/BMET/onlinaVisaCheckAction">ভিসা যাচাই</a> </li>
                          <li> <a href="http://app.dghs.gov.bd/inst_info/mobile_search.php">ই-স্বাস্থ্য সেবা</a> </li>
                          <li> <a href="http://www.forms.gov.bd/">সরকারি ফরম</a> </li>
                          <li> <a href="http://dpe.portal.gov.bd/site/page/256bd7b9-cfa4-4f71-afa6-3b8262f4021f">সমাপনী পরীক্ষার ফলাফল</a> </li>
                          <li> <a href="https://www.eprocure.gov.bd/">ই-টেন্ডার(e-GP) </a> </li>

                      </ul>
                  </div>
              </div>
          </div>
        <div class="col-md-3 wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
              <div class="left-boxes-content">
                  <div class="widget">
                    <h5 class="widgetheading">ঠিকানা</h5>
                  </div>
                  <div class="important-links">
											  
						<address style="text-align: center;padding-bottom:1px;text-align:left">
										<p>
                                        Mobile :<br/>
                                        Phone : <br />
                                        E-mail :<br/>
										Web site : 										
										</p>
									</address>
                  </div>
              </div>
          </div>
      <div class="col-md-3 wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
	   <div class="left-boxes-content">
        <div class="widget">
          <h5 class="widgetheading">ম্যাপ</h5>
        </div>
			<div class="important-links">
						<iframe src="https://maps.google.com/maps?q=Spandan%20IT%20dhaka&t=&z=19&ie=UTF8&iwloc=&output=embed" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>	
			</div>
		</div>
    </div>
  </div>
<div id="sub-footer">
  <div class="container">
     <div class="row">
        <div class="col-lg-6">
           <div class="copyright">
              <p>
                 <span>Copyright &copy; 2021 &nbsp; Spandan IT</span><br/>
             </p>
			 
            </div>
        </div>
		<div class="col-lg-6">
							<div>
								<p>
								Design & Developed by : 
								<a href="" target="_blank" style="color:#fff;">
									Spandan IT
								</a>
								</p >
							</div>
						</div>
			</div>
		</div>
	</div>
</footer>
</div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
  <!-- javascript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('design/js/jquery.js')}}"></script>
    <script src="{{asset('design/js/jquery.lazyload.min.js')}}"></script>
    <script src="{{asset('design/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('design/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('design/js/jquery.fs.boxer.js')}}"></script>
    <script src="{{asset('design/js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('design/js/jquery.flexnav.js')}}"></script>
   
    <script src="{{asset('design/js/slick.min.js')}}"></script>
    <script src="{{asset('design/js/google-code-prettify/prettify.js')}}"></script>
    <script src="{{asset('design/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('design/js/wow.js')}}"></script>
	
    <script>
      new WOW().init();
  </script>
  <script src="{{asset('design/js/custom.js')}}"></script>
  <script>
    /*  - Boxer 
    ---------------------------------------------------*/
      jQuery(document).ready(function(){
      jQuery(".boxer").boxer({ 
        margin:100,
        fixed: true
      }); 
      })
    /*   - Boxer end 
    ---------------------------------------------------*/

  </script>
<script>
$(function() {
    $("img.lazy").lazyload({
            threshold : 200,
            effect : "fadeIn"
        });
});
</script>
  <script>

    $(".flexnav").flexNav();
  </script>
</body>
</html>