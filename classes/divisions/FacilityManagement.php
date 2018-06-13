<?php
    include_once 'DivisionPage.php';
    class FacilityManagement extends DivisionPage {
        public function __construct() {
            $this->divisionName = "Facility Management Division";
            $this->divisionBreadCrumb = "Facility Management";
            $this->backgroundImageStyle = "bgimage-facilitymanagement";
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
                                        <p>For all your projects, we offer facility management services which include civil maintenance, electrical system, MEPD system and firefighting system. In addition, we also specialize in carrying out refurbishment work for industrial and building services. </p>
                                        <div class="box-single">
                                            <h4>Scope of Work</h4>
                                            <ul class="services-list">
                                                <li>Facility Management &amp; Annual Maintenance Contract for Residential &amp; Commercial buildings, Shopping Malls, Sports Facilities, Hospitals etc.</li>
                                                <li>Facility Maintenance &amp; Management for Electrical systems for Low Voltage, Medium Voltage &amp; High voltage and Telecommunication systems.</li>
                                                <li>Refurbishment work for building services, industrial services, oil &amp; gas services etc.</li>
                                                <li>We also offer System commissioning for HVAC Systems, Electrical Systems (HV Switchgear, Power & Distribution Transformer, Transformer, Filtration & Testing, Diesel Generator etc.), Plumbing Systems, Controls System, Fire Fighting System, re-commissioning etc.</li>
                                                <li>Coating services</li>
                                                <li>Energy management solutions</li>
                                                <li>Facility maintenance</li>
                                                <li>Janitorial services</li>
                                                <li>Commercial landscaping and grounds maintenance</li>
                                                <li>Building preventive/predictive maintenance</li>
                                                <li>Production maintenance &amp; support</li>
                                                <li>Waste management</li>
                                                <li>Scaffolding services</li>
                                                <li>Scheduling and planning</li>
                                                <li>Capital planning</li>
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