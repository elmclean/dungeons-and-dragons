@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">Edit 5e Spell</h1>
	
	@if(Session::has('message'))
        <div class="alert alert-dismissible alert-success text-center">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-dismissible alert-warning text-center">
            <p>{{ Session::get('error') }}</p>
        </div>
    @endif

	{{ Form::open(array('route' => array('spell.update', $spell->spell_id))) }}
		<div class="row">
			<div class="form-group col-xs-8">
				{{ Form::label('nameLabel','Spell Name:') }}
				{{ Form::text('nameText', $spell->spell_name, array('class' => 'form-control', 'id' => 'nameText', 'required' => 'required')) }}
			</div>
		</div>

		<div class="row">
			<div class="form-group col-xs-5">
				{{ Form::label('levelLabel','Spell Level:') }}
				<select class="form-control" id="level" name="level" required>
					@foreach($levels as $level)
						@if($level == $spell->spell_level)
							<option value="{{ $level }}" selected>{{ $level }}</option>
						@else
							<option value="{{ $level }}">{{ $level }}</option>
						@endif
					@endforeach
				</select>
			</div>

			<div class="form-group col-xs-5">
				{{ Form::label('typeLabel','Spell Type:') }}
				<select class="form-control" id="type" name="type" required>
					@foreach($types as $type)
						@if($type == $typeName)
							<option value="{{ $type }}" selected>{{ $type }}</option>
						@else
							<option value="{{ $type }}">{{ $type }}</option>
						@endif
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('ritualLabel','Is this a Ritual Spell?') }}
			@if($ritual)
				<div class="radio-inline">
					<label><input type="radio" name="ritualOption" id="no" value="no"> No</label>
				</div>
				<div class="radio-inline">
					<label><input type="radio" name="ritualOption" id="no" value="yes" checked>Yes</label>
				</div>
			@else
				<div class="radio-inline">
					<label><input type="radio" name="ritualOption" id="no" value="no" checked> No</label>
				</div>
				<div class="radio-inline">
					<label><input type="radio" name="ritualOption" id="no" value="yes">Yes</label>
				</div>
			@endif
		</div>

		<div class="row">
			<div class="form-group col-xs-8">
				{{ Form::label('castingLabel',' Spell Casting Time:') }}
				{{ Form::text('castingText', $spell->casting_time, array('class' => 'form-control', 'id' => 'castingText')) }}
			</div>
		</div>

		<div class="row">
			<div class="form-group col-xs-8">
				{{ Form::label('rangeLabel','Spell Range:') }}
				{{ Form::text('rangeText', $spell->spell_range, array('class' => 'form-control', 'id' => 'rangeText')) }}
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="form-group col-xs-10" id="classes">
				{{ Form::label('classLabel','Spell Classes:') }}
				<br>
				@foreach($classes as $class)
					@if(in_array($class->class_name, $spellClasses))
						<label class="checkbox-inline">
						 	<input type="checkbox" name="classCheck[]" id="{{ $class->class_name }}" value="{{ $class->class_name }}" checked> {{ $class->class_name }}
						</label>
					@else
						<label class="checkbox-inline">
						 	<input type="checkbox" name="classCheck[]" id="{{ $class->class_name }}" value="{{ $class->class_name }}"> {{ $class->class_name }}
						</label>
					@endif
				@endforeach
			</div>
		</div>

		<div class="form-group" id="components">
			{{ Form::label('componentsLabel','Spell Components:') }}
			<br>
			@foreach($components as $component)
				@if(in_array($component, $primaryComponents))
					<label class="checkbox-inline">
					 	<input type="checkbox" name="componentCheck[]" id="{{ $component }}" value="{{ $component }}" checked> {{ $component }}
					</label>
				@else
					<label class="checkbox-inline">
					 	<input type="checkbox" name="componentCheck[]" id="{{ $component }}" value="{{ $component }}"> {{ $component }}
					</label>
				@endif
			@endforeach
		</div>

		<hr>

		<div class="row">
			<div class="form-group col-xs-8">
				{{ Form::label('otherLabel','Other Components:') }}
				{{ Form::text('componentsText', $otherComponents, array('class' => 'form-control', 'id' => 'componentsText')) }}
			</div>
		</div>

		<div class="row">
			<div class="form-group col-xs-8">
				{{ Form::label('durationLabel','Spell Duration:') }}
				{{ Form::text('durationText', $spell->duration, array('class' => 'form-control', 'id' => 'durationText', 'required' => 'required')) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('descriptionLabel','Spell Description:') }}
			{{ Form::textarea('descriptionText', $spell->description, array('class' => 'form-control', 'id' => 'descriptionText', 'required' => 'required')) }}
		</div>

		<div class="form-group">
			{{ Form::label('higherLabel','Spell Effect at Higher Levels:') }}
			{{ Form::textarea('higherText', $spell->higher_levels, array('class' => 'form-control', 'id' => 'higherText')) }}
		</div>

		{{ Form::submit('Save Spell', array('class' => 'btn btn-outline btn-primary')) }}
		<a href="{{ URL::previous() }}" class="btn btn-danger" role="button">Cancel</a>

	{{ Form::close() }}
	<br>
</div>

@stop