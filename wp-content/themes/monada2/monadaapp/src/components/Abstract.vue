<template>
  <div id="presentation" class="container" :style="getImage('abstract.jpg')">
    <div class="content-container" v-for="article in content">
      <div class="pure-g">
        <h2 class="title pure-u-1" v-bind:class="{ 'lines-title' : article.name === 'Líneas de investigación'}">
          {{article.name}}
        </h2>
      </div>
      <div class="pure-g">
        <div class="pure-u-1-24"></div>
        <div class="content pure-u-22-24">
          <div class="pure-u-22-24">
            <div class="pure-g">
              <div class="pure-u-1 pure-u-md-1-2 pure-u-xl-1-2 line-item" v-for="line in article.content" :key="line.name">
                <h2 class="line-title">
                  {{line.name}}
                </h2>
                <p class="line-text">
                  {{line.content}}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="pure-u-1-24"></div>
      </div>
    </div>
    <div class="abstract-image-label">
      Reunion grupo de investigación Mónada. Foto: Martía Cecilia Galindo.
    </div>
  </div>
</template>

<script>
export default {
  props: {
    content: Array,
    wpData: Object
  },
  methods: {
    getImage (image) {
      return {
        'background-image' : `url(${wpData.path}/img/${image})`
      }
    }
  },
  created () {
    console.log(this.content)
  }

}
</script>

<style lang="scss" scoped>
   @import '../scss/main';

  .container {
    background-color: $fastMenuBack;
    padding-top: 4em;
    padding-bottom: 3.5em;
    position: relative;
    box-shadow: inset 0px 0px 3em rgba(black, 0.1),
                inset 0px 0px 3px rgba(black, 1),
                0px 1px 0px 1px rgba($background, 1),
                0px 3px 5px rgba($color, 0.3);
    background-attachment: fixed;
    background-position: center center;

    .abstract-image-label {
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

  .lines-title {
    &:after {
      width: 200px;
      left: calc(50% - 100px);
    }
  }

  .guide {
    position: absolute;
    width: 50px;
    height: 15px;
    background-color: $fastMenuBack;
    top: -15px;
  }

  .line-item {
    padding: 2em;
    .line-title {
      font-size: calc(1.25rem + 30vw / 100);
      text-align: left;
      margin-bottom: 1em;
      &:after {
        content: '';
        width: 35px;
        height: 1px;
        position: relative;
        display: block;
        @include gradient;
      }
    }
    .line-text {
      font-size: calc(0.85rem + 30vw / 100);
    }
  }

  .content-container {
    h2 {
      color: $fastMenuColor;
      font-size: calc(2.7rem + 30vw / 100);
      font-weight: 900;
      font-family: 'Ancizar Sans' !important;
      margin-bottom: 0.7em;
      position: relative;
      text-shadow: 1px 2px 1px rgba(#000, 0.4);
      line-height: 1.2em;
      padding-bottom: 0.3em;
    }

    p {
      color: $fastMenuColor;
      font-family: 'Ancizar Serif' !important;
      line-height: 1.5em;
      font-size: calc(1.35rem + 30vw / 100);
      text-align: left;
    }
  }

</style>



