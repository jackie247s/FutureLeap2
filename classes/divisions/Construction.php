<?php
    include_once 'DivisionPage.php';
    class Construction extends DivisionPage {
        public function __construct() {
            $this->divisionName = "Construction Division";
            $this->divisionBreadCrumb = "Construction";
            $this->backgroundImageStyle = "bgimage-construction";
        }

        protected function _renderContent() {
            ?>
            <section id="main-blog" class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-post">
                                <article class="blog-post single style1">
                                    <div class="entry-post-title">
                                        <div class="post-title">											
                                            <h2>
                                                <a href="#" title=""><?= $this->divisionBreadCrumb ?></a>
                                            </h2>
                                        </div>
                                    </div><!-- /.entry-post-title -->
                                    <div class="content-post">
                                        <p>With regards to civil services, we are well experienced with constructing complex and retaining walls or structures. In addition, we also offer remedial services for damaged structures which need a rebuild, be it partial or full. Our capability to fully survey and lead our team of experts means that we can take on the most technically demanding projects with confidence.</p>
                                        <div class="box-single">
                                            <h4>Scope of Work</h4>
                                            <ul class="services-list">
                                                <li>Demolition of existing foundations</li>
                                                <li>Retrofitting existing foundations to fit new equipment</li>
                                                <li>Reinforcing older building foundations</li>
                                                <li>Excavation and compaction</li>
                                                <li>Underground utilities</li>
                                                <li>Engineered form systems</li>
                                                <li>Rebar installation</li>
                                                <li>Complex reinforced cast-in-place foundations</li>
                                                <li>Precision anchor bolt and embed placement</li>
                                                <li>Reinforced slab-on-grade placement and finish</li>
                                            </ul>
                                        </div><!-- /.box-single -->
                                    </div><!-- /.content-post -->
                                </article><!-- /.blog-post -->
                                
                            </div><!-- /.wrap-post -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /#main-blog -->
            <?php
        }
    }
?>