<?php
require_once 'BaseHandler.php';

class DiscountHandler extends BaseHandler {
    public function handle(Request $request): void {
        if ($request->type === 'discount') {
            echo "Знижка застосована\n";
        } else {
            parent::handle($request);
        }
    }
}
