<?php

namespace App\Controllers;

class Maps extends BaseController
{
    public function index()
    {
        $latitude     = $_POST['latitude'];
        $longitude    = $_POST['longitude'];
        if (!empty($latitude) && !empty($longitude)) {
            $gmap = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($latitude) . ',' . $longitude . '&sensor=false';
            // curl
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $gmap);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $response = curl_exec($ch);
            curl_close($ch);
            // end curl
            $data = json_decode($response);
            if ($response) {
                echo json_encode($data->results[0]->formatted_address);
            } else {
                echo json_encode(false);
            }
        }
    }

    // this function receive ajax request and return closest providers
    function closest_locations()
    {
        $location = json_decode(preg_replace('/\\\"/', "\"", $_POST['data']));
        $lan = $location->longitude;
        $lat = $location->latitude;
        $ServiceId = $location->ServiceId;
        $base = base_url();
        $providers = $this->services_model->get_closest_locations($lan, $lat, $ServiceId);
        $indexed_providers = array_map('array_values', $providers);
        // this loop will change retrieved results to add links in the info window for the provider
        $x = 0;
        foreach ($indexed_providers as $arrays => &$array) {
            foreach ($array as $key => &$value) {
                if ($key === 1) {
                    $pieces = explode(",", $value);
                    $value = "$pieces[1]<a href='$base$pieces[0]'>More..</a>";
                }

                $x++;
            }
        }
        echo json_encode($indexed_providers, JSON_UNESCAPED_UNICODE);
    }
}
