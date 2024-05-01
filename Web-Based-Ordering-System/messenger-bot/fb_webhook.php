<?php
   
    $my_verify_token = "12345678901MVT";


    $challenge=$_GET['hub_challenge'];
    $verify_token=$_GET['hub_verify_token'];

    if($my_verify_token===$verify_token){

        echo $challenge;
        exit;

    }


    $access_token='EAAGLJVsiWGgBOwIbi1ywpFxGe1aBHAcLUdBhawAjdVqaFFuSWqy9NdUZADZC2zMiZCjfOJP1V2NRrsR0VX5VmGcZBPelRyHfihrVKP0fUZB3WqZBSfJvvGMzP3AjDVLmYoZAmRir1ZCWLXXndGu41RwZB0fME6UonnKTOfNzXOpmgjYZAg3a61Q4OFEKQC7x19KCp31tUkRtXB';


    $response=file_get_contents("php://input");
    // file_put_contents("text.txt", $response);
    $response=json_decode($response, true);

    $message=$response['entry'][0]['messaging'][0]['message']['text'];
    $sender_id=$response['entry'][0]['messaging'][0]['sender']['id'];


    if($message=='Hi'){

        $reply_message='{ 
            "messaging_type": "RESPONSE",
            "recipient": { 
                "id": "' . $sender_id . '"
            },
            "message": { 
                "text": "Hi, Thanks for your message, You have write Hi" 
            } 
        }';

        send_reply($access_token,$reply_message);

    }



    if($message == 'Hello') {

        $reply_message='{ 
            "messaging_type": "RESPONSE",
            "recipient": { 
                "id": "' . $sender_id . '"
            },
            "message": { 
                "text": "Hello, Thanks for your message, You have write Hello" 
            } 
        }';

        send_reply($access_token,$reply_message);

    }



    function send_reply($access_token='',$reply='') 
        {
            $url= "https://graph.facebook.com/v2.6/me/messages?access_token=$access_token";
            $ch= curl_init();
            $headers= array("Content-Type: application/json");
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $reply);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // add when working on localhost
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $st=curl_exec($ch);
            $result=json_decode($st, true);
            return $result;
        }

?>