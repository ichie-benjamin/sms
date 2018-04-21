<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Employees extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Employee::count();
        $string = 'Employee';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-person',
            'title'  => "{$count} {$string}",
            'text'   => "You have No Employee in your database<br>.",
            'button' => [
                'text' => 'View all employees',
                'link' => route('voyager.teachers.index'),
            ],
            'image' => asset('storage/widgets_bg/empoyees.jpeg'),
        ]));
    }
}
