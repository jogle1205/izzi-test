<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('store-producto') }}">
                        @csrf

                        <!-- Nombre -->
                        <div>
                            <x-label for="nombre" :value="__('Nombre')" />
                            <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
                        </div>

                        <!-- Descripcion -->
                        <div>
                            <x-label for="descripcion" :value="__('Descripcion')" />
                            <x-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('descripcion')" required autofocus />
                        </div>

                        <!-- Categoria -->
                        <div>
                            <x-label for="categoria_id" :value="__('Categoria')" />
                            <select class="block mt-1 w-full rounded" name="categoria_id" :value="old('categoria_id')" required autofocus>
                                @if($categoria->count() > 0)
                                  @foreach($categoria as $cat)
                                   <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                                  @endForeach
                                @else
                                    Sin Categorias
                                @endif   
                            </select>
                        </div>

                        <!-- Sucursal -->
                        <div>
                            <x-label for="sucursal_id" :value="__('Sucursal')" />
                            <select class="block mt-1 w-full rounded" name="sucursal_id" :value="old('sucursal_id')" required autofocus>
                                @if($sucursal->count() > 0)
                                  @foreach($sucursal as $s)
                                   <option value="{{$s->id}}">{{$s->nombre}}</option>
                                  @endForeach
                                @else
                                    Sin Categorias
                                @endif   
                            </select>
                        </div>

                        <!-- Precio  -->
                        <div>
                            <x-label for="precio" :value="__('Precio')" />
                            <x-input class="block mt-1 w-full" type="text" name="precio" :value="old('precio')" required autofocus type="number" min="0" step="1" max='99999'/>
                        </div>

                        <div class="relative">
  
                        <!-- Fecha Compra  -->
                        <div>
                            <x-label for="fecha_compra" :value="__('Fecha de compra')" />
                            <!--<x-input id="fecha_compra" class="block mt-1 w-full" type="text" name="fecha_compra" :value="old('fecha_compra')" required autofocus />-->

                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input id="fecha_compra" datepicker="" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Selecciona una fecha" name="fecha_compra" :value="old('fecha_compra')" required autofocus autocomplete="off"/>
                            </div>

                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Registrar') }}
                            </x-button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>