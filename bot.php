<?php
$access_token = 'n1KiuALeq1h4AR4EoaEI3Ifu/CYEN39Px/MZP2d9D5ejgrlN+XNYUeWXPFvJiJBjuT/mpUkoTrQJ8xJaw0SmtOCJj0FDmolv1Eotw8yZlCLivmstS+uBSRXNTw/WtjS74ea/taGLfeUKNsWfkw596gdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
header("Location: http://sonictest.somee.com/api.aspx?json="+ $events); /* Redirect browser */
exit();

echo "OK";
