<template>
  <div id="home" class="container">
    <picture class="header-image">
      <div class="h-image" :style="getBackImage()"></div>
      <div class="main-image-label">
        Enciclopedia Salvat de la música, 1967
      </div>
    </picture>
    <div class="wrapper pure-g">
      <div class="pure-u-2-24"></div>
      <div class="pure-u-20-24">
        <h1 class="pure-g">
          <div class="pure-u-1">
            <div class="monada-link" href="">
              <img class="monada-brand" :src="`${wpData.path}/img/logo.svg`" alt="">
            </div>
          </div>
        </h1>
        <h2 class="pure-u-1">{{data.description}}</h2>
      </div>
      <div class="pure-u-2-24"></div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'monadaHeader',
  methods: {
    getBackImage () {
      return {
        'background-image' : `url(${this.wpData.path}/img/background.jpg)`
      }
    }
  },
  props: {
    data: Object,
    wpData: Object,
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
  @import '../scss/main';

  .container {
    position: relative;
    padding: 0;
    padding-top: 35vh;
    height: 110vh;
    width: 100vw;

    .header-image {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: -1;
      top: 0;
      left: 0;
      overflow: hidden;

      .h-image {
        background-position: center center;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
        opacity: 0.4;
      }
      .main-image-label {
        position: absolute;
        right: 2em;
        bottom: 2em;
        font-family: 'Ancizar Sans Italic';
        color: rgba($color, 1);
        font-size: 0.8em;
        background-color: white;
        padding: 0.2em 0.6em;
      }
    }

    .wrapper {
      margin-top: 5em;
      h1 {
        .monada-link {
          .monada-brand {
            max-width: 380px;
          }
        }
      }

      h2 {
        margin-top: -10px;
        text-decoration: none;
        font-weight: normal;
        font-family: "Ancizar Sans" !important;
        text-transform: uppercase;
        text-align: center;
        max-width: 420px;
        font-size: calc(0.78rem + (20vw / 100));
        line-height: 1.4em;
        text-shadow: 0px 2px 0px rgba($background, 0.4);
      }
    }
  }

</style>
