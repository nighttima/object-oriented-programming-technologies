<?php
require_once 'BaseHandler.php';

class ManagerApprovalHandler extends BaseHandler {
    public function handle(Request $request): void {
        if ($request->type === 'approval') {
            echo "Погоджено менеджером\n";
        } else {
            parent::handle($request);
        }
    }
}
