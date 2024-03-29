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
                        <li><a href="Forma.php">Përfshihu</a></li>
                        
                    </ul>
                </td>
                <td colspan="5">
                    <h1><u>Rreth Nesh</u></h1>
                </td>
                
            </tr>
                
            <tr>
                <td id="side-bar">
                
                </td>
                
                <td>
                <h3>Rreth Artemis Animal Rescue</h3>
                <p>Në Artemis Animal Rescue, ne jemi të shtyrë nga një dashuri dhe respekt i thellë për të gjitha krijesat që ndajnë planetin tonë. Organizata jonë është e përkushtuar ndaj mbrojtjes, kujdesit dhe mirëqenies së kafshëve, shtëpiake dhe të egra. Të frymëzuar nga shpirti i Artemidës, perëndeshës greke e njohur për nderimin e saj për botën natyrore dhe mbrojtjen e kafshëve të egra, ne jemi të përkushtuar të bëjmë një ndryshim pozitiv në jetën e kafshëve.</p>
                
                <h3>Misioni ynë</h3>
                <p>Misioni ynë është të ofrojmë një strehë të sigurt për kafshët në nevojë, të sigurojmë mirëqenien e tyre dhe të avokojmë për të drejtat dhe ruajtjen e tyre. Ne jemi të apasionuar pas shpëtimit, rehabilitimit dhe ristrehimit të kafshëve që janë braktisur, keqtrajtuar ose janë në ankth. Ne gjithashtu punojmë për të rritur ndërgjegjësimin për ruajtjen e jetës së egër dhe për të promovuar pronësinë e përgjegjshme të kafshëve shtëpiake.</p>
                
                <h3>Cfare bëjme ne</h3>
                    <ul>
                <li>Shpëtimi i kafshëve: Ne shpëtojmë dhe ofrojmë një mjedis të kujdesshëm për kafshët që përballen me vështirësi, qofshin ato kafshë shtëpiake të braktisura, kafshë të egra të dëmtuara ose kafshë në krizë.</li>

                <li>Rehabilitimi: Ekipi ynë i ekspertëve dhe vullnetarëve të përkushtuar punojnë pa u lodhur për të rehabilituar kafshët, si fizikisht ashtu edhe emocionalisht. Ne synojmë t'u japim atyre një shans të dytë për një jetë të lumtur dhe të shëndetshme.</li>

                <li>Birësimi dhe rikthimi në shtëpi: Ne përpiqemi të gjejmë shtëpi të dashura dhe të përgjegjshme përgjithmonë për kafshët tona të shpëtuara. Ne përputhim me kujdes çdo kafshë me familjen e duhur për të siguruar një lidhje harmonike.</li>

            <li>Edukimi: Ne besojmë se edukimi është thelbësor për të krijuar një botë më të dhembshur dhe të qëndrueshme. Ne ofrojmë programe dhe burime edukative për të promovuar kuptimin më të mirë të kafshëve dhe nevojave të tyre.</li>
                    </ul>
                    <h3>Our Vision</h3>
            <p>Ne parashikojmë një botë ku të gjitha kafshët trajtohen me mirësi dhe respekt, ku bukuria dhe diversiteti i botës natyrore vlerësohen dhe ku lidhja midis njerëzve dhe kafshëve është një lidhje e kujdesit dhe mirëkuptimit të ndërsjellë. Puna jonë udhëhiqet nga besimi se duke mbrojtur dhe kujdesur për kafshët, ne po ruajmë gjithashtu planetin që të gjithë e quajmë shtëpi, ashtu si perëndesha Artemis vëzhgoi të egra dhe banorët e saj.</p>
            
            <h3>Bashkohu me ne</h3>
            <p>Artemis Animal Rescue nuk është thjesht një organizatë; ne jemi një komunitet i adhuruesve të kafshëve, mbrojtësve dhe mbrojtësve. Bashkohuni me ne në misionin tonë për ta bërë botën një vend më të mirë për kafshët. Pavarësisht nëse doni të dilni vullnetar, të adoptoni një mik të ri me gëzof ose të mbështesni kauzën tonë, ka shumë mënyra për t'u përfshirë.</p>
                
                <p>Faleminderit që vizituat Artemis Animal Rescue dhe për mbështetjen tuaj për të na ndihmuar të krijojmë një të ardhme më të ndritshme për kafshët.</p>
                
                <p>Së bashku, ne mund të bëjmë një ndryshim.</p>
            
            </td>

                
            </tr>


                
                <tr>
                    <td id="side-bar"></td>
                
                    <td><hr></td>
                    
                    
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
                <td colspan="3" id="footer">
                    <p id="footer_p">&copy; 2023 Artemis Wildlife Rescue Group</p>
                </td>
            </tr>
        </table>
    </body>

</html>