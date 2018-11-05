<template>
  <div id="monada-aside" :class="{ orangeColor : orangeAside }">
    <aside>
      <ul>
        <li>
          <a href="https://www.facebook.com/grupomonada" alt="social" target="_blank"><i class="icon-facebook"></i></a>
        </li>
        <li>
          <a href="https://www.youtube.com/channel/UCcTpwc9ZUwniVgROfTzDbaQ" alt="social" target="_blank"><i class="icon-youtube-play"></i></a>
        </li>
        <li>
          <a href="mailto:monada_bog@unal.edu.co" alt="social"><i class="icon-mail-alt"></i></a>
        </li>
      </ul>
    </aside>
  </div>
</template>

<script>
export default {
  props: {
    orangeAside: Boolean
  }
}
</script>

<style lang="scss" scoped>
  @import '../scss/main';

  #monada-aside {
    position: fixed;
    left: 0;
    top: 50%;
    margin-top: -120px;
    transition: 0.2s;
    height: 240px;
    z-index: 4;

    aside {
      ul {
        margin: 0;
        padding: 0px 0px 0px 2em;

        li {
          text-align: center;
          list-style: none;

          a {
            font-size: 1.6em;
            line-height: 2.5em;
            text-decoration: none;
            color: rgba($secondaryColor2, 1);
            transition: 0.2s;
            text-shadow: 0 1px 0 rgba($color, 0.7);

            .icon-mail-alt {
              font-size: 0.85em;
            }
            &:hover {
              color: $secondaryColor3;
            }
          }
        }
      }
    }
  }

  @media (max-width: 1000px) {
    #monada-aside {
      left: -50vw
    }
  }
</style>





