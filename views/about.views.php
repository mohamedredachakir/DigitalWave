<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>À propos - DigitalWave</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      background: radial-gradient(circle at top, #022c22 0%, #030712 40%, #000000 100%);
    }

  
    @keyframes float {
      0%,100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }

    @keyframes glow {
      0%,100% { box-shadow: 0 0 20px #22C55E; }
      50% { box-shadow: 0 0 60px #22C55E; }
    }

    @keyframes slideUp {
      from { transform: translateY(80px); opacity: 0; }
      to   { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

   
    .float { animation: float 6s ease-in-out infinite; }
    .glow { animation: glow 4s ease-in-out infinite; }
    .slide { animation: slideUp 1.2s ease forwards; opacity: 0; }
    .fade { animation: fadeIn 1.5s ease forwards; opacity: 0; }

    .delay1 { animation-delay: 0.4s; }
    .delay2 { animation-delay: 0.8s; }
    .delay3 { animation-delay: 1.2s; }
    .delay4 { animation-delay: 1.6s; }
  </style>
</head>
<body class="text-white">


<section class="min-h-screen flex items-center justify-center relative overflow-hidden px-6 rounded-3xl">

  <div class="absolute top-10 left-10 w-72 h-72 bg-[#22C55E] opacity-20 rounded-full blur-3xl float"></div>
  <div class="absolute bottom-10 right-10 w-96 h-96 bg-[#22C55E] opacity-10 rounded-full blur-3xl float"></div>

  <div class="text-center max-w-4xl z-10">
    <h1 class="text-6xl md:text-7xl font-black mb-6 slide delay1">
      Qui sommes <span class="text-[#22C55E]">DigitalWave</span> ?
    </h1>

    <p class="text-xl opacity-90 mb-12 slide delay2">
      Une agence créative tournée vers l’innovation numérique, le design moderne
      et les expériences digitales puissantes.
    </p>

    <div class="w-32 h-1 bg-[#22C55E] mx-auto rounded-full glow slide delay3"></div>
  </div>

</section>


<section class="container mx-auto px-6 py-24 grid md:grid-cols-2 gap-20 items-center">

  <div class="slide delay1">
    <h2 class="text-4xl font-bold mb-6 text-[#22C55E]">L’excellence digitale</h2>

    <p class="text-gray-300 mb-6 leading-relaxed text-lg">
      DigitalWave Solutions est spécialisée dans la création d'expériences digitales modernes,
      performantes et ultra esthétiques. Nous combinons technologie, design et stratégie pour
      faire exploser votre présence en ligne.
    </p>

    <ul class="space-y-3 text-gray-200">
      <li><i class="fa-solid fa-check"></i> Design premium & innovant</li>
      <li><i class="fa-solid fa-check"></i> Performance maximale</li>
      <li><i class="fa-solid fa-check"></i> Expérience utilisateur parfaite</li>
      <li><i class="fa-solid fa-check"></i> Technologies modernes</li>
    </ul>

    <a href="/services"
       class="inline-block mt-8 bg-[#22C55E] text-black px-10 py-4 rounded-full font-bold hover:scale-110 transition slide delay2">
      Voir nos services
    </a>
  </div>

  <div class="relative slide delay3">
    <div class="absolute -top-6 -left-6 w-full h-full border-2 border-[#22C55E] rounded-3xl glow"></div>
    <img
      src="https://images.unsplash.com/photo-1605379399642-870262d3d051"
      class="relative rounded-3xl shadow-2xl object-cover w-full h-[450px] fade delay4"
      alt="Digital Team">
  </div>

</section>


<section class="py-24 bg-[#020617] rounded-3xl">
  <h2 class="text-center text-5xl font-black mb-20 slide delay1">Nos valeurs</h2>

  <div class="container mx-auto px-6 grid md:grid-cols-3 gap-10">
    <div class="bg-black/40 backdrop-blur-xl border border-[#22C55E]/40 p-10 rounded-3xl text-center glow slide delay1">
      <div class="text-5xl mb-6"><i class="fa-solid fa-bolt"></i></div>
      <h3 class="text-2xl font-bold mb-4">Innovation</h3>
      <p class="opacity-90">Toujours à la pointe des nouvelles technologies.</p>
    </div>

    <div class="bg-black/40 backdrop-blur-xl border border-[#22C55E]/40 p-10 rounded-3xl text-center glow slide delay2">
      <div class="text-5xl mb-6"><i class="fa-solid fa-fire"></i></div>
      <h3 class="text-2xl font-bold mb-4">Passion</h3>
      <p class="opacity-90">Chaque projet est une œuvre unique.</p>
    </div>

    <div class="bg-black/40 backdrop-blur-xl border border-[#22C55E]/40 p-10 rounded-3xl text-center glow slide delay3">
      <div class="text-5xl mb-6"><i class="fa-solid fa-chess-king"></i></div>
      <h3 class="text-2xl font-bold mb-4">Excellence</h3>
      <p class="opacity-90">Qualité premium & résultats exceptionnels.</p>
    </div>
  </div>
</section>

</body>
</html>
