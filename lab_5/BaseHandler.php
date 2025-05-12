<?php
require_once 'Handler.php';

abstract class BaseHandler implements Handler {
    protected ?Handler $next = null;

    public function setNext(Handler $handler): Handler {
        $this->next = $handler;
        return $handler;
    }

    public function handle(Request $request): void {
        if ($this->next) {
            $this->next->handle($request);
        }
    }
}
