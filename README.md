# PHP Library v.Alpha 1.0
## DetectTor v 1.0.1 [#zxcvbinz]("https://www.github.com/zxcvbinz)
How to Use


```php
$user_information = file_get_contents('https://ipinfo.io/json');
$user_information_json = json_decode($user_information, true);


DetectTor($user_information_json['ip']);
```
Return 
```php
true or false
```
