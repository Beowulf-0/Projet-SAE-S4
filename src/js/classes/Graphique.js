import { IGraphique } from "../interfaces/IGraphique.js";


export class Graphique extends IGraphique {
    createPieChart(listeLabels, listeData) {
        var ctx = document.getElementsByClassName("graphique");

        for (let i = 0; i < ctx.length; i++) {
            let context = ctx[i].getContext("2d");
            var myChart = new Chart(context, {
                type: 'pie',
                data: {
                    labels: listeLabels[i],
                    datasets: [{
                        label: '# de ventes',
                        data: listeData[i],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });
        }
    }


    async loadingChart() {
        const resp = await fetch('../classes/Resultats.php?getComptesCategories');


        const data = await resp.json();

        let listeData_categ = [];
        let listeData_vegan = [];
        let listeData_bio = [];

        let listeLabels_categ = [];
        let listeLabels_vegan = [];
        let listeLabels_bio = [];

        for (let i = 0; i < data[0].length; i++) {
            listeData_categ.push(data[0][i]['nombreAliments']);
            listeLabels_categ.push(data[0][i]['NomCategorie']);
        }

        for (let i = 0; i < data[1].length; i++) {
            listeData_bio.push(data[1][i]['nombreAliments']);
            listeLabels_bio.push(data[1][i]['BioOuPas']);
        }

        for (let i = 0; i < data[2].length; i++) {
            listeData_vegan.push(data[2][i]['nombreAliments']);
            listeLabels_vegan.push(data[2][i]['VeganOuPas']);
        }


        return {
            listeData_categ, listeLabels_categ,
            listeData_bio, listeLabels_bio,
            listeData_vegan, listeLabels_vegan
        };
    }


    init() {
        let graphSelect = document.querySelector("div#graphique");

        let contentChart = this.loadingChart();

        //Par catégorie
        let data_categ;
        let labels_categ;

        //Données bio
        let data_bio;
        let labels_bio;

        //Vegan
        let data_vegan;
        let labels_vegan;

        contentChart.then(({ listeData_categ, listeLabels_categ, listeData_bio, listeLabels_bio, listeData_vegan, listeLabels_vegan }) => {
            data_categ = listeData_categ;
            labels_categ = listeLabels_categ;

            data_bio = listeData_bio;
            labels_bio = listeLabels_bio;

            data_vegan = listeData_vegan;
            labels_vegan = listeLabels_vegan;

            this.createPieChart([labels_categ, labels_bio, labels_vegan], [data_categ, data_bio, data_vegan]);
        });
    }

    constructor() {
        super();
        this.init();
    }
}