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


## Added Custom Form Validation
```php
	
	public function account_type($str){
		
		if($str == 'admin' || $str == 'employee' || $str == 'superuser') return true;
		return false;

	}

	public function alpha_spaces($str)
	{
		return (bool) preg_match('/^[A-Z ]+$/i', $str);
	}

	public function is_exist($str, $field)
	{
		
		sscanf($field, '%[^.].%[^.]', $table, $field);
		
		if(isset($this->CI->db)){

			return ($this->CI->db->limit(1)->get_where($table, array($field => $str))->num_rows() === 0 ? FALSE : TRUE);

		}

		return FALSE;
	}

	public function is_dam_exist($str, $field)
	{
		
		sscanf($field, '%[^.].%[^.]', $table, $field);
		
		if(isset($this->CI->db)){

			return ($this->CI->db->limit(1)->get_where($table, array($field => $str,"gender" => "female"))->num_rows() === 0 ? FALSE : TRUE);

		}

		return FALSE;
	}	

	public function is_sire_exist($str, $field)
	{
		
		sscanf($field, '%[^.].%[^.]', $table, $field);
		
		if(isset($this->CI->db)){

			return ($this->CI->db->limit(1)->get_where($table, array($field => $str,"gender" => "male"))->num_rows() === 0 ? FALSE : TRUE);

		}

		return FALSE;
	}	




```