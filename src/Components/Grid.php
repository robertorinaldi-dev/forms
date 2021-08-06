<?php

namespace Filament\Forms2\Components;

class Grid extends Component
{
    protected string $view = 'forms2::components.grid';

    final public function __construct(array | int | null $columns)
    {
        $this->columns($columns);
    }

    public static function make(array | int | null $columns = ['lg' => 2]): static
    {
        $static = new static($columns);
        $static->setUp();
        
        return $static;
    }

    protected function setUp(): void
    {
        $this->columnSpan('full');
    }
}
