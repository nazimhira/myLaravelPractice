@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
    	@csrf
    	<div class="row">
	    	<div class="col-8 offset-2">
	    		<div><h2>Add New Post</h2></div>
	    		<div class="form-group row">
		        <label for="name" class="col-md-4">Post Caption</label>
						<input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>
			            @error('caption')
			            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
			            @enderror
	    		</div>

	    		<div class="row">
	    			<label for="image" class="col-md-4 col-form-label">Post Image</label>
	    			<input type="file" name="image" id="image" class="form-control-file">
	    			@error('image')
			        <strong style="color: #E24646">{{ $message }}</strong>
			        @enderror
	    		</div>


	    		<div class="row pt-md-2">
	    			<button class="btn btn-primary">Add New Post</button>
	    		</div>
	    	</div>
    	</div>
    </form>
</div>
@endsection
