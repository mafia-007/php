<?php
	$mensagem = isset($texto[1]) ?
		'<pre>' . md5(removerComando($texto[0], $mensagens['message']['text'])) . '</pre>' :
		'📚: /md5 ' . DADOS_BOT['result']['first_name'];

	sendMessage($mensagens['message']['chat']['id'], $mensagem, $mensagens['message']['message_id'], null, true);
