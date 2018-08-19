# PHP-OOP-CRUD
A PHP Create Remove Update Delete (CRUD) program using Object-oriented programming (OOP).

# How To Use 
In the source code there are comments on how to program works. 

**Database Credentials**
First of all change the database credentials to the credentials of your own database, you can find them on line 5 till line 9 in the Database class file.
```php
private $host = "changeme";
private $username = "changeme";
private $password = "changeme";
private $db = "changeme";
```

**Insert SQL file into your database**
Insert 'feedback.sql' into your database or use the following SQL CODE:
```mysql
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(999) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

# Examples

**Create**
Line 12 in index.php
```php
$db->Create("INSERT INTO feedback (name, message, email) VALUES ('John Doe', 'test@test.com', 'test@gmail.com')");
```

**Read**
Line 16 in index.php
```php
$db->Read("SELECT * FROM feedback");
```

**Update**
Line 19 in index.php
```php
$db->Update("UPDATE feedback SET name='Michel Z' WHERE id=1");
```

**Delete**
Line 23 in index.php
```php
$db->Delete(2);
```