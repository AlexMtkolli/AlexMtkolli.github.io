<!DOCTYPE html>
<html>
<head>
    <title>Artemis Wildlife Rescue</title>
    <!-- borderi i tables -->
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

    <link rel="stylesheet" type="text/css" href="style.css">

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


    function getRandomColor() {
      const letters = "0123456789ABCDEF";
      let color = "#";
      for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    }

    function changeBorderColor() {
      const imageContainer = document.getElementById('imazhi');
      const randomColor = getRandomColor();
      imageContainer.style.borderColor = randomColor;
    }

    setInterval(changeBorderColor, 200);

  </script>

</head>
<body>
    <table>
        <tr>
            <th colspan="3" id="header">
                <h1>Artemis Wildlife Rescue Group</h1>
            </th>
        </tr>
        <tr>
            <td id="side-bar" style="width:145px" id="side-bar">
                <ul>
                    <li><a href="Artikuj.php">Artikuj</a></li>
                    <li><a href="Forma.php">Përfshihu</a></li>
                    <li><a href="RrethNesh.php">Rreth Nesh</a></li>
                </ul>
            </td>
            <td id="permbajtja">
                <h2>Kush jemi ne</h2>
                <p>&nbsp  Ne bashkëpunojmë me komunitetet lokale për të ruajtur burimet natyrore nga të cilat varemi të gjithë dhe për të ndërtuar një të ardhme në të cilën njerëzit dhe natyra lulëzojnë.
                    Së bashku me partnerët në të gjitha nivelet, ne transformojmë tregjet dhe politikat drejt qëndrueshmërisë, trajtojmë kërcënimet që shkaktojnë krizën klimatike dhe mbrojmë dhe rivendosim jetën e egër dhe habitatet e tyre. </p>
                <p>Kontrollo <b>Rreth Nesh</b> në shiritin anësor të majtë për më shumë informacion.
                    <hr></p>
            </td>
            <tr>
            <td id="side-bar">
            
            </td>
            
            <td id="Middle_cell">
            <h1><b>Blog</b> - October 2023</h1>
            
            </td>
            <tr>
                <td id="side-bar"></td>
                <td>
                    <div align="center">
                <img id="imazhi" src="https://people.com/thmb/K9i789dNq7NI3oEpujF_tfkQMGQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(644x359:646x361)/michigan-puppies-abandoned-110722-3-57a75a167ad649fba4ca903da6c92369.jpg" alt="Main image">
            </div>
            </td>
           
            </tr>
            
            <tr>
                <td id="side-bar"></td>
            <td >
                <p id="blog_p">
                    Gjithçka nisi kur një qytetar i shqetësuar u përplas me një strehë të improvizuar në një zonë të shkretë, një strehë që strehonte një pjellë këlyshësh të vegjël e të pastrehë. Pamja e këtyre qenieve të pafuqishme dhe të pafajshme la një gjurmë të pashlyeshme në zemrën e saj. Ajo e dinte se nuk mund të qëndronte duarkryq, kështu që i bëri thirrje një grupi lokal të shpëtimit të kafshëve. Anëtarët e përkushtuar të grupit të shpëtimit të kafshëve nuk humbën kohë. Të armatosur me batanije, transportues dhe shumë dashuri, ata u nisën në misionin e tyre të shpëtimit. Udhëtimi i tyre i çoi në vendin e largët ku këlyshët ishin braktisur. Me të mbërritur, ata u takuan me sytë e pesë topave të vegjël, që dridheshin, të grumbulluara së bashku për ngrohtësi dhe rehati.
                
                </p>
                <p id="blog_p">
                    &nbsp Këta këlyshë, me gjasë të braktisur nga një pronar i pakujdesshëm, ishin të pisët, të uritur dhe të frikësuar. Shpëtuesit e dinin se ata ishin shpresa e tyre e vetme për mbijetesë. Me duar të buta dhe fjalë qetësuese, ata mblodhën me kujdes këlyshët, duke u ofruar atyre një shije mirësie në një botë që më parë kishte qenë e pamëshirshme.                </p>
                <p id="blog_p">
                    &nbsp Kthehet në qendrën e shpëtimit, këlyshëve iu dha një banjë e ngrohtë, ushqim i freskët dhe një shtrat komod.
                    Kalimi nga i ftohti dhe i ashpër jashtë në një mjedis të dashur dhe të sigurt nuk ishte asgjë më pak se mrekulli.
                    Nuk ishin vetëm nevojat e tyre fizike që u plotësuan, por edhe mirëqenia e tyre emocionale.
                    Vullnetarët kaluan orë të tëra duke i përqafuar dhe ngushëlluar këta shpirtra të vegjël, duke i siguruar se tani ishin në duar të mira.
                </p>
                    <p id="blog_p">
                    &nbsp Grupi i shpëtimit e dinte se puna e tyre nuk kishte përfunduar pasi këlyshët ishin të sigurt dhe të rehatshëm.
                    Ata filluan punën e rëndësishme për të gjetur shtëpi të dashura përgjithmonë për secilin prej tyre.
                    Nëpërmjet rrjetit të tyre të mbështetësve, mediave sociale dhe ngjarjeve lokale, ata shpejt filluan të merrnin pyetje nga individë dhe familje të etur për të adoptuar këta këlyshë të çmuar.</p>
                    <p id="revision"><i>Last revised at 23rd October 2023</i></p>
                    <hr>


                </p>

                <?php

                    $counterFile = 'visitor_count.txt';


                    function incrementVisitorCount($counterFile) {
                    $count = 0;


                    if (file_exists($counterFile)) {
        
                    $count = (int) file_get_contents($counterFile);
                     }


                    $count++;


                    file_put_contents($counterFile, $count);

                    return $count;
                    }

                    $visitorCount = incrementVisitorCount($counterFile);


                    echo "Ju jeni visitori i: " . $visitorCount;
                    ?>

</tr>
            <tr>
                <td id="side-bar"></td>
                <td>
                    <hr>
                </td>
                
            </tr>
            <tr>
                <td id="side-bar"></td>
                <td id="footnote_head">
                    
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
        </tr>
        </tr>
        <tr >
            <td  colspan="3" id="footer">
                <p id="footer_p">&copy; 2023 Artemis Wildlife Rescue Group</p>
            </td>
        </tr>
    </table>
</body>
</html>