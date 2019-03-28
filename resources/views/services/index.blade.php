@extends("Admin.master")
@section('content')
   <h1 class="text-center text-info text-monospace">All Services</h1>
    <table class="table table-bordered mt-5 table-hover text-center table-dark">
        <th>Title</th>
        <th>Type</th>
        <th>Link</th>
        <th>Client_ID</th>
        <th>Description</th>
        <th>Actions</th>
        {{--<th>Social Media</th>--}}
        @foreach($services as $service)
            <tr>
                <td class="mt-3">
                    {{$service->Title}}
                </td>
                <td class=" mt-3"> {{$service->Type}}</td>
                <td class=" mt-3"> {{$service->Link}}</td>
                <td class=" mt-3"> {{$service->Client_id}}</td>
                <td class=" mt-3">{{$service->Description}}</td>
                <td>
                    <a href="/deleteservice/{{$service->id}}" class="btn btn-danger  mt-3">Delete</a>
                    <a href="/editservice/{{$service->id}}" class="btn btn-info  mt-3">Edit</a>
                </td>
                {{--<td>--}}
                    {{--<label class="text-primary">Facebook</label> <input type="checkbox" name="face" class="bg"><br>--}}
                    {{--<label class="text-info">Twitter</label> &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="twitt"><br>--}}
                    {{--<label class="text-danger">Instagram</label>&nbsp;<input type="checkbox" name="insta"><br>--}}
                {{--</td>--}}
            </tr>
        @endforeach
    </table>
@endsection