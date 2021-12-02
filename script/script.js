function validar(){
    var nome = form.nome.value; 
    var email = form.email.value;
    var telefone = form.telefone.value;
    var mensagem = form.mensagem.value;
    var formulario = form;


    if(nome == ""){
        alert('Preencha o campo nome');
        form.nome.focus();
        return false;
    }

    else if (email == ""  ){  
        alert("Falta informar seu e-mail");
        form.email.focus();
        return false;
    }

    else if (telefone == ""){
        alert("Falta informar seu telefone");
        form.telefone.focus();
    return false;
    }

    else if (mensagem == ""){
        alert("Falta informar a mensagem desejada");
        form.mensagem.focus();
        return false;
    }

        
   
}




function mascara(o, f) {
    setTimeout(function() {
      var v = tel(o.value);
      if (v != o.value) {
        o.value = v;
      }
    }, 1);
  }
  
  function tel(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
      r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
      r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
      r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
      r = r.replace(/^(\d*)/, "($1");
    }
    return r;
    
  }



  function checarEmail(){
    if( document.forms[0].email.value=="" 
    || document.forms[0].email.value.indexOf('@')==-1 
        || document.forms[0].email.value.indexOf('.')==-1 )
        {
        alert( "Por favor, informe um E-MAIL válido!" );
        return false;
        }
    }

