@extends('master.main')

@section('content')

    @component('components.table_owners.owners', [
                       'owners' =>$owners,
                   ])
    @endcomponent

@endsection
