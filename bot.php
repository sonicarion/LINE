<?php
$access_token = 'n1KiuALeq1h4AR4EoaEI3Ifu/CYEN39Px/MZP2d9D5ejgrlN+XNYUeWXPFvJiJBjuT/mpUkoTrQJ8xJaw0SmtOCJj0FDmolv1Eotw8yZlCLivmstS+uBSRXNTw/WtjS74ea/taGLfeUKNsWfkw596gdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
		header("Location: http://www.yourwebsite.com/user.php"); /* Redirect browser */
exit();
		}
	}
}
echo "OK";
