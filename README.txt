I converted this CodeIgniter plugin to a CakePHP plugin. This is my first time creating releasing something
for CakePHP. Here's how you use it!

== SUPPORTED VERSIONS ==
CakePHP 2.X (tested on latest)
CakePHP 1.3 (Unsure)

== HOW TO USE ==
1. Extract this to your plugins directory.
2. Edit the Plugins/Twilio/Config/twilio.php with your details.
3. (CakePHP 2.X) Load the plugin by going to app/Config/bootstrap.php and adding the following line to the end of your file:

    CakePlugin::load(array('Twilio'));

4. Include the following line wherever you plan on using the plugin.   

    public $components = array('Twilio.Twilio');

5. To send an SMS, execute the following: 

    $response = $this->Twilio->sms($from, $to, $message);
    if($response->IsError)
			echo 'Error: ' . $response->ErrorMessage;
    else
			echo 'Sent message to ' . $to;