<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>About</title>
    <style>
        #main-body{
            margin-top:30px;
        }
        .hero{
            display:flex;
            flex-direction: column;
            width:100%;
            align-items: center;
            justify-content: center;
            gap:10px;
            padding:0px 30px;
        }
        .hero h1{
            text-transform: uppercase;
            padding:10px;
        }
        .hero p{
            padding:10px 30px;
            color:#111;
        }
    </style>
</head>
<body>
    <header>
        <?php include './header.php'; ?>
    </header>
    <main id="main-body">
        <div class="hero">
            <h1>About Digital SDM Land Allotment</h1>
            <p>The DILRMP programme was launched by merging two centrally sponsored schemes - Computerization of Land Records (CLR) and Strengthening of Revenue Administration and Updation of Land Records (SRA & ULR) by the Ministry of Rural Development and Department of Land Resources Development (DOLR) for nationwide implementation. The primary objective of DILRMP is to develop a modern, comprehensive and transparent land records management system in the country with a view to implementing a conclusive land-titling system with title guarantee."</p>
        </div>
    </main>
    <footer>
        <?php include './footer.php'; ?>
    </footer>
</body>
</html>
