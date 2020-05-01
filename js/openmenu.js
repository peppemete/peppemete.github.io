var aside = document.getElementById("aside");

aside.innerHTML = `
        <div class="menuBtn" id="menuBtn">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            </div>
            <div class="logo">
                <a href="/index.html" class="logo-home">
                    <h1>giemme</h1>
                    <h5>coder & designer</h5>
                    </a>
                    </div>
                    <h5 class="goback"><a  href="javascript:history.back()">go back</a> </h5>
                    <div id="menuWindow" class="menu-window">
                        <ul>
                            <li><h2><a href="index.html">Home</a></h2></li>
                            <li><h2><a href="/projects/projects.html">Project</a></h2></li>
                            <li><h2><a href="/about/about.html">About</a></h2></li>
                            <li><h2><a href="/contact/contact.html">Contact</a></h2></li>
                            </ul>
                            </div>
                            <div id="menuBg" class="menubg"></div>
                            `;
var menuBtn=document.getElementById("menuBtn");
var bars=menuBtn.querySelectorAll("div");
var body=document.body; 
var menuWindow=document.getElementById("menuWindow");
var menuBg=document.getElementById("menuBg");
menuBtn.addEventListener("click",openMenu)
function openMenu() {
    console.log("you clicked");
    menuWindow.classList.toggle("menu-window-open");
    menuBg.classList.toggle("menubg-visible");
    bars.forEach(bar => bar.classList.toggle("change"))
    aside.classList.toggle("open");
    body.classList.toggle("block-scroll");
}
