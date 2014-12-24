<?php

class DuplicateCodeSample
{
    /**
     * Before:
     *
     * ```
     * ['foo' => 'hoge_fuga']
     * ```
     *
     * After:
     *
     * ```
     * ['Foo' => 'HogeFuga']
     * ```
     *
     * @param  array $array
     * @return array
     */
    public function camelizeArray(array $array)
    {
        $newArray = [];
        foreach ($array as $key => $value) {
            $newKey = strtr(ucwords(strtr($key, ['_' => ' '])), [' ' => '']);
            $newValue = strtr(ucwords(strtr($value, ['_' => ' '])), [' ' => '']);
            $newArray[$newKey] = $newValue;
        }

        return $newArray;
    }
}
