<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflop | Admin - Edition</title>
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../static/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/" class="logo">< Retour au site</a>
                </li>
            </ul>
        </nav>
    </header>
    <main id="admin">
        <div class="heading-container">
            <h1>Edition</h1>
        </div>
        <form method="POST">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" value="">
    
            <label for="synopsis">Synopsis</label>
            <textarea name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
    
            <label for="thumbnail">Affiche</label>
            <input type="text" id="thumbnail" name="thumbnail" value="">
    
            <label for="category">Category</label>
            <select name="category" id="category">
                <option value="recent">Ajouts récents</option>
                <option value="movie">Film</option>
                <option value="serie">Série</option>
            </select>
    
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>