<?php
require_once 'BaseHandler.php';

class AvailabilityHandler extends BaseHandler {
    public function handle(Request $request): void {
        if ($request->type === 'availability') {
            echo "Доступність перевірена\n";
        } else {
            parent::handle($request);
        }
    }
}
