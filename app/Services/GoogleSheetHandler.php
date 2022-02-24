<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleSheetHandler
{
    private $data = [];
    private const RPL_URL = "https://script.google.com/macros/s/AKfycbzgCGmc0hJqrWT7BoSeiYJTP62da98g5t3SYHjFnzaB6GB1Jg_k4SqJhViIjxjS0plM2Q/exec";

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function saveRPL()
    {
        $res = Http::post(self::RPL_URL, $this->data);

        if ($res->getStatusCode() != 200) {
            throw new \Exception("Error saving RPL. Response code was: " . $res->getStatusCode()
                . ". Response: " . $res->getBody());
        }

        return $res->body();
    }
}
