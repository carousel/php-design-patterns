<?php 

namespace Structural\Facade;

class CaseReverseFacade
{
    public static function reverseStringCase($stringIn)
    {
        $arrayFromString = ArrayStringFunctions::stringToArray($stringIn);
        $reversedCaseArray = ArrayCaseReverse::reverseCase($arrayFromString);
        return ArrayStringFunctions::arrayToString($reversedCaseArray);
    }
}

