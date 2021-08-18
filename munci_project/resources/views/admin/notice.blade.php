<x-admin-master>
    @section('admin_content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div><i class="icon ion-document">নোটিশ </i></div>
           <hr>
            <form action="{{route('admin.notice_form')}}" method="post" enctype="multipart/form-data">
            @csrf
           <div class="form-group">
            <label for="input-1">Image</label>
            <input type="file" name="file" class="form-control" id="input-1">
           </div>
           <div class="form-group">
            <label for="input-2">Notice Title</label>
            <input type="text" class="form-control" name="content" id="input-2">
           </div>
        
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Register</button>
          </div>
          </form>
    </div>
  </div>
</div> 

<!-- show_table -->
<?php

$row= 0;

?>

<div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Description</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      
                      <th scope="col">SL No.</th>
                      <th scope="col">Notice Title</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                
                  <tbody>
                  @foreach($notices as $notice)
                    <tr>
                      <th scope="row">{{$row++}}</th>
                      <td><a href="">{{$notice->content}}</a></td>

                      <td><a href="{{route('admin.notice_edit', $notice->id)}}" class="btn-upper btn btn-success btn-sm">Edit</a></td> 
                     
                  
                      <td><a href="{{route('admin.notice_delete', $notice->id)}}" class="btn-upper btn btn-danger btn-sm " onClick="return confirm('Do you want to delete your notice?')">Delete</a></td> 
                          
                          
                    </tr>

                    @endforeach
                     
                  </tbody>
                 
                </table>
 
              </div>
            </div>
          </div>
         

        </div>
       
        <span>
           {{$notices->links('pagination::bootstrap-4')}}
           </span>

  @endsection
</x-admin-master>