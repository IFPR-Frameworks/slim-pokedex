
<form action="/" method="get">
    <input type="text" name="nome_pokemon">
    <input type="submit">
</form>


<!-- POKEMON -->
<h1><?= $pokemon['forms'][0]['name'] ?></h1>

<img src="<?= $pokemon['sprites']['other']['dream_world']['front_default'] ?>" alt="">
