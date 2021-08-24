<x-home-master>
@section('homecontent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 12px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 15px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

<section class="gallery-section-area">
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
    <div class="row" >
			<div class="col-sm-3">
			
			<div class="card">
			<img src="{{asset('storage/member/zaker hossen.jpg')}}" alt="" height="150px" width="200px">
			<p>মোঃ জাকের হোসেন</p>
			<p class="title">নির্বাহী প্রকৌশলী</p>
			<p><i class="fa fa-phone"></i> +8801711703135</p>
			<div >
				 
				<p><i class="fa fa-envelope-square"></i>zhossain68@gmail.com</p> 
			</div>
			<p><a href="{{route('zaker_hossen.profileview')}}"><button class="btn btn-warning">বিস্তারিত</button></a></p>
			</div>
			</div>

			<div class="col-sm-3">
			
			<div class="card">
			<img src="{{asset('storage/member/nurul islam.jpg')}}" alt="" height="150px" width="200px">
			<p>মোঃ নুরুল ইসলাম বাবুল</p>
			<p class="title">কাউন্সিলর</p>
			<p><i class="fa fa-phone"></i> 01711-004686</p>
			<div >
				 
			<p><i class="fa fa-envelope-square"></i></p> 
			</div>
			<p><a href="{{route('nurul_islam.profileview')}}"><button class="btn btn-warning">বিস্তারিত</button></a></p>
			</div>
			</div>

			<div class="col-sm-3">
			
			<div class="card">
			<img src="{{asset('storage/member/takib uddin.jpg')}}" alt="" height="150px" width="200px">
			<p>জনাব তাকিব উদ্দিন চৌধুরী</p>
			<p class="title">প্যানেল মেয়র 2 , কাউন্সিলর-02নং ওয়ার্ড</p>
			<p><i class="fa fa-phone"></i>+8801815008271</p>
			<div >
				 
			<p><i class="fa fa-envelope-square"></i></p> 
			</div>
			<p><a href="{{route('takib_uddin.profileview')}}"><button class="btn btn-warning">বিস্তারিত</button></a></p>
			</div>
			</div>

			<div class="col-sm-3">
			
			<div class="card">
			<img src="{{asset('storage/member/abdullah ador.jpg')}}" alt="" height="150px" width="200px">
			<p>জনাব মোঃ আবদুল্লা আদর</p>
			<p class="title">কাউন্সেলর-03</p>
			<p><i class="fa fa-phone"></i>+8801943333493</p>
			<div >
			<p><i class="fa fa-envelope-square"></i></p>  
			</div>
			<p><a href="{{route('abdullah_ador.profileview')}}"><button class="btn btn-warning">বিস্তারিত</button></a></p>
			</div>
			</div>

			

			
  		</div>

		<div class="row">
			
		  <div class="col-sm-3">
			
			<div class="card">
			<img src="{{asset('storage/member/jahangir alom.jpg')}}" alt="John" height="150px" width="200px">
			<p>জনাব- মোঃ জাহাঙ্গীর আলম</p>
			<p class="title">কাউন্সেলর- 04</p>
			<p><i class="fa fa-phone"></i> +8801943333493</p>
			<div >
				 
			<p><i class="fa fa-envelope-square"></i>mdjahangiralam@gmail.com</p>  
			</div>
			<p><a href="{{route('jahangir_alom.profileview')}}"><button class="btn btn-warning">বিস্তারিত</button></a></p>
			</div>
			</div>

			<div class="col-sm-3">
			
			<div class="card">
			<img src="{{asset('storage/member/anwar hossen.jpg')}}" alt="John" height="150px" width="200px">
			<p>জনাব মোঃ আনোয়ার হোসেন</p>
			<p class="title">কাউন্সেলর- 05</p>
			<p><i class="fa fa-phone"></i>+8801712023842</p>
			<div >
				 
			<p><i class="fa fa-envelope-square"></i>anwar.hossain@gmail.com</p>  
			</div>
			<p><a href="{{route('anwar_hossen.profileview')}}"><button class="btn btn-warning">বিস্তারিত</button></a></p>
			</div>
			</div>
			<div class="col-sm-3">
			
			<div class="card">
			<img src="{{asset('storage/member/enayetullah.jpg')}}" alt="John" height="150px" width="200px">
			<p>জনাব মোঃ এনায়েত উল্যাহ চৌধুরী</p>
			<p class="title">কাউন্সেলর- 06</p>
			<p><i class="fa fa-phone"></i>+8801711078983</p>
			<div >
				 
			<p><i class="fa fa-envelope-square"></i>anayetullah@gmail.com</p> 
			</div>
			<p><a href="{{route('anayetullah.profileview')}}"><button class="btn btn-warning">বিস্তারিত</button></a></p>
			</div>
			</div>
			<div class="col-sm-3">
			
			<div class="card">
			<img src="{{asset('storage/member/kajol.jpg')}}" alt="John" height="150px" width="200px">
			<p>জনাব সাহাব উদ্দিন কাজল</p>
			<p class="title">প্যানেল মেয়র-1, কাউন্সেলর-07</p>
			<p><i class="fa fa-phone"></i>+8801759096070</p>
			<div >
				 
			<p><i class="fa fa-envelope-square"></i>sahabuddinkajal@gmail.com</p>
			</div>
			<p><a href="{{route('kajol.profileview')}}"><button class="btn btn-warning">বিস্তারিত</button></a></p>
			</div>
			</div>
			
			
		</div>




</section>

@endsection
</x-home-master>