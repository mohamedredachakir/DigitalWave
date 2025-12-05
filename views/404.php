<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 - Page introuvable</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>
@keyframes float {
  0%,100% { transform: translateY(-20px); }
  50% { transform: translateY(20px); }
}
@keyframes spin-slow {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}
@keyframes fade-up {
  from { opacity: 0; transform: translateY(40px); }
  to { opacity: 1; transform: translateY(0); }
}

.float { animation: float 10s ease-in-out infinite; }
.spin-slow { animation: spin-slow 35s linear infinite; }
.fade-up { animation: fade-up 1.2s ease forwards; }

.glow {
  text-shadow:
    0 0 20px #22C55E,
    0 0 40px #22C55E,
    0 0 80px #22C55E;
}
</style>
</head>

<body class="m-0 p-0 bg-gradient-to-br from-black via-[#0f172a] to-[#052e16] text-white overflow-hidden">

<section class="w-full h-screen flex flex-col items-center justify-center text-center relative px-6">


  <div class="absolute w-[500px] h-[500px] bg-[#22C55E]/10 rounded-full top-[-150px] left-[-150px] spin-slow"></div>
  <div class="absolute w-[350px] h-[350px] bg-[#22C55E]/10 rounded-full bottom-[-100px] right-[-100px] float"></div>
  <div class="absolute w-[200px] h-[200px] bg-[#22C55E]/20 rounded-full top-[30%] right-[25%] float"></div>


  <h1 class="text-[22rem] font-extrabold leading-none glow float">
    404
  </h1>


  <h2 class="text-5xl font-bold mb-6 fade-up">
    Page introuvable
  </h2>

  <p class="text-lg max-w-xl text-white/80 mb-12 fade-up">
    La page que vous cherchez n’existe pas ou a été déplacée.
    Revenir à l’accueil pour continuer.
  </p>


  <div class="flex gap-6 fade-up">

    <a href="/"
       class="px-12 py-4 rounded-full bg-[#22C55E] text-black font-bold text-lg shadow-xl hover:shadow-[#22C55E] hover:scale-110 transition">
      Accueil
    </a>

    <a href="/services"
       class="px-12 py-4 rounded-full border-2 border-[#22C55E] text-[#22C55E] font-bold text-lg hover:bg-[#22C55E] hover:text-black hover:scale-110 transition">
      Services
    </a>

  </div>

</section>
</body>
</html>
