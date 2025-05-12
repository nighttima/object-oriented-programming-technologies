<?php
require_once 'Request.php';

interface Handler {
    public function setNext(Handler $handler): Handler;
    public function handle(Request $request): void;
}
