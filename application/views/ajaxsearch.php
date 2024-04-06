<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Simple search through codeigniter</title>
</head>

<body>
    <h1 align='center'>Jay Gurudev . Welcome to art of living internanal center</h1>

    <div class="container">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addom">Search</span>
                <input type="text" class="form-control" id="search-text" placeholder="Search by customer Datails" name="search-text">
            </div>
        </div>
        <br>
        <div id="result"></div>
    </div>
    <div style="clear:both"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        //Load customer data in table Format using Jquery .
        $(document).ready(function(){

            load_data();
            function load_data(query)
            {
                $.ajax({
                url: "<?php echo base_url() ;?> ajaxsearch/fetch",
                method : "POST",
                data: {query:query},
                success: function (data) {
                    $('#result').html(data);
                }
            });
            }
           
        });
    </script>
</body>

</html>