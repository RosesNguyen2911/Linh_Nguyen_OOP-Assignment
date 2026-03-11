# 🌍 PHP OOP Assignment 2 - Country Hierarchy

This project is an **Object-Oriented Programming assignment** built using **PHP**.  
It demonstrates core OOP concepts such as **inheritance, polymorphism, traits, and autoloading**.

---

## 📚 Concept

The project models a **country hierarchy system** using classes.

Country  
- EuropeanCountry  
  - 🇫🇷 France  
  - 🇩🇪 Germany  
  - 🇮🇹 Italy  
  - 🇬🇧 UnitedKingdom  

- AsianCountry  
  - 🇻🇳 Vietnam  
  - 🇰🇷 SouthKorea  
  - 🇯🇵 Japan  
  - 🇨🇳 China  

- AmericanCountry  
  - 🇨🇦 Canada  
  - 🇺🇸 UnitedStates  
  - 🇲🇽 Mexico  
  - 🇧🇷 Brazil  

Each country inherits properties and behavior from parent classes.

Example inheritance chain:

🇫🇷 France → EuropeanCountry → Country

---

## 🧠 OOP Concepts Used

### 🔹 Inheritance
Countries extend continent classes, which extend the base `Country` class.

### 🔹 Polymorphism
Methods such as `describe()` are **overridden** in subclasses to provide more specific behavior.

### 🔹 Traits
A trait is used to share functionality between multiple classes.

Trait used in this project:

`TourismTrait`

Method included:

`recommendDestination()`

Used in selected countries such as **🇫🇷 France, 🇯🇵 Japan, 🇻🇳 Vietnam, and 🇨🇦 Canada**.

---

## ⚙️ Features
- Example execution using `index.php`
- Multi-level class hierarchy  
- At least **3 properties**  
- At least **3 methods**  
- Method overriding  
- Shared functionality using **traits**  
- PHPDoc documentation  
- Type hints  
- Autoloading using `spl_autoload_register`

---

## 🧪 Example

```php
$france = new MyProject\Country\EuropeanCountry\France("France", "Paris", 69000000, "🇫🇷");

echo $france->describe();
echo $france->showCapital();
echo $france->showPopulation();
echo $france->recommendDestination();
```

---

## 🛠 Technologies

- PHP
- Object-Oriented Programming
- Git
- GitHub

---

## 👨‍💻 Author

- Name: Linh Nguyen
- Portfolio: [linhnguyenportfolio.com](https://linhnguyenportfolio.com)
- Contact: [Linh Nguyen](https://www.linkedin.com/in/linhnguyenstudio/)

