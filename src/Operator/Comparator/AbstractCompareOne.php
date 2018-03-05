<?php
/**
 * Copyright © 2018 Thomas Klein, All rights reserved.
 * See LICENSE bundled with this library for license details.
 */
declare(strict_types=1);

namespace LogicTree\Operator\Comparator;

use LogicTree\Operator\OperatorInterface;

/**
 * Class AbstractCompareOne
 */
abstract class AbstractCompareOne implements OperatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(...$expressions): bool
    {
        $count = count($expressions);

        if ($count != 1) {
            throw new \InvalidArgumentException('1 expression expected, ' . $count . ' given.');
        }

        return $this->executeComparison($expressions[0]);
    }

    /**
     * Execute the comparison for the expression
     *
     * @param mixed $expression
     * @return bool
     */
    abstract public function executeComparison(mixed $expression): bool;
}
