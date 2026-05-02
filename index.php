<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxime VATBLE | Indie Game Dev</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;700&display=swap');

        body {
            margin: 0;
            overflow-x: hidden;
            background-color: #020205;
            color: #ffffff;
            font-family: 'Space Grotesk', sans-serif;
        }

        canvas {
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
        }

        .hero-text {
            text-shadow: 0 0 20px rgba(0, 150, 255, 0.5);
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #3b82f6;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        section {
            min-height: 100vh;
            padding: 100px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .project-card:hover {
            transform: translateY(-10px);
            border-color: #3b82f6;
            background: rgba(59, 130, 246, 0.05);
        }

        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #020205;
        }
        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #3b82f6;
        }
    </style>
</head>
<body>

<nav class="fixed top-0 w-full z-[100] px-8 py-6 flex justify-between items-center glass rounded-none border-t-0 border-x-0">
    <div class="text-2xl font-bold tracking-tighter">M.VATBLE</div>
    
    <div class="relative">
        <button id="menuBtn" class="p-2 hover:bg-white/10 rounded-full transition-all flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256">
                <path d="M112,128a16,16,0,1,1,16,16A16,16,0,0,1,112,128Zm-64,0a16,16,0,1,1,16,16A16,16,0,0,1,48,128Zm128,0a16,16,0,1,1,16,16A16,16,0,0,1,176,128Z"></path>
            </svg>
        </button>
        <div id="navMenu" class="hidden absolute right-0 mt-4 w-64 glass border border-white/20 rounded-2xl shadow-2xl py-4 overflow-hidden transform origin-top-right transition-all">
            <a href="#home" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom">
                Home
            </a>
            <a href="#experience" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom">
                Expériences
            </a>
            <a href="#education" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom">
                Études & Formation
            </a>
            <a href="#professionalization" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom">
                Spécialisation SIO
            </a>
            <a href="#certifications" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom">
                Certifications
            </a>
            <a href="#skills" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom">
                Compétences
            </a>
            <a href="#projects" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom">
                Jeux Web
            </a>
            <a href="#veilleinformation" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom">
                Veille Technologique
            </a>
            <a href="#recommendation" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom">
                Recommandation
            </a>
            <a href="#synthese" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom">
                Synthèse
            </a>
            <div class="border-t border-white/10 mt-2 pt-2">
                <a href="#contact" class="block px-6 py-3 hover:bg-blue-500/20 transition-colors nav-link-custom font-bold text-blue-400">
                    Contact
                </a>
            </div>
        </div>
    </div>
</nav>

    <div class="max-w-6xl mx-auto">
        <!-- Hero Section -->
        <section id="home" class="text-center md:text-left">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="space-y-4">
                    <span class="text-blue-400 font-bold tracking-[0.3em] uppercase text-sm">Future Indie Developer</span>
                    <h1 class="text-6xl md:text-8xl font-black leading-none hero-text">MAXIME<br><span class="text-blue-500">VATBLE</span></h1>
                    <p class="text-gray-400 max-w-xl text-lg md:text-xl font-light leading-relaxed">
                        Passion fuels performance. I build worlds where everyone finds fun. With a blend of creativity and code, I’m crafting the next generation of indie games.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-6 justify-center md:justify-start">
                        <a href="#projects" class="px-8 py-4 bg-blue-600 hover:bg-blue-500 rounded-full font-bold transition-all transform hover:scale-105">View My Worlds</a>
                    </div>
                </div>

                <div class="mx-auto md:ml-auto md:mr-0">
                    <div class="glass p-2 border border-white/15 rounded-3xl max-w-sm">
                        <img src="CVPFP.png" alt="MAXIME VATBLE" class="w-full h-auto object-cover rounded-3xl shadow-lg" />
                    </div>
                </div>
            </div>
        </section>

<section id="education">
    <h2 class="text-4xl font-bold mb-12 flex items-center gap-4">
        <span class="h-px w-12 bg-blue-500"></span> Études & Formation
    </h2>
    <div class="grid md:grid-cols-2 gap-8">
        <div class="glass p-8 border-l-4 border-blue-500">
            <span class="text-blue-400 text-sm font-bold">2024 — 2026</span>
            <h3 class="text-2xl font-bold mt-2">Association Martiniquaise de l'Education Populaire</h3>
            <p class="text-gray-400 mt-2">Formation spécialisée en technologies Web.</p>
            <div class="flex gap-2 mt-4">
                <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-xs rounded border border-blue-500/20 italic">Methodes de Plannification</span>
                <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-xs rounded border border-blue-500/20 italic">Casi totalité de mes langages</span>
            </div>
        </div>

        <div class="glass p-8 border-l-4 border-gray-500">
            <span class="text-gray-400 text-sm font-bold">Septembre 2021 — Juin 2024</span>
            <h3 class="text-2xl font-bold mt-2">Collège/Lycée Saint-Joseph De Cluny</h3>
            <p class="text-blue-400 text-sm font-medium mt-1 italic">Antenne De Sainte-Luce</p>
            
            <div class="mt-4 space-y-2">
                <p class="text-white font-bold text-lg">Baccalauréat général</p>
                <p class="text-blue-300/80 text-sm font-medium uppercase tracking-wider">Spécialités : Mathématiques, Physiques</p>
                <p class="text-gray-300 text-sm">Niveau : <span class="text-blue-300 font-bold">Mention Assez-Bien</span></p>
            </div>
            
            <div class="flex flex-wrap gap-2 mt-4">
                <span class="px-3 py-1 bg-white/5 text-gray-400 text-[10px] uppercase rounded border border-white/10 font-bold">Sérieux</span>
                <span class="px-3 py-1 bg-white/5 text-gray-400 text-[10px] uppercase rounded border border-white/10 font-bold">Détermination</span>
            </div>
        </div>
    </div>
</section>

<section id="professionalization">
    <h2 class="text-4xl font-bold mb-12 text-center">Spécialisation BTS SIO</h2>
    <div class="grid md:grid-cols-2 gap-8 items-stretch">
        <div class="glass p-8 border-2 border-blue-500/50 shadow-[0_0_30px_rgba(59,130,246,0.2)] relative overflow-hidden">
            <div class="absolute top-0 right-0 px-3 py-1 bg-blue-600 text-[10px] font-bold uppercase tracking-tighter">My Choice</div>
            <div class="flex items-center gap-3 mb-6">
                <div class="p-3 bg-blue-500/20 rounded-lg text-cyan-400">💻</div>
                <h3 class="text-2xl font-bold text-cyan-400">SLAM</h3>
            </div>
            <p class="text-sm text-cyan-100/80 mb-6 font-light italic">Solutions logicielles et applications métiers</p>
            <ul class="space-y-4 text-white">
                <li class="flex items-start gap-2 text-sm">
                    <span class="text-cyan-400">•</span> Conception et développement d'applications.
                </li>
                <li class="flex items-start gap-2 text-sm">
                    <span class="text-cyan-400">•</span> Gestion de bases de données complexes (SQL).
                </li>
                <li class="flex items-start gap-2 text-sm">
                    <span class="text-cyan-400">•</span> Maîtrise des cycles de vie logiciels (Agile).
                </li>
            </ul>
        </div>

        <div class="glass p-8 opacity-80 hover:opacity-100 transition-opacity border border-emerald-900/30">
            <div class="flex items-center gap-3 mb-6">
                <div class="p-3 bg-emerald-500/10 rounded-lg text-emerald-400">🛡️</div>
                <h3 class="text-2xl font-bold text-emerald-400">SISR</h3>
            </div>
            <p class="text-sm text-emerald-100/60 mb-6 font-light italic">Solutions d'infrastructure, systèmes et réseaux</p>
            <ul class="space-y-4 text-gray-400">
                <li class="flex items-start gap-2 text-sm">
                    <span class="text-emerald-500">-</span> Administration de serveurs et maintenance.
                </li>
                <li class="flex items-start gap-2 text-sm">
                    <span class="text-emerald-500">-</span> Sécurisation des infrastructures réseaux.
                </li>
                <li class="flex items-start gap-2 text-sm">
                    <span class="text-emerald-500">-</span> Gestion des équipements (switchs, routeurs).
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="experience" class="py-12">
    <h2 class="text-4xl font-bold mb-12 flex items-center gap-4">
        <span class="h-px w-12 bg-blue-500"></span> Expérience Professionnelle
    </h2>

    <div class="space-y-8">
        <div class="glass p-8 border-l-4 border-blue-500 relative overflow-hidden">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center border border-black/10 shrink-0">
                    <span class="text-blue-500 font-bold text-xs text-center leading-tight">SAMAC</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white">Aéroport de Martinique Aimé Césaire</h3>
                    <p class="text-gray-400 text-sm italic">Stage • Seconde Année (2023 — 2024)</p>
                </div>
            </div>

            <div class="relative pl-6 border-l border-white/10">
                <div class="absolute w-3 h-3 bg-blue-500 rounded-full -left-[6.5px] top-2 shadow-[0_0_8px_rgba(59,130,246,0.5)]"></div>
                <h4 class="text-xl font-semibold text-white">Administrateur Systèmes & Web</h4>
                <p class="text-gray-400 text-sm mt-2 leading-relaxed">
                    Mise à jour majeure de l'application Passbolt (v5.1 vers v5.9) et montée de version du parc serveur Debian (v9 vers v13). Gestion du cycle de vie logiciel via la migration d'environnements de pré-production vers la production. Maintenance technique WordPress et développement de plugins (interfaçage CSV vers WSDL).
                </p>
                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="px-2 py-1 bg-blue-500/10 rounded text-[10px] text-blue-400 uppercase font-bold border border-blue-500/20">Passbolt</span>
                    <span class="px-2 py-1 bg-blue-500/10 rounded text-[10px] text-blue-400 uppercase font-bold border border-blue-500/20">Debian</span>
                    <span class="px-2 py-1 bg-blue-500/10 rounded text-[10px] text-blue-400 uppercase font-bold border border-blue-500/20">WordPress</span>
                    <span class="px-2 py-1 bg-blue-500/10 rounded text-[10px] text-blue-400 uppercase font-bold border border-blue-500/20">WSDL</span>
                </div>
            </div>
        </div>

        <div class="glass p-8 border-l-4 border-blue-400/50 relative overflow-hidden">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center border border-black/10 shrink-0">
                    <span class="text-blue-400 font-bold text-xs text-center leading-tight">SAMAC</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white">Aéroport de Martinique Aimé Césaire</h3>
                    <p class="text-gray-400 text-sm italic">Stage • Première Année (2022 — 2023)</p>
                </div>
            </div>

            <div class="relative pl-6 border-l border-white/10">
                <div class="absolute w-3 h-3 bg-blue-400/50 rounded-full -left-[6.5px] top-2"></div>
                <h4 class="text-xl font-semibold text-white">Technicien Systèmes et Réseaux</h4>
                <p class="text-gray-400 text-sm mt-2 leading-relaxed">
                    Déploiement et mise à jour de la solution de gestion de mots de passe Passbolt. Sécurisation critique et automatisation des sauvegardes de l'environnement d'impression centralisé via PaperCut. Support à la mise en place d'environnements de test (Preproduction).
                </p>
                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="px-2 py-1 bg-white/5 rounded text-[10px] text-gray-400 uppercase font-bold border border-white/10">Passbolt</span>
                    <span class="px-2 py-1 bg-white/5 rounded text-[10px] text-gray-400 uppercase font-bold border border-white/10">PaperCut</span>
                    <span class="px-2 py-1 bg-white/5 rounded text-[10px] text-gray-400 uppercase font-bold border border-white/10">Administration</span>
                </div>
            </div>
        </div>

        <div class="glass p-8 border-l-4 border-gray-600 relative overflow-hidden">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center border border-black/10 shrink-0">
                    <span class="text-gray-600 font-bold text-xs">BC</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white">BeeCee</h3>
                    <p class="text-gray-400 text-sm italic">Stage • 1 mois (Mars 2022 — Avril 2022)</p>
                </div>
            </div>

            <div class="space-y-6">
                <div class="relative pl-6 border-l border-white/10">
                    <div class="absolute w-3 h-3 bg-gray-600 rounded-full -left-[6.5px] top-2"></div>
                    <h4 class="text-lg font-semibold text-white">Développeur Web & Graphiste</h4>
                    <p class="text-gray-400 text-sm mt-2 leading-relaxed">
                        Optimisation de l'expérience utilisateur (UX) via l'intégration CSS personnalisée. Création de supports visuels marketing pour la promotion de marques et refonte de menus digitaux.
                    </p>
                    <div class="flex flex-wrap gap-2 mt-3">
                        <span class="text-[10px] text-blue-400 uppercase font-bold">HTML5 / CSS3</span>
                        <span class="text-[10px] text-blue-400 uppercase font-bold">Design Graphique</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Lightbox certification -->
    <div id="certLightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 p-4" style="backdrop-filter: blur(4px);">
        <div class="relative max-w-[90vw] max-h-[90vh]">
            <img id="certLightboxImg" src="" alt="Certification agrandie" class="w-auto max-w-full max-h-[90vh] rounded-lg shadow-xl" />
            <button id="certLightboxClose" class="absolute top-2 right-2 bg-white/10 text-white rounded-full w-10 h-10 flex items-center justify-center border border-white/30 hover:bg-white/20">✕</button>
        </div>
    </div>

                <!-- Skills Section -->
<section id="skills" class="items-center text-center">
            <h2 class="text-4xl font-bold mb-16">Affaires Tech: Mes compétences principales</h2>
            
            <h3 class="text-xl font-bold uppercase tracking-[0.2em] text-blue-400 mb-8">Coding Languages</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 w-full mb-16">
                <div class="glass p-6">
                    <div class="h-16 mb-4 flex items-center justify-center">
                        <img src="HTML5_Logo.png" alt="HTML5" class="h-full object-contain">
                    </div>
                    <h4 class="font-bold">HTML</h4>
                    <p class="text-sm text-gray-400 mt-2">Structuring</p>
                </div>
                <div class="glass p-6">
                    <div class="h-16 mb-4 flex items-center justify-center">
                        <img src="Css3Logo.png" alt="CSS3" class="h-full object-contain">
                    </div>
                    <h4 class="font-bold">CSS</h4>
                    <p class="text-sm text-gray-400 mt-2">Styling</p>
                </div>
                <div class="glass p-6">
                    <div class="h-16 mb-4 flex items-center justify-center">
                        <img src="php_logo.png" alt="PHP" class="h-full object-contain">
                    </div>
                    <h4 class="font-bold">PHP</h4>
                    <p class="text-sm text-gray-400 mt-2">Server-side</p>
                </div>
                <div class="glass p-6">
                    <div class="h-16 mb-4 flex items-center justify-center">
                        <img src="JS_LOGO.png" alt="JavaScript" class="h-full object-contain">
                    </div>
                    <h4 class="font-bold">JavaScript</h4>
                    <p class="text-sm text-gray-400 mt-2">Core-tech</p>
                </div>
            </div>

            <h3 class="text-xl font-bold uppercase tracking-[0.2em] text-blue-400 mb-8">Frameworks</h3>
            <div class="flex flex-wrap justify-center gap-8 w-full">
                <div class="glass p-6 w-full md:w-64">
                    <div class="h-16 mb-4 flex items-center justify-center">
                        <img src="logotype.min.svg" alt="Laravel" class="h-full object-contain">
                    </div>
                    <h4 class="font-bold">Laravel</h4>
                    <p class="text-sm text-gray-400 mt-2">Sampling</p>
                </div>
                
                <div class="glass p-6 w-full md:w-64 border-blue-500/30 shadow-[0_0_20px_rgba(59,130,246,0.1)]">
                    <div class="h-16 mb-4 flex items-center justify-center">
                        <img src="Tailwind_Logo.png" alt="Tailwind CSS" class="h-full object-contain">
                    </div>
                    <h4 class="font-bold">Tailwind CSS</h4>
                    <p class="text-sm text-blue-400 mt-2 font-medium italic">Currently used for this website</p>
                </div>
            </div>
        </section>

<section id="statistics" class="items-center text-center py-12">
    <h2 class="text-4xl font-bold mb-16 flex items-center justify-center gap-4 text-white">
        <span class="h-px w-12 bg-blue-500"></span> Statistiques
    </h2>

    <div class="p-6 w-full max-w-5xl mx-auto space-y-10">
        <div class="glass p-8 border border-white/10 rounded-3xl relative overflow-hidden group">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-bold uppercase tracking-wider text-white/90">Client-Side Stack</h3>
                <span class="text-[10px] bg-sky-500/20 text-sky-400 px-2 py-1 rounded border border-sky-500/30 uppercase font-bold">Frontend Runtime</span>
            </div>

            <div class="w-full bg-black/40 rounded-2xl h-12 border-2 border-white/5 overflow-hidden flex relative shadow-inner">
                <div class="bg-yellow-400 h-full shadow-[inset_0_0_20px_rgba(250,204,21,0.6)] group-hover:shadow-[inset_0_0_30px_rgba(250,204,21,0.8)] transition-all duration-500" 
                     style="width: 45%"></div>
                <div class="bg-blue-500 h-full shadow-[inset_0_0_20px_rgba(59,130,246,0.6)] group-hover:shadow-[inset_0_0_30px_rgba(59,130,246,0.8)] transition-all duration-500 border-x border-white/10" 
                     style="width: 35%"></div>
                <div class="bg-orange-500 h-full shadow-[inset_0_0_20px_rgba(249,115,22,0.6)] group-hover:shadow-[inset_0_0_30px_rgba(249,115,22,0.8)] transition-all duration-500" 
                     style="width: 20%"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <div class="flex flex-col items-center md:items-start border-l-2 pl-4 border-yellow-400">
                    <span class="text-[10px] font-bold uppercase text-yellow-500/80">JavaScript</span>
                    <span class="text-3xl font-black text-white">45%</span>
                </div>
                <div class="flex flex-col items-center md:items-start border-l-2 pl-4 border-blue-500">
                    <span class="text-[10px] font-bold uppercase text-blue-500/80">CSS / Tailwind</span>
                    <span class="text-3xl font-black text-white">35%</span>
                </div>
                <div class="flex flex-col items-center md:items-start border-l-2 pl-4 border-orange-500">
                    <span class="text-[10px] font-bold uppercase text-orange-500/80">HTML / JSX</span>
                    <span class="text-3xl font-black text-white">20%</span>
                </div>
            </div>
        </div>

        <div class="glass p-8 border border-white/10 rounded-3xl relative overflow-hidden group">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-bold uppercase tracking-wider text-white/90">Server-Side Stack</h3>
                <span class="text-[10px] bg-indigo-500/20 text-indigo-400 px-2 py-1 rounded border border-indigo-500/30 uppercase font-bold">Backend Engine</span>
            </div>

            <div class="w-full bg-black/40 rounded-2xl h-12 border-2 border-white/5 overflow-hidden flex relative shadow-inner">
                <div class="bg-indigo-500 h-full shadow-[inset_0_0_20px_rgba(99,102,241,0.7)] group-hover:shadow-[inset_0_0_30px_rgba(99,102,241,0.9)] transition-all duration-500" 
                     style="width: 80%"></div>
                <div class="bg-emerald-400 h-full shadow-[inset_0_0_20px_rgba(52,211,153,0.7)] group-hover:shadow-[inset_0_0_30px_rgba(52,211,153,0.9)] transition-all duration-500 border-l border-white/10" 
                     style="width: 20%"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div class="flex flex-col items-center md:items-start border-l-2 pl-4 border-indigo-500">
                    <span class="text-[10px] font-bold uppercase text-indigo-400">PHP (Logic)</span>
                    <span class="text-3xl font-black text-white">80%</span>
                </div>
                <div class="flex flex-col items-center md:items-start border-l-2 pl-4 border-emerald-400">
                    <span class="text-[10px] font-bold uppercase text-emerald-400">SQL (Database)</span>
                    <span class="text-3xl font-black text-white">20%</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="certifications">
    <h2 class="text-4xl font-bold mb-12 flex items-center justify-center gap-4">
        <span class="h-px w-12 bg-blue-500"></span> Certifications
    </h2>
    <div class="grid md:grid-cols-2 gap-8">
        <div class="glass p-8 border-l-4 border-blue-500">
            <span class="text-blue-400 text-sm font-bold">2025</span>
            <h3 class="text-2xl font-bold mt-2">PIX - Certification Informatique</h3>
            <p class="text-gray-400 mt-2">Maîtrise des compétences numériques et professionnelles.</p>
            <p class="text-sm text-gray-500 mt-4">Résultat : Certifié</p>
        </div>

        <div class="glass p-8 border-l-4 border-emerald-500">
            <span class="text-emerald-300 text-sm font-bold">2024</span>
            <h3 class="text-2xl font-bold mt-2">Formation Développement Web</h3>
            <p class="text-gray-400 mt-2">Acquis en HTML, CSS, JavaScript et PHP.</p>
            <p class="text-sm text-gray-500 mt-4">Organisme : Association Martiniquaise de l'Education Populaire</p>
        </div>
    </div>

    <h3 class="text-2xl font-bold mt-12 mb-6">Visionneuse PDF intégrée</h3>
    <div class="glass p-4 border border-white/15">
        <p class="text-gray-400 mb-4">
            Si l’iframe est bloquée, ouvre le PDF directement.
        </p>
        <div class="flex gap-3 items-center mb-4">
            <a href="certification-pix-20260106.pdf" target="_blank" class="text-blue-400 hover:text-blue-300 font-bold">
                PIX 2026 (nouvel onglet)
            </a>
            <a href="certification-pix-20240129.pdf" target="_blank" class="text-blue-400 hover:text-blue-300 font-bold">
                PIX 2024 (nouvel onglet)
            </a>
        </div>
        <object data="certification-pix-20260106.pdf" type="application/pdf" width="100%" height="520">
            <p>Votre navigateur ne peut pas afficher les PDFs en ligne. <a href="certification-pix-20260106.pdf" target="_blank">Ouvrir en plein écran</a>.</p>
        </object>
    </div>

        <h3 class="text-2xl font-bold mt-12 mb-6">Captures d'écran des certifications</h3>
    <div class="grid md:grid-cols-2 gap-6">
        <div class="glass p-4 border border-white/10">
            <img src="openclassroommini.png" data-full="Certifications-Openclassrooms.png" alt="Certification OpenClassrooms" class="cert-img w-full h-48 object-cover rounded-lg shadow cursor-pointer" />
            <p class="text-gray-300 text-sm mt-3">Exemple de cours suivi et certificat OpenClassrooms.</p>
        </div>
        <div class="glass p-4 border border-white/10">
            <img src="Logoudemymini.png" data-full="Certifications-Udemy.png" alt="Certification Udemy" class="cert-img w-full h-48 object-cover rounded-lg shadow cursor-pointer" />
            <p class="text-gray-300 text-sm mt-3">Exemple de cours suivi et certificat Udemy.</p>
        </div>
    </div>

</section>


        <!-- Projects Section -->
        <section id="projects">
            <h2 class="text-4xl font-bold mb-12 flex items-center gap-4">
                <span class="h-px w-12 bg-blue-500"></span> Portfolio
            </h2>
            <div class="grid md:grid-cols-2 gap-8">
                <a href="https://galaxyplatform.portfoliosio.ovh" class="block">
                <div class="glass p-8 project-card transition-all duration-500 cursor-pointer">
                    <div class="aspect-video overflow-hidden rounded-xl mb-6 border border-white/5 relative group">
                        <img src="alpha-project.jpg" alt="Project Alpha Screenshot" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        
                        <div class="absolute inset-0 bg-blue-900/20 flex items-center justify-center">
                            <span class="text-blue-400 font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300 italic bg-black/50 px-4 py-2 rounded-full backdrop-blur-sm">VOIR LE PROJET</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-gray-300">Galactic Drift</h3>
                    <p class="text-gray-500 mb-4 font-light">Enter in this space platformer game where every star system holds a new adventure and properties.</p>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 bg-white/5 rounded-md text-xs border border-white/10 uppercase text-gray-400">html / css / php</span>
                        <span class="px-3 py-1 bg-white/5 rounded-md text-xs border border-white/10 uppercase text-gray-400">javascript</span>
                        <span class="px-3 py-1 bg-white/5 rounded-md text-xs border border-white/10 uppercase text-gray-400">No mobile support!</span>
                    </div>
                </div>
                </a>

                <a href="https://shoot.portfoliosio.ovh" class="block">
                <div class="glass p-8 project-card transition-all duration-500 cursor-pointer">
                    <div class="aspect-video bg-purple-900/20 rounded-xl mb-6 flex items-center justify-center border border-white/5">
                        <img src="SIOCORE.png" alt="Project Alpha Screenshot" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-gray-300">SIO.CORE</h3>
                    <p class="text-gray-500 mb-4 font-light">A 2D Shooting Game with strategy and speed needed to excel.</p>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 bg-white/5 rounded-md text-xs border border-white/10 uppercase text-gray-400">html / css / php</span>
                        <span class="px-3 py-1 bg-white/5 rounded-md text-xs border border-white/10 uppercase text-gray-400">Mobile support</span>
                    </div>
                </div>
                </a>
            </div>
        </section>


        <section id="veilleinformation" class="py-16">
            <h2 class="text-4xl font-bold mb-8 flex items-center gap-4">
                <span class="h-px w-12 bg-blue-500"></span> Veille Informationnelle
            </h2>
            <p class="text-gray-300 mb-4 text-center">Suivez l'actualité technologique et les tendances du secteur telephonique.</p>
            <div class="glass p-8 border border-white/10">
                <iframe src="https://gamma.app/embed/fs5bi88nm2br7ck" style="width: 1920px; max-width: 100%; height: 700px" allow="fullscreen" title="Google Alerts – Présentation complète"></iframe>
            </div>
            <p class="text-gray-300 mt-8 mb-4 text-center">Un aperçu de ma veille technologique mobile, organisée avec Notion.</p>
            <div class="glass p-8 border border-white/10">
                <iframe src="https://gamma.app/embed/l2xu297g2eyslen" style="width: 1920px; max-width: 100%; height: 700px" allow="fullscreen" title="Veille technologique mobile avec Notion"></iframe>
            </div>
        </section>

        <!-- Recommandation Section -->
        <section id="recommendation" class="py-16">
            <h2 class="text-4xl font-bold mb-8 flex items-center gap-4">
                <span class="h-px w-12 bg-blue-500"></span> Recommandation
            </h2>
            <div class="glass p-8 border border-white/10">
                <p class="text-gray-300 mb-4 text-center">Voici une appréciation de mon tuteur de stage de l'Aéroport de la Martinique (SAMAC). Cliquez sur la miniature pour afficher la lettre.</p>
                <div class="flex flex-col items-center gap-4">
                    <img id="recommandationThumb" src="SAMAC-LOGO.png" alt="Miniature lettre de recommandation" class="w-3/4 md:w-2/5 h-auto rounded-xl shadow-xl cursor-pointer border border-white/20" />
                    <p class="text-xs text-blue-300/90 italic -mt-2">Cliquez moi</p>
                    <div class="text-gray-400 text-center">
                        <p class="font-bold text-lg">Lettre de recommandation (PDF)</p>
                        <p class="text-sm">Cliquez sur l'image pour afficher le PDF.</p>
                    </div>
                </div>
            </div>

            <div id="recommandationModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 p-4">
                <div id="recommandationModalContent" class="relative w-full max-w-7xl h-[80vh] bg-black rounded-xl border border-white/20 overflow-hidden">
                    <iframe src="" data-src="Lettre-de-recommendation-SAMAC.pdf" class="w-full h-full" frameborder="0"></iframe>
                    <button id="recommandationClose" class="absolute top-3 right-3 bg-white/10 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-white/20">✕</button>
                </div>
            </div>
        </section>

        <!-- Synthèse Section -->
        <section id="synthese" class="py-16">
            <h2 class="text-4xl font-bold mb-8 flex items-center gap-4">
                <span class="h-px w-12 bg-blue-500"></span> Tableau de synthèse
            </h2>
            <div class="glass p-8 border border-white/10">
                <p class="text-gray-300 mb-4 text-center">Quelques notions acquises durant l’année. Cliquez sur la miniature pour agrandir le PDF.</p>
                <div class="flex flex-col items-center gap-4">
                    <img id="syntheseThumb" src="tableau-synthese-thumb.png" alt="Miniature tableau synthèse" class="w-3/4 md:w-2/5 h-auto rounded-xl shadow-xl cursor-pointer border border-white/20" />
                    <div class="text-gray-400 text-center">
                        <p class="font-bold text-lg">Tableau de synthèse (PDF)</p>
                        <p class="text-sm">Cliquez sur l’image pour afficher le PDF.</p>
                    </div>
                </div>
            </div>

            <div id="syntheseModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 p-4">
                <div id="syntheseModalContent" class="relative w-full max-w-7xl h-[80vh] bg-black rounded-xl border border-white/20 overflow-hidden">
                    <iframe src="" data-src="Vatble_Maxime_Tableau_de_synthèse - Tableau_de_synthèse.pdf" class="w-full h-full" frameborder="0"></iframe>
                    <button id="syntheseClose" class="absolute top-3 right-3 bg-white/10 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-white/20">✕</button>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
            <section id="contact" class="pb-20">
                <div class="glass p-12 text-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent"></div>
                    <h2 class="text-4xl font-bold mb-4">Mission Control</h2>
                    <p class="text-gray-400 mb-8 max-w-lg mx-auto">Prêt à collaborer sur un projet de jeu ou une application web ? Discutons-en.</p>
                    
                    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mt-8">
                        <button id="copyEmailBtn" class="flex items-center gap-3 px-6 py-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-2xl transition-all group">
                            <svg class="w-6 h-6 text-white group-hover:text-blue-400 transition-colors" id="mailIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span id="mailText" class="font-medium transition-colors">Messagerie</span>
                        </button>

                        <a href="https://github.com/MaximeVTB" target="_blank" class="flex items-center gap-3 px-6 py-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-2xl transition-all group">
                            <svg class="w-6 h-6 text-white group-hover:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.041-1.416-4.041-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            <span class="font-medium">GitHub</span>
                        </a>

                        <a href="https://www.linkedin.com/in/maxime-vatble-53b66434a" target="_blank" class="flex items-center gap-3 px-6 py-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-2xl transition-all group">
                            <svg class="w-6 h-6 text-white group-hover:text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                            <span class="font-medium">LinkedIn</span>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <footer class="py-10 text-center text-gray-600 text-sm border-t border-white/5">
            &copy; 2024 Maxime VATBLE. All rights reserved. | Built for the stars.
        </footer>



    <script>
        // --- THREE.JS BACKGROUND ---
        let scene, camera, renderer, stars, nebula;

        function initBackground() {
            scene = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
            camera.position.z = 1;

            renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);

            // Stars
            const starGeometry = new THREE.BufferGeometry();
            const starMaterial = new THREE.PointsMaterial({ color: 0xffffff, size: 0.7, transparent: true });

            const starVertices = [];
            for (let i = 0; i < 6000; i++) {
                const x = (Math.random() - 0.5) * 2000;
                const y = (Math.random() - 0.5) * 2000;
                const z = (Math.random() - 0.5) * 2000;
                starVertices.push(x, y, z);
            }
            starGeometry.setAttribute('position', new THREE.Float32BufferAttribute(starVertices, 3));
            stars = new THREE.Points(starGeometry, starMaterial);
            scene.add(stars);

            // Subtle Nebula (Glow)
            const nebulaGeo = new THREE.SphereGeometry(15, 32, 32);
            const nebulaMat = new THREE.MeshBasicMaterial({
                color: 0x0044ff,
                transparent: true,
                opacity: 0.05,
                side: THREE.BackSide
            });
            nebula = new THREE.Mesh(nebulaGeo, nebulaMat);
            scene.add(nebula);

            window.addEventListener('resize', onWindowResize, false);
            document.addEventListener('mousemove', onMouseMove, false);

            animate();
        }

        function onWindowResize() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        }

        let mouseX = 0, mouseY = 0;
        function onMouseMove(event) {
            mouseX = (event.clientX - window.innerWidth / 2) / 200;
            mouseY = (event.clientY - window.innerHeight / 2) / 200;
        }

// 1. Supprime ou commente cette ligne dans ta fonction initBackground() :
// document.addEventListener('mousemove', onMouseMove, false);

// 2. Remplace la fonction animate par celle-ci :
function animate() {
    requestAnimationFrame(animate);

    // Rotation constante pour l'effet "haut à gauche"
    // On fait tourner la scène sur l'axe X et Y
    stars.rotation.y += 0.001; // Vitesse horizontale
    stars.rotation.x += 0.0005; // Vitesse verticale


    // On retire le mouvement basé sur mouseX / mouseY pour garder une vitesse constante
    // La caméra reste fixe ou peut avoir un très léger balancement automatique
    camera.lookAt(scene.position);

    renderer.render(scene, camera);
}

        window.onload = initBackground;

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        const certLightbox = document.getElementById('certLightbox');
        const certLightboxImg = document.getElementById('certLightboxImg');
        const certLightboxClose = document.getElementById('certLightboxClose');

        document.querySelectorAll('.cert-img').forEach(img => {
            img.addEventListener('click', () => {
                certLightboxImg.src = img.dataset.full || img.src;
                certLightbox.classList.remove('hidden');
                certLightbox.classList.add('flex');
            });
        });

        function closeCertLightbox() {
            certLightbox.classList.add('hidden');
            certLightbox.classList.remove('flex');
            certLightboxImg.src = '';
        }

        certLightboxClose.addEventListener('click', closeCertLightbox);
        certLightbox.addEventListener('click', (e) => {
            if (e.target === certLightbox) {
                closeCertLightbox();
            }
        });

        // Recommandation PDF modal
        const recommandationThumb = document.getElementById('recommandationThumb');
        const recommandationModal = document.getElementById('recommandationModal');
        const recommandationIframe = recommandationModal.querySelector('iframe');
        const recommandationClose = document.getElementById('recommandationClose');

        function openRecommandationModal() {
            const src = recommandationIframe.getAttribute('data-src');
            recommandationIframe.src = src;
            recommandationModal.classList.remove('hidden');
            recommandationModal.classList.add('flex');
        }

        function closeRecommandationModal() {
            recommandationModal.classList.add('hidden');
            recommandationModal.classList.remove('flex');
            recommandationIframe.src = '';
        }

        recommandationThumb.addEventListener('click', openRecommandationModal);
        recommandationClose.addEventListener('click', closeRecommandationModal);
        recommandationModal.addEventListener('click', (e) => {
            if (e.target === recommandationModal) {
                closeRecommandationModal();
            }
        });

        // Synthèse PDF modal
        const syntheseThumb = document.getElementById('syntheseThumb');
        const syntheseModal = document.getElementById('syntheseModal');
        const syntheseModalContent = document.getElementById('syntheseModalContent');
        const syntheseIframe = syntheseModal.querySelector('iframe');
        const syntheseClose = document.getElementById('syntheseClose');

        function openSyntheseModal() {
            const src = syntheseIframe.getAttribute('data-src');
            syntheseIframe.src = src;
            syntheseModal.classList.remove('hidden');
            syntheseModal.classList.add('flex');
        }

        function closeSyntheseModal() {
            syntheseModal.classList.add('hidden');
            syntheseModal.classList.remove('flex');
            syntheseIframe.src = '';
        }

        syntheseThumb.addEventListener('click', openSyntheseModal);
        syntheseClose.addEventListener('click', closeSyntheseModal);
        syntheseModal.addEventListener('click', (e) => {
            if (e.target === syntheseModal) {
                closeSyntheseModal();
            }
        });

            // --- GESTION DU MENU NAV ---
        const menuBtn = document.getElementById('menuBtn');
        const navMenu = document.getElementById('navMenu');

        // Basculer l'affichage du menu
        menuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            navMenu.classList.toggle('hidden');
        });

        // Fermer le menu si on clique sur un lien
        document.querySelectorAll('.nav-link-custom').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.add('hidden');
            });
        });

        // Fermer le menu si on clique n'importe où ailleurs sur la page
        window.addEventListener('click', () => {
            if (!navMenu.classList.contains('hidden')) {
                navMenu.classList.add('hidden');
            }
        });

                // --- FONCTION COPIER EMAIL ---
        const copyBtn = document.getElementById('copyEmailBtn');
        const mailText = document.getElementById('mailText');
        const mailIcon = document.getElementById('mailIcon');
        const emailAddress = "vatblemaxime@gmail.com";

        copyBtn.addEventListener('click', () => {
            // 1. Copier dans le presse-papier
            navigator.clipboard.writeText(emailAddress).then(() => {
                
                // 2. Sauvegarder l'état initial
                const originalBg = copyBtn.className;
                const originalText = mailText.innerText;

                // 3. Appliquer le style "Copié" (Vert)
                copyBtn.classList.add('!bg-green-600', '!border-green-400');
                mailText.innerText = "Copié !";
                mailIcon.classList.add('text-white');

                // 4. Revenir à l'état initial après 1 seconde (1000ms)
                setTimeout(() => {
                    copyBtn.classList.remove('!bg-green-600', '!border-green-400');
                    mailText.innerText = originalText;
                }, 1000);
            });
        });

    </script>
</body>
</html>