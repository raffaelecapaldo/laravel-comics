<header class="container py-3 d-flex justify-content-between align-items-center overflow-hidden">
    <div class="logo">
      <img src="/img/dc-logo.png" alt="Logo DC">
    </div>
    <nav>
      <ul class="d-flex gap-3 ">
        <a :class="{active: link.current}" v-for="link in navbar" :href="link.url">
          <li>{{ link.text }}</li>
        </a>
      </ul>
    </nav>
    <div class="jumbotron"></div>
  </header>
