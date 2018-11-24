# Goats: Goat Organize Application Tracking System
## 2018.11.24 - Faker and Carbon (Add via Composer) ./application/config/config.php

```php
	include_once 'vendor/autoload.php';
```
Example using carbon:

```php
	Carbon\Carbon::now();
```
## 2018.11.25 - Add a hover effect on sidebar

```css
.sidebar ul li div.collapse a.nav-link:hover {
  background-color: #6c757d !important;
  color: #fff !important;
}

.sidebar ul li div.collapse a.nav-link:hover span.fa {
  color: #fff !important;
}
```
