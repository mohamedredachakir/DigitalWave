


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'DigitalWave' ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
 
<header class="relative bg-gradient-to-r from-gray-900 via-gray-800 to-gray-950 text-white shadow-lg overflow-hidden">

  <canvas id="headerParticles" class="absolute inset-0 w-full h-full"></canvas>

  <div class="container mx-auto flex justify-between items-center py-6 relative z-10">

    <h1 class="text-3xl font-extrabold tracking-wider">
      <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 to-teal-400 animate-gradientText">Digital</span>Wave
    </h1>

    <div class="flex space-x-8 justify-center items-center">
      <a href="/" class="dock-item">Accueil</a>
      <a href="/services" class="dock-item">Services</a>
      <a href="/about" class="dock-item">À propos</a>
      <a href="/contact" class="dock-item">Contact</a>
    </div>

  </div>
</header>

<style>
@keyframes gradientText {
  0%{background-position:0% 50%;}
  50%{background-position:100% 50%;}
  100%{background-position:0% 50%;}
}
.animate-gradientText{
  background-size:200% 200%;
  animation: gradientText 5s ease infinite;
}

.dock-item {
  position: relative;
  display: inline-block;
  padding: 0.5rem 1rem;
  font-weight: bold;
  color: white;
  text-decoration: none;
  border-radius: 1rem;
  transition: transform 0.3s, box-shadow 0.3s;
}
.dock-item:hover {
  transform: scale(1.3) translateY(-5px);
  box-shadow: 0 10px 20px rgba(34, 197, 94,0.5);
}

canvas { display:block; position:absolute; top:0; left:0; z-index:0; }

header { animation: fadeInHeader 1.2s ease forwards; }
@keyframes fadeInHeader { 0%{opacity:0; transform:translateY(-20px);} 100%{opacity:1; transform:translateY(0);} }
</style>

<script>

const canvas = document.getElementById('headerParticles');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = 100; 

let particles = [];
for(let i=0;i<50;i++){
  particles.push({
    x: Math.random()*canvas.width,
    y: Math.random()*canvas.height,
    r: Math.random()*2+1,
    dx: (Math.random()-0.5)*0.5,
    dy: (Math.random()-0.5)*0.2,
    color: 'rgba(0,255,180,0.3)'
  });
}

function animateParticles(){
  ctx.clearRect(0,0,canvas.width,canvas.height);
  for(let p of particles){
    p.x += p.dx; p.y += p.dy;
    if(p.x<0||p.x>canvas.width) p.dx*=-1;
    if(p.y<0||p.y>canvas.height) p.dy*=-1;
    ctx.beginPath();
    ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
    ctx.fillStyle = p.color;
    ctx.fill();
  }
  requestAnimationFrame(animateParticles);
}
animateParticles();

window.addEventListener('resize', ()=>{
  canvas.width = window.innerWidth;
  canvas.height = 100;
});
</script>

  <main class="container mx-auto py-8">
