<?php
/* Template Name: Schedule page */

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
                $fridayevents = $friday['body'];
                $json = json_decode($fridayevents);
                $data = $json->data; ?>
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

            <div id="Saturday" class="tabcontent">
                <?php $saturday = wp_remote_get('http://35.217.19.28/sell-games-2020/public/index.php/api/events/date/2020-05-16');
                $saturdayevents = $saturday['body'];
                $json = json_decode($saturdayevents);
                $data = $json->data; ?>
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
                $saturdayevents = $saturday['body'];
                $json = json_decode($saturdayevents);
                $data = $json->data;?>
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
                    <td><input type="checkbox" name="day" id="friday"> <label for="friday">Friday</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="saturday"> <label for="saturday">Saturday</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="day" id="saturday"> <label for="saturday">Saturday</label></td>
                </tr>
            </table>
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
</script>

<?php get_footer(); ?>