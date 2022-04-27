<h1>Cars</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Brand</th>
        <th scope="col">Owner</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
        <tr>
            <td> {{$car->id}}</td>
            <td>{{$car->name}}</td>
            <td>{{$car->created_at}}</td>
            <td>{{$car->updated_at}}</td>
            <td>{{$car->brand->name}}</td>
            <td>{{$car->owner->name}}</td>
            <td>
                <a href="{{url('cars/'.$car->id)}}">Show </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
