function Confirmer(){
    var date = document.getElementById('date');
    var numero = document.getElementById('numero');
    var libelle = document.getElementById('libelle');
    var montant = document.getElementById('montant');
    if(date.value.length != 10){
        alert('le champ "date de la transaction" doit contenir 10 caractaire');
        date.focus();
        return false
    };
    if(numero.value.length != 20){
        alert('le champ "numero du compte" doit contenir 20 caractaire');
        numero.focus();
        return false
    };
    if(libelle.value.length == 0){
        alert('le champ "libelle de la transaction" est vide ');
        libelle.focus();
        return false
    };
    if(parseFloat(montant.value)<0){
        alert('le champ "montant de la transaction" doit etre positif ');
        montant.focus();
        return false
    }
}
function lister(){
    var num = document.getElementById('num');
    var pass = document.getElementById('pass');
    if(num.value.length != 20){
        alert('la case "numero compte" doit etre compose par 20 chiffres');
        num.focus();
        return false
    }
    if(pass.value.length != 8){
        alert('la case "mot de passe" doit etre compose par 8 caractere');
        num.focus();
        return false
    }
}