<?php 
    include_once 'DivisionPage.php';
    class MEP extends DivisionPage {
        public function __construct() {
            $this->divisionName = "MEP Division";
            $this->divisionBreadCrumb = "Mechanical, Electrical &amp; Plumbing";
            $this->backgroundImageStyle = "bgimage-mep";
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
                                        <p>
                                            Our dedicated team of engineers, under the supervision of highly qualified and experienced experts, covers the entire range
                                            of Mechanical, Electrical, and Plumbing works. In short, these include HVAC (Heating Ventilation & Air-Conditioning), electrical
                                            works, and plumbing and drainage. Future Leap’s team of workers, project managers, designers, engineers and supervisors are
                                            nothing less than perfectionists who obsess over executing projects with an extra-ordinary precision and skills.
                                        </p>
                                        <div class="box-single">
                                            <h4>Mechanical</h4>
                                            <p>We provide customized and innovative solutions for installing, testing, and commissioning HVAC systems for residential, commercial
                                            and industrial projects. Our team of experts help optimize your energy consumption and provide maintenance for HVAC systems
                                            in accordance with some of the most vigorous international industry standards. We offer:</p>
                                            <ul class="services-list">
                                                <li>Chilled water system (installation of Chillers, Heat Exchangers, Pumps, Air Handling units & Fan Coil units, Floor convectors
                                                etc.)</li>
                                                <li>Chilled Water Piping, Condensate Water Piping, Refrigerant Piping including their respective insulation.</li>
                                                <li>Air-Conditioning Systems (Packaged Unit system, VRV, Ducted Split Unit and Split Unit)</li>
                                                <li>Air Treatment (Installation of Fans and Basement Ventilation System), Smoke Management and District Cooling, Heating & Ventilation</li>
                                                <li>Installation of Ducting works (GI, Aluminum & Stainless Steel and their insulation) for various applications with respective
                                                Air Terminal Devices.</li>
                                                <li>BMS Automation & Control </li>
                                                <li>Refrigeration & Cold Storage</li>
                                                <li>MI threaded fittings</li>
                                                <li>Air Balancing & Commissioning</li>
                                                <li>Mechanical Piping / Pipefitting /Pump rebuilds and alignments</li>
                                                <li>Valves, Conveyors, Welding</li>
                                            </ul>

                                        </div><!-- /.box-single -->
                                        <div class="box-single">
                                            <h4>Electrical</h4>
                                            <h4>Power System</h4>
                                            <p>We also provide electrical solutions to our clients. From electrical substations, commercial, industrial, institutional electrical
                                            site work for construction to distribution and relocation services, Future Leap’s offers you the finest electrical solutions</p>
                                            <h4>Low-current and ELV</h4>
                                            <p>ELV systems are an essential part of every project. They include systems such as a fire-alarm, telephone connections and
                                            CCTV.</p>
                                        </div><!-- /.box-single -->

                                        <div class="box-single">
                                            <h4>Plumbing</h4>
                                            <h4>Water Network</h4>
                                            <ul class="services-list">
                                                <li>Hot/Cold Water Supply (Storage Tanks, Filling pumps and Booster pumps)</li>
                                                <li>Plumbing &amp; Sanitation</li>
                                                <li>Water Treatment</li>
                                                <li>Irrigation System</li>
                                                <li>Generator Fuel Handling System</li>
                                                <li>Compressed Air</li>
                                                <li>Gas &amp; Medical Piping</li>
                                                <li>Process Piping</li>
                                            </ul>
                                            <h4>Drainage</h4>
                                            <ul class="services-list">
                                                <li>Drainage &amp; Sewage</li>
                                                <li>Storm Water</li>
                                                <li>Wastewater Treatment</li>
                                                <li>UPVC / ESVC / DI Soil</li>
                                                <li>Waste </li>
                                                <li>Vent</li>
                                                <li>Rain Water Pipes</li>
                                                <li>Lifting Station</li>
                                                <li>Floor Drains</li>
                                                <li>Cleanouts</li>
                                            </ul>
                                        </div>
                                        <!-- /.box-single -->
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