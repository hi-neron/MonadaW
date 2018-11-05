<template>
  <div id="projects" class="container">
    <div class="pure-g">
      <div class="pure-u-2-24"></div>
      <div class="pure-u-20-24">
        <h2 class="pure-u-1 proyects-title">
          Proyectos
        </h2>
        <div class="pure-g articles-wrapper">
          <single-project v-on:tag="getProjects"  v-on:project="openProjectTemplate" class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2" v-for="project in projects" v-bind:project="project"></single-project>
        </div>
      </div>
      <div class="pure-u-2-24"></div>
    </div>
    <transition name="fade">
      <open-project v-bind:project="viewProject" v-on:close="projectClose" v-on:tag="tagActivated" v-if="projectTemplate"></open-project>
    </transition>
  </div>
</template>

<script>
import SingleProject from './SingleProject'
import OpenProject from './OpenProject'

export default {
  data: function () {
    return {
      projects: {},
      tags: [],
      projectTemplate: false,
      viewProject: {}
    }
  },
  components : {
    'single-project' : SingleProject,
    'open-project' : OpenProject
  },
  props: {
    wpData
  },
  methods: {
    extractTags: function (tags) {
      let tagsP = []

      tags.forEach(element => {
        let tag = {
          id : element.id,
          name : element.name,
          slug : element.slug,
        }
        tagsP.push(tag)
      });

      return tags
    },
    render: function (tags, projects) {
      let newTags = this.extractTags(tags)

      projects.forEach( project => {
        try {
          project.urlMainPicture = project._embedded['wp:featuredmedia'][0].source_url
        } catch (e) {
          project.urlMainPicture = null
          console.log('doesnt have media')
        }

        let projectTags = project.tags
        let myTags = []

        projectTags.forEach( idTag => {
          let toPush = _.find(newTags, {'id': idTag})
          if (toPush) myTags.push(toPush)
        })

        project.myTags = myTags
      })

      return projects
    },
    getProjects: function (tag) {
      if (tag) {
        let url = `${wpData.rest_url}/wp/v2/posts?_embed=1&tags=${tag}`
        fetch(url)
          .then(( res ) => res.json())
          .then(( projects ) => {
            fetch(`${wpData.rest_url}/wp/v2/tags`)
            .then(( res ) => res.json())
            .then(( tags ) => {
              this.projects = this.render(tags, projects)
            })
          })
      } else {
        let url = `${wpData.rest_url}/wp/v2/posts?_embed`
        fetch(url)
          .then(( res ) => res.json())
          .then(( projects ) => {
            fetch(`${wpData.rest_url}/wp/v2/tags`)
            .then(( res ) => res.json())
            .then(( tags ) =>  {
              this.projects = this.render(tags, projects)
            })
          })
      }
    },
    openProjectTemplate : function (project) {
      this.projectTemplate = true
      this.viewProject = project
      document.body.classList.add('no-scroll')
    },
    projectClose : function () {
      this.projectTemplate = false
      document.body.classList.remove('no-scroll')
    },
    tagActivated : function (tag) {
      this.projectClose()
      this.getProjects(tag)
    }
  },
  mounted () {
    this.getProjects()
  }
}
</script>

<style lang="scss" scoped>
  @import '../scss/main';

  .fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
  }
  .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
  }

  .container {
    margin: 1em 0em;
    margin-bottom: 4em;
  }

  .articles-wrapper {
    margin-top: -10px;
  }


  h2 {
    padding-top: 1em;
    padding-bottom: 1em;
    font-size: calc(2.7rem + 30vw / 100);
    font-weight: 900 !important;
    color: rgba($color, 0.9);

    font-family: 'Ancizar Sans' !important;
    text-shadow: 1px 2px 1px rgba(#000, 0.1);
    position: relative;
    width: 300px;

    // &:after {
    //   content: '';
    //   height: 2px;
    //   position: absolute;
    //   left: calc(50% - 15px);
    //   width: 30px;
    //   @include gradient;
    //   bottom: 48px;
    // }
  }

</style>


