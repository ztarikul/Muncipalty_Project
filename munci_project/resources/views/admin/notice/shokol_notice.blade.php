<x-home-master>
@section('homecontent')





   <!-- end header --><section class="all-notice-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-left border-h2">
                    <h2></h2>
                </div>
               <div class="last-updateds text-right">
                <span>
                : 07 
                July, 
                2021                 
               </span>
               </div>
            </div>
        </div>

            <?php

            $row= 0;

            ?>



        <div class="row">
            <div class="all-notice-here table-responsive">
                <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                      
                      <th scope="col">SL No.</th>
                      <th scope="col">Notice Title</th>
                      <th scope="col">Date</th>
                      <th scope="col">View</th>
                    </tr>
                  </thead>
                
                  <tbody>
                  @foreach($notices as $notice)
                    <tr>
                      <th scope="row">{{$row++}}</th>
                      <td><a href="">{{$notice->content}}</a></td>

                      <td><span class="label label-primary">{{date('d M Y',strtotime($notice->created_at))}}</span></td> 
                     
                  
                      <td><a href="" class="btn-upper btn btn-danger btn-sm ">View</a></td> 
                          
                          
                    </tr>

                    @endforeach
                     
                  </tbody> 



                </table>
                
           <span>
           {{$notices->links('pagination::bootstrap-4')}}
           </span>
            </div>

        </div>
    </div>

</section>
























@endsection
</x-home-master> 