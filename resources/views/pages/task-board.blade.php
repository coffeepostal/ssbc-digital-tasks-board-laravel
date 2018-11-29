@extends('layouts.app')

<?php
    date_default_timezone_set('America/Los_Angeles');
    $date_dayOfTheWeek = date('l');
    $date_week = date('W');
    $date_year = date('Y');

    function thisWeeksDates($week, $year) {
        $dto = new DateTime();
        $dto->setISODate($year, $week);
        $ret['monday'] = $dto->format('m/d');
        $dto->modify('+1 days');
        $ret['tuesday'] = $dto->format('m/d');
        $dto->modify('+1 days');
        $ret['wednesday'] = $dto->format('m/d');
        $dto->modify('+1 days');
        $ret['thursday'] = $dto->format('m/d');
        $dto->modify('+1 days');
        $ret['friday'] = $dto->format('m/d');
        $dto->modify('+1 days');
        $ret['saturday'] = $dto->format('m/d');
        $dto->modify('+1 days');
        $ret['sunday'] = $dto->format('m/d');
        return $ret;
    }

    $thisWeeksDates = thisWeeksDates($date_week, $date_year);
?>

@section('content')
    <h1>Task Board</h1>
    <h2>This Week:</h2>
    <div id="current-week" class="grid-container fluid">
        <div id="days" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1">

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">
                <div class="grid-x grid-margin-x">
                    <div class="cell auto">Mon.</div>
                    <div class="cell auto text-right"><?php echo $thisWeeksDates['monday'] ?></div>
                </div>
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">
                <div class="grid-x grid-margin-x">
                    <div class="cell auto">Tue.</div>
                    <div class="cell auto text-right"><?php echo $thisWeeksDates['tuesday'] ?></div>
                </div>
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">
                <div class="grid-x grid-margin-x">
                    <div class="cell auto">Wed.</div>
                    <div class="cell auto text-right"><?php echo $thisWeeksDates['wednesday'] ?></div>
                </div>
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">
                <div class="grid-x grid-margin-x">
                    <div class="cell auto">Thur.</div>
                    <div class="cell auto text-right"><?php echo $thisWeeksDates['thursday'] ?></div>
                </div>
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">
                <div class="grid-x grid-margin-x">
                    <div class="cell auto">Fri.</div>
                    <div class="cell auto text-right"><?php echo $thisWeeksDates['friday'] ?></div>
                </div>
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">
                <div class="grid-x grid-margin-x">
                    <div class="cell auto">Sat.</div>
                    <div class="cell auto text-right"><?php echo $thisWeeksDates['saturday'] ?></div>
                </div>
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">
                <div class="grid-x grid-margin-x">
                    <div class="cell auto">Sun.</div>
                    <div class="cell auto text-right"><?php echo $thisWeeksDates['sunday'] ?></div>
                </div>
            </div>
        </div>

        <div id="brew" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                Brew
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Monday', 1)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">
                {{TaskBoard::loopDayTask($tasks, 'Tuesday', 1)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">
                {{TaskBoard::loopDayTask($tasks, 'Wednesday', 1)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">
                {{TaskBoard::loopDayTask($tasks, 'Thursday', 1)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">
                {{TaskBoard::loopDayTask($tasks, 'Friday', 1)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">
                {{TaskBoard::loopDayTask($tasks, 'Saturday', 1)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">
                {{TaskBoard::loopDayTask($tasks, 'Sunday', 1)}}

            </div>
        </div>

        <div id="cip" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                CIP
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Monday', 2)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Tuesday', 2)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Wednesday', 2)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Thursday', 2)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Friday', 2)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Saturday', 2)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Sunday', 2)}}

            </div>
        </div>

        <div id="xfer" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                Xfer
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Monday', 3)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Tuesday', 3)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Wednesday', 3)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Thursday', 3)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Friday', 3)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Saturday', 3)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Sunday', 3)}}

            </div>
        </div>

        <div id="yeast" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                Yeast
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Monday', 4)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Tuesday', 4)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Wednesday', 4)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Thursday', 4)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Friday', 4)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Saturday', 4)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Sunday', 4)}}

            </div>
        </div>

        <div id="sg" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                SG
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Monday', 5)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Tuesday', 5)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Wednesday', 5)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Thursday', 5)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Friday', 5)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Saturday', 5)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Sunday', 5)}}

            </div>
        </div>

        <div id="crash" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                Crash
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Monday', 6)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Tuesday', 6)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Wednesday', 6)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Thursday', 6)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Friday', 6)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Saturday', 6)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Sunday', 6)}}

            </div>
        </div>

        <div id="other" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                Other
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Monday', 7)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Tuesday', 7)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Wednesday', 7)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Thursday', 7)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Friday', 7)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Saturday', 7)}}

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                {{TaskBoard::loopDayTask($tasks, 'Sunday', 7)}}

            </div>
        </div>
    </div>
@endsection
