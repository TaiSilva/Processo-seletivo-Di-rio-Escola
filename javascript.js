var clientes = [
    {
    'id': 1,
    'nome': 'Luis Santos Silveira',
    'idade': 18
    },
    {
    'id': 2,
    'nome': 'Ricardo Lopes Alves',
    'idade': 30
    },
    {
    'id': 3,
    'nome': 'Gustavo Silva Junior',
    'idade': 26
    }
    ];
for (i=0;i<clientes.length;i++){
    const dividirNomes = clientes[i].nome.split(" ");
    const sobrenome = dividirNomes.pop();
    const nome = dividirNomes.shift();
    const nomeSobrenome = sobrenome + " " + nome;
    console.log(nomeSobrenome);
}

    var numero = "5(1)9-876-543-21";

    console.log(formatarNumero(numero));
    
    function formatarNumero(numero) {
  // Remove caracteres não numéricos da string
  var numeroLimpo = numero.replace(/\D/g, '');

    return `(${numeroLimpo.substr(0, 2)})_${numeroLimpo.substr(2, 1)}_${numeroLimpo.substr(3, 4)}-${numeroLimpo.substr(7)}`;

    }
  
  
  
  
Bônus)

3)
A ordem dos prints no console:
c
d
a

4)
Para a função b chamar a função alertUser, deveria colocar antes do return.