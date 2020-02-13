<?php
/* Template Name: Schedule page */

/* 
    SPORT ID:
        athletics: 
            100m: 16 (M) and 1 (W)
            200m: 17 (M) and 2 (W)
            800m: 19 (M) and 4 (W)
            1500m: 20 (M) and 5 (W)
            3000m: 21 (M) and 6 (W)
            high jump: 24 (M) 9 (W)
            javelin throw: 27 (M) and 13 (W)
            pole vault: 30 (M) and 15 (W)
            discus: 14 (M) and 14 (W)
            long jump: 10 (W)
        wrestling: 
        judo: 
        basketball: 34 (M) and 33 (W)
        volleyball:  and 38 (W)
        Floorball: 35 (M) and 36 (W)
        football: 32 (M) and 31 (W)
        table tennis:
        orienteering:
        disc golf:
        Mölkky: 45
        esport:
        Festival: 52
*/

get_header(); ?>

<div class="main-content">
    <div class="row">
        <div id="main-content-container" class="col-lg-8 col-sm-12">
            <h1>Schedule</h1>

            <div class="tab">
                <button class="tablinks" onclick="openDate(event, 'Friday')">Friday</button>
                <button class="tablinks" onclick="openDate(event, 'Saturday')">Saturday</button>
                <button class="tablinks" onclick="openDate(event, 'Sunday')">Sunday</button>
            </div>

            <div id="Friday" class="tabcontent">
                <?php $friday = wp_remote_get('http://35.217.19.28/sell-games-2020/public/index.php/api/events/date/2020-05-15');
                $fridayevents = json_decode($friday['body']);
                $data = $fridayevents->data; ?>
                <table>
                    <?php foreach($data as &$event) {?>
                        <tr class="class-<?php echo $event->sport->id ?>">
                            <td>
                            <p><?php echo $event->start_time ?> - <?php echo $event->end_time ?></p>
                            </td>
                            <td>
                                <p class="eventname"><?php echo $event->name ?></p>
                                <p><?php echo $event->venue->name ?></p>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <div id="Saturday" class="tabcontent">
                <?php $saturday = wp_remote_get('http://35.217.19.28/sell-games-2020/public/index.php/api/events/date/2020-05-16');
                $saturdayevents = json_decode($saturday['body']);
                $data = $saturdayevents->data; ?>
                <table>
                    <?php foreach($data as &$event) {?>
                        <tr>
                            <td>
                                <p><?php echo $event->start_time ?> - <?php echo $event->end_time ?></p>
                            </td>
                            <td>
                                <p class="eventname"><?php echo $event->name ?></p>
                                <p><?php echo $event->venue->name ?></p>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <div id="Sunday" class="tabcontent">
                <?php $saturday = wp_remote_get('http://35.217.19.28/sell-games-2020/public/index.php/api/events/date/2020-05-17');
                $saturdayevents = json_decode($saturday['body']);
                $data = $saturdayevents->data;
                ?>
                <table>
                    <?php foreach($data as &$event) {?>
                        <tr>
                            <td>
                            <p><?php echo $event->start_time ?> - <?php echo $event->end_time ?></p>
                            </td>
                            <td>
                                <p class="eventname"><?php echo $event->name ?></p>
                                <p><?php echo $event->venue->name ?></p>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

        </div>
        <div id="sidebar-container" class="col-lg-4 col-sm-12">
            <h2>Sport</h2>
            <table>
                <tr>
                    <td><input type="checkbox" name="day" id="athletics"> <label for="athletics">Athletics</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="wrestling"> <label for="wrestling">Wrestling</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="judo"> <label for="judo">Judo</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="basketball"> <label for="basketball">Basketball</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="volleyball"> <label for="volleyball">Volleyball</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="floorball"> <label for="floorball">Floorball</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="football" onclick="filterSport()"> <label for="football">Football</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="tabletennis"> <label for="tabletennis">Table tennis</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="orienteering"> <label for="orienteering">Orienteering</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="discgolf"> <label for="discgolf">Disc golf</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="molkky"> <label for="molkky">Mölkky</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="esports"> <label for="esports">Esports</label></td>
                </tr>
            </table>
            <button onclick='filterSport()'>Football</button>
        </div>
    </div>
</div>
<script>
    function openDate(evt, day) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");

    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");

    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(day).style.display = "block";
    evt.currentTarget.className += " active";
    }

    function filterSport () {
        var appBanners = document.getElementsByClassName('class-31');
        var classes = ["class-31", "class-32", "class-35", "class-36"];

        if (document.getElementById("football").checked == true) {
            
        }
        for (var i = 0; i < appBanners.length; i ++) {
            appBanners[i].style.display = 'none';
        }
    }
</script>

<?php get_footer(); ?>