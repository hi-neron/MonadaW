<template>
  <footer class="clear">
    <nav class="col-md-3 col-lg-3 col-sm-3 col-xs-4 col-xxs-6 gobiernoLinea">
          <a href="http://www.legal.unal.edu.co" target="_top">Régimen Legal</a>
          <a href="http://personal.unal.edu.co" target="_top">Talento humano</a>
          <a href="http://contratacion.unal.edu.co" target="_top">Contratación</a>
          <a href="http://personal.unal.edu.co" target="_top">Ofertas de empleo</a>
          <a href="http://rendiciondecuentas.unal.edu.co/" target="_top">Rendición de cuentas</a>
          <a href="http://docentes.unal.edu.co/concurso-profesoral/" target="_top">Concurso docente</a>
          <a href="http://www.pagovirtual.unal.edu.co/" target="_top">Pago Virtual</a>
          <a href="http://controlinterno.unal.edu.co/" target="_top">Control interno</a>
          <a href="http://siga.unal.edu.co" target="_top">Calidad</a>
          <a href="http://unal.edu.co/buzon-de-notificaciones/" target="_self">Buzón de notificaciones</a>
    </nav>
    <nav class="col-md-3 col-lg-3 col-sm-3 col-xs-4 col-xxs-6 gobiernoLinea">
          <a href="http://correo.unal.edu.co" target="_top">Correo institucional</a>
          <a href="index.html#">Mapa del sitio</a>
          <a href="http://redessociales.unal.edu.co" target="_top">Redes Sociales</a>
          <a href="index.html#">FAQ</a>
          <a href="http://unal.edu.co/quejas-y-reclamos/" target="_self">Quejas y reclamos</a>
          <a href="http://unal.edu.co/atencion-en-linea/" target="_self">Atención en línea</a>
          <a href="http://unal.edu.co/encuesta/" target="_self">Encuesta</a>
          <a href="index.html#">Contáctenos</a>
          <a href="http://www.onp.unal.edu.co" target="_top">Estadísticas</a>
          <a href="index.html#">Glosario</a>
    </nav>
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 col-xxs-12 footer-info">
          <p class="col-sm-12 col-md-6 contacto">
        <b>Contacto página web:</b><br/>monada_bog@unal.edu.co<br/> Carrera 30 No. 45-03<br/> Edificio SINDU Primer piso  Of. 314 <br/> Bogotá D.C., Colombia<br/> (57 1) 316 5000  Ext. (12274) 
          </p>
          
          <p class="col-sm-12 col-md-6 derechos">
        &copy; Copyright 2018<br/> Algunos derechos reservados.<br/>
        <a title="Comuníquese con el administrador de este sitio web" href="mailto:mediosdigitales@unal.edu.co">mediosdigitales@unal.edu.co</a><br/>
        <a href="http://unal.edu.co/acerca-de-este-sitio-web.html" target="_blank">Acerca de este sitio web</a><br/> Actualización:05/11/18
          </p>
    </div>

    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 logos">
          <div class="col-xs-6 col-sm-12 col-md-6 no-padding">
        <a class="col-xs-6 col-sm-12" href="http://www.orgulloun.unal.edu.co">
          <img class="hidden-print" alt="Orgullo UN" :src="getImage('log_orgullo.png')" width="78" height="21" />
          <img class="visible-print" alt="Orgullo UN" :src="getImage('log_orgullo_black.png')" width="94" height="37" />
        </a>

        <a class="col-xs-6 col-sm-12 imgAgencia" href="http://www.agenciadenoticias.unal.edu.co/inicio.html">
          <img class="hidden-print" alt="Agencia de noticias" :src="getImage('log_agenc.png')" width="94" height="25" />
          <img class="visible-print" alt="Agencia de noticias" :src="getImage('log_agenc_black.png')" width="94" height="37" />
        </a>
          </div>
          <div class="col-xs-6 col-sm-12 col-md-6 no-padding">
        <a class="col-xs-6 col-sm-12" href="https://www.sivirtual.gov.co/memoficha-entidad/-/entidad/T0356">
          <img alt="Trámites en línea" :src="getImage('log_gobiern.png')" width="67" height="51" />
        </a>

        <a class="col-xs-6 col-sm-12" href="http://www.contaduria.gov.co/">
          <img alt="Contaduría general de la republica" :src="getImage('log_contra.png')" width="67" height="51" />
        </a>
          </div>

    </div>
  </footer>
</template>

<script>
export default {
  name: 'unalFooter',
  props: {
    wpData: Object
  },
  methods: {
    getImage (image) {
      return `${wpData.path}/img/${image}`
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
  @import '../scss/main';
  @import '../scss/mainu';

  footer {
    text-align: left;
    background-color: $color;
  }

</style>
