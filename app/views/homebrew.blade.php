@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">Submit 5e D&D Homebrew</h1>
	<div class="alert alert-info" role="alert">Homebrew refers to  any of a number of creations or modifications by an individual or group on an amature level at home.</div>

	<h3>Homebrew Spell</h3>

	{{ Form::open(array('route' => ['spell.store'])) }}
		<div class="form-group">
			{{ Form::label('nameLabel','Spell Name:') }}
			{{ Form::text('nameText', '', array('class' => 'form-control', 'id' => 'nameText', 'required' => 'required')) }}
		</div>

		<div class="form-group">
			{{ Form::label('levelLabel','Spell Level:') }}
			<select class="form-control" id="level" name="level" required>
				@foreach($levels as $level)
					<option value="{{ $level }}">{{ $level }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			{{ Form::label('typeLabel','Spell Type:') }}
			<select class="form-control" id="type" name="type" required>
				@foreach($types as $type)
					<option value="{{ $type }}">{{ $type }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			{{ Form::label('ritualLable','Is this a Ritual Spell?') }}
			<div class="radio-inline">
			<label>
				<input type="radio" name="ritualOption" id="no" value="no" checked>
				No
			</label>
			</div>
			<div class="radio-inline">
			  <label>
			    <input type="radio" name="ritualOption" id="no" value="yes">
			    Yes
			  </label>
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('classLabel','Spell Classes:') }}
			<br>
			@foreach($classes as $class)
				<label class="checkbox-inline">
				 	<input type="checkbox" id="{{ $class->class_name }}" value="{{ $class->class_name }}"> {{ $class->class_name }}
				</label>
			@endforeach
		</div>

		<div class="form-group" id="components">
			{{ Form::label('componentsLabel','Spell Components:') }}
			<br>
			@foreach($components as $component)
				<label class="checkbox-inline">
				 	<input type="checkbox" id="{{ $component }}" value="{{ $component }}"> {{ $component }}
				</label>
			@endforeach
		</div>

		<div class="form-group">
			{{ Form::label('otherLabel','Other Components:') }}
			{{ Form::text('componentsText', '', array('class' => 'form-control', 'id' => 'componentsText')) }}
		</div>

		<div class="form-group">
			{{ Form::label('durationLabel','Spell Duration:') }}
			{{ Form::text('durationText', '', array('class' => 'form-control', 'id' => 'durationText', 'required' => 'required')) }}
		</div>

		<div class="form-group">
			{{ Form::label('descriptionLabel','Spell Description:') }}
			{{ Form::textarea('descriptionText', '', array('class' => 'form-control', 'id' => 'descriptionText', 'required' => 'required')) }}
		</div>

		<div class="form-group">
			{{ Form::label('higherLabel','Spell Effect at Higher Levels:') }}
			{{ Form::textarea('higherText', '', array('class' => 'form-control', 'id' => 'higherText', 'required' => 'required')) }}
		</div>

		{{ Form::submit('Submit!', array('class' => 'btn btn-outline btn-primary')) }}

	{{ Form::close() }}
	<br>
</div>



<script type="text/javascript">

	$(document).ready(function() {
		var levels = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
		var types = ['Abjuration', 'Conjuration', 'Divination', 'Enchantment', 'Evocation', 'Illusion', 'Necromancy', 'Transmutation'];
		var components = ['V', 'S', 'M'];

		// levels.forEach(function(level) {
  //           $('#level').append($("<option value ='" + level + "'></option>")
  //           .text(level));
  //       });

  //       types.forEach(function(type) {
  //       	$('#type').append($("<option value ='" + type + "'></option>")
  //           .text(type));
  //       });

  //       components.forEach(function(component) {
  //       	$('#type').append($("<label class='checkbox-inline'></label>")
  //           .append("<input type='checkbox' id='".component."' value='".component."'>")
  //           .text(component);
  //       });

	});

</script>

@stop