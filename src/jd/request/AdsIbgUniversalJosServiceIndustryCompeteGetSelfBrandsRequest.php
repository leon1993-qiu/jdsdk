<?php
class AdsIbgUniversalJosServiceIndustryCompeteGetSelfBrandsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.UniversalJosService.industry.compete.getSelfBrands";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                    	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                   			private $tenantCode;
    	                        
	public function setTenantCode($tenantCode){
		$this->tenantCode = $tenantCode;
         $this->apiParas["tenantCode"] = $tenantCode;
	}

	public function getTenantCode(){
	  return $this->tenantCode;
	}

                        	                        	                        	                        	                        	                        	                   			private $cid3;
    	                        
	public function setCid3($cid3){
		$this->cid3 = $cid3;
         $this->apiParas["cid3"] = $cid3;
	}

	public function getCid3(){
	  return $this->cid3;
	}

                        	                        	}





        
 
