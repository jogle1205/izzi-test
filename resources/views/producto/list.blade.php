<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bandeja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded   -lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <table>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($productos as $producto)
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1566559532061-6486aa691226?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80" alt="">
                              </div>
                              <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                  {{ $producto->nombre }}
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-8 py-6 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $producto->descripcion }}</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">${{ $producto->precio}}</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $producto->categoria->nombre}}</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $producto->sucursal->nombre}}</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $producto->fecha_compra}}</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font- medium">
                            <a href="{{ route('edit-producto',$producto->id) }}" class="text-yellow-500 hover:text-yellow-800 mx-5">Editar</a>


                            <form method="post" action="{{route('delete-producto',$producto->id)}}">
                                @method('post')
                                @csrf
                                <button type="submit" class="text-indigo-500 hover:text-indigo-800 mx-5">Eliminar</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                        <!-- More people... -->
                      </tbody>
                  </table>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>