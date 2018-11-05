<template>
  <div id="team" class="container" :style="getImage('teamBack.jpg')">
    <div class="pure-g">
      <h2 class="pure-u-1 title">
        Grupo
      </h2>
      <div class="pure-u-1">
        <div class="pure-g">
          <div class="pure-u-md-4-24 pure-u-2-24"></div>
          <div class="pure-u-md-16-24 pure-u-20-24">
            <div class="swiper-container pure-u-1">
              <div class="swiper-wrapper">
                <div class="swiper-slide" v-for="person in team">
                  <div class="person-container pure-g">
                    <div class="person pure-u-1">
                      <p class="person-title">
                        {{person.title}}
                      </p>
                      <h4 class="person-name">
                        {{person.name}}
                      </h4>
                      <a class="person-link" :href="person.url">
                        Bio
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination pure-u-1">
              </div>
              <div class="swiper-button-next pure-u-1">
              </div>
              <div class="swiper-button-prev pure-u-1">
              </div>
            </div>
          </div>
          <div class="pure-u-md-4-24 pure-u-2-24"></div>
        </div>
      </div>
    </div>
    <div class="team-label">
      Reunión de trabajo Grupo de investigación Mónada. Foto: John Alexander Campos.
    </div>
  </div>
</template>
<script>
  import Swiper from 'swiper'

  export default {
    props : {
      team: Array,
      wpData: Object
    },
    mounted () {
      let swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
      })
    },
    methods: {
      getImage (image) {
        return {
          'background-image' : `url(${wpData.path}/img/${image})`
        }
      }
    }
  }

</script>

<style lang="scss" scoped>
  @import '../scss/main';

  .container {
    padding: 6.5em 0em;
    background-position: center center;
    background-attachment: fixed;
    position: relative;

    h2 {
      font-family: 'Ancizar Sans';
      font-weight: 900;
      font-size: calc(2.7rem + 30vw / 100);
      color: rgba($background, 0.9);
      margin: 0;
      padding: 0;
    }

    .team-label {
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

  .swiper-container {
    width: 100%;
    height: 100%;
    .swiper-wrapper {
      width: 100%;
      height: 400px;

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
    }
  }

  .person-container {
    width: 100%;

    .person {
      text-align: center;
      padding: 0em 0 2em 1em;
      line-height: 1.3em;

      p, h4 {
        padding: 0;
        margin: 0;
      }

      .person-name {
        text-transform: capitalize;
        font-size: 1.8em;
        max-width: 260px;
        margin: 0 auto;
        line-height: 1.1em;
        padding-bottom: 0.3em;
        color: $background;
      }

      .person-title {
        font-size: 1.1em;
        font-family: 'Ancizar Serif Italic';
        padding-bottom: 0.5em;
        color: $background;
        
      }

      .person-link {
        margin-top: 4em;
        text-decoration: none;
        color: $secondaryColor;
      }
    }
  }
</style>

