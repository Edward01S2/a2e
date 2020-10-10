<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
      'partials.footer',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function with()
    {
        return [
          'logo' => get_field('logo alt', 'options'),
          'nav' => $this->navigation('footer_navigation'),
          'link' => get_field('footer link', 'options'),
        ];
    }

    public function navigation($name)
    {
        if (Navi::build()->isEmpty()) {
            return;
        }
        
        return Navi::build($name)->toArray();
    }

}
