<?php

	if(isset($_POST['guestNames']) && isset($_POST['guestCount'])) {
		$url = "https://docs.google.com/forms/d/1QnjFG0I0yozwTTS5zvBZ7SWDAqXjpPtX1-e3st0XWDI/formResponse";
		$guestNames = $_POST['guestNames'];
		$guestCount = $_POST['guestCount'];
		$attending = $_POST['attending'];
		$data = array(
			'entry.166742170' => $guestNames,
			'entry.1030104404'=> $guestCount,
			'entry.111174266'=> $attending,
		);

		// use key 'http' even if you send the request to https://...
		$options = array(
	    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
	    )
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);

		if($result) {
			http_response_code(200);
			return;
		}
	}

	http_response_code(500);