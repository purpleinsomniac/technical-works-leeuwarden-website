
/* ========================================
   VARIABLES
======================================== */

:root {
  --ink: #0a1422;
  --blue: #1e559d;
  --blue-light: #3d7fc9;
  --steel: #8b93a0;
  --bg: #f4f5f7;
  --white: #ffffff;
  --line: rgba(30, 85, 157, 0.14);
}


/* ========================================
   RESET
======================================== */

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  min-height: 100vh;

  display: flex;
  flex-direction: column;

  background: var(--bg);
  color: var(--ink);

  font-family: "Work Sans", sans-serif;
  line-height: 1.5;
}

h1,
h2,
h3 {
  font-family: "Oswald", sans-serif;
  text-transform: uppercase;
  letter-spacing: 0.02em;
}

a {
  color: inherit;
  text-decoration: none;
}

.mono {
  font-family: "JetBrains Mono", monospace;
  letter-spacing: 0.04em;
}


/* ========================================
   GENERAL LAYOUT
======================================== */

.wrap {
  width: 100%;
  max-width: 1160px;

  margin: 0 auto;
  padding: 0 32px;
}


/* ========================================
   BACKGROUND GRID
======================================== */

.grid-bg {
  position: absolute;
  inset: 0;

  background-image:
    linear-gradient(
      var(--line) 1px,
      transparent 1px
    ),
    linear-gradient(
      90deg,
      var(--line) 1px,
      transparent 1px
    );

  background-size: 40px 40px;

  pointer-events: none;
}


/* ========================================
   DECORATIVE BRACKETS
======================================== */

.bracket {
  position: relative;
}

.bracket::before,
.bracket::after {
  content: "";

  position: absolute;

  width: 18px;
  height: 18px;

  border-color: var(--blue);
  border-style: solid;

  opacity: 0.55;
}

.bracket::before {
  top: -1px;
  left: -1px;

  border-width: 2px 0 0 2px;
}

.bracket::after {
  right: -1px;
  bottom: -1px;

  border-width: 0 2px 2px 0;
}


/* ========================================
   HEADER
======================================== */

header {
  position: sticky;
  top: 0;

  z-index: 50;

  background: rgba(244, 245, 247, 0.9);

  backdrop-filter: blur(8px);

  border-bottom: 1px solid var(--line);
}


/* ========================================
   NAVIGATION
======================================== */

nav {
  width: 100%;

  display: flex;
  align-items: center;
  justify-content: space-between;

  padding: 14px 32px;
}

.nav-left {
  display: flex;
  align-items: center;

  gap: 44px;
}


/* Logo */

.brand img {
  display: block;

  width: auto;
  height: 40px;
}


/* Navigation links */

.navlinks {
  display: flex;

  gap: 36px;

  font-size: 15px;
  font-weight: 500;
}

.navlinks a {
  position: relative;

  padding: 4px 0;
}

.navlinks a.current {
  color: var(--blue);
}


/* Navigation underline */

.navlinks a::after {
  content: "";

  position: absolute;
  left: 0;
  bottom: 0;

  width: 0;
  height: 2px;

  background: var(--blue);

  transition: width 0.25s ease;
}

.navlinks a:hover::after,
.navlinks a.current::after {
  width: 100%;
}


/* Contact button */

.nav-cta {
  padding: 13px 24px;

  background: var(--ink);
  color: var(--white);

  border: 1px solid var(--ink);

  font-size: 14px;
  font-weight: 600;

  text-transform: uppercase;
  letter-spacing: 0.05em;

  transition:
    background 0.2s ease,
    color 0.2s ease;
}

.nav-cta:hover {
  background: transparent;
  color: var(--ink);
}


/* ========================================
   MAIN
======================================== */

main {
  position: relative;

  flex: 1;

  padding: 86px 0 110px;

  overflow: hidden;
}

main > .wrap {
  position: relative;

  z-index: 2;
}


/* ========================================
   PORTFOLIO HEADER
======================================== */

.portfolio-head {
  max-width: 720px;

  margin: 0 auto 58px;
  padding: 36px 24px;

  text-align: center;
}

.tag {
  display: block;

  margin-bottom: 14px;

  color: var(--blue);

  font-size: 12px;
}

.portfolio-head h1 {
  color: var(--ink);

  font-size: clamp(38px, 6vw, 68px);
  line-height: 1;
}

.portfolio-head p {
  max-width: 560px;

  margin: 18px auto 0;

  color: #3c4550;

  font-size: 16px;
}


/* ========================================
   TEXT BOX
======================================== */

.text-box {
  max-width: 820px;

  margin: 0 auto;
  padding: 42px 40px;

  background: var(--bg);

  border: 1px solid var(--line);
}

.text-box .box-label {
  color: var(--steel);

  font-size: 12px;
}

.text-box h2 {
  margin: 22px 0 12px;

  font-size: 30px;
}

.text-box p {
  max-width: 680px;

  color: #4a525c;

  font-size: 15px;
}

.text-box p + p {
  margin-top: 14px;
}


/* ========================================
   PORTFOLIO BUTTONS
======================================== */

.portfolio-actions {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;

  gap: 16px;

  margin-top: 48px;
}

.button {
  padding: 13px 24px;

  border: 1px solid var(--ink);

  font-size: 13px;
  font-weight: 600;

  text-transform: uppercase;
  letter-spacing: 0.06em;

  transition: all 0.2s ease;
}

.button.primary {
  background: var(--blue);
  color: var(--white);

  border-color: var(--blue);
}

.button:hover {
  background: var(--ink);
  color: var(--white);

  border-color: var(--ink);
}


/* ========================================
   FOOTER
======================================== */

footer {
  padding: 26px 0;

  border-top: 1px solid var(--line);
}

footer .wrap {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;

  gap: 12px;

  color: var(--steel);

  font-size: 12.5px;
}


/* ========================================
   TABLET
======================================== */

@media (max-width: 820px) {

  .navlinks {
    display: none;
  }

}


/* ========================================
   MOBILE
======================================== */

@media (max-width: 520px) {

  .wrap {
    padding: 0 20px;
  }

  nav {
    padding: 14px 20px;
  }

  .portfolio-head {
    padding: 28px 20px;
  }

  .text-box {
    padding: 30px 24px;
  }

}
