<?php require 'data/data.services.php'; ?>

<body class="bg-gradient-to-b from-gray-950 via-gray-900 to-gray-950 text-white min-h-screen overflow-x-hidden">

<section class="relative py-32 overflow-hidden rounded-lg">
    <div class="absolute inset-0">
        <div class="absolute w-80 h-80 bg-purple-600/20 rounded-full top-[-100px] left-[-80px] animate-blob1"></div>
        <div class="absolute w-96 h-96 bg-green-500/20 rounded-full bottom-[-150px] right-[-100px] animate-blob2"></div>
        <div class="absolute w-64 h-64 bg-teal-400/20 rounded-full top-[120px] right-[50px] animate-blob3"></div>
    </div>
    <div class="container mx-auto relative z-10 text-center ">
        <h1 class="text-6xl sm:text-7xl font-extrabold mb-4 animate-fadeInDown">Nos Services</h1>
        <p class="text-xl sm:text-2xl opacity-80 animate-fadeInUp delay-200">Solutions digitales créatives et professionnelles</p>
    </div>
</section>

<div class="container mx-auto px-4 mt-20">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-12">
        <?php foreach ($services as $service): ?>
        <div class="group perspective">
            <div class="bg-gradient-to-tr from-gray-800 via-gray-900 to-gray-800 rounded-3xl shadow-2xl p-8 h-[420px] flex flex-col justify-between transform transition-transform duration-700 hover:-translate-y-3 hover:scale-105 hover:shadow-[0_20px_60px_rgba(0,255,180,0.5)]">
                <div class="flex flex-col items-center text-center">
                    <div class="w-20 h-20 bg-gradient-to-tr from-green-400 to-teal-400 text-white rounded-full flex items-center justify-center mb-4 text-3xl font-bold shadow-lg glow-icon group-hover:animate-bounce">★</div>
                    <h3 class="text-2xl font-bold mb-2 text-white group-hover:text-green-400 transition-colors duration-500"><?= $service['title'] ?></h3>
                    <p class="text-gray-300 text-sm leading-relaxed"><?= $service['description'] ?></p>
                </div>
                <a href="/contact" class="mt-6 inline-block px-6 py-3 border border-green-400 text-green-400 rounded-full font-semibold hover:bg-green-400 hover:text-white transition-all duration-300 w-full text-center">
                    En savoir plus
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<style>
@keyframes blob1 {0%,100%{transform:translate(0,0) scale(1);}33%{transform:translate(40px,-30px) scale(1.2);}66%{transform:translate(-30px,40px) scale(0.9);}}
@keyframes blob2 {0%,100%{transform:translate(0,0) scale(1);}33%{transform:translate(-50px,30px) scale(1.15);}66%{transform:translate(30px,-40px) scale(0.95);}}
@keyframes blob3 {0%,100%{transform:translate(0,0) scale(1);}33%{transform:translate(35px,20px) scale(1.1);}66%{transform:translate(-25px,-30px) scale(0.9);}}
@keyframes fadeInDown {0%{opacity:0;transform:translateY(-40px);}100%{opacity:1;transform:translateY(0);}}
@keyframes fadeInUp {0%{opacity:0;transform:translateY(40px);}100%{opacity:1;transform:translateY(0);}}
.animate-blob1{animation:blob1 12s infinite ease-in-out;}
.animate-blob2{animation:blob2 15s infinite ease-in-out;}
.animate-blob3{animation:blob3 10s infinite ease-in-out;}
.animate-fadeInDown{animation:fadeInDown 1.2s forwards;}
.animate-fadeInUp{animation:fadeInUp 1.2s forwards;animation-delay:0.3s;}
.perspective{perspective:1200px;}
.glow-icon{box-shadow:0 0 15px rgba(0,255,180,0.5),0 0 40px rgba(0,255,180,0.3);}
</style>
</body>
