<?php 
	namespace alquilemos\Http\Controllers;
	use alquilemos\Http\Controllers\Controller;
	class PruebaController extends Controller
	{
		
		public function prueba($param){

			return 'Estoy dentro de PruebaController!!! '.$param;
		}
	}
?>