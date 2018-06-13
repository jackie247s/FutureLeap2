<?php
    include_once 'DivisionPage.php';
    class Infrastructure extends DivisionPage {
        public function __construct() {
            $this->divisionName = "Infrastructure Division";
            $this->divisionBreadCrumb = "Infrastructure";
            $this->backgroundImageStyle = "bgimage-infrastructure";
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
                                            <h4>Electrical Network</h4>
                                            <ul class="services-list">
                                                <li>Detailed Design. Supply, Installation, Testing and Commissioning of electrical equipment (Transformers, 11kV Switchgears, Feeder Pillar, UPS &amp; Battery System)</li>
                                                <li>High Pot Testing, Cable Fault Locating, REF Relay Testing</li>
                                                <li>Control &amp; Relay Panel Wiring: Modification &amp; Refurbishment</li>
                                                <li>Energy &amp; Water Meters</li>
                                                <li>Design Electrical Distribution Networks for LV, MV and HV cables (Trenches, Manholes, Underground Cables)</li>
                                                <li>Supply, Installation, Testing and Commissioning of Electrical Cables (Cable Trays, Cable Ladders, Conduit Pipes)</li>
                                                <li>Upgrading Existing Distribution Networks (Transmission lines, Efficient Electrical Distribution), existing Earthing System, Switchgear and UPS systems</li>
                                                <li>HV Substations (Relay Control Panel Upgrades – Feeder Bay/Capacitor Bank Additions – Construction Management of entirely new Substations)</li>
                                                <li>Replacement, Rerouting &amp; Commissioning of Generators set including Control Panels.</li>
                                                <li>Design, Supply, Installation, Testing &amp; Commissioning of Interruptible Power Supply System required for Substations, Control Rooms etc.</li>
                                            </ul>
                                        </div><!-- /.box-single -->

                                        <div class="box-single">
                                            <h4>Water Network</h4>
                                            <ul class="services-list">
                                                <li>Construction of Drainage basin.</li>
                                                <li>Construction of Raw Water collection point above or below ground (lake, river, or groundwater from an underground aquifer.)</li>
                                                <li>Construction of Water Storage facilities (Reservoirs, Water Tanks, Water Towers.</li>
                                                <li>Installation of Pumping stations and Pipe Network for distribution </li>
                                                <li>Installation of Filtration &amp; Treatment Equipment and Meters</li>
                                                <li>Construction of structures to house equipment (Collection, Treatment &amp; Distribution Units)</li>
                                                <li>Excavation and Directional Drilling</li>
                                                <li>Trenching for Drainage &amp; Sewage Pipelines</li>
                                                <li>Construction of Sustainable Drainage Networks</li>
                                                <li>Pipes laying</li>
                                                <li>Rainwater Basins, Discharge Systems and Marine Outfall</li>
                                                <li>onstruction of Drainage Outlets</li>
                                                <li>Manholes, Overfills, Chutes, Bridges, Pipe Crossings etc.</li>
                                                <li>Joining of Pipes with Major Network.</li>
                                                <li>Back-filling and Bedding</li>
                                                <li>Inspection &amp; Maintenance and Ventilation Provisions</li>
                                                <li>Testing &amp; Commissioning</li>
                                            </ul>
                                        </div><!-- /.box-single -->

                                        <div class="box-single">
                                            <h4>Telecommunication Network</h4>
                                            <p>Laying out a solid telecommunication network is vital to your project needs. Our team of experts specialize in installing copper and fiber-optic cables to develop a Local Area Network (LAN), Metropolitan Area Network (MAN) and Wide Area Network (WAN) for your business project. This process includes:</p>
                                            <ul class="services-list">
                                                <li>Excavation and trenching</li>
                                                <li>De Watering Underground Structure</li>
                                                <li>Duct laying for copper cables and Fiber Optics</li>
                                                <li>Cable laying for copper cables and Fiber Optic cable by Air Blowing method</li>
                                                <li>Fiber Optic Termination</li>
                                                <li>Fiber Optic testing by OTDR method</li>
                                                <li>Telephone Networks (Land Lines) / Telephone Exchange Systems</li>
                                                <li>Final Handing over to the concerned authorities</li>
                                                <li>Supply of Telecom Equipment &amp; Accessories</li>
                                            </ul>
                                        </div><!-- /.box-single -->

                                        <div class="box-single">
                                            <h4>Irrigation Network</h4>
                                            <p>Proper installation and maintenance of irrigation systems is necessary to ensure efficient use of water. To develop a good irrigation network we offer:</p>
                                            <ul class="services-list">
                                                <li>Efficient Construction &amp; Design of Irrigation System.</li>
                                                <li>Installing Irrigation Pumping Station</li>
                                                <li>Installing high quality Materials and Equipment.</li>
                                                <li>Professional Irrigation Systems installation according to the client’s design and specification.</li>
                                                <li>Continuous management for irrigation nets systems</li>
                                                <li>Irrigation Pumping </li>
                                                <li>Hydro-pneumatic System</li>
                                                <li>Water Wells &amp; Reservoirs</li>
                                                <li>Construction of Sewer, Storm Water Manholes and associated Pipe Laying</li>
                                                <li>Testing via GRP pipes</li>
                                                <li>Construction &amp; Testing of DEWA Water Lines &amp; Irrigation Mains (Chambers) </li>
                                                <li>Fire-fighting Pipeline Networks</li>
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