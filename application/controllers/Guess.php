<?php

/**
 * The quote with a mug shot.
 * 
 * controllers/Guess.php
 *
 * ------------------------------------------------------------------------
 */
class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // grab the content for this person
        $source = $this->quotes->get('4');
        
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];        
        $this->data['what'] = $source['what'];

        $this->render();
    }
    
}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */