<?php
    require_once 'includes/db.events.php';

    $y = $_GET['y'] ?  $_GET['y'] : date('Y');
    $m = $_GET['m'] ?  $_GET['m'] : date('m');
?>
<html>
    <head>
        <title>Calendar</title>
        <style>
            
            ul {
                list-style-type: none;
            }
            li {display: inline;}
            body {font-family: Verdana, sans-serif;}

            /* Month header */
            .month {
            padding: 70px 25px;
            width: 100%;
            background: #1abc9c;
            text-align: center;
            }

            /* Month list */
            .month ul {
            margin: 0;
            padding: 0;
            }

            .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
            }

            /* Previous button inside month header */
            .month .prev {
            float: left;
            padding-top: 10px;
            }

            /* Next button */
            .month .next {
            float: right;
            padding-top: 10px;
            }

            /* Weekdays (Mon-Sun) */
            .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color:#ddd;
            }

            .weekdays tr {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
            }

            /* Days (1-31) */
            #dayson {
                background-color: red;
            }
            #daysoff {
                background-color: red;
            }
            .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
            }

            .days td {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size:12px;
            color: #777;
            }

            /* Highlight the "current" day */
            .days td .active {
            padding: 5px;
            /* Color: Blue Green, Mountain Meadow*/
            background: #1abc9c;
            color: white !important
            }
        </style>
    </head>
    <body>
        <?php

            //display 5 next and 5 previous years of selected year
            for ($i=$y-5; $i<=$y+5; $i++){
                echo '<a href="calendar.php?y='.$i.'&m='.$m.'">'.$i.'</a>&nbsp&nbsp;';  
            }
            echo "<br><br>";

            //months array just like Jan,Feb,Mar,Apr in short format
            $m_array = array('1'=>'Jan', '2'=>'Feb', '3'=>'Mar', '4'=>'Apr', '5'=>'May', '6'=>'Jun', '7'=>'Jul', '8'=>'Aug', '9'=>'Sep', '10'=>'Oct', '11'=>'Nov', '12'=>'Dec');
            //display months
            echo "<div class='month'>";
            echo "<ul>";
            foreach ($m_array as $key=>$val){
                echo '<li><a href="calendar.php?y='.$y.'&m='.$key.'">'.$val.'</a></li>&nbsp&nbsp;';      
            }
            echo "</ul>";
            echo "</div>";
            echo "<br><br>";

            // Get the number of days in the current month
            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $m, $y);

            // Generate the first day of the month
            $firstDayOfMonth = date('N', strtotime("$y-$m-01"));

            //calculate next & prev month
            $next_y=(($m+1)>12)?($y+1):$y;
            $next_m=(($m+1)>12)?1:($m+1);
            $prev_y=(($m-1)<=0)?($y-1):$y;
            $prev_m=(($m-1)<=0)?12:($m-1);

            // Start the table
            echo '<table class="calendar-table">';
            // Display the year and the month
            echo '<th class="" colspan="7">'.$y.': '.$m.'</tr>';
            // Weekdays
            $days_array = array('1'=>'Mon', '2'=>'Tue', '3'=>'Wed', '4'=>'Thu', '5'=>'Fri', '6'=>'Sat', '7'=>'Sun');
            //display days
            echo "<tr class='weekdays'>";
            foreach ($days_array as $key=>$val){
                echo '<th>'.$val.'</th>';      
            }
            echo "</tr>";
            

            // Variable to keep track of days in the calendar
            $currentDay = 1 - $firstDayOfMonth;

            // Loop through each week
            while ($currentDay < $daysInMonth) {
                echo '<tr class="days">';
                for ($i = 0; $i < 7; $i++) {
                    $currentDay++;
                    if ($currentDay > 0 && $currentDay <= $daysInMonth) {
                      $stmt = mysqli_stmt_init($conn);
                        // Check if this day is open or closed based on your database data
                        $availability = checkOpen(date("Y-m-d", strtotime("".$currentDay." ".$m." ".$y."")));
                        // Fetch events for this day if any
                        $events_res = getEvents(date("Y-m-d", strtotime("".$currentDay." ".$m." ".$y."")));
                        


                        // Apply ids accordingly to style open/closed days and events                      
                        // Display the day number
                        if ($availability) {                   
                            echo '<td id="dayson">'; // Add appropriate classes
                            echo $currentDay;
                            echo "<br>Open";
                            echo '</td>';
                        } else if (!$availability) {                            
                            echo '<td id="daysoff">'; // Add appropriate classes
                            echo $currentDay;
                            echo "<br>Closed";
                            echo '</td>';
                        }
                        
                        // Display events here if available
                        
                    } else {
                        // Display empty cells for days outside the current month
                        echo '<td class="empty-cell"></td>';
                    }
                }
                echo '</tr>';
            }
        ?>
    </body>
</html>