@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8">
  <h1 class="text-3xl font-bold mb-6">Crear Producto</h1>

  <form action="{{ route('productos.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
      <label class="font-semibold block mb-2">Nombre</label>
      <input type="text" name="nombre" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div>
      <label class="font-semibold block mb-2">Descripción</label>
      <textarea name="descripcion" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
    </div>

    <div>
      <label class="font-semibold block mb-2">Precio</label>
      <input type="number" step="0.01" name="precio" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div>
      <label class="font-semibold block mb-2">Stock</label>
      <input type="number" name="stock" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="flex gap-4">
      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
        Guardar
      </button>
      <a href="{{ route('productos.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
        Cancelar
      </a>
    </div>
  </form>
</div>
@endsection