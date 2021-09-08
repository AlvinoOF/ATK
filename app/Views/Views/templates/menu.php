<?php 
    if (in_groups('admin')) :
        echo $this->include('templates/menu_admin');
    else :
        echo $this->include('templates/menu_user');
    endif;  
?>