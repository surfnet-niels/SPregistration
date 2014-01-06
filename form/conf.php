<?php

$conf = array(
    /*
     * The email where the information is send to (apart from the logged in user)
     */
    'to_email' => array("surfconext-beheer@surfnet.nl" => "SURFconext Beheer"),
    /*
     * The from email address
     */
    'from_email' => array("surfconext-beheer@surfnet.nl" => "SURFconext Beheer"),
    /*
     * Require user AuthN (true / false)
     * If true, Assumes simplesamlphp to be installed
     * Turn it of for easy dev work on form
     */
    'requireAuthN' => false,
    /*
     * It is possible to skip the first two pages if you provide a metadata query parameter. Here
     * you can specify the parameter's name.
     *
     * e.g. https://spregistration.demo.openconext.org/form/index.php?metadata-url=http://192.168.56.1:8000/metadata.example.xml
     */
    'metadata-url-provided-parameter' => "metadata-url",
    /*
     * The mock user if the AuthN is turned off
     */
    'mockUser' => array(
        'user' => 'Jonh Doe',
        'email' => 'john.doe@example.org',
        'home_org' => 'example.org'),
    /*
     * ISet to true if you want to preview the mail send in the final confirmation screen
     */
    'debug' => true

);

?>