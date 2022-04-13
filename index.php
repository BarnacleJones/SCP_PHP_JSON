<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCP Subject Files</title>
    <!-- this sylesheet is from w3 schools to get the hamburger menu  -->
    <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_mobile_navbar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation pane -->
<div class="topnav" id="home">
    <a href="#home"><img id="logoSVG" src="./images/scp-logo.svg"></img></a>
    <div id="myLinks">
        <a href="#SCP-002(1)" onclick="myFunction()">SCP-002</a>
        <a href="#SCP-003(1)" onclick="myFunction()">SCP-003</a>
        <a href="#SCP-004(1)" onclick="myFunction()">SCP-004</a>
        <a href="#SCP-005(1)" onclick="myFunction()">SCP-005</a>
        <a href="#SCP-006(1)" onclick="myFunction()">SCP-006</a>
    </div>
    <!-- Hamburger menu code -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
</div>
   
<div class="mainArea">
    <br><br>
    <h1>Welcome to the SCP Foundation</h1>
    <h2>Please note: This information is CLASSIFIED</h2>    
    <!--PHP delimiters-->
    <?php
        //decode json file and put it in cars variable
        $files = json_decode(file_get_contents("scp.json"));
        //loop through all the variables and display in html
        foreach($files as $display)
        {             
            echo "
            <div class='scpContainer'>
            <button class='buttonStyle' id='$display->Item(1)'>Listen to Description</button>
            <button class='buttonStyle' onclick='StopSpeech()'>Stop Speech</button>
            <h1>$display->Item</h1>
            <h2>Special Containment Procedures</h2>
            <p>$display->SpecialContainmentProcedures</p>
            <h2>Description</h2>
            <p id='$display->Item'>$display->Description</p>
            <h2>Additional Information</h2>
            <p>$display->AdditionalInformation</p>   
            <img src='$display->Image' id='scpImage'></img><br> 
            <img id='logoSVG' src='./images/scp-logo.svg'></img>
            <br>
            <a href='#home'id='homeLink'>TOP</a>        
            </div>
            <br>
            ";
        }
    ?>
</div>   
    <!-- Script for nav bar and speechAPI -->
    <script src="script.js"></script>    

</body>
</html>