const loader=document.getElementById("loader");
window.addEventListener("load",()=>setTimeout(()=>loader.classList.add("hide"),2300));

const observer=new IntersectionObserver(entries=>{
  entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add("show")});
},{threshold:.1});
document.querySelectorAll(".reveal").forEach(e=>observer.observe(e));

const progress=document.querySelector(".progress");
window.addEventListener("scroll",()=>{
  const max=document.documentElement.scrollHeight-innerHeight;
  progress.style.width=(scrollY/max*100)+"%";
});

const cursor=document.querySelector(".cursor");
const dot=document.querySelector(".cursor-dot");
document.addEventListener("mousemove",e=>{
  if(cursor){cursor.style.left=e.clientX+"px";cursor.style.top=e.clientY+"px"}
  if(dot){dot.style.left=e.clientX+"px";dot.style.top=e.clientY+"px"}
  const light=document.querySelector(".mouse-light");
  if(light){light.style.left=e.clientX+"px";light.style.top=e.clientY+"px"}
});

document.querySelectorAll("a,.magnetic-card,.menu-btn").forEach(el=>{
  el.addEventListener("mouseenter",()=>document.body.classList.add("hovering"));
  el.addEventListener("mouseleave",()=>document.body.classList.remove("hovering"));
});

document.querySelectorAll(".magnetic").forEach(el=>{
  el.addEventListener("mousemove",e=>{
    const r=el.getBoundingClientRect();
    const x=e.clientX-(r.left+r.width/2);
    const y=e.clientY-(r.top+r.height/2);
    el.style.transform=`translate(${x*.2}px,${y*.2}px)`;
  });
  el.addEventListener("mouseleave",()=>el.style.transform="");
});

document.querySelectorAll(".magnetic-card").forEach(el=>{
  el.addEventListener("mousemove",e=>{
    const r=el.getBoundingClientRect();
    const x=(e.clientX-r.left-r.width/2)/32;
    const y=(e.clientY-r.top-r.height/2)/32;
    el.style.transform=`perspective(1000px) rotateY(${x}deg) rotateX(${-y}deg) translateY(-5px)`;
  });
  el.addEventListener("mouseleave",()=>el.style.transform="");
});

const menuBtn=document.querySelector(".menu-btn");
const mobileMenu=document.querySelector(".mobile-menu");
menuBtn?.addEventListener("click",()=>{
  mobileMenu.classList.toggle("open");
});
document.querySelectorAll(".mobile-menu a").forEach(a=>{
  a.addEventListener("click",()=>mobileMenu.classList.remove("open"));
});

// Lightweight animated particles for the welcome screen.
const canvas=document.getElementById("particles");
const ctx=canvas.getContext("2d");
let particles=[];
function resize(){
  canvas.width=innerWidth;
  canvas.height=innerHeight;
}
function init(){
  particles=Array.from({length:Math.min(90,Math.floor(innerWidth/14))},()=>({
    x:Math.random()*canvas.width,
    y:Math.random()*canvas.height,
    r:Math.random()*1.4+.2,
    vx:(Math.random()-.5)*.25,
    vy:(Math.random()-.5)*.25,
    a:Math.random()*.55+.1
  }));
}
function draw(){
  ctx.clearRect(0,0,canvas.width,canvas.height);
  for(const p of particles){
    p.x+=p.vx;p.y+=p.vy;
    if(p.x<0)p.x=canvas.width;if(p.x>canvas.width)p.x=0;
    if(p.y<0)p.y=canvas.height;if(p.y>canvas.height)p.y=0;
    ctx.beginPath();
    ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
    ctx.fillStyle=`rgba(255,255,255,${p.a})`;
    ctx.fill();
  }
  for(let i=0;i<particles.length;i++){
    for(let j=i+1;j<particles.length;j++){
      const a=particles[i],b=particles[j];
      const dx=a.x-b.x,dy=a.y-b.y,d=Math.hypot(dx,dy);
      if(d<110){
        ctx.beginPath();
        ctx.moveTo(a.x,a.y);ctx.lineTo(b.x,b.y);
        ctx.strokeStyle=`rgba(255,255,255,${.06*(1-d/110)})`;
        ctx.stroke();
      }
    }
  }
  requestAnimationFrame(draw);
}
resize();init();draw();
addEventListener("resize",()=>{resize();init()});
