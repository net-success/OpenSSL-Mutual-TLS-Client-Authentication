<?php
require_once __DIR__ . '/caCert.php';

$caCert = new caCert;

echo "Creating new CA Certificate\n\n";

while (!$caCert->commonName) {
    $caCert->commonName = (string)readline("Common Name: ");
    try {
        $caCert->validate('commonName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $caCert->commonName, "\033[0m\n";

while (!$caCert->countryName) {
    $caCert->countryName = (string)readline("Country Name: ");
    try {
        $caCert->validate('countryName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $caCert->countryName, "\033[0m\n";

while (!$caCert->stateOrProvinceName) {
    $caCert->stateOrProvinceName = (string)readline("State Or Province Name: ");
    try {
        $caCert->validate('stateOrProvinceName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $caCert->stateOrProvinceName, "\033[0m\n";

while (!$caCert->localityName) {
    $caCert->localityName = (string)readline("Locality Name: ");
    try {
        $caCert->validate('localityName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $caCert->localityName, "\033[0m\n";

while (!$caCert->streetAddress) {
    $caCert->streetAddress = (string)readline("Street Address: ");
    try {
        $caCert->validate('streetAddress');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $caCert->streetAddress, "\033[0m\n";

while (!$caCert->organizationName) {
    $caCert->organizationName = (string)readline("Organization Name: ");
    try {
        $caCert->validate('organizationName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $caCert->organizationName, "\033[0m\n";

while (!$caCert->organizationalUnitName) {
    $caCert->organizationalUnitName = (string)readline("Organizational Unit Name: ");
    try {
        $caCert->validate('organizationalUnitName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $caCert->organizationalUnitName, "\033[0m\n";

while (!$caCert->postalCode) {
    $caCert->postalCode = (string)readline("Postal Code: ");
    try {
        $caCert->validate('postalCode');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $caCert->postalCode, "\033[0m\n";

while (!$caCert->emailAddress) {
    $caCert->emailAddress = (string)readline("Email Address: ");
    try {
        $caCert->validate('emailAddress');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $caCert->emailAddress, "\033[0m\n";

while (!$caCert->caKeyPassword) {
    $caCert->caKeyPassword = (string)readline("CA Key Password: ");
    try {
        $caCert->validate('caKeyPassword');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $caCert->caKeyPassword, "\033[0m\n";

try {
    $caCert->createCa();
} catch (Exception $e) {
    echo "\033[31m",  $e->getMessage(), "\033[0m\n";
} finally {
    return;
}
