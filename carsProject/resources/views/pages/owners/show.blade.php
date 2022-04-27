@extends('master.main')

@section('content')

    @component('components.table_owners.oneOwner', [
                       'owner' =>$owner,
                   ])
    @endcomponent

@endsection
