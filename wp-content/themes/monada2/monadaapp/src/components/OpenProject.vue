<template>
  <div id="open-project" class="project-template">
    <a href="" @click.prevent="close" class="close">
      <div class="button">
        x
      </div>
    </a>
    <div class="pure-g">
      <div class="pure-u-1-24 pure-u-md-4-24">
      </div>
      <div class="pure-u-22-24 pure-u-md-16-24 sheet">
        <picture class="main-picture">
          <img v-bind:src="project.mainPicture" alt="">
        </picture>
        <h1 class="article-title">
          {{project.title.rendered}}
        </h1>
        <div class="tag-container">
          <a class="tag" href="" @click.prevent="tagClick" v-for="tag in project.myTags" :key="tag.name" v-bind:tagname="tag.id">
            {{tag.name}}
          </a>
        </div>
        <div class="article-content" v-html="project.content.rendered">
        </div>
      </div>
      <div class="pure-u-1-24 pure-u-md-4-24"></div>

    </div>
  </div>
</template>

<script>
export default {
  props: {
    project: Object
  },
  methods: {
    close () {
      this.$emit('close')
    },
    tagClick (ev) {
      let tag = ev.target.getAttribute('tagname')
      this.$emit('tag', tag)
    }
  }
}
</script>

<style lang="scss" scoped>
  @import '../scss/main';

  @keyframes closelabel {
    0% {
      background-color: rgba($color, 1);
      color: rgba($background, 1);
    }
    100% {
      background-color: rgba($color, 0);
      color: rgba($color, 1);
    }
  }

  .close {
    position: fixed;
    width: 100vw;
    height: 100px;
    top: 0;
    left: 0;
    z-index: 1;
    text-decoration: none;
    font-size: 4em;
    font-family: 'Ancizar Serif Italic';
    color: rgba($color, 0.4);
    text-align: center;
    background-color: rgba($background, 0.98);
    box-shadow: 0px 2vh 2vh rgba($background, 1);

    .button {
      transition: 0.2s cubic-bezier(1.000, 0.015, 1.000, 0.025);
      position: relative;
      display: inline-block;
      margin-top: 20px;
      width: 50px;
      height: 50px;

      &:after {
        content: 'volver';
        position: absolute;
        font-family: 'Ancizar Sans';
        color: rgba($color, 0.4);
        background-color: rgba($background, 0);
        border-radius: 5px 5px 5px 0px;
        font-size: 0.8rem;
        top: 20px;
        right: -40px;
        padding: 3px 5px;
        animation-name: closelabel;
        animation-duration: 2s;
        animation-timing-function: cubic-bezier(1.000, 0.015, 1.000, 0.025);
        transition: 0.2s cubic-bezier(1.000, 0.015, 1.000, 0.025);
      }

    }

    &:hover {
      color: rgba($color, 1);

      .button {
        &:after {
        background-color: rgba($secondaryColor, 1);
        color: rgba($color, 1);
        }
      }
    }
  }

  .project-template {
    width: 100vw;
    height: 100vh;
    background-color: rgba($background, 0.95);
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10;
    overflow-y: scroll;
  }

  .sheet {
    background-color: $background;
    padding: 130px 15vh 15vh 15vh;
    height: 100vh;
    box-shadow: 0px 0px 2em 3em $background,
                0px 0px 6em 3em $background;
  }

  .tag-container {
    margin-top: -0.7em;
    text-align: left;
    .tag {
      color: $background;
      font-family: 'Ancizar Sans';
      text-decoration: none;
      font-size: 0.95em;
      padding: 5px 6px;
      background-color: $color;
      margin-right: 5px;
      border-radius: 2px;

      &:hover {
        color: rgba($color, 0.8);
        background-color: $secondaryColor2;
      }
    }
  }

  .main-picture {
    float: left;
    margin-bottom: 10px;
    transition: 0.3s cubic-bezier(1, 0, 0, 1);
    max-width: 30%;
    &:hover {
      max-width: 100%;
    }
  }

  .article-title {
    text-align: left;
    font-size: calc(1.8rem + 30vw / 100);
    font-family: 'Ancizar Serif';
    line-height: 1.4em;
  }

  .article-content {
    text-align: left;
    font-size: 1.5em;
    margin-top: 2em;
    font-family: 'Ancizar Serif';
    font-size: calc(1.2rem + 30vw / 100);
    line-height: 1.5em;
    padding-bottom: 10vh;
  }

  .show {
    opacity: 0.9;
  }

  @media screen and (max-width: 1400px) {
    .sheet {
      padding: 15vh 3vh 15vh 3vh;
    }
  }
</style>


