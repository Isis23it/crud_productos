@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">

  <div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Productos</h1>

    <a href="{{ route('productos.create') }}"
      class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
      + Agregar Producto
    </a>
  </div>

  <div class="bg-white shadow-md rounded-lg p-4">
    <h2 class="text-xl font-semibold mb-4">Listado de Productos</h2>

    <table class="w-full border-collapse">
      <thead>
        <tr class="bg-gray-200 text-left">
          <th class="p-3 font-semibold">ID</th>
          <th class="p-3 font-semibold">Nombre</th>
          <th class="p-3 font-semibold">Precio</th>
          <th class="p-3 font-semibold">Stock</th>
          <th class="p-3 font-semibold text-center">Acciones</th>
        </tr>
      </thead>

      <tbody>
        @forelse ($productos as $producto)
        <tr class="border-b hover:bg-gray-100">
          <td class="p-3">{{ $producto->id }}</td>
          <td class="p-3 font-medium">{{ $producto->nombre }}</td>
          <td class="p-3">${{ number_format($producto->precio, 2) }}</td>
          <td class="p-3">{{ $producto->cantidad }}</td>

          <td class="p-3 text-center flex gap-2 justify-center">

            <!-- EDITAR -->
            <a href="{{ route('productos.edit', $producto->id) }}"
              class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
              Editar
            </a>

            <!-- ELIMINAR -->
            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST"
              onsubmit="return confirm('¿Seguro que deseas eliminar este producto?')">
              @csrf
              @method('DELETE')

              <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
                Eliminar
              </button>
            </form>

          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="text-center py-4 text-gray-500">
            No hay productos registrados.
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>

  </div>
</div>
@endsection