/* Theme variables: colors and shared tokens used across the site */
:root {
  --bg: #f4f1ea;
  --panel: #ffffff;
  --text: #1f2937;
  --muted: #6b7280;
  --accent: #2563eb;
  --accent-soft: #dbeafe;
  --border: #e5e7eb;
}

/* Global reset and box sizing */
* { box-sizing: border-box; }

/* Base page styles */
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: var(--bg);
  color: var(--text);
  line-height: 1.5;
}

/* Reusable card component used for hero and content panels */
.card {
  max-width: 480px;
  margin: 48px auto;
  padding: 24px;
  background: var(--panel);
  border: 1px solid var(--border);
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
}

/* Headings */
h1 {
  margin: 0 0 12px;
  font-size: 1.8rem;
}

/* Paragraph / muted text */
p {
  margin: 0 0 18px;
  color: var(--muted);
}

/* Primary button */
button {
  border: 0;
  border-radius: 10px;
  padding: 10px 16px;
  background: var(--accent);
  color: white;
  font-weight: 600;
  cursor: pointer;
}

button:hover {
  background: #1d4ed8;
}

/* Header / Navigation styles (logo + links) */
.site-header {
  background: var(--panel);
  border-bottom: 1px solid var(--border);
}
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1100px;
  margin: 0 auto;
  padding: 12px 20px;
}
.logo-space img {
  height: 300px;
  width: auto;
  display: block;
}
.nav-links {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  gap: 16px;
}
.nav-links a {
  text-decoration: none;
  color: var(--text);
  padding: 8px 12px;
  border-radius: 8px;
  font-weight: 600;
}
.nav-links a:hover {
  background: var(--accent-soft);
  color: var(--accent);
}

/* Responsive tweaks */
@media (max-width: 600px) {
  .nav-links { display: none; }
  .logo-space img { height: 36px; }
  .card { margin: 20px; }
}
