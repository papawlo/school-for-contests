<?php get_header(); ?>
<section id="cursos-matriculados">
	<div class="content">
		<aside class="col1">
			<ul>
				<li>
					<a href="javascript:void(0)" title="Editar dados">Editar dados</a>
				</li>
<!--				<li>
					<a href="javascript:void(0)" title="Cursos matriculados">Cursos matriculados</a>
				</li>-->
				<li>
					<a href="javascript:void(0)" title="Produtos comprados">Produtos comprados</a>
				</li>
			</ul>
		</aside>
		<div class="col2">
			<header class="header-padrao clearfix">
				<svg>
				<use xlink:href="#icon-papel-dobrado" />
				</svg>
				<h2>Cursos matriculados</h2>
				<select id="select-cursos-matriculados">
					<option value="1">1</option>
				</select>
			</header>
			<table>
				<thead>
					<tr>
						<th class="th-curso">Curso</th>
						<th class="th-matricula">Matrícula</th>
						<th class="th-data">Data</th>
						<th class="th-valor">Valor</th>
						<th class="th-status">Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Legislação de trânsito e etéica e cidadania para GMRLegislação de trânsito e etéica e cidadania para GMR</td>
						<td>01145690345</td>
						<td>29/12/2014</td>
						<td>R$ 780,00</td>
						<td>Matriculado</td>
					</tr>
					<tr>
						<td>Legislação de trânsito e etéica e cidadania para GMR</td>
						<td>01145690345</td>
						<td>29/12/2014</td>
						<td>R$ 780,00</td>
						<td>Matriculado</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
<script src="js/libs/jquery-ddslick.js"></script>
<script>
	$(function() {
		$("#select-cursos-matriculados").ddslick({
			selectText: "Ordenar lista",
		});
	});
</script>
<?php get_footer(); ?>