<?php 
class HomesController extends AppController 
{ 
        var $uses = null; 

        function index() 
        { 
                $this->set('title', 'Home Page'); 
        } 
} 

?>