<?php

return array(
    'merchant'   => array(
        'value'        => '',
        'title'        => 'Номер магазина (merchant_id)',
        'description'  => 'Можно посмотреть <a href="https://paybox.kz/admin/merchants.php">в личном кабинете PayBox</a>',
        'control_type' => waHtmlControl::INPUT,
    ),

    'secret_key'   => array(
        'value'        => '',
        'title'        => 'Секретный ключ магазина',
        'description'  => 'Можно посмотреть <a href="https://paybox.kz/admin/merchants.php">в личном кабинете PayBox</a>',
        'control_type' => waHtmlControl::INPUT,
    ),
	'lifetime'         => array(
        'value'        => '0',
        'title'        => 'Время жизни счета в минутах',
        'description'  => 'Максимальное значение 60*24*7. Запрос check невозможно реализовать из-за отсутствия доступа из плагина к заказу. Поэтому заказы нельзя удалять или отменять.',
        'control_type' => waHtmlControl::INPUT,
    ),
    'testmode'         => array(
        'value'        => '1',
        'title'        => 'Тестовый режим',
        'description'  => 'Для того, чтобы проводить реальные платежи нужно установить в 0',
        'control_type' => waHtmlControl::CHECKBOX,
    ),
);
