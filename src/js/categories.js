const categorieSelect = document.querySelectorAll("select.alim-select");
const alimentSelect = document.querySelectorAll("select.aliments");

for(let i = 0; i < categorieSelect.length; i++){
    const categ = categorieSelect[i];
    const aliment = alimentSelect[i]; 

    categ.onchange = async()=>{
        //console.log(categorieSelect.indexOf(element));
        let value = categ.options[categ.selectedIndex].value;

        if(value === "null") return;

        const formData = new FormData();
        formData.append('type', value);
        
        const res = await fetch("../classes/Formulaire.php",{
            method: "POST",
            body: formData,
        });

        const content = JSON.parse(await res.text());
        //console.log(content);

        //const alimentList = document.getElementsByClassName("aliments");

        while(aliment.childElementCount !== 0){
            aliment.removeChild(aliment.lastChild);
        }

        for(let alim of content){
            //console.log(aliment['IdAliment']);
            const alimentOption = document.createElement("option");
            alimentOption.value = alim['IdAliment'];
            alimentOption.innerText = alim['LabelAliment'];

            aliment.appendChild(alimentOption);
        }
    }
    
}

//const categories = document.getElementsByClassName('aliments');

// categories.onchange = async() => {
//     let value = categories.options[categories.selectedIndex].value;

//     if(value === "null") console.log("guignol");
//     else{
//         console.log(value);
//     }
// }

// categorieSelect.forEach(element => {
//     element.addEventListener('change', function(){
//         let selectedCateg = this.value;
//         console.log(selectedCateg);

//         fetch('../classes/Formulaire.php?categorie=' + selectedCateg)
//             .then(function(response){
//                 if(response.ok){
//                     return response.text();
//                 }else{
//                     throw new Error('Erreur lors de la récupération des données');
//                 }
//             })
//             .then(function(data){
//                 let alimentsDiv = document.querySelector('div#categorie select.aliments');
//                 console.log(alimentsDiv);
//                 //alimentsDiv.innerHTML = data
//             })
//             .catch(function(error){
//                 console.error('erreur : ' + error);
//             });
            
//     });
// });