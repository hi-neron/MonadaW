<template>
  <div class="container">
    <div class="wrapper" @click.prevent="openProject">
      <div class="top pure-g">
        <div class="pure-u-1 image">
          <div class="blue-cover"></div>
          <picture>
            <img v-bind:src="project.urlMainPicture" v-if="project.urlMainPicture" alt="">
            <div class="no-picture" v-else> Imagen no encontrada </div>
          </picture>
        </div>
      </div>
      <div class="label">
        <div class="label-wrapper">
          <h3>
            {{project.title.rendered}}
          </h3>
          <a class="other-link" href="">
            <p v-html="project.content.rendered">
            </p>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import _ from 'lodash'

export default {
  data: function () {
    return {
      urlMainPicture: '',
      myTags: []
    }
  },
  props: {
    project: Object,
    tags: Array
  },
  methods: {
    tagClick (e) {
      let tag = e.target.getAttribute('tagname')
      this.$emit('tag', tag)
    },
    openProject (e) {
      if (e.target.hasAttribute("tagname")) return null
      let _this = this

      fetch(`${wpData.rest_url}/wp/v2/posts/${this.project.id}`)
        .then(( res ) => res.json())
        .then(( project ) => {
          project.myTags = _this.project.myTags
          project.mainPicture = _this.project.urlMainPicture
          _this.$emit('project', project)
        })
      }
  }
}
</script>

<style lang="scss" scoped>
  @import '../scss/main';

  @keyframes arrow {
    0% {
      right: 0.6em;
    }
    50% {
      right: 0.1em;
    }
    0% {
      right: 0.6em;
    }
  }

  .no-picture {
    background-color: $color;
    color: $background;
    text-align: center;
    width: 100%;
    height: 100%;
    padding: 130px 0 130px 0;
  }

  .container {
    text-align: left;
    margin: 0 !important;
    padding: 1em;

    .wrapper {
      color: $color;
      background-color: rgb(240, 240, 240);
      box-shadow: 0px 3px 0px rgba($color, 0.1);
      position: relative;
      overflow: hidden;

      &:hover {
        cursor: pointer;
        .label {
          .label-wrapper {
            h3 {
              &:after {
                width: 60px;
              }
            }
            p {
              height: 5.1em;
            }
          }
        }
        .top {
          .image {
            .blue-cover {
              background-color: rgba($secondaryColor3, 0.7);
            }
          }
        }
      }

      .top {
        position: relative;
        z-index: 0;

        .image {
          height: 400px;

          overflow: hidden;
          .blue-cover {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            transition: 0.1s ease-in;
          }


          picture {
            width: 100%;

            img {
              width: 100%;
              -webkit-filter: sepia(70%) hue-rotate(120deg) saturate(50%); /* Safari 6.0 - 9.0 */
              filter: saturate(0%);
              background-size: 100%;
            }
          }
        }
      }

      .label {
        z-index: 1;
        padding: 0em 1em 0em 1em;
        position: absolute;
        bottom: 0;
        background-color: $backgroundP;
        box-shadow: 0px -2px 2px rgba($color, 0.1);

        .label-wrapper {
          position: relative;

          h3 {
            width: 100%;
            font-family: 'Ancizar Sans';
            font-weight: normal;
            font-size: 1.05em;
            line-height: 1.3em;
            margin-bottom: 0px;
            margin-top: 1em;
            font-weight: 900;
            // overflow-wrap: break-word;
            // word-wrap: break-word;
            // hyphens: auto;
            height: 2.2em;
            overflow: hidden;
            position: relative;

            &:after {
              content: '';
              position: absolute;
              bottom: -2px;
              left: 0;
              display: inline-block;
              width: 30px;
              height: 1px;
              -webkit-transition: all 400ms cubic-bezier(0.895, 0.030, 0.685, 0.220);
              -moz-transition: all 400ms cubic-bezier(0.895, 0.030, 0.685, 0.220);
                -o-transition: all 400ms cubic-bezier(0.895, 0.030, 0.685, 0.220);
                    transition: all 400ms cubic-bezier(0.895, 0.030, 0.685, 0.220); /* easeInQuart */ 
              @include gradient;
            }
          }
          
          p {
            margin-top: 0.7em;
            font-family: 'Ancizar Serif Light';
            height: 0px;
            font-size: 0.9em;
            overflow: hidden;
            line-height: 1.35em;
            overflow-wrap: break-word;
            word-wrap: break-word;
            hyphens: auto;
            position: relative;
            -webkit-transition: all 250ms cubic-bezier(0.895, 0.030, 0.685, 0.220);
              -moz-transition: all 250ms cubic-bezier(0.895, 0.030, 0.685, 0.220);
                -o-transition: all 250ms cubic-bezier(0.895, 0.030, 0.685, 0.220);
                    transition: all 250ms cubic-bezier(0.895, 0.030, 0.685, 0.220); /* easeInQuart */ 

            &:after {
              content: '';
              background: linear-gradient(to right, rgba($backgroundP, 0), rgba($backgroundP, 1) 50%);
              position: absolute;
              right: 0;
              bottom: 0;
              width: 5em;
              height: 1.5em;

            }
          }

          .other-link {
            text-decoration: none;
            color: $color;
            &:hover {
              a {
                animation: arrow 0.3s ease-out infinite alternate;
              }
            }
          }

          .continue {
            position: absolute;
            right: 0.2em;
            bottom: 0.5em;
            color: $secondaryColor;
            text-decoration: none;
            font-family: 'Ancizar Sans Bold';
            width: 20px;
            height: 30px;
            font-size: 1.2em;

            &:hover {
              animation: arrow 0.3s ease-out infinite alternate;
            }
          }
          .tags-container {
            height: 1.5em;
            overflow: hidden;
            margin-bottom: 1em;
            width: 70%;

            .tag {
              display: inline-block;
              line-height: 1.5em;
              background-color: rgba($color, 0.95);
              margin-right: 0.3em;
              border-radius: 2px;

              a {
                font-family: 'Ancizar Sans';
                font-size: 0.9em;
                color: white;
                text-decoration: none;
                padding: 2px 6px;
              }

              &:hover {
                background-color: $secondaryColor2;
                color: $color;
                a {
                  color: rgba($color, 0.6)
                }
              }
            }
          }
        }
      }
    }
  }

  @media screen and (max-width: 500px) {
    .container {
      padding: 0.2em !important;
    }
  }


</style>


