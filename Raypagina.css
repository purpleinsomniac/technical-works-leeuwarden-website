@import url("https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap");

:root {
  --navy: #102a53;
  --blue: #168fea;
  --soft: #f0f6fd;
  --text: #5c6675;
  --line: #dce4ed;
  --white: #fff;
  --width: 980px;
}

* { box-sizing: border-box; }
html { scroll-behavior: smooth; scroll-padding-top: 80px; }
body { margin: 0; color: var(--text); background: var(--white); font-family: "DM Sans", sans-serif; line-height: 1.65; }
a { color: inherit; text-decoration: none; }

.site-header {
  position: sticky;
  top: 0;
  z-index: 10;
  height: 66px;
  padding: 0 max(24px, calc((100% - var(--width)) / 2));
  display: flex;
  align-items: center;
  gap: 34px;
  background: #ffffffed;
  border-bottom: 1px solid var(--line);
  backdrop-filter: blur(12px);
}

.brand { margin-right: auto; color: var(--navy); font-size: 19px; font-weight: 700; }
nav { display: flex; gap: 32px; font-size: 14px; }
nav a:hover { color: var(--blue); }
#language { padding: 8px 17px; border: 0; border-radius: 30px; color: white; background: var(--navy); font: 700 12px inherit; cursor: pointer; }

.hero {
  min-height: 535px;
  padding: 90px 24px;
  display: grid;
  place-content: center;
  justify-items: center;
  text-align: center;
}

.hero h1 { margin: 6px 0 0; color: var(--navy); font-size: clamp(70px, 9vw, 96px); line-height: 1; letter-spacing: -.055em; }
.hero h2 { margin: 18px 0 10px; color: var(--navy); font-size: clamp(20px, 2.5vw, 25px); }
.hero > p:not(.label) { margin: 0 0 30px; font-size: 18px; }
.label { margin: 0 0 8px; color: var(--blue); font-size: 13px; font-weight: 700; letter-spacing: .2em; }
.button { padding: 13px 27px; border-radius: 30px; color: white; background: var(--navy); font-weight: 700; transition: transform .2s, background .2s; }
.button:hover { transform: translateY(-2px); background: #174078; }

main > section:not(.hero) { padding: 95px 24px; }
.soft { background: var(--soft); }
.container, .contact-box, footer { width: min(var(--width), 100%); margin: auto; }
.narrow { max-width: 780px; margin-left: max(0px, calc((100% - var(--width)) / 2)); }
h2 { max-width: 640px; margin: 6px 0 20px; color: var(--navy); font-size: clamp(30px, 4vw, 42px); line-height: 1.2; letter-spacing: -.035em; }
.intro { margin-bottom: 55px; }
ul { padding: 0; list-style: none; }
li { margin: 18px 0; }
li::before { content: ""; display: inline-block; width: 8px; height: 8px; margin-right: 16px; border-radius: 50%; background: var(--blue); }

.skill-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 28px; }
.card { min-height: 310px; padding: 34px; border: 1px solid var(--line); border-radius: 24px; background: white; }
.card h3 { margin: 0 0 25px; color: var(--navy); font-size: 20px; }
.programs { display: flex; flex-wrap: wrap; gap: 12px; }
.programs > div { min-width: 130px; padding: 10px; display: flex; align-items: center; gap: 11px; border: 1px solid var(--line); border-radius: 14px; background: var(--soft); color: var(--navy); font-weight: 700; }
.programs b { width: 38px; height: 38px; display: grid; place-items: center; border: 1px solid var(--line); border-radius: 11px; background: white; }
.programs small { display: block; width: max-content; margin-top: 3px; padding: 1px 8px; border-radius: 20px; color: white; background: var(--navy); font-weight: 500; }
.dark { color: white; background: var(--navy); border-color: var(--navy); }
.dark h3 { color: white; }
.tags { display: flex; flex-wrap: wrap; gap: 10px; }
.tags span { padding: 9px 15px; border: 1px solid #ffffff13; border-radius: 25px; background: #ffffff12; }

.language-list { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 30px; }
.language-list span { padding: 10px 25px; border: 1px solid var(--line); border-radius: 30px; color: var(--navy); background: white; }

#contact { padding-block: 105px; }
.contact-box { padding: 70px 40px; border-radius: 28px; color: #d7e1ef; background: var(--navy); text-align: center; }
.contact-box h2 { margin-inline: auto; color: white; }
.contact-box > p:not(.label) { max-width: 570px; margin: 0 auto 38px; }
.contact-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; text-align: left; }
.contact-grid a { padding: 22px; border-radius: 16px; background: #ffffff12; transition: background .2s, transform .2s; }
.contact-grid a:hover { transform: translateY(-2px); background: #ffffff1d; }
.contact-grid small, .contact-grid strong { display: block; }
.contact-grid small { margin-bottom: 5px; color: var(--blue); font-size: 11px; letter-spacing: .1em; }
.contact-grid strong { color: white; font-size: 14px; overflow-wrap: anywhere; }

footer { padding: 35px 0 55px; display: flex; justify-content: space-between; border-top: 1px solid var(--line); font-size: 13px; }
footer a:hover { color: var(--blue); }

@media (max-width: 760px) {
  .site-header { padding-inline: 20px; }
  nav { display: none; }
  .hero { min-height: 500px; }
  main > section:not(.hero) { padding: 72px 20px; }
  .skill-grid, .contact-grid { grid-template-columns: 1fr; }
  .card { min-height: auto; }
  .contact-box { padding: 50px 22px; }
  footer { width: calc(100% - 40px); }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 70px; }
  .hero > p:not(.label) { font-size: 16px; }
  .programs > div { flex: 1 1 125px; }
  footer { flex-direction: column; gap: 10px; }
}

@media (prefers-reduced-motion: reduce) {
  html { scroll-behavior: auto; }
  * { transition: none !important; }
}
