# module-webasyst-shop-script

#### Тестировалось и писалось для Shop Script 7 версия магазина 7.1.6.
Shop Script 7

1. Регистрируемся на paybox.kz
2. Копируем папку wa-plugins из архива в корень сайта.
3. Выполняем SQL-скрипт run.sql.
2. Заходим в админку Shop Script 7 (www.shop-script.local/admin/)->Магазин->Настройки->Оплата-> PayBox-> Конфигурация.
3. Далее настраиваем модуль. Берем данные по магазину из https://www.paybox.kz/admin/merchants.php и заполняем остальные настройки.
4. Shop-script 7 не позволяет проверять статус заказа на запросе check. Поэтому для отмены заказа необходимо зайти в админку PayBox https://www.paybox.kz/admin/transactions.php, найти транзакцию и отменить ее до запроса check.
