@extends("Admin.master")
@section('content')
    <div class="container">
        <h1 class="text-center display-4 mt-5 create-h1"> Add New Client </h1>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 col-11 mb-5 py-5" style="box-shadow: 4px 4px 20px #eee">
                            <span class="custom-fontawseome text-success"><i class="fas fa-dollar-sign mr-2"></i></span>
                          <form action="/clients" method="post" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <label> Enter Title:</label>
                              <input type="text" name="ctitle" class="form-control" required>
                              <label> Enter Description:</label>
                              <input type="text" name="cdescription" class="form-control" required>
                              <label>Enter Phone Number:</label>
                              <input type="text" name="cphone" class="form-control" required>
                              <label>Select Status:</label><br>
                              <select name="cstatus" class="form-control" required>
                                  <option>Active</option>
                                  <option>NotActive</option>
                              </select>
                              <label>Select Contract Start Date:</label>
                              <input type="date" name="cstart" class="form-control" required>
                              <label>Select Contract End Date:</label>
                              <input type="date" name="cend" class="form-control" required>
                              <button type="submit" class="btn btn-primary mt-3">Add</button>
                          </form>
            </div>
        </div>
    </div>
@endsection