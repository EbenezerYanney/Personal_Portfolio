<?php
include_once 'Email.class.php';
if (isset($_POST['sendflag'])) {

    if ($_POST['sendflag'] == "send") {

        $sendMailGateway = new Email();
        $input = array('name'=>$_POST['name'],'email'=>$_POST['email'],'subject'=>$_POST['subject'],'message'=>$_POST['message']);

        $sendMail = $sendMailGateway->contactEmail($input);
        if ($sendMail) {
            print("Message was sent, you can send another one");
        } else {
            print("Message wasn't sent, please check that you have changed emails in the bottom");
        }
    }
}

?>


