# Bridging BPJS Vclaim, APlicare & Pcare for Laravel
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Installation
```sh
composer require fikrizabintang/bpjs
```
## Use Vclaim
```env
public function vclaimConfig()
{
  $setting            = $this->bpjs;
  return [
      'cons_id'       => $setting->cons_id,
      'secret_key'    => $setting->cons_key,
      'base_url'      => 'https://new-api.bpjs-kesehatan.go.id:8080',
      'service_name'  => 'new-vclaim-rest'
  ];
}
```

## Use Get Peserta
```env
public function peserta(){
  return new Peserta($this->vclaimConf());
}

public function getByNoKartu($noKartu)
{
    return $this->peserta()->getByNoKartu($noKartu, Carbon::now()->format('Y-m-d'););
}
```
## Update Fitur
```sh
1 Mei 2021 
Pembuatan Rencana Kontrol
```

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Fitur
```sh
Aplicare
* Ketersediaan Kamar

V-Claim
* Referensi
* Peserta
* SEP
* Rujukan
* Lembar Pengajuan Klaim
* Monitoring
* Rencana Kontrol
```
