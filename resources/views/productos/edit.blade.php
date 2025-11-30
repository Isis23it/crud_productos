@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8">
  <h1 class="text-3xl font-bold mb-6">Editar Producto</h1>

  <form action="{{ route('productos.update', $producto) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
      <label class="font-semibold">Nombre</label>
      <input type="text" name="nombre" value="{{ $producto->nombre }}"
        class="w-full border-gray-300 rounded" required>
    </div>

    <div>
      <label class="font-semibold">Descripción</label>
      <textarea name="descripcion" class="w-full border-gray-300 rounded">{{ $producto->descripcion }}</textarea>
    </div>

    <div>
      <label class="font-semibold">Precio</label>
      <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}"
        class="w-full border-gray-300 rounded" required>
    </div>

    <div>
      <label class="font-semibold">Stock</label>
      <input type="number" name="stock" value="{{ $producto->stock }}"
        class="w-full border-gray-300 rounded" required>
    </div>

    <button class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">
      Actualizar
    </button>
  </form>
</div>
@endsection