<?php

declare(strict_types=1);

namespace App\Controllers;

class About
{
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_URL => "https://deezerdevs-deezer.p.rapidapi.com/playlist/10313232162",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: deezerdevs-deezer.p.rapidapi.com",
                "X-RapidAPI-Key: 3346ad3692mshc9b8e6caac7e0e5p10778fjsn6309060981e4"
            ],
        ]);

        $deezer_response = curl_exec($curl);
        $deezer_response = json_decode($deezer_response);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $deezer_response = "cURL Error #:" . $err;
        }

        return [
            'view' => 'about.php',
            'css' => 'about.css',
            'js' => '',
            'data' => [
                'title' => 'About Me | eddyyxxyy',
                'deezer_response' => $deezer_response
            ],
        ];
    }
}
