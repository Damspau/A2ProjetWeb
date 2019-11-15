
<div class="row">
@foreach ($activites as $activite)
    <p> {{ $activite->like }}</p>
@endforeach
</div>
<!-- 

$titre = DB::table('actives')->whereId(1)->pluck('nomActivite');
$description = DB::table('actives')->whereId(1)->pluck('descriptionActivite');
$like = DB::table('actives')->whereId(1)->pluck('likeActivite');
$img = DB::table('actives')->whereId(1)->pluck('url');
$date = DB::table('actives')->whereId(1)->pluck('dateActivite');
$localisation = DB::table('actives')->whereId(1)->pluck('localisation');
foreach ($activites as $activite){
   ".$activites->nomActivite."}
endforeach -->
