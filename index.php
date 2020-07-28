$apiToken = "apiToken";
$chat_id = '@last_today';
$content = ['text' => '<b><a href="https://last.today">this is a bold text</a></b>', 'parse_mode' => 'HTML','chat_id' => $chat_id];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($content) );
