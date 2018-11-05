<template>
  <div id="app">
    <transition name="slide">
      <unal-header v-bind:wpData="wpData" v-show="unalHShow"></unal-header>
    </transition>
    <unal-aside v-bind:wpData="wpData"></unal-aside>
    <monada-aside ref="mAside" :orangeAside="orangeAside"></monada-aside>
    <monada-header v-bind:data="monadaData" v-bind:wpData="wpData"/>
    <about-menu v-on:resizeAbstract="resizeEvent" ref="presentation" v-bind:menu="menu" v-bind:wpData="wpData"/>
    <projects v-bind:wpData="wpData"/>
    <team v-bind:wpData="wpData" :team="team"/>
    <next-events v-bind:wpData="wpData"/>
    <contact v-bind:wpData="wpData" v-bind:contact="contact"/>
    <unal-footer v-bind:wpData="wpData"></unal-footer>
  </div>
</template>

<script>
  // monada Components
  import Header from './components/Header.vue'
  import AboutMenu from './components/AboutMenu.vue'
  import Projects from './components/Projects.vue'
  import UpcomingEvents from './components/UpcomingEvents.vue'
  import Team from './components/Team.vue'
  import Contact from './components/Contact.vue'
  import Aside from './components/Aside.vue'

  // unal components
  import UnalHeader from './unalComponents/UnalHeader.vue'
  import UnalFooter from './unalComponents/UnalFooter.vue'
  import UnalAside from './unalComponents/UnalAside.vue'

  const MENU = [
    {
      name: 'Mónada',
      content: [
        { name: 'Presentación',
          content: 'Mónada es un grupo de investigación que reúne docentes y estudiantes de  las aéreas de historia de arte, música, teoría del arte y crítica; nuestros temas de interés abordan  las formas en como la producción cultural se proyecta, circula y consume en la sociedad.  Los medios de comunicación, los circuitos de divulgación cultural, las estrategias de consumo, la producción de narrativas históricas, el análisis historiográfico o incluso la inscripción institucional de las artes, son algunos de los diversos intereses y perspectivas de trabajo del grupo.'},
        {
          name: 'Enfoque',
          content: 'Concebimos la investigación desde una perspectiva transdiciplinar buscando puntos de contactos, zonas de encuentro y de divergencia que permitan comprender la producción cultural.'
        },
        {
          name: 'Perspectiva transdiciplinar',
          content: 'Las líneas de investigación son amplias zonas de confluencia disciplinar; diferentes campos de conocimiento pueden pensar un mismo problema y desde cada práctica disciplinar describir un aspecto de ese objeto común planteado en una investigación.'
        }
      ]
    },
    {
      name: 'Líneas de investigación',
      content: [
        {
          name: 'Corrientes historiográficas',
          content: 'Esta línea de investigación tiene por objetivo reflexionar sobre los aportes, tradiciones y modelos historiográficos en la elaboración de un discurso sobre las artes en Colombia y en América Latina. Por ello, nos centraremos en las formas, estrategias y metodologías de la práctica de la historia en la producción y elaboración de sus objetos de estudio.'
        },
        {
          name: 'Medios de reproducción, circulación, institucionalización y difusión artística',
          content: 'Esta línea busca analizar, conceptualizar y problematizar la producción artística en el contexto de los medios de comunicación, la reproductibilidad técnica de la imagen y las formas de circulación y difusión, tanto en su dimensión histórica como teórica. En consecuencia, exploraremos el campo de producción cultural, sus instituciones y estrategias de promoción, circulación y divulgación de las artes; las formas de circulación y difusión en la era de la reproductibilidad técnica.'
        },
        {
          name: 'Historia y teoría de las artes en América Latina y Colombia',
          content: 'Esta línea de investigación tiene por objetivo analizar desde el componente teórico e histórico la producción artística y musical, la recepción de la obra, la elaboración de textos de divulgación y las diferentes estrategias de circulación entre otras alternativas derivadas de dichas prácticas.'
        },
        {
          name: 'Temas y problemas de la teoría y de la crítica',
          content: 'Esta línea de investigación tiene por objetivo analizar la producción escrita, teórica, crítica y de divulgación de la producción artística y musical en el contexto nacional y regional.'
        }
      ]
    }
  ]

  const CONTACT = {
    email: ['monada_bog@unal.edu.co'],
    address: 'Carrera 30 No. 45-03, Edificio SINDU Primer piso Of. 314  - Instituto de Investigaciones Estéticas',
    phone: '3165000 ext. 12274',
    facebook: 'https://www.facebook.com/grupomonada',
    youtube: 'https://www.youtube.com/channel/UCcTpwc9ZUwniVgROfTzDbaQ'
  }

  const TEAM = [
    {
      name: 'María Soledad García Maidana',
      title: 'Profesora',
      url: 'http://www.iie.unal.edu.co/msgarcia.html',
      img: 'http://www.iie.unal.edu.co/msgarcia.html'
    },
    {
      name: 'Jaime Cortés Polania',
      title: 'Profesor',
      url: 'http://www.iie.unal.edu.co/jcortes.html',
      img: 'http://www.iie.unal.edu.co/msgarcia.html'
    },
    {
      name: 'Angélica González Vasquez',
      title: 'Profesora',
      url: 'http://www.iie.unal.edu.co/avasquez.html',
      img: 'http://www.iie.unal.edu.co/msgarcia.html'
    },
    {
      name: 'Zenaida Osorio Porras',
      title: 'Profesora',
      url: 'http://www.facartes.unal.edu.co/fa/docentes/docentes/profesor.php?id=18&escuela=Dise%C3%B1o%20Gr%C3%A1fico',
      img: 'http://www.iie.unal.edu.co/msgarcia.html'
    },
    {
      name: 'Francisco Montaña Ibañez',
      title: 'Profesor',
      url: 'http://www.iie.unal.edu.co/fmontana.html',
      img: 'http://www.iie.unal.edu.co/msgarcia.html'
    }
  ]


  export default {
    name: 'app',
    data: function () {
      return {
        monadaData: {},
        wpData: wpData,
        name: '',
        menu: MENU,
        unalHShow: true,
        prePos: {},
        posAside: {},
        orangeAside: false,
        borders: {},
        contact: CONTACT,
        team: TEAM
      }
    },
    components: {
      'monada-header' : Header,
      'about-menu' : AboutMenu,
      'projects' : Projects,
      'next-events' : UpcomingEvents,
      'team' : Team,
      'contact' : Contact,
      'unal-header': UnalHeader,
      'unal-footer': UnalFooter,
      'unal-aside': UnalAside,
      'monada-aside': Aside
    },
    created () {
      this.wpData.path = this.wpData.template_directory_uri
      fetch(`${this.wpData.rest_url}`)
        .then( (res) => res.json() )
        .then( (data) => {
          this.menu = MENU
          this.monadaData = data
        })
    },
    methods : {
      scroll: function () {
        let y = window.pageYOffset
        this.unalHShow = y > 0 ? false : true
        this.orangeAside = y > this.borders.top && y < this.borders.bottom ? true : false
      },

      resizeEvent: function () {
        this.borders = this.getBorders()
      },

      getBorders: function () {
        let presentation = document.getElementById('presentation')
        let leftBar = this.$refs.mAside.$el

        let posAside2 = {}
        let prePos2 = {}

        prePos2.posY = presentation.offsetTop
        prePos2.size = presentation.clientHeight

        posAside2.posY = leftBar.offsetTop
        posAside2.size = leftBar.clientHeight

        let borders =  {
          top: prePos2.posY - posAside2.posY - (posAside2.size / 2),
          bottom: prePos2.posY - posAside2.posY + prePos2.size - (posAside2.size / 2)
        }

        return borders
      }
    },
    mounted () {
      let _this = this

      // blackBackgroundPos to left aside color
      this.prePos = {}
      this.posAside = {}

      this.resizeEvent()
      this.$set(this.prePos, 'posY', document.getElementById('presentation').offsetTop)
      this.$set(this.prePos, 'size', document.getElementById('presentation').clientHeight)


      window.addEventListener('resize', (e) => {
        _this.resizeEvent()
      })
    }
  }


</script>

<style lang="scss">
  @import './scss/main';

  .slide-enter-active, .slide-leave-active {
    transition: all .6s cubic-bezier(0.47, 0, 0.745, 0.715);
  }

  .slide-enter, .slide-leave-to /* .fade-leave-active below version 2.1.8 */ {
    transform: translateY(-20vh);
  }

  #app {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: $color;
  }
</style>
