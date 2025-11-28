<div class="bg-[#f8f9fa] w-full flex justify-center items-center ">
    <div class="flex flex-col gap-2 w-[800px] bg-white h-fit p-7 my-20 shadow-2xl">
        <h1 class="text-3xl font-bold  " >Nouvelle Candidature        </h1>
        <p class="text-text-secondary dark:text-gray-400 text-sm">Remplissez les informations ci-dessous pour ajouter une nouvelle candidature à votre suivi.        </p>
        <form wire:submit.prevent="ajouter" class="flex w-full flex-col gap-3">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Erreur!</strong>
                    <span class="block sm:inline">Veuillez corriger les erreurs suivantes:</span>
                    <ul class="mt-2 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                
            @endif
            <div class="w-full flex gap-2 flex-wrap justify-between">
                <x-input type="text" wiremodel="titre_offre" title="Intitulé du poste" placeholder="ex: Developpeur fullstack"/>
                <x-input type="text" wiremodel="entreprise" title="Entreprise" placeholder="ex: Google"/>
                <x-input type="text" wiremodel="lieu" title="Lieu" placeholder="ex: Paris"/> 
                <x-input type="date" wiremodel="date_candidature" title="Date de candidature" placeholder="ex: 2024-01-01"/>
                <x-input type="url" wiremodel="lien_offre" title="Lien de l'offre" placeholder="ex: https://..."/>
                <x-input type="text" wiremodel="platforme" title="platforme" placeholder="ex: indeed"/> 
                <x-input type="email" wiremodel="email" title="email d'entreprise" placeholder="ex ismail@gmail.com" />
                <x-input type="text" wiremodel="type" title="type de poste" placeholder="ex: public" />
            </div>
           
            
            <div class="w-full flex gap-2 justify-between">               
                <div class="w-full">
                    <label for="poste">Statut</label>
                    <select wire:model="status" class="appearance-none flex w-full min-w-0 flex-1 border border-gray-200 overflow-hidden rounded-lg      bg-white   p-3 text-base font-normal leading-normal" id="status">
                        <option>En attente</option>
                        <option>Entretien</option>
                        <option>Offre</option>
                        <option>Refusé</option>
                    </select>
                </div>
            </div>
            

            <div>
                <label class="font-semibold"for="poste">Description</label>
                <textarea wire:model="description_offre" id="poste" name="poste" placeholder="Intitulé du poste" class="w-full border border-gray-300 rounded h-20 p-2"></textarea>
            </div>

            <div class="flex items-center justify-end gap-4 p-6 border-t border-gray-200 dark:border-gray-800">
                <button
                    class="px-4 py-2 rounded-lg text-sm font-semibold cursor-pointer text-text-primary dark:text-gray-300 bg-white dark:bg-gray-800 border border-border-color dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary/50 dark:focus:ring-offset-background-dark"
                    type="button">Annuler</button>
                <button
                    class="px-4 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-500 transition cursor-pointer"
                    type="submit">Enregistrer la candidature</button>
            </div>
        </form>
    </div>
</div>
