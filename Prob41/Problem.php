<?php
require_once dirname(__FILE__) . '/../Prob32/Problem.php';
/**
 * Euler Problem 41
 **/
class Euler_Prob41_Problem
{
	/**
	 * Found from page http://www.hashbangcode.com/blog/getting-all-permutations-array-php-74.html
	 */
	public function findPermutations($array)
	{
	    $list = array();
	     
	    $array_count = count($array);
	     
	    $number_of_permutations = 1;
	    if ($array_count > 1) {
	        for ($i = 1; $i <= $array_count; $i++) {
	            $number_of_permutations *= $i;
	        }
	    }
	 
	    for ($i=0; count($list) < $number_of_permutations; $i++) {
	        shuffle($array);
	        $tmp = implode(',', $array);
	        if (!isset($list[$tmp])) {
	            $list[$tmp] = 1;
	        }
	    }
	 
	    ksort($list);
	    $list = array_keys($list);
	    return $list;
	}
	
	public function isPrime($num)
	{
		for ($i = 2; $i < floor(sqrt($num)); $i++) { 
			if (($num % $i) == 0) 
				return false;
		}
		return true;
	}
	
	public function solution()
	{
		$conv = function($v, $w) {
			return $v . $w;
		};
		$largest = 2143;
		
		// The combination start generating from 4-9
		for ($i = 5; $i < 6; $i++) { 
			$array = $this->findPermutations(range(1, $i));
			foreach ($array as $values) {
				$str = (int) array_reduce($values, $conv);
				
				if ($this->isPrime($str) && $str > $largest) {
					$largest = $str;
				}
			} 
		}
		echo $largest;
	}
}



