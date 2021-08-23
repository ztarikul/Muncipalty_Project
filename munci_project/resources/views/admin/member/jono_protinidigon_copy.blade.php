<x-home-master>
@section('homecontent')




   <!-- end header --> <section class="gallery-section-area">
    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="section-title text-center border-h2">
                    <h2>জন  প্রতিনিধিগণ</h2>
                </div>
               <div class="last-updateds text-right">
                  
               </div>
           </div>
       </div>
    <div class="row">
			<div class="container">
					<div class="upimage col-md-3">
					
				  <img src="{{asset('storage/member/zaker hossen.jpg')}}" class="" height="160px" width="160px"/>
				   <h4>মোঃ জাকের হোসেন</h4>
				   <p>নির্বাহী প্রকৌশলী</p>
				   <p><a href="{{route('zaker_hossen.profileview')}}"  class="btn btn-warning btn-lg">বিস্তারিত</a></p>
			
					</div>
					<div class="upimage col-md-3">
				  <img src="{{asset('storage/member/nurul islam.jpg')}}" class="" height="160px" width="160px"/>
				   <h4>মোঃ নুরুল ইসলাম বাবুল</h4>
				   <p>কাউন্সিলর</p>
				   <p><a href="{{route('nurul_islam.profileview')}}"  class="btn btn-warning btn-lg">বিস্তারিত</a></p>
				 </div> 
								 <div class="upimage col-md-3">
				  <img src="{{asset('storage/member/takib uddin.jpg')}}" class="" height="160px" width="160px"/>
				   <h4>জনাব তাকিব উদ্দিন চৌধুরী</h4>
				   <p>প্যানেল মেয়র 2 , কাউন্সিলর-02নং ওয়ার্ড</p>
				   <p><a href="home/profileview?mid=45c48cce2e2d7fbdea1afc51c7c6ad26"  class="btn btn-warning btn-lg">বিস্তারিত</a></p>
				 </div> 
								 <div class="upimage col-md-3">
				  <img src="{{asset('storage/member/abdullah ador.jpg')}}" class="" height="160px" width="160px"/>
				   <h4>জনাব মোঃ আবদুল্লা আদর</h4>
				   <p>কাউন্সেলর-03</p>
				   <p><a href="{{route('abdullah_ador.profileview')}}"  class="btn btn-warning btn-lg">বিস্তারিত</a></p>

				 </div> 
      </div>					 
  </div>



  <div class="row">
			<div class="container">
         
					<div class="upimage col-md-3">
				  <img src="{{asset('storage/member/jahangir alom.jpg')}}" class="" height="160px" width="160px"/>
				   <h4>জনাব- মোঃ জাহাঙ্গীর আলম</h4>
				   <p>কাউন্সেলর- 04</p>
				   <p><a href="home/profileview?mid=6512bd43d9caa6e02c990b0a82652dca"  class="btn btn-warning btn-lg">বিস্তারিত</a></p>
				 </div> 
								 <div class="upimage col-md-3">
				  <img src="{{asset('storage/member/anwar hossen.jpg')}}" class="" height="160px" width="160px"/>
				   <h4>জনাব মোঃ আনোয়ার হোসেন</h4>
				   <p>কাউন্সেলর- 05</p>
				   <p><a href="home/profileview?mid=c20ad4d76fe97759aa27a0c99bff6710"  class="btn btn-warning btn-lg">বিস্তারিত</a></p>
				 </div> 
								 <div class="upimage col-md-3">
				  <img src="{{asset('storage/member/enayetullah.jpg')}}" class="" height="160px" width="160px"/>
				   <h4>জনাব মোঃ এনায়েত উল্যাহ চৌধুরী</h4>
				   <p>কাউন্সেলর- 06</p>
				   <p><a href="home/profileview?mid=c51ce410c124a10e0db5e4b97fc2af39"  class="btn btn-warning btn-lg">বিস্তারিত</a></p>
				 </div> 
								 <div class="upimage col-md-3">
				  <img src="{{asset('storage/member/kajol.jpg')}}" class="" height="160px" width="160px"/>
				   <h4>জনাব সাহাব উদ্দিন কাজল	</h4>
				   <p>প্যানেল মেয়র-1, কাউন্সেলর-07</p>
				   <p><a href="home/profileview?mid=aab3238922bcc25a6f606eb525ffdc56"  class="btn btn-warning btn-lg">বিস্তারিত</a></p>
				 </div> 
			</div>					 
  </div>
</section>

@endsection
</x-home-master>