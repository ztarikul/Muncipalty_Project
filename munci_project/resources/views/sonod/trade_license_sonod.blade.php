
<script>
	window.onbeforeunload = function(){ return 'আপনি যদি পেজটি  Reload দেন তাহলে আপনাকে নতুন করে ডাটা এন্ট্রি দিতে হবে.';};
</script>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<base href="http://www.savarmunicipality.gov.bd/"/>
	<meta charset="UTF-8">
	<title> Trade Application </title>
	<link rel="stylesheet" type="text/css" href="certificate_css/trade_application.css" media="all" />

<style type="text/css"> 
	body{
		font-family:tahoma, solaimanlipi;
		
	}
	#app_section_left p {
    font-size: 24px;
    font-weight: bold;
    left: -72px;
    position: relative;
    top: 300px;
    transform: rotate(-90deg);
    width: 220px;
}
</style>
</head>
<body style="">

<div style="left:300px;margin-top:10px;position:middle;background:#666;" align="center" id="bar">
			<a href="" style="margin-right:50px;" title="Back Home Page">
			<img src="http://www.savarmunicipality.gov.bd/img/home.png">
		</a>
		<a  target='_blank' href="javaScript:window.print();" title="Print">
		<img src="http://www.savarmunicipality.gov.bd/library/print.png"/>
	</a>
</div>
<br/>
	<div class="full"> 
			<div id="wrapper" >
						<!-----------top area start--------------->
			<div class="top_area" >
				<div class="fix structure top_section">
					<div id="top_left">
						<img src="{{asset('logo_images/logo.jpeg')}}" alt="logo" height="130px" width="130px" />
					</div>
					<div id="top_mid">
						
						<h2>চৌমুহনী পৌরসভা</h2>
						<p>চৌমুহনী <br/>
						
												
						চৌমুহনী,&nbsp;নোয়াখালী-3850<br/>
							ফোন :  ০০৮৮,&nbsp;০১৮						</p>
											</div>
					<div id="top_right">
						<img src="http://www.savarmunicipality.gov.bd/img/default/profile.png" alt="image" width='140' height='120' style="padding-top:10px"/>
					</div>
				</div>
			</div>
						<!-----------top area end--------------->
						
						
						<!-----------header area start--------------->
			<div class="header_area">
				<div class="fix structure header_section"> 
					<h2> ট্রেড লাইসেন্স এর আবেদন  </h2>
					<span> আবেদনের তারিখ: <input type="text" name="" id="" readonly value="{{date('d M Y',strtotime($trade_license->created_at))}}" /></span>
				</div>
			</div>
				<!-----------header area end--------------->
			
				<!-----------application area start--------------->
			
			<div class="app_area">
				<div class="fix structure app_section">
					<div id="app_section_left">
						<form>
							<p> ট্র্যাকিং আইডি নং - </p><span> <input type="text" name="tra_no" id="" value="{{$trade_license->id}}"/> </span>
						</form>
					</div>
					<div id="app_section_right">
						<table class="table1">
							<tr>
								<td>&nbsp;প্রতিষ্ঠানের নাম (বাংলা)</td>
								<td style="border-left:none;border-bottom:none;">&nbsp;:&nbsp;{{$trade_license->bcomname}}</td>
								<td>&nbsp;প্রতিষ্ঠানের নাম  (ইংরেজী)</td>
								<td style="border-left:none;">&nbsp;:&nbsp;{{$trade_license->ecomname}}</td>
							</tr>
							<tr>
								<td>&nbsp;মালিকের নাম (বাংলা)</td>

								<td style="border-left:none;">&nbsp;:&nbsp;@foreach($trade_license->owners as $owner) {{$owner->bwname}},  @endforeach</td>
								<td>&nbsp;মালিকের নাম (ইংরেজী)</td>
								<td style="border-left:none;">&nbsp;:&nbsp;@foreach($trade_license->owners as $owner) {{$owner->ewname}},  @endforeach</td>
							</tr>
							<tr>
								<td>&nbsp;মালিকের বর্তমান ঠিকানা</td>
								<td style="border-left:none;" colspan="3">&nbsp;:&nbsp;{{$trade_license->owner_preadd_bng}}</td>
							</tr>
							<tr>
								<td>&nbsp;মালিকের স্থায়ী ঠিকানা</td>
								<td style="border-left:none;" colspan="3">&nbsp;:&nbsp;{{$trade_license->owner_permadd_bng}}</td>
							</tr>
							
							<tr>
								<td>&nbsp;ভ্যাট  আয়কর</td>
								<td style="border-left:none;">&nbsp;:&nbsp;{{$trade_license->vatkor}}</td>
								<td>&nbsp;টি,আই,নং</td>
								<td style="border-left:none;">&nbsp;:&nbsp;{{$trade_license->tino}}</td>
							</tr>
							<tr>
								<td>&nbsp;সাইন বোর্ড দৈর্ঘ্য</td>
								<td style="border-left:none;">&nbsp;:&nbsp;{{$trade_license->sign_lenth}}</td>
								<td>&nbsp;সাইন বোর্ড প্রস্থ</td>
								<td style="border-left:none;">&nbsp;:&nbsp;{{$trade_license->sign_width}}</td>
							</tr>
							<tr>
								<td>&nbsp;সাধারন সাইনবোর্ড</td>
								<td style="border-left:none;">&nbsp;:&nbsp;{{$trade_license->normal_sign}}</td>
								<td>&nbsp;আলোক সজ্জিত সাইনবোর্ড</td>
								<td style="border-left:none;">&nbsp;:&nbsp;{{$trade_license->light_sign}}</td>
							</tr>
							<tr>
								<td>&nbsp;ব্যবসার ধরন</td>
								<td style="border-left:none;">&nbsp;:&nbsp;
								{{$trade_license->business_type}}								</td>
								<td>&nbsp;মালিকানার ধরন</td>
								<td style="border-left:none;">&nbsp;:&nbsp;
								{{$trade_license->ownertype}}							</td>
							</tr>
							<tr style="height:60px;">
								<td valign="top">&nbsp;ব্যবসার ঠিকানা</td>
								<td colspan="3" style="border-left:none;">
								<span> &nbsp;:&nbsp;
									গ্রাম/মহল্লা  :{{$trade_license->bb_gram}}	&nbspjhgf,&nbsp; &nbsp;রোড/ব্লক/সেক্টর  :{{$trade_license->bb_rbs}}	&nbsp;&nbsp;									&nbsp;&nbsp;পোষ্ট অফিস :&nbsp;gfd,&nbsp;&nbsp;ওয়ার্ড নং :&nbsp;3 
									&nbsp;&nbsp;থানা :{{$trade_license->bb_thana}}	&nbsp;fds,
									&nbsp;&nbsp;উপজেলা :{{$trade_license->bb_upazila}}	&nbsp;সাভার,
									&nbsp;&nbsp;জেলা :{{$trade_license->bb_dis}}	&nbsp;ঢাকা। 
									
								</span>
									<!-----------------
									<textarea name="business_add" id="" cols="60" rows="3" >
									</textarea> ----------->
								</td>
							</tr>
							<tr>
								<td>&nbsp;ওয়ার্ড নং</td>
								<td style="border-left:none;">&nbsp;:&nbsp;{{$trade_license->bb_wordno}}</td>
								<td style="border-left:none;">হোল্ডিং  নং</td>
								<td style="border-left:none;"><span>&nbsp;:&nbsp;{{$trade_license->holding_no}}</span></td>

								
							</tr>
							<tr>
								<td>&nbsp;জাতীয় পরিচয়/জন্ম নিবন্ধন নং </td>
								<td style="border-left:none;">&nbsp;:&nbsp;{{$trade_license->bcno}}</td>
								<td>&nbsp;মোবাইল</td>
								<td style="border-left:none;">&nbsp;:&nbsp;{{$trade_license->mob}}</td>
							</tr>

						</table>
					</div>
				</div>
			</div>
				
				
				<!-----------instraction area start--------------->
			<div class="ins_area">
				<div class="fix structure ins_section">
					<div class="ins_section_inner"> 
						<h2> নির্দেশনাবলী / Instruction  </h2>
						
												
						<ol style="padding-left:40px;list-style:none;">
							<li> ১) &nbsp;ট্রেড লাইসেন্স সংগ্রহের জন্য ২ কপি পাসপোর্ট সাইজ এর ছবি, ভাড়ার চুক্তিপত্র,ন্যাশনাল আইডি কার্ড এর ফটোকপি এবং একটি বিজনেস কার্ড নিয়ে &nbsp;স্বশরীরে উপস্থিত হতে হবে।		
							</li>
							<li> ২) &nbsp;লাইসেন্সটি সংগ্রহের সময় আবেদনপত্রটি সঙ্গে আনতে হবে।</li>
							<li>৩)&nbsp; আবেদনের অবস্থান জানার জন্য <font style="color:blue;">www.savarmunicipality.gov.bd/tatrack</font>  এ ট্র্যাকিং নম্বরটি বসাতে হবে।</li>
							<li>৪)&nbsp; আবেদন পত্রে যে কোন ধরনের সংশোধনের জন্য  পৌরসভায় যোগাযোগ করুন।</li>
						</ol>
					</div>
				</div>
			</div>
				<!-----------instraction area end--------------->
				
				<!-----------app_sign area start--------------->
			<div class="app_sign_area">
				<div class="fix structure app_sign_section">
					<div class="app_sign_section_inner"> 
						<h2>আবেদনকারীর স্বাক্ষর </h2>
						<table class="table3" cellspacing="0" cellpadding="0" style="border-collapse:collapse;margin:20px auto;table-layout:fixed;"> 
							<tr>
								<td></td>
								<td colspan="2"></td>
								<td rowspan="2" style="height:160px; width:160px; border-left:1px solid black;border-top:1px solid black;"><br />
									<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.savarmunicipality.gov.bd/index.php/home/tpreview?scode=532050%2F&choe=UTF-8" style="height:120px;width:130px;">
								</td>
								
							</tr>
							<tr style="height:55px;">
								<td style="border-bottom:1px solid black;"></td>
								<td style="border-bottom:1px solid black;"></td>
								<td style="border-bottom:1px solid black;"> <div id="name_sil" > <p style="padding-left:60px;"> স্বাক্ষর (সীলসহ) </p></div></td>
							</tr>	
						</table>
					</div>
					
					
				</div>
			
			<!-----------app_sign area end--------------->
			
			<!------------------ footer area start-------------------->
			<div class="footer_area">
				<div class="fix structure footer_section">
					<div id="footer_section_left">
						<p> https://www.spandanit.com/<br />
							E mail&nbsp;:&nbsp;@						</p>
					
					</div>
					<div id="footer_section_right" >
						<p style="font-size:10px;"> Develop By: Spanadan IT <br />
                        https://www.spandanit.com/
						</p>
					</div>
				</div>
			</div>
			<!------------------ footer area end-------------------->
			
		</div>
	</div>
		
</body>
</html>