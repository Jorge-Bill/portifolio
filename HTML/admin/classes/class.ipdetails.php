<?php

class ipdetails
{
	var $ip;
  	protected $api = "http://www.geoplugin.net/xml.gp?ip=";
	var $details;
	var $xml;
	var $curl;
	
	public function ipdetails($ipaddress)
	{
		$this->ip=$ipaddress;
		$this->curl=curl_init();
		curl_setopt($this->curl, CURLOPT_URL, $this->api.$this->ip);
		curl_setopt($this->curl, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
		return true;
	}
  
	public function scan()
	{
		$this->xml = curl_exec($this->curl);
		preg_match_all('/<([a-zA-Z0-9].*)>(.*)<\/([a-zA-Z0-9].*?)>\n/',$this->xml,$detail);
		$this->details=null;
		$this->details=array();
		for($i=0;$i<=count($detail[1])-1;$i++)
		{
			$this->details[trim($detail[1][$i])]=$detail[2][$i];
		}
		return true;
	}
	
	

	
	
	public function get_details_by_array(){
		return $this->details;
	}
    public function exportxml(){
		return $this->xml;
	}
	public function get_countrycode(){
		return $this->details['geoplugin_countryCode'];
	}
	public function get_code3(){
		return $this->details['Code3'];
	}
	public function get_country(){
		return $this->details['geoplugin_countryName'];
	}
	public function get_region(){
		return $this->details['geoplugin_region'];
	}
	public function get_city(){
		return $this->details['geoplugin_city'];
	}
	public function get_postalcode(){
		return $this->details['PostalCode'];
	}
	public function get_latitude(){
		return $this->details['geoplugin_latitude'];
	}

	public function get_longitude(){
		return $this->details['geoplugin_longitude'];
	}
	public function get_areacode(){
		return $this->details['geoplugin_areaCode'];
	}
	public function get_regioncode(){
		return $this->details['geoplugin_regionCode'];
	}      
	public function get_regionname(){
		return $this->details['geoplugin_regionName'];
	} 
  
    public function setip($ipaddress){
    	$this->ip=$ipaddress;
    	return true;
    }
    public function close()
    {
    	curl_close($this->curl);
    	return true;
    }
	
}