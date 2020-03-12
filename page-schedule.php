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

            <div id="Friday">
                <h2>Friday 15.5</h2>
                <?php $friday = wp_remote_get('https://sellgames2020.fi/backend/api/events/date/2020-05-15');
                $fridayevents = json_decode($friday['body']);
                $data = $fridayevents->data;

                foreach($data as &$event) {?>
                    <ul class="class-<?php echo $event->sport->id ?>">
                        <li class="eventname"><?php echo $event->name ?></li>
                        <li><?php echo $event->start_time ?> - <?php echo $event->end_time ?></li>
                        <li><?php echo $event->venue->name ?></li>
                    </ul>
                <?php } ?>
            </div>

            <div id="Saturday">
                <h2>Saturday 16.5</h2>
                <?php $saturday = wp_remote_get('https://sellgames2020.fi/backend/api/events/date/2020-05-16');
                $saturdayevents = json_decode($saturday['body']);
                $data = $saturdayevents->data;

                foreach($data as &$event) {?>
                    <ul class="class-<?php echo $event->sport->id ?>">
                        <li class="eventname"><?php echo $event->name ?></li>
                        <li><?php echo $event->start_time ?> - <?php echo $event->end_time ?></li>
                        <li><?php echo $event->venue->name ?></li>
                    </ul>
                <?php } ?>
            </div>

            <div id="Sunday">
                <h2>Sunday 17.5</h2>
                <?php $saturday = wp_remote_get('https://sellgames2020.fi/backend/api/events/date/2020-05-17');
                $saturdayevents = json_decode($saturday['body']);
                $data = $saturdayevents->data;

                foreach($data as &$event) {?>
                    <ul class="class-<?php echo $event->sport->id ?>">
                        <li class="eventname"><?php echo $event->name ?></li>
                        <li><?php echo $event->start_time ?> - <?php echo $event->end_time ?></li>
                        <li><?php echo $event->venue->name ?></li>
                    </ul>
                <?php } ?>
                </table>
            </div>

        </div>
        <div id="sidebar-container" class="col-lg-4 col-sm-12">
                <input type="checkbox" name="" id=""><label>Show all</label>
                <input type="checkbox" name="" id=""><label>Hide all</label>
            <h2>Sport</h2>
            <table>
                <tr>
                    <td><input type="checkbox" id="athletics" class="toggle"></input><label for="athletics">Athletics</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="wrestling" class="toggle"></input><label for="wrestling">Wrestling</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="judo" class="toggle"></input><label for="judo">Judo</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="basketball" class="toggle"></input><label for="basketball">Basketball</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="volleyball" class="toggle"></input><label for="volleyball">Volleyball</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="floorball" class="toggle"></input><label for="floorball">Floorball</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="football" class="toggle"></input><label for="football">Football</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="tabletennis" class="toggle"></input><label for="tabletennis">Table tennis</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="orienteering" class="toggle"></input><label for="orienteering">Orienteering</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="discgolf" class="toggle"></input><label for="discgolf">Disc golf</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="molkky" class="toggle"></input><label for="molkky">Mölkky</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="esports" class="toggle"></input><label for="esports">Esports</label></td>
                </tr>
            </table>
            <h2>Day</h2>
            <table>
                <tr>
                    <td><input type="checkbox" id="friday" class="toggle"></input><label for="friday">Friday</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="saturday" class="toggle"></input><label for="saturday">Saturday</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="sunday" class="toggle"></input><label for="sunday">Sunday</label></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php get_footer(); ?>