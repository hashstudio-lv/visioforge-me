<?php

namespace App\Domain\ExchangeRate\Services;

class ExchangeRateService
{
    function getExchangeRate($from, $to) {
        $from = strtoupper($from);
        $to = strtoupper($to);

        // Источник 1: exchangerate.host
        $url1 = "https://api.exchangerate.host/latest?base=$from&symbols=$to";
        $rate = $this->fetchRateFromApi($url1, function($data) use ($to) {
            return $data['rates'][$to] ?? null;
        });

        if ($rate !== null) {
            return $rate;
        }

        // Источник 2: frankfurter.app
        $url2 = "https://api.frankfurter.app/latest?from=$from&to=$to";
        $rate = $this->fetchRateFromApi($url2, function($data) use ($to) {
            return $data['rates'][$to] ?? null;
        });

        return $rate;
    }

    public function fetchRateFromApi($url, $extractFn) {
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 5,
        ]);
        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($response === false || $error) {
            return null;
        }

        $data = json_decode($response, true);
        return is_array($data) ? $extractFn($data) : null;
    }
}
