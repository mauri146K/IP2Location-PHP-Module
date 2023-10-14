<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.viumi.com.ar/api/v2/orders',
  CURLOPT_CUSTOMREQUEST => 'POST',  
  CURLOPT_POSTFIELDS =>'{
    "data": {
        "attributes": {
            "items": [
                {
                    "id": 1,
                    "name": "Chicken roll",
                    "unitPrice": {
                        "currency": "032",
                        "amount": 574
                    },
                    "quantity": 1
                },
                {
                    "id": 3,
                    "name": "Porto cheese burger",
                    "unitPrice": {
                        "currency": "032",
                        "amount": 544
                    },
                    "quantity": 2
                }
            ]
        }
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/vnd.api+json',
    'Accept: application/vnd.api+json',
    'Authorization: Bearer [reemplazar_por_jwt]'
  ),
));

$response = curl_exec($curl);

$order = json_decode($response);

curl_close($curl);