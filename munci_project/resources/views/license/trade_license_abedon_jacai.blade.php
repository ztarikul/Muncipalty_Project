<x-home-master>
@section('homecontent')



       
   <!-- end header --><style type="text/css">
	.color-style input[type="text"]{
		color: black;
		font-weight: normal;
		font-size:14px;
		letter-spacing: 1px;
		opacity:1;
	}
</style> 
<script type="text/javascript"> 
	/*============ number test function start ===============*/
	function numtest(){
		return event.charCode >= 48 && event.charCode <= 57;
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
						<div class="panel-heading" style="font-weight: bold; font-size: 15px;background:#175e0a;text-align:center;">ট্রেড লাইসেন্স আবেদন যাচাই</div>
						<div class="panel-body all-input-form"  style="min-height:330px;">
							<form action="javascript:void(0)" method="post" enctype="multipart/form-data" class="form-horizontal">
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<div class="col-sm-7 col-sm-offset-2 color-style" style="margin-top:5px;">
												<input type="text" name="tid" id="tid" class="form-control" placeholder="আপনার ট্রেড লাইসেন্স  আবেদনের ট্র্যাকিং নম্বরটি  ইংরেজিতে প্রবেশ করুন"   onkeypress="return numtest();" />
											</div>
											<div class="col-sm-3" style="margin-top:5px;"> 
												<input type="Submit" value="খোঁজ করুন"  class="btn btn-success" name='perinfo' onclick="htmlData('index.php/show/searchNagorickInformation','tid='+tid.value)"/>
											</div>
										</div>
									</div>
								</div>
							</form>
								<!--- search result show div start ---------->
							 <span id='txtResult' class="hidden-xs visiable-sm visiable-md visiable-lg"></span>	
							 <span class="visiable-xs hidden-sm hidden-md hidden-lg">
								<p class="text-warning"> দুখিঃত!! এই ডিভাইসে আপনার আবেদনপত্র  দেখা যাবে না ।</p>
							 </span>	
								<!------ search result show end --------->
						</div>
					</div>
				</div>
			
			</div><!-- row end--->
		</div><!-- left Content End-->

       

</div>
@endsection
</x-home-master>