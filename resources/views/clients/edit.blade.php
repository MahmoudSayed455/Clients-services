@extends("Admin.master")
@section('content')
    <div class="container">
        <h1 class="text-center display-4 mt-5 create-h1"> Edit Client Data </h1>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 col-11 mb-5 py-5" style="box-shadow: 4px 4px 20px #eee">
                <span class="custom-fontawseome text-success"><i class="fas fa-dollar-sign mr-2"></i></span>
                <form action="/clientupdate/{{$client->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label> Enter Title:</label>
                    <input type="text" name="titleup" class="form-control" value="{{$client->Title}}">
                    <label> Enter Description:</label>
                    <input type="text" name="descriptionup" class="form-control" value="{{$client->Description}}">
                    <label>Enter Phone Number:</label>
                    <input type="text" name="phoneup" class="form-control" value="{{$client->Phone_Number}}">
                    <label>Select Status:</label><br>
                    <select name="statusup" class="form-control" value="{{$client->Status}}">
                        <option>Active</option>
                        <option>NotActive</option>
                    </select>
                    <label>Select Contract Start Date:</label>
                    <input type="date" name="startup" class="form-control" value="{{$client->Contract_Start_Date}}">
                    <label>Select Contract End Date:</label>
                    <input type="date" name="endup" class="form-control" value="{{$client->Contract_End_Date}}">
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection