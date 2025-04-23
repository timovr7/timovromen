class MyHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <nav class="navbar">

      <div class="nav-logo">
        <a href="/"><img src="images/logo.png" alt="Home" height="60px"></a>
      </div>

      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>

      <ul class="nav-menu">
        <li class="nav-item"><a href="index.html" class="nav-link">// resume</a></li>
        <li class="nav-item"><a href="index.html" class="nav-link">// connect</a></li>
      </ul>

    </nav>
    `;
  }
}
customElements.define('my-header', MyHeader);

class MyFooter extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <div class="footer">
      <div class="links">
        <a target="_blank" href="https://www.facebook.com/?locale=nl_NL"><i class="fa-brands fa-facebook"></i></a>
        <a target="_blank" href="https://github.com/dashboard"><i class="fa-brands fa-github"></i></a>
        <a target="_blank" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
        <a target="_blank" href="https://soundcloud.com/timo-vromen"><i class="fa-brands fa-soundcloud"></i></a>
        <a target="_blank" href="https://open.spotify.com/track/2Gxh4y04T3MvbbUyDgYrJg?si=cb40e35ec76745c9"><i class="fa-brands fa-spotify"></i></a>
        <p>www.timovromen.nl</p>
      </div>
    </div>
    `;
  }
}
customElements.define('my-footer', MyFooter);

class ScrollBar extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <div class="scroll-bar">
      <div class="scroll-bar-left">
        <i class="fa-solid fa-arrow-down"></i>
        <p>scroll to continue</p>
      </div>
      <div class="scroll-bar-right">
        <a target="_blank" href="https://github.com/timovr7"><i class="fa-brands fa-github"></i></a>
        <p>GitHub</p>
        <a target="_blank" href="https://www.linkedin.com/in/timo-vromen/"><i class="fa-brands fa-linkedin"></i></a>
        <p>LinkedIn</p>
      </div>
    </div>
    `;
  }
}
customElements.define('scroll-bar', ScrollBar);
