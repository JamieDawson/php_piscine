<?php
function ft_is_sort($array)
{
	if (is_array($array))
	{
		$sorted = $array;
		sort($sorted);
		foreach($sorted as $v)
		{
			if ($sorted !== $array)
				return false;
			$array++;
		}
		return true;
	}
}
?>
