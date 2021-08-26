


<x-home-master>
@section('homecontent')
   <!-- end header --><style type="text/css"> 
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
			"index.php/home/onapottiaplication_action",
			$("#info").serialize(),
		function(data){
			if(data !=1){
				document.getElementById('submit_button').disabled = false;
			}
			if(data==1)
			{
				alert('আপনার আবেদনটি গৃহীত হয়েছে\n Tracking No টি নিয়ে আপনার পৌরসভায়\n যোগাযোগ করুন');
				 //setTimeout(function() {
				window.location='index.php/home/onapottipreview'; //}, 1000)
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

<!--for address auto fill using javascript Start-->
<script>
	function autofill(f) {
  if(f.passing_value.checked == true) {
	f.perb_gram.value  = f.pb_gram.value;
    f.perb_rbs.value   = f.pb_rbs.value;
    f.perb_wordno.value= f.pb_wordno.value  ;
    f.perb_dis.value   = f.pb_dis.value;
    f.perb_thana.value = f.pb_thana.value;
    f.perb_postof.value= f.pb_postof.value ;
  }
}
</script>
<!--for address auto fill using javascript End-->

<div class="main_con"><!--Content Start-->
	<div class="row"><!--- row start--->
		<div class="col-md-12 left_con"><!-- left Content Start-->
			<div class="row">
				<div class="col-md-12">

					<div class="panel panel-primary">
						<div class="panel-heading" style="font-weight: bold; font-size: 15px;background:#175e0a;text-align:center;">অনাপত্তি পত্রের আবেদন
						
						</div>
						
						<div class="panel-body all-input-form">
							<form action="javascript:void(0)" method="post" id="info" class="form-horizontal">
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Name-english" class="col-sm-3 control-label">উদ্যোক্তার নাম   <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="udname" id="name" class="form-control" placeholder=""  />
											</div>
											<label for="Father-name-bangla" class="col-sm-3 control-label">উদ্যোক্তার পিতার নাম <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="udfname" id="bfname" class="form-control" placeholder="" required />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Name-english" class="col-sm-3 control-label">ব্যবসা প্রতিষ্ঠানের নাম   <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="bussname" id="name" class="form-control" placeholder=""  />
											</div>
											<label for="Father-name-bangla" class="col-sm-3 control-label">কারখানার অবস্থান</label>
											<div class="col-sm-3">
												<input type="text" name="factoryname" id="bfname" class="form-control" placeholder="" required />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Name-english" class="col-sm-3 control-label">ব্যবসার  ধরণ <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="busstype" id="name" class="form-control" placeholder=""  />
											</div>
											<label for="Father-name-bangla" class="col-sm-3 control-label">ট্রেড লাইসেন্স নং</label>
											<div class="col-sm-3">
												<input type="text" name="tradeno" id="bfname" class="form-control" placeholder="" required />
											</div>
										</div>
									</div>
								</div>
								
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Gender" class="col-sm-3 control-label">লিঙ্গ   <span>*</span></label>
											<div class="col-sm-3">
												<label class="radio-inline"><input type="radio" name="gender" id="gender" value="male" onclick="bybahik_obosthan_show1(this.value);" />পুরুষ </label>
												<label class="radio-inline"><input type="radio" name="gender" id="gender" value="female" onclick="bybahik_obosthan_show1(this.value);" />মহিলা</label>
												<label class="radio-inline"><input type="radio" name="gender" id="gender" value="তৃতীয় লিঙ্গ" onclick="bybahik_obosthan_show1(this.value);" />তৃতীয় লিঙ্গ</label>
											</div>
											<label for="Resident" class="col-sm-3 control-label">উদ্যেক্তার ঠিকানা    <span>*</span></label>
											<div class="col-sm-3">
												<select name="bashinda" id='bs' class="form-control" onchange="basinda_show_hide(this.value);" required >
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
											উদ্যোক্তার বর্তমান ঠিকানা
										</div>
									</div>
								</div>
								
								<div class="row" id="pressentAddress">
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Village-bangla" class="col-sm-6 control-label">গ্রাম/মহল্লা </label>
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
													<label for="Word-no-bangla" class="col-sm-6 control-label">ওয়ার্ড নং</label>
													<div class="col-sm-6">
														<select name="pb_wordno" class="form-control" required>
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
											</div>
										</div>
									</div>
									<div class="col-sm-6">
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
													<label for="Thana-bangla" class="col-sm-6 control-label">উপজেলা</label>
													<div class="col-sm-6">
														<input type="text" name="pb_thana" id="pb_thana" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="District-bangla" class="col-sm-6 control-label">জেলা </label>
													<div class="col-sm-6">
														<input type="text" name="pb_dis" id="pb_dis" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								
								<div class="row" id="permaHeading">
									<div class="col-sm-12" style="text-align:center;"> 
										<div class="app-heading"> 
											উদ্যোক্তার স্থায়ী  ঠিকানা 
										</div>
									</div>
								</div>
								
								<div class="row" id="permanentAddress">
									<div class="app-heading"> 
											 <p style="font-size:15px; font-weight:normal;padding-top:10px;"> <input type="checkbox" name="passing_value" onclick="autofill(this.form)"> ঠিকানা  একই হলে পাশে টিক দিন</input></p>
										</div>
									<div class="col-sm-6">
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Village-bangla" class="col-sm-6 control-label">গ্রাম/মহল্লা </label>
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
										
									</div>
									<div class="col-sm-6">
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
													<label for="Thana-bangla" class="col-sm-6 control-label">থানা</label>
													<div class="col-sm-6">
														<input type="text" name="perb_thana" id="perb_thana" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-bangla" class="col-sm-6 control-label">উপজেলা</label>
													<div class="col-sm-6">
														<input type="text" name="perb_thana" id="perb_thana" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="District-bangla" class="col-sm-6 control-label">জেলা </label>
													<div class="col-sm-6">
														<input type="text" name="perb_dis" id="perb_dis" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12" style="text-align:center;"> 
										<div class="app-heading"> 
											অফিসের ঠিকানা
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Designation" class="col-sm-3 control-label">অফিসের ঠিকানা</label>
											<div class="col-sm-9">
												<textarea name="officeaddress" class="form-control" rows="5" id="attachment" placeholder="অফিসের ঠিকানা লিখুন"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12"> 
										<div class="app-heading"> 
											কারখানায় ব্যবহ্রত জমির বিবরণ
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Village-bangla" class="col-sm-6 control-label">মৌজা </label>
													<div class="col-sm-6">
														<input type="text" name="moja" id="pb_gram" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Road-block-sector-bangla" class="col-sm-6 control-label">থানা</label>
													<div class="col-sm-6">
														<input type="text" name="thana" id="pb_rbs" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Word-no-bangla" class="col-sm-6 control-label">জেলা</label>
													<div class="col-sm-6">
														<input type="text" name="district" id="pb_wordno" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="District-bangla" class="col-sm-6 control-label">খতিয়ান নং </label>
													<div class="col-sm-6">
														<input type="text" name="khotianno" id="pb_dis" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-bangla" class="col-sm-6 control-label">দাগ নং</label>
													<div class="col-sm-6">
														<input type="text" name="dagno" id="pb_thana" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Post-office-bangla" class="col-sm-6 control-label">জমির ধরণ</label>
													<div class="col-sm-6">
														<input type="text" name="landtype" id="pb_postof" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Post-office-bangla" class="col-md-3 control-label">জমির পরিমাণ</label>
													<div class="col-md-9">
														<input type="text" name="landamount" id="pb_postof" class="form-control" placeholder=""/>
													</div>
												</div>
											</div>
									</div>
								</div>
							
								<div class="row">
									<div class="col-sm-offset-6 col-sm-6 button-style"> 
										<button type="submit" name="submit" id="submit_button" onclick="parsonalinfo_insert()"  class="btn btn-success">দাখিল করুন</button>
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