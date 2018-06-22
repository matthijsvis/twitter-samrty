<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 14-06-18
 * Time: 14:39
 */

include_once ('../includes/connect.php');
require ('../includes/smarty-3.1.32/libs/smarty.class.php');

$template = new Smarty();

$data = $db->query('SELECT user.name, tweet.title, tweet.tweet FROM user, tweet WHERE user.id=tweet.id');
$tweets = $data->fetchAll(PDO::FETCH_ASSOC);

$template->assign('tweets', $tweets);
$template->display('../template/index.tpl');




