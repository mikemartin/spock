<?php

namespace Statamic\Addons\Spock;

use Statamic\Extend\Widget;

class SpockWidget extends Widget
{
    /**
     * Random Spock quote
     *
     * @return string
     */
    public function randomQuote()
    {
        $quotes = $this->getConfig('quotes',[]);
        return array_rand($quotes);
    }

    /**
     * The HTML that should be shown in the widget
     *
     * @return string
     */
    public function html()
    {
        $random_quote = $this->randomQuote();
        $cp_path      = CP_ROUTE;
        return $this->view('widget', compact('random_quote','cp_path'))->render();
    }
}
