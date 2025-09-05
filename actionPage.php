<?php
$name = $_POST['name'];
$email = $_POST['return'];
$phone = $_POST['phone'];
$reason = $_POST['reason'];

$to = "vvillalobos96@gmail.com";

if($reason == "events") {
    //$to = "events@thesocialgnv.com";
    $subject = "Event Request for $name";
    $date = $_POST['eventDay'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $num = $_POST['num'];
    $area = $_POST['area'];
    $feat = $_POST['feat'];
    $req = $_POST['req'];
    
    $message = "Event request for $name for $date from $start to $end.\nExpected guests: $num\nRequested area: $area\nRequested features: $feat\nMore details: $req\n\nEmail: $email\nPhone: $phone";
}
elseif ($reason == "dispute") {
    //$to = "info@thesocialgnv.com";
    $subject = "New CC Dispute from Contact Us form";
    
    $ccDay = $_POST['ccDay'];
    $imageUp = $_POST['imageUp'];
    $disputeDet = $_POST['disputeDet'];
    
    $message = "From: $name, $email, $phone\nDate of incident: $ccDay\nDetails: $disputeDet\nImage: $imageUp";
}
elseif ($reason == "dono") {
    //$to = "info@thesocialgnv.com";
    $subject = "New Donation Request from Contact Us form";
    
    $org = $_POST["org"];
    $donoDay = $_POST["donoDay"];
    $donoDet = $_POST["donoDet"];
    
    $message = "From $name in affiliation with $org\nDonation Details: $donoDet\nBy $donoDay\n\nEmail: $email\nPhone: $phone";
}
elseif ($reason == "qcc") {
    //$to = "info@thesocialgnv.com";
    $subject = "New Submission from Contact Us form";
    
    $sugDet = $_POST['sugDet'];
    
    $message = "$name says: $sugDet\n\nEmail: $email\nPhone: $phone";
}
else {
    //failure somewhere
}

$retval = mail ($to,$subject,$message);

echo "Thank you for your submission!";

?>
