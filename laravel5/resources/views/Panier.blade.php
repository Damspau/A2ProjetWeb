@extends('default')

@section('title')
Article
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
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
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
<main>

 <style type="text/css">
.decor{
      display: block;
      float: left;
      width: 15%;
      background-color: lightgray;
}


input.bouton { background-color : rgb(102, 102, 255);  
               color : yellow; }

.table, .td, .th { border : 2px solid rgb(51, 0, 153); }
.table { width : 70%;
        margin: auto;
        border-collapse : collapse; 
        border-radius : 10px;
        box-shadow: 10px 10px 5px gray;   
 }
</style> 
 <nav>
         <p><a class="decor" href="Terminer"> Terminer la commande</a> </p>
    </nav>
	<section>
		        <table id="table">
          <thead> <tr> <th class="th"> Produit </th> <th class="th"> Prix </th> <th class="th"> </th> <th class="th"> </th> </tr> 
          </thead> 
          <tbody>
<!-- Commentaire : on aurait pu recuperer les produits de la BdD. -->
             <tr>
                 <td class="td"> <b> Produit </b> 
                 <br/> Description rapide du produit </td>
                 <td class="td">  € </td>
                 <td class="td"> 
                      <input type=submit value="+" />
                 </td>
                <td class="td"> 
                      <input type=submit value="-" />
                </td>
             </tr>
             
             <tr>
                 <td class="td"> <b> Produit </b> 
                 <br/> Description rapide du produit </td>
                 <td class="td">  € </td>
                 <td class="td"> 
                      <input type=submit value="+" />
                 </td>
                <td class="td"> 
                      <input type=submit value="-" />
                </td>
             </tr>
             
             <tr>
                 <td class="td"> <b> Produit </b> 
                 <br/> Description rapide du produit </td>
                 <td class="td">  € </td>
                 <td class="td"> 
                      <input type=submit value="+" />
                 </td>
                <td class="td"> 
                      <input type=submit value="-" />
                </td>
             </tr>
             
            <tr>
                 <td class="td"> <b> Produit </b> 
                 <br/> Description rapide du produit </td>
                 <td class="td">  € </td>
                 <td class="td"> 
                      <input type=submit value="+" />
                 </td>
                <td class="td"> 
                      <input type=submit value="-" />
                </td>
             </tr>
             
             <tr>
                 <td class="td"> <b> Produit </b> 
                 <br/> Description rapide du produit </td>
                 <td class="td">  € </td>
                 <td class="td"> 
                      <input type=submit value="+" />
                 </td>
                <td class="td"> 
                      <input type=submit value="-" />
                </td>
             </tr>
             
             <tr>
                 <td class="td"> <b> Produit </b> 
                 <br/> Description rapide du produit </td>
                 <td class="td">  € </td>
                 <td class="td"> 
                      <input type=submit value="+" />
                 </td>
                <td class="td"> 
                      <input type=submit value="-" />
                </td>
             </tr>
             
             <tr>
                 <td class="td"> <b> Produit </b> 
                 <br/> Description rapide du produit </td>
                 <td class="td">  € </td>
                 <td class="td"> 
                      <input type=submit value="+" />
                 </td>
                <td class="td"> 
                      <input type=submit value="-" />
                </td>
             </tr>
             
             <tr>
                 <td class="td"> <b> Produit </b> 
                 <br/> Description rapide du produit </td>
                 <td class="td">  € </td>
                 <td class="td"> 
                      <input type=submit value="+" />
                 </td>
                <td class="td"> 
                      <input type=submit value="-" />
                </td>
             </tr>
             
            <tr>
                 <td class="td"> <b> Produit </b> 
                 <br/> Description rapide du produit </td>
                 <td class="td">  € </td>
                 <td class="td"> 
                      <input type=submit value="+" />
                 </td>
                <td class="td"> 
                      <input type=submit value="-" />
                </td>
             </tr>
             
             <tr>
                 <td class="td"> <b> Produit </b> 
                 <br/> Description rapide du produit </td>
                 <td class="td">  € </td>
                 <td class="td"> 
                      <input type=submit value="+" />
                 </td>
                <td class="td"> 
                      <input type=submit value="-" />
                </td>
             </tr>
             
             
          </tbody>
        </table>
      
	</section>

	<div>
		<aside>

			
		</aside>
	</div>
	<script>
		
	</script>
</main>

@endsection






