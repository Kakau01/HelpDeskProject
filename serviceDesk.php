<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Desk
        
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        #back-header{
            visibility:hidden;
        }
        #nome-usuario-logado{
            display:none;
        }
        #sair{
            display:none;
        }
        
    </style>
</head>
<body>
    <?php
        $titulo = "Service Desk";
        include_once('./includes/header.php');
        include_once('./includes/ticketCounter.php'); 
        
    ?>
    <main id="bx-service-desk">
    <div id="bx-menu-mobile">
            <select name="" id="menu-mobile">
                <option value="">All Tickets</option>
                <option value="">New Tickets</option>
                <option value="">Tickets in Progress</option>
                <option value="">Tickets on hold</option>
                <option value="">Tickets closed</option>
                <option value="">Tickets older than 3 days</option>
                <option value="">Tickets open today</option>
                <option value="">Tickets closed today/option>
            </select>
        </div>
        <div class="d-flex" id="service-desk">
        
            <div id="bx-sd-left">
                <div class="menu-sd"><a href="">All tickets</a> </div>
                <div class="menu-sd"><a href=""> New tickets</a></div>
                <div class="menu-sd"><a href="">Tickets in progress</a> </div>
                <div class="menu-sd"><a href="">Tickets on hold</a></div>
                <div class="menu-sd"><a href="">Tickets closed</a></div>
                <div class="menu-sd"><a href="">Tickets older than 3 days</a> </div>
                <div class="menu-sd"><a href="">Tickets open today</a> </div>
                <div class="menu-sd"><a href="">Tickets closed today</a> </div>
            </div>
            <div id="bx-sd-right">
                <div id="tickets-sd">
                    <div id="tickets-sd-header" class="d-flex justify-content-between">
                        <p>Ticket ID: 1</p>
                        <p>Created by: Steven Smith</p>
                        <p>Priority: High</p>
                        <p>Created date: 04/18/2016</p>
                    </div>
                    <div id="tickets-sd-problem">
                        <h3>Wifi isn't working</h3>
                        <p>The wireless network seems to be down in Building 1. Can´t access web, intranet or email.</p>
                    </div>
                    <div>
                        <p>Assign to: None</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>