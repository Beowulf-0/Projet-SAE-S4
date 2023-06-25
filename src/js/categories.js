const categorieSelect = document.querySelectorAll("select.alim-select");
const alimentSelect = document.querySelectorAll("select.aliments");

for(let i = 0; i < categorieSelect.length; i++){
    const categ = categorieSelect[i];
    const aliment = alimentSelect[i]; 

    categ.onchange = async()=>{
        let value = categ.options[categ.selectedIndex].value;

        if(value === "null") return;

        const formData = new FormData();
        formData.append('type', value);
        
        const res = await fetch("../classes/Formulaire.php",{
            method: "POST",
            body: formData,
        });

        const content = JSON.parse(await res.text());

        while(aliment.childElementCount !== 0){
            aliment.removeChild(aliment.lastChild);
        }

        for(let alim of content){
            const alimentOption = document.createElement("option");
            alimentOption.value = alim['IdAliment'];
            alimentOption.innerText = alim['LabelAliment'];

            aliment.appendChild(alimentOption);
        }
    }
    
}