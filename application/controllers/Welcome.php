<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('Curl');
		$url = 'https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,XLM,XRP,NXT,ARDR,ETH&tsyms=USD';
		$json = file_get_contents($url);
		$decode = json_decode($json);

		
		
		$link = 'https://horizon.stellar.org/order_book?selling_asset_type=native&buying_asset_type=credit_alphanum4&buying_asset_code=FRAS&buying_asset_issuer=GC75WHUIMU7LV6WURMCA5GGF2S5FWFOK7K5VLR2WGRKWKZQAJQEBM53M&limit=';
		$tes = file_get_contents($link);
		$d = json_decode($tes);
		/*$urli = $this->curl->get("https://horizon.stellar.org/order_book", ["selling_asset_type"=>"native", "buying_asset_type"=>"credit_alphanum4", "buying_asset_code"=>"FRAS", "buying_asset_issuer"=>"GC75WHUIMU7LV6WURMCA5GGF2S5FWFOK7K5VLR2WGRKWKZQAJQEBM53M", "limit"=>""]);
		$d = $this->response(json_decode($urli));


*/
		$name_link = 'https://horizon.stellar.org/assets?asset_type=credit_alphanum4&limit=200&order=asc'; 
		$dicoba = file_get_contents($name_link);
		$asset_code = json_decode($dicoba);


		$data = array(
			'asset_code' =>$asset_code->_embedded->records,
			'asset' => $tes,
			'FROMSYMBOL' => $decode->RAW->BTC->USD->{'FROMSYMBOL'},
			'PRICE' => $decode->DISPLAY->BTC->USD->{'PRICE'},
			'VOLUME24HOURTO' => $decode->DISPLAY->BTC->USD->{'VOLUME24HOURTO'},
			'SUPPLY' => $decode->DISPLAY->BTC->USD->{'SUPPLY'},
			'MKTCAP' => $decode->DISPLAY->BTC->USD->{'MKTCAP'},
			'CHANGEPCT24HOUR' => $decode->DISPLAY->BTC->USD->{'CHANGEPCT24HOUR'}
		);

		$this->load->view('json_decode', $data);
	}

	function kedua(){
		$name_link1 = 'https://horizon.stellar.org/assets?asset_type=credit_alphanum12&limit=200&order=asc'; 
		$dicoba1 = file_get_contents($name_link1);
		$asset_code1 = json_decode($dicoba1);


			$data = array(
			'asset_code' =>$asset_code1->_embedded->records,
		);

		$this->load->view('json_decode1', $data);
	}

}
