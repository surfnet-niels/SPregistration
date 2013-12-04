<?php

function sendMail($to, $from, $subject, $text, $html, $attachement, $mimetype)
{
    include_once "../Swift-5.0.2/lib/swift_required.php";

    $swift = Swift_Mailer::newInstance(Swift_SmtpTransport::newInstance());

    $message = new Swift_Message($subject);
    $message->setFrom($from);
    $message->setBody($html, 'text/html');
    $message->setTo($to);
    $message->addPart($text, 'text/plain');
    $message->attach(Swift_Attachment::newInstance($attachement, 'metadata.xml', $mimetype));

    $failedRecipients = array();
    $swift->send($message, $failedRecipients);

}

function getMailTemplate($fileName, $data)
{
    ob_start();
    include $fileName;
    return ob_get_clean();
}

function beautifyXML($xmlString)
{
    // Adopted from http://lamehacks.net/blog/beautify-format-xml-with-php/
    $outputString = "";
    $previousBitIsCloseTag = false;
    $indentLevel = 0;
    $bits = explode("<", $xmlString);

    foreach ($bits as $bit) {

        $bit = trim($bit);
        if (!empty($bit)) {

            if ($bit[0] == "/") {
                $isCloseTag = true;
            } else {
                $isCloseTag = false;
            }

            if (strstr($bit, "/>")) {
                $prefix = "\n" . str_repeat(" ", $indentLevel);
                $previousBitIsSimplifiedTag = true;
            } else {
                if (!$previousBitIsCloseTag and $isCloseTag) {
                    if ($previousBitIsSimplifiedTag) {
                        $indentLevel--;
                        $prefix = "\n" . str_repeat(" ", $indentLevel);

                    } else {
                        $prefix = "";
                        $indentLevel--;
                    }
                }
                if ($previousBitIsCloseTag and !$isCloseTag) {
                    $prefix = "\n" . str_repeat(" ", $indentLevel);
                    $indentLevel++;
                }
                if ($previousBitIsCloseTag and $isCloseTag) {
                    $indentLevel--;
                    $prefix = "\n" . str_repeat(" ", $indentLevel);
                }
                if (!$previousBitIsCloseTag and !$isCloseTag) {
                    {
                        $prefix = "\n" . str_repeat(" ", $indentLevel);
                        $indentLevel++;
                    }
                }
                $previousBitIsSimplifiedTag = false;
            }

            $outputString .= $prefix . "<" . $bit;

            if (strstr($bit, "?>")) {
                $prefix = "";
                $indentLevel--;
            }

            $previousBitIsCloseTag = $isCloseTag;
        }
    }
    return $outputString;
}

function exception_error_handler($errno, $errstr, $errfile, $errline)
{
    throw new ErrorException($errstr);
}


?>
