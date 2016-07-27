@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-xs-12">
        <h1 class="page-header">5e Class: {{ $class->class_name }} Traits</h1>
        <p>{{ $class->class_description }}</p>
   
		<dl class="dl-horizontal">
	        @foreach($class->getAttributes() as $attr => $value)
	        	@if($attr != 'class_id' && $attr != 'class_description')
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
	</div>
</div>

@stop