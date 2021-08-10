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
			"index.php/home/permitapplication_action",
			$("#info").serialize(),
		function(data){
			if(data !=1){
				document.getElementById('submit_button').disabled = false;
			}
			if(data==1)
			{
				alert('আপনার আবেদনটি গৃহীত হয়েছে\n Tracking No টি নিয়ে আপনার পৌরসভায়\n যোগাযোগ করুন');
				 //setTimeout(function() {
				window.location='index.php/home/permit_preview'; //}, 1000)
				//window.location='index.php/Applicant/nagorickapplicant?napply=new'; //}, 1000)
				// window.open('index.php/home/ppreview','_blank');
			} 
			else if(data==2)
			{
				alert('দুঃখিত আপানর জাতিয় পরিচয়পত্র নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার ইউনিয়ন পরিষদ যোগাযোগ করুন');
			}
			else if(data==3)
			{
				alert('দুঃখিত আপানর জন্ম নিবধন নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার ইউনিয়ন পরিষদ যোগাযোগ করুন');
			}
			else if(data==4)
			{
				alert('দুঃখিত আপানর পাসপোর্ট নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার ইউনিয়ন পরিষদ যোগাযোগ করুন পাসপোর্ট নং');
			}
			else if(data==6)
			{
				alert('দুঃখিত আপানর মোবাইল নাম্বারটি পূর্বে ব্যাবহার করা হয়েছে.\nTracking No এর  জন্য আপনার ইউনিয়ন পরিষদ যোগাযোগ করুন');
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
	
	/*========  bibhahik obstha hide show function start ============*/
		/* 1st function */
		function bybahik_obosthan_show(mstatus){
			//alert(mstatus);
			var gender=$("#gender:checked").val();
			if(mstatus=='1' && gender=='male'){
				//alert("wife id show");
				$("#wife").show();
				$("#husband input:text").val('');
				$("#husband").hide();
			}
			else if(mstatus=='1' && gender=='female'){
				//alert("husband id show");
				$("#husband").show();
				$("#wife input:text").val('');
				$("#wife").hide();
			}
			else if(mstatus=='2' && gender=='female'){
				//alert("father id show");
				$("#husband input:text").val('');
				$("#husband").hide();
				$("#wife input:text").val('');
				$("#wife").hide();
			}
			else if(mstatus=='2' && gender=='male'){
				//alert("father id show");
				$("#husband input:text").val('');
				$("#husband").hide();
				$("#wife input:text").val('');
				$("#wife").hide();
			}
			else{
				$("#husband input:text").val('');
				$("#husband").hide();
				$("#wife input:text").val('');
				$("#wife").hide();
			}
		}
		/* ===2nd function  ===*/
		function bybahik_obosthan_show1(gender){
			var mstatus= $("#mstatus:checked").val();
			if(mstatus=='1' && gender=='male'){
				//alert("wife id show");
				$("#wife").show();
				$("#husband input:text").val('');
				$("#husband").hide();
			}
			else if(mstatus=='1' && gender=='female'){
				//alert("husband id show");
				$("#husband").show();
				$("#wife input:text").val('');
				$("#wife").hide();
			}
			else if(mstatus=='2' && gender=='female'){
				//alert("father id show");
				$("#husband").hide();
				$("#wife").hide();
			}
			else if(mstatus=='2' && gender=='male'){
				//alert("father id show");
				$("#husband").hide();
				$("#wife").hide();
			}
			else{
				$("#husband").hide();
				$("#wife").hide();
			}
		}
		
	/*========  bibhahik obstha hide show function end ============*/
	
	
	
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
						<div class="panel-heading" style="font-weight: bold; font-size: 15px;background:#ff860a;text-align:center;">রাস্তা খননের অনুমতি </div>
						<div class="panel-body all-input-form">
							<form action="javascript:void(0)" method="post" id="info" class="form-horizontal">
								
								<!--
								<div class="row"> 
									<div class="col-sm-12" style="margin-bottom:10px;margin-top:10px;"> 
										<div class="form-group">
											<label for="Delivery-type" class="col-sm-3 control-label">সরবরাহের ধরণ  <span>*</span></label>
											<div class="col-sm-9">
												<label class="radio-inline"><input type="radio" name="delivery_type" value="1" >জরুরী</label>
												<label class="radio-inline"><input type="radio" name="delivery_type" value="2">অতি জরুরী  </label>
												<label class="radio-inline"><input type="radio" name="delivery_type" value="3" checked="checked"> সাধারন</label>
											</div>
										</div>
									</div>
								</div>
								-->
								<input type="hidden" name="delivery_type" value="3" checked="checked">
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">আবেদনকারীর নাম <span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="a_name" id="a_name" class="form-control" placeholder="নাম" required/>
													</div>
												</div>
											</div>
											<div class="col-sm-6"> 
												
												<div class="form-group">
													<label  class="col-sm-4 control-label">পিতা/ স্বামীর নাম <span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="fatger_husband_name" id="fatger_husband_name" class="form-control" placeholder="পিতা/ স্বামী" required/>
													</div>
												</div>
										
											</div>
										</div>
									</div>
									
									<div class="col-sm-12">
									<h4 class="text-center">ঠিকানা (স্থায়ী)</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">হোল্ডিং নং<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="holding_no" id="holding_no" class="form-control" placeholder="হোল্ডিং নং " required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">ওয়ার্ড নং <span> *</span> </label>
													<div class="col-sm-6">
														<select name="wardno" id="wardno" class="form-control" required>
															<option>select</option>
															<option value="1">১</option>
															<option value="2">২</option>
															<option value="3">৩</option>
															<option value="4">৪</option>
															<option value="5">৫</option>
															<option value="6">৬</option>
															<option value="7">৭</option>
															<option value="8">৮</option>
															<option value="9">৯</option>
														</select>
													</div>
												</div>
												
												<div class="form-group">
													<label  class="col-sm-6 control-label">উপজেলা/থানা/পৌরসভা  <span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="thana" value="সাভার" id="thana" class="form-control" placeholder="উপজেলা/থানা/পৌরসভা" required/>
													</div>
												</div>
											</div>
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-4 control-label">মহল্লা<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="moholla" id="moholla" class="form-control" placeholder="মহল্লা " required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">ডাকঘর <span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="dakgor" id="dakgor" class="form-control" placeholder="ডাকঘর" required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">জেলা <span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="jela" value="ঢাকা" id="p_dis" class="form-control" placeholder="জেলা " required/>
													</div>
												</div>
										
											</div>
										</div>
									</div>
									
									<div class="col-sm-12">
									<h4 class="text-center">যে হোল্ডিং এ গ্যাস/পানির লাইন সংযোগ দেওয়া হবে</h4>
										<div class="row">
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-6 control-label">হোল্ডিং নং<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="conholding_no" id="conholding_no" class="form-control" placeholder="হোল্ডিং নং " required/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-6 control-label">রাস্তার নাম <span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="road_name" id="road_name" class="form-control" placeholder="রাস্তার নাম" required/>
													</div>
												</div>
												<label  class="col-sm-6 control-label">রাস্তা কাটার কারন <span> *</span></label>
													<div class="col-sm-6">
														<select name="proti_name" class="form-control"  required >
															<option value=''>চিহ্নিত করুন</option>
															<option value='গ্যাস লাইন সংযোগ'>গ্যাস লাইন সংযোগ</option>
															<option value='পানির লাইন সংযোগ'>পানির লাইন সংযোগ</option>
															<option value='বিদ্যুৎ লাইন সংযোগ'>বিদ্যুৎ লাইন সংযোগ</option>
														</select>
													</div>
											</div>
											<div class="col-sm-6"> 
												<div class="form-group">
													<label class="col-sm-4 control-label">মহল্লা<span> *</span> </label>
													<div class="col-sm-6">
														<input type="text" name="conmoholla" id="conmoholla" class="form-control" placeholder="মহল্লা " required/>
													</div>
												</div>
												<div class="form-group">
													<label  class="col-sm-4 control-label">রাস্তার ধরণ <span> *</span></label>
													<div class="col-sm-6">
														<select name="road_type" class="form-control"  required >
															<option value=''>চিহ্নিত করুন</option>
															<option value='কাঁচা'>কাঁচা</option>
															<option value='পাকা'>পাকা</option>
															<option value='অর্ধ পাকা'>অর্ধ পাকা</option>
															<option value='কার্পেটিং'>কার্পেটিং</option>
															<option value='ডব্লিউ.বি.এম'>ডব্লিউ.বি.এম</option>
															<option value='এইচ.বি.বি'>এইচ.বি.বি</option>
															<option value='সোলিং'>সোলিং </option>
															<option value='আর.সি.সি'>আর.সি.সি </option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label  class="col-sm-4 control-label">রাস্তা কাটা/বোরিং এর পরিমাণ <span> *</span></label>
													<div class="col-sm-6">
														<input type="text" name="length" id="length" class="form-control" placeholder="দৈর্ঘ্য" required/>
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div>
								
							
	
								<div class="row">
									<div class="col-sm-offset-6 col-sm-6 button-style"> 
										<button type="submit" name="save" id="submit_button" onclick="parsonalinfo_insert();" class="btn btn-primary">দাখিল করুন</button>
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