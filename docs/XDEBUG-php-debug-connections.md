### Описание `docker-compose.yaml`:

```yaml
environment:
  XDEBUG_MODE: develop,debug
  XDEBUG_CONFIG: client_host=host.docker.internal client_port=9000
  PHP_IDE_CONFIG: serverName={serverName}
```

Полный список настроек можно посмотреть на сайте [Xdebug](https://xdebug.org/docs/all_settings). 

Не все настройки можно использовать в переменных окружения (`XDEBUG_CONFIG`).

Для Linux вместо `client_host=host.docker.internal`(для MacOS и Windows) использовать `client_host=IP`!

### Настройка `PhpStorm`:

Добавить Docker сервер:

- ****Для MacOS: PhpStorm > Preferences... (⌘.) > Build, Execution, Deployment > Docker****: ![](./xdebug/mac_1.png)

Добавить новый сервер с именем `{serverName}` :

- ****Для Windows: File > Settings > Languages & Frameworks > PHP > Servers****

- ****Для MacOS: PhpStorm > Preferences... (⌘.) > Languages & Frameworks > PHP > Servers****

Маппинг должен быть такой же как в `docker-compose.yaml`:

```yaml
services:
  backend:
    volumes:
      - ./backend/:/var/www/
```

![](./xdebug/{serverName}.png)

Запустить дебаггер:

![](./xdebug/enable-listening.png)

PhpStorm начнет слушать входящие соеденения. 

В отличии от `PHP Web Page` и `PHP Remote Debug` PhpStorm не откроет браузер с `XDEBUG_SESSION_START`.

Перейдя в PhpStorm в окне дебага видим:

![](./xdebug/listening-index.png)