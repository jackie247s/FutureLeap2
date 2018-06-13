<?php 
    include_once dirname(__FILE__) . "/../Layout.php";
    abstract class DivisionPage extends Layout {
        protected $divisionName;
        protected $divisionBreadCrumb;

        protected function _renderPageTitle() {
            ?>
            <section class="page-title parallax <?= $this->backgroundImageStyle ?>">
                <div class="title-heading">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-title">
                                    <h1>
                                        <?= $this->divisionName ?>
                                    </h1>
                                    <div class="breadcrumbs">
                                        <ul>
                                            <li><a href="index.html" title="">Home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                            <li><a href="#" title=""><?= $this->divisionBreadCrumb ?></a></li>
                                        </ul>
                                    </div><!-- /.breadcrumbs -->
                                </div><!-- /.box-title -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.title-heading -->
            <div class="overlay-black"></div>
            </section><!-- /.page-title parallax -->
            <?php
        }

        public function renderPage() {
            ob_start();
            $this->_renderHeader();
            $this->_renderNavbar();
            $this->_renderPageTitle();
            $this->_renderContent();
            $this->_renderFooter();
            ob_end_flush();
        }
    }
?>