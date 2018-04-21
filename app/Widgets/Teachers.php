<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Teachers extends AbstractWidget
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
        $count = \App\Teacher::count();
        $string = 'Teachers';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} {$string}",
            'text'   => "You have {$count} teachers in your database. Click on button below to view all teachers.",
            'button' => [
                'text' => 'View all teachers',
                'link' => route('voyager.teachers.index'),
            ],
            'image' => asset('storage/widgets_bg/widget_bg.jpeg'),
        ]));
    }
}
