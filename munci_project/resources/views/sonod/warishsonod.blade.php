
<script>
	window.onbeforeunload = function(){ return 'আপনি যদি পেজটি  Reload দেন তাহলে আপনাকে নতুন করে ডাটা এন্ট্রি দিতে হবে.';};
</script>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<base href='http://www.savarmunicipality.gov.bd/'/>
	<meta charset="UTF-8">
	<title> Oarish Application </title>
	<link rel="stylesheet" type="text/css" href="certificate_css/oarish_application.css" media="all" />
</head>
<body>
<div style="left:300px;margin-top:10px;position:middle;background:#666;" align="center" id="bar">
			<a href="" style="margin-right:50px;" title="Back Home Page">
			<img src="http://www.savarmunicipality.gov.bd/img/home.png">
		</a>
		<a  target='_blank' href="javaScript:window.print();" title="Print">
		<img src=""/>
	</a>
</div>
<br />
	<div class="full"> 
		<div id="wrapper" >
		<!-----------top area start--------------->
			<div class="top_area">
				<div class="top_section">
					<div id="top_left">
						<img src="{{asset('logo_images/logo.jpeg')}}" alt="logo" height="130px" width="130px" />
						
					</div>
					<div id="top_mid">
						<h2>চৌমুহনী পৌরসভা</h2>
						<p>চৌমুহনী<br/>
						
							চৌমুহনী,&nbsp;নোয়াখালী-3850<br />
							ফোন : ০০৮৮,&nbsp;০১৮						</p>
											</div>
					<div id="top_right">
						
					</div>
				</div>
			</div>
						<!-----------top area end--------------->
						
						
						<!-----------header area start--------------->
			<div class="header_area">
				<div id="header_section"> 
					<h2>ওয়ারিশ সনদের আবেদন </h2>
					<form action="" method="post">
						<table>
							<tr>
								<td>ট্র্যাকিং আইডি নং -</td>
								<td><input type="text" readonly name="tra_no" id="" value="{{$oarish_sanad->id}}" /> </td>
							</tr>
						</table>
					</form>
				</div>
			</div>
				<!-----------header area end--------------->
			
				<!-----------application area start--------------->
			
			<div class="app_area">
				<div id="app_section">
					<table>
						<tr>
							<th colspan="2" style="font-weight:bold;">বাংলা</th>
							
							<th colspan="2" style="font-weight:bold;">ইংরেজী</th>
							
						</tr>
						<tr>
							<td >আবেদনকারী</td>
							<td colspan=""><p>:{{$oarish_sanad->bangla_applicant_name}}</p></td>
							<td>আবেদনকারী</td>
							<td colspan=""><p>:{{$oarish_sanad->english_applicant_name}}</p></td>
						</tr>
						
						<tr>
						
							<td >আবেদনকারীর পিতা</td>
							<td colspan=""><p>:{{$oarish_sanad->bangla_applicant_father_name}}</p></td>
							<td>আবেদনকারীর পিতা</td>
							<td colspan=""><p>:{{$oarish_sanad->english_applicant_father_name}}</p></td>
						</tr>
						<tr>
							<td >মোবাইল</td>
							<td colspan=""><p>:{{$oarish_sanad->mob}}</p></td>
							<td>ই-মেইল</td>
							<td colspan="" ><p>:{{$oarish_sanad->email}}</p></td>
						</tr>
						<tr> 
							<td>মৃত ব্যক্তির নাম</td>
							<td colspan="" ><p>:{{$oarish_sanad->bname}}</p></td>
							<td>মৃত ব্যক্তির নাম</td>
							<td colspan="" ><p>:{{$oarish_sanad->ename}}</p></td>
						</tr>
												
												<tr>
							<td>পিতার নাম</td>
							<td colspan="" ><p>:{{$oarish_sanad->bfname}}</p></td>
							<td>পিতার নাম</td>
							<td colspan="" ><p>:{{$oarish_sanad->efname}}</p></td>
						</tr>
						<tr>
							<td>মাতার নাম</td>
							<td colspan=""><p>:{{$oarish_sanad->bmane}}</p></td>
							<td>মাতার নাম</td>
							<td colspan=""><p>:{{$oarish_sanad->emname}}</p></td>
						</tr>
						<tr>
							<td style="border-left:none;">হোল্ডিং  নং </td>
							<td colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$oarish_sanad->holding_no}}</td>
							<td style="border-left:none;">পেশা</td>
							<td  colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$oarish_sanad->ocupt}}</td>
						</tr>
						<tr>
							
							<td style="border-left:none;">বৈবাহিক সম্পর্ক </td>
							<td colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$oarish_sanad->mstatus}}</td>
							<td style="border-left:none;">লিঙ্গ</td>
							<td colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$oarish_sanad->gender}}</td>
						</tr>
						<tr>
							<td style="border-left:none;">ন্যাশনাল আইডি নং </td>
							<td colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$oarish_sanad->nationid}}</td>
							<td style="border-left:none;">মৃত্যু নিবন্ধন নং</td>
							<td colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$oarish_sanad->bcno}}</td>
						</tr>
						<tr style="height:50px;">
							<td colspan=""valign="top">স্থায়ী ঠিকানা(বাংলা) </td>
							<td colspan="3">
								<p style="font-size:14px;">
									: গ্রাম/মহল্লা :{{$oarish_sanad->perb_gram}} &nbsp;,&nbsp;&nbsp;&nbsp;রোড/ব্লক/সেক্টর  :{{$oarish_sanad->perb_rbs}} 									পোষ্ট অফিস :{{$oarish_sanad->perb_postof}} &nbsp;,&nbsp;&nbsp;&nbsp;ওয়ার্ড নং : {{$oarish_sanad->perb_wordno}}									 থানা :{{$oarish_sanad->perb_thana}} &nbsp; 
									  উপজেলা :{{$oarish_sanad->perb_upazila}} &nbsp;									 জেলা :{{$oarish_sanad->perb_dis}}  &nbsp; 
								</p>
							</td>
						</tr>
						<tr style="height:50px;">
							<td colspan="" valign="top">স্থায়ী ঠিকানা(ইংরেজী)</td>
							<td colspan="3">
								<p style="font-size:14px;">
									: গ্রাম/মহল্লা :{{$oarish_sanad->per_gram}} &nbsp;,&nbsp;&nbsp;&nbsp;রোড/ব্লক/সেক্টর  : {{$oarish_sanad->per_rbs}} 
									পোষ্ট অফিস :{{$oarish_sanad->per_postof}} &nbsp;,&nbsp;&nbsp;&nbsp;ওয়ার্ড নং : {{$oarish_sanad->per_wordno}}									 থানা :{{$oarish_sanad->per_thana}} &nbsp;									 উপজেলা :{{$oarish_sanad->per_upazila}} &nbsp;									 জেলা :{{$oarish_sanad->per_dis}}  &nbsp; 
								</p>
							</td>
						</tr>
											</table>
				</div>
			</div>
				<!-----------application area end--------------->
				
				<!-----------table area start--------------->
			<div class="table_area">
				<div id="table_section">
					<h2> ওয়ারিশ গনের তালিকা </h2>
					<table class="table1">
						<tr>
							<th style="width:5%;font-size:14px;">ক্রঃ নং</th>
							<th style="width:20%;font-size:14px;">নাম</th>
							<th style="width:10%;font-size:14px;">সম্পর্ক</th>
							<th style="width:8%;font-size:14px;">বয়স</th>
							<th style="width:5%;font-size:14px;">ক্রঃ নং</th>
							<th style="width:20%;font-size:14px;">নাম</th>
							<th style="width:10%;font-size:14px;">সম্পর্ক</th>
							<th style="width:8%;font-size:14px;">বয়স</th>
							
						</tr>
						<?php
                           $row = 0;
						?>
						@foreach($oarish_sanad->oarishgon as $oarish )						
						<tr height=''>
							@if($row <= 10)
							<td style="text-align:center;font-size:13px;">{{++$row}}</td>
							<td id='wn1' style="text-align:left;text-indent:15px;font-size:14px;">{{$oarish->w_name}}</td>
							<td id='wrel1' style="text-align:left;text-indent:15px;font-size:14px;">{{$oarish->w_relation}}</td>
							<td id='wage1' style="text-align:left;text-indent:15px;font-size:14px;">{{$oarish->w_age}}</td>
							@else
							
							<td style="text-align:center;font-size:13px;">{{++$row}}</td>
							<td id='wn11' style="text-align:left;text-indent:15px;font-size:14px;">{{$oarish->w_name}}</td>
							<td id='wrel11' style="text-align:left;text-indent:15px;font-size:14px;">{{$oarish->w_relation}}</td>
							<td id='wage11' style="text-align:left;text-indent:15px;font-size:14px;">{{$oarish->w_age}}</td>
							@endif
						</tr>
						@endforeach
												
						
						
												
						<tr height="18px"> 
							
							<td colspan="8" style="text-align:right;font-size:12px; padding-right:60px;">উত্তরাধিকারীর সংখ্যা <span >&nbsp;&nbsp;</span>&nbsp; {{$oarish_sanad->oarishgon()->count() }}&nbsp;জন</td>

						</tr>
					</table>
				</div>
			</div>
				<!-----------table area end--------------->
				
				<!-----------instraction area start--------------->
			<div class="ins_area">
				<div id="ins_section">
					<div class="hr_style"></div>
					<h2> নির্দেশনাবলী / Instruction  </h2>
					
										
					<ol style="padding-left:50px;list-style:none;">
						<li> ১) &nbsp; এলাকার গন্যমান্য ২ জন ব্যাক্তি এবং ওয়ার্ড কাউন্সিলর কর্তৃক  সত্যায়িত করে পৌরসভায় জমা দিন।</li>
						<li> ২) &nbsp;১ কপি পাসপোর্ট সাইজ ছবি,(সত্যায়িত)</li>
						<li>৩)&nbsp; আবেদন পত্রের অবস্থান জানার জন্য  ট্র্যাকিং নম্বরটি <font style="color:blue;">www.savarmunicipality.gov.bd/watrack</font>  এ প্রবেশ করান  এবং অবস্থাটি জানুন ।</li>
					</ol>
				</div>
			</div>
				<!-----------instraction area end--------------->
				
				<!-----------verification area start--------------->
			<div class="veri_area">
				<div id="veri_section">
					<div class="hr_style"></div>
					<h2>সত্যায়ন / Verification</h2>
					<table class="table2"> 
						<tr>
							<td colspan="3"></td>
							<td rowspan="4" style="height:140px;width:160px; border-top:1px solid black; border-left:1px solid black;">
								<br/>
								<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.savarmunicipality.gov.bd/index.php/home/wpreview?id=" style="height:120px;width:130px;">
							</td>
						</tr>
						<tr>
							<td><input type="text" name="first_person" disabled></td>
							<td><input type="text" name="second_person" disabled></td>
							<td><input type="text" name="third_person" disabled></td>
						</tr>
						<tr>
							<td>স্বাক্ষর</td>
							<td>স্বাক্ষর</td>
							<td>স্বাক্ষর</td>
						</tr>
						<tr>
							<td style="border-bottom:1px solid black;">গন্যমান্য ব্যাক্তি</td>
							<td style="border-bottom:1px solid black;">গন্যমান্য ব্যাক্তি</td>
							<td style="border-bottom:1px solid black;">ওয়ার্ড কাউন্সিলর</td>
						</tr>
					</table>
					
				</div>
			</div>
	<script>
	document.getElementById('intotal').innerHTML='০';
	</script>
			<!-----------verification area end--------------->
			
			<!------------------ footer area start-------------------->
			<div class="footer_area">
				<div id="footer_section">
					<div id="footer_section_left">
						<p> www.savarmunicipality.gov.bd<br />
							E-mail&nbsp;:&nbsp;@						</p>
					</div>
					<div id="footer_section_right">
						<p> Develop By: Spandan IT <br />
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