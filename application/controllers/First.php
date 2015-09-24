<?php

/**
 * The first mug shot with quote.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // grab the content for this person
        $source = $this->quotes->first();
        
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];        
        $this->data['what'] = $source['what'];

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */