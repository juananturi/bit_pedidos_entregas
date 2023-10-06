
<x-layouts.main-layout>
<div class="container">
    <h1>Resumen de Ventas</h1>

    <!-- Ventas por día -->
    <div class="card">
        <div class="card-header">
            Ventas por Día
        </div>
        <div class="card-body">
            <p>Total de Ventas hoy: ${{ $ventasHoy->total }}</p>
            <p>Cantidad de Pedidos hoy: {{ $ventasHoy->cantidad }}</p>
        </div>
    </div>

    <!-- Ventas por semana -->
    <div class="card mt-4">
        <div class="card-header">
            Ventas por Semana
        </div>
        <div class="card-body">
            <p>Total de Ventas esta semana: ${{ $ventasSemana->total }}</p>
            <p>Cantidad de Pedidos esta semana: {{ $ventasSemana->cantidad }}</p>
        </div>
    </div>

    <!-- Ventas por mes -->
    <div class="card mt-4">
        <div class="card-header">
            Ventas por Mes
        </div>
        <div class="card-body">
            <p>Total de Ventas este mes: ${{ $ventasMes->total }}</p>
            <p>Cantidad de Pedidos este mes: {{ $ventasMes->cantidad }}</p>
        </div>
    </div>
</div>
</x-layouts.main-layout>