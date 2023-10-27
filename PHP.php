1)

<!DOCTYPE html>
<html>
<body>

<?php
$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];
$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];
$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];
$arrayDeClientes = [$cliente1, $cliente2, $cliente3];

echo $arrayDeClientes[1]->nome
?>

</body>
</html>

2)

<!DOCTYPE html>
<html>
<body>

<?php
$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
$arrayDeNascimento = [
'Francisco Souza' => '10-12-1996',
'Arthur Golveia' => '14-01-2000',
'Guilherme Rosa' => '26-05-1985',
'Marcelo Planalto' => '26-05-1985'
];

$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];
$cliente1->datanascimento = $arrayDeNascimento[$nomes[0]];
$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];
$cliente2->datanascimento = $arrayDeNascimento[$nomes[1]];
$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];
$cliente3->datanascimento = $arrayDeNascimento[$nomes[2]];
$arrayDeClientes = [$cliente1, $cliente2, $cliente3];

?>

</body>
</html>

3)

<!DOCTYPE html>
<html>
<body>

<?php
$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
$arrayDeNascimento = [
'Francisco Souza' => '10-12-1996',
'Arthur Golveia' => '14-01-2000',
'Guilherme Rosa' => '26-05-1985',
'Marcelo Planalto' => '26-05-1985'
];

$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];
$cliente1->datanascimento = $arrayDeNascimento[$nomes[0]];
$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];
$cliente2->datanascimento = $arrayDeNascimento[$nomes[1]];
$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];
$cliente3->datanascimento = $arrayDeNascimento[$nomes[2]];
$arrayDeClientes = [$cliente1, $cliente2, $cliente3];

forEach($arrayDeClientes as $clientes){
	echo $clientes->nome  . " nascido em " . $clientes->datanascimento . "<br/>";
}
?>

</body>
</html>


