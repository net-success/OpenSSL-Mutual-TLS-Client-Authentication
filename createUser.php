<?php
require_once __DIR__ . '/userCert.php';

$userCert = new userCert;

echo "Creating new User Certificate\n\n";

while (!$userCert->commonName) {
    $userCert->commonName = (string)readline("Common Name: ");
    try {
        $userCert->validate('commonName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->commonName, "\033[0m\n";

while (!$userCert->countryName) {
    $userCert->countryName = (string)readline("Country Name: ");
    try {
        $userCert->validate('countryName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->countryName, "\033[0m\n";

while (!$userCert->stateOrProvinceName) {
    $userCert->stateOrProvinceName = (string)readline("State Or Province Name: ");
    try {
        $userCert->validate('stateOrProvinceName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->stateOrProvinceName, "\033[0m\n";

while (!$userCert->localityName) {
    $userCert->localityName = (string)readline("Locality Name: ");
    try {
        $userCert->validate('localityName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->localityName, "\033[0m\n";

while (!$userCert->streetAddress) {
    $userCert->streetAddress = (string)readline("Street Address: ");
    try {
        $userCert->validate('streetAddress');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->streetAddress, "\033[0m\n";

while (!$userCert->organizationName) {
    $userCert->organizationName = (string)readline("Organization Name: ");
    try {
        $userCert->validate('organizationName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->organizationName, "\033[0m\n";

while (!$userCert->organizationalUnitName) {
    $userCert->organizationalUnitName = (string)readline("Organizational Unit Name: ");
    try {
        $userCert->validate('organizationalUnitName');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->organizationalUnitName, "\033[0m\n";

while (!$userCert->postalCode) {
    $userCert->postalCode = (string)readline("Postal Code: ");
    try {
        $userCert->validate('postalCode');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->postalCode, "\033[0m\n";

while (!$userCert->emailAddress) {
    $userCert->emailAddress = (string)readline("Email Address: ");
    try {
        $userCert->validate('emailAddress');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->emailAddress, "\033[0m\n";

while (!$userCert->userCertPassword) {
    $userCert->userCertPassword = (string)readline("UserCert Password: ");
    try {
        $userCert->validate('userCertPassword');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->userCertPassword, "\033[0m\n";

while (!$userCert->caKeyPassword) {
    $userCert->caKeyPassword = (string)readline("CA Key Password: ");
    try {
        $userCert->validate('caKeyPassword');
    } catch (Exception $e) {
        echo "\033[31m",  $e->getMessage(), "\033[0m\n";
    }
}
echo "\033[32m", $userCert->caKeyPassword, "\033[0m\n";

try {
    $userCert->createUser();
} catch (Exception $e) {
    echo "\033[31m",  $e->getMessage(), "\033[0m\n";
} finally {
    return;
}
