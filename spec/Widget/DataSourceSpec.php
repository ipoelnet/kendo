<?php

namespace spec\Riesenia\Kendo\Widget;

use PhpSpec\ObjectBehavior;

class DataSourceSpec extends ObjectBehavior
{
    public function it_is_initializable_and_extends_base()
    {
        $this->shouldHaveType('Riesenia\Kendo\Widget\DataSource');
        $this->shouldHaveType('Riesenia\Kendo\Widget\Base');
    }

    public function it_renders_correctly()
    {
        $this->__toString()->shouldReturn('new kendo.data.DataSource(null);');
    }
}
