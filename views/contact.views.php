


<?php if($success): ?>
    <div class="mb-6 text-center bg-green-600 bg-opacity-30 text-white font-semibold py-3 rounded-lg animate-fadeInDown">
        <?= $success ?>
    </div>
<?php endif; ?>

<section class="relative w-full min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 rounded-3xl">


  <canvas id="contactParticles" class="absolute inset-0 w-full h-full"></canvas>


  <div class="absolute w-96 h-96 bg-purple-500/20 rounded-full top-[-100px] left-[-50px] animate-blob1"></div>
  <div class="absolute w-80 h-80 bg-green-400/20 rounded-full bottom-[-120px] right-[-60px] animate-blob2"></div>
  <div class="absolute w-64 h-64 bg-teal-400/20 rounded-full top-[150px] right-[50px] animate-blob3"></div>

  
  <div class="relative z-10 w-full max-w-2xl p-12 bg-gray-900 bg-opacity-50 backdrop-blur-2xl rounded-3xl shadow-2xl transform transition-all hover:-translate-y-2 hover:scale-105">
    
    <h2 class="text-5xl font-extrabold text-center mb-6 text-white animate-fadeInDown">Contactez-nous</h2>
    <p class="text-gray-300 text-center mb-10 text-lg animate-fadeInUp delay-200">Envoyez-nous un message et nous vous répondrons rapidement.</p>

    <form method="POST" class="space-y-6">

      <div class="relative">
        <input type="text" name="name" value="<?= $name ?>" placeholder="Nom complet"
               class="peer w-full px-4 py-4 rounded-xl bg-gray-800 border border-gray-700 text-white placeholder-transparent focus:ring-2 focus:ring-green-400 focus:outline-none transition-all duration-300"/>
        <label class="absolute left-4 top-4 text-gray-400 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-base peer-focus:top-[-10px] peer-focus:text-green-400 peer-focus:text-sm">Nom complet</label>
        <small class="text-red-500"><?= $errors['name'] ?? '' ?></small>
      </div>

      <div class="relative">
        <input type="email" name="email" value="<?= $email ?>" placeholder="Email"
               class="peer w-full px-4 py-4 rounded-xl bg-gray-800 border border-gray-700 text-white placeholder-transparent focus:ring-2 focus:ring-green-400 focus:outline-none transition-all duration-300"/>
        <label class="absolute left-4 top-4 text-gray-400 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-base peer-focus:top-[-10px] peer-focus:text-green-400 peer-focus:text-sm">Email</label>
        <small class="text-red-500"><?= $errors['email'] ?? '' ?></small>
      </div>

      <div class="relative">
        <textarea name="message" rows="5" placeholder="Votre message..."
                  class="peer w-full px-4 py-4 rounded-xl bg-gray-800 border border-gray-700 text-white placeholder-transparent focus:ring-2 focus:ring-green-400 focus:outline-none transition-all duration-300"></textarea>
        <label class="absolute left-4 top-4 text-gray-400 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-base peer-focus:top-[-10px] peer-focus:text-green-400 peer-focus:text-sm">Message</label>
        <small class="text-red-500"><?= $errors['message'] ?? '' ?></small>
      </div>

      <button type="submit"
              class="w-full py-4 font-bold text-white rounded-xl bg-gradient-to-r from-green-400 to-teal-400 shadow-lg hover:shadow-2xl hover:scale-105 transform transition-all duration-300 relative overflow-hidden">
        Envoyer le message
        <span class="absolute inset-0 bg-white opacity-10 rounded-xl animate-ping"></span>
      </button>

    </form>
  </div>
</section>

<style>

@keyframes blob1 {0%,100%{transform:translate(0,0) scale(1);}33%{transform:translate(40px,-30px) scale(1.2);}66%{transform:translate(-30px,40px) scale(0.9);}}
@keyframes blob2 {0%,100%{transform:translate(0,0) scale(1);}33%{transform:translate(-50px,30px) scale(1.15);}66%{transform:translate(30px,-40px) scale(0.95);}}
@keyframes blob3 {0%,100%{transform:translate(0,0) scale(1);}33%{transform:translate(35px,20px) scale(1.1);}66%{transform:translate(-25px,-30px) scale(0.9);}}
.animate-blob1{animation:blob1 15s infinite ease-in-out;}
.animate-blob2{animation:blob2 18s infinite ease-in-out;}
.animate-blob3{animation:blob3 12s infinite ease-in-out;}


@keyframes fadeInDown {0%{opacity:0;transform:translateY(-40px);}100%{opacity:1;transform:translateY(0);}}
@keyframes fadeInUp {0%{opacity:0;transform:translateY(40px);}100%{opacity:1;transform:translateY(0);}}
.animate-fadeInDown{animation:fadeInDown 1.2s forwards;}
.animate-fadeInUp{animation:fadeInUp 1.2s forwards; animation-delay:0.3s;}


canvas { display:block; }


button span.animate-ping { animation: ping 1.5s infinite; }
@keyframes ping {0%{transform: scale(0.8); opacity:0.3;}50%{transform: scale(1.2); opacity:0.1;}100%{transform: scale(1); opacity:0.3;}}
</style>

<script>

const canvas = document.getElementById('contactParticles');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particles = [];
for(let i=0;i<100;i++){
  particles.push({
    x: Math.random()*canvas.width,
    y: Math.random()*canvas.height,
    r: Math.random()*2+1,
    dx: (Math.random()-0.5)*0.5,
    dy: (Math.random()-0.5)*0.5,
    color: 'rgba(0,255,180,0.3)'
  });
}

function animate(){
  ctx.clearRect(0,0,canvas.width,canvas.height);
  for(let p of particles){
    p.x += p.dx; p.y += p.dy;
    if(p.x<0||p.x>canvas.width) p.dx*=-1;
    if(p.y<0||p.y>canvas.height) p.dy*=-1;
    ctx.beginPath();
    ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
    ctx.fillStyle=p.color;
    ctx.fill();
  }
  requestAnimationFrame(animate);
}
animate();

window.addEventListener('resize', ()=>{
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
});
</script>
