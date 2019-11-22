<?php
    mail('pereirawe@gmail.com',
        'VHSYS Desafio 2 - ' . 1574381199 ,
        '<h1>Notification</h1>
    <p>The file is ready to download</p>
    <a href="http://desafiovhsys2.test/zip/xml_1574381199.zip" download>See file</a>',
        'From: webmaster@example.com
Reply-To: webmaster@example.com
X-Mailer: PHP/7.2.19'
    );
?>