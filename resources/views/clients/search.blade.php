@extends("Admin.master")
@section('content')
    @if (isset($details))
    <h1 class="text-center text-monospace text-info">The Search Results For {{$query}} Are: </h1>
    <table class="table table-bordered mt-5 table-hover text-center table-dark">
        <th>Client ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Phone_Number</th>
        <th>Contract_Start_Date</th>
        <th>Contract_End_Date</th>
        <th>Actions</th>
        {{--<th>Social Media</th>--}}
        <th>Manage Services</th>
        @foreach($details as $client)
            <tr>
                <td class="mt-3">{{$client->id}}</td>
                <td class="mt-3">{{$client->Title}}</td>
                <td class=" mt-3">{{$client->Description}}</td>
                <td class=" mt-3"> {{$client->Status}}</td>
                <td class=" mt-3">{{$client->Phone_Number}}</td>
                <td class=" mt-3">{{$client->Contract_Start_Date}}</td>
                <td class=" mt-3">{{$client->Contract_End_Date}}</td>
                <td>
                    <a href="/deleteclient/{{$client->id}}" class="btn btn-danger  mt-3">Delete</a>
                    <a href="/editclient/{{$client->id}}" class="btn btn-info  mt-3">Edit</a>
                </td>
                {{--<td>--}}
                {{--<label class="text-primary">Facebook</label> <input type="checkbox" name="face" class="bg"><br>--}}
                {{--<label class="text-info">Twitter</label> &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="twitt"><br>--}}
                {{--<label class="text-danger">Instagram</label>&nbsp;<input type="checkbox" name="insta"><br>--}}
                {{--</td>--}}
                <td> <a href="/addservice/{{$client->id}}" class="btn btn-primary mt-3">Add Service</a></td>

            </tr>
        @endforeach
        @endif
    </table>
@endsection