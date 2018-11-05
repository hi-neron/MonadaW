<template>
  <div id="presetation-menu" class="container">
    <Abstract v-bind:content="menu"></Abstract>
  </div>
</template>

<script>
import _ from 'lodash'
import Abstract from './Abstract.vue'

export default {
  name: 'AboutMenu',
  data: function () {
    return {
      activated: {}
    }
  },
  props: {
    menu: Array
  },
  components: {
    Abstract
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
  @import '../scss/main';

  .orange {
    a {
      opacity: 1 !important;
      font-family: 'Ancizar Sans Italic';
      letter-spacing: 0.05em;
    }

    &:before, &:after {
        transform: rotateY(0deg) !important;

      }
      &:before {
        opacity: 1;
      }
      &:after {
        opacity: 1;
      }
  }

  nav {
    padding-top: 2em;
    margin: 3em 0px 4em 0px;
    font-family: serif;
  }

  a {
    text-decoration: none !important;
    list-style: none;
    color: inherit;
    font-family: 'Ancizar Sans';
    font-size: calc(1.2rem + 30vw / 100);
    display: inline-block;
    max-width: 140px;
    // transition: 0.2s ease-in;
    vertical-align: middle;
    line-height: 1.4em;
    opacity: 0.3;
  }

  .item {
    cursor: pointer;
    text-align: center;
    padding: 10px;
    position: relative;
    line-height: 80px;
    height: 80px;

    &:before, &:after {
      position: absolute;
      transition: 0.5s ease-out;
      color: rgba($color, 1);
      transform: rotateY(90deg);
      top: 0.45em;
      font-size: 1.4em;
      font-family: 'Ancizar Sans Light';
    }

    &:before {
      margin-left: -19px;
      content: '{';
    }

    &:after {
      margin-left: 9px;
      content: '}';
    }

    &:nth-last-child(2){
      border-right: none;
    }

    &:hover {
      a {
        opacity: 1;
        color: $secondaryColor;
      }
    }
  }

</style>
