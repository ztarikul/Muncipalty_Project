<x-admin-master>
@section('admin_content')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div><i class="icon ion-document">নোটিশ </i></div>
           <hr>
            <form action="{{route('admin.notice_update',$notice->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
           <img src="storage/notice/{{$notice->file}}" alt="" width=200 height= 200>
           
           </div>
           <div class="form-group">
            <label for="input-1">Image</label>
            <input type="file" name="file" class="form-control" id="input-1">
           </div>
           <div class="form-group">
            <label for="input-2">Notice Title</label>
            <input type="text" class="form-control" value="{{$notice->content}}" name="content" id="input-2">
           </div>
        
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Register</button>
          </div>
          </form>
    </div>
  </div>
</div> 










@endsection
</x-admin-master>