# Первое включение


#### Debugg PHPStorm
https://www.youtube.com/watch?v=9MhHQJjMulk


#### Cron
https://laracasts.com/discuss/channels/code-review/crontab-no-scheduled-commands-are-ready-to-run
В случае ошибки крона, что нет запланированных заданий. 
Нужно почистить кэш или удалить.
всё из директории storage/framework/cache/data

#### Create docker image tag
docker push ckala62rus/docker_php_sqlsrv-cron-new-template --all-tags

#### Create new tag from base image
docker tag docker_php_sqlsrv-cron-new-template ckala62rus/docker_php_sqlsrv-cron-new-template:1.0.0


#### TODO
- Сделать загрузку видео и превью. видео в minio, превью в MediaLibrary.
- Сделать вывод видео на страницу
- Сделать страницу с загрузкой видео на сервер.
- Сделать API аутентификацию.
