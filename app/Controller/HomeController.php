<?php 
class HomeController extends AppController 
{ 
        var $uses = null; 
        function index() 
        { 
                $this->set('title', 'Finance'); 
                $this->set("title_for_layout","Finance");
                

        } 
} 

?>