## Norwex Code Challenge

- Apache 2.4.0
- Laravel Ver. 8.13.0

# Setup
## Database
```
CREATE DATABASE norwex;
```
## User
```
CREATE USER developer@localhost IDENTIFIED BY 'norwex';
GRANT ALL PRIVILEGES ON norwex.* TO 'developer'@'localhost';
FLUSH PRIVILEGES;
```
