<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--<style>
            table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
        </style> -->


        <script>

function getRandomColor() {
  const letters = "0123456789ABCDEF";
  let color = "#";
  for (let i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}


function setRandomBackgroundColor() {
  const randomColor = getRandomColor();
  document.body.style.backgroundColor = randomColor;
}


window.addEventListener('load', setRandomBackgroundColor);


</script>

    </head>
    <body>
        <table>
            <tr>
                <th colspan="6" id="header">
                    <h1>Artemis Wildlife Rescue Group</h1>
                </th>
                
            </tr>
            <tr>
                <td id="side-bar" style="width:145px" id="side-bar">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Artikuj.php">Artikuj</a></li>
                        
                        <li><a href="RrethNesh.php">Rreth Nesh</a></li>
                    </ul>
                </td>
                <td colspan="5">
                    <h1><u>Përfshihu</u></h1>
                </td>
                
            </tr>



                
            <tr>
                <td id="side-bar">
                
                </td>
                <td></td>
                <td id="Form_Main" width="450px">
                    <form action="submit_form.php" method="post">
                        <label for="first_name">Emri:</label>
                        <input type="text" id="first_name" name="first_name" required><br>                    
                        <label for="last_name">Mbiemri:</label>
                        <input type="text" id="last_name" name="last_name" required>
                            <br>
                    
                        <label for="email">Adresa e email:</label>
                        <input type="email" id="email" name="email" required><br>
                        
                        <label> Dëshironi të merrni emaile në të ardhmen?</label>
                        <div class="radio-group">
                        
                            <input type="radio" id="yes" name="subscribe" value="yes">
                        <label for="yes">Po</label>
                        
                                <input type="radio" id="no" name="subscribe" value="no">
                        <label for="no">Jo

                        </label><br><br>


                       

                        </div>
                        <input type="submit" value="Subscribe">
                      </form>
                </td>
                <td></td>
                
            </tr>
            


                <tr>
                    <td id="side-bar"></td>
                
                    <td></td>
                    <td><hr></td>
                    <td></td>
                </tr>
                <tr>
                    <td id="side-bar"></td>
                    <td colspan="3"; id="footnote_head">
                        
                    <h3>LIDHUNI ME NE!</h3>
                    <p id="footnote">
                        <a href="Test.html">YouTube</a>
                        <a href="Test.html">TikTok</a>
                        <a href="Test.html">Facebook</a>
                        <a href="Test.html">Instagram</a>
                        <a href="Test.html">Twitter</a>
                    </p>
    
                    </td>
                
                </tr>
            
               <!-- <td id="form">
                    <h2>Contact Me</h2>
                    <form action="submit_form.php" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <br>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                        <br>
                        <input type="submit" value="Submit">
                    </form>
                </td>-->
            
            <tr>
                <td colspan="4" id="footer">
                    <p id="footer_p">&copy; 2023 Artemis Wildlife Rescue Group</p>
                </td>
            </tr>
        </table>

        


    </body>

</html>