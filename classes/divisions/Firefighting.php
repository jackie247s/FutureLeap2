<?php
    include_once 'DivisionPage.php';
    class Firefighting extends DivisionPage {
        public function __construct() {
            $this->divisionName = "Firefighting Division";
            $this->divisionBreadCrumb = "Firefighting";
            $this->backgroundImageStyle = "bgimage-firefighting";
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
                                                <li>Integrated Fire Alarm System</li>
                                                <li>Wet Riser</li>
                                                <li>Dry Riser (Seamless / Welded / Galvanized Pipe works)</li>
                                                <li>Threaded / Grooved Fittings</li>
                                                <li>Pipe Supports</li>
                                                <li>Fire Fighting Pumps</li>
                                                <li>Hose Reel Cabinets</li>
                                                <li>Fire Extinguishers</li>
                                                <li>Hydraulically calculated Sprinkler System (Piping, Valves / Controls)</li>
                                                <li>Alarm Check &amp; Landing Valves</li>
                                                <li>Emergency lights &amp; Signage</li>
                                                <li>Supervisory Devices &amp; Tamper Switch</li>
                                                <li>Flow Switches</li>
                                                <li>Complete System Accessories</li>
                                                <li>Test / Drain Valves &amp; Pressure Gauges</li>
                                                <li>Fire Hydrants &amp; Fire Department Connections</li>
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