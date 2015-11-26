<?php
class Palindrome
{
	/*
	 *  Fn simples para checagem de palindromo.
	 */
    public static function isPalindrome($str)
    {
		$str = strtolower($str);
		$str = str_replace(' ','',$str);
		$strWork = $str;
		
		$strInv = strrev($strWork);
		if ($strWork==$strInv)
		{
			$result = 'This is a Palindrome';
		} else {
			$result = 'This is not a Palindrome';
		}
		
		return $result;
    }

	/*
	 *  Fn para checagem se existe um palindromo dentro da frase, considerando apenas chars alfa.
	 */
    public static function isPalindromeIn($str)
    {
		$str = strtolower($str);
		$str = str_replace(' ','',$str);
		$strWork = '';
		
		for ($i=0;$i<strlen($str);$i++)
		{
			$str_char = substr($str,$i,1);
			if (ctype_alpha($str_char))
			{
				$strWork .= $str_char;
			}
		}
		
		$strInv = strrev($strWork);
		if ($strWork==$strInv)
		{
			$result = 'This is a Palindrome';
		} else {
			$result = 'This is not a Palindrome';
		}
		
		return $result;
    }

}


// TESTE
echo Palindrome::isPalindrome('A grama e amarga.')."<br>";
echo Palindrome::isPalindromeIn('A grama e amarga.')."<br>";
?>
