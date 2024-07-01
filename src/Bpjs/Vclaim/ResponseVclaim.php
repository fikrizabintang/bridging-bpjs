<?php

namespace Fikrizabintang\Bpjs\Vclaim;

use LZCompressor\LZString;
use Fikrizabintang\Bpjs\GenerateBpjs;

class ResponseVclaim
{
    public function responseVclaim($response, $key)
    {
        $result = json_decode($response, true);
		if ($result['metaData']['code'] == "200" && is_string($result['response'])) {
            return self::doMaping($result['metaData'], $result['response'], $key);
        }
        return $result;
    }

    public function doMaping($metaData, $response, $key)
    {
        $data = [
            "metaData" => $metaData,
            "response" => json_decode($this->decompressed(GenerateBpjs::stringDecrypt($key, $response)))
        ];
		return $data;
    }

    protected function decompressed($dataString)
    {
        return LZString::decompressFromEncodedURIComponent($dataString);
    }
}