<?php
require_once 'Frello_Helper.php';
const APP_ID = 'APP16902';
const APP_SECRET = '619d10ea7e0c6861629ce6d2747b1521f79f2c26';


class Frello{
    public function sendPassword($to){
        
        $frello = new Frello(APP_ID,APP_SECRET);

        //To send an sms to a number, make sure the number begins with the country code and does not have '00' or '+' appended to it

        $message = "This visit this link to reset you password http://startups.co.zw/user/reset?number="+ $to + ".";
        //you can send to multiple numbers by concatenating them using a comma
        //263 is the country code for Zimbabwe

        //Then use the send_message method to send a single message

        if($frello->send_sms($message,$to)){
            //message has been sent successfully
        echo 'Message has been sent';
        }else{
            //message wasnt sent...check frello->result
            echo "<pre>", print_r($frello->result), "</pre>";    
        }
    }
}
?>