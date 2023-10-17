function addToIdFromDobLeft(){
    const birthDate = document.getElementById('birthDate1InputLeft').value;
    const firstOfId = String(birthDate);

    var idYear = firstOfId.slice(2,4);
    var idMonth = firstOfId.slice(5,7);
    var idDay = firstOfId.slice(8,);

    var idStart = idYear+idMonth+idDay;

    document.getElementById('idNo1InputLeft').value = idStart;

    var idLen = document.getElementById('idNo1InputLeft').value;

    var idLen = String(idLen).value;

    console.log(idLen)    
}

function addToIdFromDobMiddle(){
    const birthDate = document.getElementById('birthDate2InputMiddle').value;
    const firstOfId = String(birthDate);

    var idYear = firstOfId.slice(2,4);
    var idMonth = firstOfId.slice(5,7);
    var idDay = firstOfId.slice(8,);

    var idStart = idYear+idMonth+idDay;

    document.getElementById('idNo2InputMiddle').value = idStart;

    var idLen = document.getElementById('idNo2InputMiddle').value;

    var idLen = String(idLen).value;

    console.log(idLen);

}

function addToIdFromDobRight(){
    const birthDate = document.getElementById('birthDate3InputRight').value;
    const firstOfId = String(birthDate);

    var idYear = firstOfId.slice(2,4);
    var idMonth = firstOfId.slice(5,7);
    var idDay = firstOfId.slice(8,);

    var idStart = idYear+idMonth+idDay;

    document.getElementById('idNo3InputRight').value = idStart;

    var idLen = document.getElementById('idNo3InputRight').value;

    var idLen = String(idLen).value;

    console.log(idLen)    
}

// function checkDuplicateID(){
//     // var firstName1 = document.getElementById('name1Input').value;
//     var firstName2 = document.getElementById('name2Input').value;

//     if(firstName2 == document.getElementById('name1Input').value){
//         alert('ID already used');
//     }

//     return;

// };

function postValues(x){
    if(x == 1)
    {
       var name1 = document.getElementById('firstName1').value;
       var surname1 = document.getElementById('surname1').value;
       var birthday1 = document.getElementById('birthdate1').value;
       var id1 = document.getElementById('idnumber1').value;
    }
    elseif(x == 2)
    {
        var name2 = document.getElementById('firstName2').value;
        var surname2 = document.getElementById('surname2').value;
        var birthday2 = document.getElementById('birthdate2').value;
        var id2 = document.getElementById('idnumber2').value;
    }
    elseif(x == 3)
    {
        var name3 = document.getElementById('firstName3').value;
        var surname3 = document.getElementById('surname3').value;
        var birthday3 = document.getElementById('birthdate3').value;
        var id3 = document.getElementById('idnumber3').value;
    }
}

function createPeople(name,surname,birthday,id){
    document.getElementById('mainContainer').setAttribute('style', 'display:none !important');
}

// function validate() {
//     var firstname1 = document.getElementById('name1Input').value;
//     var firstname2 = document.getElementById('name2Input').value;
//     var firstname3 = document.getElementById('name3Input').value;
//     if (firstname1 == firstname2) {
//         alert("You have multiple of the same ID numbers");
//         return false;
//     }

//     return true;
// }