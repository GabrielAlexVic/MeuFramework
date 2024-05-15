<?php // framework/hello.php
require_once __DIR__.'/init.php';
$input = $request->get('name', 'World');
$response->setcontent(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));
$response->send();
