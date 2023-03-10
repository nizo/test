<?php

define('VB_LP_COUNT_MAX',74);
define('PATH',dirname(__FILE__).'/');

class Counter {

	public $path = PATH;
	public $fileName = 'counter';
	public $page;
	protected $fileContent;
	protected $file;
	protected $allowedPagesRegex = '/^(VOICEBOT_DOI_SUCCESS)$/';
	public $count;
	public $currentPageEnum;
	public $uid;
	
	/**
	 * __construct
	 *
	 * @return void
	 */
	function __construct(Route $route = null) {

		$this->page = $route;
		$this->file = fopen($this->path.$this->fileName, "a");
		$this->fileContent = $this->file ? file_get_contents($this->path.$this->fileName) : '';
		
		if($route) {
			$this->currentPageEnum = $this->page->get_settings('page_enum') ?: false;
		}

		if($this->file) {
			$this->loadCount();
			$this->checkQualification();
			fclose($this->file);
		}
		
	}
	
	/**
	 * checkQualification
	 *
	 * @return void
	 */
	private function checkQualification():void {

		// create UID only depending on the referer when we are coming from the DOI process of sib
		// TODO extract

		$this->uid = array_key_exists('HTTP_REFERER', $_SERVER) && strpos($_SERVER['HTTP_REFERER'],'sibforms.com/serve/confirmation/subscription') > -1 ? md5($_SERVER['HTTP_REFERER']) : false;
		
	

		if(
			$this->currentPageEnum 
			&& preg_match($this->allowedPagesRegex, $this->currentPageEnum)
			&& $this->uid
			&& !preg_match('/'.$this->uid.'/',$this->fileContent)
		) {
			$this->increaseCount(1);
		}

		if(isset($_GET['90782350789245378904678567852343457657-decrease_counter'])) {
			$this->uid = md5(time());
			$this->increaseCount(1);
		}


		if(isset($_GET['90782350789245378904678567852343457657-reset_counter'])) {
			$this->resetCount();
		}

	}
		
	/**
	 * increaseCount
	 *
	 * @param  mixed $amount
	 * @return void
	 */
	private function increaseCount(int $amount = 1):void {	
			fwrite($this->file, $this->uid.PHP_EOL);
			$this->count = $this->count + $amount;
	}
	

	/**
	 * resetCount
	 *
	 * @return void
	 */
	private function resetCount():void {
		// fclose($this->file);
		unlink($this->path.$this->fileName);
		$this->count = $this->count = 0;
}

	/**
	 * loadCount
	 *
	 * @return void
	 */
	public function loadCount():void {
		$this->count = count(file($this->path.$this->fileName));
	}
	
	/**
	 * getCount
	 *
	 * @return int
	 */
	public function getCount():int {
		return $this->count;
	}
	
	/**
	 * getCountRemaining
	 *
	 * @return int
	 */
	public function getCountRemaining():int {
		$result = VB_LP_COUNT_MAX - $this->getCount();
		return $result < 1 ? 0 : $result;
	}
	
}