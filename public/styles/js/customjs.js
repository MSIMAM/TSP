//wannan function din zai nuna mana kalma na "Ni button ne!"
function nunamanaButton(message){

    //wannan shine zai nuna mana result a console
    console.log(message)

    //wannan shine zai nuna mana "Ni button ne!" acikin alert dialog
    alert(message)
}


//wannan shi Zai hada surname, firstname, lastname a waje daya
function concatenate(surname,firstName,lastName){

    var fullName
    fullName=surname +' '+firstName+' '+lastName

    return fullName
}
//wannan shi zai printing mana fullname
function printFullName(){

    var fullName = concatenate("Mudi", "Musa", "Ado")

    console.log(fullName)
    alert(fullName)
}