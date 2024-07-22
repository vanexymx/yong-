<!DOCTYPE html>
<html>
<head>
    <title>YONG</title>
</head>
<body>
    <h1>Yong</h1>
    <table>
        <tr>
            <th>Index</th>
            <th>Value</th>
        </tr>
        <?php
        $data = array(
            "A1" =>  41,
            "A2" =>  18,
            "A3" =>  21,
            "A4" =>  63,
            "A5" =>  2,
            "A6" =>  53,
            "A7" =>  5,
            "A8" =>  57,
            "A9" =>  60,
            "A10" => 93,
            "A11" => 28,
            "A12" => 3,
            "A13" => 90,
            "A14" => 39,
            "A15" => 80,
            "A16" => 88,
            "A17" => 49,
            "A18" => 60,
            "A19" => 26,
            "A20" => 28
        );
        
        foreach ($data as $index => $value) {
            echo "<tr>";
            echo "<td>" . $index . "</td>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br><br><br>
    
    <table class="table2">
        <tr>
            <th>Category</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Alpha</td>
            <?php 
            $value1 = $data["A5"] + $data["A20"];
            echo "<td>" . $value1 . "</td>"; ?>
        </tr>
        <tr>
            <td>Beta</td>
            <?php 
            $value2 = $data["A15"] / $data["A7"];
            echo "<td>" . $value2 . "</td>"; ?>
        </tr>
        <tr>
            <td>Charlie</td>
            <?php 
            $value3 = $data["A13"] * $data["A12"];
            echo "<td>" . $value3 . "</td>"; ?>
        </tr>
    </table>
</body>

<style>
    h1
    {
        margin: 0 auto;
        text-align: center;
        padding: 20px;
    }
    table 
    {
        width: 60%;
        border-collapse: collapse;
        margin: 0 auto; 
    }
    table, th, td 
    {
        border: 1px solid #ddd; 
    }
    th 
    {
        background-color: #4CAF50; 
        color: white; 
        text-align: center;
        padding: 15px;
    }
    td {
        text-align: center;
        padding: 10px; 
    }
    tr:nth-child(even) 
    {
        background-color: #f2f2f2; 
    }
    tr:hover 
    {
        background-color: #ddd; 
    }
    .table2 th
    {
        background-color: #007BFF; 
        color: white; 
        text-align: center;
        padding: 15px;
    }
    
</style>

</html>