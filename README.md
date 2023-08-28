## Strategy

Strategy is a behavioral pattern, often used when we have rules for a particular activity that may contain a lot of logic, it organizes and separates the use of these logics, standardizing the usability of classes so that new implementations can be added in the future without much change in the use of a particular class of action.

-----

We need to create a tax calculator. With this, we will have our budget and it will show the specific amount after calculating the taxes.

### The problem

If we do it this way, we have two problems: we are dependent on a string parameter with the name of the tax. If it is passed incorrectly, an error will be returned. In addition, with each new tax, we will have to modify the file by adding another "if", which can generate additional bugs.

```php
<?php
class Budget 
{
    public float $value;
}
```
```php
<?php
class TaxCalculator
{
    public function calc(Budget $budget, string $taxName) : float
    {
        switch ($taxName) {
            case "ICMS":
                return $budget->value * 0.1;
            case "ISS":
                return $budget->value * 0.06;
        }
    }
}
```

### The solution

Now, using the Strategy pattern, we create an interface that serves as a contract for all taxes, with a standardized calculation method. Each new tax just needs to create a new file that will be called when referring to it.

```php
<?php
interface Tax
{
    public function calculateTax(Budget $budget) : float;
}
```
```php
<?php
class Icms implements Tax
{
    public function calculateTax(Budget $budget) : float
    {
        return $budget->value * 0.1;
    }
}
```
```php
<?php
class Iss implements Tax
{
    public function calculateTax(Budget $budget) : float
    {
        return $budget->value * 0.06;
    }
}
```
```php
<?php
class TaxCalculator
{
    public function calc(Budget $budget, Tax $tax) : float
    {
        return $tax->calculateTax($budget);
    }
}
```
-----

### Installation for test

![PHP Version Support](https://img.shields.io/badge/php-7.4%2B-brightgreen.svg?style=flat-square) ![Composer Version Support](https://img.shields.io/badge/composer-2.2.9%2B-brightgreen.svg?style=flat-square)

```bash
composer install
```

```bash
php wrong/test.php
php right/test.php
```