<html>
<head>
    <title>Class Test</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="marks">
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) 
	{
        $marks = $_POST['marks'];
        if ($marks == 0) 
		{
            $score = "Ab";
        }
		else if ($marks >= 1 && $marks <= 10)
		{
            $score = "Pp";		
        } 
		else if ($marks >= 11 && $marks <= 15) 
		{
            $score = "Rt";
        } 
		else if ($marks >= 16 && $marks <= 20) 
		{
            $score = "Gp";
        } 
		else if ($marks >= 20 && $marks <= 25) 
		{
            $score = "O";
        } else 
		{
            $score = "wrong";
        }

        switch ($score) 
		{
            case "Ab":
                echo "You were Absent. Meet class Co-Ordinator";
                break;
            case "Pp":
                echo "Your performance is poor. Solve whole paper again and submit";
                break;
            case "Rt":
                echo "You have scored less. Appear for a Retest";
                break;
            case "Gp":
                echo "You have done well. Can do better";
                break;
            case "O":
                echo "Outstanding performance. Keep it up";
                break;
            case "wrong":
                echo "Enter right information";
        }
    }
    ?>

</body>

</html>