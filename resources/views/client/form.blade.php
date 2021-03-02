@extends('layouts.client')
@section('title')MVP @endsection

@section('content')
<div class="heading">
	<p>To Submit your Application Fill the Form below</p>
</div>

<form action="/submit-application" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="">Full Name</label>
		<input type="text" name="full_name" placeholder="Full Name" />
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email" placeholder="Email" />
	</div>
	<div class="form-group">
		<label for="">Phone Number</label>
		<input type="tel" name="phone" placeholder="Phone Number" />
	</div>
	<div class="form-group">
		<label for="">Profile Picture</label>
		<input class="file" type="file" name="image" />
	</div>
	<div class="form-group">
		<label for="">Video</label>
		<input class="file" type="file" name="video" />
	</div>
	<div class="form-group">
		<label for=""
			>Link to Your Instagram, Facebook or Twitter Video,Google drive link
			for documents (#NRGeticMVPs)</label
		>
		<input type="url" name="link" placeholder="Link" />
		<p>You have to tag <span>@nrgradiokenya</span> on social media platforms</p>
	</div>

	<div class="terms">
		<input type="checkbox">
		<a href="https://grind.nrg.radio/terms">I agree to Terms and Conditions</a>
	</div>

	<div class="submit">
		<button type="submit" class="btn-submit">Submit</button>   
	</div>
</form>
@endsection
	
