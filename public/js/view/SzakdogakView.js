class SzakdogakView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ${elem.szakdoga_nev}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ${elem.tagokneve}
                </th>
                <td class="px-6 py-4">
                    <a href="${elem.githublink}">${elem.githublink}</a>
                </td>
                <td class="px-6 py-4">
                    <a href="${elem.oldallink}">${elem.oldallink}</a>
                </td>
                <td class="px-6 py-4">
                    <div class="px-4 py-3 text-right sm:px-6">
                        <button type="button" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" id="szakdogaModosit${elem.id}">Módosítás</button>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="px-4 py-3 text-right sm:px-6">
                        <button type="button" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" id="szakdogaTorol${elem.id}">Törlés</button>
                    </div>
                </td>
            </tr>
        `);

        this.torolElem = $(`#szakdogaTorol${elem.id}`);
        this.torolElem.on("click", ()=>{
            this.kattintasTrigger("torol");
        });
    }

    kattintasTrigger(esemenyNeve){
        const esemeny = new CustomEvent(esemenyNeve, {detail:this.#elem.id});
        window.dispatchEvent(esemeny);
    }
}

export default SzakdogakView;