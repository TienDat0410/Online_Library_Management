<?php

$headers=[
    "User- Agent: Example REST API Client",
    "Authorization: token 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"
];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true
]);

return $ch;