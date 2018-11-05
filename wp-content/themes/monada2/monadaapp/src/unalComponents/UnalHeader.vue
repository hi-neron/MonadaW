<template>
	<div class="unal-header">
		<div id="unalTop">
			<div class="logo">
					<a href="http://unal.edu.co">
						<!--[if (gte IE 9)|!(IE)]><!-->
						<svg width="93%" height="93%">
							<image :href="getImage('escudoUnal.svg')" width="100%" height="100%" class="hidden-print"/>
						</svg>
						<!--<![endif]-->
						<!--[if lt IE 9]>
							<img :src="getImage('escudoUnal.png')" width="93%" height="auto" class="hidden-print"/>
						<![endif]-->
						<img :src="getImage('escudoUnal_black.png')" class="visible-print" />
					</a>
			</div>
			<div class="seal">
				<img class="hidden-print" alt="Escudo de la República de Colombia" :src="getImage('sealColombia.png')" width="66" height="66" />
				<img class="visible-print" alt="Escudo de la República de Colombia" :src="getImage('sealColombia_black.png')" width="66" height="66" />
			</div>
			<div class="firstMenu">
				<!-- <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> -->
				<!-- <div class="btn-group languageMenu hidden-xs">
					<div class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						es<span class="caret"></span>
					</div>
					<ul class="dropdown-menu">
						<li><a href="index.html#">es</a></li>
						<li><a href="index.html#">en</a></li>
					</ul>
				</div> -->
					<ul class="socialLinks hidden-xs">
						<li>
							<a href="https://www.facebook.com/UNColombia" target="_blank" class="facebook" title="Página oficial en Facebook"></a>
						</li>
						<li>
							<a href="https://twitter.com/UNColombia" target="_blank" class="twitter" title="Cuenta oficial en Twitter"></a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UCnE6Zj2llVxcvL5I38B0Ceg" target="_blank" class="youtube" title="Canal oficial de Youtube"></a>
						</li>
						<li>
							<a href="http://agenciadenoticias.unal.edu.co/nc/sus/type/rss2.html" target="_blank" class="rss" title="Suscripción a canales de información RSS"></a>
						</li>
					</ul>
					<div class="navbar-default">
						<nav id="profiles">
							<ul class="nav navbar-nav dropdown-menu">
								<li class="item_Aspirantes #>"><a href="http://aspirantes.unal.edu.co/" taget="_blank">Aspirantes</a></li>
								<li class="item_Estudiantes #>"><a href="http://estudiantes.unal.edu.co/">Estudiantes</a></li>
								<li class="item_Egresados #>"><a href="http://egresados.unal.edu.co/">Egresados</a></li>
								<li class="item_Docentes #>"><a href="http://docentes.unal.edu.co/">Docentes</a></li>
								<li class="item_Administrativos #>"><a href="http://administrativos.unal.edu.co/">Administrativos</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div id="bs-navbar" class="navbar-collapse collapse navigation">
				<div class="site-url">
					<a href="http://www.iie.unal.edu.co/micrositios/monada/">monada.unal.edu.co</a>
				</div>
				<!-- <div class="buscador">
					<div class="gcse-searchbox-only" data-resultsUrl="http://unal.edu.co/resultados-de-la-busqueda/" data-newWindow="true"></div>
				</div> -->
				<div class="mainMenu">
					<!-- <div class="btn-group">
						<div class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							Monada<span class="caret"></span>
						</div>
						<ul class="dropdown-menu">
							<li><a href="#">Página 1</a></li>
							<li><a href="#">Página 2</a></li>
						</ul>
					</div> -->
					<div class="btn-group">
						<a href="#presetation-menu" class="btn btn-default">
							Mónada
						</a><span class="caret-right"></span>
					</div>
					<div class="btn-group">
						<a href="#projects" class="btn btn-default">
							Proyectos
						</a><span class="caret-right"></span>
					</div>
					<div class="btn-group">
						<a href="#events" class="btn btn-default">
							Eventos
						</a><span class="caret-right"></span>
					</div>
					<div class="btn-group">
						<a href="#team" class="btn btn-default">
							Grupo
						</a><span class="caret-right"></span>
					</div>
					<div class="btn-group">
						<a href="#contact" class="btn btn-default">
							Contacto
						</a><span class="caret-right"></span>
					</div>
					</div>
					<div class="btn-group hidden-sm hidden-md hidden-lg hidden-print">
						<div class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="unalOpenMenuServicios" data-target="#services">Servicios<span class="caret"> </span>
					</div>
				</div>
				<div class="btn-group hidden-sm hidden-md hidden-lg hidden-print">
					<div class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="unalOpenMenuPerfiles" data-target="#profiles">Perfiles<span class="caret"> </span>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
// let jQuery = require('jquery')
require('./jquery')
require('./unal')

export default {
	name: 'unalHeader',
	data: function () {
		return {
			show: true
		}
	},
  props: {
		wpData: Object
	},
	methods: {
		getImage (image) {
			let path = wpData.path
			return  `${path}/img/${image}`
		}
	}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
	@import '../scss/mainu';

	.unal-header {
		position: absolute;
		top: 0;
		left: 0;
		font-family: 'Ancizar Sans' !important;
		font-size: 0.87em;
		width: 100%;
		text-align: left;
		z-index: 3;
	}

</style>
