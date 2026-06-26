<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DogMind - Adestramento Positivo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <style>
        /* Variáveis de Cores */
        :root {
            --peach: #f39c6b;
            --blue: #3b6b9c;
            --green: #217554;
            --white: #ffffff;
            --font-main: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Resets Básicos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-main);
        }

        body {
            background-color: var(--white);
            color: #333;
        }

        /* --- CABEÇALHO --- */
        header {
            background-color: var(--peach);
            padding: 15px 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .menu-icon {
            font-size: 30px;
            color: var(--blue);
            cursor: pointer;
        }

        .search-bar {
            flex-grow: 1;
            max-width: 500px;
            margin: 0 20px;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 20px 10px 45px;
            border-radius: 25px;
            border: 2px solid var(--blue);
            font-size: 16px;
            outline: none;
        }

        .search-bar i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--blue);
            font-size: 18px;
        }

        .logo {
            background-color: var(--white);
            padding: 5px 15px;
            border-radius: 8px;
            text-align: center;
            color: var(--blue);
            font-weight: bold;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .logo i { font-size: 24px; margin-bottom: 5px;}

        /* --- SEÇÃO HERO (Imagem de fundo) --- */
        .hero {
            background-image: url('https://images.unsplash.com/photo-1544568100-847a948585b9?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            min-height: 500px;
            display: flex;
            justify-content: space-between;
            padding: 40px 5%;
            align-items: flex-start;
        }

        .hero-card {
            background-color: var(--blue);
            color: var(--white);
            padding: 20px;
            border-radius: 15px;
            width: 300px;
            text-align: center;
        }

        .hero-card h2 {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .hero-card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .btn-green {
            background-color: var(--green);
            color: var(--white);
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background 0.3s;
        }

        .btn-green:hover { background-color: #185a40; }

        .hero-menu {
            background-color: var(--blue);
            padding: 20px;
            border-radius: 15px;
            width: 250px;
        }

        .hero-menu ul {
            list-style: none;
        }

        .hero-menu li {
            color: var(--white);
            padding: 10px 0;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        .hero-menu li:last-child { border-bottom: none; }

        /* --- ESTRUTURA DIVIDIDA (Meio a Meio) --- */
        .split-section {
            display: flex;
            flex-wrap: wrap;
            min-height: 400px;
        }

        .half {
            flex: 1;
            min-width: 300px;
            padding: 50px 5%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* --- SEÇÃO: 5 ERROS --- */
        .bg-blue {
            background-color: var(--blue);
            color: var(--white);
        }

        .erros-lista h2 {
            margin-bottom: 30px;
            font-size: 22px;
        }

        .erros-lista ol {
            list-style: none;
            counter-reset: my-counter;
        }

        .erros-lista li {
            counter-increment: my-counter;
            margin-bottom: 15px;
            font-size: 12px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .erros-lista li::before {
            content: counter(my-counter);
            font-size: 30px;
            font-weight: bold;
            color: rgba(255,255,255,0.5);
            margin-right: 10px;
        }

        .image-half {
            background-color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fancy-img {
            width: 80%;
            max-width: 400px;
            aspect-ratio: 1/1;
            object-fit: cover;
            /* Simulando a borda recortada (nuvem/trevo) da imagem */
            border-radius: 20% 50% 30% 50% / 50% 20% 50% 30%; 
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        /* --- SEÇÃO: CATEGORIAS (Verde) --- */
        .bg-green {
            background-color: var(--green);
            color: var(--white);
        }

        .full-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .img-container { padding: 0; } /* Remove padding for full image */

        .categorias-lista {
            list-style: none;
            margin-bottom: 40px;
        }

        .categorias-lista li {
            margin-bottom: 20px;
            font-size: 18px;
            font-style: italic;
        }

        .categorias-lista i {
            margin-right: 15px;
            width: 25px;
            text-align: center;
            color: var(--peach);
        }

        .links-uteis {
            list-style: none;
        }

        .links-uteis li {
            margin-bottom: 15px;
            font-weight: bold;
            cursor: pointer;
        }
        .links-uteis li::before {
            content: '→';
            margin-right: 10px;
        }

        /* --- SEÇÃO: CONTATO --- */
        .contato-info h2 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: normal;
        }

        .contato-info p {
            margin-bottom: 10px;
            font-size: 14px;
        }

        .social-icons {
            margin-top: 30px;
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .social-icons i {
            font-size: 24px;
            cursor: pointer;
        }
        
        .social-icons .fa-youtube {
            font-size: 32px;
        }

        /* --- RODAPÉ --- */
        footer {
            background-color: var(--peach);
            color: var(--white);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            font-style: italic;
            flex-wrap: wrap;
            gap: 10px;
            text-align: center;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }
            .split-section {
                flex-direction: column;
            }
            .search-bar { display: none; } /* Oculta barra de pesquisa no mobile para economizar espaço */
        }
    </style>
</head>
<body>

    <header>
        <div class="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Buscar...">
        </div>
        <div class="logo">
            <i class="fas fa-dog"></i>
            <span>DogMind</span>
        </div>
    </header>

    <section class="hero">
        <div class="hero-card">
            <h2>Aprenda a educar seu melhor amigo de forma positiva.</h2>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR26qLwdTPUM-1-hiHFIdS4j8U2B2--05f1s6NC6-BJng&s=10" alt="Adestrando cachorro">
            <button class="btn-green">Começar Agora</button>
        </div>
        
        <div class="hero-menu">
            <ul>
                <li>Início</li>
                <li>Adestramento Básico</li>
                <li>Comportamento Canino</li>
                <li>Saúde e Bem-Estar</li>
                <li>Raças de Cães</li>
                <li>Sobre Nós</li>
                <li>Contato</li>
            </ul>
        </div>
    </section>

    <section class="split-section">
        <div class="half bg-blue erros-lista">
            <h2>5 ERROS COMUNS NO ADESTRAMENTO:</h2>
            <ol>
                <li>PUNIR O CACHORRO APÓS O COMPORTAMENTO ERRADO</li>
                <li>SER INCONSISTENTE NOS COMANDOS</li>
                <li>NÃO RECOMPENSAR OS COMPORTAMENTOS CORRETOS</li>
                <li>TREINAR POR PERÍODOS MUITO LONGOS</li>
                <li>TER POUCA PACIÊNCIA E ESPERAR RESULTADOS IMEDIATOS</li>
            </ol>
        </div>
        <div class="half image-half">
            <img class="fancy-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9FVjJa7uNfzfIj3O6UpTNyGuc2SzpsNk3k1GK7qBjYQ&s=10" alt="Mulher com cães">
        </div>
    </section>

    <section class="split-section">
        <div class="half img-container">
            <img class="full-img" src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?auto=format&fit=crop&w=800&q=80" alt="Border Collie com coleira">
        </div>
        <div class="half bg-green">
            <ul class="categorias-lista">
                <li><i class="fas fa-dog"></i> Adestramento Básico</li>
                <li><i class="fas fa-bone"></i> Comportamento Canino</li>
                <li><i class="fas fa-heart"></i> Saúde e Bem-Estar</li>
                <li><i class="fas fa-trophy"></i> Raças de Cães</li>
            </ul>
            <ul class="links-uteis">
                <li>Doações</li>
                <li>Entrar</li>
                <li>Voluntários</li>
            </ul>
        </div>
    </section>

    <section class="split-section">
        <div class="half bg-blue contato-info">
            <h2>Entre em contato</h2>
            <p>Telêmaco Borba, Avenida Chanceler Horácio 444</p>
            <p>42999448855</p>
            <p>DogMind@gmail.com</p>
            
            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
        <div class="half image-half">
            <img class="fancy-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZZQ05--ftrYsWpdVoW8g-TZRqLBliwKRWDgOt7lfsQQ&s=10" alt="Mulher com Golden Retriever">
        </div>
    </section>

    <footer>
        <div>DogMind © 2026</div>
        <div>"Promovendo uma convivência melhor entre cães e seus donos."</div>
        <div>Instagram | Facebook | YouTube</div>
    </footer>

</body>
</html>