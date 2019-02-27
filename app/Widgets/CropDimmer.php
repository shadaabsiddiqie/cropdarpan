<?php

namespace App\Widgets;

use App\Crop;
use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class CropDimmer extends BaseDimmer
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
        $count = Crop::count();
        $string = trans_choice('dimmer.crop', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-leaf',
            'title'  => "{$count} {$string}",
            'text'   => __('dimmer.crop_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('dimmer.crop_link_text'),
                'link' => route('voyager.crops.index'),
            ],
            'image' => asset('storage/widget-backgrounds/crops.jpg')
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', app(Crop::class));
    }
}
