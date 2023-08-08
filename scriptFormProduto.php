<?php
$produto   = $_POST['nome'];
$validade  = $_POST['validade'];
$categoria = $_POST['categoria'] ;
$unidade   = $_POST['unidade'];
$vlrCompra = $_POST['valorCompra'];

echo "<h3>Nome do Produto: $produto</h3>";
echo "<h3>validade do Produto: $validade</h3>";
echo "<h3>Categoria do Produto: $categoria</h3>";
echo "<h3>Unidade de medida do Produto: $unidade</h3>";
echo "<h3>Valor de compra do Produto: R$ $vlrCompra</h3>";

$vlrVenda = $vlrCompra + ($vlrCompra*(1.2));
echo "<h3>Valor de venda do Produto: R$ $vlrVenda</h3>";

if($vlrVenda > 50){
    echo "Aplicar desconto de 10% em compras à vista";
    $vlrDesc =  $vlrVenda - $vlrVenda*0.1;
    echo "<h2>Total: $vlrDesc</h2>";
}else{
    echo "Valor padrão em qualquer forma de pagamento";
} 

?>