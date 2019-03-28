@extends("Admin.master")
@section('content')
    <div class="container">
        <h1 class="text-center display-4 mt-5 create-h1"> Add New Service </h1>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 col-11 mb-5 py-5" style="box-shadow: 4px 4px 20px #eee">
                <span class="custom-fontawseome text-success"><i class="fas fa-dollar-sign mr-2"></i></span>
                <form action="/addservice/{{$client->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label> Enter Title:</label>
                    <input type="text" name="stitle" class="form-control">
                    <label> Enter Description:</label>
                    <input type="text" name="sdescription" class="form-control">
                    <label> Enter Type:</label>
                    <input type="text" name="stype" class="form-control">
                    <label> Enter Link:</label>
                    <input type="text" name="slink" class="form-control">
                    <button type="submit" class="btn btn-primary mt-3">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection