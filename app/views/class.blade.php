@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-xs-12">
        <h1 class="page-header">5e Class: {{ $class->class_name }} Traits</h1>
        <div class="row">
	        {{ HTML::image('images/' . strtolower($class->class_name) . '.jpg', '', array('class' => 'col-xs-12 col-md-5 col-lg-4 img-responsive')) }}
	   		<p>{{ $class->class_description }}</p>
	   	</div>

	   	<div class="row">
	   		<hr>
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
</div>

@stop