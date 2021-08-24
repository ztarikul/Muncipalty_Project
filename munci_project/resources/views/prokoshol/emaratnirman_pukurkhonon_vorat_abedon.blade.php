<x-home-master>
@section('homecontent')

       <style type="text/css"> 
.app-heading{
	margin-top:20px;
	margin-bottom:20px;
	text-align:center;
	font-weight:900;
	text-decoration:underline;
	font-size:16px;
	font-style:normal;
	padding-left: 10%;
}
.app-sub-heading{
	margin-top: 10px;
	margin-bottom: 10px;
	font-size:14px;
	font-style:normal;
	font-weight:700;
	text-align:center;
}
#comment{
	resize:none;
}
.button-style{
	margin-bottom:30px;
	margin-top: 10px;
}
.all-input-form label{
	color: #413839;
	opacity:0.9;
}
.all-input-form label>span{
	color:red;
}
.all-input-form input[type="text"], input[type="file"]{
	color: #0C090A;
	font-size:13px;
	font-weight:500;
}
#attachment{
	resize:none;
	color: #0C090A;
	font-size:14px;
	font-weight:400;
}
@-moz-document url-prefix() {
    .input-file-sm {
        height: auto;
        padding-top: 2px;
        padding-bottom: 1px;
    }
}

</style>
<script type="text/javascript"> 
	/*========== reday function start ===========*/
	$(document).reday(function(){
		onload_hide_fun();
	});
	/*========== reday function  end===========*/
	
	/*============== ajax request function start =========*/
	
	function parsonalinfo_insert()
	{
			// this function call submit button onclick event
		document.getElementById('submit_button').disabled = 'disabled';
		$.post(
			"home_url",
			$("#info").serialize(),
		function(data){
			if(data !=1){
				document.getElementById('submit_button').disabled = false;
			}
			if(data==1)
			{
				alert('আপনার আবেদনটি গৃহীত হয়েছে\n Tracking No টি নিয়ে আপনার পৌরসভায় যোগাযোগ করুন');
				 //setTimeout(function() {
				window.location='emarot_preview'; //}, 1000)
				//window.location='index.php/Applicant/nagorickapplicant?napply=new'; //}, 1000)
				// window.open('index.php/home/ppreview','_blank');
			} 
			else if(data==2)
			{
				alert('দুঃখিত আপানর জাতিয় পরিচয়পত্র নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন');
			}
			else if(data==3)
			{
				alert('দুঃখিত আপানর জন্ম নিবধন নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন');
			}
			else if(data==4)
			{
				alert('দুঃখিত আপানর পাসপোর্ট নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন পাসপোর্ট নং');
			}
			else if(data==6)
			{
				alert('দুঃখিত আপানর মোবাইল নাম্বারটি পূর্বে ব্যাবহার করা হয়েছে.\nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন');
			}
			else if(data==5)
			{
				alert('দয়া করে আপনার সঠিক মোবাইল নাম্বারটি ব্যাবহার করুন');
			}
			else
			{
				alert(data);
			}
		});

		return false;
	}
	/*============== ajax request function end =========*/

	
	/*=========onload function start=============*/
	 function onload_hide_fun(){
		  // call this function body onload event
		  $("#wife").hide();
		  $("#husband").hide();
		  $("#print").hide();
		   $(".bname").bnKb({
				'switchkey': {"webkit":"k","mozilla":"y","safari":"k","chrome":"k","msie":"y"},
				'driver': phonetic
			});
		 }
	/*=========onload function end=============*/
	/*================== bashinda hide show function start ==========*/
	function basinda_show_hide(v){
		//alert(v);
		if(v==2){
			$("#permaHeading").hide();
			$("#permanentAddress").hide();
			$("#permanentAddress input:text").val('');
		}
		else{
			$("#permaHeading").show();
			$("#permanentAddress").show();
		}
		
	}
	/*================== bashinda hide show function end ==========*/
	
	
	
	
	/*============ number test function start ===============*/
	function numtest(){
		return event.charCode >= 48 && event.charCode <= 57;
	}
	function checkaccnumber(evt){
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)){
			return false;
		}
		return true;
	}
	/*============ number test function end===============*/
</script>

<!-- some information query -->

<div class="main_con"><!--Content Start-->
	<div class="row"><!--- row start--->
		<div class="col-md-12 left_con"><!-- left Content Start-->
			<div class="row">
				<div class="col-md-12"> 
					<div class="panel panel-primary">
						<div class="panel-heading" style="font-weight: bold; font-size: 15px;background:#175e0a;text-align:center;">ইমারত নির্মাণ/সীমানা দেয়াল/বিবিধ নির্মাণ/পূণঃ নির্মাণ এবং পুকুর খনন/ভরাট/পাহাড় কর্তণ আবেদন পত্র</div>
						<div class="panel-body all-input-form">
							<form action="{{route('prokoshol.emarot_pukur_application')}}" method="post" id="info" class="form-horizontal">
								@csrf
								
								
								
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">আবেদনকারীর/আবেদনকারীগনের পূর্ন নাম <span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="a_name" id="a_name" class="form-control" placeholder="নাম" required/>
													</div>
												</div>
											</div>
											<div class="col-sm-6"> 
												<div class="form-group">
													<label  class="col-sm-4 control-label">পিতা/ স্বামীর নাম <span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="father_husband_name" id="p_rbs" class="form-control" placeholder="পিতা/ স্বামী" required/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">বর্তমান ঠিকানা <span> *</span> </label>
													<div class="col-sm-6">
														<textarea type="text" name="pre_address"  id="pre_address" class="form-control" placeholder="বর্তমান ঠিকানা" required></textarea>
													</div>
												</div>
											</div>
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-4 control-label">স্থায়ী ঠিকানা <span> *</span> </label>
													<div class="col-sm-6">
														<textarea type="text" name="per_address"  id="per_address" class="form-control" placeholder="স্থায়ী ঠিকানা" required></textarea>
													</div>
												</div>
											</div>
										</div>	
									</div>
									
									<div class="col-sm-12">
									<h4 class="text-center">যে দাগের জমিতে ইমারত নির্মাণ/পুকুর খনন /পাহাড় কর্তণ/বা ধ্বংস করা হইবে উহার বিবরণঃ</h4>

										<div class="row">
											<div class="col-sm-12"> 
												<div class="row">
													<div class="col-sm-6"> 
														<div class="form-group">
															<label class="col-sm-6 control-label">এলাকার নাম <span> *</span> </label>
															<div class="col-sm-6">
																<input type="text" name="area_name" id="area_name" class="form-control" placeholder="এলাকার নাম " required/>
															</div>
														</div>
													</div>
													<div class="col-sm-6"> 
														<div class="form-group">
															<label class="col-sm-4 control-label">ভবনের ধরণ<span> *</span> </label>
																<div class="col-sm-6">
																	<select type="text" name="build_type" class="form-control" id="build_type" required>
																		<option value="আবাসিক">আবাসিক</option>
																		<option value="আবাসিক">আবাসিক</option>
																		<option value="বাণিজ্যিক">বাণিজ্যিক</option>
																		<option value="আবাসিক কাম-বাণিজ্যিক">আবাসিক কাম-বাণিজ্যিক</option>
																		<option value="শিল্প কারখানা">শিল্প কারখানা</option>
																	</select>
																</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">দাগ নং-সি এস<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="dagno_cs" id="dagno_cs" class="form-control" placeholder="দাগ নং-সি এস " required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">দাগ নং- এস এ<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="dagno_sa" id="dagno_sa" class="form-control" placeholder="দাগ নং- এস এ " required/>
													</div>
												</div>
												
												<div class="form-group">
													<label  class="col-sm-6 control-label">দাগ নং-আর এস<span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="dagno_rs" id="dagno_rs" class="form-control" placeholder="দাগ নং-আর এস" required/>
													</div>
												</div>
											</div>
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-4 control-label">খতিয়ান নং-সি এস<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="khotian_cs" id="khotian_cs" class="form-control" placeholder="খতিয়ান নং-সি এস " required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">খতিয়ান নং- এস এ<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="khotian_sa" id="khotian_sa" class="form-control" placeholder="খতিয়ান নং- এস এ" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">খতিয়ান নং-আর এস<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="khotian_rs" id="khotian_rs" class="form-control" placeholder="খতিয়ান নং-আর এস " required/>
													</div>
												</div>
										
											</div>
											
											
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">সিট নং<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="sit_no" id="sit_no" class="form-control" placeholder="সিট নং" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">আবেদনকারীর জমির পরিমাণ<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="land_amount" id="land_amount" class="form-control" placeholder="আবেদনকারীর জমির পরিমাণ" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">আবেদনকারী কি সূত্রে জমি অর্জন করেছেন তার বিবরণ<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="earn_land" id="earn_land" class="form-control" placeholder="আবেদনকারী কি সূত্রে জমি অর্জন করেছেন তার বিবরণআবেদনকারী কি সূত্রে জমি অর্জন করেছেন তার বিবরণ " required/>
													</div>
												</div>
											</div>
											
											<div class="col-sm-6"> 
											<div class="form-group">
													<label class="col-sm-4 control-label">মৌজার নাম<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="mojar_name" id="mojar_name" class="form-control" placeholder="মৌজার নাম" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">ওয়ার্ড নং<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="word_no" id="word_no" class="form-control" placeholder="ওয়ার্ড নং" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label  class="col-sm-4 control-label">রাস্তার নাম<span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="road_name" id="road_name" class="form-control" placeholder="রাস্তার নাম" required/>
													</div>
												</div>
													
											
											</div>
										</div>
									</div>
									
									<div class="col-sm-12">
									<h4 class="text-center">সাইটের বিবরণ/সাইটের চৌহদ্দি</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">উত্তর<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="north" id="north" class="form-control" placeholder="উত্তর" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">পূর্ব<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="east" id="east" class="form-control" placeholder="পূর্ব " required/>
													</div>
												</div>
											</div>
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-4 control-label">দক্ষিন<span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="south" id="south" class="form-control" placeholder="দক্ষিন" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-4 control-label">পশ্চিম<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="west" id="west" class="form-control" placeholder="পশ্চিম " required/>
													</div>
												</div>
											
											</div>
										</div>
									</div>




									<div class="col-sm-12">
									<h4 class="text-center">ইমারত দ্বারা সাইটে যে পরিমাণ স্থান আচ্ছাদিত হইবে তাহার বিশদ বিবরণ</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">১ ম তলা<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="fst_floor" id="fst_floor" class="form-control" placeholder="উত্তর" required/>
													</div>
												</div>
											
											</div>
											<div class="col-sm-6"> 
												
												<div class="form-group">
													<label class="col-sm-4 control-label">অন্যান্য তলা<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="oth_floor" id="oth_floor" class="form-control" placeholder="পশ্চিম " required/>
													</div>
												</div>
											
											</div>
										</div>
									</div>

									<div class="col-sm-12">
									<h4 class="text-center">সাইটের নিকটস্থ রাস্তার বিবরণ</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">নাম<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="site_name" id="site_name" class="form-control" placeholder="নাম" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">অবস্থান<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="position" id="position" class="form-control" placeholder="অবস্থান " required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">নিকটস্থ রাস্তা হতে সাইটে যাতায়তের উপায়<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="near_way" id="near_way" class="form-control" placeholder="নিকটস্থ রাস্তা হতে সাইটে যাতায়তের উপায়" required/>
													</div>
												</div>
											</div>
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-4 control-label">দূরত্ব<span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="distance" id="distance" class="form-control" placeholder="দূরত্ব" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-4 control-label">বিস্তার<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="far" id="far" class="form-control" placeholder="বিস্তার " required/>
													</div>
												</div>
											
											</div>
										</div>
									</div>
									
									<div class="col-sm-12">
									<h4 class="text-center">সাইটের বিভিন্ন দিক থেকে যে পরিমাণ স্থান উন্মক্ত রাখা হইবে</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">উত্তর সীমানা হইতে<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="to_north" id="to_north" class="form-control" placeholder="উত্তর সীমানা হইতে" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">দক্ষিন সীমানা হইতে<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="to_south" id="to_south" class="form-control" placeholder="দক্ষিন সীমানা হইতে " required/>
													</div>
												</div>
												
											</div>
											
											<div class="col-sm-6"> 
											<div class="form-group">
													<label class="col-sm-4 control-label">পূর্ব সীমানা হইতে<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="to_east" id="to_east" class="form-control" placeholder="পূর্ব সীমানা হইতে" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">পশ্চিম সীমানা হইতে<span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="to_west" id="to_west" class="form-control" placeholder="পশ্চিম সীমানা হইতে" required/>
													</div>
												</div>

											</div>
										</div>
										
									</div>
									
									<div class="col-sm-12">
									<h4 class="text-center">সাইটের পূর্ব নির্মিত কাঁচা পাকা ইমারতের বিবরণ</h4>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">পূর্ব নির্মিত ইমারতের সংখ্যা ও তৎ দ্বারা বেষ্টিত স্থানের পরিমান<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="imarot_land" id="imarot_land" class="form-control" placeholder="বেষ্টিত স্থানের পরিমান" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">প্রস্তাবিত ইমারত নির্মাণ অনুমোদন হইলে পূর্ব নির্মিত ইমারতের কোন অংশ ভাঙ্গিতে হবে কিনা এবং হলে তৎ দ্বারা বেষ্টিত স্থানের পরিমান<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="pro_imarot_land" id="pro_imarot_land" class="form-control" placeholder="বেষ্টিত স্থানের পরিমান" required/>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-sm-12">
									<h4 class="text-center">এলাকার বিভিন্ন সেবা সুযোগের বিবরণ</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">বিদ্যুৎ সরবরাহের লাইন আছে কিনা<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="cu_line" id="cu_line" class="form-control" placeholder="বিদ্যুৎ সরবরাহের লাইন আছে কিনা" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">পানি সরবরাহের লাইন আছে কিনা<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="water_line" id="water_line" class="form-control" placeholder="পানি সরবরাহের লাইন আছে কিনা " required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">প্রস্তাবিত ইমারতের ক্ষেত্রে সেপ্টিক ট্যাঙ্কের ব্যবস্থা আছে কিনা<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="ceptic_tank" id="ceptic_tank" class="form-control" placeholder="সেপ্টিক ট্যাঙ্কের ব্যবস্থা আছে কিনা" required/>
													</div>
												</div>
												
											</div>
											
											<div class="col-sm-6"> 
											
											
											<div class="form-group">
													<label class="col-sm-6 control-label">গ্যাস সরবরাহের লাইন আছে কিনা<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="gass_line" id="gass_line" class="form-control" placeholder="গ্যাস সরবরাহের লাইন আছে কিনা" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">পয়ঃনিস্কাশন সরবরাহের লাইন আছে কিনা<span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="mol_line" id="mol_line" class="form-control" placeholder="পয়ঃনিস্কাশন সরবরাহের লাইন আছে কিনা" required/>
													</div>
												</div>

											</div>
										</div>
										
									</div>
									<div class="col-sm-12">
								
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের কাজ কখন শুরু হবে<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="when_start" id="when_start" class="form-control" placeholder="কখন শুরু হবে" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের উদ্দেশ্য<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="destroy_aim" id="destroy_aim" class="form-control" placeholder=" ধ্বংস সাধনের উদ্দেশ্য" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label"> অথরাইজড অফিসারের অনুমোদন ব্যতিত আবেদনকারী পূর্বে কোন ইমারত  ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধন করিয়া থাকলে তজ্জন্য তাহার বিরুদ্বে Building Construction Act 1952 (E.B.Act II of 1953) এর Section 12 এর অধিনে কোন নোটিশজারি করা হইয়াছে কিনা<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="notice_jari" id="notice_jari" class="form-control" placeholder="কোন নোটিশজারি করা হইয়াছে কিনা" required/>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-sm-12">
									<h4 class="text-center">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের স্থান হইতে নিকটবর্তী</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">রাস্তার দূরত্ব<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="road_dis" id="road_dis" class="form-control" placeholder="বিদ্যুৎ সরবরাহের লাইন আছে কিনা" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">ইমারতের দূরত্ব<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="imarot_dis" id="imarot_dis" class="form-control" placeholder="পানি সরবরাহের লাইন আছে কিনা " required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">গ্যাস সরবরাহ লাইনের দূরত্ব<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="gass_dis" id="gass_dis" class="form-control" placeholder="সেপ্টিক ট্যাঙ্কের ব্যবস্থা আছে কিনা" required/>
													</div>
												</div>
												
											</div>
											
											<div class="col-sm-6"> 
											<div class="form-group">
													<label class="col-sm-6 control-label">পয়ঃনালার দুরত্ব<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="mol_dis" id="mol_dis" class="form-control" placeholder="গ্যাস সরবরাহের লাইন আছে কিনা" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">বিদ্যুৎ লাইনের দুরত্ব<span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="cu_dis" id="mol_line" class="form-control" placeholder="পয়ঃনিস্কাশন সরবরাহের লাইন আছে কিনা" required/>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									
								</div>
								
							
	
								<div class="row">
									<div class="col-sm-offset-6 col-sm-6 button-style"> 
										<button type="submit"  id="submit_button" class="btn btn-primary">জমা দিন</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- row end--->
		</div><!-- left Content End-->

</div>
@endsection
</x-home-master> 