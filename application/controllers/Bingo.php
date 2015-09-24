<?php

/**
 * The quote with a mug shot.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  
    //-------------------------------------------------------------
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // grab the content for this person
        $source = $this->quotes->get('5'); //Grabbing the 4th person and their quote.
        
        //Map the quote information to the justone view. 
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];        
        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */