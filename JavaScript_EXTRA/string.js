const escola = "Cod3r";

console.log(escola.charAt(2)); // Recebe a string do indice selecionado
console.log(escola.charAt(5));
console.log(escola.charCodeAt(1)); // Pega a string do indice selecionado e converte para tabela ASCII
console.log(escola.indexOf('C')) // Pega o a string passada e devolve a posição dela

console.log(escola.substring(1)); // Vai devolver apartir do indice selecionado
console.log(escola.substring(0, 3)); // Retorna a String do primeiro indice até o indice anterior do segundo parametro passado na função

console.log("Escola".concat(escola).concat('!'));
console.log(escola.replace(3, 'e')); // Pega o indice selecionado no primeiro parametro, e substitui pelo segundo
console.log(escola.replace(/\d/, 'e')); // No primeiro parametro é utilizado expressão regular, onde ele pega o primeiro numero que está na string e usando replace substiui ele.
//Por exemplo,  /\d/ ou /[0-9]/ encontra correspondente '8' em "Dróide BB8".

console.log(escola.replace(/[\d]/gi, 'e')); // Usando expressão regular, no primeiro parametro pega todos os numeros que tem na string, e usando o replace substitui eles.

console.log('Ana, Maria, Pedro'.split(',')); // Gerou um arre, porque o split quebrou com a virgula os conteudos que tem dentro

console.log('Ana, Maria, Pedro'.split(/,/)); //Também da para fazer usando expressão regular

