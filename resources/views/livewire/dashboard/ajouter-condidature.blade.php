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
            <h2 class="pt-6 text-2xl font-semibold">Informations Clés</h2>
            <div class="w-full flex gap-2 justify-between">
                <div class="w-1/2">
                    <label class="font-semibold" >Titre du poste</label>
                    <input wire:model="titre_offre" placeholder="ex: Développeur Full-Stack" type="text" class="w-full border border-gray-300 rounded p-2">
                </div>
                <div class="w-1/2">
                    <label class="font-semibold">Entreprise</label>
                    <input wire:model="nom_entreprise" placeholder="ex: Google" type="text"  class="w-full border border-gray-300 rounded p-2">
                </div>
            </div>
            <div>
                <label class="font-semibold">Lien vers l'offre</label>
                <input placeholder="https://careers.google.com/..." type="text" wire:model="lien_offre"  class="w-full border border-gray-300 rounded p-2">
            </div>
            <div>
                <label class="font-semibold">Email d'entreprise</label>
                <input placeholder="Ex: name@gmail.com" type="email" wire:model="email_entreprise"  class="w-full border border-gray-300 rounded p-2">
            </div>
            <h2 class="pt-6 text-2xl font-semibold">Suivi</h2>
            <div class="w-full flex gap-2 justify-between">
                <div class="w-1/2">
                    <label class="font-semibold">Date de soumission                    </label>
                    <input placeholder="Sélectionner une date" type="date"   class="w-full border border-gray-300 rounded p-3 placeholder">
                </div>
                <div class="w-1/2">
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
                <label class="font-semibold">Type offre</label>
                <input placeholder="https://careers.google.com/..." type="text" wire:model="type_offre"  class="w-full border border-gray-300 rounded p-2">
            </div>

            <h2 class="pt-6 text-2xl font-semibold">Details</h2>
            <div>
                <label class="font-semibold"for="poste">Description</label>
                <textarea wire:model="description_offre" id="poste" name="poste" placeholder="Intitulé du poste" class="w-full border border-gray-300 rounded p-2"></textarea>
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
