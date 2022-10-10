<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class PokedexController extends Controller
{

    public function search(Request $request, $pokemon)
    {
        $open_ai = new OpenAi(config('openai.key'));

        $complete = $open_ai->complete([
            'engine' => 'text-davinci-002',
            'prompt' => "Give me the Pokedex entry for " . $pokemon,
            'temperature' => 0.9,
            'max_tokens' => 256,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
        ]);

        $response = json_decode($complete);
        return $response->choices[0]->text;
    }

}
