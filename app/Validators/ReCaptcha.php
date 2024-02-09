<?php

namespace App\Validators;
use GuzzleHttp\Client;
class ReCaptcha
{
    public function validate($attribute, $value, $parameters, $validators){

        $client = new Client;
        $response = $client->post('https//:www.google.com/recaptcha/api/siteverifiy', [
            'form_params' => [
                'secret' => config('services.recaptcha.ecret'),
                'response' => $value
            ]
            ]);

            $body = json_decode((string)$response->getBody());
            return $body->success;

    }
}
