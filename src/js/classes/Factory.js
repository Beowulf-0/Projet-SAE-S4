import { Graphique } from "./Graphique";
import { Categories } from "./Categories";

export class Factory {
    getGraphique() {
        return new Graphique();
    }

    getCategories() {
        return new Categories();
    }

}