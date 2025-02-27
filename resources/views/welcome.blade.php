<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AliMENTE - Nutrição Profissional</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            /* Primary color palette - focused on lavender tones */
            --primary-lavender: #967BB6;
            --light-lavender: #B9A0D6;
            --pale-lavender: #E6E6FA;
            --dark-lavender: #7B68EE;
            
            /* Secondary colors */
            --moss-green: #606c38;
            --light-moss: #8a9a5b;
            
            /* Neutral colors */
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
            --off-white: #f9f9f9;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-gray);
            background-color: var(--off-white);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        /* Navbar */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(123, 104, 238, 0.15);
            padding: 1rem 0;
        }
        
        .navbar-brand {
            color: var(--primary-lavender);
            font-weight: 700;
            font-size: 1.8rem;
            letter-spacing: 0.5px;
        }
        
        .nav-link {
            color: var(--dark-gray);
            font-weight: 600;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-lavender);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--primary-lavender);
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .btn-primary {
            background-color: var(--primary-lavender);
            border-color: var(--primary-lavender);
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(123, 104, 238, 0.2);
        }
        
        .btn-primary:hover {
            background-color: var(--dark-lavender);
            border-color: var(--dark-lavender);
            transform: translateY(-2px);
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(185, 160, 214, 0.8) 0%, rgba(230, 230, 250, 0.9) 100%), 
                        url('https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=1920&q=80') no-repeat center/cover;
            padding: 8rem 0;
            text-align: center;
        }
        
        .hero-title {
            font-weight: 700;
            color: var(--primary-lavender);
            margin-bottom: 1.5rem;
            font-size: 3.5rem;
        }
        
        .hero-subtitle {
            font-weight: 400;
            color: var (--dark-gray);
            margin-bottom: 2.5rem;
            font-size: 1.25rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Features */
        .features-section {
            padding: 5rem 0;
            background-color: white;
            position: relative;
        }
        
        .features-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(230, 230, 250, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
            z-index: 0;
        }
        
        .section-title {
            text-align: center;
            color: var(--primary-lavender);
            margin-bottom: 3rem;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }
        
        .feature-card {
            height: 100%;
            background: white;
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 5px 15px rgba(123, 104, 238, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            border: 1px solid rgba(185, 160, 214, 0.1);
            position: relative;
            z-index: 1;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(123, 104, 238, 0.15);
        }
        
        .icon-circle {
            background-color: var(--pale-lavender);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .icon-circle {
            background-color: var(--primary-lavender);
            color: white;
        }
        
        .feature-card .icon {
            font-size: 2rem;
            color: var(--primary-lavender);
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .icon {
            color: white;
        }
        
        .feature-title {
            color: var(--dark-gray);
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }
        
        /* Testimonials */
        .testimonials-section {
            background-color: var(--pale-lavender);
            padding: 5rem 0;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(123, 104, 238, 0.08);
            height: 100%;
            position: relative;
            border: 1px solid rgba(185, 160, 214, 0.2);
        }
        
        .testimonial-card:before {
            content: '\201C';
            position: absolute;
            top: 1.5rem;
            left: 2rem;
            font-size: 4rem;
            color: var(--light-lavender);
            font-family: Georgia, serif;
            line-height: 1;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            padding-top: 2rem;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
            border: 2px solid var(--pale-lavender);
        }
        
        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-lavender) 0%, var(--dark-lavender) 100%);
            padding: 5rem 0;
            color: white;
            text-align: center;
        }
        
        .cta-title {
            font-weight: 700;
            margin-bottom: 1.5rem;
            font-size: 2.5rem;
        }
        
        .cta-subtitle {
            margin-bottom: 2.5rem;
            font-size: 1.2rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
        }
        
        .btn-light {
            background-color: white;
            color: var(--primary-lavender);
            border: none;
            font-weight: 600;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .btn-light:hover {
            background-color: var(--pale-lavender);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-gray);
            color: white;
            padding: 4rem 0 2rem;
            margin-top: auto;
        }
        
        .footer-brand {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: white;
        }
        
        .footer-text {
            opacity: 0.8;
            margin-bottom: 1.5rem;
        }
        
        .footer-heading {
            font-weight: 600;
            margin-bottom: 1.5rem;
            font-size: 1.25rem;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-link {
            margin-bottom: 0.75rem;
            opacity: 0.8;
            transition: all 0.3s ease;
        }
        
        .footer-link a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-link:hover,
        .footer-link a:hover {
            opacity: 1;
            color: var(--light-lavender);
        }
        
        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background-color: var(--primary-lavender);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            opacity: 0.7;
            font-size: 0.9rem;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-section {
                padding: 5rem 0;
            }
            
            .features-section,
            .testimonials-section,
            .cta-section {
                padding: 4rem 0;
            }
        }
        
        @media (max-width: 767.98px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 1.75rem;
            }
            
            .cta-title {
                font-size: 1.75rem;
            }
            
            .footer [class^="col-"] {
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Ali<span style="font-weight:800;color:var(--dark-lavender)">MENTE</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('google.redirect') }}" class="btn btn-primary">Login with Google</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                                    <a href="{{ route('register') }}" class="btn btn-primary">Registrar</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title">Transforme Sua Saúde Com Nutrição Personalizada</h1>
                    <p class="hero-subtitle">Descubra um caminho personalizado para uma vida mais saudável, 
                    equilibrada e plena com nossos especialistas em nutrição</p>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Comece Sua Jornada Hoje</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Nossos Diferenciais</h2>
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-circle">
                            <i class="fas fa-file-medical icon"></i>
                        </div>
                        <h3 class="feature-title">Planos Personalizados</h3>
                        <p>Planos nutricionais 100% adaptados às suas necessidades específicas, objetivos pessoais e estilo de vida.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-circle">
                            <i class="fas fa-chart-line icon"></i>
                        </div>
                        <h3 class="feature-title">Acompanhamento Contínuo</h3>
                        <p>Monitoramento constante do seu progresso, com ajustes em tempo real e suporte nutricional durante toda sua jornada.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-circle">
                            <i class="fas fa-medal icon"></i>
                        </div>
                        <h3 class="feature-title">Resultados Comprovados</h3>
                        <p>Alcance seus objetivos de saúde com métodos baseados em evidências científicas e orientação profissional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">O Que Nossos Clientes Dizem</h2>
            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">O acompanhamento nutricional mudou completamente minha relação com a comida. Perdi 15kg em 6 meses de uma forma saudável e sustentável.</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Ana Silva" class="author-avatar">
                            <div>
                                <h5 class="mb-0">Ana Silva</h5>
                                <small class="text-muted">Cliente há 8 meses</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">Os nutricionistas são extremamente atenciosos e o plano alimentar é flexível e adaptado à minha rotina agitada. Recomendo muito!</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Carlos Santos" class="author-avatar">
                            <div>
                                <h5 class="mb-0">Carlos Santos</h5>
                                <small class="text-muted">Cliente há 1 ano</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">Minha performance nos treinos melhorou drasticamente depois que comecei a seguir o plano nutricional. Energia durante todo o dia!</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Mariana Costa" class="author-avatar">
                            <div>
                                <h5 class="mb-0">Mariana Costa</h5>
                                <small class="text-muted">Cliente há 6 meses</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="cta-title">Pronto para Transformar sua Saúde?</h2>
                    <p class="cta-subtitle">Dê o primeiro passo hoje para uma vida mais saudável e equilibrada. Nossa equipe de nutricionistas está pronta para te ajudar.</p>
                    <a href="{{ route('register') }}" class="btn btn-light btn-lg">Começar Agora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h4 class="footer-brand">Ali<span style="font-weight:800;color:var(--light-lavender)">MENTE</span></h4>
                    <p class="footer-text">Transformando vidas através da nutrição personalizada e baseada em evidências científicas.</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <!-- Links -->
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-heading">Links Rápidos</h5>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#">Home</a></li>
                        <li class="footer-link"><a href="#">Serviços</a></li>
                        <li class="footer-link"><a href="#">Sobre Nós</a></li>
                        <li class="footer-link"><a href="#">Contato</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-heading">Serviços</h5>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#">Consultas Nutricionais</a></li>
                        <li class="footer-link"><a href="#">Planos Personalizados</a></li>
                        <li class="footer-link"><a href="#">Acompanhamento Online</a></li>
                        <li class="footer-link"><a href="#">Reeducação Alimentar</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div class="col-lg-3 col-md-4">
                    <h5 class="footer-heading">Contato</h5>
                    <ul class="footer-links">
                        <li class="footer-link"><i class="fas fa-map-marker-alt me-2"></i> Av. Paulista, 1000 - São Paulo</li>
                        <li class="footer-link"><i class="fas fa-phone me-2"></i> (11) 99999-9999</li>
                        <li class="footer-link"><i class="fas fa-envelope me-2"></i> contato@alimente.com</li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="footer-bottom">
                <p class="mb-0">&copy; {{ date('Y') }} AliMENTE. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
