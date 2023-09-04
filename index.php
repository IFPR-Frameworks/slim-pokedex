<?php 

    require __DIR__ . "/vendor/autoload.php";

    use Slim\App;
    use Slim\Http\Request;
    use Slim\Http\Response;
    use Slim\Views\PhpRenderer;

    $app = new App();

    $app->get("/", function(Request $request, Response $response, $args){

        $poke_opcao = $request->getQueryParam('nome_pokemon', 'squirtle');

        $renderer = new PhpRenderer("templates/");

        $api = "https://pokeapi.co/api/v2/pokemon/$poke_opcao";

        $conteudo = file_get_contents($api);
        $data['pokemon'] = json_decode($conteudo, true);

        return $renderer->render($response, "pokedex.php", $data);

    });

    $app->run();