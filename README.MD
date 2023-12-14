# Football
Symfony 6.4  backend application for APIs and Admin tasks.

## Setup instructions

### Step #0: Clone code base
1. Clone this repo into your Projects directory

    ```
    https://github.com/aladd1ne/football.git
    cd football
    ```
   
### Step1 #: Project setup
1 Initialize the site

   This will initialize local settings and install the site connection file.

```
    - composer install
    - php bin/console doctrine:database:create
    - php bin/console doctrine:migrations:migrate
    - php bin/console doctrine:fixtures:load
```

1. Admin credentials

```
   Email: admin@football.com
   Password: 12345678
   Role: ['ROLE_ADMIN']
   ```
**App links**

```console
### App routes

profile                   | enabled
===================================
/login                    |https://localhost/login   
/register                 |https://localhost/register     
/admin                    |https://localhost/admin     
 
```