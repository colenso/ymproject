<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pageloader
 *
 * @author Colenso
 */
class page_loader extends CI_Model {
    //put your code here
    public function loadHomepage(){
        $pageData=array(
            'mainContent'=>'HomePage'
        );
        $this->load->view('/template/middle',$pageData);
    }
    
    public function loadAddParticipantGroupPage(){
        $pageData=array(
            'mainContent'=>'AddParticipantGroupPage'
        );
        $this->load->view('/template/middle',$pageData);
    }
}

?>
