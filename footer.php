</div>
<footer>
	<div class="text-center">
		©2021 CRUD PHP TESTE  - Direitos reservados
	</div>
	<script src="js/jquery.js"></script>
	<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready( 
		function () {
			$('#cursos').DataTable();
			$('#alunos').DataTable();
			$('#matriculas').DataTable();
		} );	
	</script>
</footer>