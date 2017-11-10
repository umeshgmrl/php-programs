<div class="row">
    <!--tab content-->
    <div class="wrap" style="border-bottom: 2px solid #ccc !important;">
        <div class="row">
            <div class="col m8 s12 l8 offset-l2 offset-m2 center route_info_text">
                <h1 class="heading">Expressway Route 100X: From Dublin To Dundalk</h1>
                <p>Departing from Wilton Terrace in Dublin 2, the Expressway Route 100X bus service travels express to Dundalk and back.</p>
                <p>Passing through Dublin Airport, Drogheda and Dundalk IT en route, it arrives at Long Walk in the centre of Dundalk.</p>
                <p>he journey time from Dundalk to Dublin is approximately one hour and 55 minutes, making the Expressway Route 100X service one of the fastest ways of travelling between Dundalk and Dublin. It's also one of the most convenient, with 20 buses
                    leaving Dublin and 18 departing from Dundalk per day.</p>

                <p>Onboard services include extra-comfortable seats, Wi-Fi access and charging points.</p>
                <p>Book in advance as seats are limited on this route.</p>

            </div>

            <div class="col m12 s12 l12 center">
                <a href="javascript:void(0)" onclick="changeTab('routeinfo')" class="maplink">
                    <p class="read_more" style="color:red">CLOSE TIMETABLE</p>
                </a>
                <a href="javascript:void(0)" onclick="changeTab('timetable')" class="timetablelink" style="display:none">
                    <p class="read_more" style="color:red">VIEW TIMETABLE</p>
                </a>
            </div>
        </div>
    </div>
    <div id="timetable" class="col l11  m11 s11 time_table" style="display: block;">
        <div class="wrap row">
            <div class="col l12  m12 s12">
                <label class="show_time">Show time table for ...</label>
            </div>
            <div class="input-field col l8  m8 s12">

                <a class='dropdown-button btn selectBtn' href='#' data-activates='dropdown1'><span id="weekDay">Monday To Sunday<span class="caret">&#9660;</span></span> </a>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content selectBtn-option'>
                    <li><a href="#!" onclick="changeWeekdays(this,'#tableM-F')">Daily (including Public Holidays)</a>
                    </li>
                </ul>
            </div>
            <div class="input-field col l2  m2 s2 imgUpDown">
                <a href="javascript:void(0)" <?php if($_REQUEST[ 'direct']=="forward" ) { ?>onclick="changeTable(this,'#tableM-F-reverse')" <?php } else {?> onclick="changeTable(this,'#tableM-F')" <?php } ?> class="changeDirection"  ><img src="images/icons/updownarrow.png" /></a>
            </div>
            <div class="print_pdf">
                <a href="http://www.buseireann.ie/timetables/1425901973-100X.pdf" target="_blank">
                    <img src="images/icons/print_red.png">
                </a>
                <a href="http://www.buseireann.ie/timetables/1425901973-100X.pdf" target="_blank">
                    <img src="images/icons/pdf.png">
                </a>
            </div>
        </div>
        <div id="tableM-F" class="row route-table" <?php if($_REQUEST[ 'direct']=="reverse" ) {?>style="display:none"
            <?php } ?>>
            <table class="bordered table_route s12 m12 l12">
                <thead class="route_head">
                    <tr>
                        <th>SERVICE NUMBER</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>&nbsp;</th>
                        <th>100X</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td>SSuX</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>SSuX</td>
                        <td>&nbsp;</td>
                        <td>SSuX</td>
                        <td>&nbsp;</td>
                        <td>SSuX</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>E</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>C</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>C</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>C</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Wilton Terrace</td>
                        <td>....</td>
                        <td>0640</td>
                        <td>0740</td>
                        <td>0840</td>
                        <td>0940</td>
                        <td>1040</td>
                        <td>1140</td>
                        <td>1240</td>
                        <td>1340</td>
                        <td>1440</td>
                        <td>1540</td>
                        <td>....</td>
                        <td>1640</td>
                        <td>....</td>
                        <td>1740</td>
                        <td>....</td>
                        <td>1840</td>
                        <td>1940</td>
                        <td>2040</td>
                        <td>2140</td>
                        <td>....</td>
                        <td>2340</td>
                    </tr>
                    <tr>
                        <td>Custom House Quay</td>
                        <td>....</td>
                        <td>0700P</td>
                        <td>0800P</td>
                        <td>0900P</td>
                        <td>1000P</td>
                        <td>1100P</td>
                        <td>1200P</td>
                        <td>1300P</td>
                        <td>1400P</td>
                        <td>1500P</td>
                        <td>1600P</td>
                        <td>1600</td>
                        <td>1700P</td>
                        <td>1700</td>
                        <td>1800P</td>
                        <td>1800</td>
                        <td>1900P</td>
                        <td>2000P</td>
                        <td>2100P</td>
                        <td>2200P</td>
                        <td>....</td>
                        <td>0000P</td>
                    </tr>
                    <tr>
                        <td>Airport (Atrium Rd, Zone 11)</td>
                        <td>....</td>
                        <td>0720P</td>
                        <td>0820P</td>
                        <td>0920P</td>
                        <td>1020P</td>
                        <td>1120P</td>
                        <td>1220P</td>
                        <td>1320P</td>
                        <td>1420P</td>
                        <td>1520P</td>
                        <td>1620P</td>
                        <td>1620P</td>
                        <td>1720P</td>
                        <td>1720P</td>
                        <td>1820P</td>
                        <td>1820P</td>
                        <td>1920P</td>
                        <td>2020P</td>
                        <td>2120P</td>
                        <td>2220P</td>
                        <td>....</td>
                        <td>0020P</td>
                    </tr>
                    <tr>
                        <td>Drogheda (Bus Station)</td>
                        <td>0800</td>
                        <td>0800</td>
                        <td>0900</td>
                        <td>1000</td>
                        <td>1100</td>
                        <td>1200</td>
                        <td>1300</td>
                        <td>1400</td>
                        <td>1500</td>
                        <td>1600</td>
                        <td>1700</td>
                        <td>1700</td>
                        <td>1800</td>
                        <td>1800</td>
                        <td>1900</td>
                        <td>1900</td>
                        <td>2000</td>
                        <td>2100</td>
                        <td>2200</td>
                        <td>2300</td>
                        <td>....</td>
                        <td>0100</td>
                    </tr>
                    <tr>
                        <td>Dunleer</td>
                        <td>....</td>
                        <td>....</td>
                        <td>0910</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>1810</td>
                        <td>1810</td>
                        <td>1910</td>
                        <td>1910</td>
                        <td>2010</td>
                        <td>2110</td>
                        <td>2210</td>
                        <td>2310</td>
                        <td>....</td>
                        <td>105</td>
                    </tr>
                    <tr>
                        <td>Castlebellingham (Paul's)</td>
                        <td>....</td>
                        <td>....</td>
                        <td>0920</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>1820</td>
                        <td>1820</td>
                        <td>1920</td>
                        <td>1920</td>
                        <td>2020</td>
                        <td>2120</td>
                        <td>2220</td>
                        <td>2320</td>
                        <td>....</td>
                        <td>115</td>
                    </tr>
                    <tr>
                        <td>Dundalk I.T.</td>
                        <td>0830</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>D</td>
                        <td>....</td>
                        <td>D</td>
                    </tr>
                    <tr>
                        <td>Dundalk (Long Walk)</td>
                        <td>....</td>
                        <td>0835</td>
                        <td>0935</td>
                        <td>1035</td>
                        <td>1135</td>
                        <td>1235</td>
                        <td>1335</td>
                        <td>1435</td>
                        <td>1535</td>
                        <td>1635</td>
                        <td>1735</td>
                        <td>1735</td>
                        <td>1835</td>
                        <td>1835</td>
                        <td>1935</td>
                        <td>1935</td>
                        <td>2035</td>
                        <td>2135</td>
                        <td>2235</td>
                        <td>2335</td>
                        <td>....</td>
                        <td>0130</td>
                    </tr>

                </tbody>
            </table>

        </div>
        <div id="tableM-F-reverse" class="row route-table" <?php if($_REQUEST[ 'direct']=="forward" ) {?>style="display:none"
            <?php } ?>>
            <table class="bordered table_route s12 m12 l12">
                <thead class="route_head">
                    <tr>
                        <th>SERVICE NUMBER</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                        <th>100X</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>SSuX</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>SSuX</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>C</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Dundalk (Long Walk)</td>
                        <td>0330</td>
                        <td>0430</td>
                        <td>0530</td>
                        <td>....</td>
                        <td>0630</td>
                        <td>0730</td>
                        <td>....</td>
                        <td>0830</td>
                        <td>0930</td>
                        <td>1030</td>
                        <td>1130</td>
                        <td>1230</td>
                        <td>1330</td>
                        <td>1430</td>
                        <td>1530</td>
                        <td>1630</td>
                        <td>1730</td>
                        <td>1830</td>
                        <td>1930</td>
                        <td>2030</td>
                    </tr>
                    <tr>
                        <td>Dundalk I.T.</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>....</td>
                        <td>P</td>
                        <td>P</td>
                        <td>....</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                        <td>P</td>
                    </tr>
                    <tr>
                        <td>Castlebellingham (Paul's)</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>1740</td>
                        <td>1840</td>
                        <td>1940</td>
                        <td>2040</td>
                    </tr>
                    <tr>
                        <td>Dunleer</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>1750</td>
                        <td>1850</td>
                        <td>1950</td>
                        <td>2050</td>
                    </tr>
                    <tr>
                        <td>Drogheda (Bus Station)</td>
                        <td>400</td>
                        <td>500</td>
                        <td>0600</td>
                        <td>700</td>
                        <td>700</td>
                        <td>800</td>
                        <td>800</td>
                        <td>900</td>
                        <td>1000</td>
                        <td>1100</td>
                        <td>1200</td>
                        <td>1300</td>
                        <td>1400</td>
                        <td>1500</td>
                        <td>1600</td>
                        <td>1700</td>
                        <td>1800</td>
                        <td>1900</td>
                        <td>2000</td>
                        <td>2100</td>
                    </tr>
                    <tr>
                        <td>Millfield Shopping Centre</td>
                        <td>415</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                        <td>....</td>
                    </tr>
                    <tr>
                        <td>Airport (Atrium Rd, Zone 11)</td>
                        <td>0440</td>
                        <td>0540D</td>
                        <td>0640D</td>
                        <td>....</td>
                        <td>0740D</td>
                        <td>0840D</td>
                        <td>0840D</td>
                        <td>0940D</td>
                        <td>1040D</td>
                        <td>1140D</td>
                        <td>1240D</td>
                        <td>1340D</td>
                        <td>1440D</td>
                        <td>1540D</td>
                        <td>1640D</td>
                        <td>1740D</td>
                        <td>1840D</td>
                        <td>1940D</td>
                        <td>2040D</td>
                        <td>2140D</td>
                    </tr>
                    <tr>
                        <td>Dublin (IFSC)</td>
                        <td>....</td>
                        <td>0600D</td>
                        <td>0700D</td>
                        <td>0800D</td>
                        <td>0800D</td>
                        <td>0900D</td>
                        <td>0900D</td>
                        <td>1000D</td>
                        <td>1100D</td>
                        <td>1200D</td>
                        <td>1300D</td>
                        <td>1400D</td>
                        <td>1500D</td>
                        <td>1600D</td>
                        <td>1700D</td>
                        <td>1800D</td>
                        <td>1900D</td>
                        <td>2000D</td>
                        <td>2100D</td>
                        <td>2200D</td>
                    </tr>
                    <tr>
                        <td>Dublin (Wilton Terrace)</td>
                        <td>....</td>
                        <td>0625</td>
                        <td>0725</td>
                        <td>0820</td>
                        <td>0825</td>
                        <td>0925</td>
                        <td>0925</td>
                        <td>1025</td>
                        <td>1125</td>
                        <td>1225</td>
                        <td>1325</td>
                        <td>1425</td>
                        <td>1525</td>
                        <td>1625</td>
                        <td>1725</td>
                        <td>1825</td>
                        <td>1925</td>
                        <td>2025</td>
                        <td>2125</td>
                        <td>2225</td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="wrap center">
            <div class="col s12 m12 l12">
                <div class="row">
                    <p><b> P = Pick-up stop only. &nbsp;&nbsp; D = Drop-off stop only.</b>
                    </p>
                    <p><b> C = Operates during College terms only.</b>
                    </p>
                    <p><b> SSuX = Operates Monday to Friday only − does not operate on Public Holidays.</b>
                    </p>
                    <p><b> NO SERVICES ON CHRISTMAS DAY. ENQUIRE ABOUT ST. STEPHEN’S DAY SERVICES</b>
                    </p>
                    <p><b> SERVICES EX WILTON TERRACE ALSO PICK UP AT: DUBLIN (BAGGOT ST LOWER); DUBLIN (FITZWILLIAM<br>
							   SQUARE); DUBLIN (LEESON ST ORMONDE HSE); DUBLIN (DAWSON ST); AND OPERATE VIA DUBLIN<br>
							   PORT TUNNEL.</b>
                    </p>

                    <p><b> SERVICES TO WILTON TERRACE OPERATE VIA DUBLIN PORT TUNNEL, ALSO DROP-OFF AT:<br>
							   DUBLIN (OPP IFSC); DUBLIN (D’OLIER ST); DUBLIN (TRINITY COLLEGE); DUBLIN (KILDARE STREET);<br>
							   DUBLIN (LEESON ST LOWER CUS).</b>
                    </p>
                    <p><b> CUSTOMERS TRAVELLING TO DUBLIN AIRPORT ARE ADVISED TO PLAN THEIR COACH JOURNEY SO<br>
							   AS TO ARRIVE AT THE AIRPORT AT LEAST ONE HOUR BEFORE THE RECOMMENDED CHECK-IN TIME<br>
							   SHOWN ON THEIR AIRLINE TICKETS.</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="routeinfo" class="col l12 m12 s12" style="display: none;">
        <?php if (isset($_REQUEST[ 'rowNum']) && $_REQUEST[ 'rowNum']!="NA" ) { ?>
        <div class="col s12 m12 l12 no-padding">
            <div id="googleMap" name="googleMap"></div>
        </div>
        <div class="row">
            <?php if(isset($_REQUEST[ 'indirect']) && $_REQUEST[ 'indirect']==1) { ?>
            <div class="col l8 offset-s2 offset-l3 s8  m8 offset-m3">
                <div class="row" style="text-align:center;">
                    <div class="col s3 m2 l2">
                        <img src="images/icons/depart-point.png">
                        <div class="cellcenter col l12 m12 s12 no-padding"><span>Depart<br> Point</span>
                        </div>
                    </div>
                    <div class="col s3 m2 l2">
                        <img src="images/icons/destination-point.png">
                        <div class="cellcenter col l12 m12 s12 no-padding"><span>Destination<br> Point</span>
                        </div>
                    </div>
                    <div class="col s3 m2 l2">
                        <img src="images/icons/middle-point.png">
                        <div class="cellcenter col l12 m12 s12 no-padding"><span>Change<br> Over</span>
                        </div>
                    </div>
                    <div class="col s3 m2 l2">
                        <img src="images/icons/stop-information.png">
                        <div class="cellcenter col l12 m12 s12 no-padding"><span>Stop<br>Information</span>
                        </div>
                    </div>
                    <div id="stopadd" style="display:none;"></div>
                </div>
            </div>
            <?php } else {?>
            <div class="col l8 offset-s2 offset-l4 s8  m9 offset-m4">
                <div class="row" style="text-align:center;">
                    <div class="col s4 m2 l2">
                        <img src="images/icons/depart-point.png">
                        <div class="cellcenter col l12 m12 s12 no-padding"><span>Depart<br> Point</span>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <img src="images/icons/destination-point.png">
                        <div class="cellcenter col l12 m12 s12 no-padding"><span>Destination<br> Point</span>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <img src="images/icons/stop-information.png">
                        <div class="cellcenter col l12 m12 s12 no-padding"><span>Stop<br>Information</span>
                        </div>
                    </div>
                    <div id="stopadd" style="display:none;"></div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>
<?php include_once( "config.php") ?>
<?php if(isset($_REQUEST[ 'indirect']) && $_REQUEST[ 'indirect']==1) { ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $GOOGLE_MAP_KEY ?>&callback=initializeIndirectRoute"></script>
<?php } else {?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $GOOGLE_MAP_KEY ?>&callback=callTripData"></script>
<?php } ?>
<script src="route_info/js/routesInfo.js" type="text/javascript"></script>
<script>
    var rowNum = '<?php echo $_REQUEST['
    rowNum ']; ?>';
    var routeDirection = '<?php echo $_REQUEST['
    direct ']; ?>';

    function changeTable(elem, show) {
        $(elem).closest('#timetable').find('table').closest('.route-table').hide();
        $(elem).closest('#timetable').find(show).show();
        if (show == '#tableM-F') {
            //$(elem).removeAttr('onclick');
            $(elem).attr('onclick', "changeTable(this,'#tableM-F-reverse')");
            routeDirection = 'forward';
            $(elem).closest('#timetable').find('#direction').html('Dublin To Galway');
        } else if (show == '#tableM-F-reverse') {
            //$(elem).removeAttr('onclick');
            $(elem).attr('onclick', "changeTable(this,'#tableM-F')");
            routeDirection = 'reverse';
            $(elem).closest('#timetable').find('#direction').html('Galway To Dublin');
        } else if (show == '#tableS-P') {
            //$(elem).removeAttr('onclick');
            $(elem).attr('onclick', "changeTable(this,'#tableS-P-reverse')");
            routeDirection = 'forward';
            $(elem).closest('#timetable').find('#direction').html('Dublin To Galway');
        } else if (show == '#tableS-P-reverse') {
            //$(elem).removeAttr('onclick');
            $(elem).attr('onclick', "changeTable(this,'#tableS-P')");
            routeDirection = 'reverse';
            $(elem).closest('#timetable').find('#direction').html('Galway To Dublin');
        }
        $(window).resize();
    }

    function changeWeekdays(elem, show) {
        $(elem).closest('#timetable').find('table').closest('.route-table').hide();

        if (show == '#tableM-F') {
            //$(elem).removeAttr('onclick');
            if (routeDirection == 'forward') {
                $(elem).closest('#timetable').find('.changeDirection').attr('onclick', "changeTable(this,'#tableM-F-reverse')");
                //	$(elem).attr('onclick',"changeTable(this,'#tableM-F-reverse')");
                $(elem).closest('#timetable').find(show).show();
                routeDirection = 'forward';
            } else if (routeDirection == 'reverse') {
                $(elem).closest('#timetable').find('.changeDirection').attr('onclick', "changeTable(this,'#tableM-F')");
                $(elem).closest('#timetable').find(show + '-' + routeDirection).show();
                routeDirection = 'reverse';
            }
            $(elem).closest('#timetable').find('.selectBtn').find('#weekDay').html('Monday To Sunday<span class="caret">&#9660;</span>');
        } else if (show == '#tableS-P') {
            if (routeDirection == 'forward') {
                $(elem).closest('#timetable').find('.changeDirection').attr('onclick', "changeTable(this,'#tableS-P-reverse')");
                //	$(elem).attr('onclick',"changeTable(this,'#tableM-F-reverse')");
                $(elem).closest('#timetable').find(show).show();
                routeDirection = 'forward';
            } else if (routeDirection == 'reverse') {
                $(elem).closest('#timetable').find('.changeDirection').attr('onclick', "changeTable(this,'#tableS-P')");
                $(elem).closest('#timetable').find(show + '-' + routeDirection).show();
                routeDirection = 'reverse';
            }
            $(elem).closest('#timetable').find('.selectBtn').find('#weekDay').html('Sunday & Public Holidays<span class="caret">&#9660;</span>');
        }
        $(window).resize();
    }
</script>
