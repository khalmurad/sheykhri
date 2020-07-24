<?php

require './config.php';

$bot = new BOT('TOKEN');

$language = new i18n();
$language->setPrefix('T');
$language->setFallbackLang('uz');
$language->init();

$api = new API($bot);
$db = new DB();
$user = new USER($db);

$update = json_decode(file_get_contents('php://input'));
if (isset($update)) {
	
	if (isset($update->message->text)) {
		$message = $update->message;
		$message_date = $message->date;
		$chat_id = $message->chat->id;
		$from_id = $message->from->id;
		$message_id = $message->message_id;
		$text = $message->text;
		
		$bot->setText($text);
		$bot->setChatId($chat_id);
		$user->setUserId($chat_id);
	}
	
	if (isset($update->callback_query)) {
		$callback = $update->callback_query;
		$message_date = time(); //$callback->message->date;
		$chat_id = $callback->message->chat->id;
		$from_id = $callback->from->id;
		$message_id = $callback->message->message_id;
		$callback_id = $callback->id;
		$data = $callback->data;
		
		$bot->setChatId($from_id);
		$user->setUserId($from_id);
	}
	
}

if (isset($data)) {

	if ($data == 'test') {
		$api->deleteMessage(['message_id' => $message_id]);
		$api->sendMessage(['text' => T::start, 'parse_mode' => 'HTML']);
		exit;
	}
	
}

if ($bot->text('start')) {
	$keyboard = new keyboard();
	$keyboard->addButton([T::testTugma, T::testTugma]);
	$keyboard->addButton([T::testTugma]);
	$api->sendMessage(['text' => T::start, 'parse_mode' => 'HTML', 'reply_markup' => $keyboard->getButton()]);
	
	$keyboard = new keyboard();
	$keyboard->addInline([T::testTugma => 'test', T::testTugma => 'test']);
	$api->sendMessage(['text' => T::start, 'parse_mode' => 'HTML', 'reply_markup' => $keyboard->getInline()]);
	exit;
	
} else if ($bot->text(T::testTugma)) {
	$api->sendMessage(['text' => T::testTugma, 'parse_mode' => 'HTML']);
	exit;
}