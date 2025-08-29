<?php
/**
 * Class used to modify Arrays
 */
class ArrayModifier
{
    /**
     * @var array $data The array to be modified
     */
    private array $data;

    /**
     * @param array $inpputArray for input data array to be initialized.
     */
    public function __construct(array $inputArray)
    {
        $this->data = $inputArray;
    }

    /**
     * Method to change letters to capital letters
     * @return array which has been changed
     */
    public function toUpperCase(): array
    {
        return array_map('ucwords', $this->data);
    }

    /**
     * Method to remove the second element (index 1) in an array
     * @return array which has removed the first element (index one) in the array
     */
    public function removeSecondElement(array $array): array
    {
        unset($array[1]);
        return array_values($array);
    }
}