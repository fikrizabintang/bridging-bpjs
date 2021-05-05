<?php
namespace Fikrizabintang\Bpjs\VClaim;

use Fikrizabintang\Bpjs\BpjsWebService;

class RencanaKontrol extends BpjsWebService
{

    public function insertRK($data = [])
    {
        $response = $this->post('RencanaKontrol/insert', $data);
        return json_decode($response, true);
    }
    
    public function updateRK($data = [])
    {
        $response = $this->put('RencanaKontrol/Update', $data);
        return json_decode($response, true);
    }
    
    public function deleteRK($data = [])
    {
        $response = $this->delete('RencanaKontrol/Delete', $data);
        return json_decode($response, true);
    }

    public function cariSEP($keyword)
    {
        $response = $this->get('RencanaKontrol/nosep/'.$keyword);
        return json_decode($response, true);
    }

    public function cariRK($keyword)
    {
        $response = $this->get('RencanaKontrol/noSuratKontrol/'.$keyword);
        return json_decode($response, true);
    }

}
