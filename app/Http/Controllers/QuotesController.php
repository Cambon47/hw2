<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;



class QuotesController extends BaseController
{

    public function search_quotes($query)
    {


        $url = "https://api.quotable.io/search/quotes?query=" . $query;
        $curl = curl_init($url);


        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = (curl_exec($curl));
        curl_close($curl);
        $quotes = json_decode($result)->results;
        for ($i = 0; $i < min([count($quotes), 10]); $i++) {
            $quotes[$i] = [
                'quote' => $quotes[$i]->content,
                'author' => $quotes[$i]->author,

            ];
        }
        return $quotes;

    }

    public function search_gifs($search)
    {

        // Richiesta token
        $client_id = env('GIFY_CLIENT_ID');
        $client_secret = env('GIFY_CLIENT_SECRET');
        $curl = curl_init('https://api.gfycat.com/v1/oauth/token');
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $dati = array("grant_type" => "client_credentials", "client_id" => $client_id, "client_secret" => $client_secret);

        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($dati));
        $result = curl_exec($curl);
        curl_close($curl);
        $token = json_decode($result)->access_token;
        $data = http_build_query(
            array("search_text" => $search)
        );
        $curl = curl_init('https://api.gfycat.com/v1/gfycats/search?' . $data);

        $headers = array("Authorization: Bearer " . $token);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($curl);
        curl_close($curl);
        $gifs = json_decode($res)->gfycats;
        for ($i = 0; $i < min([count($gifs), 15]); $i++) {
            $gifs[$i] = ['img' => $gifs[$i]->content_urls->max1mbGif->url];

        }

        return $gifs;

    }
}
?>
