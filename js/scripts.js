function addToIdFromDob(){
    const birthDate = document.getElementById('birthDateInput').value;
    const firstOfId = String(birthDate);

    var idYear = firstOfId.slice(2,4);
    var idMonth = firstOfId.slice(5,7);
    var idDay = firstOfId.slice(8,-1);

    var idStart = idYear+idMonth+idDay;

    document.getElementById('idNoInput').value = idStart;

    
}
