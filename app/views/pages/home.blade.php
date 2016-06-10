@extends('layouts.default')

@section('content')

<div class="box text-center" id="tayo">
   @include('stats.statics')
   @include('stats.fido')
</div>

<div class="panel panel-default list-panel">
  <div class="panel-heading">
    <h3 class="panel-title text-left">
      
    </h3>

  </div>

  <div class="panel-body">
	@include('topics.partials.topics', ['column' => true])
  </div>

  <div class="panel-footer text-right">

  	<a href="#" style="visibility:hidden;">
  		{{ lang('&nbsp;') }}
  	</a>
  </div>
</div>

<div class="panel panel-default node-panel col-md-12">
<div class="panel-heading">
    <h3 class="panel-title text-center">{{ lang('FAST Categories') }}</h3>
  </div>
  <br>
<!-- Nodes Listing -->
@include('ads.ads')
</div>
@stop
