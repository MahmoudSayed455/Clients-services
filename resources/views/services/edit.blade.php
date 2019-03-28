@extends("Admin.master")
@section('content')
    <div class="container">
        <h1 class="text-center display-4 mt-5 create-h1"> Edit Service Data </h1>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 col-11 mb-5 py-5" style="box-shadow: 4px 4px 20px #eee">
                <span class="custom-fontawseome text-success"><i class="fas fa-dollar-sign mr-2"></i></span>
                <form action="/serviceupdate/{{$service->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label> Enter Title:</label>
                    <input type="text" name="stitleup" class="form-control" value="{{$service->Title}}">
                    <label> Enter Description:</label>
                    <input type="text" name="sdescriptionup" class="form-control" value="{{$service->Description}}">
                    <label>Enter Type:</label>
                    <input type="text" name="stypeup" class="form-control" value="{{$service->Type}}">
                    <label>Enter Link:</label><br>
                    <input type="text" name="slinkup" class="form-control" value="{{$service->Link}}">
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection