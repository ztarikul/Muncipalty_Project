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

	$(document).reday(function(){
		onload_hide_fun();
	});




	
	// function parsonalinfo_insert()
	// {
	// 		// this function call submit button onclick event
	// 	document.getElementById('submit_button').disabled = 'disabled';
	// 	$.post(
	// 		"index.php",
	// 		$("#info").serialize(),
	// 	function(data){
	// 		if(data !=1){
	// 			document.getElementById('submit_button').disabled = false;
	// 		}
	// 		if(data==1)
	// 		{
	// 			alert('আপনার আবেদনটি গৃহীত হয়েছে\n Tracking No টি নিয়ে আপনার  পৌরসভায় যোগাযোগ করুন');
	// 			window.location=''; 
				
	// 		} 
	// 		else if(data==2)
	// 		{
	// 			alert('দুঃখিত আপানর জাতিয় পরিচয়পত্র নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য পৌরসভায় যোগাযোগ করুন');
	// 		}
	// 		else if(data==3)
	// 		{
	// 			alert('দুঃখিত আপানর জন্ম নিবধন নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনারপৌরসভায় যোগাযোগ করুন');
	// 		}
	// 		else if(data==4)
	// 		{
	// 			alert('দুঃখিত আপানর পাসপোর্ট নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন পাসপোর্ট নং');
	// 		}
	// 		else if(data==6)
	// 		{
	// 			alert('দুঃখিত আপানর মোবাইল নাম্বারটি পূর্বে ব্যাবহার করা হয়েছে.\nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন');
	// 		}
	// 		else if(data==5)
	// 		{
	// 			alert('দয়া করে আপনার সঠিক মোবাইল নাম্বারটি ব্যাবহার করুন');
	// 		}
	// 		else
	// 		{
	// 			alert(data);
	// 		}
	// 	});

	// 	return false;
	// }

	function validateImage() {
		var formData = new FormData();
		var file = document.getElementById("file").files[0];
		formData.append("Filedata", file);
		var t = file.type.split('/').pop().toLowerCase();
		if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
			alert('Please select a valid image file');
			document.getElementById("file").value = '';
			return false;
		}
		
		var fsize = (file.size / 1024 / 1024).toFixed(.5);  
		console.log(fsize);
		if (fsize > .5 ) {
			alert('Max Upload size is 500kb only');
			document.getElementById(id).value = '';
			return false;
		}
		return true;
	}

	 function onload_hide_fun(){
		  $("#wife").hide();
		  $("#husband").hide();
		  $("#print").hide();
		   $(".bname").bnKb({
				'switchkey': {"webkit":"k","mozilla":"y","safari":"k","chrome":"k","msie":"y"},
				'driver': phonetic
			});
		 }

	function basinda_show_hide(v){
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
		
		function bybahik_obosthan_show1(gender){
			var mstatus= $("#mstatus:checked").val();
			if(mstatus=='1' && gender=='male'){
				//alert("wife id show");
				$("#wife").show();
				$("#husband input:text").val('');
				$("#husband").hide();
			}
			else if(mstatus=='1' && gender=='female'){
				
				$("#husband").show();
				$("#wife input:text").val('');
				$("#wife").hide();
			}
			else if(mstatus=='2' && gender=='female'){
				
				$("#husband").hide();
				$("#wife").hide();
			}
			else if(mstatus=='2' && gender=='male'){
				
				$("#husband").hide();
				$("#wife").hide();
			}
			else{
				$("#husband").hide();
				$("#wife").hide();
			}
		}
		

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
	
</script>


<div class="main_con"><!--Content Start-->
	<div class="row"><!--- row start--->
		<div class="col-md-12 left_con"><!-- left Content Start-->
			<div class="row">
				<div class="col-md-12"> 
					<div class="panel panel-primary">
						<div class="panel-heading" style="font-weight: bold; font-size: 15px;background:#175e0a;text-align:center;">নাগরিক আবেদন</div>
						<div class="row" >
							 <div class="col-sm-12"> 
							  <div style="margin-top:20px;">
							   <label class="col-sm-3"></label>
							   <label class="col-sm-1"style="color:red;">নিয়মাবলিঃ</label>
							   <div class="col-sm-4" style="color:blue;">
								<p><span>**</span>  বাংলায় সার্টিফিকেট পেতে শুধুমাত্র বাংলায় ঘর  পূরণ করুন ।<br/> ইংরেজি সার্টিফিকেট পেতে বাংলা এবং ইংরেজি উভয় ঘর পূরণ করুন ।</p>
							   </div>
							   <div class="clearfix"> </div>
							  </div>
							 </div>
							</div>
						<div class="panel-body all-input-form">
							<form action="{{route('cityzen.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal" name="upform" id="upform">
							@csrf
								<div class="row" >
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Picture" class="col-sm-3 control-label">ছবি</label>
											<div class="col-sm-5" style="margin-top:3px;">
												<input type="file" name="file" id="file" onchange="validateImage()" class="form-control input-file-sm" />
											</div>
											
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
						
							
								<div class="row"> 
									<div class=" col-sm-offset-5 col-sm-7" id="UPLOAD">
										
									</div>
								</div>
								
								<input type="hidden" name="delivery_type" value="3" checked="checked">
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="National-id-english" class="col-sm-3 control-label">সেবা সমূহ  <span>*</span></label>
											<div class="col-sm-3">
												<select name="seba_type" class="form-control"  required disabled >
													<option value='' >চিহ্নিত করুন</option>
													<option value='1' selected >নাগরিকত্ব সনদ</option>
													<option value='2' >মৃত্যু সনদ</option>
													<option value='3' >চারিত্রিক সনদ</option>
													<option value='4' >অবিবাহিত সনদ</option>
													<option value='5' >ভূমিহীন সনদ</option>
													<option value='6' >পুনঃ বিবাহ না হওয়া সনদ </option>
													<option value='7' >বার্ষিক আয়ের প্রত্যয়ন </option>
													<option value='8' >একই নামের প্রত্যয়ন </option>
													<option value='9' >প্রকৃত বাকঁ ও শ্রবন প্রতিবন্ধী</option>
													<option value='10' >সনাতন ধর্ম  অবলম্বী</option>
													<option value='11' >অনুমতি পত্র</option>
													<option value='12' >প্রত্যয়ন পত্র</option>
												</select>
											</div>
											<label for="holding_no" class="col-sm-3 control-label">হোল্ডিং নং </label>
											<div class="col-sm-3">
												<input type="text" name="holding_no" id="holding_no" class="form-control"    />
											</div>
										</div>
										
										
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">

										<!-- image upload varification -->
										</div>
									</div>
								</div>
							<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="National-id-english" class="col-sm-3 control-label">ন্যাশনাল আইডি (ইংরেজিতে)  </label>
											<div class="col-sm-3">
												<input type="text" name="nationid" id="nid" class="form-control" maxlength='17' onkeypress="return checkaccnumber(event);"  placeholder="" />
												<span class="text-danger">@error('nationid') {{ $message }} @enderror</span>
											</div>
											<label for="Birth-no" class="col-sm-3 control-label">জন্ম নিবন্ধন নং ( ইংরেজিতে ) <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="bcno" id="bcno" class="form-control" maxlength="17" onkeypress="return checkaccnumber(event);"  placeholder="" required />
												<span class="text-danger">@error('bcno') {{ $message }} @enderror</span>
											</div>
										</div>
									</div>
								</div>
							
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Passport-no" class="col-sm-3 control-label">পাসপোর্ট নং ( ইংরেজিতে ) </label>
											<div class="col-sm-3">
												<input type="text" name="pno" id="pno" class="form-control" maxlength='17' placeholder=""/>
												<span class="text-danger error-text passport_no_error"></span>
											</div>

											<label for="Birth-date" class="col-sm-3 control-label">জম্ম  তারিখ   <span>*</span></label>
											<div class="col-sm-3">
												<input type="date" name="dofb" id="dofb" class="form-control"  required />
											</div>

										</div>
										
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Name-english" class="col-sm-3 control-label">নাম ( ইংরেজিতে )   <span></span></label>
											<div class="col-sm-3">
												<input type="text" name="ename" id="name" class="form-control" placeholder=""  />
											</div>
											<label for="Name-bangla" class="col-sm-3 control-label">নাম ( বাংলায় )  <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="bname" id="bname" class="form-control" placeholder="" required />
											</div>
										</div>
									</div>
								</div>
								
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Gender" class="col-sm-3 control-label">লিঙ্গ<span>*</span></label>
											<div class="col-sm-3">
												<label class="radio-inline"><input type="radio" name="gender" id="gender" value="male" onclick="bybahik_obosthan_show1(this.value);" />পুরুষ </label>
												<label class="radio-inline"><input type="radio" name="gender" id="gender" value="female" onclick="bybahik_obosthan_show1(this.value);" />মহিলা</label>
												<label class="radio-inline"><input type="radio" name="gender" id="gender" value="তৃতীয় লিঙ্গ" onclick="bybahik_obosthan_show1(this.value);" />তৃতীয় লিঙ্গ</label>
											</div>
											<label for="Marital-status" class="col-sm-3 control-label">বৈবাহিক সম্পর্ক   <span>*</span></label>
											<div class="col-sm-3">		
											<select name="mstatus" class="form-control" onclick="bybahik_obosthan_show(this.value);" required >
													<option value=''>চিহ্নিত করুন</option>
													<option value='1'>বিবাহিত</option>
													<option value='2'>অবিবাহিত</option>
													<option value='3'>তালাক প্রাপ্ত</option>
													<option value='4'>বিধবা</option>
													<option value='5'>অন্যান্য</option>
												</select>
											
											</div>
											
										</div>
									</div>
								</div>
								
								<div class="row" id="wife">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Wife-name-english" class="col-sm-3 control-label">স্ত্রীর  নাম (ইংরেজিতে) </label>
											<div class="col-sm-3">
												<input type="text" name="eWname" id="eWname" class="form-control" placeholder="" />
											</div>
											<label for="Wife-name-bangla" class="col-sm-3 control-label">স্ত্রীর নাম (বাংলায়)</label>
											<div class="col-sm-3">
												<input type="text" name="bWname" id="bWname" class="form-control" placeholder="" />
											</div>
										</div>
									</div>
								</div>
								
								<div class="row" id="husband">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Husband-name-english" class="col-sm-3 control-label">স্বামীর নাম (ইংরেজিতে)</label>
											<div class="col-sm-3">
												<input type="text" name="eHname" id="eHname" class="form-control" placeholder="" />
											</div>
											<label for="Husband-name-bangla" class="col-sm-3 control-label"> স্বামীর নাম (বাংলায়)</label>
											<div class="col-sm-3">
												<input type="text" name="bHname" id="bHname" class="form-control" placeholder="" />
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Father-name-english" class="col-sm-3 control-label">পিতার নাম (ইংরেজিতে)  <span></span></label>
											<div class="col-sm-3">
												<input type="text" name="efname" id="efname" class="form-control" placeholder="" />
											</div>
											<label for="Father-name-bangla" class="col-sm-3 control-label">পিতার নাম (বাংলায়)  <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="bfname" id="bfname" class="form-control" placeholder="" required />
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Mother-name-english" class="col-sm-3 control-label">মাতার নাম (ইংরেজিতে)  <span></span></label>
											<div class="col-sm-3">
												<input type="text" name="emname" id="mname" class="form-control" placeholder="" />
											</div>
											<label for="Mother-name-bangla" class="col-sm-3 control-label">মাতার নাম (বাংলায়)  <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="bmnane" id="mnane" class="form-control" placeholder="" required />
											</div>
										</div>
									</div>
								</div>
							
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="profession" class="col-sm-3 control-label">পেশা</label>
											<div class="col-sm-3">
												<input type="text" name="ocupt" id="occupation" class="form-control" placeholder=""/>
											</div>
											<label for="Education-qualification" class="col-sm-3 control-label">শিক্ষাগত যোগ্যতা</label>
											<div class="col-sm-3">
												<input type="text" name="qualification" id="qualification" class="form-control" placeholder="" />
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Religion" class="col-sm-3 control-label">ধর্ম    <span>*</span></label>
											<div class="col-sm-3">
												<select name="religion" class="form-control" required >
													<option value=''>চিহ্নিত করুন</option>
													<option value='1'>ইসলাম</option>
													<option value='2'>হিন্দু</option>
													<option value='3'>বৌদ্ধ ধর্ম</option>
													<option value='4'>খ্রিস্ট ধর্ম</option>
													<option value='5'>অন্যান্য</option>
												</select>
											</div>
											<label for="Resident" class="col-sm-3 control-label">বাসিন্দা    <span>*</span></label>
											<div class="col-sm-3">
												<select name="bashinda" id='bs' class="form-control" required >
													<option value=''>চিহ্নিত করুন</option>
													<option value='1'>অস্থায়ী</option>
													<option value='2'>স্থায়ী</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="app-heading"> 
											বর্তমান ঠিকানা
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="col-sm-offset-6 col-sm-6">
											<div class="app-sub-heading"> 
												( ইংরেজিতে )
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Village-english" class="col-sm-6 control-label">পাড়া/মহল্লা </label>
													<div class="col-sm-6">
														<input type="text" name="p_gram" id="p_gram" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Road-block-sector-english" class="col-sm-6 control-label">রোড/ব্লক/সেক্টর</label>
													<div class="col-sm-6">
														<input type="text" name="p_rbs" id="p_rbs" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Word-no-english" class="col-sm-6 control-label">ওয়ার্ড নং</label>
													<div class="col-sm-6">
														<select name="p_wordno" id="p_wordno" class="form-control">
															<option value="">select</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
															<option value="9">9</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										
											<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Post-office-english" class="col-sm-6 control-label">পোষ্ট অফিস </label>
													<div class="col-sm-6">
														<input type="text" name="p_postof" id="p_postof" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-english" class="col-sm-6 control-label">থানা</label>
													<div class="col-sm-6">
														<input type="text" name="p_thana" id="p_thana" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-english" class="col-sm-6 control-label">উপজেলা</label>
													<div class="col-sm-6">
														<input type="text" name="p_upazila" id="p_upazila" value="Chowmohoni" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="District-english" class="col-sm-6 control-label">জেলা </label>
													<div class="col-sm-6">
														<input type="text" name="p_dis" value="Noakhali" id="p_dis" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
												
									
									</div>
									<div class="col-sm-6">
										<div class="col-sm-offset-6 col-sm-6">
											<div class="app-sub-heading"> 
												( বাংলায় )
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Village-bangla" class="col-sm-6 control-label">পাড়া/মহল্লা </label>
													<div class="col-sm-6">
														<input type="text" name="pb_gram" id="pb_gram" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Road-block-sector-bangla" class="col-sm-6 control-label">রোড/ব্লক/সেক্টর</label>
													<div class="col-sm-6">
														<input type="text" name="pb_rbs" id="pb_rbs" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Word-no-bangla" class="col-sm-6 control-label">ওয়ার্ড নং <span>*</span></label>
													<div class="col-sm-6">
														<select name="pb_wordno"  class="form-control" required>
															<option value="">select</option>
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
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Post-office-bangla" class="col-sm-6 control-label">পোষ্ট অফিস </label>
													<div class="col-sm-6">
														<input type="text" name="pb_postof" id="pb_postof" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-bangla" class="col-sm-6 control-label">থানা</label>
													<div class="col-sm-6">
														<input type="text" name="pb_thana" id="pb_thana" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-bangla" class="col-sm-6 control-label">উপজেলা </label>
													<div class="col-sm-6">
														<input type="text" name="pb_upazila" id="pb_upazila" value="চৌমুহনী" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="District-bangla" class="col-sm-6 control-label">জেলা</label>
													<div class="col-sm-6">
														<input type="text" name="pb_dis" value="নোয়াখালী" id="pb_dis" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										
									</div>
								</div>
								
								<div class="row" id="permaHeading">
									<div class="col-sm-12" style="text-align:center;"> 
										<div class="app-heading"> 
											স্থায়ী  ঠিকানা
										</div>
									</div>
								</div>
								
								<div class="row" id="permanentAddress">
									<div class="col-sm-6">
										<div class="col-sm-offset-6 col-sm-6">
											<div class="app-sub-heading"> 
												( ইংরেজিতে )
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Village-english" class="col-sm-6 control-label">পাড়া/মহল্লা</label>
													<div class="col-sm-6">
														<input type="text" name="per_gram" id="per_gram" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Road-block-sector-english" class="col-sm-6 control-label">রোড/ব্লক/সেক্টর</label>
													<div class="col-sm-6">
														<input type="text" name="per_rbs" id="per_rbs" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Word-no-english" class="col-sm-6 control-label">ওয়ার্ড নং</label>
													<div class="col-sm-6">
														<input type="text" name="per_wordno" id="per_wordno" class="form-control" onkeypress="return numtest();"  placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Post-office-english" class="col-sm-6 control-label">পোষ্ট অফিস </label>
													<div class="col-sm-6">
														<input type="text" name="per_postof" id="postof" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-english" class="col-sm-6 control-label">থানা </label>
													<div class="col-sm-6">
														<input type="text" name="per_thana" id="per_thana"  class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-english" class="col-sm-6 control-label">উপজেলা </label>
													<div class="col-sm-6">
														<input type="text" name="per_upazila" id="per_upazila" value="Chowmohoni" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="District-english" class="col-sm-6 control-label">জেলা </label>
													<div class="col-sm-6">
														<input type="text" name="per_dis" value="Noakhali" id="per_dis" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										
										
									</div>
									<div class="col-sm-6">
										<div class="col-sm-offset-6 col-sm-6">
											<div class="app-sub-heading"> 
												( বাংলায় )
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Village-bangla" class="col-sm-6 control-label">পাড়া/মহল্লা</label>
													<div class="col-sm-6">
														<input type="text" name="perb_gram" id="perb_gram" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Road-block-sector-bangla" class="col-sm-6 control-label">রোড/ব্লক/সেক্টর</label>
													<div class="col-sm-6">
														<input type="text" name="perb_rbs" id="perb_rbs" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Word-no-bangla" class="col-sm-6 control-label">ওয়ার্ড নং</label>
													<div class="col-sm-6">
														<input type="text" name="perb_wordno" id="perb_wordno" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Post-office-bangla" class="col-sm-6 control-label">পোষ্ট অফিস </label>
													<div class="col-sm-6">
														<input type="text" name="perb_postof" id="perb_postof" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-bangla" class="col-sm-6 control-label">থানা </label>
													<div class="col-sm-6">
														<input type="text" name="perb_thana"  id="perb_thana" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-bangla" class="col-sm-6 control-label">উপজেলা </label>
													<div class="col-sm-6">
														<input type="text" name="perb_upazila" value="চৌমুহনী" id="perb_upazila" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="District-bangla" class="col-sm-6 control-label">জেলা </label>
													<div class="col-sm-6">
														<input type="text" name="perb_dis" value="নোয়াখালী" id="perb_dis" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										
										
										
									</div>
								</div>
								
								
								<div class="row">
									<div class="col-sm-12" style="text-align:center;"> 
										<div class="app-heading"> 
											যোগাযোগের ঠিকানা
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Mobile" class="col-sm-3 control-label">মোবাইল    <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="mob" id="mob" class="form-control" maxlength="11" placeholder="ইংরেজিতে প্রদান করুন" onkeypress="return checkaccnumber(event);"  required />
												<span class="text-danger error-text mob_error"></span>
											</div>
											<label for="Email" class="col-sm-3 control-label">ইমেল </label>
											<div class="col-sm-3">
												<input type="text" name="email" id="email" class="form-control" placeholder=""/>
												<span class="text-danger error-text email_error"></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Designation" class="col-sm-3 control-label">সংযুক্তি যদি থাকে ( ইংরেজিতে ) </label>
											<div class="col-sm-3">
												<textarea name="attachment_en" class="form-control" rows="5" id="attachment_en" placeholder="Examples: Freedom fighter children, widows, tribals ..... etc." ></textarea>
											</div>
											<label for="Designation" class="col-sm-3 control-label">সংযুক্তি যদি থাকে ( বাংলায় )</label>
											<div class="col-sm-3">
												<textarea name="attachment_bn" class="form-control" rows="5" id="attachment_bn"  placeholder="উদাহরন: মুক্তিযোদ্ধা সন্তান, বিধবা, উপজাতি .....ইত্যাদি"></textarea>
											</div>
										</div>
									</div>
								</div>
	
								<div class="row">
									<div class="col-sm-offset-6 col-sm-6 button-style"> 
									<input type="hidden" value="applied" name="status"/>
										<button type="submit" id="submit"  class="btn btn-primary">জমা দিন</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- row end--->
		</div><!-- left Content End-->
	</div>
</div>





<script>
// $(function(){
// 	$("#upform").on('submit', function(e){
// 		e.preventDefault();
		
// 		jQuery.ajax({
// 			url:"{{route('cityzen.store')}}",
// 			data:jQuery('#upform').serialize(),
// 			type:'post',
			
// 		});
// 	});
// });



</script>
@endsection
</x-home-master>