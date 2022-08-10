<?php

namespace Outl1ne\NovaLinkField;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class Link extends Field
{
    public $component = 'o1-link-field';

    protected $to = null;
    protected $target = null;

    public function blank($blank = true)
    {
        return $this->withMeta(['target' => $blank ? '_BLANK' : '_SELF']);
    }

    public function text($text)
    {
        return $this->withMeta(['text' => is_callable($text) ? call_user_func($text, $this->value) : $text]);
    }

    public function to($url)
    {
        return $this->withMeta(['href' => is_callable($url) ? call_user_func($url, $this->value) : $url]);
    }

    protected function fillAttributeFromRequest(NovaRequest $request, $requestAttribute, $model, $attribute)
    {
        return;
    }
}
