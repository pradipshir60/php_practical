<html>
<head>
    <title>Array</title>
</head>

<body>
    <?php
    $studentScore = array(1, 5, 8, 2, 20, 25, 9, 0, 11, 16);
    $Ab = 0;
    $Pp = 0;
    $Rt = 0;
    $Gp = 0;
    $o =  0;
    for ($i = 0; $i < 10; $i++) 
	{
        if ($studentScore[$i] == 0) 
		{
            $score = "Ab";
            $Ab++;
        } else if ($studentScore[$i] >= 1 && $studentScore[$i] <= 10) 
		{
            $score = "Pp";
            $Pp++;
        } else if ($studentScore[$i] >= 11 && $studentScore[$i] <= 15) 
		{
            $score = "Rt";
            $Pp++;
        } else if ($studentScore[$i] >= 16 && $studentScore[$i] <= 20) 
		{
            $score = "Gp";
            $Gp++;
        } else if ($studentScore[$i] >= 20 && $studentScore[$i] <= 25) 
		{
            $score = "O";
            $o++;
        }
    }
    echo "Student in Ab Category = " . $Ab . "<br>";
    echo "Student in Pp Category = " . $Pp . "<br>";
    echo "Student in Rt Category = " . $Rt . "<br>";
    echo "Student in Gp Category = " . $Gp . "<br>";
    echo "Student in O Category = "  . $o  . "<br>";
    ?>
</body>

</html>