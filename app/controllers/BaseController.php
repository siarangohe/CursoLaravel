<?php

class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout() {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    // Cuando se genere un error, lo redireccione al perfil
    public function missingMethod($parameters = array()) {
        return Redirect::to("/profile");
    }

}
