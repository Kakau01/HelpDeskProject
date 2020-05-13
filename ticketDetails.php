
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
       
        #add-header{
            visibility:hidden;
        }
    </style>
</head>
<body>
    <?php
        $titulo = "Ticket Details";
        include_once('./includes/header.php');
       
        
    ?>
    <main id="bx-ticket-details" class="d-flex">
        <div id="bx-left-td">
            <div>
                <h5 class="header-td-font-size">Ticket ID</h5>
                <p class="header-td-font-size">1</p>
            </div>
            <div>
                <h5 class="header-td-font-size">Created date</h5>
                <p class="header-td-font-size">04/18/2016</p>
            </div>
            <div>
                <h5 class="header-td-font-size">Closed date</h5>
                <p class="header-td-font-size">--</p>
            </div>
            <div>
                <h5 class="header-td-font-size">Created by</h5>
                <p class="header-td-font-size">Steven Smith</p>
            </div>
        </div>
        <form id="bx-right-td">
            <div id="bx-td-subject">
                <label for="" class="content-td-font-size">Subject</label><br>
                <input type="text" name="" id="input-subject">
            </div>
            <div id="bx-td-description">
                <label for="" class="content-td-font-size">Description</label><br>
                <input type="text" name="" id="input-description">
            </div>
            <div id="bx-td-comments">
                <label for="" class="content-td-font-size">Internal comments</label><br>
                <input type="text" name="" id="input-comments">
            </div>
        
            <div class="d-flex justify-content-start align-items-center  bx-details-status-assigned">
                <div class="bx-label col-5 content-td-font-size"><label>Ticket Status</label></div>
                <div class="bx-result col-5 content-td-font-size"><p>In Progress</p></div>
                <div class="bx-g col-1 content-td-font-size"><a>&#62</a></div>
            </div>
            <div class="d-flex justify-content-start align-items-center  bx-details-status-assigned">
                <div class="bx-label col-5 content-td-font-size"><label>Assigned to</label></div>
                <div class="bx-result col-5 content-td-font-size"><p>None</p></div>
                <div class="bx-g col-1 content-td-font-size"><a>&#62</a></div>
            </div>
            <div class="d-flex justify-content-start align-items-center bx-details-area-priority">
                <div class="bx-label col-5 content-td-font-size"><label>Area</label></div>
                <div class="bx-result col-5 content-td-font-size"><p>IT</p></div>
                <div class="bx-g col-1 content-td-font-size"><a>&#62</a></div>
            </div>
            <div class="d-flex justify-content-start align-items-center  bx-details-area-priority">
                <div class="bx-label col-5 content-td-font-size"><label>Priority</label></div>
                <div class="bx-result col-5 content-td-font-size"><p>High</p></div>
                <div class="bx-g col-1"><a>&#62</a></div>
            </div>
            <div class="d-flex flex-column" id="bx-btn-td">
                <button id="btn-td">Save</button>
            </div>
</form>
    </main>
</body>
</html>