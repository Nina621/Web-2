<!DOCTYPE html>
<html lang="hr">

<head>

	<meta charset="utf-8" />
    <title>Pregled</title>
    <link rel="stylesheet"  href="css/style.css"/>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	

    <script type="text/javascript">
    $(function() {
        $(".button").click(function() { 
            var sifra = document.getElementById("sifra_pod").value;
            var naziv = document.getElementById("naziv").value;
            var adresa = document.getElementById("adresa").value;
            var pos_br = document.getElementById("post_br").value;        
            var IBAN = document.getElementById("IBAN_pod").value; 
			
			var podaci = [sifra,naziv,adresa,pos_br,IBAN];
			
            $.ajax({                
                type:"POST", 
                url: "../php/UnosObrada.php",
                data: {action2: podaci},
                success: function(r) {
					alert(r);
                   /* switch (r.o_error){
                        case 0:
                            $("#hiddenPolje").text("Uspjeli ste dodati poduzeće");
                            $("#hiddenPolje").removeAttr("hidden");                            
                            break;
                        case 101:
                            $("#hiddenPolje").text("Greška!");
                            $("#hiddenPolje").removeAttr("hidden");
                            break;
                        default:
                            break;*/
                    }
                });       

        });
    });
 </script>
</head>
<body>

  <nav class="class">
<a href="../Login/Login.php">Predhodno</a> 
</nav>

<nav class="class2">
<a href="../Unos/Unos.php">Sljedeće</a>
</nav>

    <div class="okvir">
        <!--<div class="web_form_middle">-->
            <div>
                <table border="0" cellspacing="15" align="center">
                    <tbody>
                        <tr>
                            <td>
                                ŠIFRA PODUZEĆA
                            </td>

                            <td>
                                <input id="sifra_pod" class="trans border" type="number" required>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                NAZIV
                            </td>
                            <td>
                                <input id="naziv" class=" trans bottom_line" type="text" required>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                ADRESA
                            </td>
                            <td>
                                <input id="adresa" class="trans bottom_line" type="text" required>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                POŠTANSKI BROJ
                            </td>
                            <td>

                                <input id="post_br" class="trans bottom_line" type="number" required="required">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                IBAN
                            </td>
                            <td>
                                <input id="IBAN_pod" class="trans bottom_line" type="number" required>
                            </td>
                            <td>
                                BANKA
                            </td>
                            <td>
                                <input id="banka" class="trans bottom_line" type="search">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                OIB
                            </td>
                            <td>
                                <input id="bank_OIB" class="trans bottom_line" type="number">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                KONTAKT
                            </td>
                            <td>
                                <input id="kontakt" class="trans bottom_line" type="number">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                OPIS
                            </td>
                            <td>
                                <input id="opis" class="trans bottom_line" type="text">
                            </td>
                        </tr>
                </table>
                <br />
                <button class="button" type="submit">DODAJ</button>
                <br />
            </div>
        </div>
    <!--</div>-->
</body>
</html>