@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-xs-12">
        <h1 class="page-header">5e Class: {{ $race->race_name }} Traits</h1>
        {{ HTML::image('images/' . strtolower($race->race_name) . '.jpg', '', array('class' => 'col-xs-12 col-md-5 col-lg-4 img-responsive')) }}
   
		<dl class="dl-horizontal col-xs-12 col-md-7 col-lg-8">
	        @foreach($race->getAttributes() as $attr => $value)
	        	@if($attr != 'id' && $attr != 'race_description')
	        		@if(!empty($value))
			        	<dt>{{ ucfirst(str_replace('_', ' ', $attr)) }}</dt>
			        	<dd>{{ $value }}</dd>
		        	@else
		        		<dt>{{ ucfirst(str_replace('_', ' ', $attr)) }}</dt>
		        		<dd>N/A</dd>
		        	@endif
	        	@endif
	        @endforeach
	    </dl>

	    <p>{{ $race->race_description }}</p>

	</div>
</div>

@stop