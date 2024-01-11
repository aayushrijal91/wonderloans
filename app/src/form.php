<?php
include __DIR__ . '/../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score');
        }

        $to = $admin_email;
        $email = $to;

        $subject = "Message from " . $site;

        $loanType = $_POST['loanType'];
        $borrowAmount = $_POST['borrowAmount'];
        $businessEntity = $_POST['businessEntity'];
        $companyName = $_POST['companyName'];
        $abn = $_POST['abn'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $message = '<!DOCTYPE html>
                <html>
                    <head>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            
                            td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            
                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                <body><table><tbody>' .
            '<tr>' .
            '<td>Loan Type</td>' .
            '<td><b>' . strip_tags($loanType) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Borrow Amount</td>' .
            '<td><b>' . strip_tags($borrowAmount) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Business Entity</td>' .
            '<td><b>' . strip_tags($businessEntity) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Company Name</td>' .
            '<td><b>' . strip_tags($companyName) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>ABN</td>' .
            '<td><b>' . strip_tags($abn) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Name</td>' .
            '<td><b>' . strip_tags($firstName) . ' ' . strip_tags($lastName) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Phone</td>' .
            '<td><b>' . strip_tags($phone) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Email Address</td>' .
            '<td><b>' . strip_tags($email) . '</b></td>' .
            '</tr>' .
            '</tbody></table></body></html>';

        $headers = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            // "Bcc: " . $bcc_email . "\r\n" .
            "Reply-To: " . $site . " <" . $email . ">" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            header('location:./../thankyou');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
