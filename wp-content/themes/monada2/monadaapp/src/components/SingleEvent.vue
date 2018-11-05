<template>
  <div class="event-container">
    <div class="wrapper">
      <div class="top pure-g">
        <div class="pure-u-1">
          <time :datetime="dates.date">
            <span class="day"> {{dates.day}} </span>
            <span class="month"> {{dates.month}} </span>
            <span class="month"> del {{dates.year}} </span>
          </time>
        </div>
      </div>
      <div class="middle pure-g">
        <h3 class="pure-u-1">
          {{calendarEvent.title}}
        </h3>
      </div>
      <div class="bottom pure-g">
        <div class="pure-u-1">
          <p>
            <b>Lugar </b><span class="place">{{calendarEvent.venue.venue}}, </span>
            <span class="address">{{calendarEvent.venue.address}}</span><br>
            <span class="city">{{calendarEvent.venue.city}}, {{calendarEvent.venue.country}}</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
const MONTHS = [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Septiembre',
        'Octubre',
        'Noviembre',
        'Diciembre'
      ]

export default {
  data: function () {
    return {
      months: MONTHS,
      dates: {}
    }
  },
  props: {
    calendarEvent: Object,
  },
  methods: {
    month: function (date) {
      return this.months[date]
    }
  },
  mounted: function () {
    let date = new Date(this.calendarEvent.start_date)
    let myDate = {
      date: date,
      day: date.getDate(),
      year: date.getFullYear(),
      month: this.month(date.getMonth())
    }
    this.dates = myDate
  }
}
</script>

<style lang="scss" scoped>
  @import '../scss/main';

  .place {
    text-transform: capitalize;
    font-weight: 4;
  }

  .city {
    font-size: 0.9em;
    font-family: 'Ancizar Sans' !important;
  }

  .wrapper {
    padding: 1.5em;
    text-align: center;

    .top {
      color: $secondaryColor;
      font-family: 'Ancizar Sans' !important;
      text-transform: uppercase;
      span {
        font-family: 'Ancizar Sans' !important;
        font-size: 1.3em;
      }
      .day {
        font-family: 'Ancizar Sans' !important;
      }
    }
    .middle {
      margin-top: 0.3em;

      h3 {
        font-size: 1.2em;
        line-height: 1.3em;
        font-family: 'Ancizar Serif' !important;
        font-weight: 400;
        padding: 0;
        margin: 0;
        
        // &:before {
        //   content: '➞';
        //   font-size: 1.2em;
        //   color: $secondaryColor;
        //   vertical-align: bottom;
        // }
      }
    }
    .bottom {
      margin-top: 0.6em;
      p {
        padding: 0;
        margin: 0;
        span {
          font-family: 'Ancizar Serif Italic' !important;
        }
      }
    }
  }
</style>


