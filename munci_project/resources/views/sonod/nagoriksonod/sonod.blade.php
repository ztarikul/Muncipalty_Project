
<script>
	window.onbeforeunload = function(){ return 'আপনি যদি পেজটি  Reload দেন তাহলে আপনাকে নতুন করে ডাটা এন্ট্রি দিতে হবে.';};
</script>
<!DOCTYPE HTML>
<html lang="en-US">
<head>

	<meta charset="UTF-8">
	<title> নাগরিক আবেদন পত্র</title>
	<link rel="stylesheet" type="text/css" href="certificate_css/citizen.css" media="all" />
	<link href="{{asset('certificate_css/cityzen.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body>
<div style="left:300px;top:5px;position:middle;background:#666;" align="center" id="bar">
		<a  target='_blank' href="">
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
						<p>চৌমুহনী  <br />
						
                        চৌমুহনী,&nbsp;নোয়াখালী-3850<br />
							ফোন :  ০০৮৮,&nbsp;০১৮						
                        </p>
						
												
					</div>
					<div id="top_right">
						<img src="" alt="image" />
					</div>
				</div>
			</div>
						<!-----------top area end--------------->
						
						
						<!-----------header area start--------------->
			<div class="header_area">
				<div class="fix structure header_section"> 
					<h2>  আবেদন  </h2>
					<span> আবেদনের তারিখ: <input type="text" name="" id="" readonly value="01/01/1970"/></span>
				</div>
			</div>
				<!-----------header area end--------------->
			
				<!-----------application area start--------------->
				
			<div class="app_area">
				<div class="fix structure app_section">
					<div id="app_section_left">
					
						<form>
							<p> ট্র্যাকিং আইডি নং - </p><span> <input type="text" name="id" id="" readonly value="{{$cityzens->id}}" /> </span>
						</form>
					</div>
					<div id="app_section_right" style="max-height:515px ! important">
						<table class="table1">
							<tr>
								<td colspan="1">&nbsp; নাম (বাংলা)</td>
								<td colspan="2" style="border-left:none;border-bottom:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->bname}}</td>
								<td  colspan="1" style="border-left:none;border-bottom:none;">&nbsp; নাম  (ইংরেজী)</td>
								<td colspan="2" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->ename}}</td>
							</tr>
							
							<tr>
														
								<td colspan="1">&nbsp;পিতার নাম</td>
								<td colspan="2" style="border-left:none;"><span>&nbsp;:&nbsp; </span>{{$cityzens->bfname}}</td>
							
							
								<td colspan="1" style="border-left:none;border-bottom:none;">&nbsp;মাতার নাম</td>
								<td colspan="2" style="border-left:none;border-bottom:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->bmname}}</td>
							</tr>

								<tr>
								<td>&nbsp;ধর্ম</td>
								<td style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->religion}}</td>
								<td style="border-left:none;">জন্মসনদ নং </td>
								<td style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->bcno}}</td>
								<td style="border-left:none;">হোল্ডিং  নং </td>
								<td style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->holding_no}}</td>
							</tr>
							<tr>
								<td>&nbsp;পেশা</td>
								<td style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->ocupt}}</td>
								<td style="border-left:none;">শিক্ষাগত যোগ্যতা</td>
								<td style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->qualification}}</td>
								<td style="border-left:none;">লিঙ্গ </td>
								
								<td style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->gender}}</td>
							</tr>
							<tr>
								<td>&nbsp;মোবাইল</td>
								<td style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->mob}}</td>
								<td style="border-left:none;">ই-মেইল</td>
								<td style="border-left:none;" colspan="3"><span>&nbsp;:&nbsp;</span>{{$cityzens->email}}</td>
								
							</tr>
							<tr>
								<td>&nbsp;বৈবাহিক অবস্থা </td>
								<td style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->mstatus}}</td>
								<td style="border-left:none;border-bottom:none;">পাসপোর্ট নং </td>
								<td style="border-left:none;border-bottom:none;"><span>&nbsp;:&nbsp;</span>{{$cityzens->pno}}</td>
							</tr>
							
							<tr style="height:100px;">
								<td valign="top" width="105px">&nbsp;বর্তমান ঠিকানা</td>
								<td colspan="5" style="border-left:none;">
									<p> 
										&nbsp;:&nbsp; পাড়া/মহল্লা  :{{$cityzens->pb_gram}} ,&nbsp;&nbsp;রোড/ব্লক/সেক্টর  :{{$cityzens->pb_rbs}} ,
										&nbsp;&nbsp;পোষ্ট অফিস :{{$cityzens->pb_postof}},&nbsp;&nbsp;ওয়ার্ড নং :{{$cityzens->pb_wordno}} ,
										&nbsp;&nbsp;থানা :{{$cityzens->pb_thana}} ,
										&nbsp;&nbsp;উপজেলা :{{$cityzens->pb_upazila}} ,
										&nbsp;&nbsp;জেলা  :{{$cityzens->pb_dis}} 									</p>
								</td>
							</tr>
							<tr style="height:100px;">
								<td valign="top" style="border-bottom:none;">&nbsp;স্থায়ী ঠিকানা</td>
								<td colspan="5" style="border-left:none; border-bottom:none;">
									<p> 
										&nbsp;:&nbsp; পাড়া/মহল্লা:{{$cityzens->perb_gram}} ,&nbsp;&nbsp;রোড/ব্লক/সেক্টর  :{{$cityzens->perb_rbs}} ,
										&nbsp;&nbsp;পোষ্ট অফিস :{{$cityzens->perb_postof}},&nbsp;&nbsp;ওয়ার্ড নং :{{$cityzens->perb_wordno}} ,
										&nbsp;&nbsp;থানা :{{$cityzens->perb_thana}} , 
										&nbsp;&nbsp;উপজেলা :{{$cityzens->perb_upazila}} ,
										&nbsp;&nbsp;জেলা  :{{$cityzens->perb_dis}} 					
                                    </p>
								</td>
							</tr>
							
						</table>
					</div>
				</div>
			</div>
		
				<!-----------application area end--------------->
			<div class="attach_area"> 
				<div class="fix structure attach_section"> 
					<table border='0' class="attach_table" width='95%' value="{{$cityzens->attachment_bn}}" height='40px' cellpadding='0' cellspacing='0' style="border-collapse:collapse;margin:0px auto;table-layout:fixed;"> 
						<tr valign='top'> 
							<td width='8%' style="font-size:18px;font-weight:700;font-style:normal;text-indent:20px;">সংযুক্তি</td>
							<td width='91%' style='font-size:16px;font-weight:normal;font-style:normal;text-indent:5px;'>:&nbsp;  </td>
						</tr>
					</table>
				</div>
			</div>	
				
				<!-----------instraction area start--------------->
			<div class="ins_area">
				<div class="fix structure ins_section">
					<div class="hr_style"> </div>
					<h2> নির্দেশনাবলী / Instruction  </h2>
					
										
					<ol style="padding-left:40px;list-style:none;">
						<li> ১) &nbsp; এলাকার গন্যমান্য ২ জন ব্যাক্তি এবং ওয়ার্ড কাউন্সিলর কর্তৃক  সত্যায়িত করে পৌরসভায় জমা ।</li>
						<li> ২) &nbsp;১ কপি পাসপোর্ট সাইজ ছবি,(সত্যায়িত)</li>
						<li>৩)&nbsp; আবেদন পত্রের অবস্থান জানার জন্য <font style="color:blue;">www.domain.com</font>  প্রবেশ করুন  এবং অবস্থাটি জানুন ।</li>
					</ol>
				</div>
			</div>
				<!-----------instraction area end--------------->
				
			<!-----------app_sign area start--------------->
			<div class="app_sign_area">
				<div class="fix structure app_sign_section">
					<div class="sign_app"> 
						<div class="sign_app_inner" style="width:180px;"> 
								আবেদনকারীর স্বাক্ষর
						</div>
					</div>
					<div class="app_sign_section_inner"> 
						<h2> সত্যায়ন / verification </h2>
					<table class="table3" cellspacing="0" cellpadding="0"> 
						<tr>
							<td colspan="3"></td>
							<td rowspan="4" style="height:140px;width:160px; border-top:1px solid black; border-left:1px solid black;">
								<br/>
								<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.savarmunicipality.gov.bd/index.php/home/ppreview?pcode=%2F&choe=UTF-8" style="height:120px;width:130px;">
							</td>
						</tr>
						<tr style="height:30px;">
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td><input type="text" name="first_person" disabled></td>
							<td><input type="text" name="second_person" disabled></td>
							<td><input type="text" name="third_person" disabled></td>
						</tr>
						
						<tr>
							<td style="border-bottom:1px solid black;">স্বাক্ষর <br />ওয়ার্ড কাউন্সিলর </td>
							<td style="border-bottom:1px solid black;">স্বাক্ষর <br />গন্যমান্য ব্যাক্তি</td>
							<td style="border-bottom:1px solid black;">স্বাক্ষর <br />গন্যমান্য ব্যাক্তি</td>
						</tr>
							
					</table>
					</div>
					
					
				</div>
			</div>
			<!-----------app_sign area end--------------->
			
			
			<!------------------ footer area start-------------------->
			<div class="footer_area">
				<div class="fix structure footer_section">
					<div id="footer_section_left">
						<p> www.domain.gov.bd<br />
						
							E-mail:&nbsp;&nbsp;@							
						</p>
						
					</div>
					<div id="footer_section_right">
						<p> Develop By: Spandan IT<br />
							www.spandanit.com
						</p>
					</div>
				</div>
			</div>
			<!------------------ footer area end-------------------->
			
		</div>
	</div>
		
</body>
</html>
