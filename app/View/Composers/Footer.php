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
          'footer_logo' => get_field('footer logo', 'options'),
          'social' => get_field('Social', 'options'),
          'title' => get_field('form title', 'options'),
          'items' => get_field('footer items', 'options'),
          'form' => get_field('gravity', 'options'),
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
