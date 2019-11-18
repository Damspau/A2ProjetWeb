@extends('default')

@section('title')
CESI Shop
@endsection

@section('header')


                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/activities') }}">Activités</a></li>
                <li><a href="{{ url('/shop') }}">Boutique</a></li>


@endsection

@section('section')


<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Les activitées au cesi :</h1>

    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
	@foreach($activite as $active2)
					<div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="{{ $active2->image }}" class="card-img-top" alt="test">
						<div class="card-body">
              <p class="card-text">{{ $active2->descriptionActivite }}</p>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="http://localhost/laravelProjet/A2ProjetWeb/laravel5/public/Activite/{{ $active2->id }}"">	<button type="button" class="btn btn-sm btn-outline-secondary"  >Voir</button></a>
                </div>
                <small class="text-muted">{{ $active2->dateActivite }}</small>
              </div>
            </div>
          </div>
				@endforeach
				</div>
      </div>
    </div>
  </div>
	<div class="card mb-4 shadow-sm mr-2">
		<!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

		<div class="card-body">

			<div class="d-flex justify-content-between align-items-center">
				<div class="btn-group">

				</div>
				<button type="button" class="fas fa-heart"></button>
			</div>
		</div>
	</div>
</main>



@endsection

@section('script')


@endsection
