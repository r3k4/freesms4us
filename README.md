# freesms4us

package untuk kirim sms menggunakan api dari freesms4us.com

## Instalasi


Download package dengan composer


 `composer require r3k4/freesms4us`

atau

 ` {
    "require": {
        "r3k4/freesms4us" : "dev-master"
    }
}
 `


Tambahkan service provider ke config/app.php

 `
'providers' => [
    ....
    R3k4\FreeSms4Us\FreeSms4UsServiceProvider::class,
]
`
Tambahkan juga aliasnya ke config/app.php

`
'aliases' => [
	....
	
	'Freesms4Us' => R3k4\FreeSms4Us\FreeSms4UsFacade::class,
]
`


Buat file FreeSms4UsConfig.php di folder config secara manual atau jalankan command artisan
 `
php artisan vendor:publish
`

Tambahkan kode berikut di file .env untuk konfigurasi API freesms4us 
`
FREESMS4US_USERNAME=my-username
FREESMS4US_PASSWORD=my-password
`



## Penggunaan

Kirim SMS
` 
$no_hp = "08500000XX";
$pesan = "Contoh Pesan"
$kirim_sms = Freesms4Us::kirimSms($no_hp, $pesan);
`