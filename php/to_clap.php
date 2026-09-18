<?php
class mail_common{
	private $to = "irimodi@gmail.com";
	public function send($sbj = "from mail form"){
		$header = "From:".$from;
		$header .= "\r\nContent-Type: text/plain; charset=\"ISO-2022-JP\"";
		$contents = $this->getRequest();
		$ret = @mail($this->to, $sbj, $contents, $header);
	}
	private function getRequest(){
		ob_start();
		var_dump($_REQUEST);
		var_dump("REMOTE_HOST=".$_ENV["REMOTE_HOST"]);
		$ret = ob_get_contents();
		return $ret;
	}
}
$mail = new mail_common();
$mail->send("from IRIDIGARDEN");

header("Location:/garden/thanks.html");
