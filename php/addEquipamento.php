<?php 
include_once("classes/AdmDAO.class.php");
	$inserir = new AdmDAO;
	$descricao = $_POST['descricao'];
	$qtd = $_POST['qtd'];
	$ft = $_FILES['img']['tmp_name'];
	$ftNome = $_FILES['img']['name'];
	$time = date('Y_m_d_h_m_s');
	$nome = basename($time.$ftNome);
	move_uploaded_file($ft,"../imgEquipamentos/".$nome);
	$urlImg = "http://localhost/projetos/imgEquipamentos/".$nome;
	$checked = $inserir->addEquipamento($descricao,$qtd,$urlImg);
	if($checked){
		header('location: ../html/adm/add/add');
		}else{
			echo "erro";
			}
?>