<template>
  <aside>
    <div id="services">
			<div class="indicator hidden-xs"></div>
			<ul class="dropdown-menu monada-menu">
				<li>
					<a href="http://correo.unal.edu.co" target="_blank"><img :src="getImage('icnServEmail.png')" width="32" height="32" alt="Correo Electrónico">Correo Electrónico</a>
				</li>
				<li>
					<a href="https://dninfoa.unal.edu.co" target="_blank"><img :src="getImage('icnServSia.png')" width="32" height="32" alt="Dirección Nacional de Información Académica">DNINFOA - SIA</a>
				</li>
				<li>
					<a href="http://bibliotecas.unal.edu.co" target="_blank"><img :src="getImage('icnServLibrary.png')" width="32" height="32" alt="Biblioteca">Bibliotecas</a>
				</li>
				<li>
					<a href="http://personal.unal.edu.co" target="_blank"><img :src="getImage('icnServCall.png')" width="32" height="32" alt="Convocatorias">Convocatorias</a>
				</li>
				<li>
					<a href="http://identidad.unal.edu.co"><img :src="getImage('icnServIdentidad.png')" width="32" height="32" alt="Identidad U.N.">Identidad U.N.</a>
				</li>
			</ul>
		</div>
  </aside>
</template>

<script>
// let jQuery = require('jquery')
require('./jquery')
require('./unal')

export default {
  name: 'unalAside',
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
  
  .indicator {
		background-color: $thirdColor !important;
	}

	.monada-menu {
		background-color: $color !important;
	}
</style>
