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
		$(document).ready(function(){
			$(".samir_nam").hide();
			$("#other_owner").hide();
			$("#inpucompany").hide();
			
			$('#info').submit(function() {
				document.getElementById('submit_button').disabled = 'disabled';
				$.post(
				"holdnamjariapplication_action", //route()
				$("#info").serialize(),
				function(data){
					if(data !=1){
						document.getElementById('submit_button').disabled = false;
					}
					if(data==1)
					{
						alert('আপনার আবেদনটি গৃহীত হয়েছে\n Tracking No টি নিয়ে আপনার পৌরসভায়\n যোগাযোগ করুন');

						window.location='route_success';
						<!-- window.open('success','_blank');----->
							//setTimeout(function() {
						//}, 1000)
					} 
					else if(data==2)
					{
						alert('দুঃখিত আপানর জাতিয় পরিচয়পত্র নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন');
					}
					else if(data==3)
					{
						alert('দুঃখিত আপানর জন্ম নিবধন নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন');
					}
					else if(data==4)
					{
						alert('দুঃখিত আপানর পাসপোর্ট নং পূর্বে ব্যাবহার করা হয়েছে \nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন পাসপোর্ট নং');
					}
					else if(data==6)
					{
						alert('দুঃখিত আপানর মোবাইল নাম্বারটি পূর্বে ব্যাবহার করা হয়েছে.\nTracking No এর  জন্য আপনার পৌরসভায় যোগাযোগ করুন');
					}
					else if(data==5)
					{
						alert('দয়া করে আপনার সঠিক মোবাইল নাম্বারটি ব্যাবহার করুন');
					}
					else{
						alert(data);
					}
				});
					return false;
			});
	

		});
	

	 function getType(x)
	{
		//alert(x);
		document.getElementById("dtype").value=x;	
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
</div>

<div class="main_con"><!--Content Start-->
	<div class="row">
				<div class="col-md-12"> 
					<div class="panel panel-primary">
						<div class="panel-heading" style="font-weight: bold; font-size: 15px;background:#ff860a;text-align:center;">হোল্ডিং নামজারির আবেদন পত্র</div>
						<div class="panel-body all-input-form">
							
						
							<form action="index.php/home/holdnamjariapplication_action" method="post" id="info" enctype="multipart/form-data" class="form-horizontal">

								<input type="hidden" name="delivery_type" value="3" checked="checked">

								<div class="row">
									<div class="col-sm-12" style="text-align:center;"> 
										<div class="app-heading"> 
											যে হোল্ডিং এর মালিকানা রেকর্ড সংশোধন করিতে হইবে তাহার
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="xholder_name" class="col-sm-3 control-label">সাবেক মালিকের নাম  </label>
											<div class="col-sm-3">
												<input type="text" name="xholder_name" id="xholder_name" class="form-control" />
											</div>
											<label for="Father-name-english" class="col-sm-3 control-label"> পিতা/স্বামীর নাম</label>
											<div class="col-sm-3">
												<input type="text" name="bfname" id="" class="form-control" placeholder=""/>
											</div>
										</div>
										
									</div>
								</div>
									
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="trimasik_kor" class="col-sm-3 control-label">ত্রৈমাসিক পৌরকর</label>
											<div class="col-sm-3">
												<input type="text" name="trimasik_kor" id="trimasik_kor" class="form-control" placeholder=""/>
											</div>
											<label for="Mother-name-bangla" class="col-sm-3 control-label">বাৎসরিক মূল্যমান
											<span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="yearly_rate" id="yearly_rate" class="form-control" placeholder="" />
											</div>
										</div>
									</div>
								</div>
								
								<div id="clearall">
									
									
									
									<div class="row" >
										<div class="col-sm-12"> 
											<div class="form-group" id="pitar_nam" >
												<label for="Father-name-english" class="col-sm-3 control-label"> বাৎসরিক করের পরিমান</label>
												<div class="col-sm-3">
													<input type="text" name="yearly_amount" id="yearly_amount" class="form-control" placeholder=""/>
												</div>
												<label for="Father-name-english" class="col-sm-3 control-label">সর্বশেষ এসেসমেন্ট সন</label>
												<div class="col-sm-3">
													<input type="text" name="last_assesment_date" id="last_assesment_date" class="form-control" placeholder=""/>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row" >
										<div class="col-sm-12"> 
											<div class="form-group" id="pitar_nam" >
												<label for="hold_no" class="col-sm-3 control-label">হোল্ডিং নাম্বার <span>*</span></label>
												<div class="col-sm-3">
													<input type="text" name="hold_no" id="hold_no" class="form-control" />
												</div>
											</div>
										</div>
									</div>
									
									

								<div class="row">
									<div class="col-sm-12" style="text-align:center;"> 
										<div class="app-heading"> 
											সংশোধনক্রমে যে মালিকের নাম রেকর্ড করিতে হইবে তাহার 
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="cort_own_name" class="col-sm-3 control-label">নাম</label>
											<div class="col-sm-3">
												<input type="text" name="cort_own_name" id="cort_own_name" class="form-control"  placeholder=""   required />
											</div>
											<label for="father_husband" class="col-sm-3 control-label">পিতা/স্বামীর নাম</label>
											<div class="col-sm-3">
												<input type="text" name="father_husband" id="father_husband" class="form-control"  placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="vilage" class="col-sm-3 control-label">গ্রাম</label>
											<div class="col-sm-3">
												<input type="text" name="vilage" id="vilage" class="form-control"  placeholder=""  required />
											</div>
											<label for="word_no" class="col-sm-3 control-label">ওয়ার্ড নং</label>
											<div class="col-sm-3">
												<input type="text" name="word_no" id="word_no" class="form-control"  placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="thana" class="col-sm-3 control-label">থানা</label>
											<div class="col-sm-3">
												<input type="text" name="thana" id="thana" class="form-control" maxlength="11" placeholder=""  required />
											</div>
											<label for="district" class="col-sm-3 control-label">জেলা</label>
											<div class="col-sm-3">
												<input type="text" name="district" id="district" class="form-control"  placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12" style="text-align:center;"> 
										<div class="app-heading"> 
											মালিকানা প্রাপ্তির পূর্ণ বিবরণী 
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="bhumi_moja_no" class="col-sm-3 control-label">প্রস্তাবিত ভূমির মৌজার নাম ও নম্বর</label>
											<div class="col-sm-3">
												<input type="text" name="bhumi_moja_no" id="bhumi_moja_no" class="form-control" placeholder="" required />
											</div>
											<label for="khotian_no" class="col-sm-3 control-label">খতিয়ান নম্বর</label>
											<div class="col-sm-3">
												<input type="text" name="khotian_no" id="khotian_no" class="form-control" placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="dag_no" class="col-sm-3 control-label">দাগ নম্বর</label>
											<div class="col-sm-3">
												<input type="text" name="dag_no" id="dag_no" class="form-control"  placeholder="" required />
											</div>
											<label for="land_amount" class="col-sm-3 control-label">জমির পরিমাণ</label>
											<div class="col-sm-3">
												<input type="text" name="land_amount" id="land_amount" class="form-control" placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="dolildata_name" class="col-sm-3 control-label">দলিল দাতার নাম</label>
											<div class="col-sm-3">
												<input type="text" name="dolildata_name" id="dolildata_name" class="form-control" placeholder="" required />
											</div>
											<label for="dolil_no" class="col-sm-3 control-label">রেজিঃকৃত দলিলের নম্বর</label>
											<div class="col-sm-3">
												<input type="text" name="dolil_no" id="dolil_no" class="form-control" placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="regoffice_name" class="col-sm-3 control-label">রেজিঃ অফিসের নাম</label>
											<div class="col-sm-3">
												<input type="text" name="regoffice_name" id="regoffice_name" class="form-control" placeholder="" required />
											</div>
											<label for="reg_date" class="col-sm-3 control-label">রেজিঃ তারিখ</label>
											<div class="col-sm-3">
												<input type="text" name="reg_date" id="reg_date" class="form-control"  placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="dolil_hold_no" class="col-sm-3 control-label">দলিলের যে হোল্ডিং নম্বর ও মহল্লা উল্লেখ আছে</label>
											<div class="col-sm-3">
												<input type="text" name="dolil_hold_no" id="dolil_hold_no" class="form-control" placeholder=""  required />
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12" style="text-align:center;"> 
										<div class="app-heading"> 
											হোল্ডিং এর বিবরণী 
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="bohotola_dalan" class="col-sm-3 control-label">বহুতলা দালান ও কোঠার সংখ্যা</label>
											<div class="col-sm-3">
												<input type="text" name="bohotola_dalan" id="bohotola_dalan" class="form-control"  placeholder=""   />
											</div>
											<label for="ektoal_dalan" class="col-sm-3 control-label">একতলা দালান ও কোঠার সংখ্যা</label>
											<div class="col-sm-3">
												<input type="text" name="ektoal_dalan" id="ektoal_dalan" class="form-control" placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="adafaka_ghor" class="col-sm-3 control-label">আধা পাকা ঘর ও কোঠার সংখ্যা</label>
											<div class="col-sm-3">
												<input type="text" name="adafaka_ghor" id="adafaka_ghor" class="form-control" placeholder=""  />
											</div>
											<label for="kaca_ghor" class="col-sm-3 control-label">কাঁচা ঘরের সংখ্যা</label>
											<div class="col-sm-3">
												<input type="text" name="kaca_ghor" id="kaca_ghor" class="form-control" placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="latrin_no" class="col-sm-3 control-label">পায়খানার সংখ্যা</label>
											<div class="col-sm-3">
												<input type="text" name="latrin_no" id="latrin_no" class="form-control" placeholder=""  />
											</div>
											<label for="tap_no" class="col-sm-3 control-label">জলের টেপের সংখ্যা</label>
											<div class="col-sm-3">
												<input type="text" name="tap_no" id="tap_no" class="form-control"  placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="tubewel_no" class="col-sm-3 control-label">নলকূপের সংখ্যা</label>
											<div class="col-sm-3">
												<input type="text" name="tubewel_no" id="tubewel_no" class="form-control"  />
											</div>
											<label for="dokan_no" class="col-sm-3 control-label">দোকান ও কারখানার সংখ্যা</label>
											<div class="col-sm-3">
												<input type="text" name="dokan_no" id="dokan_no" class="form-control"  placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12" style="text-align:center;"> 
										<div class="app-heading"> 
											হোল্ডিং এ বসবাসকারী পরিবারের সংখ্যা
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="family_amount" class="col-sm-3 control-label">কতটি পরিবার বাস করে</label>
											<div class="col-sm-3">
												<input type="text" name="family_amount" id="family_amount" class="form-control"   />
											</div>
											<label for="condition" class="col-sm-3 control-label">কি শর্তে বাস করে</label>
											<div class="col-sm-3">
												<input type="text" name="condition" id="condition" class="form-control"   placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="monthly_rantrate" class="col-sm-3 control-label">মোট মাসিক ভাড়া</label>
											<div class="col-sm-3">
												<input type="text" name="monthly_rantrate" id="monthly_rantrate" class="form-control"   />
											</div>
											<label for="rant_lastdate" class="col-sm-3 control-label">ভাড়া আদায়ের শেষ তারিখ</label>
											<div class="col-sm-3">
												<input type="text" name="rant_lastdate" id="rant_lastdate" class="form-control"  placeholder=""/>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="applicant_other" class="col-sm-3 control-label">আবেদনকারী উল্লেখিত হোল্ডিং সম্পর্কে অন্যান্য বিষয়</label>
											<div class="col-sm-3">
												<input type="text" name="applicant_other" id="applicant_other" class="form-control"  />
											</div>
											<label for="gr_no_date" class="col-sm-3 control-label">সরকারী রাজস্ব বিভাগের খাজনা নতুন মালিকের নামে দেওয়া হইয়াছে কিনা।দেওয়া হইলে দাখিলের নম্বর ও তারিখ উল্লেখ করিতে হইবে</label>
											<div class="col-sm-3">
												<input type="text" name="gr_no_date" id="gr_no_date" class="form-control" placeholder=""/>
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
												<input type="text" name="mobile" id="mob" class="form-control" maxlength="11" placeholder="ইংরেজিতে প্রদান করুন"  onkeypress="return checkaccnumber(event);" required />
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
										<button type="submit" name="save" id="submit_button" class="btn btn-primary">জমা দিন</button>
									</div>
								</div>
							</form>
						</div><!-- panel-body-end---->
					</div><!--- end of panel primary- submit_button-->
				</div><!-- end of col-md-12---->
			</div><!-- row end--->
		</div><!-- left Content End-->

</div>
@endsection
</x-home-master> 