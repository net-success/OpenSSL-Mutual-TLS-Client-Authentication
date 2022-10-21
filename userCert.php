<?php

class userCert
{
    // Properties
    public $commonName;
    public $countryName;
    public $stateOrProvinceName;
    public $localityName;
    public $streetAddress;
    public $organizationName;
    public $organizationalUnitName;
    public $postalCode;
    public $emailAddress;

    public $userCertPassword;

    public $caCertPath = __DIR__ . '/certs/ca/ca.crt';
    public $caKeyPath = __DIR__ . '/certs/ca/ca.key';
    public $caKeyPassword;
    public $tlsClientConfig = __DIR__ . '/certs/config/tlsClient.cnf';
    public $userCertPath = __DIR__ . '/certs/user/';

    // Methods
    public function validate($property)
    {
        //Code Your Validations Here
        if ($property == 'commonName') {
            if (!$this->commonName) {
                throw new Exception('Error: Please enter valid Common Name');
            } else if (!preg_match('/^[A-Za-z0-9\s_.-@]{1,255}$/', $this->commonName)) {
                $this->commonName = null;
                throw new Exception('Error: Only alphanumeric + (_.-@) characters are allowed (max string length = 255 characters)');
            } else {
                $this->commonName = preg_replace('/\s+/', '', $this->commonName);
            }
        };

        if ($property == 'countryName') {
            if (!$this->countryName) {
                throw new Exception('Error: Please enter valid Country Name');
            } else if (!preg_match('/^[A-Z]{2}$/', $this->countryName)) {
                $this->countryName = null;
                throw new Exception('Error: Only two capital letters allowed (e.g. EN, DE, ...)');
            } else {
                $this->countryName = preg_replace('/\s+/', '', $this->countryName);
            }
        };

        if ($property == 'stateOrProvinceName') {
            if (!$this->stateOrProvinceName) {
                throw new Exception('Error: Please enter valid Common Name');
            } else if (!preg_match('/^[A-Za-z0-9\s.-]{1,255}$/', $this->stateOrProvinceName)) {
                $this->stateOrProvinceName = null;
                throw new Exception('Error: Only alphanumeric + (.-) characters are allowed (max string length = 255 characters)');
            } else {
                $this->stateOrProvinceName = preg_replace('/\s+/', '', $this->stateOrProvinceName);
            }
        };

        if ($property == 'localityName') {
            if (!$this->localityName) {
                throw new Exception('Error: Please enter valid Common Name');
            } else if (!preg_match('/^[A-Za-z0-9\s.-]{1,255}$/', $this->localityName)) {
                $this->localityName = null;
                throw new Exception('Error: Only alphanumeric + (.-) characters are allowed (max string length = 255 characters)');
            } else {
                $this->localityName = preg_replace('/\s+/', '', $this->localityName);
            }
        };

        if ($property == 'streetAddress') {
            if (!$this->streetAddress) {
                throw new Exception('Error: Please enter valid Common Name');
            } else if (!preg_match('/^[A-Za-z0-9\s.-]{1,255}$/', $this->streetAddress)) {
                $this->streetAddress = null;
                throw new Exception('Error: Only alphanumeric + (.-) characters are allowed (max string length = 255 characters)');
            } else {
                $this->streetAddress = preg_replace('/\s+/', '', $this->streetAddress);
            }
        };

        if ($property == 'organizationName') {
            if (!$this->organizationName) {
                throw new Exception('Error: Please enter valid Common Name');
            } else if (!preg_match('/^[A-Za-z0-9\s_.-@]{1,255}$/', $this->organizationName)) {
                $this->organizationName = null;
                throw new Exception('Error: Only alphanumeric + (_.-@) characters are allowed (max string length = 255 characters))');
            } else {
                $this->organizationName = preg_replace('/\s+/', '', $this->organizationName);
            }
        };

        if ($property == 'organizationalUnitName') {
            if (!$this->organizationalUnitName) {
                throw new Exception('Error: Please enter valid Common Name');
            } else if (!preg_match('/^[A-Za-z0-9\s_.-@]{1,255}$/', $this->organizationalUnitName)) {
                $this->organizationalUnitName = null;
                throw new Exception('Error: Only alphanumeric + (_.-@) characters are allowed (max string length = 255 characters)');
            } else {
                $this->organizationalUnitName = preg_replace('/\s+/', '', $this->organizationalUnitName);
            }
        };

        if ($property == 'postalCode') {
            if (!$this->postalCode) {
                throw new Exception('Error: Please enter valid Common Name');
            } else if (!preg_match('/^\\d{1,20}$/', $this->postalCode)) {
                $this->postalCode = null;
                throw new Exception('Error: Only digits ate allowed');
            } else {
                $this->postalCode = preg_replace('/\s+/', '', $this->postalCode);
            }
        };

        if ($property == 'emailAddress') {
            if (!$this->emailAddress) {
                throw new Exception('Error: Please enter valid Common Name');
            } else if (!preg_match('/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})*$/', $this->emailAddress)) {
                $this->emailAddress = null;
                throw new Exception('Error: Only valid email adress is allowed');
            } else {
                $this->emailAddress = preg_replace('/\s+/', '', $this->emailAddress);
            }
        };

        if ($property == 'userCertPassword') {
            if (!$this->userCertPassword) {
                throw new Exception('Error: Please enter valid Common Name');
            } else if (!preg_match('/(?=^.{6,}$)((?=.*\w)(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[|!"$%&\/\(\)\?\^\'\\\+\-\*]))^.*/', $this->userCertPassword)) {
                $this->userCertPassword = null;
                throw new Exception('Error: Minimum length of 6, at least 1 uppercase letter, at least 1 lowercase letter, at least 1 number, at least 1 special character');
            } else {
                $this->userCertPassword = preg_replace('/\s+/', '', $this->userCertPassword);
            }
        };

        if ($property == 'caKeyPassword') {
            if (!$this->caKeyPassword) {
                throw new Exception('Error: Please enter valid Common Name');
            } else if (!preg_match('/(?=^.{6,}$)((?=.*\w)(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[|!"$%&\/\(\)\?\^\'\\\+\-\*]))^.*/', $this->caKeyPassword)) {
                $this->caKeyPassword = null;
                throw new Exception('Error: Minimum length of 6, at least 1 uppercase letter, at least 1 lowercase letter, at least 1 number, at least 1 special character');
            } else {
                $this->caKeyPassword = preg_replace('/\s+/', '', $this->caKeyPassword);
            }
        };

        // Validate Cert Path
        if (!is_file($this->caCertPath)) {
            throw new Exception('Error: Can not find ca.crt | Create CA-Certificate first!');
        };

        if (!is_file($this->caKeyPath)) {
            throw new Exception('Error: Can not find ca.key');
        }

        if (!is_file($this->tlsClientConfig)) {
            throw new Exception('Error: Can not find tlsClient.cnf');
        }
    }

    public function createUser()
    {
        // Throw OpenSSL Errors
        while (($e = openssl_error_string()) !== false) {
            throw new Exception('OpenSSL Error: ' . $e);
        }

        // Create User Certificate
        $dn = [
            'commonName' => $this->commonName,
            'countryName' => $this->countryName,
            'stateOrProvinceName' => $this->stateOrProvinceName,
            'localityName' => $this->localityName,
            'streetAddress' => $this->streetAddress,
            'organizationName' => $this->organizationName,
            'organizationalUnitName' => $this->organizationalUnitName,
            'postalCode' => $this->postalCode,
            'emailAddress' => $this->emailAddress,
        ];

        $privateKey = openssl_pkey_new([
            "digest_alg" => "sha512",
            "private_key_bits" => 4096,
            "private_key_type" => OPENSSL_KEYTYPE_RSA,
        ]);

        $csrOptions = array('digest_alg' => 'sha256');
        $csr = openssl_csr_new((array)$dn, $privateKey, $csrOptions);

        if (!$csr) {
            throw new Exception('Error: (openssl_csr_new)');
        };

        $caKey = array(file_get_contents($this->caKeyPath), $this->caKeyPassword);
        $csrConfig = array('digest_alg' => 'sha256', 'x509_extensions' => 'req_ext', "config" => $this->tlsClientConfig);
        $usersCert = openssl_csr_sign($csr, file_get_contents($this->caCertPath), $caKey, 365, $csrConfig, rand());

        if (!$usersCert) {
            throw new Exception('Error: (openssl_csr_sign)');
        }

        openssl_pkcs12_export_to_file($usersCert, $this->userCertPath . $this->commonName . '.p12', $privateKey, $this->userCertPassword);
    }
}
