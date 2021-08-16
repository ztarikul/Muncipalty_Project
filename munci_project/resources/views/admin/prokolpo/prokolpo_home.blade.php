<x-admin-master>
    @section('admin_content')

<div class="row mt-3">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

        <h4>প্রকল্প সমূহ</h4>
          <hr>
          <div class="row">
            <div class="col-lg-6 col-xl-3 icon">
              <a data-code="f3e9" data-name="group" href="javascript:void();"><i class="zmdi zmdi-group"></i> <span>চলমান</span></a>
            </div>
            <div class="col-lg-6 col-xl-3 icon">
              <a data-code="f3ea" data-name="rss" href="javascript:void();"><i class="zmdi zmdi-rss"></i> <span>প্রস্তাবিত</span></a>
            </div>
            <div class="col-lg-6 col-xl-3 icon" data-code="f3eb" data-name="shape">
              <a href="javascript:void();"><i class="zmdi zmdi-shape"></i> <span>সম্পন্ন</span></a>
            </div>
            
            
          </div><!--End Row-->


        
          <!-- <div class="row">
            <div class="icon col-sm-3" data-code="f34e" data-name="google">
              <a href="javascript:void();"><i class="zmdi zmdi-google"></i> <span>google</span></a>
            </div>
            <div class="icon col-sm-3" data-code="f34c" data-name="google-plus-box">
              <a href="javascript:void();"><i class="zmdi zmdi-google-plus-box"></i> <span>google-plus-box</span></a>
            </div>
            <div class="icon col-sm-3" data-code="f34d" data-name="google-plus">
              <a href="javascript:void();"><i class="zmdi zmdi-google-plus"></i> <span>google-plus</span></a>
            </div>
            <div class="icon col-sm-3" data-code="f357" data-name="paypal">
              <a href="javascript:void();"><i class="zmdi zmdi-paypal"></i> <span>paypal</span></a>
            </div>
          </div> -->
       

          
        </div>
      </div>
    </div>
  </div>
@endsection()  
</x-admin-master>