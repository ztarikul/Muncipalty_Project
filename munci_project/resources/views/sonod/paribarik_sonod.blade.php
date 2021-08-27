
<script>
	window.onbeforeunload = function(){ return 'আপনি যদি পেজটি  Reload দেন তাহলে আপনাকে নতুন করে ডাটা এন্ট্রি দিতে হবে.';};
</script>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<base href='http://www.savarmunicipality.gov.bd/'/>
	<meta charset="UTF-8">
	<title> Family Application </title>
	<link rel="stylesheet" type="text/css" href="certificate_css/oarish_application.css" media="all" />
</head>
<body>
<div style="left:300px;margin-top:10px;position:middle;background:#666;" align="center" id="bar">
			<a href="" style="margin-right:50px;" title="Back Home Page">
			<img src="http://www.savarmunicipality.gov.bd/img/home.png">
		</a>
		<a  target='_blank' href="javaScript:window.print();" title="Print">
		<img src="http://www.savarmunicipality.gov.bd/library/print.png"/>
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
						<p>চৌমুহনী<br />
						
                        চৌমুহনী,&nbsp;নোয়াখালী-3850 <br />
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
					<h2> পারিবারিক সনদের আবেদন  </h2>
					<form action="" method="post">
						<table>
							<tr>
								<td>ট্র্যাকিং আইডি নং -</td>
								<td><input type="text" readonly name="tra_no" id="" value="{{$paribarik_sanad->id}}" /> </td>
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
							<td colspan=""><p>:{{$paribarik_sanad->bangla_applicant_name}} </p></td>
							<td>আবেদনকারী</td>
							<td colspan=""><p>:{{$paribarik_sanad->english_applicant_name}} </p></td>
						</tr>
						
						<tr>
						
							<td >আবেদনকারীর পিতা/স্বামী</td>
							<td colspan=""><p>:{{$paribarik_sanad->bangla_applicant_father_name}} </p></td>
							<td>আবেদনকারীর পিতা/স্বামী</td>
							<td colspan=""><p>:{{$paribarik_sanad->english_applicant_father_name}} </p></td>
						</tr>
						<tr>
							<td >মোবাইল</td>
							<td colspan=""><p>:{{$paribarik_sanad->mob}} </p></td>
							<td>ই-মেইল</td>
							<td colspan="" ><p>:{{$paribarik_sanad->email}} </p></td>
						</tr>
						<tr> 
							<td>ব্যক্তির নাম</td>
							<td colspan="" ><p>:{{$paribarik_sanad->bname}} </p></td>
							<td>ব্যক্তির নাম</td>
							<td colspan="" ><p>:{{$paribarik_sanad->ename}} </p></td>
						</tr>
												
												<tr>
							<td>পিতার নাম</td>
							<td colspan="" ><p>:{{$paribarik_sanad->bfname}}  </p></td>
							<td>পিতার নাম</td>
							<td colspan="" ><p>:{{$paribarik_sanad->efname}}  </p></td>
						</tr>
						<tr>
							<td>মাতার নাম</td>
							<td colspan=""><p>:{{$paribarik_sanad->bmane}} </p></td>
							<td>মাতার নাম</td>
							<td colspan=""><p>:{{$paribarik_sanad->emane}} </p></td>
						</tr>
						<tr>
							<td style="border-left:none;">হোল্ডিং  নং </td>
							<td colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$paribarik_sanad->holding_no}}</td>
							<td style="border-left:none;">পেশা</td>
							<td  colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$paribarik_sanad->ocupt}}</td>
						</tr>
						<tr>
							<td style="border-left:none;">বৈবাহিক সম্পর্ক </td>
							<td colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$paribarik_sanad->mstatus}}</td>
							<td style="border-left:none;">লিঙ্গ</td>
							<td colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$paribarik_sanad->gender}}</td>
							
						</tr>
						<tr>
							<td style="border-left:none;">ন্যাশনাল আইডি নং </td>
							<td colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$paribarik_sanad->nationid}}</td>
							<td style="border-left:none;">জন্ম নিবন্ধন নং</td>
							<td colspan="" style="border-left:none;"><span>&nbsp;:&nbsp;</span>{{$paribarik_sanad->bcno}}</td>
						</tr>
						<tr style="height:50px;">
							<td colspan=""valign="top">স্থায়ী ঠিকানা(বাংলা) </td>
							<td colspan="3">
								<p style="font-size:14px;">
									গ্রাম/মহল্লা :{{$paribarik_sanad->pb_gram}} &nbsp;,&nbsp;&nbsp;&nbsp;রোড/ব্লক/সেক্টর  :{{$paribarik_sanad->pb_rbs}} ,
									পোষ্ট অফিস :{{$paribarik_sanad->pb_postof}} &nbsp;,&nbsp;&nbsp;&nbsp;ওয়ার্ড নং : {{$paribarik_sanad->pb_wordno}},
									 থানা :{{$paribarik_sanad->pb_thana}} &nbsp;,
									   উপজেলা: {{$paribarik_sanad->pb_upazila}}&nbsp;,
									 জেলা : {{$paribarik_sanad->pb_dis}} &nbsp; ।
								</p>
							</td>
						</tr>
						<tr style="height:50px;">
							<td colspan="" valign="top">স্থায়ী ঠিকানা(ইংরেজী)</td>
							<td colspan="3">
								<p style="font-size:14px;">
									গ্রাম/মহল্লা :{{$paribarik_sanad->p_gram}} &nbsp;,&nbsp;&nbsp;&nbsp;রোড/ব্লক/সেক্টর  :{{$paribarik_sanad->p_rbs}} , 
									পোষ্ট অফিস :{{$paribarik_sanad->p_postof}} &nbsp;,&nbsp;&nbsp;&nbsp;ওয়ার্ড নং :{{$paribarik_sanad->p_wordno}} ,
									 থানা :{{$paribarik_sanad->p_thana}} &nbsp;,
									  উপজেলা:{{$paribarik_sanad->p_upazila}} &nbsp;,
									 জেলা : {{$paribarik_sanad->p_dis}} &nbsp; ।
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
					<h2> সদস্যদের তালিকা </h2>
					<table class="table1">
						<tr>
							<th style="width:5%;">নং</th>
							<th style="width:30%;">নাম</th>
							<th style="width:15%;">সম্পর্ক</th>
							<th style="width:10%;">বয়স</th>
							<th style="width:20%;">স্থায়ী ঠিকানা</th>
							<th style="width:20%;">বর্তমান ঠিকানা</th>
							
						</tr>
                        <?php
                            $row = 0;
                        ?>
                        @foreach($paribarik_sanad->paribarikmembers as $paribarikmember)					
						<tr>
                            
						 <td style="width:20%;"> {{++$row}}</td>
						 <td style="width:20%;"> {{$paribarikmember->w_name}}</td>
						 <td style="width:20%;"> {{$paribarikmember->w_realtion}}</td>
						 <td style="width:20%;"> {{$paribarikmember->w_age}}</td>
						 <td style="width:20%;"> {{$paribarikmember->per_address}}</td>
						 <td style="width:20%;"> {{$paribarikmember->pre_address}}</td>
                        
						 
						</tr>
                        @endforeach
                        <tr>
                        <td colspan='5' style="text-align:right;font-size: 12px; padding-right:100px;">মোট সদস্য সংখ্যা <span>&nbsp;&nbsp;</span>&nbsp;&nbsp;{{$paribarik_sanad->paribarikmembers()->count()}}জন</td>
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
						<li>৩)&nbsp; আবেদন পত্রের অবস্থান জানার জন্য  ট্র্যাকিং নম্বরটি <font style="color:blue;">www.savarmunicipality.gov.bd/fatrack</font>  এ প্রবেশ করান  এবং অবস্থাটি জানুন ।</li>
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
								<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.savarmunicipality.gov.bd/index.php/home/showFamilyInformation?scode=%2F&choe=UTF-8" style="height:120px;width:130px;">
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
		document.getElementById('total').innerHTML='০';
	</script>
			<!-----------verification area end--------------->
			
			<!------------------ footer area start-------------------->
			<div class="footer_area">
				<div id="footer_section">
					<div id="footer_section_left">
						<p>https://www.spandanit.com/<br />
							E-mail&nbsp;:&nbsp;@						</p>
					</div>
					<div id="footer_section_right">
						<p>Develop By: Spanadan IT <br />
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