<?php


class Log

{
	private $filename;
	private $handle;

	public function __construct($prefix = 'log')
	{
		$this->filename = $prefix . "-" . date("Y-m-d") . ".log";
		$this->openHandle();
	}

	private function setFile($filename)
	{
		$this->filename = (string)$filename;
	}

	private function setHandle($handle)
	{
		$this->handle = $handle;
	}

	private function getFile()
	{
		return $this->filename;
	}

	private function openHandle()
	{
		if(touch($this->filename) && is_writable($this->filename))
		{
			$this->handle = fopen($this->filename, 'a');
		}
		else {
			echo "Can't write dis file";
		} 
	}


	public function logMessage($logLevel, $message)
	{	
		$myLog = date("Y-m-d") . " $logLevel $message";
		fwrite($this->handle, $myLog . PHP_EOL);
	}

	public function info($message) // mesg = ''
	{
		$this->logMessage('INFO', $message);
	}

	public function error($message)
	{
		$this->logMessage('ERRRRRR' , $message);
	}

	public function __destruct()
	{
		fclose($this->handle);

	}
}