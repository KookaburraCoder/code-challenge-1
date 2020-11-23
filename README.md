## Code Challenge

- Apache  2.4.46
- Laravel  8.13.0
- PHP 7.4.12
- MariaDB 10.5.6

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

## How to Run

```
php artisan migrate
php artisan db:seed
php artisan serve
```
Then go to http://localhost:8000/

You should see a simple table in the middle of the screen, showing 10 users all coloured to match the conditions.

To produce more results, open database/seeders/DatabaseSeeder.php, Line 21, Change value '10' to something else.

# Specs
Create a route, controller and any other supporting classes, services or helpers that are needed to display a list of all customers alphanumerically.
- Highlight ‘Removed’ customers in RED
- ‘Active’ customers who have not placed any orders during the last 12 months in ORANGE
- ‘Active’ customers who have placed a minimum of RM200.00 in sales over the last 3 months in GREEN (check the ‘OrderStatus’ and make sure you are only including ‘Completed’ orders in this calculation)
- Include a total order count for each customer
