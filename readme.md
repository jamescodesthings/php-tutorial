# Notes

## Tools to check
(Coding Standards fixer)[http://cs.sensiolabs.org/]
```
http://cs.sensiolabs.org/
```

Uses http://www.php-fig.org/psr/psr-2/ or similar.

Or [Beautifier](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Fixing-Errors-Automatically)

### XDebug

http://xdebug.org/docs/
http://www.bluestatic.org/software/macgdbp/

Make sure XDebug is installed and enabled on the magento site locally.

- vhost/.htaccess
 ```
1 php_value xdebug.remote_host 192.168.?.?
2 php_value xdebug.remote_port 9000
 ```

`http://your-website.example.com/index.php?XDEBUG_SESSION_START=1`

### VersionEye
https://www.versioneye.com/

Like Greenkeeper, email notification service for OOD Packages.

### SAC
https://security.sensiolabs.org/

## Language Features

- OO Model: http://php.net/language.oop5
- Traits: http://php.net/language.oop5.traits
    - Like Aspects?

- FP: Anonymous functions, Closures, First class and high order functions.
- Meta: Using the Reflection API, Magic Methods.
