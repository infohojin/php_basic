<?PHP
    $file = '../images/logo.jpg';
    $file_info = apache_lookup_uri($file);
    header('content-type: ' . $file_info -> content_type);
    virtual($file);
    die();
?>
