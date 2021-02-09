# What is this

Simple demonstration about bug that was talked on Symfony Slack channel - https://symfony-devs.slack.com/archives/C8SFXTD2M/p1612885598251900

## How to see the results

 1) Clone repository `git clone https://github.com/tarlepp/phpstan-trait-bug.git` 
 2) Run `composer install` on that directory where you cloned it
 3) Run `./vendor/bin/phpstan analyze src`

With that you're should get following output;

```bash
da_wunder@wunder-VirtualBox:~/PhpstormProjects/phpstan-trait-bug$ ./vendor/bin/phpstan analyze src
 2/2 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

 ------ -------------------------------------------- 
  Line   Foo.php                                     
 ------ -------------------------------------------- 
  10     No error to ignore is reported on line 10.  
 ------ -------------------------------------------- 

                                                                                                                        
 [ERROR] Found 1 error                                                                                                  
                                                                                                                        

da_wunder@wunder-VirtualBox:~/PhpstormProjects/phpstan-trait-bug$ 
```

Which is misleading because that `Foo.php` doesn't even have anything on line `10`

## Authors

* [Tarmo Leppänen](https://github.com/tarlepp)

## License

[The MIT License (MIT)](LICENSE)

Copyright © 2021 Tarmo Leppänen
