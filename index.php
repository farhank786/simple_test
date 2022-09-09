<!DOCTYPE html>
<html>

<head>
    <title>Sample Test App</title>
</head>

<body>

<?php
    /**
     * Requirement: 
     * In Php please prepare a simple solution that prints out numbers 1 to 100 
     * but for every number divisible by 3 it prints ABCD, 
     * and every number divisible by 5 it prints EFGH 
     * and for every number divisible by 10 it prints ABCDEFGH.
     */
    for ($i = 1; $i <= 100; $i++) {
        
        if ($i % 3 != 0 && $i % 5 != 0 && $i % 10 != 0) {
            print $i."<br>";
        } else {

            if ($i % 3 == 0) {
                print"ABCD<br>";
            }

            if ($i % 5 == 0) {
                print"EFGH<br>";
            }

            if ($i % 10 == 0) {
                print"ABCDEFGH<br>";
            }
        }
    }
?>

</body>
<script>
    /**
     * Requirement: 
     * In Javascrip please prepare a simple solution that prints out numbers 1 to 100 
     * but for every number divisible by 3 it prints ABCD, 
     * and every number divisible by 5 it prints EFGH 
     * and for every number divisible by 10 it prints ABCDEFGH.
     */
    for (let i = 1; i <= 100; i++) {

        if (i % 3 != 0 && i % 5 != 0 && i % 10 != 0) {
            console.log(i);
        } else {

            if (i % 3 == 0) {
                console.log("ABCD");
            }

            if (i % 5 == 0) {
                console.log("EFGH");
            }

            if (i % 10 == 0) {
                console.log("ABCDEFGH");
            }
        }
    }
</script>

</html>