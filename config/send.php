<? include "core.php";

	// https://api.telegram.org/bot7168899932:AAEAN-qes0nqrip7T5Wb-SdtHyO2N-oQ-7Q/getUpdates

	$token 		= "7168899932:AAEAN-qes0nqrip7T5Wb-SdtHyO2N-oQ-7Q";
	$chat_id 	= "-1002115099030";
	
	if(isset($_GET['mess'])) {
		// $name  = strip_tags($_POST['name']);
		$phone = @strip_tags($_POST['phone']);
		// $phone = substr_replace($phone, '', 0, 1);
		// $phone = substr_replace($phone, '8', 0, 1);
		$txt = '';

		$arr = array(
			'Типі: '		=> 'Мастер класқа жазыламын',
			// 'Аты-жөні: '	=> $name,
			'Телефон: ' 	=> $phone
		);

		foreach($arr as $key => $value) {$txt .= "<b>".$key."</b> ".$value."%0A";};
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
		if ($sendToTelegram) echo "yes"; else echo "error";

		exit();
	}