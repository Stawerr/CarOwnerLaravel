<h1>Owner</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Country</th>
        <th scope="col">Cars</th>
        <th scope="col">Birth Date</th>
        <th scope="col">Wallet</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <tr>
        <td> {{$owner->id}}</td>
        <td>{{$owner->name}}</td>
        <td>{{$owner->country->name}}</td>
        <td>
            @foreach($owner->cars as $car)
                <p>{{$car->registration}}</p>
            @endforeach
        </td>
        <td>{{$owner->birth_date}}</td>
        <td>{{$owner->wallet_money}}</td>
        <td>{{$owner->created_at}}</td>
        <td>{{$owner->updated_at}}</td>
    </tr>
    </tbody>
</table>
