<?php 

$time = time();

function createFolder(){
    if (!file_exists('xml/')) {
        mkdir('xml/', 0777, true);
    }
}

function zipFolder(){
    global $time;
    include_once('includes/goodziparchive/goodZipArchive.php');

    if (!file_exists('xml/')) {
        mkdir('xml/', 0777, true);
    }

    if (!file_exists('zip/')) {
        mkdir('zip/', 0777, true);
    }

    new GoodZipArchive('xml/', 'zip/xml_'.$time.'.zip');

    // header('Content-Type: application/zip');
    // header("Content-Disposition: attachment; filename=xml.zip");
    // header('Content-Length: ' . filesize($zipname));
    // header("Location: xml/xml.zip");

    $response = '<a href="./xml/xml_'.$time.'.zip" download>See file</a>';
    // echo $response;
}

function createXML(){
    global $time;
    $xml = new SimpleXMLElement('<xml/>');
    $track = $xml->addChild('track');
    $track->addChild('path', "song". $time.".mp3");
    $track->addChild('title', "Track ". $time." - Track Title");
    //Header('Content-type: text/xml');
    //print($xml->asXML());
    $content = $xml->asXML();
    $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/xml/trashFile_".$time.".xml","wb");
    fwrite($fp,$content);
    fclose($fp);
}

function createCron( $email ){
    global $time;
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
    $msg = '<h1>Notification</h1>
    <p>The file is ready to download</p>
    <a href="'.$actual_link.'/zip/xml_'.$time.'.zip" download>See file</a>';
    // mail($email, 'VHSYS Desafio 2 - ' . $time , $msg);
    $header = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    $content = "<?php
    mail('$email',
        'VHSYS Desafio 2 - ' . $time ,
        '$msg',
        '$header'
    );
?>";

    $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/cron/".$time.".php","wb");
    fwrite($fp,$content);
    fclose($fp);

}

if ($_POST['action'] == true) {
    createCron( $_POST['InputEmail'] );
    createXML();
    zipFolder();
    // print_r( $_POST);
} else {
    echo "Error";
}

