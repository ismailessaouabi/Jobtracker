<div class="flex py-10 w-[450px] flex-col gap-3 justify-start items-center  ">
    
    <h1  class="text-center text-4xl font-bold tracking-tight text-[#1A1A1A] ">Créer votre compte</h1>
    <p class=" text-center text-sm text-gray-600 ">Rejoignez-nous pour simplifier votre recherche d'emploi.</p>
    <form wire:submit.prevent="register" class=" w-full p-7 flex gap-7 bg-white flex-col justify-center items-start border border-gray-300 rounded-2xl">
        <div class="flex flex-col gap-2 w-full">
            <label for="name">Nom</label>
            <input placeholder="Entrez votre nom" type="text" class="p-2 border border-gray-300  outline-blue-500" id="name" wire:model="nom">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col gap-2 w-full">
            <label for="email">Email</label>
            <input placeholder="Entrez votre email" type="email" class="p-2 border border-gray-300 outline-blue-500" id="email" wire:model="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col gap-2 w-full">
            <label for="password">Password</label>
            <input placeholder="Entrez votre password" type="password" class="p-2 border outline-blue-500 border-gray-300" id="password" wire:model="password">
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col gap-2 w-full">
            <label for="password_confirmation">Confirm Password</label>
            <input placeholder="confirmez votre password" type="password" class="p-2 outline-blue-500 border border-gray-300" id="password_confirmation" wire:model="password_confirmation">
            @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button class=" cursor-pointer flex w-full justify-center rounded-lg bg-blue-700 px-3 
                        py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-800"        
                        type="submit">Register</button>
        <p class=" text-sm text-gray-600 ">Déjà un compte ? <a href="/login" class=" text-blue-600 hover:underline">Connectez-vous</a></p>                
    </form>
</div>