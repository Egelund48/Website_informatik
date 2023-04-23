<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hjælp.dk</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    
    <div class="header">
        <h1> <a class = "active"href="index.php" style="text-decoration: none;" style="text-align: center">Hjælp.dk</a></h1>
    </div>
    
    <body>
        <div class="navbar">
            <li><a href="browse.php">Browse</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="om_os.php">Om os</a></li>
            <li ><a href="login.php">Login/Sign up </a></li>
            <input class = "topnav" type="text" placeholder="Søg..">
        </div>
        <?php
        // put your code here
        ?>
        <div style="height:600px; margin-left: 300px; margin-right: 25%; margin-top: 5%;">
            <h1>Landing page</h1>
            <p style="line-height: 2.0; font-size:20px;">
                Dette er landing page.
                <br>

                To-do liste over ting vi skal. 
                <br>
                <div>
                <label for="option1">Lav et login system</label>
                <input type="checkbox" id="option1">
                </div>
                <div>
                <label for="option2">Lav et kontakt system</label>
                <input type="checkbox" id="option2">
                </div>
                <div>
                <label for="option3">Gør hjemmesiden pænere</label>
                <input type="checkbox" id="option3">
                </div>

                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>

                <script>
                $("#checkAll").on("change", function() {
                    $(':checkbox').not(this).prop('checked', this.checked);
                });

                $(":checkbox").on("change", function(){
                    var checkboxValues = {};
                    $(":checkbox").each(function(){
                    checkboxValues[this.id] = this.checked;
                    });
                    $.cookie('checkboxValues', checkboxValues, { expires: 7, path: '/' })
                });

                function repopulateCheckboxes(){
                    var checkboxValues = $.cookie('checkboxValues');
                    if(checkboxValues){
                    Object.keys(checkboxValues).forEach(function(element) {
                        var checked = checkboxValues[element];
                        $("#" + element).prop('checked', checked);
                    });
                    }
                }

                $.cookie.json = true;
                repopulateCheckboxes();
                </script>
                <br>
                Tilføj mere løbende...
            </p>
        </div>
    </body>
</html>
