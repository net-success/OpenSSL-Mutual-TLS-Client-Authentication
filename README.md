# OpenSSL Mutual TLS Client Authentication

### php commandline tool for OpenSSL certificate generation

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
[ alt_names ]
DNS.0 = your_domain.com
```

#### tlsClient.cnf

```bash
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
