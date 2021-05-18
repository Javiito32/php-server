# PhP Server with MySQL Database

_Php web server integrated with a mysql database_

## Getting Started 🚀

_This is a guide for the deployment of this php server, no support will be provided_

Check-out **Installation** for more information.


### Requirements 📋

_Needed programs_

```
docker
docker-compose
```

### Installation 🔧

_Execute the following commands_

```
git clone https://github.com/Javiito32/php-server.git
cd php-server
docker-compose up
```
_Instead of ```docker-compose up``` you can use ```docker-compose up -d``` to start it in detached mode._

### Start ✔️ and Stop 🛑
_After the installation you can start and stop it with ```docker-compose start``` and ```docker-compose stop```_

### Complete Deletion 🗑️
_Use ```docker-compose down``` to remove the php server, mysql server, and docker network's_

⚠️ _The use of this command to stop it and then start it back with ```docker-compose up``` is not recommended, check ***Start ✔️ and Stop 🛑*** instead_

✔️ This won't remove the workdir [www](www) or the data of the database [mysql](mysql).

🧹 To clean the database, remove all the contents of the [mysql](mysql) folder.

## Access the WebServer ⚙️

_Now the WebServer should be available at localhost:80_

### Modify Content 🔩

_Use the www folder as your web workdir_

```
cd www
```

### Database connection ⛓️

_The connection between PhP and MySQL is made via the created docker's network, you can also access it with this connection string_

```
Server=localhost;Port=3306;Database=mainDB;Uid=root;Pwd=contrasenya;
```
You can modify the password and database name on [docker-compose](docker-compose.yml), make sure to change [connection.php](www/connection/connection.php) too.

## License 📄

This project is under AGPL-3.0-only - Checkout [LICENSE](LICENSE) for more detail

---
⌨️ with ❤️ by [Javiito32](https://github.com/Javiito32) 😊
