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
.all-input-form input[type="text"],
.all-input-form select{
	color: #0C090A;
	font-size:13px;
	font-weight:500;
}
.all-input-form input[type="file"]{
	color: #0C090A;
	font-size:13px;
	font-weight:500;
}
/* mozila fire fox file input code start */

@-moz-document url-prefix() {
    .input-file-sm {
        height: auto;
        padding-top: 2px;
        padding-bottom: 1px;
    }
}
/* mozila fire fox file input code end */

</style>

<script type="text/javascript"> // clear add row function start
	function clear_form_elements(id_name) {
		jQuery("#"+id_name).find(':input').each(function() {
			switch(this.type) {
				case 'password':
				case 'text':
				case 'textarea':
				case 'file':
				case 'select-one':       
					jQuery(this).val('');
					break;
				case 'checkbox':
				case 'radio':
					this.checked = false;
			}
		});
	}
</script>
<script type="text/javascript"> 
	/*======= ready function start ==========*/
		// $(document).ready(function(){
		// 	$(".samir_nam").hide();
		// 	$("#other_owner").hide();
		// 	$("#inpucompany").hide();
			
		// 	$('#info').submit(function() {
		// 		document.getElementById('submit_button').disabled = 'disabled';
		// 		$.post(
		// 		"index.php/home/doglicenseapplication_action",
		// 		$("#info").serialize(),
		// 		function(data){
		// 			if(data !=1){
		// 				document.getElementById('submit_button').disabled = false;
		// 			}
		// 			if(data==1)
		// 			{
		// 				alert('আপনার আবেদনটি গৃহীত হয়েছে\n Tracking No টি নিয়ে আপনার পৌরসভায়\n যোগাযোগ করুন');

		// 				window.location='index.php/home/dogpreview';
						
						
		// 			} 
		// 			else if(data==2)
		// 			{
		// 				alert('দুঃখিত আপানর জাতিয় পরিচয়পত্র নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন');
		// 			}
		// 			else if(data==3)
		// 			{
		// 				alert('দুঃখিত আপানর জন্ম নিবধন নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন');
		// 			}
		// 			else if(data==4)
		// 			{
		// 				alert('দুঃখিত আপানর পাসপোর্ট নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন পাসপোর্ট নং');
		// 			}
		// 			else if(data==6)
		// 			{
		// 				alert('দুঃখিত আপানর মোবাইল নাম্বারটি পূর্বে ব্যাবহার করা হয়েছে.\nTracking No এর  জন্য পৌরসভায় পরিষদ যোগাযোগ করুন');
		// 			}
		// 			else if(data==5)
		// 			{
		// 				alert('দয়া করে আপনার সঠিক মোবাইল নাম্বারটি ব্যাবহার করুন');
		// 			}
		// 			else{
		// 				alert(data);
		// 			}
		// 		});
		// 			return false;
		// 	});
	
				
		// });
	

	
	/*======== bibhahik obstha function start ==========*/
	function bybahik_obosthan_show(mstatus){
		//alert(mstatus);
		var gender=$("#gender:checked").val();
		if(mstatus=='1' && gender=='male'){
			//alert('father id show');
			$("#pitar_nam").show();
			$(".samir_nam input:text").val("");
			$(".samir_nam").hide();
		}
		else if(mstatus=='1' && gender=='female'){
			//alert("husband name show");
			$("#pitar_nam input:text").val("");
			$("#pitar_nam").hide();
			$(".samir_nam").show();
		}
		else if(mstatus=='2' && gender=='female'){
			//alert("Father name show");
			$("#pitar_nam").show();
			$(".samir_nam input:text").val('');
			$(".samir_nam").hide();
		}
		else if(mstatus=='2' && gender=='male'){
			//alert('Father name show');
			$("#pitar_nam").show();
			$(".samir_nam input:text").val('');
			$(".samir_nam").hide();
		}
		else{
			
		}
	}
	/*======== 2nd function ======*/
	function bybahik_obosthan_show1(gender){
		var mstatus=$("#mstatus:checked").val();
		if(mstatus=='বিবাহিত' && gender=='male'){
			//alert('Fahter name show');
			$("#pitar_nam").show();
			$(".samir_nam input:text").val('');
			$(".samir_nam").hide();
		}
		else if(mstatus=='বিবাহিত' && gender=='female'){
			//alert('Husband name show');
			$("#pitar_nam input:text").val('');
			$("#pitar_nam").hide();
			$(".samir_nam").show();
		}
		else if(mstatus=='অবিবাহিত' && gender=='female'){
			//alert('Father name show');
			$("#pitar_nam").show();
			$(".samir_nam input:text").val('');
			$(".samir_nam").hide();
		}
		else if(mstatus=='অবিবাহিত' && gender=='male'){
			//alert('Father name show ');
			$("#pitar_nam").show();
			$(".samir_nam input:text").val('');
			$(".samir_nam").hide();
		}
		else{
			
		}
	}
	
	
	/*========= rew new settion start ===========*/
	 function getType(x)
	{
		//alert(x);
		document.getElementById("dtype").value=x;	
	}
	/*========= rew new settion end ===========*/
	
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
						<div class="panel-heading" style="font-weight: bold; font-size: 15px;background:#175e0a;text-align:center;">পোষা প্রাণীর লাইসেন্স আবেদন</div>
						<div class="panel-body all-input-form">
							<form action="{{route('poshaprani.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal" name="upform" id="upform">
							@csrf
								<div class="row"  style="margin-top: 10px;">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Picture" class="col-sm-3 control-label">ছবি</label>
											<div class="col-sm-5" style="margin-top:3px;">
												<input type="file" name="file" class="form-control input-file-sm" />
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
											<label for="Owner-type" class="col-sm-3 control-label">পোষা প্রাণীর ধরণ <span>*</span></label>
											<div class="col-sm-3">
												<select name="ownertype" id="type_val" class="form-control">
																										<option value="">চিহ্নিত করুন</option>
																										<option value="কুকুর">কুকুর</option>
																										<option value="বিড়াল">বিড়াল</option>
																										<option value="হাতি">হাতি</option>
																										<option value="ঘোড়া">ঘোড়া</option>
																										<option value="হরিণ">হরিণ</option>
																										<option value="খরগোস">খরগোস</option>
																										<option value="বাঘ">বাঘ</option>
																										<option value="সিংহ">সিংহ</option>
																									</select>
											</div>
											<label for="Word-no-bangla" class="col-sm-3 control-label">ওয়ার্ড নং <span>*</span></label>
												<div class="col-sm-3">
													<select name="bb_wordno" class="form-control" required>
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
							
								
								<div id="clearall">
									<div class="row">
										<div class="col-sm-12"> 
											<div class="form-group">
												<label for="Owner-name-english" class="col-sm-3 control-label">মালিকের নাম ( ইংরেজিতে ) </label>
												<div class="col-sm-3">
													<input type="text" name="ewname" id="ewname" class="form-control" placeholder=""  />
												</div>
												<label for="Owner-name-bangla" class="col-sm-3 control-label">মালিকের নাম ( বাংলায় )  <span>*</span></label>
												<div class="col-sm-3">
													<input type="text" name="bwname" id="bwname" class="form-control" placeholder=""  />
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-sm-12"> 
											<div class="form-group">
												<label for="Gender" class="col-sm-3 control-label">লিঙ্গ   <span>*</span></label>
												<div class="col-sm-3">
													<label class="radio-inline"><input type="radio" name="gender" id="gender" value="male" onclick="bybahik_obosthan_show1(this.value);">পুরুষ </label>
													<label class="radio-inline"><input type="radio" name="gender" id="gender" value="female" onclick="bybahik_obosthan_show1(this.value);">মহিলা</label>
													<label class="radio-inline"><input type="radio" name="gender" id="gender" value="তৃতীয় লিঙ্গ" onclick="bybahik_obosthan_show1(this.value);">তৃতীয় লিঙ্গ</label>
												</div>
												<label for="Marital-status" class="col-sm-3 control-label">বৈবাহিক সম্পর্ক   <span>*</span></label>
												<div class="col-sm-3">
													<label class="radio-inline"><input type="radio" name="mstatus" id="mstatus" value="বিবাহিত" onclick="bybahik_obosthan_show('1');">বিবাহিত </label>
													<label class="radio-inline"><input type="radio" name="mstatus" id="mstatus" value="অবিবাহিত" onclick="bybahik_obosthan_show('2');">অবিবাহিত</label>
												</div>
											</div>
										</div>
									</div>
									
										
									<div class="row" id="pitar_nam">
										<div class="col-sm-12"> 
											<div class="form-group">
												<label for="Father-name-english" class="col-sm-3 control-label">পিতার নাম (ইংরেজিতে)</label>
												<div class="col-sm-3">
													<input type="text" name="efname" id="efname" class="form-control" placeholder=""/>
												</div>
												<label for="Father-name-bangla" class="col-sm-3 control-label">পিতার নাম (বাংলায়)  <span>*</span></label>
												<div class="col-sm-3">
													<input type="text" name="bfname" id="bfname" class="form-control" placeholder="" />
												</div>
											</div>
										</div>
									</div>
									
									<div class="row samir_nam">
										<div class="col-sm-12"> 
											<div class="form-group">
												<label for="Husband-name-english" class="col-sm-3 control-label">স্বামীর নাম (ইংরেজিতে)</label>
												<div class="col-sm-3">
													<input type="text" name="esname" id="esname" class="form-control" placeholder=""/>
												</div>
												<label for="Husband-name-bangla" class="col-sm-3 control-label"> স্বামী নাম (বাংলায়)</label>
												<div class="col-sm-3">
													<input type="text" name="bsname" id="bsname" class="form-control" placeholder="" />
												</div>
											</div>
										</div>
									</div>
								
									<div class="row">
										<div class="col-sm-12"> 
											<div class="form-group">
												<label for="Mother-name-english" class="col-sm-3 control-label">মাতার নাম (ইংরেজিতে)  </label>
												<div class="col-sm-3">
													<input type="text" name="emname" id="emname" class="form-control" placeholder=""/>
												</div>
												<label for="Mother-name-bangla" class="col-sm-3 control-label">মাতার নাম (বাংলায়)  <span>*</span></label>
												<div class="col-sm-3">
													<input type="text" name="bmname" id="bmname" class="form-control" placeholder="" />
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-sm-12"> 
											<div class="form-group">
												<label for="Mother-name-english" class="col-sm-3 control-label">স্থায়ী ঠিকানা (ইংরেজিতে)  </label>
												<div class="col-sm-3">
													<input type="text" name="owner_permadd_eng" id="owner_permadd_eng" class="form-control" placeholder=""/>
												</div>
												<label for="Mother-name-bangla" class="col-sm-3 control-label">স্থায়ী ঠিকানা (বাংলায়)  <span>*</span></label>
												<div class="col-sm-3">
													<input type="text" name="owner_permadd_bng" id="owner_permadd_bng" class="form-control" placeholder="" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12"> 
											<div class="form-group">
												<label for="Mother-name-english" class="col-sm-3 control-label">বর্তমান ঠিকানা (ইংরেজিতে)  </label>
												<div class="col-sm-3">
													<input type="text" name="owner_preadd_eng" id="owner_preadd_eng" class="form-control" placeholder=""/>
												</div>
												<label for="Mother-name-bangla" class="col-sm-3 control-label">বর্তমান ঠিকানা (বাংলায়)  <span>*</span></label>
												<div class="col-sm-3">
													<input type="text" name="owner_preadd_bng" id="owner_preadd_bng" class="form-control" placeholder="" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12"> 
											<div class="form-group">
												<label for="Mother-name-english" class="col-sm-3 control-label">জাতীয় পরিচয় পত্র নং(ইংরেজিতে)   <span>*</span></label>
												<div class="col-sm-3">
													<input type="text" name="nationid" id="nationid" class="form-control" placeholder="" />
												</div>
												<label for="Mother-name-bangla" class="col-sm-3 control-label">জন্ম নিবন্ধন নং (ইংরেজিতে)  <span>*</span> </label>
												<div class="col-sm-3">
													<input type="text" name="bcno" id="bcno" class="form-control" placeholder="" required />
												</div>
											</div>
										</div>
									</div>
									
									
									
									
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Vat-id" class="col-sm-3 control-label">প্রাণীর নাম(ইংরেজিতে)</label>
											<div class="col-sm-3">
												<input type="text" name="animal_name_en" id="animal_name_en" class="form-control" placeholder=""/>
											</div>
											<label for="Vat-id" class="col-sm-3 control-label">প্রাণীর নাম(বাংলায়)</label>
											<div class="col-sm-3">
												<input type="text" name="animal_name" id="animal_name" class="form-control" placeholder=""/>
											</div>
										</div>
										
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Vat-id" class="col-sm-3 control-label">প্রাণীর জাত (ইংরেজিতে)</label>
											<div class="col-sm-3">
												<input type="text" name="animal_class_en" id="animal_class_en" class="form-control"  placeholder=""/>
											</div>
											<label for="Vat-id" class="col-sm-3 control-label">প্রাণীর জাত (বাংলায়)</label>
											<div class="col-sm-3">
												<input type="text" name="animal_class" id="animal_class" class="form-control"  placeholder=""/>
											</div>
										</div>
										
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Tax-id" class="col-sm-3 control-label">প্রাণীর গায়ের রঙ (ইংরেজিতে)</label>
											<div class="col-sm-3">
												<input type="text" name="animal_color_en" id="animal_color_en" class="form-control"  placeholder=""/>
											</div>
											<label for="Tax-id" class="col-sm-3 control-label">প্রাণীর গায়ের রঙ (বাংলায়)</label>
											<div class="col-sm-3">
												<input type="text" name="animal_color" id="animal_color" class="form-control"  placeholder=""/>
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Vat-id" class="col-sm-3 control-label">জলাতংকের টিকা দানের তারিখ</label>
											<div class="col-sm-3">
												<input type="date" name="tika_date" id="tika_date" class="form-control"  placeholder=""/>
											</div>
											<label for="Tax-id" class="col-sm-3 control-label">জলাতংকের টিকা দানের পরবর্তী তারিখ</label>
											<div class="col-sm-3">
												<input type="date" name="tika_next_date" id="tika_next_date" class="form-control"  placeholder=""/>
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Business-type-bangla" class="col-sm-3 control-label">প্রাণী পালনের তারিখ <span>*</span></label>
											<div class="col-sm-3">
												<input type="date" name="prani_palon_date" id="btypes" class="form-control" placeholder=""/>
											</div>
											<label for="Tax-id" class="col-sm-3 control-label">প্রাণীর বয়স</label>
											<div class="col-sm-3">
												<input type="text" name="animal_age" id="animal_age" class="form-control"  placeholder="" />
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
												<input type="text" name="mob" id="mob" class="form-control" maxlength="11" placeholder="ইংরেজিতে প্রদান করুন"  onkeypress="return checkaccnumber(event);" required />
											</div>
											<label for="Phone" class="col-sm-3 control-label">ফোন (যদি থাকে ) </label>
											<div class="col-sm-3">
												<input type="text" name="phone" id="phone" class="form-control" onkeypress="return checkaccnumber(event);"  placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Email" class="col-sm-3 control-label">ইমেল</label>
											<div class="col-sm-3">
												<input type="text" name="email" id="email" class="form-control" placeholder=""/>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
	
								<div class="row">
									<div class="col-sm-offset-6 col-sm-6 button-style"> 
										<button type="submit"  id="submit_button" class="btn btn-success">জমা দিন</button>
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