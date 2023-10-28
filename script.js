var dados = []

//Função que pega os dados do BD via API e adiciona os nomes nas options do select#De
function BuscarDados() 
{
    const url = "back.php";

    fetch(url)
    .then(response => response.json())
    .then(data => {
        let selectDe = document.querySelector("select#De")
        for(let i = 0; i < data.length; i++)
        {
            selectDe.innerHTML += "<option value = " + data[i].id + ">" + data[i].nome + "</option>"
        }  
        dados = data   
    })
    .catch(error => console.error('Erro: ', error));
}

function ApresentarDados(){
    let id = document.querySelector("select#De").value
    let dado = document.querySelector("select#Buscar").value
    let div = document.querySelector("div#ApresentaDados").innerHTML = ""
    console.log(dado)
    console.log(dados)
    console.log(div)
    console.log(id)

    for(let i = 0; i < dados.length; i++)
    {
        if(dados[i].id == id)
        {
            switch(dado){
                case "Nome":
                    Apresenta(dados[i].nome)
                    break
                case "Data de nascimento":
                    Apresenta(dados[i].data_nascimento)
                    break
                case "Altura":
                    Apresenta(dados[i].altura)
                    break
                case "Sexo":
                    Apresenta(dados[i].sexo)
                    break
                case "Nacionalidade":
                    Apresenta(dados[i].nacionalidade)
                    break
                default:
                    Apresenta(dados[i].nome)
                    Apresenta(dados[i].data_nascimento)
                    Apresenta(dados[i].altura)
                    Apresenta(dados[i].sexo)
                    Apresenta(dados[i].nacionalidade)   
                    break                 
            }
        }
    }   
}
function Apresenta(dado)
{
    let div = document.querySelector("div#ApresentaDados")
    div.innerHTML += "<p>" + dado + "</p>"
}