function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
   }
   function execmascara(){
    v_obj.value=v_fun(v_obj.value)
   }
   function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
   }
   function id( el ){
   return document.getElementById( el );
   }
   window.onload = function(){
   id('telefone').onkeypress = function(){
   mascara( this, mtel );
   }
}
   

function mascaraCep(t, mask) {
    var i = t.value.length;
    var saida = mask.substring(1, 0);
    var texto = mask.substring(i)
        if (texto.substring(0, 1) != saida) {
        t.value += texto.substring(0, 1);
        }
    }
   


function verificaEvento(){
    var presencial = document.getElementById('presencial').value

    if(presencial == 'nao'){
        if(document.getElementById('cep').getAttribute('type') == 'text'){
            
            document.getElementById('cep').setAttribute('type', 'hidden')
            document.getElementById('rua').setAttribute('type', 'hidden')
            document.getElementById('bairro').setAttribute('type', 'hidden')
            document.getElementById('cidade').setAttribute('type', 'hidden')
        }       
      
        var link = document.getElementById('link')
        link.setAttribute( 'type', 'text')

    }else if(presencial == 'sim'){
        
        if(document.getElementById('link').getAttribute('type') == 'text'){
            document.getElementById('link').setAttribute('type', 'hidden') 
       }
        
        var cep = document.getElementById('cep')
        cep.setAttribute('type', 'text')

        var rua = document.getElementById('rua')
        rua.setAttribute('type', 'text')

        var bairro = document.getElementById('bairro')
        bairro.setAttribute('type', 'text')

        var cidade = document.getElementById('cidade')
        cidade.setAttribute('type', 'text')
    }
}

function retorno(){
        
        var retorno = document.getElementById('retorno')
        retorno.textContent = 'O seu evento foi agendado com sucesso!'
}
