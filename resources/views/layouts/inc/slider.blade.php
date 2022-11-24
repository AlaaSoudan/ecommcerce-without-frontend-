
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>



<section class="section container hero">
  <div class="tabs is-fullwidth">
    <ul>
      <li>
        <a>
          <span class="icon"><i class="fa fa-angle-left"></i></span>
          <span>Left</span>
        </a>
      </li>

      <li>
        <a>
          <span>Right</span>
          <span class="icon"><i class="fa fa-angle-right"></i></span>
        </a>
      </li>
    </ul>
  </div>
  <div id="slider">
    <figure>
      <img src="http://bulma.io/images/placeholders/640x480.png" alt>
      <img src="http://bulma.io/images/placeholders/640x480.png" alt>
      <img src="http://bulma.io/images/placeholders/640x480.png" alt>
      <img src="http://bulma.io/images/placeholders/640x480.png" alt>
    </figure>
  </div>

</section>
<style>
    .columns {
  margin: -35px 0;
  padding: 0;
}

@keyframes slidy {
  0% {
    left: 0%;
  }
  20% {
    left: 0%;
  }
  25% {
    left: -100%;
  }
  45% {
    left: -100%;
  }
  50% {
    left: -200%;
  }
  70% {
    left: -200%;
  }
  75% {
    left: -300%;
  }
  95% {
    left: -300%;
  }
  100% {
    left: -400%;
  }
}

div#slider {
  overflow: hidden;
}

div#slider figure img {
  width: 20%;
  float: left;
}

div#slider figure {
  position: relative;
  width: 300%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite;
}
</style>
