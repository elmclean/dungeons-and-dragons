@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-xs-12">
        <h1 class="page-header">5e Race: {{ $race->race_name }} Traits</h1>
        {{ HTML::image('images/' . strtolower($race->race_name) . '.jpg', '', array('class' => 'col-xs-12 col-md-5 col-lg-4 img-responsive')) }}
   
		<dl class="dl-horizontal col-xs-12 col-md-7 col-lg-8">
	        @foreach($race->getAttributes() as $attr => $value)
	        	@if($attr != 'race_id' && $attr != 'race_description')
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

@if(count($subraces) > 0)
<div class="row">
	<h3>{{ $race->race_name }} Subraces</h3>
	@foreach($subraces as $subrace)
		<hr>
		<dl class="dl-horizontal col-xs-12">
			<dt>Race name</dt>
			<dd>{{ $subrace->race_name }}</dd>
        	<dt>Ability score</dt>
        	<dd>{{ $subrace->ability_score }}</dd>
	    </dl>
		<p>{{ $subrace->race_description }}</p>
	@endforeach
</div>
@endif

@stop