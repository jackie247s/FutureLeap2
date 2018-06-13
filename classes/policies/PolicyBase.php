<?php 
    include_once dirname(__FILE__)."/../Layout.php";
    abstract class PolicyBase extends Layout {
        public function renderPage() {
            ob_start();
            $this->_renderHeader();
            $this->_renderNavbar();
            $this->_renderContent();
            $this->_renderFooter();
            ob_end_flush();
        }
    }
?>