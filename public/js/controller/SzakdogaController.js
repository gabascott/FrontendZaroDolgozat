import AdatModel from "../model/AdatModel.js";
import SzakdogakView from "../view/SzakdogakView.js";

class SzakdogaController{
    constructor(){
        const token = $(`meta[name="csrf-token"]`).attr("conent");
        const szakdogamodel = new AdatModel(token);
        szakdogamodel.adatBe('/api/szakdogak', this.megjelenit);
    }

    megjelenit(tomb){
        let szuloElem = $(".szakdolgozatoklistazasa");
        tomb.forEach(szakdoga => {
            new SzakdogakView(szakdoga, szuloElem);
        });
    }
}

export default SzakdogaController;