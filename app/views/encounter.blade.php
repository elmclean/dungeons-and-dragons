@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">5e Random Encounter Generator</h1>

	<div class="row form-inline">
		<div class="form-group">
			{{ Form::label('playerLabel','Players: ') }}
			<select class="form-control" id="totalOption" name="totalOption">			
				<option value="1" selected>1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
			</select>
		</div>

		<div class="form-group">
			{{ Form::label('levelLabel','X ') }}
			<select class="form-control" id="levelOption" name="levelOption" required>
				<option value="1" selected>Level 1</option>
				<option value="2">Level 2</option>
				<option value="3">Level 3</option>
				<option value="4">Level 4</option>
				<option value="5">Level 5</option>
				<option value="6">Level 6</option>
				<option value="7">Level 7</option>
				<option value="8">Level 8</option>
				<option value="9">Level 9</option>
				<option value="10">Level 10</option>
				<option value="11">Level 11</option>
				<option value="12">Level 12</option>
				<option value="13">Level 13</option>
			</select>
		</div>

		<div class="form-group">
			{{ Form::label('difficultyLabel','Difficulty: ') }}
			<select class="form-control" id="difficultyOption" name="difficultyOption" required>
				<option value="easy" selected>Easy</option>
				<option value="medium">Meduim</option>
				<option value="hard">Hard</option>
				<option value="deadly">Deadly</option>
			</select>
		</div>

		<div class="form-group">
			{{ Form::label('environmentLabel','Environment: ') }}
			<select class="form-control" id="environmentOption" name="environmentOption" required>
				<option value="arctic" selected>Arctic</option>
				<option value="coastal">Coastal</option>
				<option value="desert">Desert</option>
				<option value="forest">Forest</option>
				<option value="grassland">Grassland</option>
				<option value="hill">Hill</option>
				<option value="mountain">Mountain</option>
				<option value="swamp">Swamp</option>
				<option value="underdark">Underdark</option>
				<option value="underwater">Underwater</option>
				<option value="urban">Urban</option>
			</select>
		</div>

		<button type="submit" class="btn btn-primary">Generate!</button>
	</div>
</div>

@stop