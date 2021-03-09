<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Button extends Component
{
    public $deleteOff;
    public $href;
    public $type;
    public $text;
    public $color;
    public $opacity;
    protected $allowedColors = [
        'black', 'white', 'gray', 'red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'
    ];
    protected $allowedOpacities = [
        '50', '100', '200', '300', '400', '500', '600', '700', '800', '900'
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($deleteOff=false, $href=false, $type='submit', $text=false, $color=false, $opacity=false)
    {
        $this->deleteOff = $deleteOff;
        $this->type = (!$type) ? 'submit' : $type;
        $this->href = (!$href) ? '#' : $href;
        $this->text = (!$text) ? 'Вперед' : $text;
        $this->color = (!in_array($color, $this->allowedColors))? 'blue' : $color;
        $this->opacity = (!in_array($opacity, $this->allowedOpacities))? '400' : $opacity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin.components.inputs.button');
    }
}
