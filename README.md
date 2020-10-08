# Sistema de autenticación de usuarios
## [![Version](https://img.shields.io/badge/version-1.0.0-brightgreen)](https://github.com/alexisrv/user-authentication) [![License](https://img.shields.io/github/license/alexisrv/user-authentication.svg)](https://github.com/alexisrv/user-authentication)

![Medium Logo](https://github.com/alexisrv/user-authentication/blob/master/images/img.png?raw=true)

Un sistema basico de autenticación de usuarios el cual permite registrarse e iniciar sesión con diferentes roles.

**Base de datos**
```sql
CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user_rol` (
  `id` int(5) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

**Conexión (db.php)**
```php
public function __construct(){
      $this->host = '';
      $this->db = '';
      $this->user = '';
      $this->password = '';
      $this->charset = 'utf8mb4';
  }
```

**Avance**
- [x] Registro de usuarios
- [x] Validación de correo
- [x] Verificación de disponibilidad con AJAX
- [x] Encriptación de contraseña
- [x] Login de usuarios
- [x] Verificación de existencia de cuenta
- [ ] Activación de cuenta mediante email
- [ ] Validación de contraseña
