<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 03.06.2017
 * Time: 12:55
 */
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);

include __DIR__ . '/init.php';

$news = new \models\News();
$news->insert([
    'title' => 'через код',
    'content' => 'текст текст',
    'dt_add' => time()
]);
\core\Debug::prn($news->find()->all());

$routing = new \core\Rout();
$routing->initRouting();

