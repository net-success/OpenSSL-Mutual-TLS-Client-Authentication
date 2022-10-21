# OpenSSL Mutual TLS Client Authentication

### php commanline tool for OpenSSL certificate generation

This repository should help you to authenticate users by client certificate.

## Installation

Download zip-file and extract or clone this repository.

```git
https://github.com/net-success/mutual.git
```

## Edit config files

Edit **tlsCa.cnf** and **tlsClient.cnf** in /config folder according to your needs.
Actually you only have to change the **[alt_names]** DNS.

#### tlsCa.cnf

```bash
[ req_ext ]
subjectKeyIdentifier = hash
authorityKeyIdentifier = keyid:always,issuer
keyUsage=critical,keyCertSign,cRLSign
basicConstraints=critical,CA:true,pathlen:1
subjectAltName = @alt_names

[ alt_names ]
DNS.0 = your_domain.com
```

#### tlsClient.cnf

```bash
[ req_ext ]
extendedKeyUsage=clientAuth
subjectAltName = @alt_names

[ alt_names ]
DNS.0 = your_domain.com
```

## Create CA-Certificate

Enter command and follow commandline instructions.

```bash
php createCa.php
```

## Create User-Certificate

Enter command and follow commandline instructions.

```bash
php createUser.php
```

## License

[MIT](https://choosealicense.com/licenses/mit/)
