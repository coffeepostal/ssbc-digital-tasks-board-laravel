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

                <?php // loopDayTask($result_array, "Monday", 1); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                <?php // loopDayTask($result_array, "Tuesday", 1); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                <?php // loopDayTask($result_array, "Wednesday", 1); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                <?php // loopDayTask($result_array, "Thursday", 1); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                <?php // loopDayTask($result_array, "Friday", 1); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                <?php // loopDayTask($result_array, "Saturday", 1); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                <?php // loopDayTask($result_array, "Sunday", 1); ?>

            </div>
        </div>

        <div id="cip" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                CIP
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                <?php // loopDayTask($result_array, "Monday", 2); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                <?php // loopDayTask($result_array, "Tuesday", 2); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                <?php // loopDayTask($result_array, "Wednesday", 2); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                <?php // loopDayTask($result_array, "Thursday", 2); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                <?php // loopDayTask($result_array, "Friday", 2); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                <?php // loopDayTask($result_array, "Saturday", 2); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                <?php // loopDayTask($result_array, "Sunday", 2); ?>

            </div>
        </div>

        <div id="xfer" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                Xfer
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                <?php // loopDayTask($result_array, "Monday", 3); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                <?php // loopDayTask($result_array, "Tuesday", 3); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                <?php // loopDayTask($result_array, "Wednesday", 3); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                <?php // loopDayTask($result_array, "Thursday", 3); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                <?php // loopDayTask($result_array, "Friday", 3); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                <?php // loopDayTask($result_array, "Saturday", 3); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                <?php // loopDayTask($result_array, "Sunday", 3); ?>

            </div>
        </div>

        <div id="yeast" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                Yeast
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                <?php // loopDayTask($result_array, "Monday", 4); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                <?php // loopDayTask($result_array, "Tuesday", 4); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                <?php // loopDayTask($result_array, "Wednesday", 4); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                <?php // loopDayTask($result_array, "Thursday", 4); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                <?php // loopDayTask($result_array, "Friday", 4); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                <?php // loopDayTask($result_array, "Saturday", 4); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                <?php // loopDayTask($result_array, "Sunday", 4); ?>

            </div>
        </div>

        <div id="sg" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                SG
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                <?php // loopDayTask($result_array, "Monday", 5); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                <?php // loopDayTask($result_array, "Tuesday", 5); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                <?php // loopDayTask($result_array, "Wednesday", 5); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                <?php // loopDayTask($result_array, "Thursday", 5); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                <?php // loopDayTask($result_array, "Friday", 5); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                <?php // loopDayTask($result_array, "Saturday", 5); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                <?php // loopDayTask($result_array, "Sunday", 5); ?>

            </div>
        </div>

        <div id="crash" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                Crash
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                <?php // loopDayTask($result_array, "Monday", 6); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                <?php // loopDayTask($result_array, "Tuesday", 6); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                <?php // loopDayTask($result_array, "Wednesday", 6); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                <?php // loopDayTask($result_array, "Thursday", 6); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                <?php // loopDayTask($result_array, "Friday", 6); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                <?php // loopDayTask($result_array, "Saturday", 6); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                <?php // loopDayTask($result_array, "Sunday", 6); ?>

            </div>
        </div>

        <div id="other" class="grid-x grid-margin-x task-type">
            <div class="cell medium-12 large-1 task-title">
                Other
            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Monday" ? 'monday current-day' : 'monday'); ?>">

                <?php // loopDayTask($result_array, "Monday", 7); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Tuesday" ? 'tuesday current-day' : 'tuesday'); ?>">

                <?php // loopDayTask($result_array, "Tuesday", 7); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Wednesday" ? 'wednesday current-day' : 'wednesday'); ?>">

                <?php // loopDayTask($result_array, "Wednesday", 7); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Thursday" ? 'thursday current-day' : 'thursday'); ?>">

                <?php // loopDayTask($result_array, "Thursday", 7); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Friday" ? 'friday current-day' : 'friday'); ?>">

                <?php // loopDayTask($result_array, "Friday", 7); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Saturday" ? 'saturday current-day' : 'saturday'); ?>">

                <?php // loopDayTask($result_array, "Saturday", 7); ?>

            </div>
            <div class="cell medium-12 large-auto <?php echo ($date_dayOfTheWeek == "Sunday" ? 'sunday current-day' : 'sunday'); ?>">

                <?php // loopDayTask($result_array, "Sunday", 7); ?>

            </div>
        </div>
    </div>
@endsection
