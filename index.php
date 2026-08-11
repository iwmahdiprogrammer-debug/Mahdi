<?php

$name = "مهدی مرمزی";
$role = "طراح وب‌سایت • برنامه‌نویس";
$gmail = "iwmahdiprogrammer@gmail.com";
$phone = "+98 993 492 0508";
$whatsapp = "989934920508";
$instagram = "lmahdi.mz";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="مهدی مرمزی — طراح وب‌سایت و برنامه‌نویس. طراحی وب‌سایت‌های مدرن، سریع و حرفه‌ای.">
    <title><?= htmlspecialchars($name) ?> — <?= htmlspecialchars($role) ?></title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap');

        :root{
            --bg:#050505;
            --panel:#0b0b0b;
            --text:#f5f5f5;
            --muted:#888;
            --line:#242424;
            --soft:#111;
            --white:#fff;
            --radius:24px;
        }

        *{box-sizing:border-box;margin:0;padding:0}
        html{scroll-behavior:smooth}
        body{
            background:var(--bg);
            color:var(--text);
            font-family:"Vazirmatn",sans-serif;
            overflow-x:hidden;
            cursor:none;
        }
        a{color:inherit;text-decoration:none}
        button{font:inherit}

        /* noise */
        body:before{
            content:"";
            position:fixed;
            inset:0;
            pointer-events:none;
            opacity:.035;
            z-index:100;
            background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.8'/%3E%3C/svg%3E");
        }

        .cursor,.cursor-dot{
            position:fixed;
            pointer-events:none;
            z-index:999;
            transform:translate(-50%,-50%);
        }
        .cursor{
            width:38px;height:38px;
            border:1px solid #777;
            border-radius:50%;
            transition:.18s ease;
        }
        .cursor-dot{
            width:5px;height:5px;
            background:#fff;border-radius:50%;
        }
        body.hovering .cursor{
            width:62px;height:62px;
            border-color:#fff;
            background:rgba(255,255,255,.05);
        }

        .progress{
            position:fixed;top:0;right:0;height:2px;
            background:#fff;z-index:1000;width:0;
        }

        header{
            position:fixed;
            top:0;left:0;right:0;
            z-index:200;
            padding:22px 5vw;
            display:flex;
            align-items:center;
            justify-content:space-between;
            mix-blend-mode:difference;
        }
        .brand{
            font-size:14px;
            letter-spacing:.08em;
            font-weight:700;
        }
        nav{display:flex;gap:28px}
        nav a{
            font-size:12px;color:#fff;
            opacity:.7;transition:.25s;
        }
        nav a:hover{opacity:1}

        .hero{
            min-height:100vh;
            padding:150px 7vw 70px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            position:relative;
        }
        .eyebrow{
            color:#777;
            font-size:12px;
            letter-spacing:.16em;
            margin-bottom:28px;
        }
        .hero h1{
            font-size:clamp(56px,11vw,170px);
            line-height:.95;
            letter-spacing:-.07em;
            font-weight:800;
            max-width:1100px;
        }
        .hero h1 span{
            display:block;
            color:transparent;
            -webkit-text-stroke:1px #777;
            transition:.5s;
        }
        .hero h1 span:hover{
            color:#fff;
            -webkit-text-stroke:1px #fff;
        }
        .hero-bottom{
            margin-top:70px;
            display:flex;
            justify-content:space-between;
            align-items:end;
            gap:40px;
        }
        .intro{
            max-width:500px;
            color:#aaa;
            font-size:15px;
            line-height:2;
        }
        .intro strong{color:#fff}
        .scroll{
            font-size:11px;color:#666;
            writing-mode:vertical-rl;
            letter-spacing:.12em;
        }

        .orb{
            position:absolute;
            width:35vw;height:35vw;
            max-width:520px;max-height:520px;
            left:2vw;bottom:3vh;
            border:1px solid #191919;
            border-radius:50%;
            animation:float 8s ease-in-out infinite;
        }
        .orb:before,.orb:after{
            content:"";
            position:absolute;
            inset:12%;
            border:1px solid #181818;
            border-radius:50%;
        }
        .orb:after{inset:27%}
        @keyframes float{
            0%,100%{transform:translateY(0) rotate(0)}
            50%{transform:translateY(-25px) rotate(8deg)}
        }

        section{padding:130px 7vw;border-top:1px solid var(--line)}
        .section-head{
            display:flex;
            justify-content:space-between;
            align-items:baseline;
            margin-bottom:60px;
        }
        .section-number{font-size:11px;color:#555}
        .section-title{
            font-size:clamp(32px,5vw,70px);
            letter-spacing:-.05em;
        }

        .services{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            border-top:1px solid var(--line);
        }
        .service{
            padding:38px 25px 42px 0;
            min-height:250px;
            border-bottom:1px solid var(--line);
            position:relative;
            overflow:hidden;
            transition:.4s;
        }
        .service:not(:nth-child(3n)){border-left:1px solid var(--line);padding-left:25px}
        .service:hover{background:#0a0a0a}
        .service-num{color:#555;font-size:11px}
        .service h3{font-size:25px;margin:45px 0 18px}
        .service p{font-size:13px;color:#777;line-height:2}
        .service .arrow{
            position:absolute;left:25px;bottom:25px;
            font-size:24px;color:#555;
            transition:.3s;
        }
        .service:hover .arrow{transform:translate(-8px,-8px);color:#fff}

        .projects{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:18px;
        }
        .project{
            min-height:360px;
            border:1px solid var(--line);
            background:linear-gradient(135deg,#101010,#060606);
            padding:30px;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            position:relative;
            overflow:hidden;
            transition:.5s;
        }
        .project:hover{transform:translateY(-7px);border-color:#444}
        .project:before{
            content:"";
            position:absolute;
            width:220px;height:220px;
            border:1px solid #222;
            border-radius:50%;
            left:-60px;top:-60px;
            transition:.6s;
        }
        .project:hover:before{transform:scale(1.7)}
        .project-tag{font-size:10px;color:#666;z-index:1}
        .project h3{font-size:clamp(28px,4vw,54px);letter-spacing:-.06em;z-index:1}
        .project p{font-size:12px;color:#777;z-index:1}
        .project-link{font-size:12px;z-index:1}

        .about{
            display:grid;
            grid-template-columns:1fr 1.3fr;
            gap:90px;
            align-items:start;
        }
        .about-big{
            font-size:clamp(30px,4vw,55px);
            line-height:1.35;
            letter-spacing:-.05em;
        }
        .about-text{color:#888;line-height:2.2;font-size:14px}
        .about-text p+p{margin-top:25px}

        .contact{
            min-height:80vh;
            display:flex;
            flex-direction:column;
            justify-content:center;
        }
        .contact-title{
            font-size:clamp(45px,9vw,125px);
            line-height:1;
            letter-spacing:-.07em;
            max-width:1000px;
        }
        .contact-title em{
            font-style:normal;
            color:transparent;
            -webkit-text-stroke:1px #666;
        }
        .contact-grid{
            margin-top:70px;
            display:grid;
            grid-template-columns:repeat(4,1fr);
            border-top:1px solid var(--line);
        }
        .contact-card{
            padding:28px 0;
            border-bottom:1px solid var(--line);
        }
        .contact-card:not(:last-child){border-left:1px solid var(--line);padding-left:25px}
        .contact-card small{display:block;color:#555;font-size:10px;margin-bottom:14px}
        .contact-card a{font-size:13px;word-break:break-word}
        .contact-card a:hover{text-decoration:underline}

        footer{
            border-top:1px solid var(--line);
            padding:28px 7vw;
            display:flex;
            justify-content:space-between;
            color:#555;
            font-size:10px;
        }

        .reveal{
            opacity:0;
            transform:translateY(35px);
            transition:1s cubic-bezier(.16,1,.3,1);
        }
        .reveal.show{opacity:1;transform:none}

        .magnetic{transition:transform .25s ease}

        @media(max-width:800px){
            body{cursor:auto}
            .cursor,.cursor-dot{display:none}
            header{padding:18px 5vw}
            nav{gap:14px}
            nav a:nth-child(1){display:none}
            .hero{padding:130px 6vw 60px}
            .hero-bottom{align-items:start;flex-direction:column}
            .orb{width:65vw;height:65vw;opacity:.6}
            section{padding:90px 6vw}
            .services{grid-template-columns:1fr}
            .service{border-left:0!important;padding-left:0!important}
            .projects{grid-template-columns:1fr}
            .project{min-height:300px}
            .about{grid-template-columns:1fr;gap:35px}
            .contact-grid{grid-template-columns:1fr 1fr}
            .contact-card:nth-child(odd){border-left:1px solid var(--line);padding-left:18px}
            .contact-card:nth-child(even){padding-right:18px}
            footer{padding:25px 6vw;gap:20px;flex-direction:column}
        }
    </style>
</head>

<body>
<div class="progress"></div>
<div class="cursor"></div>
<div class="cursor-dot"></div>

<header>
    <a class="brand magnetic" href="#top">MM / 01</a>
    <nav>
        <a href="#services">خدمات</a>
        <a href="#work">نمونه‌کار</a>
        <a href="#about">درباره من</a>
        <a href="#contact">ارتباط</a>
    </nav>
</header>

<main id="top">
    <section class="hero" style="border-top:0">
        <div class="orb"></div>

        <div class="eyebrow reveal">WEB DESIGN / DEVELOPMENT / 2026</div>

        <h1 class="reveal">
            مهدی
            <span>مرمزی.</span>
        </h1>

        <div class="hero-bottom reveal">
            <p class="intro">
                <strong>طراح وب‌سایت و برنامه‌نویس</strong>؛
                ساخت تجربه‌های دیجیتال مدرن، سریع و متفاوت برای برندها،
                کسب‌وکارها و افرادی که می‌خواهند حرفه‌ای دیده شوند.
            </p>
            <div class="scroll">SCROLL ↓</div>
        </div>
    </section>

    <section id="services">
        <div class="section-head reveal">
            <h2 class="section-title">چه کار می‌کنم؟</h2>
            <span class="section-number">01 — SERVICES</span>
        </div>

        <div class="services">
            <article class="service reveal">
                <span class="service-num">01</span>
                <h3>طراحی وب‌سایت</h3>
                <p>طراحی رابط‌های مدرن، مینیمال و واکنش‌گرا با تمرکز روی تجربه کاربر.</p>
                <span class="arrow">↙</span>
            </article>

            <article class="service reveal">
                <span class="service-num">02</span>
                <h3>توسعه وب</h3>
                <p>تبدیل ایده و طراحی به وب‌سایت واقعی، سریع، تمیز و قابل توسعه.</p>
                <span class="arrow">↙</span>
            </article>

            <article class="service reveal">
                <span class="service-num">03</span>
                <h3>سایت اختصاصی</h3>
                <p>ساخت سیستم‌ها و صفحات اختصاصی متناسب با نیاز واقعی هر کسب‌وکار.</p>
                <span class="arrow">↙</span>
            </article>
        </div>
    </section>

    <section id="work">
        <div class="section-head reveal">
            <h2 class="section-title">Selected Work</h2>
            <span class="section-number">02 — PROJECTS</span>
        </div>

        <div class="projects">
            <article class="project reveal">
                <span class="project-tag">01 / BUSINESS</span>
                <h3>برند و کسب‌وکار</h3>
                <p>وب‌سایتی برای معرفی خدمات و تبدیل بازدیدکننده به مشتری.</p>
                <span class="project-link">VIEW PROJECT ↗</span>
            </article>

            <article class="project reveal">
                <span class="project-tag">02 / DIGITAL</span>
                <h3>تجربه دیجیتال</h3>
                <p>طراحی یک تجربه متفاوت با انیمیشن‌های ظریف و تعاملات روان.</p>
                <span class="project-link">VIEW PROJECT ↗</span>
            </article>

            <article class="project reveal">
                <span class="project-tag">03 / PORTFOLIO</span>
                <h3>Personal Brand</h3>
                <p>ساخت هویت دیجیتال برای معرفی حرفه، مهارت‌ها و نمونه‌کارها.</p>
                <span class="project-link">VIEW PROJECT ↗</span>
            </article>

            <article class="project reveal">
                <span class="project-tag">04 / DEVELOPMENT</span>
                <h3>Web App</h3>
                <p>پیاده‌سازی وب‌اپلیکیشن‌های کاربردی با ساختار قابل توسعه.</p>
                <span class="project-link">VIEW PROJECT ↗</span>
            </article>
        </div>
    </section>

    <section id="about">
        <div class="section-head reveal">
            <h2 class="section-title">درباره من</h2>
            <span class="section-number">03 — ABOUT</span>
        </div>

        <div class="about">
            <div class="about-big reveal">
                ایده را به یک
                <span style="color:#777">تجربه دیجیتال</span>
                تبدیل می‌کنم.
            </div>

            <div class="about-text reveal">
                <p>
                    من مهدی مرمزی هستم؛ طراح وب‌سایت و برنامه‌نویس.
                    تمرکزم روی ساخت سایت‌هایی است که فقط زیبا نباشند،
                    بلکه سریع، کاربردی و قابل اعتماد باشند.
                </p>
                <p>
                    هر پروژه برای من ترکیبی از طراحی، کدنویسی و حل مسئله است.
                    هدف ساده است: ساخت چیزی که وقتی کاربر وارد آن می‌شود،
                    تفاوت را احساس کند.
                </p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="eyebrow reveal">HAVE A PROJECT IN MIND?</div>

        <h2 class="contact-title reveal">
            بیایید چیزی
            <em>متفاوت</em>
            بسازیم.
        </h2>

        <div class="contact-grid reveal">
            <div class="contact-card">
                <small>EMAIL</small>
                <a href="mailto:<?= htmlspecialchars($gmail) ?>"><?= htmlspecialchars($gmail) ?></a>
            </div>

            <div class="contact-card">
                <small>PHONE</small>
                <a href="tel:+98 993 492 0508<?= htmlspecialchars($phone) ?>"><?= htmlspecialchars($phone) ?></a>
            </div>

            <div class="contact-card">
                <small>WHATSAPP</small>
                <a href="https://wa.me/message/C4L5MJDFO6QWN1<?= htmlspecialchars($whatsapp) ?>" target="_blank" rel="noopener">Message me ↗</a>
            </div>

            <div class="contact-card">
                <small>INSTAGRAM</small>
                <a href="https://www.instagram.com/lmahdi.mz?utm_source=qr&igsh=NDFnZzJzZWlqeG15<?= htmlspecialchars($instagram) ?>" target="_blank" rel="noopener">@<?= htmlspecialchars($instagram) ?> ↗</a>
            </div>
        </div>
    </section>
</main>

<footer>
    <span>© <?= date("Y") ?> <?= htmlspecialchars($name) ?></span>
    <span>DESIGNED & DEVELOPED BY <?= htmlspecialchars($name) ?></span>
</footer>

<script>
    const cursor = document.querySelector('.cursor');
    const dot = document.querySelector('.cursor-dot');
    const progress = document.querySelector('.progress');

    document.addEventListener('mousemove', e => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
        dot.style.left = e.clientX + 'px';
        dot.style.top = e.clientY + 'px';
    });

    document.querySelectorAll('a, button, .service, .project').forEach(el => {
        el.addEventListener('mouseenter', () => document.body.classList.add('hovering'));
        el.addEventListener('mouseleave', () => document.body.classList.remove('hovering'));
    });

    window.addEventListener('scroll', () => {
        const max = document.documentElement.scrollHeight - innerHeight;
        progress.style.width = ((scrollY / max) * 100) + '%';
    });

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting) entry.target.classList.add('show');
        });
    }, {threshold:.12});

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    document.querySelectorAll('.magnetic').forEach(el => {
        el.addEventListener('mousemove', e => {
            const r = el.getBoundingClientRect();
            const x = e.clientX - (r.left + r.width / 2);
            const y = e.clientY - (r.top + r.height / 2);
            el.style.transform = `translate(${x * .18}px,${y * .18}px)`;
        });
        el.addEventListener('mouseleave', () => el.style.transform = '');
    });
</script>
</body>
</html>
