<template>
  <div id="events" class="pure-g container">
    <div class="pure-u-1">
      <h2 class="pure-u-1 title">
        Eventos
      </h2>
      <div class="pure-u-1 pure-g">
        <div class="pure-u-2-24"></div>
        <div class="pure-u-20-24">
          <div class="pure-g event-main">
            <event class="pure-u-1 pure-u-md-1-2 " v-for="event in events" v-bind:calendarEvent="event" :key="event.title"></event>
          </div>
        </div>
        <div class="pure-u-2-24"></div>
      </div>
    </div>
  </div>
</template>
<script>
import singleEvent from './SingleEvent'

export default {
  data: function (){
    return {
      events: []
    }
  },
  props: {
    wpData
  },
  components : {
    'event': singleEvent
  },
  mounted () {
    let url = `${wpData.rest_url}/tribe/events/v1/events/?page=1&per_page=10&start_date=2016-10-31`
    let _this = this
  
    fetch(url)
      .then(( res ) => res.json())
      .then(( response) => {
        _this.events = response.events
      })
  }
}
</script>
<style lang="scss" scoped>
  @import '../scss/main';

  .container {
    padding-bottom: 9em;
    display: inline-block;
  }

  .event-main {
    padding-top: 0em;
    font-size: 1.1em;
    line-height: 1.3em;
    font-family: 'Ancizar Serif Light';
  }



  .title {
    padding: 0.5em;
    padding-top: 1.35em;
    font-size: calc(2.7rem + 30vw / 100);
    font-weight: 900;
    color: rgba($color, 0.9);
    width: 200px;
    text-align: center;
    font-family: 'Ancizar Sans';
    text-shadow: 1px 2px 1px rgba(#000, 0.1);
    position: relative;
    line-height: 1.2em;
  }

  .soon {
    padding: 1.5em;
    padding-top: 4em;
    padding-bottom: 5em;
    color: $secondaryColor;

    p {
      margin: 0;
      padding: 0.2em;
      &:nth-child(1) {
        position: relative;
        &:after {
          content: '';
          position: absolute;
          width: 30px;
          left: calc(50% - 15px);
          bottom: 1px;
          height: 1px;
          border-bottom: 1px dotted $secondaryColor;
        }
      }
    }

  }



</style>

