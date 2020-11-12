

<!DOCTYPE html>
<html lang="hr">
<head>

    <meta charset="utf-8" />
    <title>Unos</title>
    <title>Oracle REST data service</title>

    <link rel="stylesheet"  href="css/style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 </head>
 </head>

    

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="content">
    <div class="col-md-6 col-md-offset-3">
    <table class="table table-bordered" width=60%>
        <tr>
            <th>Šifra Poduzeća</th>
            <th>Naziv</th>
            <th>Adresa</th>
            <th>Poštanski broj</th>
            <th>IBAN</th>
                       
        </tr>
       <tbody id="table_data">
        
        </tbody>
    </table>
        
    </div>
    

    <div class="main">
        <a href="../Meni/Meni.html">Sljedeće</a>
    </div>
    
    <div class="box">
        <div>
            <div class="inputBox">
                <input id="šifra" type="number" name="" required="">
                <label> Šifra</label>
            </div>
            <div class="inputBox1">
                <label> ILI </label>
            </div>
            <div class="inputBox">
                <input  id= "naziv" type="text" name="" required="">
                <label> Naziv</label>
            </div>
            <input  id="load" type="submit" name="" value="DOHVATI">
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function() {
        $("#load").click(function() {
            $("#table_data").append("<p id='loading'>Loading...</p>");
            var sifra = document.getElementById("šifra").value;
            var naziv = document.getElementById("naziv").value;
			
			var podaci = [sifra,naziv];

            $.ajax({                
                type:"POST", 
                url: "../php/UnosObrada.php",
                data: {action: podaci},
                success: function(r) {                   
                   $("#loading").remove();
				   $("#table_data").append('<tr>');
                  $.each(JSON.parse(r),function(i, item){
					  console.log(i + ": " + item);
                      $("#table_data").append('<td>'+ item + '</td>');
                   }) 
				    $("#table_data").append('</tr>');
                }
            });
        });
    });
 </script>
</html>