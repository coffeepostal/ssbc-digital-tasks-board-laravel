<?php

namespace App\Classes;

use Illuminate\Support\Carbon;

/**
* Task Board Functions
* These functions were ported from my initial, non-Laravel app.
*
*/

//  Loop through Tasks on Given Day
class TaskBoard {

    //  Task Loop Shortened
    public static function loopDayTask($loop_array, $loop_day, $loop_task_type) {

        $thisWeek = Carbon::now()->format('W');
        // echo $thisWeek;

        //  Loop thorugh tasks
        foreach ($loop_array as $value) {

            //  Get the Tasks Date, covert it, and set it as a variable
            $sqldate = $value->date;
            $date = strtotime($sqldate);

            //  Check if it's the current week AND if it's the current day
            if (date("W", $date) == $thisWeek && date("l", $date) == "$loop_day") {

                //  Variables
                $id = $value->id;
                $task_type = $value->task_type;

                // $task_type_text = strtolower($task_type);
                // $brew_number = $value->brew_number;
                // $tank_base = $value->tank_base;
                // $tank_alt = $value->tank_alt;
                // $description = $value->description;
                // $delayable = $value->delayable;

                // if (date("l", $date) == "$loop_day") {
                    if ($task_type == $loop_task_type) {

                        TaskBoard::utilloopDayTask_opening($id, strtolower($task_type), $value->delayable);

                        switch ($task_type)
                        {
                            case "1":   // Brew
                            TaskBoard::taskBrew($value->brew_number, $value->tank_base, $value->description);
                            break;

                            case "2":   // CIP
                            TaskBoard::taskDefault($value->tank_base, $value->description);
                            break;

                            case "3":   // Xfer
                            TaskBoard::taskXfer($value->tank_base, $value->tank_alt, $value->description);
                            break;

                            case "4":   // Yeast
                            TaskBoard::taskDefault($value->tank_base, $value->description);
                            break;

                            case "5":   // SG
                            TaskBoard::taskDefault($value->tank_base, $value->description);
                            break;

                            case "6":   // Crash
                            TaskBoard::taskDefault($value->tank_base, $value->description);
                            break;

                            case "7":   // Other
                            TaskBoard::taskOther($value->description);
                            break;

                            default:   // Other/Default
                            TaskBoard::taskOther($value->description);
                        }
                        TaskBoard::utilloopDayTask_closing($date);
                    }
                // }
            }
            unset($value);
        }
    }

    //  Task Types
    public static function taskBrew($brew_number, $tank_base, $description) {
        echo '                <div class="cell auto grid-x task-content">' . "\n";
        echo '                    <div class="cell small-6">' . $brew_number . '</div>' . "\n";
        echo '                    <div class="cell small-6 text-right">'. $tank_base . '</div>' . "\n";
        echo '                    <div class="cell text-center">' . $description . '</div>' . "\n";
        echo '                </div>' . "\n";
    }

    public static function taskDefault($tank_base, $description) {
        echo '                <div class="cell auto grid-x task-content">' . "\n";
        echo '                    ' . $tank_base . ' ' . $description . "\n";
        echo '                </div>' . "\n";
    }

    public static function taskXfer($tank_base, $tank_alt, $description) {
        echo '                <div class="cell auto grid-x task-content">' . "\n";
        echo '                    ' . $tank_base . " &rarr; " . $tank_alt . ' ' . $description . "\n";
        echo '                </div>' . "\n";
    }

    public static function taskOther($description) {
        echo '                <div class="cell auto grid-x task-content">' . "\n";
        echo '                    ' . $description . "\n";
        echo '                </div>' . "\n";
    }



    //  Generic/Utility
    public static function utilloopDayTask_opening($id, $task_type, $delayable)
    {
        $task_type_array = array('', 'Brew', 'CIP', 'Xfer', 'Yeast', 'SG', 'Crash', 'Other');
        echo '        <div id="task-' . $id . '" class="grid-x grid-margin-x medium-margin-collapse task ' . strtolower($task_type), ($delayable == '1' ? ' delayable">' : '">');
        echo "\n";
        echo '                <div class="cell shrink task-checkbox">' . "\n";
        echo '                    <input id="checkbox-task-' . $id . '" type="checkbox" name="checkbox-task-' . $id . '" value="">' . "\n";
        echo '                </div>' . "\n";
    }

    public static function utilloopDayTask_closing($date)
    {
        echo '            <!-- ' . date("l", $date) . ' -->' . "\n";
        echo '            </div>';
        echo "\n";
    }

    public static function thisWeeksDates($week, $year) {
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

}
