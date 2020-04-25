<?php
/**
 * Description：
 *
 * User: admin
 * Date: 2020/4/25
 * Time: 16:46
 */

namespace sbihgu\interfaces;

interface CalculatorServiceInterface
{

    /**
     * @param  int  $a
     * @param  int  $b
     * 测试加法
     *
     * @return int
     */
    public function add(int $a, int $b): int;

    /**
     * @param  int  $a
     * @param  int  $b
     * 测试减法
     *
     * @return int
     */
    public function minus(int $a, int $b): int;

}
