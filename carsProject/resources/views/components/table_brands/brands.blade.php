<h1>Brands</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Brand</th>
    </tr>
    </thead>
    <tbody>
    @foreach($brands as $brand)
        <tr>
            <td> {{$brand->id}}</td>
            <td>{{$brand->created_at}}</td>
            <td>{{$brand->updated_at}}</td>
            <td>
                <a href="{{url('brands/'.$brand->id)}}">Show </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
