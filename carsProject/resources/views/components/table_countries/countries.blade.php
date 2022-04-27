<h1>Coutries</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>

    </tr>
    </thead>
    <tbody>
    @foreach($countries as $country)
        <tr>
            <td> {{$country->id}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
            <td>
                <a href="{{url('countries/'.$country->id)}}">Show </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
