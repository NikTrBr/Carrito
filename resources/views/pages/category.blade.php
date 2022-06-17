@extends('layouts.frontend')

@section('content')

@auth()

<section class="container">

    <div class="card">
        <div class="card-body">
            
            <table-category :categories="{{$categories}}"> </table-category>
        </div>
   </div>

</section>
@endauth

@endsection
