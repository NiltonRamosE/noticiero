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
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-10">
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

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary-600 to-blue-700 text-white py-12">
        <div class="container mx-auto px-4">
            <?php include("secciones/portada.php"); ?>
            <div class="max-w-3xl">
                <h1 class="text-3xl md:text-5xl font-bold mb-4"><?php echo $portada["titulo"]; ?></h1>
                <p class="text-lg md:text-xl mb-6 opacity-90"><?php echo $portada["resumen"]; ?></p>
                <div class="flex items-center text-sm">
                    <span class="bg-white text-primary-600 px-3 py-1 rounded-full font-semibold">Noticia Destacada</span>
                    <span class="ml-4"><?php echo $portada["fecha"] ?? "Hoy"; ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Fila 1 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <?php include("secciones/internacional.php"); ?>
            <?php include("secciones/nacional.php"); ?>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-blue-100 text-blue-800 mb-3">Internacional</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $internacional["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $internacional["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $internacional["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $internacional["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-green-100 text-green-800 mb-3">Nacional</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $nacional["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $nacional["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $nacional["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $nacional["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Fila 1 -->

        <!-- Fila 2 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <?php include("secciones/economia.php"); ?>
            <?php include("secciones/opinion.php"); ?>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-gray-100 text-gray-800 mb-3">Economía</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $economia["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $economia["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $economia["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $economia["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-yellow-100 text-yellow-800 mb-3">Opinión</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $opinion["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $opinion["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $opinion["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $opinion["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Fila 2 -->

        <!-- Fila 3 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <?php include("secciones/tecnologia.php"); ?>
            <?php include("secciones/ciencia.php"); ?>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-blue-100 text-blue-800 mb-3">Tecnología</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $tecnologia["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $tecnologia["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $tecnologia["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $tecnologia["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-green-100 text-green-800 mb-3">Ciencia</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $ciencia["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $ciencia["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $ciencia["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $ciencia["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Fila 3 -->

        <!-- Fila 4 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <?php include("secciones/cultura.php"); ?>
            <?php include("secciones/gente.php"); ?>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-gray-100 text-gray-800 mb-3">Cultura</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $cultura["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $cultura["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $cultura["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $cultura["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-yellow-100 text-yellow-800 mb-3">Gente</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $gente["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $gente["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $gente["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $gente["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Fila 4 -->

        <!-- Fila 5 -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <?php include("secciones/deportes.php"); ?>
            <?php include("secciones/television.php"); ?>
            <?php include("secciones/video.php"); ?>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-blue-100 text-blue-800 mb-3">Deportes</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $deportes["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $deportes["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $deportes["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $deportes["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-green-100 text-green-800 mb-3">Televisión</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $television["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $television["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $television["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $television["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-purple-100 text-purple-800 mb-3">Video</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $video["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $video["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $video["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $video["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Fila 5 -->

        <!-- Fila 6 -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <?php include("secciones/formacion.php"); ?>
            <?php include("secciones/empleo.php"); ?>
            <?php include("secciones/sociedad.php"); ?>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-blue-100 text-blue-800 mb-3">Formación</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $formacion["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $formacion["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $formacion["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $formacion["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-green-100 text-green-800 mb-3">Empleo</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $empleo["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $empleo["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $empleo["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $empleo["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-indigo-100 text-indigo-800 mb-3">Sociedad</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $sociedad["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $sociedad["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $sociedad["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $sociedad["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Fila 6 -->

        <!-- Fila 7 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <?php include("secciones/openstack.php"); ?>
            <?php include("secciones/git.php"); ?>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-blue-100 text-blue-800 mb-3">OpenStack</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $openstack["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $openstack["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $openstack["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $openstack["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-green-100 text-green-800 mb-3">Git</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $git["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $git["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $git["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $git["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Fila 7 -->

        <!-- Fila 8 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <?php include("secciones/contenedores.php"); ?>
            <?php include("secciones/openshift.php"); ?>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-gray-100 text-gray-800 mb-3">Contenedores</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $contenedores["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $contenedores["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $contenedores["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $contenedores["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
            
            <div class="news-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <span class="category-badge bg-yellow-100 text-yellow-800 mb-3">OpenShift</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo $openshift["titulo"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $openshift["resumen"]; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500"><?php echo $openshift["autor"]; ?></span>
                        <span class="text-sm text-gray-500"><?php echo $openshift["fecha"] ?? "Hoy"; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Fila 8 -->
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
    <button id="backToTop" class="fixed bottom-4 right-4 bg-primary-600 text-white p-3 rounded-full shadow-lg hover:bg-primary-700 transition-colors hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <script>
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
    </script>
</body>
</html>