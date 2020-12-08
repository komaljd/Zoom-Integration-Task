<?php

require_once 'config.php';

function get_meeting_list() {
    $client = new GuzzleHttp\Client(['base_uri' => 'https://api.zoom.us']);
 
    $db = new DB();
    $arr_token = $db->get_access_token();
    $accessToken = $arr_token->access_token;
    $meetingID = "86152601668";
 
    try {
        $response = $client->request('GET', "/v2/metrics/meetings/$meetingID/participants", [
            "headers" => [
                "Authorization" => "Bearer $accessToken"
            ],
        ]);
 
        $data = json_decode($response->getBody());
            
        echo $data;
 
    } catch(Exception $e) {
        if( 401 == $e->getCode() ) {
            $refresh_token = $db->get_refersh_token();
 
            $client = new GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
            $response = $client->request('POST', '/oauth/token', [
                "headers" => [
                    "Authorization" => "Basic ". base64_encode(CLIENT_ID.':'.CLIENT_SECRET)
                ],
                'form_params' => [
                    "grant_type" => "refresh_token",
                    "refresh_token" => $refresh_token
                ],
            ]);
            $db->update_access_token($response->getBody());
 
            get_meeting_list();
        } else {
            echo $e->getMessage();
        }
    }
}
 
get_meeting_list();