<?php 
	App::import('Vendor', 'Twilio.Twilio');
	class TwilioComponent extends Component{
	
	public function startup($controller) 
    { 
        $this->Twilio = new Twilio();
    } 

	function sms($from, $to, $message)
	{
		$response = $this->Twilio->sms($from, $to, $message);
		if($response->IsError)
			echo 'Error: ' . $response->ErrorMessage;
		else
			echo 'Sent message to ' . $to;
	}
}