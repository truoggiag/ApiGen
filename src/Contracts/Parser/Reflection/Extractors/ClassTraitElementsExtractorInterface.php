<?php declare(strict_types=1);

namespace ApiGen\Reflection\Contract\Reflection\Extractors;

use ApiGen\Reflection\Contract\Reflection\Class_\ClassReflectionInterface;
use ApiGen\Reflection\Contract\Reflection\ClassMethodReflectionInterface;
use ApiGen\Reflection\Contract\Reflection\ClassPropertyReflectionInterface;

interface ClassTraitElementsExtractorInterface
{
    /**
     * @return ClassReflectionInterface[]
     */
    public function getDirectUsers(): array;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getIndirectUsers(): array;

    /**
     * @return ClassPropertyReflectionInterface[]
     */
    public function getTraitProperties(): array;

    /**
     * @return ClassPropertyReflectionInterface[][]
     */
    public function getUsedProperties(): array;

    /**
     * @return ClassMethodReflectionInterface[]
     */
    public function getTraitMethods(): array;

    /**
     * @return ClassMethodReflectionInterface[]
     */
    public function getUsedMethods(): array;
}
