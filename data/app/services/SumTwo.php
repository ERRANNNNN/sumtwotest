<?php

namespace app\services;
class SumTwoService
{
    public function sumTwo(array $nums, int $target): array
    {
        $numsDictionary = [];
        $result = [];
        foreach ($nums as $key => $value)
        {
            $require = $target - $value;
            if (isset($numsDictionary[$require]))
            {
                $result[] = $numsDictionary[$require];
                $result[] = $key;
                break;
            } else {
                $numsDictionary[$value] = $key;
            }
        }
        return $result;
    }
}