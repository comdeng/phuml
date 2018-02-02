<?php
/**
 * PHP version 7.1
 *
 * This source file is subject to the license that is bundled with this package in the file LICENSE.
 */

namespace PhUml\Code;

/**
 * It represents a class attribute
 */
class Attribute extends Variable implements HasVisibility, CanBeStatic
{
    use WithVisibility, WithStaticModifier;

    protected function __construct(string $name, Visibility $modifier, TypeDeclaration $type)
    {
        parent::__construct($name, $type);
        $this->modifier = $modifier;
        $this->isStatic = false;
    }

    public static function public(string $name, TypeDeclaration $type = null): Attribute
    {
        return new static($name, Visibility::public(), $type ?? TypeDeclaration::absent());
    }

    public static function protected(string $name, TypeDeclaration $type = null): Attribute
    {
        return new static($name, Visibility::protected(), $type ?? TypeDeclaration::absent());
    }

    public static function private(string $name, TypeDeclaration $type = null): Attribute
    {
        return new static($name, Visibility::private(), $type ?? TypeDeclaration::absent());
    }

    public function __toString()
    {
        return sprintf('%s%s%s',
            $this->modifier,
            $this->name,
            $this->type->isPresent() ? ": {$this->type}" : ''
        );
    }
}
