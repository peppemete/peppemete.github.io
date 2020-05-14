var aside = document.getElementById("aside");

aside.innerHTML = `
        <div class="menuBtn" id="menuBtn" onclick="fullpage_api.setAllowScrolling(false)";>
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            </div>
            <a id="goHome" href="/index.html#home" onclick="javascript:location.href='/index.html#home';window.location.reload();" class="logo">
                <div class="logo-home">
                    <h1>giemme</h1>
                    <h5>coder & designer</h5>
                    </div>
                </a>
                    
                    <div id="menuWindow" class="menu-window">
                        <ul>
                            <li><h2><a href="/index.html#home" onclick="javascript:location.href='/index.html#home';window.location.reload();">Home</a></h2></li>
                            <li><h2><a href="/projects/projects.html">Projects</a></h2></li>
                            <li><h2><a href="/index.html#about" onclick="javascript:location.href='/index.html#about';window.location.reload();">About</a></h2></li>
                            <li><h2><a href="/index.html#contact" onclick="javascript:location.href='/index.html#contact';window.location.reload();">Contact</a></h2></li>
                            </ul>
                            </div>
                            <div id="menuBg" class="menubg"></div>
                            `;
var menuBtn=document.getElementById("menuBtn");
var bars=menuBtn.querySelectorAll("div");
var body=document.body; 
var menuWindow=document.getElementById("menuWindow");
var menuBg=document.getElementById("menuBg");
var Nclick=0;
menuBtn.addEventListener("click",openMenu);
function openMenu() {
    console.log("you clicked");
    menuWindow.classList.toggle("menu-window-open");
    menuBg.classList.toggle("menubg-visible");
    bars.forEach(bar => bar.classList.toggle("change"));
    aside.classList.toggle("open");
    Nclick++;
    if(Nclick%2==0){
        fullpage_api.setAllowScrolling(true);
    }else{
        fullpage_api.setAllowScrolling(false);
    }
}


