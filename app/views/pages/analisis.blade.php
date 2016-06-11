@extends('layouts.default')

@section('content')
<div class="panel" style=" height: 1200px">
        		<iframe src="http://127.0.0.1:6988?{{Auth::user()->remember_token;}}" width= "100%" height="100%">

				</iframe>
</div>

@stop