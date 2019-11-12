@extends('default')

@section('title')
CESI Shop
@endsection

@section('header')

<nav class="navbar navbar-expand-lg navbar-light" >
	<a class="navbar-brand" href="#"><img class="w-25 p-10" src="https://arras.cesi.fr/wp-content/uploads/sites/9/2019/05/Cesi_Logo_INGENIEUR_RVB-HD-500x296.jpg"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link " href="#">Accueil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Activités</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link mr-2" href="#">Boutique <span class="sr-only">(current)</span></a>
			</li>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Connection/Inscription</a>
		</li>
	</ul>
	<form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2"name="recherche" type="search"list="recherche" placeholder="Search" aria-label="Search">

		<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
		<form onsubmit="return validateForm();" class="pure-form autocomplete" style="position: relative;">
			<datalist id="recherche">
				<a href=""><option>coucou </option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option> </option></a>
				<a href=""><option> </option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
			</datalist>
		</form>
	</form>
</div>
</nav>


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
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="6.jpg" class="card-img-top" alt="test">
						<div class="card-body">
              <p class="card-text">description</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"  >Voir</button>





                </div>
								<button type="button" class="fas fa-heart"  ></button>
                <small class="text-muted">description</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="6.jpg" class="card-img-top" alt="test">
						<div class="card-body">
              <p class="card-text">description</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"  >Voir</button>





                </div>
								<button type="button" class="fas fa-heart"  ></button>
                <small class="text-muted">description</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="6.jpg" class="card-img-top" alt="test">
						<div class="card-body">
              <p class="card-text">description</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"  >Voir</button>





                </div>
								<button type="button" class="fas fa-heart"  ></button>
                <small class="text-muted">description</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="6.jpg" class="card-img-top" alt="test">
						<div class="card-body">
              <p class="card-text">description</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"  >Voir</button>





                </div>
								<button type="button" class="fas fa-heart"  ></button>
                <small class="text-muted">description</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="6.jpg" class="card-img-top" alt="test">
						<div class="card-body">
              <p class="card-text">description</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"  >Voir</button>





                </div>
								<button type="button" class="fas fa-heart"  ></button>
                <small class="text-muted">description</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="6.jpg" class="card-img-top" alt="test">
						<div class="card-body">
              <p class="card-text">description</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"  >Voir</button>





                </div>
								<button type="button" class="fas fa-heart"  ></button>
                <small class="text-muted">description</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="6.jpg" class="card-img-top" alt="test">
						<div class="card-body">
              <p class="card-text">description</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"  >Voir</button>





                </div>
								<button type="button" class="fas fa-heart"  ></button>
                <small class="text-muted">description</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="6.jpg" class="card-img-top" alt="test">
						<div class="card-body">
              <p class="card-text">description</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"  >Voir</button>





                </div>
								<button type="button" class="fas fa-heart"  ></button>
                <small class="text-muted">description</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="6.jpg" class="card-img-top" alt="test">
						<div class="card-body">
              <p class="card-text">description</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"  >Voir</button>





                </div>
								<button type="button" class="fas fa-heart"  ></button>
                <small class="text-muted">description</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>



@endsection

@section('script')


@endsection
