<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DigitalWave — Accueil</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    @keyframes float {
      0%,100% { transform: translateY(0) }
      50% { transform: translateY(-30px) }
    }
    @keyframes pulseRing {
      0% { transform: scale(0.8); opacity: 0.9 }
      100% { transform: scale(1.6); opacity: 0 }
    }
    @keyframes glow {
      0% { box-shadow: 0 0 15px #22C55E }
      50% { box-shadow: 0 0 45px #22C55E }
      100% { box-shadow: 0 0 15px #22C55E }
    }
    .float { animation: float 6s ease-in-out infinite }
    .ring::before {
      content:"";
      position:absolute;
      inset:-25px;
      border:2px solid #22C55E;
      border-radius:9999px;
      animation: pulseRing 2s linear infinite;
    }
    .glow { animation: glow 2s infinite }
  </style>
</head>

<body class="bg-[#0F172A] text-white overflow-hidden">

<section class="relative min-h-screen flex items-center justify-center">

  <div class="absolute w-[500px] h-[500px] bg-[#22C55E]/20 blur-[160px] top-[-120px] left-[-120px] float"></div>
  <div class="absolute w-[450px] h-[450px] bg-[#22C55E]/15 blur-[160px] bottom-[-120px] right-[-120px] float"></div>

  <div class="relative z-10 text-center max-w-5xl px-6">

    <h1 class="text-[3.5rem] md:text-[5rem] font-extrabold leading-tight mb-8">
      DIGITAL<span class="text-[#22C55E]">WAVE</span>
    </h1>

    <h2 class="text-3xl md:text-5xl font-bold mb-10">
      Transformez votre idée
      <br>
      <span class="text-[#22C55E]">en projet digital</span>
    </h2>

    <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-14">
      Une expérience moderne, artistique et performante pour propulser votre marque
      à un niveau supérieur.
    </p>

    <div class="flex flex-col md:flex-row justify-center items-center gap-10">

      <a href="/services"
         class="relative ring bg-[#22C55E] text-black px-16 py-4 rounded-full text-lg font-bold
                transform transition hover:scale-110 glow">
        Nos services
      </a>

      <a href="/contact"
         class="relative border-2 border-[#22C55E] text-[#22C55E]
                px-16 py-4 rounded-full text-lg font-bold
                transform transition hover:bg-[#22C55E] hover:text-black hover:scale-110">
        Contactez-nous
      </a>

    </div>

  </div>

</section>

</body>
</html>
