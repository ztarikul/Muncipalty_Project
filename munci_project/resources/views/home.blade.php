
<x-home-master>
 @section('homecontent')   


 <div class="container-fluid">
        <div class="col-md-12">
            <div id="main-slider" class="flexslider">
                <ul class="slides wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">
				
								
								<li><a href="javascript:void(0)">
				<div class="slide-overley"></div>
				<img class="lazy" data-original="all/slide/slide1.jpg" alt="" height='420' width='900'/>
				<p class="flex-caption">DIGITAL BANGLADESH</p>
				</a>
				</li>
								<li><a href="javascript:void(0)">
				<div class="slide-overley"></div>
				<img class="lazy" data-original="{{asset('all/slide/15123827.jpg')}}" alt="" height='420' width='900'/>
				<p class="flex-caption">জাতীয় স্মৃতিসৌধ</p>
				</a>
				</li>
								<li><a href="javascript:void(0)">
				<div class="slide-overley"></div>
				<img class="lazy" data-original="all/slide/wwv.PNG" alt="" height='420' width='900'/>
				<p class="flex-caption"></p>
				</a>
				</li>
								<li><a href="javascript:void(0)">
				<div class="slide-overley"></div>
				<img class="lazy" data-original="all/slide/hheader-2.jpg" alt="" height='420' width='900'/>
				<p class="flex-caption">সাভার পৌর ভবন</p>
				</a>
				</li>
								<li><a href="javascript:void(0)">
				<div class="slide-overley"></div>
				<img class="lazy" data-original="all/slide/3.JPG" alt="" height='420' width='900'/>
				<p class="flex-caption"></p>
				</a>
				</li>
				                  
                </ul>
            </div>
        </div>
		        

    </div>
    <!-- end slider -->




    <div class="container-fluid">
        <div class="row">	
            <div class="col-md-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                <div class="content-area-boxes">           
                    <div class="about-content-section special2">
                        
                        <div class="about-content-full">
                            <div class="row">
							<div class="col-sm-4">
							<img  src="{{asset('storage/member/khaled saifullah.jpg')}}" style="border:3px solid black" width="180" height="180" alt="">
							</div>
							<div class="col-sm-8">
							<div class="meyor_bani">
							
							<h2 style=color:white >মেয়র শুভেচ্ছা বাণী</h2>
							<p style=color:white>“২০২৫ সালের মধ্যে চৌমুহনী পৌরসভাকে আধুনিক সুযোগ সুবিধা সম্বলিত, সুখী সমৃদ্ধ সিটি কর্পোরেশন হিসাবে গড়তে চাই। যেখানে প্রাশ্চাত্যের শহরগুলোর মত সুন্দর ও মনোরম পরিবেশ থাকবে এবং পৌরসভা একটি ডিজিটাল নগরীতে উন্নীত হবে।”</p>
							<p  style=color:white;text-align:right>―মোঃ খালেদ সাইফুল্লাহ</p>
							</div>
							</div>	
								
							</div>
						</div>
					</div>
				</div>
</section> 








<!-- ই-আবেদন -->

<section class="notice-board-area">
<div class="container extrawidth">
<div class="row">

<div class="col-md-4">
	<div class="notics-cts card wow fadeIn" data-wow-duration="3s" data-wow-delay=".2s">
	   <div class="head-title-bar">
			<div class="secs section-title">
				<h2 class="s2">ই-আবেদন</h2>
			</div>
			
		</div>
			<div class="card-content">
			  <div class="row">
					
				 <div class="blog-sidebar-item">

					<div class="sidebar-categories mt-35">
						 <ul>
							<li><a href="{{route('nagorik_sanad.form', 1)}}" class=""> নাগরিক সনদের আবেদন</a></li>
							<li><a href="{{route('trade_license_application.form')}}" class=""> ট্রেড লাইসেন্স সনদের আবেদন</a></li>
							<li><a href="{{route('paribarik_sanad_application.form')}}" class=""> পারবারিক সনদের আবেদন</a></li>
							<li><a href="{{route('primisis_sanad.form')}}" class=""> প্রিমিসেস লাইসেন্স</a></li>
							<li><a href="{{route('oarish_sanad_application.form')}}" class="">  ওয়ারিশ সনদের আবেদন</a></li>
						</ul>
					</div>
				</div>
			  </div>
			
		   </div>
	</div>
</div>

 <!-- সকল আবেদন যাচাই -->



<div class="col-md-4">
   <div class="notics-cts card wow fadeIn" data-wow-duration="3s" data-wow-delay=".2s">
		<div class="head-title-bar">
			<div class="secs section-title">
				<h2 class="s2">সকল আবেদন যাচাই</h2>
			
			</div>
		</div>
		  <div class="card-content">
			<div class="row">
						
				<div class="blog-sidebar-item">

						<div class="sidebar-categories mt-35">
							<ul>
								<li><a href="{{route('nagorik_sanad_abedon_jacai.form')}}" class="">  নাগরিক সনদের আবেদন যাচাই</a></li>
								<li><a href="{{route('trade_license_abedon_jacai.form')}}" class=""> ট্রেড লাইসেন্স সনদের আবেদন যাচাই</a></li>
								<li><a href="{{route('trade_license_nabayon_abedon.form')}}" class=""> ট্রেড লাইসেন্স নবায়ন যাচাই</a></li>
								<li><a href="{{route('paribarik_sonoder_abedon_jachai.form')}}" class=""> পারবারিক সনদপত্র আবেদন যাচাই</a></li>
								<li><a href="{{route('oarish_sonodpotro_jachai.form')}}" class=""> ওয়ারিশ সনদের আবেদন যাচাই</a></li>
							</ul>
						</div>
				 </div>
			</div>
		</div>
    </div>
</div>



	  



<!-- সকল সনদ যাচাই -->

<div class="col-md-4">
   <div class="notics-cts card wow fadeIn" data-wow-duration="3s" data-wow-delay=".2s">
				<div class="head-title-bar">
					<div class="secs section-title">
						<h2 class="s2">সকল সনদ যাচাই</h2>

					</div>
				</div>
		<div class="card-content">
			<div class="row">

						<div class="blog-sidebar-item">

							<div class="sidebar-categories mt-35">
									<ul>
									<li><a href="{{route('nagorik_sanad_jacai.form')}}" class=""> নাগরিকত্ব সনদ পত্র  যাচাই</a></li>
									<li><a href="{{route('oarish_sonodpotro_jachai.form')}}" class=""> ওয়ারিশ সনদ পত্র  যাচাই</a></li>
									<li><a href="{{route('paribarik_sonodpotro_jachai.form')}}" class=""> পারিবারিক সনদ পত্র  যাচাই</a></li>
									<li><a href="{{route('trade_license_jacai.form')}}" class="">ট্রেড লাইসেন্স  যাচাই</a></li>
									<li><a href="{{route('nagorik_sanad.form' , 5)}}" class="">  ভূমিহীন সনদ যাচাই</a></li>
									
									</ul>
							</div>
						</div>
				</div>
		  </div>
      </div>

</div>


</div>
</div>




</section>









<!-- <section class="notice-board-area">
    <div class="container extrawidth">
        <div class="row">	
            <div class="col-md-4 wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="content-area-boxes">           
				<div class="blog-sidebar-item">
          <div class="sidebar-title">
              <h4 class="title">All Services</h4>
          </div>
          <div class="sidebar-categories mt-35">
              <ul>
                                  <li><a href="https://www.spandanit.com/service/IT-Consultation" class=" active  ">IT Consultation</a></li>
                                    <li><a href="https://www.spandanit.com/service/Application-Development" class="">Application Development</a></li>
                                    <li><a href="https://www.spandanit.com/service/Digital-Marketing" class="">Digital Marketing</a></li>
                                    <li><a href="https://www.spandanit.com/service/Graphic-Design" class="">Graphic Design</a></li>
                                    <li><a href="https://www.spandanit.com/service/Website-Development" class="">Website Development</a></li>
                                    <li><a href="https://www.spandanit.com/service/Software-Development" class="">Software Development</a></li>
                                </ul>
          </div>
        </div>
							</div>
						</div>
					</div>
				</div>




</section>  -->
<section class="notice-board-area">
    <div class="container extrawidth">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="content-area-boxes">           
                    <div class="tottho">
                        <div class="section-title text-left">
                            <h2 class="br2">চৌমুহনী পৌরসভা তথ্য</h2>
                        </div>
                        <div class="about-content-full">
                                  <div class="left-boxes-content">
                                      <div class="row">
                                          <p><p>বৃহত্তর নোয়াখালীর প্রান কেন্দ্র বানিজ্যিক নগরী  চৌমুহনী পৌরসভা ১৯৭৩ খ্রিঃ প্রতিষ্ঠিত হয়। বর্তমানে  এটি ”ক” শ্রেণীর পৌরসভা......</p>
										  <div class="see-alls">
												<a href="{{route('pouroshavar_tottho')}}" class="btn btn-see btn-sm">আরো পড়ুন....</a>
										</div>
                                      </div>
                                  </div>

                        </div>
                    </div>
                </div>
            </div>
                <!-- <div class="col-md-5">
                    <div class="notics-cts card wow fadeIn" data-wow-duration="3s" data-wow-delay=".2s">
                        <div class="head-title-bar">
                            <div class="secs section-title">
                                <h2 class="s2"><i class="icon ion-document"></i></i> নোটিশ </h2>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">
										 <div class="notice-section">
											<ul class="latest-news">
											@foreach($notices as $notice)
													<li class="one-line"><i class="icon ion-document-text"></i>
													
													<a href="main/notice/75"></a>{{$notice->content}}</li>
													@endforeach												
													</ul>
										<div class="see-alls">
												<a href="{{route('shokol_notice.form')}}" class="btn btn-see btn-sm">সকল নোটিশ</a>
										</div>
									 </div>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div> -->
            </div>
        </div>
    </section>

	<section class="notice-board-area">
	<div class="container extrawidth">
      <div class="row">
     
	      <div class="col-md-12">
                    <div class="notics-cts card wow fadeIn" data-wow-duration="3s" data-wow-delay=".2s">
                        <div class="head-title-bar">
                            <div class="secs section-title">
                                <h2 class="s2"><i class="icon ion-document"></i></i> নোটিশ </h2>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">
										 <div class="notice-section">
											<ul class="latest-news">
											@foreach($notices as $notice)
													<li class="one-line"><i class="icon ion-document-text"></i>
													
													<a href="main/notice/75"></a>{{$notice->content}}</li>
													@endforeach												
													</ul>
										<div class="see-alls">
												<a href="{{route('shokol_notice.form')}}" class="btn btn-see btn-sm">সকল নোটিশ</a>
										</div>
									 </div>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>



	    </div>
	</div>

	</section>




	
	
  





<!--    


<section class="removeshadow">
							<div class="container">
								<div class="row rowextra">		
										 <div class="upimage col-md-3"><a href="home/fighters">
										   <img src="assets_one/img/freedom.png"/>
										   <h4>মুক্তিযোদ্ধা তালিকা</h4></a>
										   
										 </div> 
											<div class="upimage col-md-3"><a href="home/voterList">
										   <img src="assets_one/img/voter.png"/>
										   <h4>ভোটার তালিকা</h4></a>
										   
										 </div> 
										 <div class="upimage col-md-3"><a href="home/oldmanStipend">
										   <img src="assets_one/img/old.png"/>
										   <h4>বয়স্ক ভাতা</h4></a>
										  
										 </div> 
										 <div class="upimage col-md-3"><a href="home/poorman">
										   <img src="assets_one/img/dustho.png"/>
											<h4>দুস্থ তালিকা</h4></a>
										</div>
								</div>
								
									
									 <div class="row rowextra"><a href="home/matrittakalin">
										 <div class="upimage col-md-3">
										   <img src="assets_one/img/ma.png"/>
										   <h4>মাতৃত্যকালীন ভাতা</h4></a>
										   
										 </div> <div class="upimage col-md-3"><a href="home/bidhoba">
										   <img src="assets_one/img/bidoba1.png"/>
										   <h4>বিধবা ভাতা</h4></a>
										   
										 </div> <div class="upimage col-md-3"><a href="home/protibondi">
										   <img src="assets_one/img/protibondi.png"/>
										   <h4>প্রতিবন্ধী ভাতা</h4></a>
										  
										 </div> 
										 <div class="upimage col-md-3"><a href="home/vgd">
										   <img src="assets_one/img/bgb1.png"/>
											<h4>ভি জি ডি</h4></a>
										  
										</div>
									</div>
									
									<div class="row rowextras"><a href="Assesment_home/khanasamuh">
										 <div class="upimage col-md-3">
										   <img src="assets_one/img/khana.png"/>
										   <h4>খানা সমূহ</h4></a>
										   
										 </div> <div class="upimage col-md-3"><a href="javascript:void(0)">
										   <img src="assets_one/img/dailycollection.png"/>
										   <h4>দৈনিক কালেকশন</h4></a>
										   
										 </div> <div class="upimage col-md-3"><a href="javascript:void(0)">
										   <img src="assets_one/img/monthley.png"/>
										   <h4>মাসিক কালেকশন</h4></a>
										  
										 </div> 
										 <div class="upimage col-md-3"><a href="javascript:void(0)">
										   <img src="assets_one/img/yearly.png"/>
											<h4>অর্থ বছরের কালেকশন</h4></a>
										  
										</div>
									</div>
									<div class="row rowextra"><a href="home/matrittakalin">
										
										 <div class="upimage col-md-3"><a href="home/oms">
										   <img src="assets_one/img/bgb1.png"/>
											<h4>ও এম এস তালিকা</h4></a>
										  
										</div>
									</div>
								</div>
							
						</section> -->


	
	  <!--- <section class="gallery-section-area">
    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="section-title text-center border-h2">
                    <h2>ফটো গ্যালারি</h2>
                </div>
               <div class="last-updateds text-right">
                  
               </div>
           </div>
       </div>
        <div class="row">
            <div class="gallery-section-contents">
                                
            </div>
        </div>
    </div>
</section>-->
<!-- 
    <div class="content-area-sections">
        <div class="container">
            <div class="row">
               
            </div>
        </div>
    </div> -->

  @endsection
</x-home-master>  
