<?php

/**
 * Calculate percentage of similarity two strings
 * 
 * @autor Niesuch
 */
class StringSimilarity {

    /**
     * First string
     * @var type 
     */
    private $_string1;

    /**
     * Second string
     * @var type 
     */
    private $_string2;

    /**
     * Percentage of similarity
     * @var type 
     */
    private $_percentage;

    /**
     * Class constructor 
     * @param type $string1
     * @param type $string2
     */
    public function __construct($string1, $string2) {
        $this->_string1 = $string1;
        $this->_string2 = $string2;
        $this->_percentage = null;
    }

    /**
     * Compare two strings and calculate percentage of similarity 
     */
    public function compare() {
        if (empty($this->_string1)) {
            trigger_error('First string can not be blank', E_USER_ERROR);
            return false;
        }

        if (empty($this->_string2)) {
            trigger_error('Second string can not be blank', E_USER_ERROR);
            return false;
        }

        $arrayCount = array_count_values($this->parseWords());

        if (empty($arrayCount[1])) {
            $this->_percentage = number_format(0, 2);
        } else if (empty($arrayCount[0])) {
            $this->_percentage = number_format(100, 2);
        } else {
            $this->_percentage = number_format(($arrayCount[1] / ($arrayCount[1] + $arrayCount[0])) * 100, 2);
        }
    }

    /**
     * Parse words to easier forms (0 - no similarity, 1 - same)
     * @return int
     */
    public function parseWords() {
        $result = array();

        $arrayWords1 = explode(' ', $this->_string1);
        $arrayWords2 = explode(' ', $this->_string2);
        $count1 = count($arrayWords1);
        $count2 = count($arrayWords2);

        $count = ($count2 > $count1) ? $count2 : $count1;

        for ($i = 0; $i < $count; $i++) {
            $word1 = !empty($arrayWords1[$i]) ? $arrayWords1[$i] : '';
            $word2 = !empty($arrayWords2[$i]) ? $arrayWords2[$i] : '';

            if ($word1 == $word2) {
                $result[] = 1;
            } else {
                $result[] = 0;
            }
        }

        return $result;
    }

    /**
     * Return percentage of similarity
     * @return type
     */
    public function getPercentage() {
        return $this->_percentage;
    }

}
