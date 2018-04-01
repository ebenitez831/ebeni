<?php
    function getProducts($keywords) {
        // Replace whitespace so curl is happy
        $search = str_replace(' ', '%20', $keywords);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          //CURLOPT_URL => "http://api.walmartlabs.com/v1/search?apiKey=rvkpv8hhr8y28pnjgx4pd8fn='$search'",
          //CURLOPT_URL => "http://api.walmartlabs.com/v1/items/'$search'?format=json&apiKey=rvkpv8hhr8y28pnjgx4pd8fn",
          CURLOPT_URL =>"http://api.walmartlabs.com/v1/search?apiKey=rvkpv8hhr8y28pnjgx4pd8fn&query='$search'",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
          ),
        ));
        
        $jsonData = curl_exec($curl);
        $data = json_decode($jsonData, true);
        $items = $data['items'];
        
        return $items;
    }
?>