<?php 





		// PHP Curl headers
        $headers = array(
            'Content-Type:application/json',
            'Origin:https://mis.bhata.gov.bd',
            'User-Agent:PostmanRuntime/7.29.0',
        );
        
        // Fields array
        $fields= array(
					"nid"       => $_GET['nid'],
					"dob"       => $_GET['dob'],
				
                );


        $url_path="https://mis.bhata.gov.bd/beneficiary/verifynidinfo";

        $ch = curl_init( $url_path );
        # Setup request to send json via GET.
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        # Return response instead of printing.
        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);


header('Content-type: application/json');
        echo $result;



?>