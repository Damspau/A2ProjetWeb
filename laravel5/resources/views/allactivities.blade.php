@extends('default')

@section('head')

<link rel="stylesheet" href="css/activite.css">

<style>
	img {
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		max-width: 100%;
		max-height: 100%;
		margin: auto;
		overflow: auto;
	}
</style>

@endsection

@section('title')
CESI activite
@endsection

@section('nav')

<li><a href="{{ url('/home') }}">Home</a></li>
<li><a class="active" href="{{ url('/activities') }}">Activités</a></li>
<li><a href="{{ url('/shop') }}">Boutique</a></li>

@endsection

@section('section')

<p>
	<h1 style="text-align: center;"><u style="text-decoration-color:red;">Welcome to our activities : </u></h1>
</p>

</br>
</br>

<!-- Affichage des activities : -->

<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">

			@foreach($activities as $activite)
			<div class="card mb-4 shadow-sm mr-2">
				<!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
				<img src="{{ $activite->image }}" class="img" alt="img" width="250" height="150">
				<div class="card-body">
					<p class="card-text">{{ $activite->nomActivite }}</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a href="{{ url('/Activite/'.$activite->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary">Voir</button></a>
						</div>
						<button type="button" class="fas fa-heart">{{  }}</button>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
</div>
</div>

@endsection