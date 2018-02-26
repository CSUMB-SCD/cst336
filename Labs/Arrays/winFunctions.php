
<html>
<head>
	<title> Silverjack </title>
</head>
<body>


</body>



</html>





<?php

 
   
  

   $players = array(); 



function displayWinner($score1, $score2, $score3, $score4)
{

	$scores = array(); 

	$scores[] = $score1; 
	$scores[] = $score2; 
	$scores[] = $score3;
	$scores[] = $score4; 

	  $players = array("Chris", "Sam", "Bob", "PowderPuff"); 
	  $high_score = 0; 
	  $busted = true; 

	for($i = 0; $i < count($scores); $i++)
	{
		if($scores <= 42 )
		{
			$busted = false; 

		}

	}

	if($busted)
	{
		return -1; 
	} else{

			for($i = 0; $i < count($scores); $i++)
			{
				if($scores[$i] > $high_score && $scores[$i] <= 42)
				{
					$high_score = $scores[$i]; 
				}
			}

			return $high_score; 

	}

}

function getWinner($score1, $score2, $score3, $score4, &$winners)
{
    $high_score = displayWinner($score1, $score2, $score3, $score4);
    
    if($high_score == -1)
    {
    	$winners[] = "No winner"; 
    }
    else {
    	
    	$players = array("Chris", "Sam", "Bob", "PowderPuff"); 
    	$scores = array(); 
    	$scores[] = $score1;
    	$scores[] = $score2;
    	$scores[] = $score3; 
    	$scores[] = $score4; 
    	
    	for($i = 0; $i < count($players); $i++)
    	{
    		if($scores[$i] == $high_score)
    		{
    			$winners[$i] = $players[$i]; 
    			
    		}
    	}
    
	}

}

function winSum($winner, $score1, $score2, $score3, $score4)
{
	$winner = array();
	
	if($winner[0] == "No Winner.."){
		
		$sums = array();
		$sums[] = 0; 
		return $sums; 
		
	}
	else{
		$scores = array(); 

		$scores[] = $score1; 
		$scores[] = $score2;
		$scores[] = $score3;
		$scores[] = $score4; 
		
		$players = array("Chris", "Sam", "Bob", "PowderPuff" );
		
		$sums = array();
		
		for($i = 0; $i < count($winner); $i++)
		{
			
			for($j = 0; j< count($scores); $j++)
			{
				if($winner[$i] != $players[$j])
				{
					$sums[$i] += $scores[j]; 
				}
			}
			
		}
		return $sums;
	}

		
	
	
	
}

?>z
