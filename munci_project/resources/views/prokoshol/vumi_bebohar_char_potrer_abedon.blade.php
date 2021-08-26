<x-home-master>
@section('homecontent')

        <!-- start header -->
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
			"bhumiusecerti_action",
			$("#info").serialize(),
		function(data){
			if(data !=1){
				document.getElementById('submit_button').disabled = false;
			}
			if(data==1)
			{
				alert('আপনার আবেদনটি গৃহীত হয়েছে\n Tracking No টি নিয়ে আপনার পৌরসভায় যোগাযোগ করুন');
				 //setTimeout(function() {
				window.location='index.php/Home/bhumiusecerti_preview'; //}, 1000)
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
						<div class="panel-heading" style="font-weight: bold; font-size: 15px;background:#175e0a;text-align:center;">ভূমি ব্যবহার ছাড়পত্রের আবেদন পত্র</div>
						<div class="panel-body all-input-form">
							<form action="{{route('prokoshol.vumi_bebohar_charpto')}}" method="post" id="info" class="form-horizontal">
								
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
									<h4 class="text-center">জমির  বিবরণঃ</h4>
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
													<label class="col-sm-6 control-label">মৌজার নাম<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="mojar_name" id="mojar_name" class="form-control" placeholder="মৌজার নাম" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label"> জমির পরিমাণ<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="land_amount" id="land_amount" class="form-control" placeholder=" জমির পরিমাণ" required/>
													</div>
												</div>
												
											</div>
											
											<div class="col-sm-6"> 
											<div class="form-group">
													<label class="col-sm-4 control-label">মৌজার নং<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="mojar_no" id="mojar_no" class="form-control" placeholder="মৌজার নং" required/>
													</div>
												</div>
											
											
											</div>
										</div>
									</div>
									
									
									<div class="col-sm-12">
								
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">প্লট /জমি এর প্রস্তাবিত ব্যবহার<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="plot_prouse" id="plot_prouse" class="form-control" placeholder="প্রস্তাবিত ব্যবহার" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">প্লটের মালিকানার বিবরণ <span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="owner_des" id="owner_des" class="form-control" placeholder="ব্যাক্তি / যৌথ " required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">মালিকানার সূত্র ও তারিখ(ক্রয়/উত্তরাধিকারি/হেবা/দান/লিজ/অন্যান্য) <span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="owner_clue" id="owner_clue" class="form-control" placeholder="ক্রয়/উত্তরাধিকারি/হেবা/দান/লিজ/অন্যান্য উল্লেখ করুন " required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">রেজিস্টেশনের তারিখ ও দলিল নং<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="registration_date" id="registration_date" class="form-control" placeholder="রেজিস্টেশনের তারিখ ও দলিল নং" required/>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									
									
									
									<div class="col-sm-12">
									<h4 class="text-center">ভূমির পারিপার্শ্বিক অবস্থার বর্ণনা</h4>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">ভূমির বর্তমান ব্যবহার<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="land_preuse" id="land_preuse" class="form-control" placeholder="ভূমির বর্তমান ব্যবহার" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">২৫০ মিটার ব্যসার্ধে অন্তর্ভুক্ত ভূমির বর্তমান ব্যবহার<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="land_present" id="land_present" class="form-control" placeholder="বেষ্টিত স্থানের পরিমান" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">প্লটের নিকটতম দুরত্বে অবস্থিত প্রধান সড়কের নাম ও প্রশস্ততা<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="ploat_near_road" id="ploat_near_road" class="form-control" placeholder="ফুট /মিটার" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">প্লটের সংযোগ সড়কের নাম ও প্রশস্ততা<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="plot_road" id="plot_road" class="form-control" placeholder="ফুট /মিটার" required/>
													</div>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-12">
									<h4 class="text-center">প্লটের ২৫০ মিটার দূরত্বের মধ্যে অবস্থান</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">প্রধান সড়ক<span> *</span> </label>
													<div class="col-sm-6">
													<label class="radio-inline"><input type="radio" name="main_road" id="main_road" value="হ্যাঁ" >হ্যাঁ </label>
													<label class="radio-inline"><input type="radio" name="main_road" id="main_road" value="না" >না</label>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">হাট-বাজার <span> *</span> </label>
													<div class="col-sm-6">
														 <label class="radio-inline"><input type="radio" name="bazar" id="bazar" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="bazar" id="bazar" value="না" >না</label> 
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">রেলওয়ে ষ্টেশন  <span> *</span> </label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="railway" id="railway" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="railway" id="railway" value="না" >না</label> 
													</div>
												</div>
												
											</div>
											
											<div class="col-sm-6"> 
											<div class="form-group">
													<label class="col-sm-6 control-label">নদী বন্দর <span> *</span> </label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="launch" id="launch" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="launch" id="launch" value="না" >না</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">বিমান বন্দর <span> *</span></label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="airport" id="airport" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="airport" id="airport" value="না" >না</label>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									
									<div class="col-sm-12">
									<h4 class="text-center">প্লটের ২৫০ মিটার দূরত্বের মধ্যে অবস্থান</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">পুকুর<span> *</span> </label>
													<div class="col-sm-6">
													<label class="radio-inline"><input type="radio" name="pond" id="pond" value="হ্যাঁ" >হ্যাঁ </label>
													<label class="radio-inline"><input type="radio" name="pond" id="pond" value="না" >না</label>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">জলাভূমি<span> *</span> </label>
													<div class="col-sm-6">
														 <label class="radio-inline"><input type="radio" name="jolabumi" id="jolabumi" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="jolabumi" id="jolabumi" value="না" >না</label> 
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">প্রাকৃতিক জলপথ<span> *</span> </label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="natural" id="natural" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="natural" id="natural" value="না" >না</label> 
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">পাহাড়<span> *</span> </label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="hill" id="hill" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="hill" id="hill" value="না" >না</label> 
													</div>
												</div>
												
											</div>
											
											<div class="col-sm-6"> 
											<div class="form-group">
													<label class="col-sm-6 control-label">বন্যা নিয়ন্ত্রন জলাধার<span> *</span> </label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="bonna" id="bonna" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="bonna" id="bonna" value="না" >না</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">বনাঞ্চল <span> *</span></label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="bon" id="bon" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="bon" id="bon" value="না" >না</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">পার্ক বা খেলার মাঠ <span> *</span></label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="park" id="park" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="park" id="gender" value="park" >না</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">ঢাল<span> *</span></label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="dal" id="dal" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="dal" id="dal" value="না" >না</label>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									
									<div class="col-sm-12">
									<h4 class="text-center">প্লটের ২৫০ মিটার দূরত্বের মধ্যে অবস্থান</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">ঐতিহাসিক গুরুত্বপূর্ন সাইট<span> *</span> </label>
													<div class="col-sm-6">
													<label class="radio-inline"><input type="radio" name="historical" id="historical" value="হ্যাঁ" >হ্যাঁ </label>
													<label class="radio-inline"><input type="radio" name="historical" id="historical" value="না" >না</label>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">সামরিক স্থাপনা<span> *</span> </label>
													<div class="col-sm-6">
														 <label class="radio-inline"><input type="radio" name="samorik" id="samorik" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="samorik" id="samorik" value="না" >না</label> 
													</div>
												</div>
												
												
											</div>
											
											<div class="col-sm-6"> 
											<div class="form-group">
													<label class="col-sm-4 control-label">Key Point Installation<span> *</span> </label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="key_point" id="key_point" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="key_point" id="key_point" value="না" >না</label> 
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-4 control-label">বিধিমালা অনুযায়ী সীমিত উন্নয়ন এলাকা,বিশেষ এলাকা<span> *</span> </label>
													<div class="col-sm-6">
														<label class="radio-inline"><input type="radio" name="imp_area" id="imp_area" value="হ্যাঁ">হ্যাঁ </label><label class="radio-inline"><input type="radio" name="imp_area" id="imp_area" value="না" >না</label> 
													</div>
												</div>
											</div>
										</div>
										
									</div>
									
									
									<div class="col-sm-12">
									<h4 class="text-center">প্লটের চতুঃপার্শ্বস্থ ভূমির ব্যবহার</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">উত্তর<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="north" id="north" class="form-control" placeholder="উত্তর" required/>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-6 control-label">দক্ষিন<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="south" id="south" class="form-control" placeholder="দক্ষিন" required/>
													</div>
												</div>
												
											</div>
											
											<div class="col-sm-6"> 
											
											
											<div class="form-group">
													<label class="col-sm-6 control-label">পূর্ব<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="east" id="east" class="form-control" placeholder="পূর্ব" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">পশ্চিম<span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="weast" id="weast" class="form-control" placeholder="পশ্চিম" required/>
													</div>
												</div>

											</div>
										</div>
										
									</div>
									<div class="col-sm-12">
								
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">সংলগ্ন রাস্তা থেকে প্লটের অবস্থা,গড় উঁচু/নীচু<span> *</span> </label>
													<div class="col-sm-5">
														<input type="text" name="plot_high" id="plot_high" class="form-control" placeholder="ফুট/মিটার" required/>
													</div>
												</div>
											</div>
										</div>
									</div>
									
											</div>
										</div>
								</div>
								
							
	
								<div class="row">
									<div class="col-sm-offset-6 col-sm-6 button-style"> 
										<button type="submit" id="submit_button"   class="btn btn-success">জমা দিন</button>
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