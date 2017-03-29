<?php 

namespace R3k4\FreeSms4Us;
 
class FreeSms4Us
{


	protected $username;

	protected $password;

	public function __construct()
	{
		$this->username =  config('config.username');
		$this->password =  config('config.password');

	}


	public function kirimSms($no_hp, $pesan)
	{
		$username = $this->username;
		$password = $this->password;
		
        $client = new \GuzzleHttp\Client();
        // Send an asynchronous request.
        $request = new \GuzzleHttp\Psr7\Request('GET', 'http://www.freesms4us.com/kirimsms.php?user='.$username.'&pass='.$password.'&no='.$no_hp.'&isi='.$pesan);
        $promise = $client->sendAsync($request)->then(function ($response) {
            // echo 'I completed! ' . $response->getBody();
            // \Log::info('pesan_sms : '.$response->getBody());
        });
        $promise->wait();		
	}	



}