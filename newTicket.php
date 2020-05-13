<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Ticket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
        #back-header{
            visibility:hidden;
        }
        #add-header{
            visibility:hidden;
        }
        
    </style>
<body id="bd-ticket">

    <?php
        $titulo = "Create New Ticket";
        include_once('./includes/header.php');

        
    ?>
    <div id="include"><?php include_once('./includes/ticketCounter.php') ?></div>

    <main class="" id="bx-new-ticket">
    
        <form id="bx-form-ticket" class="d-flex flex-column ">
            <div class="d-flex" id="bx-ticket">
                <div id="bx-ticket-left" class="d-flex flex-column col-sm-12 col-md-6 col-lg-6">
                    <label>Created by*</label>
                    <input >
                    <label>Priotity*</label>
                    <select name="" id="">
                        <option>High</option>       
                    </select>
                    <label>Area*</label>
                    <select name="" id="">
                        <option>Facilities</option>
                    </select>
                </div>
                <div id="bx-ticket-right" class="d-flex flex-column col-sm-12 col-md-6 col-lg-6">
                    <label for="">Subject*</label>
                    <input>
                    <label for="">Description*</label>
                    <textarea name="" id="txtarea" cols="30" rows="4"></textarea>

                </div>
            </div>
            <div id="bx-btn-create-tickets" class="d-flex flex-column">
               <button id="btn-create-tickets">Create new Ticket</button> 
            </div>
            
        </form>
    </main>
</body>
</html>