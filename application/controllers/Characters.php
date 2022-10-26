<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Characters extends CI_Controller
{

    public function index()
    {

        $url = "https://www.breakingbadapi.com/api/characters/";
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        curl_close($curl);

        $data['chars'] = json_decode($response, true);
        if ($data) {
            $this->load->view('characters', $data);
        }
    }
}
