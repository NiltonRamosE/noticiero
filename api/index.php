<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTICIAS: NILTON RAMOS ENCARNACIÓN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .news-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .category-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .active-category {
            background-color: #3b82f6;
            color: white;
        }
        .hero-slide {
            opacity: 0;
            transition: opacity 1s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }
        .hero-slide.active {
            opacity: 1;
            position: relative;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-20">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800">NILTON RAMOS ENCARNACIÓN</h1>
                    <p class="text-sm text-gray-600 mt-1">Portal de noticias actualizado</p>
                </div>
                <div class="flex space-x-4">
                    <button class="text-gray-600 hover:text-primary-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <button class="text-gray-600 hover:text-primary-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section with Carousel -->
    <section class="bg-gradient-to-r from-primary-600 to-blue-700 text-white py-12 relative overflow-hidden">
        <div class="container mx-auto px-4 relative">
            <?php include("secciones/portada.php"); ?>
            
            <div id="heroCarousel" class="relative">
                <?php foreach($portada as $index => $noticia): ?>
                <div class="hero-slide <?php echo $index === 0 ? 'active' : ''; ?>" id="slide-<?php echo $index; ?>">
                    <div class="max-w-3xl">
                        <h1 class="text-3xl md:text-5xl font-bold mb-4"><?php echo $noticia["titulo"]; ?></h1>
                        <p class="text-lg md:text-xl mb-6 opacity-90"><?php echo $noticia["resumen"]; ?></p>
                        <div class="flex items-center text-sm">
                            <span class="bg-white text-primary-600 px-3 py-1 rounded-full font-semibold">Noticia Destacada</span>
                            <span class="ml-4"><?php echo $noticia["fecha"] ?? "Hoy"; ?></span>
                            <span class="ml-4">Por: <?php echo $noticia["autor"]; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="flex justify-center mt-6 space-x-2">
                <?php foreach($portada as $index => $noticia): ?>
                <button class="hero-indicator w-3 h-3 rounded-full bg-white opacity-50 transition-opacity <?php echo $index === 0 ? 'opacity-100' : ''; ?>" data-slide="<?php echo $index; ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Category Navigation -->
    <section class="bg-white shadow-sm sticky top-16 z-10">
        <div class="container mx-auto px-4 py-4">
            <div class="flex overflow-x-auto space-x-2 pb-2">
                <button class="category-btn px-4 py-2 rounded-full bg-primary-500 text-white font-medium whitespace-nowrap" data-category="todas">Todas</button>
                <button class="category-btn px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-medium whitespace-nowrap" data-category="ciencia">Ciencia</button>
                <button class="category-btn px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-medium whitespace-nowrap" data-category="tecnologia">Tecnología</button>
                <button class="category-btn px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-medium whitespace-nowrap" data-category="internacional">Internacional</button>
                <button class="category-btn px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-medium whitespace-nowrap" data-category="nacional">Nacional</button>
                <button class="category-btn px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-medium whitespace-nowrap" data-category="economica">Economía</button>
                <button class="category-btn px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-medium whitespace-nowrap" data-category="deportes">Deportes</button>
                <button class="category-btn px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-medium whitespace-nowrap" data-category="cultura">Cultura</button>
                <button class="category-btn px-4 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-medium whitespace-nowrap" data-category="opinion">Opinión</button>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content Area -->
            <div class="lg:w-3/4">
                <div id="newsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Las noticias se cargarán dinámicamente aquí -->
                </div>
                
                <!-- Loading State -->
                <div id="loadingState" class="flex justify-center items-center py-12">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-primary-500"></div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-xl shadow-md p-6 sticky top-32">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Noticias Recientes</h3>
                    <div id="recentNews" class="space-y-4">
                        <!-- Las noticias recientes se cargarán aquí -->
                    </div>
                    
                    <!-- Newsletter Subscription -->
                    <div class="mt-8 p-4 bg-primary-50 rounded-lg">
                        <h4 class="font-bold text-primary-700 mb-2">Suscríbete a nuestro boletín</h4>
                        <p class="text-sm text-gray-600 mb-3">Recibe las noticias más importantes directamente en tu email.</p>
                        <form class="space-y-2">
                            <input type="email" placeholder="Tu email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            <button type="submit" class="w-full bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Suscribirse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-xl font-bold">NILTON RAMOS ENCARNACIÓN</h2>
                    <p class="text-gray-400 mt-2">Portal de noticias actualizado</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-6 pt-6 text-center text-gray-400">
                <p>© 2023 NILTON RAMOS ENCARNACIÓN. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <button id="backToTop" class="fixed bottom-4 right-4 bg-primary-600 text-white p-3 rounded-full shadow-lg hover:bg-primary-700 transition-colors hidden z-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <script>
        // Variables globales
        let allNews = [];
        let currentCategory = 'todas';
        let currentSlide = 0;
        let slideInterval;

        // Función para obtener el color de la categoría
        function getCategoryColor(category) {
            const colors = {
                'ciencia': 'bg-green-100 text-green-800',
                'tecnologia': 'bg-blue-100 text-blue-800',
                'internacional': 'bg-red-100 text-red-800',
                'nacional': 'bg-yellow-100 text-yellow-800',
                'economica': 'bg-purple-100 text-purple-800',
                'deportes': 'bg-orange-100 text-orange-800',
                'cultura': 'bg-pink-100 text-pink-800',
                'opinion': 'bg-indigo-100 text-indigo-800',
                'gente': 'bg-teal-100 text-teal-800',
                'formacion': 'bg-cyan-100 text-cyan-800',
                'empleo': 'bg-lime-100 text-lime-800',
                'sociedad': 'bg-amber-100 text-amber-800',
                'contenedores': 'bg-gray-100 text-gray-800',
                'git': 'bg-gray-100 text-gray-800',
                'openstack': 'bg-gray-100 text-gray-800',
                'openshift': 'bg-gray-100 text-gray-800',
                'television': 'bg-purple-100 text-purple-800',
                'video': 'bg-red-100 text-red-800'
            };
            return colors[category] || 'bg-gray-100 text-gray-800';
        }

        // Función para cargar todas las noticias
        async function loadAllNews() {
            const sections = [
                'ciencia', 'contenedores', 'cultura', 'deportes', 'economica', 
                'empleo', 'formacion', 'gente', 'git', 'nacional', 
                'openshift', 'openstack', 'opinion', 'sociedad', 'tecnologia', 
                'television', 'video', 'internacional'
            ];

            for (const section of sections) {
                try {
                    const response = await fetch(`secciones/${section}.php`);
                    if (response.ok) {
                        const content = await response.text();
                        const tempDiv = document.createElement('div');
                        tempDiv.innerHTML = content;
                        const script = tempDiv.querySelector('script');
                        if (script) {
                            eval(script.innerHTML);
                            if (window[section]) {
                                allNews = allNews.concat(window[section].map(news => ({
                                    ...news,
                                    section: section
                                })));
                            }
                        }
                    }
                } catch (error) {
                    console.error(`Error loading ${section}:`, error);
                }
            }
            
            // Ordenar noticias por fecha (más recientes primero)
            allNews.sort((a, b) => new Date(b.fecha) - new Date(a.fecha));
            
            // Mostrar noticias
            displayNews();
            displayRecentNews();
        }

        // Función para mostrar noticias según la categoría seleccionada
        function displayNews() {
            const container = document.getElementById('newsContainer');
            const loadingState = document.getElementById('loadingState');
            
            // Ocultar loading state
            loadingState.classList.add('hidden');
            
            // Filtrar noticias por categoría
            let filteredNews = allNews;
            if (currentCategory !== 'todas') {
                filteredNews = allNews.filter(news => news.section === currentCategory);
            }
            
            // Generar HTML para las noticias
            container.innerHTML = filteredNews.map(news => `
                <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="${news.imagen}" alt="${news.titulo}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="category-badge ${getCategoryColor(news.section)} mb-3">${news.categoria}</span>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">${news.titulo}</h3>
                        <p class="text-gray-600 mb-4">${news.resumen}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">${news.autor}</span>
                            <span class="text-sm text-gray-500">${news.fecha}</span>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Función para mostrar noticias recientes en el sidebar
        function displayRecentNews() {
            const recentContainer = document.getElementById('recentNews');
            const recentNews = allNews.slice(0, 5); // Mostrar las 5 más recientes
            
            recentContainer.innerHTML = recentNews.map(news => `
                <div class="border-b border-gray-200 pb-4 last:border-0 last:pb-0">
                    <span class="category-badge ${getCategoryColor(news.section)} text-xs mb-1">${news.categoria}</span>
                    <h4 class="font-semibold text-gray-800 text-sm mb-1">${news.titulo}</h4>
                    <p class="text-xs text-gray-600 mb-2 line-clamp-2">${news.resumen}</p>
                    <div class="flex justify-between text-xs text-gray-500">
                        <span>${news.autor}</span>
                        <span>${news.fecha}</span>
                    </div>
                </div>
            `).join('');
        }

        // Función para cambiar de categoría
        function changeCategory(category) {
            currentCategory = category;
            
            // Actualizar botones activos
            document.querySelectorAll('.category-btn').forEach(btn => {
                if (btn.dataset.category === category) {
                    btn.classList.remove('bg-gray-200', 'text-gray-700');
                    btn.classList.add('bg-primary-500', 'text-white');
                } else {
                    btn.classList.remove('bg-primary-500', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                }
            });
            
            // Mostrar loading state
            document.getElementById('loadingState').classList.remove('hidden');
            
            // Mostrar noticias después de un pequeño delay para mejor UX
            setTimeout(displayNews, 300);
        }

        // Función para el carousel de la portada
        function startCarousel() {
            const slides = document.querySelectorAll('.hero-slide');
            const indicators = document.querySelectorAll('.hero-indicator');
            
            function showSlide(index) {
                slides.forEach(slide => slide.classList.remove('active'));
                indicators.forEach(indicator => indicator.classList.remove('opacity-100'));
                
                slides[index].classList.add('active');
                indicators[index].classList.add('opacity-100');
                currentSlide = index;
            }
            
            function nextSlide() {
                const nextIndex = (currentSlide + 1) % slides.length;
                showSlide(nextIndex);
            }
            
            // Configurar intervalo para cambio automático
            slideInterval = setInterval(nextSlide, 5000);
            
            // Configurar eventos para los indicadores
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    clearInterval(slideInterval);
                    showSlide(index);
                    slideInterval = setInterval(nextSlide, 5000);
                });
            });
        }

        // Back to top button functionality
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('hidden');
            } else {
                backToTopButton.classList.add('hidden');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Inicialización cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', function() {
            // Cargar todas las noticias
            loadAllNews();
            
            // Iniciar carousel
            startCarousel();
            
            // Configurar eventos para los botones de categoría
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    changeCategory(btn.dataset.category);
                });
            });
        });
    </script>
</body>
</html>