<template>
  <div id="contact" class="pure-g contacto">
    <div class="pure-u-4-24 pure-u-sm-2-24"></div>
    <div class="pure-u-16-24 pure-u-sm-20-24">
      <div class="contact-image pure-u-1">
        <picture class="pure-u-1">
          <img :src="`${wpData.path}/img/monada_b.svg`" alt="monadab/w">
        </picture>
        <div class="address pure-u-1">
          <p>{{contact.address}}</p>
          <p>{{contact.phone}}</p>
        </div>
      </div>
      <div class="contact-content pure-u-1">
        <div class="footer-contact pure-g">
          <div class="mail-container pure-u-1">
            <div class="email" v-for="email in contact.email">
              <a :href="`mailto:${email[0]}`">{{email}}</a>
            </div>
          </div>
          <div class="social pure-u-1">
            <ul>
              <li><a :href="contact.facebook" target="_blank"><i class="icon-facebook"></i></a></li>
              <li><a :href="contact.youtube" target="_blank"><i class="icon-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="pure-u-4-24 pure-u-sm-2-24"></div>
  </div>
</template>
<script>
export default {
  props: {
    wpData: Object,
    contact: Object
  }
}
</script>
<style lang="scss" scoped>
   @import '../scss/main';

  .contacto {
    background-color: $color;
    padding: 5em 3em;
    text-align: left;

    .contact-image {
      img {
        width: 180px;
      }
      .address {
        padding-top: 1em;
        color: $background;
        line-height: 1.3em;
        p {
          margin: 0;
          padding: 0;
        }
      }
    }
    .contact-content {
      font-size: 1em;
      .footer-contact {
        width: 100%;
        margin: 0 auto;


        .email {
          a {
            text-decoration: none;
            color: $background;
          }
        }

        a:hover {
          color: $secondaryColor2;
        }

        .social {
          padding-top: 1.5em;
          ul {
            padding: 0;
            margin: 0;

            li {
              display: inline-block;
              a {
                font-size: 1.4em;
                text-decoration: none;
                color: $background;

                .icon-mail-alt {
                  font-size: 0.9em;
                }

                i {
                  &:hover {
                    color: $secondaryColor2;
                  }
                }
              }
            }
          }
        }
      }
    }
  }
</style>
