<?php

namespace App\Core;

use App\Core\Interfaces\StrategyInterface;

class Strategy
{
    private $strategy;

    /**
     * Strategy constructor.
     * @param StrategyInterface $strategy
     */
    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param StrategyInterface $strategy
     */
    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function execute(string $modelName, $data)
    {
        return $this->strategy->execute($modelName, $data);
    }
}