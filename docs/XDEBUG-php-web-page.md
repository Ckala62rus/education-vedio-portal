### Описание `docker-compose.yaml`:

```yaml
environment:
  XDEBUG_MODE: develop,debug
  XDEBUG_CONFIG: client_host=host.docker.internal client_port=9000
```

Полный список настроек можно посмотреть на сайте [Xdebug](https://xdebug.org/docs/all_settings). 

Не все настройки можно использовать в переменных окружения (`XDEBUG_CONFIG`).

Для Linux вместо `client_host=host.docker.internal`(для MacOS и Windows) использовать `client_host=IP`!

### Настройка `PhpStorm`:

Добавить Docker сервер:

- ****Для MacOS: PhpStorm > Preferences... (⌘.) > Build, Execution, Deployment > Docker****: ![](./docs/xdebug/mac_1.png)

Для всех добавляемых серверов ниже по инструкции нужно использовать маппинг такой же как в `docker-compose.yaml`:

```yaml
services:
  backend:
    volumes:
      - ./backend/:/var/www/
```

Добавить новый сервер с любым именем и прописать маппинги:

- ****Для Windows: File > Settings > Languages & Frameworks > PHP > Servers****

- ****Для MacOS: PhpStorm > Preferences... (⌘.) > Languages & Frameworks > PHP > Servers****

![](./xdebug/Screenshot_47.png)

Добавить конфигурацию запуска:

![](./xdebug/Screenshot_53.png)

Запустить дебаггер:

![](./xdebug/Screenshot_49.png)

![](./xdebug/Screenshot_50.png)

После запуска дебаггера откроется браузер по адресу (`XDEBUG_SESSION_START` прописывает сам PhpStorm): 

![](./xdebug/Screenshot_51.png)

Перейдя в PhpStorm в окне дебага видим:

![](./xdebug/Screenshot_52.png)
