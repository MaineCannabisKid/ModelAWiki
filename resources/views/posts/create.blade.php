@extends('main')

@section('title', 'Create Post')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
				
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', NULL, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('slug', 'Slug:', array('class' => 'form-spacing-top')) }}
				{{ Form::text('slug', NULL, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

				{{ Form::label('body', 'Post Body:', array('class' => 'form-spacing-top')) }}
				{{ Form::textarea('body', NULL, array('class' => 'form-control', 'required' => '')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block form-spacing-top')) }}

			{!! Form::close() !!}

		</div>
	</div>

@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection