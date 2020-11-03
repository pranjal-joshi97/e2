<?php

class EvenNumber extends Number
{
    # Subclasses can overwrite their superclasses
    public function isValid()
    {
        # Confirms if number is even or not
        //return is_numeric($this->num) and ($this->num % 2 == 0);

        # They can also invoke methods from their superclasses using `parent::`
        return parent::isValid() and $this->num % 2 == 0;
    }
}