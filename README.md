# module-webasyst-shop-script
Shop Script 5

1. Регистрируемся на platron.ru
2. Заходим в админку Shop Script 5 (www.shop-script.local/admin/) -> магазин -> настройки -> оплата -> добавить способ оплаты -> Платрон
3. Далее настраиваем модуль. Берем данные по магазину из https://www.platron.ru/admin/merchants.php и заполняем остальные настройки
4. Shop-script 5 не позволяет проверять статус заказа на запросе check. Поэтому для отмены заказа необходимо зайти в админку платрона https://www.platron.ru/admin/transactions.php, найти транзакцию и отменить ее до запроса check.

Тестировалось и писалось для Shop Script 5 версия магазина 5.1.9 (можно посмотреть Инсталлер->Приложения->Shop Script 5 или можно посмотреть в файле shop-script-master/lib/config/app.php)
