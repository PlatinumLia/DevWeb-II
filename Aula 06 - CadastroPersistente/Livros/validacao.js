function validar(){
    let titulo = document.querySelector('#titulo').value;
    let genero = document.querySelector('#genero').value;  
    let numPaginas = document.querySelector('#numPaginas').value;  
    let autor = document.querySelector('#autor').value;  
    let erro = document.querySelector('#divErro');

    //console.log(titulo + " - " + genero + " - " + numPaginas + " - " + autor);
    if(titulo.trim() == ''){
        erro.innerHTML = "Informe o título";
        return false;
    }else if(genero.trim() == ''){
        erro.innerHTML = "Informe o genero";
        return false;
    }else if(numPaginas.trim() == ''){
        erro.innerHTML = "Informe o número de páginas";
        return false;
    }else if(autor.trim() == ''){
        erro.innerHTML = "Informe o autor";
        return false;
    }

    //caso passou as validações, retorna true
    return true;
}