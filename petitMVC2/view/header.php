<html>

<head>
    <style>
        nav{
            border:2px solid lavender;
            border-radius: 10px;
        }
        
        ul{
            display: flex;
            justify-content: center;
            gap: 50px;
            font-size: 30px;
        }

        li {
            list-style: none;
        }

        a{
            text-decoration: none;
            color: gray;
        }
        
        a:hover{
            color: red;
        }
       
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?=_BASE?>/student/add">Créer un étudiant</a></li>
                <li><a href="<?=_BASE?>/course/record">Créer un cours</a></li>
                <li><a href="<?=_BASE?>/student/afficher">Liste des étudiants</a></li>
                <li><a href="<?=_BASE?>/course/afficherCourse">Liste des cours</a></li>
            </ul>
        </nav>
    </header>
</body>
</html> 