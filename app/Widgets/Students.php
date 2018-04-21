<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Students extends AbstractWidget
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
        $count = \App\Student::count();
        $string = 'Student';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "{$count} {$string}",
            'text'   => "You have {$count} student in your database. Click on button below to view all student.",
            'button' => [
                'text' => 'View all students',
                'link' => route('voyager.students.index'),
            ],
            'image' => asset('storage/widgets_bg/widget_bg.jpeg'),
        ]));
    }
}
