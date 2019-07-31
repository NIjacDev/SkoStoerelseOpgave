<!DOCTYPE html>
<html lang="en">
<head>
<title>SkoStoerelse</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/SideManagement.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="JS/SkoGraf.js"></script>
    
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="#" id="Hjem">HJEM</a></li>
                <li><a href="#" id="Brugere">BRUGERE</a></li>
                <li><a href="#" id="Oversigt">OVERSIGT</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="content">
            <article class="OpretBrugerInfo" id="OBI">
                <h1>OPRET PROFIL</h1>
                <form action="includes/IndsetBrugerInfo.inc.php" method="POST">
                    <input type="text" name="Navn" placeholder="Navn">
                    <input type="text" name="Alder" placeholder="Alder">
                    <input type="text" name="Email" placeholder="Email">
                    <input type="text" name="SkoStr" placeholder="Sko størrelse">
                    <input type="submit" id="subBI" name="submit-btn">
                </form>
            </article>
            <article class="SeBrugerInfo" id="SBE">
                <h1>brugere!</h1>
                <div class="sqlData">
                    <?php include 'includes/BrugerInfo.inc.php'; ?>
                </div>              
            </article>
            <article class="SkoStrGraf" id="SSG">
                <h1>Her kan du se en graf over sko stoerelser!</h1>
                <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
            </article>
            
        </section>
    </main>

    <footer class="footer">
        <ul>
            <li>H1 Skal Opgave: Skostoerrelse.</li>
            <li>Nicolai H Jacobsen.</li>
            <li>30-07-2019.</li>
        </ul>
    </footer>
    
</body>
</html>