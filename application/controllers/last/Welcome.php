<?php

/**
 * The last mug shot with quote.
 * 
 * controllers/last/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // grab the content for the last person
        $source = $this->quotes->last();
        
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];        
        $this->data['what'] = $source['what'];

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */