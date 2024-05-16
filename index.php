<?php // framework/index.php

require_once __DIR__.'/src/pages/init.php';

$input = $request->get('name', 'World');

$response->setcontent(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));
$response->send();